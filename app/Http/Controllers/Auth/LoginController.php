<?php

namespace App\Http\Controllers\Auth;

use App\Models\History;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\UtilityFunctions;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     *
     */

    protected function authenticated($user)
    {
        if (Auth::check()) {
            History::create([
                'description' => 'Logged in',
                'user_id' => Auth::user()->id,
                'type' => 0,
                'ip_address' => UtilityFunctions::getuserIP()
            ]);
            return redirect('/admin');
        } else {
            return redirect('/login');
        }
    }

    public function logout()
    {
        History::create([
            'description' => 'Logged out',
            'user_id' => Auth::user()->id,
            'type' => 0,
            'ip_address' => UtilityFunctions::getuserIP()
        ]);
        Auth::logout();
        return redirect('/login');
    }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
