<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
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
     */
    public function index()
    {
        return view('home');
    }

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

        return redirect(route('change_pwd.index'))->with('status','Tu contraseña fue cambiada con éxito!');

    }
}
