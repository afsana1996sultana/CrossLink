<?php

namespace App\Http\Controllers\Admins;

use Illuminate\Support\Facades\DB;
use App\Models\Menu;
use App\Models\Status;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $status=Status::all();
        $menu =DB::table('menus')
            ->join('statuses','statuses.id', '=', 'menus.status')
            ->select('statuses.s_name', 'menus.*')
            ->get();
        return view("pages.backend.menu.index",["menu"=>$menu, "status"=>$status]);
        
    }

    public function store(Request $request){
        $menu=new Menu; 
        $menu->menu_name=$request->txtMenuName;
        $menu->slug=$request->txtSlug;
        $menu->icon=$request->txtIcon;
        $menu->status=$request->txtStatus;
        $menu->deleted_at=$request->txtDeleted_at;
        $menu->save();
               
        return back()->with('success','Created Successfully.');
          
    }

    public function edit($id){
		$menu=Menu::find($id);
		return response()->json([
			'status'=>200,
			'menu'=>$menu
		]);
	}


    public function update(Request $request,Menu $menu){
        $menuid=$request->input('cmbMenuId');
        $menu = Menu::find($menuid);
        $menu->id=$request->cmbMenuId; 
        $menu->menu_name=$request->txtMenuName;
        $menu->slug=$request->txtSlug;
        $menu->icon=$request->txtIcon;
        $menu->status=$request->txtStatus;
        $menu->deleted_at=$request->txtDeleted_at;		   
        $menu->update();
        return redirect()->back()
        ->with('success',' Updated successfully'); 
                    
    }

    public function destroy(Request $request){  
        $menuid=$request->input('d_menu');
		$menu= Menu::find($menuid);
		$menu->delete();

        return redirect()->back()
        ->with('success',' Deleted successfully');
    }
}
