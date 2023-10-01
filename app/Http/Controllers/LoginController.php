<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function register(Request $request)
    {
        $usuarios = new User();
        $usuarios->user_name = $request->user_name;
        $usuarios->correo = $request->correo;
        $usuarios->contrasena = Hash::make($request->contrasena);

        $usuarios->save();

        Auth::login($usuarios);

        return redirect(route('privada'));
    }



    public function login(Request $request)
    {
        $credentials = [
            'correo' => $request->input('correo'),
            'password' => $request->input('contrasena'),
        ];

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended(route('privada'));
        }

        // Si las credenciales no son válidas, muestra un mensaje de error y redirige de nuevo a la página de inicio de sesión.
        return redirect(route('login'))->with('error', 'Credenciales incorrectas. Inténtalo de nuevo.');
    }




    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route('login'));
    }
}
