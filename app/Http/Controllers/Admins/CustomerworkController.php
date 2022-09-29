<?php

namespace App\Http\Controllers\Admins;

use App\Models\Customerwork;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class CustomerworkController extends Controller
{
    public function index()
    {
        $work=Customerwork::all();
        return view("pages.backend.customer-work.index",["work"=>$work]);
        
    }


    public function store(Request $request){
        $work=new Customerwork; 
        $work->title=$request->txtTitle;
        $work->detail=$request->txtDetail;
        $work->deleted_at=$request->txtDeleted_at;
        $work->save();     
        return back()->with('success','Created Successfully.');
          
    }


    public function edit($id){
		$work=Customerwork::find($id);
		return response()->json([
			'status'=>200,
			'work'=>$work
		]);
	}


    public function update(Request $request,Customerwork $work){
        $workid=$request->input('cmbCustomerworkId');
        $work = Customerwork::find($workid);
        $work->id=$request->cmbCustomerworkId; 
        $work->title=$request->txtTitle;
        $work->detail=$request->txtDetail;

        $work->deleted_at=$request->txtDeleted_at;		   
        $work->update();
        return redirect()->back()
        ->with('success',' Updated successfully');               
    }


    public function destroy(Request $request){  
        $workid=$request->input('d_work');
		$work= Customerwork::find($workid);
		$work->delete();

        return redirect()->back()
        ->with('success',' Deleted successfully');
    }
}
