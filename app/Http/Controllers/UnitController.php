<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    public function index(){
        $data = Unit::latest()->paginate(10);
        return view('unit.data', compact('data'));
    }
    public function tambahunit(){  
        return view('data');
    }
    public function tambahdata(Request $request){
        Unit::create($request->all());
        return redirect()->route('data');
    }
    public function tampildata($id){
        $data = Unit::find($id);
        return view('unit.edit', compact('data'));
    }
    public function update(Request $request, $id){
        $data = Unit::find($id);
        $data->update($request->all());

        return redirect()->route('data');
    }
    public function delete($id){
        $data = Unit::find($id);
        $data->delete();
        return redirect()->route('data');
    }
}
