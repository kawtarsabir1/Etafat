<?php

namespace App\Http\DataTables;

use App\Models\User;
use App\Services\DTService;
use Yajra\DataTables\Services\DataTable;
use DataTables;

class UsersDataTable 
{
    public $tableDefinition;
    public $searchAttributes;

    public function __construct()
    {
        $this->tableDefinition  = [
            ["title" => "#", "data"=>"avatar"],
            ["title" => trans('models.user.fields.name'), "data"=>"name"],
            ["title" => trans('models.user.fields.email'), "data"=>"email"],
            ["title" => trans('models.user.fields.roles'), "data"=>"roles"],
            ["title" => 'Action', "data" => 'action', "orderable"=> false, "searchable"=> false],
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
            ->addcolumn("avatar", function ($row) {
                return DTService::renderAvatar($row);
            })
            ->addcolumn("roles", function ($row) {
                $content = "";
                foreach ($row->roles as $role) {
                    $content .= '<span class="badge rounded-pill bg-primary">'.$role->title .'</span>';
                }
                return $content;
            })
            ->addColumn('action', function ($row) {
                return DTService::actionColumn($row, "admin.users", "user_show", "user_edit", "user_delete");
            })
            ->filter(function ($query) {
                if (request()->has('site')) {
                    $query->where('sitex', 'like', "%" . request('name') . "%");
                }
            }, true)
            ->rawColumns(['avatar','action',"roles"]);
    }


    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\User $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        return User::with(["roles"])->get();
    }
}
