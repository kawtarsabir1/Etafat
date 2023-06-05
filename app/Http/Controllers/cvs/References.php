<?php

namespace App\Http\Controllers\cvs;

use App\Http\Controllers\Controller;
use App\Models\Informations;
use App\Models\Refs;
use App\Models\Taches;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Dompdf\Dompdf;
use PhpOffice\PhpWord\IOFactory;
use PhpOffice\PhpWord\Settings;
use PhpOffice\PhpWord\TemplateProcessor;
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
        // $file2 = $request->file('fiche');
        // $client = $request->client; 
        // if(file_exists($file2)){
        //     $ficheName =  $client . uniqid() . '.' . $file2->getClientOriginalExtension();
        //     Storage::disk('public')->put('fiches/' . $ficheName, file_get_contents($file2));
        // }

        $file3 = $request->file('logo');
        $client = $request->client;
        $logoName = null;
        if(file_exists($file3)){
            $logoName =  $client . uniqid() . '.' . $file3->getClientOriginalExtension();
            Storage::disk('public')->put('logos/' . $logoName, file_get_contents($file3));
        }
        Refs::create([
            'client' => $client,
            'objet' => $request->objet,
            'mantant' => $request->mantant,
            'annee' => $request->annee,
            'nMarche' => $request->nMarche,
            'attestation' => $fileName,
            'fiche' => $request->fiche,
            'logo' => $logoName,
            'localisation' => $request->localisation,
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

    public function generateFiche(Request $request)
    {

        $domPdfPath = base_path('vendor/dompdf/dompdf');
        Settings::setPdfRendererPath($domPdfPath);
        Settings::setPdfRendererName('DomPDF');

        $templateProcessor = new TemplateProcessor(storage_path('app/public/models/fiche/fiche.docx'));
        $templateProcessor->setValue('client', $request->client);
        $templateProcessor->setValue('objet', $request->objet);
        $templateProcessor->setValue('projet', $request->projet);
        $templateProcessor->setValue('localisation', $request->localisation);
        $templateProcessor->setValue('description', $request->description);
        $templateProcessor->setValue('services', $request->services);
        $templateProcessor->setImageValue('logo', [
            'path' => $request->file('logo')->getPathname(),
            'width' => 100,
            'height' => 100,
            'ratio' => false
        ]);
        $fileName = $request->client . uniqid();
        $tempDocxPath = storage_path('app/public/fiches/' . $fileName . '.docx');
        $templateProcessor->saveAs($tempDocxPath);

        // Convert DOCX to PDF
        $content = IOFactory::load($tempDocxPath);
        $pdfWriter = IOFactory::createWriter($content, 'PDF');

        // Save the PDF
        $pdfPath = storage_path('app/public/fiches/' . $fileName . '.pdf');
        $pdfWriter->save($pdfPath);

        return response()->json(['message' => 'Fiche generated successfuly', 'fileName' => $fileName]);
    }
}
