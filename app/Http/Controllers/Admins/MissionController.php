<?php

namespace App\Http\Controllers\Admins;

use App\Models\Mission;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MissionController extends Controller
{
    public function index()
    {
        $mission=Mission::all();
        return view("pages.backend.mission.index",["mission"=>$mission]);
        
    }


    public function store(Request $request){
        $mission=new Mission; 
        $mission->mission=$request->txtMission;
        $mission->deleted_at=$request->txtDeleted_at;
        $mission->save();
               
        return back()->with('success','Created Successfully.');
          
    }


    public function edit($id){
		$mission=Mission::find($id);
		return response()->json([
			'status'=>200,
			'mission'=>$mission
		]);
	}


    public function update(Request $request,Mission $mission){
        $missionid=$request->input('cmbMissionId');
        $mission = Mission::find($missionid);
        $mission->id=$request->cmbMissionId; 
        $mission->mission=$request->txtMission;
        $mission->deleted_at=$request->txtDeleted_at;		   
        $mission->update();
        return redirect()->back()
        ->with('success',' Updated successfully'); 
                    
    }


    public function destroy(Request $request){  
        $missionid=$request->input('d_mission');
		$mission= Mission::find($missionid);
		$mission->delete();

        return redirect()->back()
        ->with('success',' Deleted successfully');
    }
}
