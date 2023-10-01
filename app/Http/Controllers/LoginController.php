<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function register(Request $request){
        $usuarios = new User();
        $usuarios->user_name = $request->user_name;
        $usuarios->correo = $request->correo;
        $usuarios->contrasena = Hash::make($request->contrasena);

        $usuarios->save();

        Auth::login($usuarios);

        return redirect(route('privada'));
    }

    public function login(Request $request){

    }

    public function logout(Request $request){

    }
}
