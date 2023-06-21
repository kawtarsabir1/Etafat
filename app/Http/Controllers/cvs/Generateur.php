<?php

namespace App\Http\Controllers\cvs;

use App\Http\Controllers\Controller;
use App\Models\Experiences;
use Illuminate\Http\Request;
use App\Models\Taches;
use App\Models\Refs;
use App\Models\GeneratedAo;
use App\Models\Projet;
use App\Models\Post;
use App\Models\Formations;
use App\Models\Informations;
use PhpOffice\PhpWord\TemplateProcessor;
use Illuminate\Support\Facades\File;
use ZipArchive;
use App\Models\Aos;

class Generateur extends Controller
{
  public function index()
  {
    $generatedAos = GeneratedAo::all();
    $postes = Post::all();
    $aos = AOs::all();
    return view('content.cvs.generateur-cvs', compact('generatedAos' , 'postes', 'aos'));
  }

  public function generate()
  {
    //get generated aos
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

    $experiences = Experiences::where('ID_Salarie', $id)->get();
    $objExperiences = [];
    foreach ($experiences as $key => $value) {
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
    $missionsParticipe = '';
    foreach ($refs as $key => $value) {
      foreach($projets as $key => $value1) {
        if ($value1->ID_reference == $value->ID_Ref) {
          $missionsParticipe = $value1->missions;
        }
      }
      $objRefs[] = [
        'id' => $value->ID_Ref,
        'client' => $value->client,
        'annee' => $value->annee,
        'missions' => $value->missions,
        'objet' => $value->objet,
        'category' => $value->category,
        'missionsParticipe' => $missionsParticipe
      ];
    }
    $objEmployee['refs'] = $objRefs;






    return response()->json($objEmployee);
  }

  // public function generateCvs(Request $request)
  // {
  //   $ao_name = $request->ao;
  //   $model = $request->model;
  //   $langue_module = $request->langue_module;
  //   $cvs = json_decode($request->cvs, true);
  //   $ao_folder_path = storage_path('app/public/cvs') . DIRECTORY_SEPARATOR . $ao_name;
  //   if (File::exists($ao_folder_path)){
  //     File::deleteDirectory($ao_folder_path);
  //   }
  //   File::makeDirectory($ao_folder_path, 0777, true);
  //   $cv_folder_path = $ao_folder_path;

  //   $template = new TemplateProcessor(storage_path('app/public/models/' . $langue_module . '/' . $model . '.docx'));

  //   $template->cloneBlock('block_cv', count($cvs), true, true);
  //   $file_name = 'cvtheque.docx';
  //   $data = ['nom', 'prenom', 'email', 'date_naissance', 'nationalite', 'role', 'phone'];
  //   $database = ['nom', 'prenom', 'email', 'dateNaissance', 'nationalite', 'role', 'telephonePortable'];
  //   $cvId = 1;
  //   foreach ($cvs as $cv) {
  //     for($j = 0; $j < count($data); $j++) {
  //       $template->setValue($data[$j] . '#' . $cvId, $cv[$database[$j]]);
  //     }

  //     $formations = $cv['formations'];
  //     $template->cloneRow('diplome#' . $cvId, count($formations));

  //     $variables = $template->getVariables();
  //     $foramtionAttr = ['etablissement', 'obtention', 'intitule'];
  //     $template->cloneRow('etablissement'.'#'. $cvId , count($formations));
  //     foreach ($formations as $key => $value) {
  //       foreach ($foramtionAttr as $attr) {
  //         if (in_array($attr.'#'. $cvId, $variables)) {
  //           $template->setValue($attr.'#'. $cvId . '#' . ($key + 1), $value[$attr]);
  //         }
  //       }
  //     }

  //     for ($i = 1; $i <= count($formations); $i++) {
  //       $diplome = $formations[$i - 1]['diplome'];
  //       $diplome = storage_path('app/public/formations/' . $diplome);
  //       $ext = pathinfo($diplome, PATHINFO_EXTENSION);
  //       $template->setImageValue('diplome'.'#'. $cvId . '#' . $i, array('path' => $diplome, 'width' => 580, 'height' => 300, 'ratio' => false));
  //     }

  //     $experiences = $cv['experiences'];
  //     $template->cloneRow('dateDebut'.'#'. $cvId , count($experiences));
  //     $experiencesData = ['employeur', 'poste', 'dateDebut', 'dateFin', 'taches'];
  //     foreach ($experiences as $key => $value) {
  //       foreach ($experiencesData as $attr) {
  //         if (in_array($attr.'#'. $cvId, $variables)) {
  //           if ($attr.'#'. $cvId == 'taches'.'#'. $cvId) {
  //             $taches = $value['taches'];
  //             $tachesStr = '';
  //             foreach ($taches as $key1 => $value1) {
  //               $tachesStr .= $value1['tache'] . '/ ';
  //             }
  //             $template->setValue($attr.'#'. $cvId . '#' . ($key + 1), $tachesStr);
  //           } else {
  //             $template->setValue($attr.'#'. $cvId . '#' . ($key + 1), $value[$attr]);
  //           }
  //         }
  //       }
  //     }

  //     $refs = $cv['refs'];
  //     foreach ($refs as $key => $value) {
  //       if(!isset($value['missionsParticipe'])){
  //         $value['missionsParticipe'] = '';
  //       }
  //       if($value['missionsParticipe'] == '') {
  //         unset($refs[$key]);
  //       }
  //     }
  //     $template->cloneRow('missions'.'#'. $cvId , count($refs));
  //     $refsData = ['client', 'annee', 'missions'];
  //     foreach ($refs as $key => $value) {
  //       foreach ($refsData as $attr) {
  //         if (in_array($attr.'#'. $cvId, $variables)) {
  //           if($attr.'#'. $cvId == 'missions'.'#'. $cvId) {
  //               $template->setValue($attr.'#'. $cvId . '#' . ($key + 1), $value['missionsParticipe']);
  //           } else {
  //             $template->setValue($attr.'#'. $cvId . '#' . ($key + 1), $value[$attr]);
  //           }
  //         }
  //       }
  //     }

  //     $langues = explode(',', $cv['langue']);
  //     $niveaux = explode(',', $cv['niveauLangue']);
  //     if(count($langues) == 1 && $langues[0] == '') {
  //       $langues = [];
  //       $niveaux = [];
  //     }
  //     $template->cloneRow('langue#'. $cvId, count($langues));
  //     foreach ($langues as $key => $value) {
  //       $template->setValue('langue#' . $cvId . '#' . ($key + 1), $value);
  //       $template->setValue('niveauLangue#' . $cvId . '#' . ($key + 1), $niveaux[$key]);
  //     }
  //     $cvId++;
  //   }

  //   $template->saveAs($cv_folder_path . DIRECTORY_SEPARATOR . $file_name);
  //   $fileUrl = url('storage/cvs/' . $ao_name . '/' . $file_name);
  //   $this->SaveGeneratedCvs($ao_name, $model, $langue_module, $cvs);
  //   return response()->json(['success' => true, 'message' => 'CVs generated successfully.', 'fileUrl' => $fileUrl]);
  // }

  

  public function generateCvs(Request $request)
{
  
    $ao_name = $request->ao;
    $ao_name = str_replace('/', '-', $ao_name);
    $model = $request->model;
    $langue_module = $request->langue_module;
    $diplome_module = $request->diplome_module;
    $cvs = json_decode($request->cvs, true);
    $ao_folder_path = storage_path('app/public/cvs') . DIRECTORY_SEPARATOR . $ao_name; 
    if (File::exists($ao_folder_path)){
      File::deleteDirectory($ao_folder_path);
    }
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

        $countOfDiplomes = 0;
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
            // if(isset($value['diplome'])){
            //   $countOfDiplomes++;
            // }
        }
        $experiences = $cv['experiences'];
        $template->cloneRow('dateDebut', count($experiences));
        $experiencesData = ['employeur', 'poste', 'dateDebut', 'dateFin', 'taches'];
        foreach($experiences as $key => $value){
            foreach ($experiencesData as $attr) {
              if(in_array($attr, $variables)){
                if($attr == 'taches'){
                  $taches = $value['taches'];
                  // $tachesStr = '';
                  // foreach ($taches as $key1 => $value1) {
                  //   if(isset($value1['tache'])){
                  //     $tachesStr .= $value1['tache'] . '/ ';
                  //   }else{
                  //     $tachesStr .= $value1 . '/ ';
                  //   }
                  // }
                  $template->cloneBlock('taches_block'.'#'. ($key + 1), count($taches), true, true);
                  for($i = 0; $i < count($taches); $i++) {
                    $template->setValue($attr .'#'. ($key + 1) . '#' . ($i + 1), $taches[$i]['tache']);
                  }
                }else{
                    $template->setValue($attr . '#' . ($key + 1), $value[$attr]);
                }
              }
            }
        }

        if($diplome_module == "avec")
        {
            $template->cloneRow('diplome', $countOfDiplomes);
            foreach ($formations as $key => $value) {
                if(isset($value['diplome'])){
                  $diplome = $value['diplome'];
                  $diplome = storage_path('app/public/formations/' . $diplome);
                  $ext = pathinfo($diplome, PATHINFO_EXTENSION);
                  $template->setImageValue('diplome' . '#' . ($key+1), array('path' => $diplome, 'width' => 580, 'height' => 300, 'ratio' => false));
                }
            }
        }else{
          $template->cloneRow('diplome', 0);
        }
  

        $langues = explode(',', $cv['langue']);
        $niveaux = explode(',', $cv['niveauLangue']);
        if(count($langues) == 1 && $langues[0] == '' || count($niveaux) == 1 && $niveaux[0] == '') {
          $langues = [];
          $niveaux = [];
        }
        $template->cloneRow('langue', count($langues));
        foreach ($langues as $key => $value) {
            $template->setValue('langue#' . ($key + 1), $value);
            $template->setValue('niveauLangue#' . ($key + 1), $niveaux[$key]);
        }
        
        $file_path = $cv_folder_path . DIRECTORY_SEPARATOR . $file_name;

        $formations = Formations::where('ID_Salarie', $cv['id'])->get();
        // foreach ($formations as $key => $value) {
        //     if ($value->diplome != null) {
        //         $diplome = $value->diplome;
        //         $diplome = storage_path('app/public/formations/' . $diplome);
        //         $ext = pathinfo($diplome, PATHINFO_EXTENSION);
        //         $name = 'certificat_' . $value->intitule . '.' . $ext;
        //         File::copy($diplome, $cv_folder_path . DIRECTORY_SEPARATOR . $name);
        //     }
        // }

        $refs = $cv['refs'];
        foreach ($refs as $key => $value) {
          if(!isset($value['missionsParticipe'])){
            $value['missionsParticipe'] = '';
          }
          if($value['missionsParticipe'] == '') {
            unset($refs[$key]);
          }
          
        }

        $template->cloneRow('missions', count($refs));
        $refsData = ['client', 'annee', 'missions', 'objet' ];
        $index = 1;
        foreach ($refs as $key => $value) {
          foreach ($refsData as $attr) 
          {   
              if($attr == 'missions') {
                $value['missionsParticipe'] = explode(',', $value['missionsParticipe']);
                $template->cloneBlock('missions_block'.'#'. $index, count($value['missionsParticipe']), true, true);
                for($i = 0; $i < count($value['missionsParticipe']); $i++) {
                  $template->setValue('missions#' . $index . '#' . ($i + 1), $value['missionsParticipe'][$i]);
                }
              } else {
                $template->setValue($attr.'#'. $index, $value[$attr]);
                // echo $attr.'#'. $index;
              }
          }
          $index++;
        }
        

        $template->saveAs($file_path);
    }

    $this->SaveGeneratedCvs($ao_name, $model, $langue_module, $cvs);
    $zip = new ZipArchive();
    $zipFileName = storage_path('app/public/cvs/' . $ao_name . '.zip');
    if ($zip->open($zipFileName, ZipArchive::CREATE | ZipArchive::OVERWRITE) === true) {
        $this->addFolderToZip($zip, $ao_folder_path, $ao_folder_path);
        $zip->close();
        $downloadLink = url('storage/cvs/' . $ao_name . '.zip');
        return response()->json(['success' => true, 'message' => 'Zip file created successfully.', 'downloadLink' => $downloadLink]);
    }

    return response()->json(['success' => false, 'message' => 'Failed to create the zip file.']);
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
    $folder_path = storage_path('app/public/cvs/' . $folder);
    File::deleteDirectory($folder_path);
    $zip_file_path = storage_path('app/public/cvs/' . $folder . '.zip');
    File::delete($zip_file_path);
    return response()->json(['success' => true, 'message' => 'Folder deleted successfully.']);
  }

  public function getgeneratedCvs($id)
  {
    $ao = GeneratedAo::find($id);
    $jsonFilePath = storage_path('app/public/jsons/' . $ao->ao_nom . '-' . $ao->id . '.json');
    $json = file_get_contents($jsonFilePath);
    $cvs = json_decode($json, true);
    $ao->cvs = $cvs;
    $refs = Refs::all();
    $refsIds = [];
    for($i = 0; $i < count($refs); $i++) {
      $refsIds[] = $refs[$i]['ID_Ref'];
    }
    for($k = 0 ; $k < count($cvs) ; $k++) {
      $refsStored = $cvs[$k]['refs'];
      $refsStoredIds = [];
      for($j = 0; $j < count($refsStored); $j++) {
        $refsStoredIds[] = $refsStored[$j]['id'];
      }

      $keepRefs = [];
      $newRefs = [];

      foreach ($refsIds as $refId) {
          if (in_array($refId, $refsStoredIds) || in_array($refId, $keepRefs)) {
              $keepRefs[] = $refId;
          } else {
              $newRefs[] = $refId;
          }
      }

      $finalRefs = [];

      foreach ($refsStored as $ref) {
          if (in_array($ref['id'], $keepRefs)) {
              $finalRefs[] = $ref;
          }
      }

      foreach ($refs as $ref) {
          if (in_array($ref['ID_Ref'], $newRefs)) {
              $finalRefs[] = $ref;
          }
      }

      $cvs[$k]['refs'] = $finalRefs;
    }
    return response()->json(['success' => true, 'ao' => $ao]);
  }

  public function SaveGeneratedCvs($ao_name, $model, $langue_module, $cvs)
  {
    $ao_name = str_replace('/', '-', $ao_name);
    $ao = new GeneratedAo();
    $ao->ao_nom = $ao_name;
    $ao->modele = $model;
    $ao->langue = $langue_module;
    $ao->save();

    $jsonFilePath = storage_path('app/public/jsons/' . $ao_name . '-' . $ao->id . '.json');
    $jsonData = json_encode($cvs, JSON_PRETTY_PRINT);
    if ($jsonData === false) {
      return false;
    }

    $result = file_put_contents($jsonFilePath, $jsonData);

    if ($result === false) {
      return false;
    }
    return true;
  }
}
