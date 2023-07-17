<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\DataTables\SitesDataTable;
use App\Http\Requests\MassDestroySiteRequest;
use App\Http\Requests\StoreSiteRequest;
use App\Http\Requests\UpdateSiteRequest;
use App\Models\Site;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

use Illuminate\Support\Facades\DB;

class SiteController extends Controller
{
    public function index(SitesDataTable $dataTable, Request $request)
    {
        abort_if(Gate::denies('site_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if (!empty($request->datatable_content)) {
            return $dataTable->datatable()->make(true);
        } else {
            return view('admin.sites.index')->with("tableDefinition",$dataTable->tableDefinition);
        }
    }

    public function create()
    {
        abort_if(Gate::denies('site_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.sites.create');
    }

    public function store(StoreSiteRequest $request)
    {
        $site = Site::create($request->except("geom"));
        if(!empty($request->geom)){
            $site->geom = DB::raw("st_geomfromtext('".$request->geom."',3857)");
            $site->save();
        }
        return redirect()->route('admin.sites.index');
    }

    public function edit(Site $site)
    {
        abort_if(Gate::denies('site_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $site->wkt = Site::select(DB::raw(env('POSTGIS_SCHEMA', 'public').".st_astext(geom) as wkt"))->where("id", $site->id)->first()?->wkt;

        return view('admin.sites.edit', compact('site'));
    }

    public function update(UpdateSiteRequest $request, Site $site)
    {
        $site->update($request->except("geom"));
        dump($request->geom);
        $site->geom = DB::raw("st_geomfromtext('".$request->geom."',3857)");
        $site->save();

        return redirect()->route('admin.sites.index');
    }

    public function show(Site $site)
    {
        abort_if(Gate::denies('site_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $site->load('terrains', 'batiments');
        $site->wkt = Site::select(DB::raw(env('POSTGIS_SCHEMA', 'public').".st_astext(geom) as wkt"))->where("id",$site->id)->first()?->wkt;
        $site->consistance =   $site->batiments->map(function ($b){ 
            return   $b->etages->map(function ($e){
                return match($e->niveau) {
                    '-1' => "SS",
                    '0' => "RDC",
                    '1' => "R+1",
                    '2' => "R+2",
                    '3' => "R+3",
                    '4' => "R+4",
                    '5' => "R+5",
                    '6' => "R+6",
                    '7' => "R+7",
                    '8' => "R+8",
                    '9' => "R+9",
                    '10' => "R+10",
                    '11' => "R+11",
                    '12' => "R+12",
                    default => null
                };
                
                
                // $e->niveau == -1 ? "SS" : ($e->niveau == 0 ? 'RDC' : 'x');
            })->implode(' - ');
        })->implode(', ');

 
        return view('admin.sites.show', compact('site'));
    }

    public function destroy(Site $site)
    {
        abort_if(Gate::denies('site_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $site->delete();

        return back();
    }

    public function massDestroy(MassDestroySiteRequest $request)
    {
        Site::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
