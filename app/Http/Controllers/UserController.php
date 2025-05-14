<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function page() {
        return view('pages.users.index');
    }

    public function authenticate(Request $request) {
        if(Auth::attempt($request->only(['email', 'password']))) {
            $request->session()->regenerate();

            return redirect('/');
        }

        Session::flash('error', 'Credenciales no validas');
        
        return back();
    }

    public function logout() {
        Auth::logout();

        return redirect()->to(route('users.page'));
    }
}
