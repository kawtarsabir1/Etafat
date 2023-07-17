<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyBatimentRequest;
use App\Http\Requests\StoreBatimentRequest;

use App\Http\DataTables\BatimentsDataTable;

use App\Http\Requests\UpdateBatimentRequest;
use App\Models\Batiment;
use App\Models\Site;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Services\FileService;



class BatimentController extends Controller
{

    private $fileService;

    public function __construct(FileService $fileService)
    {
        $this->fileService = $fileService;
    }

    
    public function index(BatimentsDataTable $dataTable, Request $request)
    {
        abort_if(Gate::denies('batiment_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if (!empty($request->datatable_content)) {
            return $dataTable->datatable()->make(true);
        } else {
            return view('admin.batiments.index')->with("tableDefinition",$dataTable->tableDefinition);
        }
    }


    public function create()
    {
        abort_if(Gate::denies('batiment_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.batiments.create');
    }

    public function store(StoreBatimentRequest $request)
    {
        $batiment = Batiment::create($request->all());

        return redirect()->route('admin.batiments.index');
    }

    public function edit(Batiment $batiment)
    {
        abort_if(Gate::denies('batiment_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $batiment->load('site');

        return view('admin.batiments.edit', compact('batiment'));
    }

    public function update(UpdateBatimentRequest $request, Batiment $batiment)
    {
        $batiment->update($request->all());

        return redirect()->route('admin.batiments.index');
    }

    public function show(Batiment $batiment)
    {
        abort_if(Gate::denies('batiment_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $batiment->load('site', 'terrain', 'etages',"etages.locals");

        return view('admin.batiments.show', compact('batiment'));
    }

    public function destroy(Batiment $batiment)
    {
        abort_if(Gate::denies('batiment_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $batiment->delete();

        return back();
    }

    public function massDestroy(MassDestroyBatimentRequest $request)
    {
        Batiment::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
