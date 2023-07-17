<?php

namespace App\Http\DataTables;

use App\Models\Role;
use App\Services\DTService;
use Yajra\DataTables\Services\DataTable;
use DataTables;

class RolesDataTable 
{
    public $tableDefinition;
    public $searchAttributes;

    public function __construct()
    {
        $this->tableDefinition  = [
            ["title" => "#", "data"=>"id"],
            ["title" => trans('models.role.fields.title'), "data"=>"title"],
            ["title" => trans('models.role.fields.description'), "data"=>"description"],
            ["title" => trans('models.role.fields.users'), "data"=>"users"],
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

            ->addcolumn("users", function ($row) {
                $content = '<div class="avatar-group">';

                
            


                foreach ($row->users as $user) {
                    $content .= '
                    <div
                        data-bs-toggle="tooltip"
                        data-popup="tooltip-custom"
                        data-bs-placement="top"
                        title="'.$user->name.'"
                        class="avatar pull-up"
                    >';
                    if(!empty($user->avatar)){
                        $content .= '<img src="'.$user->avatar.'" alt="Avatar" height="32" width="32" />';

                    }else{
                        $content .= '<img src="'.asset('images/avatar.png').'" alt="Avatar" height="32" width="32" />';

                    }
                    $content .= '</div>';

                }
                return $content.'</div>';
            })
            ->addColumn('action', function ($row) {
                return DTService::actionColumn($row, "admin.roles", "role_show", "role_edit", "role_delete");
            })
            ->rawColumns(['users','action']);
    }


    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\role $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        return Role::with(["users"])->newQuery();
    }
}
