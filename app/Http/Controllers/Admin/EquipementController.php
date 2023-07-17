<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyEquipementRequest;
use App\Http\Requests\StoreEquipementRequest;
use App\Http\Requests\UpdateEquipementRequest;
use App\Models\Equipement;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;
use App\Services\FileService;
class EquipementController extends Controller
{

    private $fileService;

    public function __construct(FileService $fileService)
    {
        $this->fileService = $fileService;
    }

    public function index(Request $request)
    {
        abort_if(Gate::denies('equipement_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if (!empty($request->datatable_content)) {
            $query = Equipement::query()->select(sprintf('%s.*', (new Equipement())->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate = 'equipement_show';
                $editGate = 'equipement_edit';
                $deleteGate = 'equipement_delete';
                $crudRoutePart = 'equipements';

                return view('partials.datatablesActions', compact(
                'viewGate',
                'editGate',
                'deleteGate',
                'crudRoutePart',
                'row'
            ));
            });

            $table->editColumn('categorie', function ($row) {
                return $row->categorie ? $row->categorie : '';
            });
            $table->editColumn('famille', function ($row) {
                return $row->famille ? $row->famille : '';
            });
            $table->editColumn('sous_famille', function ($row) {
                return $row->sous_famille ? $row->sous_famille : '';
            });
            $table->editColumn('article', function ($row) {
                return $row->article ? $row->article : '';
            });
            $table->editColumn('marque', function ($row) {
                return $row->marque ? $row->marque : '';
            });
            $table->editColumn('modele', function ($row) {
                return $row->modele ? $row->modele : '';
            });
            $table->editColumn('fournissuer', function ($row) {
                return $row->fournissuer ? $row->fournissuer : '';
            });
            $table->editColumn('valeur_acquisition', function ($row) {
                return $row->valeur_acquisition ? $row->valeur_acquisition : '';
            });

            $table->rawColumns(['actions', 'placeholder']);

            return $table->make(true);
        }

        return view('admin.equipements.index');
    }

    public function create()
    {
        abort_if(Gate::denies('equipement_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.equipements.create');
    }

    public function store(StoreEquipementRequest $request)
    {
        $equipement = Equipement::create($request->all());

        return redirect()->route('admin.equipements.index');
    }

    public function edit(Equipement $equipement)
    {
        abort_if(Gate::denies('equipement_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.equipements.edit', compact('equipement'));
    }

    public function update(UpdateEquipementRequest $request, Equipement $equipement)
    {
        $equipement->update($request->all());

        return redirect()->route('admin.equipements.index');
    }

    public function show(Equipement $equipement)
    {
        abort_if(Gate::denies('equipement_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.equipements.show', compact('equipement'));
    }

    public function destroy(Equipement $equipement)
    {
        abort_if(Gate::denies('equipement_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $equipement->delete();

        return back();
    }

    public function massDestroy(MassDestroyEquipementRequest $request)
    {
        Equipement::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
