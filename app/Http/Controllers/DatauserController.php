<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DatauserController extends Controller
{
    public function index(){
        $data = User::latest()->paginate(10);
        return view('user.data', compact('data'));
    }
    public function tambahuser(){ 
        return view('datauser');
    }
    public function tambahdatauser(Request $request){
        $data = User::create($request->all());
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotouser/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('datauser');
    }
    public function tampildatauser($id){
        $data = User::find($id);
        return view('user.edit', compact('data'));
    }
    public function updateuser(Request $request, $id){
        $data = User::find($id);
        $data->update($request->all());

        return redirect()->route('datauser');
    }
    public function deleteuser($id){
        $data = User::find($id);
        $data->delete();
        return redirect()->route('datauser');
    }
}
