<?php

namespace App\Http\Controllers\Admins;

use App\Models\Frequentlyasked;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrequentlyaskedController extends Controller
{
    public function index()
    {
        $frequently=Frequentlyasked::all();
        return view("pages.backend.frequently-question.index",["frequently"=>$frequently]);
        
    }


    public function store(Request $request){
        $frequently=new Frequentlyasked; 
        $frequently->question=$request->txtQuestion;
        $frequently->answer=$request->txtAnswer;

        if(isset($request->filePhoto)){
			$imgName = (rand(100,1000)).'.'.$request->filePhoto->extension();
			$frequently->img=$imgName;
			$frequently->update();
			$request->filePhoto->move(public_path('img'),$imgName);
		}

        $frequently->deleted_at=$request->txtDeleted_at;
        $frequently->save();     
        return back()->with('success','Created Successfully.');
          
    }



    public function edit($id){
		$frequently=Frequentlyasked::find($id);
		return response()->json([
			'status'=>200,
			'frequently'=>$frequently
		]);
	}



    public function update(Request $request,Frequentlyasked $frequently){
        $frequentlyid=$request->input('cmbFrequentlyaskedId');
        $frequently = Frequentlyasked::find($frequentlyid);
        $frequently->id=$request->cmbFrequentlyaskedId; 
        $frequently->question=$request->txtQuestion;
        $frequently->answer=$request->txtAnswer;

        if(isset($request->filePhoto)){
            $imgName = (rand(100,1000)).'.'.$request->filePhoto->extension();
            $frequently->img=$imgName;
            $request->filePhoto->move(public_path('img'),$imgName);
        }

        $frequently->deleted_at=$request->txtDeleted_at;		   
        $frequently->update();
        return redirect()->back()
        ->with('success',' Updated successfully');               
    }



    public function destroy(Request $request){  
        $frequentlyid=$request->input('d_frequently');
		$frequently= Frequentlyasked::find($frequentlyid);
		$frequently->delete();

        return redirect()->back()
        ->with('success',' Deleted successfully');
    }
}
