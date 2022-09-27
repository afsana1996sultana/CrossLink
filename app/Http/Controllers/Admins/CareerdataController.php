<?php

namespace App\Http\Controllers\Admins;
use App\Models\Careerdata;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CareerdataController extends Controller
{
    public function index()
    {
        $career=Careerdata::all();
        return view("pages.backend.career-data.index",["career"=>$career]);
        
    }


    public function edit($id){
        $career=Careerdata::find($id);
        return view("pages.backend.career-data.index",["career"=>$career]);	
    }


    public function update(Request $request,$id){
        $career = Careerdata::find($id);

        if(isset($request->fileimg1)){
            $img1Name = (rand(100,1000)).'.'.$request->fileimg1->extension();
            $career->img1=$img1Name;
            $request->fileimg1->move(public_path('img'),$img1Name);
        }


        if(isset($request->fileimg2)){
            $img2Name = (rand(100,1000)).'.'.$request->fileimg2->extension();
            $career->img2=$img2Name;
            $request->fileimg2->move(public_path('img'),$img2Name);
        }

        if(isset($request->txtHeader1)){
            $career->header1=$request->txtHeader1;
          }


        if(isset($request->txtHeader2)){
            $career->header2=$request->txtHeader2;
        }

        if(isset($request->txtTitle1)){
            $career->title1=$request->txtTitle1;
        }

        if(isset($request->txtTitle2)){
            $career->title2=$request->txtTitle2;
        }


        if(isset($request->txtLongDescription1)){
            $career->long_description1=$request->txtLongDescription1;
        }


        if(isset($request->txtLongDescription2)){
            $career->long_description2=$request->txtLongDescription2;
        }


        if(isset($request->txtWorkProcessName1)){
            $career->w_p_name1=$request->txtWorkProcessName1;
        }

        if(isset($request->txtWorkProcessName2)){
            $career->w_p_name2=$request->txtWorkProcessName2;
        }

        if(isset($request->txtWorkProcessName3)){
            $career->w_p_name3=$request->txtWorkProcessName3;
        }


        if(isset($request->txtWorkProcessIcon1)){
            $career->w_p_icon1=$request->txtWorkProcessIcon1;
        }


        if(isset($request->txtWorkProcessIcon2)){
            $career->w_p_icon2=$request->txtWorkProcessIcon2;
        }


        if(isset($request->txtWorkProcessIcon3)){
            $career->w_p_icon3=$request->txtWorkProcessIcon3;
        }


        if(isset($request->txtWorkProcessDetail1)){
            $career->w_p_detail1=$request->txtWorkProcessDetail1;
        }


        if(isset($request->txtWorkProcessDetail2)){
            $career->w_p_detail2=$request->txtWorkProcessDetail2;
        }


        if(isset($request->txtWorkProcessDetail3)){
            $career->w_p_detail3=$request->txtWorkProcessDetail3;
        }

        $career->update();
        return redirect()->back()
        ->with('success',' Updated successfully');   
    }
}
