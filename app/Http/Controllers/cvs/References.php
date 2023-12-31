<?php

namespace App\Http\Controllers\cvs;

use App\Http\Controllers\Controller;
use App\Models\Informations;
use App\Models\Refs;
use App\Models\Societe;
use App\Models\Taches;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Dompdf\Dompdf;
use PhpOffice\PhpWord\IOFactory;
use PhpOffice\PhpWord\Settings;
use PhpOffice\PhpWord\TemplateProcessor;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\RefsImport;
use App\Models\Category;

class References extends Controller
{
    public function index()
    {
        return view('content.cvs.references-cv');
    }

    public function upload(Request $request)
    {
      $file = $request->file('file');
      Excel::import(new RefsImport, $file);
      return response()->json(['message' => 'Employees added successfuly']);
    }

    public function archived(Request $request)
    {
        return view('content.cvs.references-cv-archived');
    }

    public function create()
    {
        //get all societes
        $societes = Societe::all();
        return view('content.cvs.references-cv-create', compact('societes'));
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

        $file2 = $request->file('logo');
        $client = $request->client;
        $logoName = null;
        if (file_exists($file2)) {
            $logoName =  $client . uniqid() . '.' . $file2->getClientOriginalExtension();
            Storage::disk('public')->put('logos/' . $logoName, file_get_contents($file2));
        }

        $file3 = $request->file('ficheExist');
        $client = $request->client;
        $ficheExistName = null;
        if (file_exists($file3)) {
            $ficheExistName =  $client . uniqid() . '.' . $file3->getClientOriginalExtension();
            Storage::disk('public')->put('fichesExist/' . $ficheExistName, file_get_contents($file3));
        }
        Refs::create([
            'client' => $client,
            'objet' => $request->objet,
            'mantant' => str_replace(' ', '', $request->mantant),
            'montantTraveaux' => str_replace(' ', '', $request->montantTraveaux),
            'annee' => $request->annee,
            'nMarche' => $request->nMarche,
            'attestation' => $fileName,
            'fiche' => $request->fiche,
            'logo' => $logoName,
            'localisation' => $request->localisation,
            'categories' => $request->categories,
            'missions' => $request->missions,
            'description' => $request->description,
            'societe' => $request->societe,
            'nRef' => $request->nRef,
            'nIntern' => $request->nIntern,
            'groupement' => $request->groupement,
            'part' => str_replace('%', '', $request->part),
            'ficheExist' => $ficheExistName,
            'archived' => false
        ]);

        return response()->json(['message' => 'References added successfuly']);
    }

    public function getRefs()
    {
        $Refs = Refs::where('archived', false)->get();
        foreach($Refs as $Ref){
            $Ref->societe = Societe::where('id', $Ref->societe)->first()->societeNom;
            $categories = [];
            $categoriesIds = explode(',', $Ref->categories);
            foreach($categoriesIds as $category){
                $categories[] = Category::where('id', $category)->first()->categoryNom;
            }
            $Ref->categories = implode(',', $categories);
        }
        return response()->json(['data' => $Refs]);
    }

    public function getArchivedRefs()
    {
        $Refs = Refs::where('archived', true)->get();
        foreach($Refs as $Ref){
            $Ref->societe = Societe::where('id', $Ref->societe)->first()->societeNom;
            $categories = [];
            $categoriesIds = explode(',', $Ref->categories);
            foreach($categoriesIds as $category){
                $categories[] = Category::where('id', $category)->first()->categoryNom;
            }
            $Ref->categories = implode(',', $categories);
        }
        return response()->json(['data' => $Refs]);
    }

    public function edit($id)
    {
        $Ref = Refs::where('ID_Ref', $id)->first();
        $societes = Societe::all();
        $categories = [];
        $categoriesIds = explode(',', $Ref->categories);
        foreach($categoriesIds as $category){
            $categories[] = Category::where('id', $category)->first()->categoryNom;
        }
        $Ref->categories = implode(',', $categories);
        return view('content.cvs.reference-cv-edit', compact('Ref', 'societes'));
    }

    public function view($id)
    {
        $Ref = Refs::where('ID_Ref', $id)->first();
        $Ref->societe = Societe::where('id', $Ref->societe)->first()->societeNom;
        $categories = [];
        $categoriesIds = explode(',', $Ref->categories);
        foreach($categoriesIds as $category){
            $categories[] = Category::where('id', $category)->first()->categoryNom;
        }
        $Ref->categories = implode(',', $categories);
        return view('content.cvs.reference-view', compact('Ref'));
    }

    public function update(Request $request, $id)
    {
        $Ref = Refs::where('ID_Ref', $id)->first();
        $Ref->nMarche = $request->nMarche;
        $Ref->client = $request->client;
        $Ref->mantant = $request->mantant;
        $Ref->montantTraveaux = $request->montantTraveaux;
        $Ref->categories = $request->categories;
        $Ref->annee = $request->annee;
        $Ref->description = $request->description;
        $Ref->nRef = $request->nRef;
        $Ref->nIntern = $request->nIntern;
        $Ref->groupement = $request->groupement;
        $Ref->part = $request->part;
        $Ref->societe = $request->societe;
        $Ref->missions = $request->missions;
        $Ref->localisation = $request->localisation;
        $Ref->objet = $request->objet;
        $Ref->fiche = $request->fiche;
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
