<?php

namespace App\Http\Controllers\Admins;
use App\Models\About;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $about=About::all();
        return view("pages.backend.about.index",["about"=>$about]);
        
    }


    public function edit($id){
        $about=About::find($id);
        return view("pages.backend.about.index",["about"=>$about]);	
    }


    public function update(Request $request,$id){
        $about = About::find($id);

        if(isset($request->fileimg1)){
            $img1Name = (rand(100,1000)).'.'.$request->fileimg1->extension();
            $about->img1=$img1Name;
            $request->fileimg1->move(public_path('img'),$img1Name);
        }


        if(isset($request->fileimg2)){
            $img2Name = (rand(100,1000)).'.'.$request->fileimg2->extension();
            $about->img2=$img2Name;
            $request->fileimg2->move(public_path('img'),$img2Name);
        }

        if(isset($request->txtHeader1)){
            $about->header1=$request->txtHeader1;
          }


        if(isset($request->txtHeader2)){
            $about->header2=$request->txtHeader2;
        }

        if(isset($request->txtTitle1)){
            $about->title1=$request->txtTitle1;
        }

        if(isset($request->txtTitle2)){
            $about->title2=$request->txtTitle2;
        }


        if(isset($request->txtLongDescription1)){
            $about->long_description1=$request->txtLongDescription1;
        }


        if(isset($request->txtLongDescription2)){
            $about->long_description2=$request->txtLongDescription2;
        }

        $about->update();
        return redirect()->back()
        ->with('success',' Updated successfully');   
    }
}
