<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyRoleRequest;
use App\Http\Requests\UpsertRoleRequest;
use App\Models\Permission;
use App\Models\Role;
use App\Models\PermissionRole;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

use App\Services\PermissionService;


use App\Http\DataTables\RolesDataTable;


class RolesController extends Controller
{
    public function index()
    {
        return view('admin.roles.index');
    }

    public function get()
    {
        return response()->json(Role::All());
    }

    public function allRoles()
    {
        $users = Role::with(['users'])->get();
        return response()->json(['data' => $users], 200);
    }

    public function create()
    {
        // abort_if(Gate::denies('role_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        // $permissions = (new PermissionService())->process();
        //get all permissions
        $permissions = Permission::all()->pluck('title', 'id');

        return view('admin.roles.create', compact('permissions'));
    }

    public function store(Request $request)
    {
        $role = Role::create($request->except('permissions'));
        $permissions = explode(',',$request->permissions);
        for($i=0; $i<count($permissions); $i++){
            $permissionRole = new PermissionRole();
            $permissionRole->permission_id = $permissions[$i];
            $permissionRole->role_id = $role->id;
            $permissionRole->save();
        }

        return redirect()->route('admin.roles.index');
    }

    public function edit(Role $role)
    {
        abort_if(Gate::denies('role_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $permissions = (new PermissionService())->process($role->permissions);

        return view('admin.roles.edit', compact('permissions', 'role'));
    }

    public function update(UpsertRoleRequest $request, Role $role)
    {
        $role->update($request->except('permissions','notifications'));
        $role->permissions()->sync($request->input('permissions', []));
        $role->notifications()->sync($request->input('notifications', []));

        return redirect()->route('admin.roles.index');
    }

    public function show(Role $role)
    {
        abort_if(Gate::denies('role_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $permissions = (new PermissionService())->process($role->permissions);

        return view('admin.roles.show', compact('role','permissions'));
    }

    public function destroy(Role $role)
    {
        abort_if(Gate::denies('role_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $role->delete();

        return back();
    }

    public function massDestroy(MassDestroyRoleRequest $request)
    {
        Role::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
