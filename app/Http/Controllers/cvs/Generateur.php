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
use Illuminate\Support\Facades\Response;


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
      if($projets->isEmpty()){
        $objRefs[] = [
          'id' => $value->ID_Ref,
          'client' => $value->client,
          'annee' => $value->annee,
          'missions' => $value->missions,
          'category' => $value->category,
        ];
      }else{
        foreach ($projets as $key => $value1) {
        if($value1->ID_reference == $value->ID_Ref){
          $objRefs[] = [
            'id' => $value->ID_Ref,
            'client' => $value->client,
            'annee' => $value->annee,
            'missions' => $value->missions,
            'category' => $value->category,
            'missionsParticipe' => $value1->missions,
          ];
        }else{
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
    File::makeDirectory($ao_folder_path, 0777, true);

    foreach ($cvs as $cv) {
        $cv_folder_name = $cv['nom'] . '_' . $cv['prenom'];
        $cv_folder_path = $ao_folder_path . DIRECTORY_SEPARATOR . $cv_folder_name;
        File::makeDirectory($cv_folder_path, 0777, true);

        $file_name = $cv_folder_name . '.docx';
        $template = new TemplateProcessor(storage_path('app/public/models/'.$langue_module.'/'.$model.'.docx'));
        $template->setValue('nom', $cv['nom']);
        $template->setValue('prenom', $cv['prenom']);
        $template->setValue('email', $cv['email']);
        $template->setValue('phone', $cv['telephonePortable']);
        $template->setValue('date_naissance', $cv['dateNaissance']);
        $template->setValue('nationalite', $cv['nationalite']);
        $template->setValue('role', $cv['role']);

        $formations = $cv['formations'];
        $variables = $template->getVariables();
        $foramtionAttr = ['etablissement', 'obtention', 'intitule'];
        $template->cloneRow('etablissement', count($formations));
        foreach ($formations as $key => $value) {
            foreach ($foramtionAttr as $attr) {
                if(in_array($attr, $variables)){
                  $template->setValue($attr . '#' . ($key + 1), $value[$attr]);
                }
            }
        }

        $experiences = $cv['experiences'];
        $template->cloneRow('dateDebut', count($experiences));
        $experiencesData = ['employeur', 'poste', 'dateDebut', 'dateFin', 'taches'];
        foreach($experiences as $key => $value){
            foreach ($experiencesData as $attr) {
              if(in_array($attr, $variables)){
                if($attr == 'taches'){
                  $taches = $value['taches'];
                  $tachesStr = '';
                  foreach ($taches as $key1 => $value1) {
                      $tachesStr .= $value1['tache'] . '/ ';
                  }
                  $template->setValue($attr . '#' . ($key + 1), $tachesStr);
                }else{
                    $template->setValue($attr . '#' . ($key + 1), $value[$attr]);
                }
              }
            }
        }

        //set langues from string to array
        $langues = explode(',', $cv['langue']);
        $niveaux = explode(',', $cv['niveauLangue']);
        $template->cloneRow('langue', count($langues));
        foreach ($langues as $key => $value) {
            $template->setValue('langue#' . ($key + 1), $value);
            $template->setValue('niveauLangue#' . ($key + 1), $niveaux[$key]);
        }
        
        $file_path = $cv_folder_path . DIRECTORY_SEPARATOR . $file_name;

        $Employee = Informations::where('ID_Salarie', $cv['id'])->first();
        $photoIdentite = $Employee->PhotoIdentite;
        $photoIdentite = storage_path('app/public/photos/' . $photoIdentite);
        $ext = pathinfo($photoIdentite, PATHINFO_EXTENSION);
        $cv['photo'] = 'photo' . '.'. $ext;
        File::copy($photoIdentite, $cv_folder_path . DIRECTORY_SEPARATOR . $cv['photo']);

        $formations = Formations::where('ID_Salarie', $cv['id'])->get();
        foreach ($formations as $key => $value) {
            if ($value->diplome != null) {
                $diplome = $value->diplome;
                $diplome = storage_path('app/public/formations/' . $diplome);
                $ext = pathinfo($diplome, PATHINFO_EXTENSION);
                $name = 'certificat_' . $value->intitule . '.' . $ext;
                File::copy($diplome, $cv_folder_path . DIRECTORY_SEPARATOR . $name);
            }
        }
        

        $template->saveAs($file_path);
    }

    // $zip = new ZipArchive();
    // $zipFileName = public_path('cvs/' . $ao_name . '.zip');
    // if ($zip->open($zipFileName, ZipArchive::CREATE | ZipArchive::OVERWRITE) === true) {
    //     $this->addFolderToZip($zip, $ao_folder_path, $ao_folder_path);
    //     $zip->close();
    //     $downloadLink = asset('cvs/' . $ao_name . '.zip');
    //     return response()->json(['success' => true, 'message' => 'Zip file created successfully.', 'downloadLink' => $downloadLink]);
    // }

    // return response()->json(['success' => false, 'message' => 'Failed to create the zip file.']);
}

private function addFolderToZip($zip, $folderPath, $parentPath)
{
    $folderContents = glob($folderPath . '/*');

    foreach ($folderContents as $item) {
        if (is_dir($item)) {
            $this->addFolderToZip($zip, $item, $parentPath);
        } else {
            $relativeFilePath = ltrim(str_replace($parentPath, '', $item), '/\\');
            $zip->addFile($item, $relativeFilePath);
        }
    }
}

  public function deleteFolder(Request $request)
  {
    $folder = $request->folderName;
    $folder_path = public_path('cvs/' . $folder);
    File::deleteDirectory($folder_path);
    $zip_file_path = public_path('cvs/' . $folder . '.zip');
    File::delete($zip_file_path);
    return response()->json(['success' => true, 'message' => 'Folder deleted successfully.']);
  }
}
