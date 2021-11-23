<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
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

    // MATRIZ DE TRAZABILIDAD DE REQUISITOS:
    //https://docs.google.com/spreadsheets/d/1dJc2e5C2nm2MUsvmy3gHFZHLYUieNLE-spPpbuIZyN8/edit#gid=1570316564

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     * ES-19 Yo como administrador quiero iniciar sesión con mi email y passworrd para usar las funciones de adminsitrador
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     * ES-20	Yo como administrador quiero cerrar sesión para proteger el acceso al sistema
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
