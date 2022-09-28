<?php

namespace App\Http\Controllers\Admins;

use App\Models\Project;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $project=Project::all();
        return view("pages.backend.project.index",["project"=>$project]);
        
    }


    public function store(Request $request){
        $project=new Project; 
        $project->name=$request->txtName;
        $project->slug=$request->txtSlug;
        $project->description=$request->txtDescription;

        if(isset($request->filePhoto)){
			$imgName = (rand(100,1000)).'.'.$request->filePhoto->extension();
			$project->img=$imgName;
			$project->update();
			$request->filePhoto->move(public_path('img'),$imgName);
		}

        $project->deleted_at=$request->txtDeleted_at;
        $project->save();     
        return back()->with('success','Created Successfully.');
          
    }


    public function edit($id){
		$project=Project::find($id);
		return response()->json([
			'status'=>200,
			'project'=>$project
		]);
	}


    public function update(Request $request,Project $project){
        $projectid=$request->input('cmbProjectId');
        $project = Project::find($projectid);
        $project->id=$request->cmbProjectId; 
        $project->name=$request->txtName;
        $project->slug=$request->txtSlug;
        $project->description=$request->txtDescription;

        if(isset($request->filePhoto)){
			$imgName = (rand(100,1000)).'.'.$request->filePhoto->extension();
			$project->img=$imgName;
			$request->filePhoto->move(public_path('img'),$imgName);
		}

        $project->deleted_at=$request->txtDeleted_at;		   
        $project->update();
        return redirect()->back()
        ->with('success',' Updated successfully');               
    }


    public function destroy(Request $request){  
        $projectid=$request->input('d_project');
		$project= Project::find($projectid);
		$project->delete();

        return redirect()->back()
        ->with('success',' Deleted successfully');
    }
}
