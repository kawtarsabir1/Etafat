<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyConsommationRequest;
use App\Http\Requests\StoreConsommationRequest;
use App\Http\Requests\UpdateConsommationRequest;
use App\Models\Batiment;
use App\Models\Consommation;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Services\FileService;
class ConsommationController extends Controller
{
    private $fileService;

    public function __construct(FileService $fileService)
    {
        $this->fileService = $fileService;
    }
    public function index()
    {
        abort_if(Gate::denies('consommation_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $consommations = Consommation::with(['batiment'])->get();

        return view('admin.consommations.index', compact('consommations'));
    }

    public function create()
    {
        abort_if(Gate::denies('consommation_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $batiments = Batiment::pluck('nom', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.consommations.create', compact('batiments'));
    }

    public function store(StoreConsommationRequest $request)
    {
        $consommation = Consommation::create($request->all());

        return redirect()->route('admin.consommations.index');
    }

    public function edit(Consommation $consommation)
    {
        abort_if(Gate::denies('consommation_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $batiments = Batiment::pluck('nom', 'id')->prepend(trans('global.pleaseSelect'), '');

        $consommation->load('batiment');

        return view('admin.consommations.edit', compact('batiments', 'consommation'));
    }

    public function update(UpdateConsommationRequest $request, Consommation $consommation)
    {
        $consommation->update($request->all());

        return redirect()->route('admin.consommations.index');
    }

    public function show(Consommation $consommation)
    {
        abort_if(Gate::denies('consommation_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $consommation->load('batiment');

        return view('admin.consommations.show', compact('consommation'));
    }

    public function destroy(Consommation $consommation)
    {
        abort_if(Gate::denies('consommation_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $consommation->delete();

        return back();
    }

    public function massDestroy(MassDestroyConsommationRequest $request)
    {
        Consommation::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
