<?php

namespace App\Http\Controllers\aos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Champs\Adjudication;
use App\Models\Champs\Type;
use App\Models\Champs\Pay;
use App\Models\Champs\Secteur;
use App\Models\Champs\Financement;
use App\Models\Champs\Ministere;
use App\Models\Champs\Motif;
use App\Models\Champs\Partenaire;
use App\Models\Champs\Soustraitant;


class Champs extends Controller
{
    // Functions for the "Type" table
    public function addType(Request $request)
    {
        $type = new Type;
        $type->type = $request->input('type');
        $type->save();
    }

    public function deleteType($id)
    {
        $type = Type::find($id);
        $type->delete();
    }

    public function updateType(Request $request, $id)
    {
        $type = Type::find($id);
        $type->type = $request->input('value');
        $type->save();  
    }    

    public function getAllTypes()
    {
        $types = Type::all();
        return view('content.aos.champs.type', compact('types'));
    }

    // Functions for the "Pay" table
    public function addPay(Request $request)
    {
        $pay = new Pay;
        $pay->pay = $request->input('pay');
        $pay->save();
    }

    public function deletePay($id)
    {
        $pay = Pay::find($id);
        $pay->delete();
    }

    public function getAllPays()
    {
        $pays = Pay::all();
        return view('content.aos.champs.pay', compact('pays'));
    }

    // Functions for the "Secteur" table
    public function addSecteur(Request $request)
    {
        $secteur = new Secteur;
        $secteur->secteur = $request->input('secteur');
        $secteur->save();
    }

    public function deleteSecteur($id)
    {
        $secteur = Secteur::find($id);
        $secteur->delete();
    }

    public function getAllSecteurs()
    {
        $secteurs = Secteur::all();
        return view('content.aos.champs.secteur', compact('secteurs'));
    }

    // Functions for the "Financement" table
    public function addFinancement(Request $request)
    {
        $financement = new Financement;
        $financement->financement = $request->input('financement');
        $financement->save();
    }

    public function deleteFinancement($id)
    {
        $financement = Financement::find($id);
        $financement->delete();
    }

    public function getAllFinancements()
    {
        $financements = Financement::all();
        return view('content.aos.champs.financement', compact('financements'));
    }

    // Functions for the "Ministere" table
    public function addMinistere(Request $request)
    {
        $ministere = new Ministere;
        $ministere->ministere = $request->input('ministere');
        $ministere->save();
    }

    public function deleteMinistere($id)
    {
        $ministere = Ministere::find($id);
        $ministere->delete();
    }

    public function getAllMinisteres()
    {
        $ministeres = Ministere::all();
        return view('content.aos.champs.ministere', compact('ministeres'));
    }

    // Functions for the "Adjudication" table
    public function addAdjudication(Request $request)
    {
        $adjudication = new Adjudication;
        $adjudication->adjudication = $request->input('adjudication');
        $adjudication->save();
    }

    public function deleteAdjudication($id)
    {
        $adjudication = Adjudication::find($id);
        $adjudication->delete();
    }

    public function getAllAdjudications()
    {
        $adjudications = Adjudication::all();
        return view('content.aos.champs.adjudication', compact('adjudications'));
    }

    // Functions for the "Motif" table
    public function addMotif(Request $request)
    {
        $motif = new Motif;
        $motif->motif = $request->input('motif');
        $motif->save();
    }

    public function deleteMotif($id)
    {
        $motif = Motif::find($id);
        $motif->delete();
    }

    public function getAllMotifs()
    {
        $motifs = Motif::all();
        return view('content.aos.champs.motif', compact('motifs'));
    }

    // Functions for the "Partenaire" table
    public function addPartenaire(Request $request)
    {
        $partenaire = new Partenaire;
        $partenaire->partenaire = $request->input('partenaire');
        $partenaire->save();
    }

    public function deletePartenaire($id)
    {
        $partenaire = Partenaire::find($id);
        $partenaire->delete();
    }

    public function getAllPartenaires()
    {
        $partenaires = Partenaire::all();
        return view('content.aos.champs.partenaire', compact('partenaires'));
    }

    // Functions for the "Soustraitant" table
    public function addSoustraitant(Request $request)
    {
        $soustraitant = new Soustraitant;
        $soustraitant->soustraitant = $request->input('soustraitant');
        $soustraitant->save();
    }

    public function deleteSoustraitant($id)
    {
        $soustraitant = Soustraitant::find($id);
        $soustraitant->delete();
    }

    public function getAllSoustraitants()
    {
        $soustraitants = Soustraitant::all();
        return view('content.aos.champs.soustraitant', compact('soustraitants'));
    }

}
