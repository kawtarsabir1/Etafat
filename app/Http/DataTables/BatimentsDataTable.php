<?php

namespace App\Http\DataTables;

use App\Models\Batiment;
use App\Models\Terrain;

use App\Models\Site;


use App\Services\DTService;
use Yajra\DataTables\Services\DataTable;

use DataTables;


class BatimentsDataTable 
{
    public $tableDefinition;
    public $searchAttributes;

    public function __construct()
    {
        $this->tableDefinition  = [
            ["title" => '#', "data" => 'action', "orderable"=> false, "searchable"=> false],
            ["title" => "ID", "data"=>"id"],
            ["title" => trans('models.batiment.fields.code'),"data"=>"code"],
            ["title" => trans('models.batiment.fields.denomination'),"data"=>"denomination"],
            ["title" => trans('models.batiment.fields.carnet_sante'),"data"=>"carnet_sante"],
            ["title" => trans('models.etage.fields.type_detention'), "data"=>"type_detention"],

            ["title" => trans('models.terrain.title_singular'),"data"=>"terrain.nom"],
            ["title" => trans('models.site.title_singular'),"data"=>"site.denomination"],
        ];

        $this->searchAttributes = [
            [
                "name" => trans('models.batiment.title_singular'), "inputs" =>
                [
                    ["dom" => "titre_foncier", "title" => 'models.batiment.fields.titre_foncier', "data" => "titre_foncier", "type" => "text"],
                    ["dom" => "requisition", "title" => 'models.batiment.fields.requisition', "data" => "requisition", "type" => "text"],
                    ["dom" => "proprietaire", "title" => 'models.batiment.fields.proprietaire', "data" => "proprietaire", "type" => "text"],
                    ["dom" => "carnet_sante", "title" => 'models.batiment.fields.carnet_sante', "data" => "carnet_sante", "type" => "text"],
                    ["dom" => "prix_acquisition", "title" => 'models.batiment.fields.prix_acquisition', "data" => "prix_acquisition", "type" => "text"],
                ]
            ],
            [
                "name" => trans('models.terrain.title_singular'), "inputs" =>
                [
                    ["dom" => "nom_terrain", "title" => 'models.terrain.fields.nom', "data" => "nom_terrain", "type" => "text"],
                    ["dom" => "tf_terrain", "title" => 'models.terrain.fields.titre_foncier', "data" => "tf_terrain", "type" => "text"],
                    ["dom" => "requisition_terrain", "title" => 'models.terrain.fields.requisition', "data" => "requisition_terrain", "type" => "text"],
                    ["dom" => "propretaire_terrain", "title" => 'models.terrain.fields.propretaire', "data" => "propretaire_terrain", "type" => "text"],
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
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function datatable(Request $request = null)
    {
        return Datatables::of($this->query())
            ->addIndexColumn()
            ->addColumn('action', function ($row) {
                return DTService::actionColumn($row, "admin.batiments", "batiment_show", "batiment_edit", "batiment_delete");
            })->filter(function ($query) { 
                if (request()->has('titre_foncier')) {
                    $query->where("titre_foncier", 'ILIKE', '%'.request("titre_foncier").'%');
                }
                if (request()->has('requisition')) {
                    $query->where("requisition", 'ILIKE', '%'.request("requisition").'%');
                }
                if (request()->has('proprietaire')) {
                    $query->where("proprietaire", 'ILIKE', '%'.request("proprietaire").'%');
                }
                if (request()->has('provisoir')) {
                    $query->where('provisoir', 'ILIKE', "%" . request('provisoir') . "%");
                }else{
                    $query->where('provisoir', 'ILIKE', "non");
                }
                if (request()->has('carnet_sante')) {
                    $query->where("carnet_sante", 'ILIKE', '%'.request("carnet_sante").'%');
                }
                if (request()->has('prix_acquisition')) {
                    $query->where("prix_acquisition", 'ILIKE', '%'.request("prix_acquisition").'%');
                }

                //terrain
                if (request()->has('nom_terrain')) {
                    $terrains = Terrain::where("nom", 'ILIKE', '%'.request("nom_terrain").'%')->pluck("id");
                    $query->whereIn('terrain_id', $terrains);
                }

                if (request()->has('tf_terrain')) {
                    $terrains = Terrain::where("titre_foncier", 'ILIKE', '%'.request("tf_terrain").'%')->pluck("id");
                    $query->whereIn('terrain_id', $terrains);
                }
                if (request()->has('requisition_terrain')) {
                    $terrains = Terrain::where("requisition", 'ILIKE', '%'.request("requisition_terrain").'%')->pluck("id");
                    $query->whereIn('terrain_id', $terrains);
                }
                if (request()->has('propretaire_terrain')) {
                    $terrains = Terrain::where("propretaire", request("propretaire_terrain"))->pluck("id");
                    $query->whereIn('terrain_id', $terrains);
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
            
            ->rawColumns(["action"]);
    }


    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Batiment $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        return Batiment::with(["site:id,denomination","terrain:id,nom"])->newQuery();
    }
}
