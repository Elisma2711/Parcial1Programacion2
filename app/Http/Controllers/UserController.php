<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register(Request $request){
        $user = new User;
        $user -> name = $request -> post('name');
        $user -> password = Hash::make($request -> post('password'));

        try {
            if($user -> save())
                return redirect('/login');
        } catch (\Throwable $th) {
            return redirect() -> to('register') -> withErrors(trans('Error en el registro, intente nuevamente'));
        }
    }

    public function login(Request $request){
        $credentials = $request->only('name', 'password');
        try {
            if(Auth::attempt($credentials)){
                return redirect('/');}
        } catch (\Throwable $th) {
            return redirect() -> to('login') -> withErrors(trans('Credenciales incorrectas, intente nuevamente'));
        }
    }

    public function logout(Request $request){
        $request -> session() -> flush();
        return redirect('/');
    }
}
