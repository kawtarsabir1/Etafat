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
        return view('content.cvs.references-cv-create');
    }

    public function store(Request $request)
    {
        $file1 = $request->file('attestation');
        $client = $request->client; 
        $fileName = null;
        if(file_exists($file1)){
            $fileName =  $client . uniqid() . '.' . $file1->getClientOriginalExtension();
            Storage::disk('public')->put('attestation/' . $fileName, file_get_contents($file1));
        }
        $file2 = $request->file('fiche');
        $client = $request->client; 
        $ficheName = null;
        if(file_exists($file2)){
            $ficheName =  $client . uniqid() . '.' . $file2->getClientOriginalExtension();
            Storage::disk('public')->put('fiches/' . $ficheName, file_get_contents($file2));
        }
        Refs::create([
            'client' => $client,
            'objet' => $request->objet,
            'mantant' => $request->mantant,
            'annee' => $request->annee,
            'nMarche' => $request->nMarche,
            'attestation' => $fileName,
            'fiche' => $ficheName,
            'category' => $request->category,
            'missions' => $request->missions,
            'description' => $request->description,
            'societe' => $request->societe,
            'nRef' => $request->nRef,
            'archived' => false
        ]);

        return response()->json(['message' => 'References added successfuly']);
    }

    public function getRefs(){
        $Refs = Refs::where('archived', false)->get();
        return response()->json(['data' => $Refs]);
    }

    public function getArchivedRefs(){
        $Refs = Refs::where('archived', true)->get();
        return response()->json(['data' => $Refs]);
    }

    public function edit($id){
        $Ref = Refs::where('ID_Ref', $id)->first();
        return view('content.cvs.reference-cv-edit', compact('Ref'));
    }

    public function update(Request $request, $id)
    {
        //get reference from database
        $Ref = Refs::where('ID_Ref', $id)->first();
        $Ref->nMarche = $request->nMarche;
        $Ref->client = $request->client;
        $Ref->mantant = $request->mantant;
        $Ref->category = $request->category;
        $Ref->annee = $request->annee;
        $Ref->description = $request->description;
        $Ref->nRef = $request->nRef;
        $Ref->societe = $request->societe;
        $Ref->missions = $request->missions;
        $Ref->save();
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
