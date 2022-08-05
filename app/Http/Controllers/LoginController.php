<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Middleware;

class LoginController extends Controller
{
    function index(){ 
        return view("template-login.login");
    }
    public function tambahuser(Request $request){
        $data = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'foto' => $request->foto,
            'remember_token' => Str::random(60)
        ]);
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotouser/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('login');
    }
    public function loginproses(Request $request){
        if(Auth::attempt($request -> only('email', 'password'))){
            return redirect('/');
        }
        return redirect('/login');
    }
    function register(){
        return view("template-login.regist");
    }
    public function logout(){
        Auth::logout();
        return redirect('/login');
    }

}
