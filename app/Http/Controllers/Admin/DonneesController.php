<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyDonneeRequest;
use App\Http\Requests\StoreDonneeRequest;
use App\Http\Requests\UpdateDonneeRequest;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Services\FileService;
class DonneesController extends Controller
{
    private $fileService;

    public function __construct(FileService $fileService)
    {
        $this->fileService = $fileService;
    }
    public function index()
    {
        abort_if(Gate::denies('donnee_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.donnees.index');
    }

    public function create()
    {
        abort_if(Gate::denies('donnee_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.donnees.create');
    }

    public function store(StoreDonneeRequest $request)
    {
        $donnee = Donnee::create($request->all());

        return redirect()->route('admin.donnees.index');
    }

    public function edit(Donnee $donnee)
    {
        abort_if(Gate::denies('donnee_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.donnees.edit', compact('donnee'));
    }

    public function update(UpdateDonneeRequest $request, Donnee $donnee)
    {
        $donnee->update($request->all());

        return redirect()->route('admin.donnees.index');
    }

    public function show(Donnee $donnee)
    {
        abort_if(Gate::denies('donnee_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.donnees.show', compact('donnee'));
    }

    public function destroy(Donnee $donnee)
    {
        abort_if(Gate::denies('donnee_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $donnee->delete();

        return back();
    }

    public function massDestroy(MassDestroyDonneeRequest $request)
    {
        Donnee::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
