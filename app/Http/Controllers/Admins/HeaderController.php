<?php

namespace App\Http\Controllers\Admins;
use App\Models\Header;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HeaderController extends Controller
{
    public function index()
    {
        $header=Header::all();
        return view("pages.backend.header.index",["header"=>$header]);
        
    }


    public function edit($id){
        $header=Header::find($id);
        return view("pages.backend.header.index",["header"=>$header]);	
    }


    public function update(Request $request,$id){
        $header = Header::find($id);

        if(isset($request->filelogo)){
            $logoName = time().(rand(100,1000)).'.'.$request->filelogo->extension();
            $header->logo=$logoName;
            $request->filelogo->move(public_path('img'),$logoName);
        }


        if(isset($request->filelogo2)){
            $logo2Name = time().(rand(100,1000)).'.'.$request->filelogo2->extension();
            $header->logo2=$logo2Name;
            $request->filelogo2->move(public_path('img'),$logo2Name);
        }

        if(isset($request->txtTime)){
            $header->time=$request->txtTime;
          }


        if(isset($request->txtPhone)){
            $header->phone=$request->txtPhone;
        }

        if(isset($request->txtEmail)){
            $header->email=$request->txtEmail;
        }

        $header->update();
        return redirect()->back()
        ->with('success',' Updated successfully');   
    }
}
