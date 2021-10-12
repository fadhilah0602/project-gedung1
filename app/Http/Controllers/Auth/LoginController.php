<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;


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
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    // protected function authenticated(Request $request, $user)
    // {
    //     // pake biasa
    //     if ($user->hasRole('admin')) {
    //         return redirect()->route('beranda');
    //     } elseif ($user->hasRole('group_user')) {
    //         return redirect()->route('dashboard-user');
    //     }
    //     return redirect()->route('home');
    // }
    public function authenticate(Request $request, $user)
    {
        $user = $request->hasRole('role');
        if ($user->$request->hasRole('admin')) {
                    return redirect()->route('beranda');
                } elseif ($user->$request->hasRole('group_user')) {
                    return redirect()->route('dashboard-user');
                }
                return redirect()->route('home');
    }
}

