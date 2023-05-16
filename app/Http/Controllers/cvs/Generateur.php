<?php

namespace App\Http\Controllers\cvs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cursus;
use App\Models\Formations;
use App\Models\InformationsGenerales;
use PhpOffice\PhpWord\TemplateProcessor;

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
    $employee = InformationsGenerales::where('ID_Salarie', $id)->first();
    $objEmployee = [
      'id' => $employee->ID_Salarie,
      'nom' => $employee->Nom,
      'prenom' => $employee->Prenom,
      'email' => $employee->Email,
      'telephone' => $employee->Telephone,
      'telephonePortable' => $employee->TelephonePortable,
      'dateNaissance' => $employee->DateNaissance,
      'lieuNaissance' => $employee->LieuNaissance,
      'nationalite' => $employee->Nationalite,
      'situationFamiliale' => $employee->SituationFamiliale,
      'nombreEnfants' => $employee->NombreEnfants,
      'adresse' => $employee->Adresse,
      'ville' => $employee->Ville,
      'codePostal' => $employee->CodePostal,
      'pays' => $employee->Pays,
      'photo' => $employee->Photo,
      'cin' => $employee->CIN,
      'langue' => $employee->Langues,
      'niveauLangue' => $employee->Niveau,
    ];

    //get cursus where ID_Salarie = $id
    $cursus = Cursus::where('ID_Salarie', $id)->get();
    $objCursus = [];
    foreach ($cursus as $key => $value) {
      $objCursus[] = [
        'id' => $value->ID_Cursus,
        'idSalarie' => $value->ID_Salarie,
        'niveauEtudes' => $value->NiveauEtudes,
        'intituleDiplome' => $value->IntituleDiplome,
        'anneeObtention' => $value->AnneeObtention,
        'dateDebut' => $value->DateDebut,
        'dateFin' => $value->DateFin,
        'etablissementScolaire' => $value->EtablissementScolaire,
        'paysEtablissementScolaire' => $value->PaysEtablissementScolaire,
      ];
    }

    //get formations where ID_Salarie = $id
    $formations = Formations::where('ID_Salarie', $id)->get();
    $objFormations = [];
    foreach ($formations as $key => $value) {
      $objFormations[] = [
        'id' => $value->ID_Formation,
        'idSalarie' => $value->ID_Salarie,
        'intituleFormation' => $value->IntituleFormation,
        'dateDebut' => $value->DateDebut,
        'dateFin' => $value->DateFin,
        'etablissement' => $value->Etablissement,
        'paysEtablissement' => $value->PaysEtablissement,
      ];
    }

    //add cursus and formations to objEmployee
    $objEmployee['cursus'] = $objCursus;
    $objEmployee['formations'] = $objFormations;

    return response()->json($objEmployee);
  }

  public function generateCvs(Request $request){
    $ao_name = $request->ao_name;
    $ao_type = $request->ao_type;
    $num_marche = $request->num_marche;
    $model = $request->model;
    
    // $cvs = $request->cvs;
    // get cvs from request and decode it
    $cvs = json_decode($request->cvs, true);


    //loop through cvs
    foreach($cvs as $cv){
      $file_name = $cv['nom'].'_'.$cv['prenom'].'_'.$ao_name.'_'.$ao_type.'_'.$num_marche.'.docx';
      $template = new TemplateProcessor(storage_path('models/model1.docx'));
      // Replace variables in the template with values
      $template->setValue('nom', $cv['nom']);
      $template->setValue('prenom', $cv['prenom']);
      $template->setValue('email', $cv['email']);
      $template->setValue('phone', $cv['telephonePortable']);
      $template->setValue('date_naissance', $cv['dateNaissance']);
      $template->setValue('nationalite', $cv['nationalite']);
      $template->saveAs(storage_path('cvs/'.$file_name));
    }
    

  }
}
