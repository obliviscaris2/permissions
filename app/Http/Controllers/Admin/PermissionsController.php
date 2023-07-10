<?php

namespace App\Http\Controllers\Admin;

use App\Models\History;
use App\Models\Permission;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\UtilityFunctions;
use App\Models\Role;

class PermissionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        abort_unless(Gate::allows('hasPermission','view_permissions'),403);
        $data=Permission::all(['id','name']);
        return view('admin.permissions.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        abort_unless(Gate::allows('hasPermission','create_permissions'),403);
        return view('admin.permissions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        abort_unless(Gate::allows('hasPermission','create_permissions'),403);
        $permission = new Permission;
        $permission->name = $convertedString=str_replace(' ', '-', $request['name']);
        if ($permission->save()) {
            Role::find(1)->permissions()->attach($permission->id);
            History::create([
                'description' => 'Created permission ' . $convertedString,
                'user_id' => Auth::user()->id,
                'type'=>1,
                'ip_address'=>UtilityFunctions::getUserIP(),
            ]);
            return Redirect()->route('admin.permissions.index')->with('successMessage','Success!! Permission created');
        } else {
            return Redirect::back()->with('errorMessage','Error!! Permission not created');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function show(Permission $permission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        abort_unless(Gate::allows('hasPermission','update_permissions'),403);
        $permission = Permission::whereIn('id', [$id])->first();
        return view('admin.permissions.update', ['permission' => $permission]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        abort_unless(Gate::allows('hasPermission','update_permissions'),403);
        $permission=Permission::find($request->id);
        $this->validate($request,[
            'name' => ['required', Rule::unique('permissions')->ignore($request->id)],
        ]);
        $permission->name=$request->name;
        if ($permission->update()) {
            History::create([
                'description' => 'Update permission with id ' . $request->id,
                'user_id' => Auth::user()->id,
                'type' => 1,
                'ip_address' => UtilityFunctions::getUserIP(),
            ]);
            return Redirect()->route('admin.permissions.index')->with('successMessage', 'Success!! Permission Updated');
        } else {
            return Redirect::back()->with('errorMessage', 'Error!! Permission Not Updated');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        abort_unless(Gate::allows('hasPermission','delete_permissions'),403);
        $permission=Permission::find($id);
        if ($permission->delete()) {
            $permission->roles()->detach();
            History::create([
                'description' => 'Deleted permission with id ' . $id,
                'user_id' => Auth::user()->id,
                'type' => 1,
                'ip_address' => UtilityFunctions::getUserIP(),
            ]);
            return Redirect()->route('admin.permissions.index')->with('successMessage', 'Success!! Permission Deleted');
        } else {
            return Redirect::back()->with('errorMessage', 'Error!! Failed to delete permission');
        }
    }
}
