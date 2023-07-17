<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyLocalRequest;

use App\Http\DataTables\LocalsDataTable;

use App\Http\Requests\StoreLocalRequest;
use App\Http\Requests\UpdateLocalRequest;
use App\Models\Etage;
use App\Models\Local;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Services\FileService;



use Modules\Processus\Services\Theme\GetRelationshipInfoService;
use Modules\Processus\Services\Theme\GetRelationshipDataService;


class LocalController extends Controller
{
    private $fileService;

    public function __construct(FileService $fileService)
    {
        $this->fileService = $fileService;
    }

    public function index(LocalsDataTable $dataTable, Request $request)
    {
        abort_if(Gate::denies('local_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if (!empty($request->datatable_content)) {
            return $dataTable->datatable()->make(true);
        } else {
            return view('admin.locals.index')->with("tableDefinition",$dataTable->tableDefinition);
        }
    }

    public function create()
    {
        abort_if(Gate::denies('local_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.locals.create');
    }

    public function store(StoreLocalRequest $request)
    {
        $local = Local::create($request->all());

        return redirect()->route('admin.locals.index');
    }

    public function edit(Local $local)
    {
        abort_if(Gate::denies('local_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $local->load('etage');

        return view('admin.locals.edit', compact('local'));
    }

    public function update(UpdateLocalRequest $request, Local $local)
    {
        $local->update($request->all());

        return redirect()->route('admin.locals.index');
    }

    public function show(Local $local)
    {
        abort_if(Gate::denies('local_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $local->load('etage','site');

        // $service = new GetRelationshipDataService();
        // $rs = $service->execute($local->id,null,'App\Models\Local');
        
        // $relations  = [];
        // $service->flatten($rs,$relations);

        
        return view('admin.locals.show', compact('local'));
    }


    // public function getData(Request $request)
    // {
    //     $requete_id = $request->requete_id;
    //     $etat_id = $request->etat_id;
    //     $formulaire_id = $request->formulaire_id;

    //     $formulaire = Formulaire::findorfail($formulaire_id);
    //     $requete = Requete::findorfail($requete_id);




    //     $theme = null;
    //     if (!empty($requete->model)) {
    //         $model = $requete->model::findorfail($requete->object_id);
    //     } else {
    //         $theme = Theme::findorfail($requete->theme_id);
    //     }


    //     if (!empty($model)) {
    //         $data = (new GetRelationshipDataService())->execute($requete->object_id, $theme, $requete->model);
    //         return response()->json($this->getDataChilds($data, $formulaire->theme_id, []), 200);
    //     } else {
    //         if ($formulaire->theme_id == $requete->theme_id) {
    //             return response()->json(
    //                 [
    //                     "parent"=>[],
    //                     "relation"=>null,
    //                     "relation_key"=>null,
    //                     "rows" => (new getThemeDataService())->execute($theme)->where("id", $requete->object_id)
    //                 ]
    //             );
    //         } else {
    //             $data = (new GetRelationshipDataService())->execute($requete->object_id, $theme, null);
    //             return response()->json($this->getDataChilds($data, $formulaire->theme_id, []), 200);
    //         }
    //     }
    // }

    // private function getDataChilds($array, $id, $parent)
    // {
    //     foreach ($array as $d) {
    //         if ($d["theme_id"] == $id) {
    //             return  ["rows"=>$d["data"],"parent"=>$parent,"relation"=>$d["relation"],"relation_key"=>$d["relation_key"]];
    //         } else {
    //             $rs = $this->getDataChilds($d["childs"], $id, ["data"=>$d["data"],"theme_id"=>$d["theme_id"]]);
    //             if (!empty($rs)) {
    //                 return $rs;
    //             }
    //         }
    //     }
    //     return null;
    // }


    public function destroy(Local $local)
    {
        abort_if(Gate::denies('local_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $local->delete();

        return back();
    }

    public function massDestroy(MassDestroyLocalRequest $request)
    {
        Local::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
