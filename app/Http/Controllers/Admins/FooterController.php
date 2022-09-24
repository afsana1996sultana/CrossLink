<?php

namespace App\Http\Controllers\Admins;
use Illuminate\Support\Facades\DB;
use App\Models\Footer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    public function index()
    {
        $footer=Footer::all(); 
        return view("pages.backend.footer.index",["footer"=>$footer]);
        
    }


    public function edit($id){
		$footer=Footer::find($id);
        return view("pages.backend.footer.index",["footer"=>$footer]);	
	}


    public function update(Request $request,$id){
        $footer = Footer::find($id);

        if(isset($request->filelogo)){
            $logoName = (rand(100,1000)).'.'.$request->filelogo->extension();
            $footer->f_logo=$logoName;
            $request->filelogo->move(public_path('img'),$logoName);
        }


        if(isset($request->txtFooterEmail)){
          $footer->f_email=$request->txtFooterEmail;
        }


        if(isset($request->txtfooterPhone)){
          $footer->f_phone=$request->txtfooterPhone;
        }


        if(isset($request->txtfooterAddress)){
          $footer->f_address=$request->txtfooterAddress;
        }


        if(isset($request->txtfooterDescription)){
            $footer->f_description=$request->txtfooterDescription;
        }


        if(isset($request->txtfootercopyright)){
          $footer->f_copyright=$request->txtfootercopyright;
        }


        $footer->update();
        return redirect()->back()
        ->with('success',' Updated successfully');   
    }
}
