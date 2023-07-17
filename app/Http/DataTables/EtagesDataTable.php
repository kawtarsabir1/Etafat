<?php

namespace App\Http\DataTables;

use App\Models\Etage;
use App\Services\DTService;
use Yajra\DataTables\Services\DataTable;
use DataTables;

class EtagesDataTable 
{
    public $tableDefinition;
    public $searchAttributes;

    public function __construct()
    {
        $this->tableDefinition  = [
            ["title" => '#', "data" => 'action', "orderable"=> false, "searchable"=> false],
            ["title" => "ID", "data"=>"id"],
            ["title" => trans('models.etage.fields.niveau'), "data"=>"niveau"],
            ["title" => trans('models.etage.fields.code'), "data"=>"code"],
            ["title" => trans('models.etage.fields.type_detention'), "data"=>"type_detention"],
            ["title" => trans('models.batiment.title_singular'), "data"=>"batiment.code"],
            ["title" => trans('models.site.title_singular'), "data"=>"site.denomination"],
        ];
        $this->searchAttributes = [];

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
                return DTService::actionColumn($row, "admin.etages", "etage_show", "etage_edit", "etage_delete");
            })
            ->addColumn('niveau', function ($row) {
                if($row->niveau == -1){
                    return "SS";
                }else if($row->niveau == 0){
                    return "RDC";
                }else{
                    return "R+".$row->niveau;
                }
                // return DTService::actionColumn($row, "admin.etages", "etage_show", "etage_edit", "etage_delete");
            })
            ->filter(function ($query) {
                if (request()->has('site')) {
                    $query->where('sitex', 'like', "%" . request('name') . "%");
                }
                if (request()->has('site')) {
                    $query->where('sitex', 'like', "%" . request('name') . "%");
                }
                if (request()->has('site')) {
                    $query->where('sitex', 'like', "%" . request('name') . "%");
                }
                if (request()->has('provisoir')) {
                    $query->where('provisoir', 'ILIKE', "%" . request('provisoir') . "%");
                }else{
                    $query->where('provisoir', 'ILIKE', "non");
                }
                if (request()->has('site')) {
                    $query->where('sitex', 'like', "%" . request('name') . "%");
                }
                if (request()->has('site')) {
                    $query->where('sitex', 'like', "%" . request('name') . "%");
                }
                if (request()->has('site')) {
                    $query->where('sitex', 'like', "%" . request('name') . "%");
                }
                if (request()->has('site')) {
                    $query->where('sitex', 'like', "%" . request('name') . "%");
                }
            }, true)
            ->rawColumns(['action',"site","batiment"]);
    }


    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Etage $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        return Etage::with(["batiment","site:id,denomination"])->newQuery();
    }
}
