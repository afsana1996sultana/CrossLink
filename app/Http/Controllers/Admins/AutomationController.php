<?php

namespace App\Http\Controllers\Admins;

use App\Models\Automation;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class AutomationController extends Controller
{
    public function index()
    {
        $automation=Automation::all();
        return view("pages.backend.automation-work.index",["automation"=>$automation]);
        
    }



    public function store(Request $request){
        $automation=new Automation; 
        $automation->header=$request->txtHeader;
        $automation->icon=$request->txtIcon;
        $automation->detail=$request->txtDetail;
        $automation->deleted_at=$request->txtDeleted_at;
        $automation->save();     
        return back()->with('success','Created Successfully.');
          
    }


    public function edit($id){
		$automation=Automation::find($id);
		return response()->json([
			'status'=>200,
			'automation'=>$automation
		]);
	}


    public function update(Request $request,Automation $automation){
        $automationid=$request->input('cmbAutomationId');
        $automation = Automation::find($automationid);
        $automation->id=$request->cmbAutomationId; 
        $automation->header=$request->txtHeader;
        $automation->icon=$request->txtIcon;
        $automation->detail=$request->txtDetail;

        $automation->deleted_at=$request->txtDeleted_at;		   
        $automation->update();
        return redirect()->back()
        ->with('success',' Updated successfully');               
    }


    
    public function destroy(Request $request){  
        $automationid=$request->input('d_automation');
		$automation= Automation::find($automationid);
		$automation->delete();

        return redirect()->back()
        ->with('success',' Deleted successfully');
    }
}
