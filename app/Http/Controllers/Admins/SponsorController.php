<?php

namespace App\Http\Controllers\Admins;

use App\Models\Sponsor;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SponsorController extends Controller
{
    public function index()
    {
        $sponsor=Sponsor::all();
        return view("pages.backend.sponsor.index",["sponsor"=>$sponsor]);
        
    }


    public function store(Request $request){
        $sponsor=new Sponsor; 

        if(isset($request->filePhoto)){
			$imgName = (rand(100,1000)).'.'.$request->filePhoto->extension();
			$sponsor->sponsor_logo=$imgName;
			$sponsor->update();
			$request->filePhoto->move(public_path('img'),$imgName);
		}
        $sponsor->deleted_at=$request->txtDeleted_at;
        $sponsor->save();
               
        return back()->with('success','Created Successfully.');     
    }


    public function edit($id){
		$sponsor=Sponsor::find($id);
		return response()->json([
			'status'=>200,
			'sponsor'=>$sponsor
		]);
	}


    public function update(Request $request,Sponsor $sponsor){
        $sponsorid=$request->input('cmbSponsorId');
        $sponsor = Sponsor::find($sponsorid);
        $sponsor->id=$request->cmbSponsorId; 

        if(isset($request->filePhoto)){
			$imgName = (rand(100,1000)).'.'.$request->filePhoto->extension();
			$Sponsor->sponsor_logo=$imgName;
			$request->filePhoto->move(public_path('img'),$imgName);
		}
        $sponsor->deleted_at=$request->txtDeleted_at;		   
        $sponsor->update();
        return redirect()->back()
        ->with('success',' Updated successfully'); 
                    
    }


    public function destroy(Request $request){  
        $sponsorid=$request->input('d_sponsor');
		$sponsor= Sponsor::find($sponsorid);
		$sponsor->delete();

        return redirect()->back()
        ->with('success',' Deleted successfully');
    }
}
