<?php

namespace App\Http\Controllers\Admin;

use App\Models\Role;
use App\Models\History;
use App\Models\Permission;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use App\Http\Requests\CreateRoleRequest;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\UtilityFunctions;

class RolesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        abort_unless(Gate::allows('hasPermission','view_roles'),403);
            $role = UtilityFunctions::getRole();
            return view('admin.roles.index', ['role' => $role]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        abort_unless(Gate::allows('hasPermission','create_roles'),403);
        return view('admin.roles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateRoleRequest $request)
    {
        abort_unless(Gate::allows('hasPermission','create_roles'),403);
        $role = new Role;
        $role->name = $convertedString=str_replace(' ', '-', $request['name']);
        if ($role->save()) {
            $role->permissions()->sync($request['permissions']);
            History::create([
                'description' => 'Created role ' . $convertedString,
                'user_id' => Auth::user()->id,
                'type'=>1,
                'ip_address'=>UtilityFunctions::getUserIP(),
            ]);
            return Redirect()->route('admin.roles.index')->with('successMessage','Success!! Role created');
        } else {
            return Redirect::back()->with('errorMessage','Error!! Role not created');
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        abort_unless(Gate::allows('hasPermission','update_roles'),403);

        $role = Role::with('permissions')->whereIn('id',[$id])->first();
        
        $permissions=Permission::all();

        return view('admin.roles.update', ['role' => $role, 'permission'=>$permissions]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        abort_unless(Gate::allows('hasPermission','update_roles'),403);
        $role=Role::find($request->id);
        $this->validate($request,[
            'name' => ['required', Rule::unique('roles')->ignore($request->id)],
            'permissions'=>'required',
        ]);
        $role->name = $request['name'];
        if ($role->update()) {
            $role->permissions()->sync($request['permissions']);
            History::create([
                'description' => 'Update Role with id ' . $request->id,
                'user_id' => Auth::user()->id,
                'type' => 1,
                'ip_address' => UtilityFunctions::getUserIP(),
            ]);
            return Redirect()->route('admin.roles.index')->with('successMessage', 'Success!! Role Updated');
        } else {
            return Redirect::back()->with('errorMessage', 'Error!! Role Not Updated');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        abort_unless(Gate::allows('hasPermission','delete_roles'),403);
        $role=Role::find($id);
        if ($role->delete()) {
            $role->permissions()->detach();
            History::create([
                'description' => 'Deleted role with id ' . $id,
                'user_id' => Auth::user()->id,
                'type' => 1,
                'ip_address' => UtilityFunctions::getUserIP(),
            ]);
            return Redirect()->route('admin.roles.index')->with('successMessage', 'Success!! Role Deleted');
        } else {
            return Redirect::back()->with('errorMessage', 'Error!! Failed to delete Role');
        }
    }
}
