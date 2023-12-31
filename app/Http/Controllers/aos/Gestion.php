<?php

namespace App\Http\Controllers\aos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Rh;
use App\Models\Departement;
use App\Models\Busunit;
use App\Models\Aos;
use App\Models\Champs\Type;
use App\Models\Champs\Pay;
use App\Models\Champs\Secteur;
use App\Models\Champs\Financement;
use App\Models\Champs\Ministere;
use App\Models\Champs\Motif;
use App\Models\Champs\Adjudication;
use App\Models\Societe;
use App\Models\Champs\Soustraitant;
use App\Models\Champs\Partenaire;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\AosImport;

class Gestion extends Controller
{
  public function index()
  {
    return view('content.aos.gestion');
  }

  public function view($id)
  {
    $ao = Aos::find($id);
    $rh = Rh::where('id', $ao->responsable_ao)->first();
    $ao->responsable_ao = $rh->rhNom;
    $bu = Busunit::where('id', $ao->bu_ao)->first();
    $ao->bu_ao = $bu->buNom;
    return view('content.aos.view', compact('ao'));
  }

  public function archived()
  {
    return view('content.aos.archived');
  }

  public function create()
  {
    $rhs = Rh::all();
    $departements = Departement::all();
    $bus = Busunit::all();
    $types = Type::all();
    $pays = Pay::all();
    $secteurs = Secteur::all();
    $financements = Financement::all();
    $ministeres = Ministere::all();
    $motifs = Motif::all();
    $adjudications = Adjudication::all();
    $societes = Societe::all();
    $soustraitants = Soustraitant::all();
    $partenaires = Partenaire::all();
    return view('content.aos.create', compact('rhs', 'departements', 'bus', 'types', 'pays', 'secteurs', 'financements', 'ministeres', 'motifs', 'adjudications', 'societes', 'soustraitants', 'partenaires'));
  }

  public function edit($id)
  {
    $ao = Aos::find($id);
    $rhs = Rh::all();
    $departements = Departement::all();
    $bus = Busunit::all();
    $types = Type::all();
    $pays = Pay::all();
    $secteurs = Secteur::all();
    $financements = Financement::all();
    $ministeres = Ministere::all();
    $motifs = Motif::all();
    $adjudications = Adjudication::all();
    $societes = Societe::all();
    $soustraitants = Soustraitant::all();
    $partenaires = Partenaire::all();
    $rh = Rh::where('id', $ao->responsable_ao)->first();
    $ao->responsable_ao = $rh->rhNom;
    $bu = Busunit::where('id', $ao->bu_ao)->first();
    $ao->bu_ao = $bu->buNom;
    return view('content.aos.edit', compact('rhs', 'departements', 'bus', 'ao', 'types', 'pays', 'secteurs', 'financements', 'ministeres', 'motifs', 'adjudications', 'societes', 'soustraitants', 'partenaires'));
  }

  public function update(Request $request, $id)
  {
    $ao = Aos::find($id);
    $departementValues = [];
    $departementsParts = [];
    $partenairesValues = [];
    $partenairesParts = [];
    $soustraitantsValues = [];
    $soustraitantsParts = [];

    foreach ($request->all() as $key => $value) {
        if (strpos($key, 'departement_nom') !== false) {
            $departementValues[] = $value;
        }
        else if (strpos($key, 'partenaire_nom') !== false) {
            $partenairesValues[] = $value;
        }
        else if (strpos($key, 'sousTraitant_nom') !== false) {
            $soustraitantsValues[] = $value;
        }else if(strpos($key, 'departement_part') !== false){
            $departementsParts[] = $value;
        }else if(strpos($key, 'partenaire_part') !== false){
            $partenairesParts[] = $value;
        }else if(strpos($key, 'soustraitant_part') !== false){
            $soustraitantsParts[] = $value;
        }
    }

    $responsableArray = json_decode($request->responsable);

    $rhNomArray = [];
    foreach ($responsableArray as $responsable) {
        $rhNomArray[] = $responsable->id;
    }
    $rhNom = implode(',', $rhNomArray);
    $departementValues = implode(',', $departementValues);
    $partenairesValues = implode(',', $partenairesValues);
    $soustraitantsValues = implode(',', $soustraitantsValues);
    $departementsParts = implode(',', $departementsParts);
    $partenairesParts = implode(',', $partenairesParts);
    $soustraitantsParts = implode(',', $soustraitantsParts);

    $request->merge(['responsable_ao' => $rhNom]);
    $request->merge(['departements_ao' => $departementValues]);
    $request->merge(['departements_part' => $departementsParts]);
    $request->merge(['partenaires_ao' => $partenairesValues]);
    $request->merge(['partenaires_part' => $partenairesParts]);
    $request->merge(['soustraitants_ao' => $soustraitantsValues]);
    $request->merge(['soustraitants_part' => $soustraitantsParts]);

    $ao->update($request->all());
    return redirect()->route('appel-offre-gestion');
  }

  public function upload(Request $request)
  {
    $file = $request->file('file');
    Excel::import(new AosImport, $file);
    return response()->json(['message' => 'Employees added successfuly']);
  }

  public function store(Request $request)
  {
    $departementValues = [];
    $departementsParts = [];
    $partenairesValues = [];
    $partenairesParts = [];
    $soustraitantsValues = [];
    $soustraitantsParts = [];

    foreach ($request->all() as $key => $value) {
        if (strpos($key, 'departement_nom') !== false) {
            $departementValues[] = $value;
        }
        else if (strpos($key, 'partenaire_nom') !== false) {
            $partenairesValues[] = $value;
        }
        else if (strpos($key, 'sousTraitant_nom') !== false) {
            $soustraitantsValues[] = $value;
        }else if(strpos($key, 'departement_part') !== false){
            $departementsParts[] = $value;
        }else if(strpos($key, 'partenaire_part') !== false){
            $partenairesParts[] = $value;
        }else if(strpos($key, 'soustraitant_part') !== false){
            $soustraitantsParts[] = $value;
        }
    }

    $responsableArray = json_decode($request->responsable);

    $rhNomArray = [];
    foreach ($responsableArray as $responsable) {
        $rhNomArray[] = $responsable->rhNom;
    }
    $rhNom = implode(',', $rhNomArray);
    $departementValues = implode(',', $departementValues);
    $partenairesValues = implode(',', $partenairesValues);
    $soustraitantsValues = implode(',', $soustraitantsValues);
    $departementsParts = implode(',', $departementsParts);
    $partenairesParts = implode(',', $partenairesParts);
    $soustraitantsParts = implode(',', $soustraitantsParts);

    $request->merge(['responsable_ao' => $rhNom]);
    $request->merge(['departements_ao' => $departementValues]);
    $request->merge(['departements_part' => $departementsParts]);
    $request->merge(['partenaires_ao' => $partenairesValues]);
    $request->merge(['partenaires_part' => $partenairesParts]);
    $request->merge(['soustraitants_ao' => $soustraitantsValues]);
    $request->merge(['soustraitants_part' => $soustraitantsParts]);

    $ao = Aos::create($request->all());
    return redirect()->route('appel-offre-gestion');
  }

  public function aos()
  {
    $aos = Aos::where('archived', 0)->get();
    foreach($aos as $key => $value){
      $rh = Rh::where('id', $value->responsable_ao)->first();
      $bu = Busunit::where('id', $value->bu_ao)->first();
      
      $aos[$key]->responsable_ao = $rh->rhNom;
      $aos[$key]->bu_ao = $bu->buNom;
    }
    return response()->json(['data' => $aos]);
  }

  public function aosArchived()
  {
    $aos = Aos::where('archived', 1)->get();
    foreach($aos as $key => $value){
      $rh = Rh::where('id', $value->responsable_ao)->first();
      $bu = Busunit::where('id', $value->bu_ao)->first();

      $aos[$key]->responsable_ao = $rh->rhNom;
      $aos[$key]->bu_ao = $bu->buNom;
    }
    return response()->json(['data' => $aos]);
  }

  public function archive($id)
  {
    $ao = Aos::find($id);
    $ao->archived = 1;
    $ao->save();
    return response()->json(['success' => 'AO archivé avec succès']);
  }

  public function unarchive($id)
  {
    $ao = Aos::find($id);
    $ao->archived = 0;
    $ao->save();
    return response()->json(['success' => 'AO désarchivé avec succès']);
  }

  public function getAo($id)
  {
    $ao = Aos::find($id);
    $rh = Rh::where('id', $ao->responsable_ao)->first();
    $ao->responsable_ao = $rh->rhNom;
    $bu = Busunit::where('id', $ao->bu_ao)->first();
    $ao->bu_ao = $bu->buNom;
    return response()->json(['data' => $ao]);
  }

}
