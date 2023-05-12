<?php

namespace App\Http\Controllers\cvs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cursus;
use App\Models\Formations;
use App\Models\InformationsGenerales;
use Illuminate\Support\Facades\Storage;

class Gestion extends Controller
{
  public function index()
  {
    $employees = InformationsGenerales::all();
    return view('content.cvs.gestion-cvs', compact('employees'));
  }

  public function getEmployees()
  {
    $employees = InformationsGenerales::all();

    $formattedEmployees = $employees->map(function ($employee) {
        return [
            'id' => $employee->ID_Salarie,
            'Nom'=> $employee->Nom,
            'Prenom'=> $employee->Prenom,
            'DateNaissance'=> $employee->DateNaissance,
            'LieuNaissance'=> $employee->LieuNaissance,
            'Adresse'=> $employee->Adresse_1,
            'CIN' => $employee->CIN,
            'Email'=> $employee->Email,
            'TelephoneFixe'=> $employee->TelephoneFixe,
            'TelephonePortable'=> $employee->TelephonePortable,
            'Profil'=> $employee->Profil,
            'NumeroCNSS'=> $employee->NumeroCNSS,
            'ResponsableHierarchique'=> $employee->ResponsableHierarchique,
            'Poste'=> $employee->Poste,
            'DateEmbauche'=> $employee->DateEmbauche,
            'DepartementAffectation'=> $employee->DepartementAffectation,
            'ContratTravailNumero'=> $employee->ContratTravailNumero,
            'TypeContrat'=> $employee->TypeContrat,
            'ContratDu'=> $employee->ContratDu,
            'ContratAu'=> $employee->ContratAu,
            'Langues'=> $employee->Langues,
            'Niveau'=> $employee->Niveau
        ];
    });

    return response()->json(['data' => $formattedEmployees]);
  }

  public function show($id)
  {
    $employee = InformationsGenerales::find($id);
    return view('content.cvs.create-cv', compact('employee'));
  }

  public function create()
  {
    return view('content.cvs.create-cv');
  }

  public function store(Request $request)
  {
    $information = [];
    $cursus = json_decode($request->input('cursusArray'));
    $formations = json_decode($request->input('formationArray'));

    foreach ($request->all() as $i => $value) {
      //if key is cursusArray or formationArray, skip it
      if ($i == 'cursusArray' || $i == 'formationArray') {
        continue;
      } else {
        $information[$i] = $value;
      }
    }

    // Save all information
    // $employee = InformationsGenerales::create($information);
    //store photoIdentite in storage format file
    $Image = $request->file('PhotoIdentite');
    $Prenom = $request->input('Prenom');
    $uniqueFileName = $Prenom.uniqid() . '.' . $Image->getClientOriginalExtension();
    Storage::disk('local')->put('photos/' . $uniqueFileName, file_get_contents($Image));
    unset($information['PhotoIdentite']);
    $information['PhotoIdentite'] = $uniqueFileName;
    $langues = [];
    $Niveau = [];
    foreach ($information as $key => $value) {
      if (strpos($key, 'langue') !== false) {
        array_push($langues, $value);
        unset($information[$key]);
      }
      if (strpos($key, 'niveau') !== false) {
        array_push($Niveau, $value);
        unset($information[$key]);
      }
    }
    $information['Langues'] = implode(",", $langues);
    $information['Niveau'] = implode(",", $Niveau);
    $contratRange = explode(' to ', $information['ContratRange']);
    $information['ContratDu'] = $contratRange[0];
    $information['ContratAu'] = $contratRange[1];
    unset($information['ContratRange']);
    $employee = InformationsGenerales::create($information);

    //get files from cursus
    foreach ($cursus as $cursusData) {
      $base64String = $cursusData->diplome;
      $intitule = $cursusData->IntituleDiplome;
      $extension = $cursusData->extentionDiplome;
      $file_name = $intitule.uniqid() . '.' . $extension;
      Storage::disk('local')->put('diplomes/' . $file_name, base64_decode(preg_replace('/^data:image\/\w+;base64,/', '', $base64String)));
      unset($cursusData->diplome);
      $cursusData->Diplome = $file_name;
      $dateRange = explode(' to ', $cursusData->date_range);
      $DateDebut = $dateRange[0];
      $DateFin = $dateRange[1];
      unset($cursusData->date_range);
      $cursusData->DateDebut = $DateDebut;
      $cursusData->DateFin = $DateFin;
    }

    foreach ($formations as $formationsItems) {
      $base64String = $formationsItems->diplome;
      $intitule = $formationsItems->IntituleFormation;
      $extension = $formationsItems->extentionDiplome;
      $file_name = $intitule.uniqid() . '.' . $extension;
      Storage::disk('local')->put('formations/' . $file_name, base64_decode(preg_replace('/^data:image\/\w+;base64,/', '', $base64String)));
      unset($formationsItems->diplome);
      $formationsItems->Diplome = $file_name;
      $dateRange = explode(' to ', $formationsItems->date_range);
      $DateDebut = $dateRange[0];
      $DateFin = $dateRange[1];
      unset($formationsItems->date_range);
      $formationsItems->DateDebut = $DateDebut;
      $formationsItems->DateFin = $DateFin;
    }


    // Save all cursus
    foreach ($cursus as $cursusData) {
        $cursusArray = get_object_vars($cursusData);
        $cursusArray['ID_Salarie'] = $employee->ID_Salarie;
        Cursus::create($cursusArray);
    }

    // Save all formations
    foreach ($formations as $formationData) {
      $formationData = get_object_vars($formationData);
      $formationData['ID_Salarie'] = $employee->ID_Salarie;
      Formations::create($formationData);
    }

    return redirect()->route('content.cvs.gestion-cvs')->with('success', 'Employee created successfully');
  }

  public function edit($id)
  {
    $employee = InformationsGenerales::find($id);
    $cursus = Cursus::where('id_salarie', $id)->get();
    $formations = Formations::where('id_salarie', $id)->get();

    return view('#', compact('employee', 'cursus', 'formations'));
  }

  public function update(Request $request, $id)
  {
    $employee = InformationsGenerales::find($id);
    $information = $request->input('information');
    $cursus = $request->input('cursus');
    $formations = $request->input('formation');

    $employee->update($information);

    Cursus::where('id_salarie', $id)->delete();
    foreach ($cursus as $cursusData) {
      $cursusData['id_salarie'] = $employee->id_salarie;
      Cursus::create($cursusData);
    }

    Formations::where('id_salarie', $id)->delete();
    foreach ($formations as $formationData) {
      $formationData['id_salarie'] = $employee->id_salarie;
      Formations::create($formationData);
    }

    return redirect()->route('cvs.gestion.index')->with('success', 'Employee created successfully');
  }

  public function destroy($id)
  {
    $employee = InformationsGenerales::find($id);
    //delete all cursus where id_salarie = $id
    Cursus::where('ID_Salarie', $id)->delete();
    //delete all formations where id_salarie = $id
    Formations::where('ID_Salarie', $id)->delete();
    $employee->delete();

    return response()->json([
      'success' => true,
      'message' => 'Employee deleted successfully'
    ]);
  }

  public function deleteFormation($id)
  {
    $formation = Formations::find($id);
    $formation->delete();

    return response()->json([
      'success' => true,
      'message' => 'Formation deleted successfully'
    ]);
  }

  public function deleteCursus($id)
  {
    $cursus = Cursus::find($id);
    $cursus->delete();

    return response()->json([
      'success' => true,
      'message' => 'Cursus deleted successfully'
    ]);
  }
}
