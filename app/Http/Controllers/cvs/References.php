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
use PhpOffice\PhpWord\Shared\Html;
use PhpOffice\PhpWord\Element\Text;

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
        if (file_exists($file1)) {
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
        if (file_exists($file3)) {
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

    public function getRefs()
    {
        $Refs = Refs::where('archived', false)->get();
        return response()->json(['data' => $Refs]);
    }

    public function getArchivedRefs()
    {
        $Refs = Refs::where('archived', true)->get();
        return response()->json(['data' => $Refs]);
    }

    public function edit($id)
    {
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
        $templateProcessor->setValue('client', strip_tags($request->client));
        $templateProcessor->setValue('objet', strip_tags($request->objet));
        $templateProcessor->setValue('projet', strip_tags($request->projet));
        $templateProcessor->setValue('localisation', strip_tags($request->localisation));
        
        $descriptionHtml = $request->description;
        $descriptionText = $this->formatText($descriptionHtml);
        $text = new \PhpOffice\PhpWord\Element\Text(html_entity_decode($descriptionText, ENT_QUOTES, 'UTF-8'));
        $templateProcessor->setComplexValue('description', $text);

        $servicesHtml = $request->services;
        $servicesText = $this->formatText($servicesHtml);
        $text = new \PhpOffice\PhpWord\Element\Text(html_entity_decode($servicesText, ENT_QUOTES, 'UTF-8'));
        $templateProcessor->setComplexValue('services', $text);

        $templateProcessor->setImageValue('logo', [
            'path' => $request->file('logo')->getPathname(),
            'width' => 100,
            'height' => 100,
            'ratio' => false
        ]);
        $fileName = $request->client . uniqid();
        $tempDocxPath = storage_path('app/public/fiches/' . $fileName . '.docx');
        $templateProcessor->saveAs($tempDocxPath);


        //convert docx to pdf
        $phpWord = \PhpOffice\PhpWord\IOFactory::load($tempDocxPath);
        $xmlWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'PDF');
        $xmlWriter->save(storage_path('app/public/fiches/' . $fileName . '.pdf'));


        return response()->json(['message' => 'Fiche generated successfuly', 'fileName' => $fileName]);
    }

    public function formatText($Html)
    {
        $allowedTags = '<br><p><ul><li><ol><strong><em><u><span><h1><h2><h3><h4><h5><h6><img><table><tr><td><th><thead><tbody><tfoot>';
        $Text = strip_tags($Html, $allowedTags);

        // Replace <ul> and <ol> tags with formatted lists
        $Text = preg_replace('/<ul.*?>/', "\n", $Text);
        $Text = preg_replace('/<ol.*?>/', "\n", $Text);
        $Text = preg_replace('/<\/ul>/', "\n", $Text);
        $Text = preg_replace('/<\/ol>/', "\n", $Text);
        $Text = preg_replace('/<li.*?>/', "\n• ", $Text);
        $Text = preg_replace('/<\/li>/', "\n", $Text);

        // Replace <br> tags with line breaks
        $Text = preg_replace('/<br.*?>/', "\n", $Text);

        // Replace <p> tags with line breaks
        $Text = preg_replace('/<p.*?>/', "\n", $Text);
        $Text = preg_replace('/<\/p>/', "\n", $Text);

        // Remove remaining HTML tags
        $Text = strip_tags($Text);

        return $Text;
    }
}
