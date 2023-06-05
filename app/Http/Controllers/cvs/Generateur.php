<?php

namespace App\Http\Controllers\cvs;

use App\Http\Controllers\Controller;
use App\Models\Experiences;
use Illuminate\Http\Request;
use App\Models\Taches;
use App\Models\Refs;
use App\Models\Projet;
use App\Models\Formations;
use App\Models\Informations;
use PhpOffice\PhpWord\TemplateProcessor;
use Illuminate\Support\Facades\File;
use ZipArchive;
use Illuminate\Support\Facades\Storage;


class Generateur extends Controller
{
  public function index()
  {
    return view('content.cvs.generateur-cvs');
  }

  public function generate()
  {
    return view('content.cvs.generate-cvs');
  }

  public function getEmpolyee($id)
  {
    //get employee where ID_Salarie = $id
    $employee = Informations::where('ID_Salarie', $id)->first();
    $objEmployee = [
      'id' => $employee->ID_Salarie,
      'nom' => $employee->Nom,
      'prenom' => $employee->Prenom,
      'email' => $employee->Email,
      'telephonePortable' => $employee->TelephonePortable,
      'telephoneFixe' => $employee->TelephoneFixe,
      'postal' => $employee->Code_Postal,
      'profil' => $employee->Profil,
      'photo' => $employee->PhotoIdentite,
      'dateNaissance' => $employee->DateNaissance,
      'lieuNaissance' => $employee->LieuNaissance,
      'nationalite' => $employee->Nationalite,
      'situationFamiliale' => $employee->SituationFamiliale,
      'nombreEnfants' => $employee->NombreEnfants,
      'adresse' => $employee->Adresse_1,
      'adresse2' => $employee->Adresse_2,
      'cnss' => $employee->NumeroCNSS,
      'cin' => $employee->CIN,
      'DateEmbauche' => $employee->DateEmbauche,
      'ContratTravailNumero' => $employee->ContratTravailNumero,
      'ContratDu' => $employee->ContratDu,
      'ContratAu' => $employee->ContratAu,
      'TypeContrat' => $employee->TypeContrat,
      'Poste' => $employee->Poste,
      'DepartementAffectation' => $employee->DepartementAffectation,
      'langue' => $employee->Langues,
      'niveauLangue' => $employee->Niveau,
    ];

    $formations = Formations::where('ID_Salarie', $id)->get();
    $objFormations = [];
    foreach ($formations as $key => $value) {
      $objFormations[] = [
        'id' => $value->ID_Formation,
        'intitule' => $value->intitule,
        'obtention' => $value->obtention,
        'etablissement' => $value->etablissement,
        'diplome' => $value->diplome,
      ];
    }
    $objEmployee['formations'] = $objFormations;

    //get experience where ID_Salarie = $id
    $experiences = Experiences::where('ID_Salarie', $id)->get();
    $objExperiences = [];
    foreach ($experiences as $key => $value) {
      //get taches where ID_Experience = $value->ID_Experience
      $taches = Taches::where('ID_Ref', $value->ID_Experience)->get();
      $objTaches = [];
      foreach ($taches as $key => $value1) {
        $objTaches[] = [
          'id' => $value1->ID_Tache,
          'tache' => $value1->tache,
        ];
      }
      $objExperiences[] = [
        'id' => $value->ID_Experience,
        'dateDebut' => $value->dateDebut,
        'dateFin' => $value->dateFin,
        'employeur' => $value->employeur,
        'poste' => $value->poste,
        'taches' => $objTaches,
      ];
    }
    $objEmployee['experiences'] = $objExperiences;



    $refs = Refs::where('archived', 0)->get();
    $objRefs = [];
    $projets = Projet::where('ID_Salarie', $id)->get();
    foreach ($refs as $key => $value) {
      if ($projets->isEmpty()) {
        $objRefs[] = [
          'id' => $value->ID_Ref,
          'client' => $value->client,
          'annee' => $value->annee,
          'missions' => $value->missions,
          'category' => $value->category,
        ];
      } else {
        foreach ($projets as $key => $value1) {
          if ($value1->ID_reference == $value->ID_Ref) {
            $objRefs[] = [
              'id' => $value->ID_Ref,
              'client' => $value->client,
              'annee' => $value->annee,
              'missions' => $value->missions,
              'category' => $value->category,
              'missionsParticipe' => $value1->missions,
            ];
          } else {
            $objRefs[] = [
              'id' => $value->ID_Ref,
              'client' => $value->client,
              'annee' => $value->annee,
              'missions' => $value->missions,
              'category' => $value->category,
            ];
          }
        }
      }
    }
    $objEmployee['refs'] = $objRefs;






    return response()->json($objEmployee);
  }

  public function generateCvs(Request $request)
  {
    $ao_name = $request->ao;
    $model = $request->model;
    $langue_module = $request->langue_module;
    $cvs = json_decode($request->cvs, true);
    $ao_folder_path = storage_path('app/public/cvs') . DIRECTORY_SEPARATOR . $ao_name;
    //check if ao folder exist
    if (File::exists($ao_folder_path)){
      File::deleteDirectory($ao_folder_path);
    }
    File::makeDirectory($ao_folder_path, 0777, true);
    $cv_folder_path = $ao_folder_path;

    $template = new TemplateProcessor(storage_path('app/public/models/' . $langue_module . '/' . $model . '.docx'));

    //clone block block_cv for each cv and set data for each cv
    $template->cloneBlock('block_cv', count($cvs), true, true);
    $file_name = 'cvtheque.docx';
    $data = ['nom', 'prenom', 'email', 'date_naissance', 'nationalite', 'role', 'phone'];
    $database = ['nom', 'prenom', 'email', 'dateNaissance', 'nationalite', 'role', 'telephonePortable'];
    $cvId = 1;
    foreach ($cvs as $cv) {
      for($j = 0; $j < count($data); $j++) {
        $template->setValue($data[$j] . '#' . $cvId, $cv[$database[$j]]);
      }

      $formations = $cv['formations'];
      $template->cloneRow('diplome#' . $cvId, count($formations));

      $variables = $template->getVariables();
      $foramtionAttr = ['etablissement', 'obtention', 'intitule'];
      $template->cloneRow('etablissement'.'#'. $cvId , count($formations));
      foreach ($formations as $key => $value) {
        foreach ($foramtionAttr as $attr) {
          if (in_array($attr.'#'. $cvId, $variables)) {
            $template->setValue($attr.'#'. $cvId . '#' . ($key + 1), $value[$attr]);
          }
        }
      }

      for ($i = 1; $i <= count($formations); $i++) {
        $diplome = $formations[$i - 1]['diplome'];
        $diplome = storage_path('app/public/formations/' . $diplome);
        $ext = pathinfo($diplome, PATHINFO_EXTENSION);
        $template->setImageValue('diplome'.'#'. $cvId . '#' . $i, array('path' => $diplome, 'width' => 580, 'height' => 300, 'ratio' => false));
      }

      $experiences = $cv['experiences'];
      $template->cloneRow('dateDebut'.'#'. $cvId , count($experiences));
      $experiencesData = ['employeur', 'poste', 'dateDebut', 'dateFin', 'taches'];
      foreach ($experiences as $key => $value) {
        foreach ($experiencesData as $attr) {
          if (in_array($attr.'#'. $cvId, $variables)) {
            if ($attr.'#'. $cvId == 'taches'.'#'. $cvId) {
              $taches = $value['taches'];
              $tachesStr = '';
              foreach ($taches as $key1 => $value1) {
                $tachesStr .= $value1['tache'] . '/ ';
              }
              $template->setValue($attr.'#'. $cvId . '#' . ($key + 1), $tachesStr);
            } else {
              $template->setValue($attr.'#'. $cvId . '#' . ($key + 1), $value[$attr]);
            }
          }
        }
      }

      $refs = $cv['refs'];
      foreach ($refs as $key => $value) {
        if(!isset($value['missionsParticipe'])) {
          unset($refs[$key]);
        }
      }
      $template->cloneRow('missions'.'#'. $cvId , count($refs));
      $refsData = ['client', 'annee', 'missions'];
      foreach ($refs as $key => $value) {
        foreach ($refsData as $attr) {
          if (in_array($attr.'#'. $cvId, $variables)) {
            if($attr.'#'. $cvId == 'missions'.'#'. $cvId) {
                $template->setValue($attr.'#'. $cvId . '#' . ($key + 1), $value['missionsParticipe']);
            } else {
              $template->setValue($attr.'#'. $cvId . '#' . ($key + 1), $value[$attr]);
            }
          }
        }
      }

      $langues = explode(',', $cv['langue']);
      $niveaux = explode(',', $cv['niveauLangue']);
      $template->cloneRow('langue#'. $cvId, count($langues));
      foreach ($langues as $key => $value) {
        $template->setValue('langue#' . $cvId . '#' . ($key + 1), $value);
        $template->setValue('niveauLangue#' . $cvId . '#' . ($key + 1), $niveaux[$key]);
      }
      $cvId++;
    }

    $template->saveAs($cv_folder_path . DIRECTORY_SEPARATOR . $file_name);
    $fileUrl = url('storage/cvs/' . $ao_name . '/' . $file_name);
    return response()->json(['success' => true, 'message' => 'CVs generated successfully.', 'fileUrl' => $fileUrl]);
  }

}
