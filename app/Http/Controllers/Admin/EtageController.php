<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyEtageRequest;
use App\Http\Requests\StoreEtageRequest;

use App\Http\DataTables\EtagesDataTable;

use App\Http\Requests\UpdateEtageRequest;
use App\Models\Batiment;
use App\Models\Etage;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Services\FileService;

class EtageController extends Controller
{
    private $fileService;

    public function __construct(FileService $fileService)
    {
        $this->fileService = $fileService;
    }

    public function index(EtagesDataTable $dataTable, Request $request)
    {
        abort_if(Gate::denies('etage_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if (!empty($request->datatable_content)) {
            return $dataTable->datatable()->make(true);
        } else {
            return view('admin.etages.index')->with("tableDefinition", $dataTable->tableDefinition);
        }
    }

    public function create()
    {
        abort_if(Gate::denies('etage_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.etages.create');
    }

    public function store(StoreEtageRequest $request)
    {
        $etage = Etage::create($request->all());

        return redirect()->route('admin.etages.index');
    }

    public function edit(Etage $etage)
    {
        abort_if(Gate::denies('etage_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $etage->load('batiment');

        return view('admin.etages.edit', compact('etage'));
    }

    public function update(UpdateEtageRequest $request, Etage $etage)
    {
        $etage->update($request->all());

        return redirect()->route('admin.etages.index');
    }

    public function show(Etage $etage)
    {
        abort_if(Gate::denies('etage_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $etage->load('batiment','site','locals');

        return view('admin.etages.show', compact('etage'));
    }

    public function destroy(Etage $etage)
    {
        abort_if(Gate::denies('etage_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $etage->delete();

        return back();
    }

    public function massDestroy(MassDestroyEtageRequest $request)
    {
        Etage::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
