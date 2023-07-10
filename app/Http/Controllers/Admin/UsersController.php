<?php

namespace App\Http\Controllers\Admin;

use App\Models\Role;
use App\Models\User;
use App\Models\History;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\CreateUserRequest;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\UtilityFunctions;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        abort_unless(Gate::allows('hasPermission','view_users'),403);
        if (User::isAdmin()) {
            $data = User::with('roles')->whereNotIn('role', [1, 2])->get();
            return view('admin.user.index', ['data' => $data]);
        } else if (User::isSuperAdmin()) {
            $data = User::with('roles')->whereNotIn('role', [1])->get();
            return view('admin.user.index', ['data' => $data]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        abort_unless(Gate::allows('hasPermission','create_users'),403);
        if (User::isSuperAdmin()) {
            $role = Role::whereNotIn('id', [1])->get();
            return view('admin.user.create', ['role' => $role]);
        } else {
            $role = Role::whereNotIn('id', [1, 2])->get();
            return view('admin.user.create', ['role' => $role]);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateUserRequest $request)
    {
        abort_unless(Gate::allows('hasPermission','create_users'),403);
        $user = new User;
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->role = $request['role'];
        $user->password = Hash::make($request['password']);
        $user->is_active = $request['is_active'];
        if ($user->save()) {
            History::create([
                'description' => 'Created User with id ' . $user->id,
                'user_id' => Auth::user()->id,
                'type' => 1,
                'ip_address' => UtilityFunctions::getUserIP(),
            ]);
            return Redirect()->route('admin.users.index')->with('successMessage', 'Success!! User Created');
        } else {
            return Redirect::back()->with('errorMessage', 'Error!! User not created');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function viewDeleted(Request $request)
    {
        abort_unless(Gate::allows('hasPermission','view_deleted_users'),403);
        if (User::isAdmin()) {
            $data = User::onlyTrashed()->with('roles')->whereNotIn('role', [1, 2])->get();
            return view('admin.user.deleted', ['data' => $data]);
        } else if (User::isSuperAdmin()) {
            $data = User::onlyTrashed()->with('roles')->whereNotIn('role', [1])->get();
            return view('admin.user.deleted', ['data' => $data]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        abort_unless(Gate::allows('hasPermission','update_users'),403);
        abort_unless(Gate::allows('hasUpdateUserPermission',$id),403);
        $role = UtilityFunctions::getRole();
        $user = User::with('roles')->whereIn('id', [$id])->first();
        // dd($user,$role);
        return view('admin.user.update', ['role' => $role, 'user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        abort_unless(Gate::allows('hasPermission','update_users'),403);
        abort_unless(Gate::allows('hasUpdateUserPermission',$request->id),403);
        $user = User::find($request->id);
        $this->validate($request,[
            'name' => 'required|min:3|regex:/[a-zA-Z]/',
            'email' => ['required', Rule::unique('users')->ignore($request->id)],
            'role' => 'required',
            'is_active'=>'required',
        ]);

        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->role = $request['role'];
        $user->is_active = $request['is_active'];
        if ($user->update()) {
            History::create([
                'description' => 'Update user with user id ' . $request['id'],
                'user_id' => Auth::user()->id,
                'type' => 1,
                'ip_address' => UtilityFunctions::getUserIP(),
            ]);
            return Redirect()->route('admin.users.index')->with('successMessage', 'Success!! User Information Updated');
        } else {
            return Redirect::back()->with('errorMessage', 'Error!! User Information Not Updated');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        abort_unless(Gate::allows('hasPermission','delete_users'),403);
        $user = User::find($id);
        if ($user->delete()) {
            History::create([
                'description' => 'Soft Deleted user with user id ' . $id,
                'user_id' => Auth::user()->id,
                'type' => 1,
                'ip_address' => UtilityFunctions::getUserIP(),
            ]);
            return Redirect()->route('admin.users.index')->with('successMessage', 'Success!! User Deleted');
        } else {
            return Redirect::back()->with('errorMessage', 'Error!! Failed to delete user');
        }
    }

     /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function permanentDestroy($id)
    {
        abort_unless(Gate::allows('hasPermission','permanent_delete_users'),403);
        $user = User::withTrashed()->find($id);
        if ($user->forceDelete()) {
            History::create([
                'description' => 'Permanent Deleted user with user id ' . $id,
                'user_id' => Auth::user()->id,
                'type' => 1,
                'ip_address' => UtilityFunctions::getUserIP(),
            ]);
            return Redirect()->route('admin.users.index')->with('successMessage', 'Success!! User Deleted Permanently');
        } else {
            return Redirect::back()->with('errorMessage', 'Error!! Failed to delete user');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        abort_unless(Gate::allows('hasPermission','restore_users'),403);
        $user = User::withTrashed()->find($id);
        if ($user->restore()) {
            History::create([
                'description' => 'Restored user with user id ' . $id,
                'user_id' => Auth::user()->id,
                'type' => 1,
                'ip_address' => UtilityFunctions::getUserIP(),
            ]);
            return Redirect::back()->with('successMessage', 'Success!! User Restored');
        } else {
            return Redirect::back()->with('errorMessage', 'Error!! Failed to restore user');
        }
    }

}
