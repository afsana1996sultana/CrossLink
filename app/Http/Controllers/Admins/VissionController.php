<?php

namespace App\Http\Controllers\Admins;

use App\Models\Vission;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class VissionController extends Controller
{
    public function index()
    {
        $vission=Vission::all();
        return view("pages.backend.vission.index",["vission"=>$vission]);
        
    }


    public function store(Request $request){
        $vission=new Vission; 
        $vission->vission=$request->txtVission;
        $vission->deleted_at=$request->txtDeleted_at;
        $vission->save();
               
        return back()->with('success','Created Successfully.');
          
    }


    public function edit($id){
		$vission=Vission::find($id);
		return response()->json([
			'status'=>200,
			'vission'=>$vission
		]);
	}


    
    public function update(Request $request,Vission $vission){
        $vissionid=$request->input('cmbVissionId');
        $vission = Vission::find($vissionid);
        $vission->id=$request->cmbVissionId; 
        $vission->vission=$request->txtVission;
        $vission->deleted_at=$request->txtDeleted_at;		   
        $vission->update();
        return redirect()->back()
        ->with('success',' Updated successfully'); 
                    
    }


    public function destroy(Request $request){  
        $vissionid=$request->input('d_vission');
		$vission= Vission::find($vissionid);
		$vission->delete();

        return redirect()->back()
        ->with('success',' Deleted successfully');
    }
}
