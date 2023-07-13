<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use App\Models\CategoryAuth as Category;
use Illuminate\Support\Str;

use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\DB;


class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    public function __construct()
    {
        $this->middleware(['translate', 'auth']);

 
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $roles = Role::orderBy('id','DESC')->paginate(5);
        return view('roles.index',compact('roles'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $permission = Permission::get();
        $category = Category::with("permissions")->get();
        return view('roles.create',compact('category'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        $this->validate($request, [
            'name' => 'required|unique:roles,name',
        ]);
        $role=new Role();
        $role->fill($request->only('name'));
        $role->save();

        if(!empty($request->input('permissions'))){
            $new_p = array();
        
            foreach($request->input('permissions') as $p){
                if(!Str::startsWith($p,"j")){
                    array_push($new_p,$p);
                }
            }
            $role->syncPermissions($new_p);
        }
        return redirect()->route('roles.index')->with('success','Role created successfully');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $role = Role::find($id);
        $rolePermissions = Permission::join("role_has_permissions","role_has_permissions.permission_id","=","permissions.id")
            ->where("role_has_permissions.role_id",$id)
            ->get();
        return view('roles.show',compact('role','rolePermissions'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $role = Role::find($id);
        $permission = Permission::get();
        $rolePermissions = DB::table("role_has_permissions")->where("role_has_permissions.role_id",$id)
        ->pluck('role_has_permissions.permission_id')
        ->all();
        $category = Category::with("permissions")->get();
        return view('roles.edit',compact('role','permission','rolePermissions',"category"));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);
        $role = Role::find($id);
        $role->fill($request->only('name'));
        $role->save();

        if(!empty($request->input('permissions'))){
            $new_p = array();
        
            foreach($request->input('permissions') as $p){
                if(!Str::startsWith($p,"j")){
                    array_push($new_p,$p);
                }
            }
            $role->syncPermissions($new_p);
        }
        return redirect()->route('roles.index')->with('success','Role updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("roles")->where('id',$id)->delete();
        return redirect()->route('roles.index')
                        ->with('success','Role deleted successfully');
    }
}