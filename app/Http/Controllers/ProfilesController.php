<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\History;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class ProfilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::with('roles')->whereIn('id', [Auth::user()->id])->first();
        return view('profile', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function updateInfo(Request $request)
    {
        $user = User::find($request->id);
        $this->validate($request, [
            'name' => 'required|min:3|regex:/[a-zA-Z]/',
            'email' => ['required', Rule::unique('users')->ignore($request->id)],
        ]);
        $user->name = $request['name'];
        $user->email = $request['email'];
        if ($user->update()) {
            History::create([
                'description' => 'Profile Updated ',
                'user_id' => Auth::user()->id,
                'type' => 0,
                'ip_address' => UtilityFunctions::getUserIP(),
            ]);
            return Redirect::back()->with('successMessage', 'Success!! Profile Updated');
        } else {
            return Redirect::back()->with('errorMessage', 'Error!! Profile Not Updated');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function updatePassword(Request $request)
    {
        $user = User::find($request->id);
        if (!(Hash::check($request->current, Auth::user()->password))) {
            return Redirect::back()->with('errorMessage', 'Error!! Current password does not match with database');
        } else if ($request->new_password != $request->confirm) {
            return Redirect::back()->with('errorMessage', 'Error!! New Password and confirm password do not match');
        } 
        else if (strcmp($request->current,$request->new_password)==0) {
            return Redirect::back()->with('errorMessage', 'Error!! Current password and new password cannot be same');
        }
        else {
            $this->validate($request,[
                'current'=>'required',
                'new_password'=>'required|min:8',
                'confirm'=>'required'
            ]);
            $user->password=Hash::make($request->new_password);
            if ($user->update()) {
                History::create([
                    'description' => 'Password Changed',
                    'user_id' => Auth::user()->id,
                    'type' => 0,
                    'ip_address' => UtilityFunctions::getUserIP(),
                ]);
                return Redirect::back()->with('successMessage', 'Success!! Password Changed');
            } else {
                return Redirect::back()->with('errorMessage', 'Error!! Password Not Changed');
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
