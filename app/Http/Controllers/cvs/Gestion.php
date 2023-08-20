<?php

namespace App\Http\Controllers\cvs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Taches;
use App\Models\Refs;
use App\Models\Formations;
use App\Models\Experiences;
use App\Models\Rh;
use App\Models\Departement;
use App\Models\Post;
use App\Models\Societe;
use App\Models\Busunit;
use App\Models\Informations;
use App\Models\Projet;
use App\Models\Category;
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
      $employees = Informations::where('Archived', 1)->get();
      foreach($employees as $key => $value){
        $rh = Rh::where('id', $value->ResponsableHierarchique)->first();
        $departement = Departement::where('id', $value->DepartementAffectation)->first();
        $post = Post::where('id', $value->Poste)->first();
  
        $employees[$key]->ResponsableHierarchique = $rh->rhNom;
        $employees[$key]->DepartementAffectation = $departement->departementNom;
        $employees[$key]->Poste = $post->postNom;
      }
      return response()->json(['data' => $employees]);

  }

  public function getEmployees()
  {
    $employees = Informations::where('Archived', 0)->get();
    foreach($employees as $key => $value){
      $rh = Rh::where('id', $value->ResponsableHierarchique)->first();
      $departement = Departement::where('id', $value->DepartementAffectation)->first();
      $post = Post::where('id', $value->Poste)->first();

      $employees[$key]->ResponsableHierarchique = $rh->rhNom;
      $employees[$key]->DepartementAffectation = $departement->departementNom;
      $employees[$key]->Poste = $post->postNom;
    }
    return response()->json(['data' => $employees]);
  }

  public function employeesFiltredDiplome($diplome)
  {
    $employees = Informations::where('Archived', 0)->get();
    $employeesFiltred = [];
    foreach ($employees as $key => $value) {
      $formations = Formations::where('ID_Salarie', $value->ID_Salarie)->get();
      foreach ($formations as $key1 => $value1) {
        if(str_contains($value1->intitule, $diplome) || str_contains($diplome, $value1->intitule)){
          $employeesFiltred[] = $value;
        }
      }
    }
    $employeesFiltred = array_unique($employeesFiltred, SORT_REGULAR);
    return response()->json(['data' => $employeesFiltred]);
  }

  public function employeesFiltredAnciente($diplome , $anciente)
  {
    $employees = Informations::where('Archived', 0)->get();
    $employeesFiltred = [];
    foreach ($employees as $key => $value) {
      $formations = Formations::where('ID_Salarie', $value->ID_Salarie)->get();
      foreach ($formations as $key1 => $value1) {
        if(str_contains($value1->intitule, $diplome) || str_contains($diplome, $value1->intitule)){
          $diff = date('Y') - $anciente;
          if($diff <= $value1->obtention){
            $employeesFiltred[] = $value;
          }
        }
      }
    }
    $employeesFiltred = array_unique($employeesFiltred, SORT_REGULAR);
    return response()->json(['data' => $employeesFiltred]);
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
    //get rh from database
    $rhs = Rh::all();
    //get postes from database
    $posts = Post::all();
    //get departements from database
    $departements = Departement::all();
    return view('content.cvs.create-cv', compact('objRefs', 'rhs', 'posts', 'departements'));
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
        $Ref = Experiences::create([
          'ID_Salarie' => $employee->ID_Salarie,
          'employeur' => $refsItems->employeur,
          'poste' => $refsItems->poste,
          'pay' => $refsItems->pay,
          'dateDebut' => $refsItems->dateDu,
          'dateFin' => $refsItems->dateAu,
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
      'ResponsableHierarchique' => $employee->ResponsableHierarchique,
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
        'pay' => $value->pay,
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

    //get rh from database
    $rhs = Rh::all();
    //get postes from database
    $posts = Post::all();
    //get departements from database
    $departements = Departement::all();

    return view('content.cvs.edit-cv', compact('objEmployee', 'rhs', 'posts', 'departements'));
  }

  public function update(Request $request, $id)
  {
    $information = $request->except(['_token', 'formations', 'experiences', 'projets']);
    $experiences = json_decode($request->input('experiences'));
    $formations = json_decode($request->input('formations'));
    $projets = json_decode($request->input('projets'));

    //store information
    if($request->hasFile('PhotoIdentite')){
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
      $Exp = Experiences::create([
        'ID_Salarie' => $id,
        'employeur' => $expsItems->employeur,
        'poste' => $expsItems->poste,
        'pay' => $expsItems->pay,
        'dateDebut' => $expsItems->dateDebut,
        'dateFin' => $expsItems->dateFin,
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
    $objEmployee = Informations::where('ID_Salarie', $id)->first();
    $objFormations = Formations::where('ID_Salarie', $id)->get();
    $objExperiences = Experiences::where('ID_Salarie', $id)->get();
    $objProjets = Projet::where('ID_Salarie', $id)->get();

    $objEmployee['formations'] = $objFormations;
    $objEmployee['projets'] = $objProjets;
    $objEmployee['formations'] = $objFormations;
    $objEmployee['experiences'] = $objExperiences;

    $rh = Rh::where('id', $objEmployee->ResponsableHierarchique)->first();
    $departement = Departement::where('id', $objEmployee->DepartementAffectation)->first();
    $post = Post::where('id', $objEmployee->Poste)->first();

    $objEmployee->ResponsableHierarchique = $rh->rhNom;
    $objEmployee->DepartementAffectation = $departement->departementNom;
    $objEmployee->Poste = $post->postNom;


    return view('content.cvs.view-cv', compact('objEmployee')); 
  }

  public function rhPage()
  {
    $rhs = Rh::all();
    return view('content.cvs.gestion.rh', compact('rhs'));
  }
  public function postesPage()
  {
    $posts = Post::all();
    return view('content.cvs.gestion.posts', compact('posts'));
  }
  public function departementsPage()
  {
    $departements = Departement::all();
    return view('content.cvs.gestion.departement', compact('departements'));
  }

  public function societesPage()
  {
    $societes = Societe::all();
    return view('content.cvs.gestion.societe', compact('societes'));
  }

  public function BUsPage()
  {
    $BUs = Busunit::all();
    return view('content.cvs.gestion.bu', compact('BUs'));
  }

  public function categoriesPage()
  {
    $categories = Category::all();
    return view('content.cvs.gestion.category', compact('categories'));
  }



  public function addRh(Request $request)
  { 
    $nom = $request->input('nom');
    $rh = new Rh;
    $rh->rhNom = $nom;
    $rh->save();
  }
  public function addPost(Request $request)
  {
    $nom = $request->input('nom');
    $post = new Post;
    $post->postNom = $nom;
    $post->save();
  }
  public function addDepart(Request $request)
  {
    $nom = $request->input('nom');
    $depart = new Departement;
    $depart->departementNom = $nom;
    $depart->save();
  }

  public function addSociete(Request $request)
  {
    $nom = $request->input('nom');
    $societe = new Societe;
    $societe->societeNom = $nom;
    $societe->save();
  }

  public function addBU(Request $request)
  {
    $nom = $request->input('nom');
    $Bu = new Busunit;
    $Bu->buNom = $nom;
    $Bu->save();
  }

  public function addCategory(Request $request)
  {
    $nom = $request->input('nom');
    $Category = new Category;
    $Category->categoryNom = $nom;
    $Category->save();
  }

  public function deleteRh($id)
  { 
    //delete rh
    $rh = Rh::find($id);
    $rh->delete();
  }
  public function deletePost($id)
  {
    //delete post
    $post = Post::find($id);
    $post->delete();
  }

  public function deleteDepart($id)
  {
    //delete departement
    $depart = Departement::find($id);
    $depart->delete();
  }
  
  public function deleteSociete($id)
  {
    //delete departement
    $societe = Societe::find($id);
    $societe->delete();
  }

  public function deleteBu($id)
  {
    $bu = Busunit::find($id);
    $bu->delete();
  }

  public function deleteCategory($id)
  {
    $Category = Category::find($id);
    $Category->delete();
  }


  public function updateSociete(Request $request, $id)
  {
    $nom = $request->input('nom');
    $societe = Societe::find($id);
    $societe->societeNom = $nom;
    $societe->save();
  }

  public function updateRh(Request $request, $id)
  {
    $nom = $request->input('nom');
    $rh = Rh::find($id);
    $rh->rhNom = $nom;
    $rh->save();
  }

  public function updatePost(Request $request, $id)
  {
    $nom = $request->input('nom');
    $post = Post::find($id);
    $post->postNom = $nom;
    $post->save();
  }

  public function updateDepartement(Request $request, $id)
  {
    $nom = $request->input('nom');
    $depart = Departement::find($id);
    $depart->departementNom = $nom;
    $depart->save();
  }

  public function updateBu(Request $request, $id)
  {
    $nom = $request->input('nom');
    $bu = Busunit::find($id);
    $bu->buNom = $nom;
    $bu->save();
  }

  public function updateCategory(Request $request, $id)
  {
    $nom = $request->input('nom');
    $Category = Category::find($id);
    $Category->categoryNom = $nom;
    $Category->save();
  }

  public function projets($id){
    //get projets where ID_Salarie = $id
    $projets = Projet::where('ID_Salarie', $id)->get();
    //get references where ID_Ref = $projets->ID_reference
    foreach ($projets as $key => $value) {
      $ref = Refs::where('ID_Ref', $value->ID_reference)->get();
      $projets[$key]['objet'] = $ref[0]->objet;
      $projets[$key]['client'] = $ref[0]->client;
      $projets[$key]['annee'] = $ref[0]->annee;
    }
    return response()->json([
      'success' => true,
      'data' => $projets
    ]);
  }

  public function AllRhs()
  {
    $data = Rh::all();
    foreach ($data as $key => $value) {
      $data[$key]['value'] = $value['id'];
    }
    return response()->json($data);
  }

  public function AllCategories()
  {
    $categories = Category::all();
    foreach ($categories as $key => $value) {
      $categories[$key]['value'] = $value['id'];
    }
    return response()->json($categories);
  }
}
