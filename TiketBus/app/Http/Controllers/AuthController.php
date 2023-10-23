<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){
        return view('login_pelanggan');
    }

    public function do_login(Request $request){
        $credentials =  $request->validate([
            'email' => 'required',
            'password' =>'required'
        ]);

        if(Auth::guard('pelanggan')->attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('trayek');
        }else{
            return redirect()->back();
        }
    }

    public function login_admin(){
        return view('login_admin');
    }

    public function do_login_admin(Request $request){
        $credentials =  $request->validate([
            'username' => 'required',
            'password' =>'required'
        ]);

        if(Auth::guard('admin')->attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('bus');
        }else{
            return redirect()->back();
        }
    }




    public function register(){
        return view('register');
    }

    public function do_register(Request $request){

        $data = new Pelanggan();
        $data->nama = $request->nama;
        $data->alamat = $request->alamat;
        $data->email = $request->email;
        $data->password = bcrypt($request->password);
        $data->save();

        return redirect()->route('login');
    }


    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }
}
