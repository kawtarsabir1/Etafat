<?php

namespace App\Http\Controllers\cvs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Taches;
use App\Models\Refs;
use App\Models\Formations;
use App\Models\Experiences;
use App\Models\Informations;
use App\Models\Projet;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\CvsImport;


class Gestion extends Controller
{
  public function index()
  {
    $employees = Informations::all();
    return view('content.cvs.gestion-cvs', compact('employees'));
  }

  public function upload(Request $request)
  {
    $file = $request->file('file');
    Excel::import(new CvsImport, $file);
    return response()->json(['message' => 'Employees added successfuly']);
  }

  public function archived()
  {
    return view('content.cvs.archived-cvs');
  }

  public function getArchived()
  {
      $employees = Informations::all()->where('Archived', 1);

      $formattedEmployees = $employees->map(function ($employee) {
        return [
          'id' => $employee->ID_Salarie,
          'Nom' => $employee->Nom,
          'Prenom' => $employee->Prenom,
          'DateNaissance' => $employee->DateNaissance,
          'LieuNaissance' => $employee->LieuNaissance,
          'Adresse' => $employee->Adresse_1,
          'CIN' => $employee->CIN,
          'Email' => $employee->Email,
          'TelephoneFixe' => $employee->TelephoneFixe,
          'TelephonePortable' => $employee->TelephonePortable,
          'Profil' => $employee->Profil,
          'NumeroCNSS' => $employee->NumeroCNSS,
          'ResponsableHierarchique' => $employee->ResponsableHierarchique,
          'Poste' => $employee->Poste,
          'DateEmbauche' => $employee->DateEmbauche,
          'DepartementAffectation' => $employee->DepartementAffectation,
          'ContratTravailNumero' => $employee->ContratTravailNumero,
          'TypeContrat' => $employee->TypeContrat,
          'ContratDu' => $employee->ContratDu,
          'ContratAu' => $employee->ContratAu,
          'Langues' => $employee->Langues,
          'Niveau' => $employee->Niveau
        ];
      });

      return response()->json(['data' => $formattedEmployees]);
    
  }

  public function getEmployees()
  {
    $employees = Informations::all()->where('Archived', 0);

    $formattedEmployees = $employees->map(function ($employee) {
      return [
        'id' => $employee->ID_Salarie,
        'Nom' => $employee->Nom,
        'Prenom' => $employee->Prenom,
        'DateNaissance' => $employee->DateNaissance,
        'LieuNaissance' => $employee->LieuNaissance,
        'Adresse' => $employee->Adresse_1,
        'CIN' => $employee->CIN,
        'Email' => $employee->Email,
        'TelephoneFixe' => $employee->TelephoneFixe,
        'TelephonePortable' => $employee->TelephonePortable,
        'Profil' => $employee->Profil,
        'NumeroCNSS' => $employee->NumeroCNSS,
        'ResponsableHierarchique' => $employee->ResponsableHierarchique,
        'Poste' => $employee->Poste,
        'DateEmbauche' => $employee->DateEmbauche,
        'DepartementAffectation' => $employee->DepartementAffectation,
        'ContratTravailNumero' => $employee->ContratTravailNumero,
        'TypeContrat' => $employee->TypeContrat,
        'ContratDu' => $employee->ContratDu,
        'ContratAu' => $employee->ContratAu,
        'Langues' => $employee->Langues,
        'Niveau' => $employee->Niveau
      ];
    });

    return response()->json(['data' => $formattedEmployees]);
  }

  public function show($id)
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

    return view('content.cvs.edit-cv', compact('objEmployee'));
  }

  public function create()
  {
    //get refs from database
    $refs = Refs::all();
    $objRefs = [];
    foreach ($refs as $key => $value) {
      $objRefs[] = [
        'id' => $value->ID_Ref,
        'client' => $value->client,
        'nMarche' => $value->nMarche,
      ];
    }
    return view('content.cvs.create-cv', compact('objRefs'));
  }

  public function store(Request $request)
  {
    $information = $request->except('refs', 'formations', 'experiences');
    $refs = json_decode($request->input('experiences'));
    $formations = json_decode($request->input('formations'));
    $projets = json_decode($request->input('projets'));

    //store information
    $Image = $request->file('PhotoIdentite');
    $Prenom = $request->input('Prenom');
    if(isset($Image)){
      $uniqueFileName = $Prenom . uniqid() . '.' . $Image->getClientOriginalExtension();
      Storage::disk('public')->put('photos/' . $uniqueFileName, file_get_contents($Image));
      // $destinationPath = public_path('assets/photos');
      // $Image->move($destinationPath, $uniqueFileName);
      unset($information['PhotoIdentite']);
      $information['PhotoIdentite'] = $uniqueFileName;
    }
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
    $information['Archived'] = 0;
    $employee = Informations::create($information);

    //store formations
    if($formations != null){
      foreach ($formations as $formationsItems) {
        if (isset($formationsItems->diplome)) {
          $base64String = $formationsItems->diplome;
          $intitule = $formationsItems->intitule;
          $extension = $formationsItems->extention;
          $file_name = $intitule . uniqid() . '.' . $extension;
          Storage::disk('public')->put('formations/' . $file_name, base64_decode(preg_replace('/^data:image\/\w+;base64,/', '', $base64String)));
          unset($formationsItems->diplome);
          $formationsItems->diplome = $file_name;
        }
      }
      foreach ($formations as $formationData) {
        $formation = get_object_vars($formationData);
        Formations::create([
          'ID_Salarie' => $employee->ID_Salarie,
          'diplome' => (isset($formation['diplome'])) ? $formation['diplome'] : null,
          'intitule' => $formation['intitule'],
          'obtention' => $formation['obtention'],
          'etablissement' => $formation['etablissement'],
        ]);
      }
    }
    
    //store refs
    if($refs != null){
      foreach ($refs as $refsItems) {
        $ranges = explode(' to ', $refsItems->range);
        $Ref = Experiences::create([
          'ID_Salarie' => $employee->ID_Salarie,
          'employeur' => $refsItems->employeur,
          'poste' => $refsItems->poste,
          'dateDebut' => $ranges[0],
          'dateFin' => $ranges[1],
        ]);

        foreach ($refsItems->taches as $tache) {
          Taches::create([
            'ID_Ref' => $Ref->ID_Experience,
            'tache' => $tache
          ]);
        }
      }
    }

    //store projets
    if($projets != null){
      foreach ($projets as $projet) {
        //missions array to string
        $missions = implode(",", $projet->missions);
        Projet::create([
          'ID_Salarie' => $employee->ID_Salarie,
          'ID_reference' => $projet->idRef,
          'poste' => $projet->poste,
          'missions' => $missions,
          'description' => $projet->desc,
        ]);
      }
    }
    

    return redirect()->route('cv-gestion')->with('success', 'Employee created successfully');
  }

  public function edit($id)
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
    $objRefs = [];
    foreach ($experiences as $key => $value) {
      $objRefs[] = [
        'id' => $value->ID_Experience,
        'employeur' => $value->employeur,
        'poste' => $value->poste,
        'dateDebut' => $value->dateDebut,
        'dateFin' => $value->dateFin,
        'taches' => Taches::where('ID_Ref', $value->ID_Experience)->get(),
      ];
    }
    $objEmployee['refs'] = $objRefs;

    $projets = Projet::where('ID_Salarie', $id)->get();
    $objProjets = [];
    foreach ($projets as $key => $value) {
      //get reference where ID_reference = $value->ID_reference
      $reference = Refs::where('ID_Ref', $value->ID_reference)->first();
      $objProjets[] = [
        'id' => $value->ID_Projet,
        'idRef' => $value->ID_reference,
        'poste' => $value->poste,
        'ref' => $reference->nMarche.' ('.$reference->client.')',
        'missions' => explode(",", $value->missions),
        'desc' => $value->descriptions,
      ];
    }
    $objEmployee['projets'] = $objProjets;

    //get all references
    $references = Refs::all();
    $objEmployee['references'] = $references;

    return view('content.cvs.edit-cv', compact('objEmployee'));
  }

  public function update(Request $request, $id)
  {
    $information = $request->except(['_token', 'formations', 'experiences', 'projets']);
    $experiences = json_decode($request->input('experiences'));
    $formations = json_decode($request->input('formations'));
    $projets = json_decode($request->input('projets'));

    //store information
    if(false){
      $Image = $request->file('PhotoIdentite');
      $Prenom = $request->input('Prenom');
      $uniqueFileName = $Prenom . uniqid() . '.' . $Image->getClientOriginalExtension();
      Storage::disk('public')->put('photos/' . $uniqueFileName, file_get_contents($Image));
      unset($information['PhotoIdentite']);
      $information['PhotoIdentite'] = $uniqueFileName;
    }
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
    Informations::where('ID_Salarie', $id)->update($information);

    //get formations where ID_Salarie = $id
    $formationsDB = Formations::where('ID_Salarie', $id)->get();
    //check if any formationsDB is not in formations if true delete it from DB
    foreach ($formationsDB as $value) {
      $formationDBId = $value->ID_Formation;
      $found = false;
      foreach ($formations as $key1 => $value1) {
        if (isset($value1->id) && $value1->id == $formationDBId) {
          unset($formations[$key1]);
          $found = true;
          break;
        }
      }
      if (!$found) {
        Formations::where('ID_Formation', $formationDBId)->delete();
      }
    }
    foreach ($formations as $formationsItems) {
      if (isset($formationsItems->diplome)) {
        $base64String = $formationsItems->diplome;
        $intitule = $formationsItems->intitule;
        $extension = $formationsItems->extention;
        $file_name = $intitule . uniqid() . '.' . $extension;
        Storage::disk('public')->put('formations/' . $file_name, base64_decode(preg_replace('/^data:image\/\w+;base64,/', '', $base64String)));
        unset($formationsItems->diplome);
        $formationsItems->diplome = $file_name;
      }
    }
    foreach ($formations as $formationData) {
      $formation = get_object_vars($formationData);
      Formations::create([
        'ID_Salarie' => $id,
        'diplome' => $formation['diplome'],
        'intitule' => $formation['intitule'],
        'obtention' => $formation['obtention'],
        'etablissement' => $formation['etablissement'],
      ]);
    }
    

    $experienceDB = Experiences::where('ID_Salarie', $id)->get();
    foreach ($experienceDB as $value) {
      $experienceDBId = $value->ID_Experience;
      $found = false;
      foreach ($experiences as $key1 => $value1) {
        if (isset($value1->id) && $value1->id == $experienceDBId) {
          unset($experiences[$key1]);
          $found = true;
          break;
        }
      }
      if (!$found) {
        Refs::where('ID_Experience', $experienceDBId)->delete();
        //delete taches 
        Taches::where('ID_Experience', $experienceDBId)->delete();
      }
    }

    foreach ($experiences as $expsItems) {
      $ranges = explode(' to ', $expsItems->range);
      $Exp = Experiences::create([
        'ID_Salarie' => $id,
        'employeur' => $expsItems->employeur,
        'poste' => $expsItems->poste,
        'dateDebut' => $ranges[0],
        'dateFin' => $ranges[1],
      ]);
    foreach ($expsItems->taches as $tache) {
      Taches::create([
        'ID_Ref' => $Exp->ID_Experience,
        'tache' => $tache
      ]);
    }
    }

    $projetsDB = Projet::where('ID_Salarie', $id)->get();
    foreach ($projetsDB as $value) {
      $projetDBId = $value->ID_Projet;
      $found = false;
      foreach ($projets as $key1 => $value1) {
        if (isset($value1->id) && $value1->id == $projetDBId) {
          // delete the ref from the $refs array
          unset($projets[$key1]);
          $found = true;
          break;
        }
      }
      if (!$found) {
        // delete the ref from the database table
        Projet::where('ID_Projet', $projetDBId)->delete();
      }
    }

    foreach ($projets as $projetsItems) {
      $missions = implode(",", $projetsItems->missions);
      Projet::create([
        'ID_Salarie' => $id,
        'ID_reference' => $projetsItems->idRef,
        'poste' => $projetsItems->poste,
        'missions' => $missions,
        'description' => $projetsItems->desc,
      ]);
    }

    return redirect()->route('cv-gestion')->with('success', 'Employee updated successfully');
  }

  public function destroy($id)
  {
    $employee = Informations::find($id);
    //set archived to 1
    $employee->Archived = 1;
    $employee->save();

    return response()->json([
      'success' => true,
      'message' => 'Employee deleted successfully'
    ]);
  }

  public function restore($id)
  {
    $employee = Informations::find($id);
    //set archived to 1
    $employee->Archived = 0;
    $employee->save();

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

  public function viewCv($id)
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
      'PhotoIdentite' => $employee->PhotoIdentite,
      'Archived' => $employee->Archived,
    ];

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
        'etablissement' => $value->EtablissementFormation,
        'paysEtablissement' => $value->Lieu,
      ];
    }

    //add cursus and formations to objEmployee
    $objEmployee['formations'] = $objFormations;

    return view('content.cvs.view-cv', compact('objEmployee'));
  }
}
