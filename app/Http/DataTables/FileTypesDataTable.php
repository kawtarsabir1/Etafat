<?php

namespace App\Http\DataTables;

use App\Models\FileType;
use App\Services\DTService;
use Yajra\DataTables\Services\DataTable;
use DataTables;

class FileTypesDataTable 
{
    public $tableDefinition;
    public $searchAttributes;

    public function __construct()
    {
        $this->tableDefinition  = [
            ["title" => "#", "data"=>"id"],
            ["title" => trans('models.fileType.fields.name'), "data"=>"name"],
            ["title" => trans('models.fileType.fields.description'), "data"=>"description"], 
            ["title" => 'Action', "data" => 'action', "orderable"=> false, "searchable"=> false],
        ];

        $this->searchAttributes = [
        ];
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
                return DTService::actionColumn($row, "admin.file-types", "file_type_show", "file_type_edit", "file_type_delete");
            });
    }


    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\User $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        return FileType::with(["parent"])->get();
    }

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
}
