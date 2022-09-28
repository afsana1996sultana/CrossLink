<?php

namespace App\Http\Controllers\Admins;

use App\Models\Offer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    public function index()
    {
        $offer=Offer::all();
        return view("pages.backend.offer.index",["offer"=>$offer]);
        
    }


    public function store(Request $request){
        $offer=new Offer; 
        $offer->header=$request->txtHeader;
        $offer->icon=$request->txtIcon;
        $offer->detail=$request->txtDetail;
        $offer->deleted_at=$request->txtDeleted_at;
        $offer->save();     
        return back()->with('success','Created Successfully.');
          
    }


    
    public function edit($id){
		$offer=Offer::find($id);
		return response()->json([
			'status'=>200,
			'offer'=>$offer
		]);
	}


    public function update(Request $request,Offer $offer){
        $offerid=$request->input('cmbOfferId');
        $offer = Offer::find($offerid);
        $offer->id=$request->cmbOfferId; 
        $offer->header=$request->txtHeader;
        $offer->icon=$request->txtIcon;
        $offer->detail=$request->txtDetail;

        $offer->deleted_at=$request->txtDeleted_at;		   
        $offer->update();
        return redirect()->back()
        ->with('success',' Updated successfully');               
    }


    public function destroy(Request $request){  
        $offerid=$request->input('d_offer');
		$offer= Offer::find($offerid);
		$offer->delete();

        return redirect()->back()
        ->with('success',' Deleted successfully');
    }
}
