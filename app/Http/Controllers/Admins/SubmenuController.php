<?php

namespace App\Http\Controllers\Admins;

use Illuminate\Support\Facades\DB;
use App\Models\Submenu;
use App\Models\Menu;
use App\Models\Status;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubmenuController extends Controller
{
    public function index()
    {
        $status=Status::all();
        $menu=Menu::all();
        $submenu =DB::table('submenus')
            ->join('statuses','statuses.id', '=', 'submenus.status')
            ->join('menus','menus.id', '=', 'submenus.menu_id')
            ->select('statuses.s_name', 'menus.menu_name', 'submenus.*')
            ->get();
        return view("pages.backend.sub_menu.index",["menu"=>$menu, "submenu"=>$submenu, "status"=>$status]);
        
    }


    
    public function store(Request $request){
        $submenu=new Submenu; 
        $submenu->menu_id=$request->txtMenuId;
        $submenu->submenu_name=$request->txtSubmenuName;
        $submenu->slug=$request->txtSlug;
        $submenu->icon=$request->txtIcon;
        $submenu->status=$request->txtStatus;
        $submenu->deleted_at=$request->txtDeleted_at;
        $submenu->save();
               
        return back()->with('success','Created Successfully.');
    }


    public function edit($id){
		$submenu=Submenu::find($id);
		return response()->json([
			'status'=>200,
			'submenu'=>$submenu
		]);
	}


    public function update(Request $request,Submenu $submenu){
        $submenuid=$request->input('cmbSubmenuId');
        $submenu = Submenu::find($submenuid);
        $submenu->id=$request->cmbSubmenuId; 
        $submenu->menu_id=$request->txtMenuId;
        $submenu->submenu_name=$request->txtSubmenuName;
        $submenu->slug=$request->txtSlug;
        $submenu->icon=$request->txtIcon;
        $submenu->status=$request->txtStatus;
        $submenu->deleted_at=$request->txtDeleted_at;		   
        $submenu->update();
        return redirect()->back()
        ->with('success',' Updated successfully'); 
                    
    }


    public function destroy(Request $request){  
        $submenuid=$request->input('d_submenu');
		$submenu= Submenu::find($submenuid);
		$submenu->delete();

        return redirect()->back()
        ->with('success',' Deleted successfully');
    }
}
