<?php

namespace App\Http\DataTables;

use App\Models\Site;
use App\Models\Terrain;
use App\Services\DTService;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTableAbstract;
use Yajra\DataTables\Services\DataTable;

use DataTables;

class TerrainsDataTable 
{
    public $tableDefinition;
    public $searchAttributes;

    public function __construct()
    {
        $this->tableDefinition = [
            ["title" => '#', "data" => 'action', "orderable" => false, "searchable" => false],
            ["title" => "ID", "data" => "id"],

            ["title" => trans('models.terrain.fields.nom') , "data"=>"nom"],
            ["title" => trans('models.terrain.fields.superficie') , "data"=>"superficie"],
            ["title" => trans('models.terrain.fields.superficie_batie') , "data"=>"superficie_batie"],
            ["title" => trans('models.terrain.fields.titre_foncier') , "data"=>"titre_foncier"],
            ["title" => trans('models.terrain.fields.requisition') , "data"=>"requisition"],
            ["title" => trans('models.terrain.fields.propretaire') , "data"=>"propretaire"],
            ["title" => trans('models.terrain.fields.prix_acquisition') , "data"=>"prix_acquisition"],
            ["title" => trans('models.terrain.fields.statut_foncier') , "data"=>"statut_foncier"],
            ["title" => trans('models.terrain.fields.type_detention') , "data"=>"type_detention"],
            // ["title" => trans('models.terrain.fields.agence') , "data"=>"agence"],
            // ["title" => trans('models.terrain.fields.type_terrain') , "data"=>"type_terrain"],

            ["title" => trans('models.site.title_singular'), "data" => "site.denomination"],
            ["title" => trans('models.site.fields.adresse'), "data" => "site.adresse"],

        ];

        $this->searchAttributes = [
            [
                "name" => trans('models.terrain.title_singular'), "inputs" =>
                [
                    ["dom" => "nom", "title" => 'models.terrain.fields.nom', "data" => "nom", "type" => "text"],
                    ["dom" => "superficie", "title" => 'models.terrain.fields.superficie', "data" => "superficie", "type" => "text"],
                    ["dom" => "superficie_batie", "title" => 'models.terrain.fields.superficie_batie', "data" => "superficie_batie", "type" => "text"],
                    ["dom" => "titre_foncier", "title" => 'models.terrain.fields.titre_foncier', "data" => "titre_foncier", "type" => "text"],
                    ["dom" => "requisition", "title" => 'models.terrain.fields.requisition', "data" => "requisition", "type" => "text"],
                    ["dom" => "propretaire", "title" => 'models.terrain.fields.propretaire', "data" => "propretaire", "type" => "text"],
                    ["dom" => "prix_acquisition", "title" => 'models.terrain.fields.prix_acquisition', "data" => "prix_acquisition", "type" => "text"],
                    ["dom" => "statut_foncier", "title" => 'models.terrain.fields.statut_foncier', "data" => "statut_foncier", "type" => "text"],
                    ["dom" => "type_detention", "title" => 'models.terrain.fields.type_detention', "data" => "type_detention", "type" => "text"],
                    ["dom" => "agence", "title" => 'models.terrain.fields.agence', "data" => "agence", "type" => "text"],
                    ["dom" => "type_terrain", "title" => 'models.terrain.fields.type_terrain', "data" => "type_terrain", "type" => "text"],

                ]
            ],
            [
                "name" => trans('models.site.title_singular'), "inputs" =>
                [
                    ["dom" => "site_id", "title" => 'models.site.title_singular', "data" => "site_id", "type" => "select", "values" => Site::pluck('denomination', 'id')],
                    ["dom" => "adresse", "title" => 'models.site.fields.adresse', "data" => "adresse", "type" => "text"],
                    ["dom" => "code", "title" => 'models.site.fields.code', "data" => "code", "type" => "text"],
                    ["dom" => "code_patrimoine", "title" => 'models.site.fields.code_patrimoine', "data" => "code_patrimoine", "type" => "text"],
                ]
            ]
        ];
    }

    /**
     * @return array
     */
    public function getTableDefinition(): array
    {
        return $this->tableDefinition;
    }

    /**
     * @return array
     */
    public function getSearchAttributes(): array
    {
        return $this->searchAttributes;
    }

    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return DataTableAbstract
     */
    public function datatable(Request $request = null)
    { 
        return Datatables::of($this->query())
            ->addIndexColumn()
            ->addColumn('action', function ($row) {
                return DTService::actionColumn($row, "admin.terrains", "terrain_show", "terrain_edit", "terrain_delete");
            })->filter(function ($query) { 
                if (request()->has('nom')) {
                    $query->where("nom", 'ILIKE', '%'.request("nom").'%');
                }
                if (request()->has('superficie')) {
                    $query->where("superficie", 'ILIKE', '%'.request("superficie").'%');
                }
                if (request()->has('superficie_batie')) {
                    $query->where("superficie_batie", 'ILIKE', '%'.request("superficie_batie").'%');
                }
                if (request()->has('titre_foncier')) {
                    $query->where("titre_foncier", 'ILIKE', '%'.request("titre_foncier").'%');
                }
                if (request()->has('provisoir')) {
                    $query->where('provisoir', 'ILIKE', "%" . request('provisoir') . "%");
                }else{
                    $query->where('provisoir', 'ILIKE', "non");
                }
                if (request()->has('requisition')) {
                    $query->where("requisition", 'ILIKE', '%'.request("requisition").'%');
                }
                if (request()->has('propretaire')) {
                    $query->where("propretaire", 'ILIKE', '%'.request("propretaire").'%');
                }
                if (request()->has('prix_acquisition')) {
                    $query->where("prix_acquisition", 'ILIKE', '%'.request("prix_acquisition").'%');
                }
                if (request()->has('statut_foncier')) {
                    $query->where("statut_foncier", 'ILIKE', '%'.request("statut_foncier").'%');
                }
                if (request()->has('type_detention')) {
                    $query->where("type_detention", 'ILIKE', '%'.request("type_detention").'%');
                }
                if (request()->has('agence')) {
                    $query->where("agence", 'ILIKE', '%'.request("agence").'%');
                }
                if (request()->has('type_terrain')) {
                    $query->where("type_terrain", 'ILIKE', '%'.request("type_terrain").'%');
                }

                //sites
                if (request()->has('site_id')) {
                    $query->where('site_id', request('site_id'));
                }
                if (request()->has('adresse')) {
                    $sites = Site::where("adresse", 'ILIKE', '%'.request("adresse").'%')->pluck("id");
                    $query->whereIn('site_id', $sites);
                }
                if (request()->has('code')) {
                    $sites = Site::where("code", 'ILIKE', '%'.request("code").'%')->pluck("id");
                    $query->whereIn('site_id', $sites);
                }
                if (request()->has('code_patrimoine')) {
                    $sites = Site::where("code_patrimoine", request("code_patrimoine"))->pluck("id");
                    $query->whereIn('site_id', $sites);
                }
            }, true)
            ->rawColumns(['action']);
    }


    /**
     * Get query source of dataTable.
     *
     * @param Terrain $model
     * @return Builder
     */
    public function query()
    {
        return Terrain::with(["site:id,denomination,adresse,code"])->newQuery();
    }
}
