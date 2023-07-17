<?php

namespace App\Http\DataTables;

use App\Models\Local;
use App\Services\DTService;
use Yajra\DataTables\Services\DataTable;
use DataTables;

class LocalsDataTable 
{
    public $tableDefinition;
    public $searchAttributes;

    public function __construct()
    {
        $this->tableDefinition  = [
            ["title" => 'Action', "data" => 'action', "orderable"=> false, "searchable"=> false],
            ["title" => trans('models.local.fields.id'), "data"=>"id"],
            ["title" => trans('models.local.fields.code'), "data"=>"code"],
            ["title" => trans('models.local.fields.denomination'), "data"=>"denomination"],
            ["title" => trans('models.etage.fields.type_detention'), "data"=>"type_detention"],

            ["title" => trans('models.site.title_singular'), "data"=>"site.denomination"],
            ["title" => trans('models.etage.title_singular'), "data"=>"niveau"],
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
            // ->addcolumn("site", function ($row) {
            //     if(!empty($row->site)){
            //         return '<a href="'.route('admin.sites.show',[$row->site->id]).'">'.$row->site->denomination .'</a>';
            //     }else{
            //         return "";
            //     }
            // })
            // ->addcolumn("etage", function ($row) {
            //     if(!empty($row->etage)){
            //         return '<a href="'.route('admin.etages.show',[$row->etage->id]).'">'.$row->etage->niveau .'</a>';
            //     }else{
            //         return "";
            //     }
            // })
            ->addColumn('action', function ($row) {
                return DTService::actionColumn($row, "admin.locals", "local_show", "local_edit", "local_delete");
            })
            ->addColumn('niveau', function ($row) {
                if($row->etage->niveau == -1){
                    return "SS";
                }else if($row->etage->niveau == 0){
                    return "RDC";
                }else{
                    return "R+".$row->etage->niveau;
                }
                // return DTService::actionColumn($row, "admin.etages", "etage_show", "etage_edit", "etage_delete");
            })
            ->filter(function ($query) {
                if (request()->has('site')) {
                    $query->where('sitex', 'like', "%" . request('name') . "%");
                }
                if (request()->has('provisoir')) {
                    $query->where('provisoir', 'ILIKE', "%" . request('provisoir') . "%");
                }else{
                    $query->where('provisoir', 'ILIKE', "non");
                }
            }, true)
            ->rawColumns(['action',"site","etage"]);
    }


    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\local $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        return local::with(["etage","site:id,denomination"])->newQuery();
    }
}
