<?php

namespace App\Http\Controllers\Admins;

use App\Models\Service;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $service=Service::all();
        return view("pages.backend.service.index",["service"=>$service]);
        
    }


    public function store(Request $request){
        $service=new Service; 
        $service->name=$request->txtName;
        $service->slug=$request->txtSlug;
        $service->icon=$request->txtIcon;
        $service->description=$request->txtDescription;

        if(isset($request->filePhoto)){
			$imgName = (rand(100,1000)).'.'.$request->filePhoto->extension();
			$service->img=$imgName;
			$service->update();
			$request->filePhoto->move(public_path('img'),$imgName);
		}

        $service->deleted_at=$request->txtDeleted_at;
        $service->save();     
        return back()->with('success','Created Successfully.');
          
    }


    public function edit($id){
		$service=Service::find($id);
		return response()->json([
			'status'=>200,
			'service'=>$service
		]);
	}



    public function update(Request $request,Service $service){
        $serviceid=$request->input('cmbServiceId');
        $service = Service::find($serviceid);
        $service->id=$request->cmbServiceId; 
        $service->name=$request->txtName;
        $service->slug=$request->txtSlug;
        $service->icon=$request->txtIcon;
        $service->description=$request->txtDescription;

        if(isset($request->filePhoto)){
			$imgName = (rand(100,1000)).'.'.$request->filePhoto->extension();
			$service->img=$imgName;
			$request->filePhoto->move(public_path('img'),$imgName);
		}

        $service->deleted_at=$request->txtDeleted_at;		   
        $service->update();
        return redirect()->back()
        ->with('success',' Updated successfully');               
    }


    public function destroy(Request $request){  
        $serviceid=$request->input('d_service');
		$service= Service::find($serviceid);
		$service->delete();

        return redirect()->back()
        ->with('success',' Deleted successfully');
    }
}
