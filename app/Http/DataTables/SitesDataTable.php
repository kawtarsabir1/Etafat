<?php

namespace App\Http\DataTables;

use App\Models\Site;
use App\Services\DTService;
use Yajra\DataTables\Services\DataTable;

use DataTables;

class SitesDataTable 
{
    public $tableDefinition;
    public $searchAttributes;

    public function __construct()
    {
        $this->tableDefinition  = [
            ["title" => '#', "data" => 'action', "orderable"=> false, "searchable"=> false],
            ["title" => "ID", "data"=>"id"],
            ["title" => trans('models.site.fields.code_patrimoine') , "data"=> "code_patrimoine"],
            ["title" => trans('models.site.fields.n_convention') , "data"=> "n_convention"],
            ["title" => trans('models.site.fields.denomination') , "data"=> "denomination"],
            ["title" => trans('models.site.fields.adresse') , "data"=> "adresse"],
            ["title" => trans('models.site.fields.superficie') , "data"=> "superficie"],
            ["title" => trans('models.site.fields.type_detention') , "data"=> "type_detention"],

            ["title" => trans('models.region_bam.title_singular') , "data"=> "region_bam.nom"],
            ["title" => trans('models.region_postale.title_singular') , "data"=> "region_postale.nom"],

        ];

        $this->searchAttributes = [
            [
                "name" => "Site", "inputs" =>
                [
                    ["dom" => "provisoir", "title" => 'models.site.fields.provisoir', "data" => "provisoir", "type" => "select", "values" => ['oui' => 'Oui', 'non' => 'Non'] ],

                    ["dom" => "code", "title" => 'models.site.fields.code', "data" => "code", "type"=> "text"],
                    ["dom" => "code_patrimoine", "title" => 'models.site.fields.code_patrimoine', "data" => "code_patrimoine", "type"=> "text"],
                    ["dom" => "n_convention", "title" => 'models.site.fields.n_convention', "data" => "n_convention", "type"=> "text"],
                    ["dom" => "denomination", "title" => 'models.site.fields.denomination', "data" => "denomination", "type"=> "text"],
                    ["dom" => "adresse", "title" => 'models.site.fields.adresse', "data" => "adresse", "type"=> "text"],
                    ["dom" => "superficie", "title" => 'models.site.fields.superficie', "data" => "superficie", "type"=> "text"],
                    ["dom" => "type_detention", "title" => 'models.site.fields.type_detention', "data" => "type_detention", "type"=> "text"],
                ]
            ],
            [
                "name" => "Localisation", "inputs" =>
                [
                    ["dom" => "region_bam_id", "title" => 'models.region_bam.title_singular', "data" => "region_bam_id", "type" => "select", "values" => \App\Models\RegionBam::pluck('nom', 'id')],
                    ["dom" => "region_postale_id", "title" => 'models.region_postale.title_singular', "data" => "region_postale_id", "type" => "select",  "values" => \App\Models\RegionPostale::pluck('nom', 'id')],

                    ["dom" => "region_id", "title" => 'models.region.title_singular', "data" => "region_id", "type" => "select",  "values" => \App\Models\Region::pluck('nom', 'id')],
                    ["dom" => "province_id", "title" => 'models.province.title_singular', "data" => "province_id", "type" => "select",  "values" => \App\Models\Province::pluck('nom', 'id')],
                    ["dom" => "commune_id", "title" => 'models.commune.title_singular', "data" => "commune_id", "type" => "select",  "values" => \App\Models\Commune::pluck('nom', 'id')]
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
                return DTService::actionColumn($row, "admin.sites", "site_show", "site_edit", "site_delete");
            })
            ->filter(function ($query) {
                if (request()->has('code')) {
                    $query->where('code', 'ILIKE', "%" . request('code') . "%");
                }
                if (request()->has('code_patrimoine')) {
                    $query->where('code_patrimoine', request('code_patrimoine') );
                }
                if (request()->has('n_convention')) {
                    $query->where('n_convention', 'ILIKE', "%" . request('n_convention') . "%");
                }
                if (request()->has('denomination')) {
                    $query->where('denomination', 'ILIKE', "%" . request('denomination') . "%");
                }
                if (request()->has('adresse')) {
                    $query->where('adresse', 'ILIKE', "%" . request('adresse') . "%");
                }
                if (request()->has('superficie')) {
                    $query->where('superficie', 'ILIKE', "%" . request('superficie') . "%");
                }
                if (request()->has('type_detention')) {
                    $query->where('type_detention', 'ILIKE', "%" . request('type_detention') . "%");
                }
                if (request()->has('provisoir')) {
                    $query->where('provisoir', 'ILIKE', "%" . request('provisoir') . "%");
                }else{
                    $query->where('provisoir', 'ILIKE', "non");
                }

                if (request()->has('region_bam_id')) {
                    $query->where('region_bam_id', request('region_bam_id'));
                }
                if (request()->has('region_postale_id')) {
                    $query->where('region_postale_id', request('region_postale_id'));
                }
            }, true)
            ->rawColumns(['action']);
    }


    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\User $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        return Site::with(["region_bam","region_postale"])->newQuery();
    }
}
