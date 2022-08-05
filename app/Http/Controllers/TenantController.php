<?php

namespace App\Http\Controllers;

use App\Models\Tenant;
use Illuminate\Http\Request;

class TenantController extends Controller
{
    public function index(){
        $data = Tenant::latest()->paginate(10);
        return view('tenant.data', compact('data'));
    }
    public function tambahTenant(){  
        return view('datatenant');
    }
    public function tambahdatatenant(Request $request){
        Tenant::create($request->all());
        return redirect()->route('datatenant');
    }
    public function tampildatatenant($id){
        $data = Tenant::find($id);
        return view('tenant.edit', compact('data'));
    }
    public function updatetenant(Request $request, $id){
        $data = Tenant::find($id);
        $data->update($request->all());

        return redirect()->route('datatenant');
    }
    public function deleteTenant($id){
        $data = Tenant::find($id);
        $data->delete();
        return redirect()->route('datatenant');
    }
}
