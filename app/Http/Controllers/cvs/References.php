<?php

namespace App\Http\Controllers\cvs;

use App\Http\Controllers\Controller;
use App\Models\Informations;
use App\Models\Refs;
use App\Models\Taches;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use \DateTime;

class References extends Controller
{
    public function index()
    {
        return view('content.cvs.references-cv');
    }

    public function archived(Request $request)
    {
        return view('content.cvs.references-cv-archived');
    }

    public function create()
    {
        //get informations from database
        $informations = Informations::all();
        return view('content.cvs.references-cv-create', compact('informations'));
    }

    //store
    public function store(Request $request)
    {
        $file = $request->file('attestation');
        $employeur = $request->employeur; 
        $fileName = null;
        if(file_exists($file)){
            $fileName =  $employeur . uniqid() . '.' . $file->getClientOriginalExtension();
            Storage::disk('local')->put('attestation/' . $fileName, file_get_contents($file));
        }
        $ranges = explode(' to ', $request->range);
        $taches = explode(',', $request->taches);
        $Ref = Refs::create([
            'ID_Salarie' => $request->employee,
            'employeur' => $employeur,
            'poste' => $request->poste,
            'dateDebut' => $ranges[0],
            'dateFin' => $ranges[1],
            'domaines' => $request->domaines,
            'attestation' => $fileName,
            'archived' => false
        ]);

        foreach ($taches as $tache) {
            Taches::create([
            'ID_Ref' => $Ref->ID_Ref,
            'tache' => $tache
            ]);
        }

        return response()->json(['message' => 'References added successfuly']);
    }

    public function getRefs(){
        $Refs = Refs::where('archived', false)->get();
        foreach($Refs as $Ref){
            $id = $Ref->ID_Salarie;
            $employee = Informations::where('ID_Salarie', $id)->first();
            $Ref['employee'] = $employee->Nom . ' ' . $employee->Prenom;

            $dateDebut = new DateTime($Ref->dateDebut);
            $dateFin = new DateTime($Ref->dateFin);
            $interval = $dateDebut->diff($dateFin);
            $years = $interval->y;
            $months = $interval->m;
            if ($years >= 1) {
                $duree = $years . " year(s)";
                $Ref['duree'] = $duree;
            } elseif ($months >= 1) {
                $duree = $months . " month(s)";
                $Ref['duree'] = $duree;
            }else {
                $Ref['duree'] = "Less than a month";
            }
        }
        return response()->json(['data' => $Refs]);
    }

    public function getArchivedRefs(){
        $Refs = Refs::where('archived', true)->get();
        foreach($Refs as $Ref){
            $id = $Ref->ID_Salarie;
            $employee = Informations::where('ID_Salarie', $id)->first();
            $Ref['employee'] = $employee->Nom . ' ' . $employee->Prenom;

            $dateDebut = new DateTime($Ref->dateDebut);
            $dateFin = new DateTime($Ref->dateFin);
            $interval = $dateDebut->diff($dateFin);
            $years = $interval->y;
            $months = $interval->m;
            if ($years >= 1) {
                $duree = $years . " year(s)";
                $Ref['duree'] = $duree;
            } elseif ($months >= 1) {
                $duree = $months . " month(s)";
                $Ref['duree'] = $duree;
            }else {
                $Ref['duree'] = "Less than a month";
            }
        }
        return response()->json(['data' => $Refs]);
    }

    public function edit($id){
        $Ref = Refs::where('ID_Ref', $id)->first();
        $employee = Informations::where('ID_Salarie', $Ref->ID_Salarie)->first();
        $Ref['employee'] = $employee->Nom . ' ' . $employee->Prenom;
        $taches = Taches::where('ID_Ref', $id)->get();
        $taches = $taches->pluck('tache');
        $taches = $taches->toArray();
        $taches = implode(",", $taches);
        $Ref['taches'] = $taches;
        $informations = Informations::all();
        return view('content.cvs.reference-cv-edit', compact('Ref', 'informations'));
    }

    public function update(Request $request, $id)
    {
        //get reference from database
        $Ref = Refs::where('ID_Ref', $id)->first();
        $Ref->ID_Salarie = $request->employee;
        $Ref->employeur = $request->employeur;
        $Ref->poste = $request->poste;
        $ranges = explode(' to ', $request->range);
        $Ref->dateDebut = $ranges[0];
        $Ref->dateFin = $ranges[1];
        $Ref->domaines = $request->domaines;
        $Ref->save();

        $taches = Taches::where('ID_Ref', $id)->get();
        foreach ($taches as $tache) {
            $tache->delete();
        }
        $taches = explode(',', $request->taches);
        foreach ($taches as $tache) {
            Taches::create([
            'ID_Ref' => $id,
            'tache' => $tache
            ]);
        }
        return response()->json(['message' => 'References updated successfuly']);
    }

    public function destroy($id)
    {
        $Ref = Refs::where('ID_Ref', $id)->first();
        $Ref->archived = true;
        $Ref->save();
        return response()->json(['message' => 'References deleted successfuly']);
    }

    public function restore($id)
    {
        $Ref = Refs::where('ID_Ref', $id)->first();
        $Ref->archived = false;
        $Ref->save();
        return response()->json(['message' => 'References restored successfuly']);
    }
}
