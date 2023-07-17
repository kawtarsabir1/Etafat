<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\DataTables\TerrainsDataTable;
use App\Http\Requests\StoreTerrainRequest;
use App\Http\Requests\UpdateTerrainRequest;
use App\Models\Site;
use App\Models\Terrain;
use App\Services\FileService;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TerrainController extends Controller
{
    private $fileService;

    public function __construct(FileService $fileService)
    {
        $this->fileService = $fileService;
    }

    public function index(TerrainsDataTable $dataTable, Request $request)
    {
        abort_if(Gate::denies('terrain_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if (!empty($request->datatable_content)) {
            return $dataTable->datatable()->make(true);
        } else {
            return view('admin.terrains.index')->with("tableDefinition", $dataTable->tableDefinition);
        }
    }

    public function create()
    {
        abort_if(Gate::denies('terrain_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        return view('admin.terrains.create');
    }

    public function store(StoreTerrainRequest $request)
    {
        $terrain = Terrain::create($request->except("file"));
        $files = $request->input("file");

        if (!empty($files)) {
            $this->fileService->processFiles($files, $terrain);
        }

        return redirect()->route('admin.terrains.index');
    }

    public function edit(Terrain $terrain)
    {
        abort_if(Gate::denies('terrain_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $terrain->load('site');

        return view('admin.terrains.edit', compact('terrain'));
    }

    public function update(UpdateTerrainRequest $request, Terrain $terrain)
    {
        $terrain->update($request->all());

        return redirect()->route('admin.terrains.index');
    }

    public function show(Terrain $terrain)
    {
        abort_if(Gate::denies('terrain_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $terrain->load('site', "batiments", 'batiments.etages', "batiments.etages.locals");

        return view('admin.terrains.show', compact('terrain'));
    }

    public function destroy(Terrain $terrain)
    {
        abort_if(Gate::denies('terrain_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $terrain->delete();

        return back();
    }
}
