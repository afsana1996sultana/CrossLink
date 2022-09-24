<?php

namespace App\Http\Controllers\Admins;

use Illuminate\Support\Facades\DB;
use App\Models\Childmenu;
use App\Models\Submenu;
use App\Models\Menu;
use App\Models\Status;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ChildmenuController extends Controller
{
    public function index()
    {
        $status=Status::all();
        $menu=Menu::all();
        $submenu=Submenu::all();
        $childmenu =DB::table('childmenus')
            ->join('statuses','statuses.id', '=', 'childmenus.status')
            ->join('menus','menus.id', '=', 'childmenus.menu_id')
            ->join('submenus','submenus.id', '=', 'childmenus.submenu_id')
            ->select('statuses.s_name', 'menus.menu_name', 'submenus.submenu_name', 'childmenus.*')
            ->get();
        return view("pages.backend.child_menu.index",["menu"=>$menu, "submenu"=>$submenu, "childmenu"=>$childmenu, "status"=>$status]);
        
    }

    public function store(Request $request){
        $childmenu=new Childmenu; 
        $childmenu->menu_id=$request->txtMenuId;
        $childmenu->submenu_id=$request->txtSubmenuId;
        $childmenu->childmenu_name=$request->txtChildmenuName;
        $childmenu->slug=$request->txtSlug;
        $childmenu->icon=$request->txtIcon;
        $childmenu->status=$request->txtStatus;
        $childmenu->deleted_at=$request->txtDeleted_at;
        $childmenu->save();
               
        return back()->with('success','Created Successfully.');
    }


    public function edit($id){
		$childmenu=Childmenu::find($id);
		return response()->json([
			'status'=>200,
			'childmenu'=>$childmenu
		]);
	}


    
    public function update(Request $request,Childmenu $childmenu){
        $childmenuid=$request->input('cmbChildmenuId');
        $childmenu = Childmenu::find($childmenuid);
        $childmenu->id=$request->cmbChildmenuId; 
        $childmenu->menu_id=$request->txtMenuId;
        $childmenu->submenu_id=$request->txtSubmenuId;
        $childmenu->childmenu_name=$request->txtChildmenuName;
        $childmenu->slug=$request->txtSlug;
        $childmenu->icon=$request->txtIcon;
        $childmenu->status=$request->txtStatus;
        $childmenu->deleted_at=$request->txtDeleted_at;		   
        $childmenu->update();
        return redirect()->back()
        ->with('success',' Updated successfully'); 
                    
    }


    public function destroy(Request $request){  
        $childmenuid=$request->input('d_childmenu');
		$childmenu= Childmenu::find($childmenuid);
		$childmenu->delete();

        return redirect()->back()
        ->with('success',' Deleted successfully');
    }
}
