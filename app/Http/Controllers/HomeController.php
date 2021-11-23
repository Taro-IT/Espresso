<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    // MATRIZ DE TRAZABILIDAD DE REQUISITOS:
    //https://docs.google.com/spreadsheets/d/1dJc2e5C2nm2MUsvmy3gHFZHLYUieNLE-spPpbuIZyN8/edit#gid=1570316564

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     * ES-14 Yo como administrador quiero editar la informacion de contacto para mantenerla al corriente
     */
    public function index()
    {

        return view('home')->with(['home'=>Home::get()->first()]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     * ES-22 Yo como administrador quiero cambiar de contraseña para proteger el acceso al sistema
     */
    public function pwdChange(){

        return view('auth.passwords.change_password')->with(['user'=>Auth::user()]);
    }
    public function updatePwd(Request $request){

        $request->validate([
            'password'=>'required|min:6|',
        ]);
        $user = Auth::user();
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect(route('change_pwd.index'))->with('status', 'Tu contraseña ha sido cambiada exitosamente');

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     * ES-14 Yo como administrador quiero editar la información de contacto para mantenerla al corriente
     */
    public function update(Request $request){

        $data = $request->all();
        $home = Home::first();
        $home->update($data);
        return redirect()->route('home')->with('status', 'La información ha sido actualizada exitosamente');
    }
}
