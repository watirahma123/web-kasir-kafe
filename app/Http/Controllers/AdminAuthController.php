<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminAuthController extends Controller
{
    //
    public function index() {
        return view ('Admin.auth.login');
    }

    public function doLogin(Request $request){
        $data = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if (Auth::attempt($data)) {
            $request->session()->regenerate();
            return redirect('/admin/dashboard');
        }
        
            return back()->with('loginError', 'Email atau Password salah');

    }
    public function logout() {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect('login');
    }
}
