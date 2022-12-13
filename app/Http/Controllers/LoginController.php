<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use RealRashid\SweetAlert\Facades\Alert;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }
    public function authenticate(Request $request){
        $request->validate([
            'username' => 'required',
            'password' => 'required']);
            // dd($request);
        $remember = $request->has('remember') ? true : false;
        $minutes = 1440;
        if (Auth::attempt(['username' => $request->input('username'), 'password' => $request->input('password')], $remember)){
            if($request->has('remember')){
                Cookie::queue('username', $request->username, $minutes);
                Cookie::queue('password', $request->password, $minutes);}
            // dd($tes);
            $request->session()->regenerate();
            $user = Auth()->user()->nama;
            Alert::success('Success', 'Selamat Datang '.$user);
            return redirect()->intended('/dashboard');
            // Alert::success('Success', 'Login berhasil');
        }
        Alert::Error('Error', 'Login Gagal');
        return back();
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
