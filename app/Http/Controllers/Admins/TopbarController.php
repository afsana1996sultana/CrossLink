<?php

namespace App\Http\Controllers\Admins;
use Illuminate\Support\Facades\DB;
use App\Models\Topbar;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TopbarController extends Controller
{
    public function index()
    {
        $topbar=Topbar::all();
        return view("pages.backend.topbar.index",["topbar"=>$topbar]);
        
    }

    public function edit($id){
        $topbar=Topbar::find($id);
        return view("pages.backend.topbar.index",["topbar"=>$topbar]);	
    }


    public function update(Request $request,$id){
        $topbar = Topbar::find($id);

        if(isset($request->txtSuplier)){
          $topbar->suplier=$request->txtSuplier;
        }


        if(isset($request->txtCertificate)){
            $topbar->certificate=$request->txtCertificate;
          }


        if(isset($request->txtService)){
            $topbar->service=$request->txtService;
        }

        $topbar->update();
        return redirect()->back()
        ->with('success',' Updated successfully');   
    }
}
