<?php

namespace App\Http\Controllers\cvs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Taches;
use App\Models\Refs;
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

    $refs = Refs::where('ID_Salarie', $id)->get();
    $objRefs = [];
    foreach ($refs as $key => $value) {
      $objRefs[] = [
        'id' => $value->ID_Ref,
        'employeur' => $value->employeur,
        'poste' => $value->poste,
        'dateDebut' => $value->dateDebut,
        'dateFin' => $value->dateFin,
        'taches' => Taches::where('ID_Ref', $value->ID_Ref)->get(),
      ];
    }
    $objEmployee['refs'] = $objRefs;

    return response()->json($objEmployee);
  }

  public function generateCvs(Request $request)
{
    $ao_name = $request->ao;
    $model = $request->model;
    $cvs = json_decode($request->cvs, true);
    $ao_folder_path = public_path('cvs/' . $ao_name);
    File::makeDirectory($ao_folder_path, 0777, true);

    foreach ($cvs as $cv) {
        $cv_folder_name = $cv['nom'] . '_' . $cv['prenom'];
        $cv_folder_path = $ao_folder_path . DIRECTORY_SEPARATOR . $cv_folder_name;
        File::makeDirectory($cv_folder_path, 0777, true);

        $file_name = $cv_folder_name . '.docx';
        $template = new TemplateProcessor(storage_path('models/model1.docx'));
        $template->setValue('nom', $cv['nom']);
        $template->setValue('prenom', $cv['prenom']);
        $template->setValue('email', $cv['email']);
        $template->setValue('phone', $cv['telephonePortable']);
        $template->setValue('date_naissance', $cv['dateNaissance']);
        $template->setValue('nationalite', $cv['nationalite']);
        
        $file_path = $cv_folder_path . DIRECTORY_SEPARATOR . $file_name;
        $template->saveAs($file_path);
    }

    // Create a zip archive of the main folder
    $zip = new ZipArchive();
    $zipFileName = public_path('cvs/' . $ao_name . '.zip');
    if ($zip->open($zipFileName, ZipArchive::CREATE | ZipArchive::OVERWRITE) === true) {
        $this->addFolderToZip($zip, $ao_folder_path, $ao_folder_path);
        $zip->close();
        $headers = [
            'Content-Type' => 'application/zip',
            'Content-Disposition' => 'attachment; filename="' . $ao_name . '.zip"',
        ];
        // Provide download link on blade view
        $downloadLink = asset('cvs/' . $ao_name . '.zip');
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
    $folder_path = public_path('cvs/' . $folder);
    File::deleteDirectory($folder_path);
    $zip_file_path = public_path('cvs/' . $folder . '.zip');
    File::delete($zip_file_path);
    return response()->json(['success' => true, 'message' => 'Folder deleted successfully.']);
  }
}
