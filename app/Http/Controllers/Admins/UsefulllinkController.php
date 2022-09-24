<?php

namespace App\Http\Controllers\Admins;

use Illuminate\Support\Facades\DB;
use App\Models\Usefulllink;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsefulllinkController extends Controller
{
    public function index()
    {
        $usefulllink=Usefulllink::all();
        return view("pages.backend.usefull-link.index",["usefulllink"=>$usefulllink]);
        
    }


    public function store(Request $request){
        $usefulllink=new Usefulllink; 
        $usefulllink->name=$request->txtName;
        $usefulllink->slug=$request->txtSlug;
        $usefulllink->deleted_at=$request->txtDeleted_at;
        $usefulllink->save();
               
        return back()->with('success','Created Successfully.');
    }


    
    public function edit($id){
		$usefulllink=Usefulllink::find($id);
		return response()->json([
			'status'=>200,
			'usefulllink'=>$usefulllink
		]);
	}


    public function update(Request $request,Usefulllink $usefulllink){
        $usefulllinkid=$request->input('cmbUsefulllinkId');
        $usefulllink = Usefulllink::find($usefulllinkid);
        $usefulllink->id=$request->cmbUsefulllinkId; 
        $usefulllink->name=$request->txtName;
        $usefulllink->slug=$request->txtSlug;
        $usefulllink->deleted_at=$request->txtDeleted_at;		   
        $usefulllink->update();
        return redirect()->back()
        ->with('success',' Updated successfully'); 
                    
    }


    public function destroy(Request $request){  
        $usefulllinkid=$request->input('d_usefulllink');
		$usefulllink= Usefulllink::find($usefulllinkid);
		$usefulllink->delete();

        return redirect()->back()
        ->with('success',' Deleted successfully');
    }
}
