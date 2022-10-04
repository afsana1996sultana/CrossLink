<?php

namespace App\Http\Controllers\Admins;

use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Menu;
use App\Models\Submenu;
use App\Models\Childmenu;
use App\Models\Status;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $menu=Menu::all();
        $submenu=Submenu::all();
        $childmenu=Childmenu::all();
        $status=Status::all();

        $product =DB::table('products')
             ->join('menus','menus.id', '=', 'products.category')
             ->leftjoin('submenus','submenus.id', '=', 'products.sub_category')
             ->leftjoin('childmenus','childmenus.id', '=', 'products.child_category')
             ->join('statuses','statuses.id', '=', 'products.status')
             ->select('products.*','menus.menu_name','submenus.submenu_name', 'childmenus.childmenu_name', 'statuses.s_name')
             ->get();
            //dd($product);
        return view("pages.backend.product.index",["product"=>$product, "menu"=>$menu, "submenu"=>$submenu, "status"=>$status, "childmenu"=>$childmenu]);
        
    }


    public function create()
    {
        $product=Product::all();
        $menu=Menu::all();
        $submenu=Submenu::all();
        $childmenu=Childmenu::all();
        $status=Status::all();
      
        return view("pages.backend.product.create",["product"=>$product, "menu"=>$menu, "submenu"=>$submenu, "status"=>$status, "childmenu"=>$childmenu]);
    }



    public function store(Request $request){

        $validated = $request->validate([
            'child_category' => 'nullable|unique:products',
        ]);


        $product=new Product; 
        $product->p_name=$request->txtProductName;
        $product->title=$request->txtTitle;
        $product->slug=$request->txtSlug;
        $product->category=$request->txtCategory;
        $product->sub_category=$request->sub_category;
        $product->child_category=$request->child_category;
        $product->long_description=$request->txtLongDescription;
        $product->short_desctiption=$request->txtShortDescription;
        $product->icon=$request->txtIcon;
        $product->status=$request->txtStatus;
        $product->deleted_at=$request->txtDeleted_at;

        if(isset($request->file_p_img)){
            $p_imgName = time().(rand(100,1000)).'.'.$request->file_p_img->extension();
            $product->p_img=$p_imgName;
            $product->update();
            $request->file_p_img->move(public_path('img'),$p_imgName);
        }


        if(isset($request->file_otherimg1)){
            $otherimg1Name = time().(rand(100,1000)).'.'.$request->file_otherimg1->extension();
            $product->other_img1=$otherimg1Name;
            $product->update();
            $request->file_otherimg1->move(public_path('img'),$otherimg1Name);
        }

        if(isset($request->file_otherimg2)){
            $otherimg2Name = time().(rand(100,1000)).'.'.$request->file_otherimg2->extension();
            $product->other_img2=$otherimg2Name;
            $product->update();
            $request->file_otherimg2->move(public_path('img'),$otherimg2Name);
        }


        if(isset($request->file_otherimg3)){
            $otherimg3Name = time().(rand(100,1000)).'.'.$request->file_otherimg3->extension();
            $product->other_img3=$otherimg3Name;
            $product->update();
            $request->file_otherimg3->move(public_path('img'),$otherimg3Name);
        }

        $product->save();
        //dd($product);        
        return back()->with('success','Created Successfully.');
          
    }


    public function edit($id){
        $product=Product::find($id);
        $menu=Menu::all();
        $submenu=Submenu::all();
        $childmenu=Childmenu::all();
        $status=Status::all();
        return view("pages.backend.product.edit",["product"=>$product, "menu"=>$menu, "submenu"=>$submenu, "status"=>$status, "childmenu"=>$childmenu]);
		
	}



    public function update(Request $request,$id){

        // $validated = $request->validate([
        //     'child_category' => 'nullable|unique:products',
        // ]);

        $product = Product::find($id);

        

            $product->child_category=$request->child_category;
 



        if(isset($request->txtProductName)){
        $product->p_name=$request->txtProductName;
        }

        if(isset($request->txtTitle)){
        $product->title=$request->txtTitle;
        }

        if(isset($request->txtSlug)){
        $product->slug=$request->txtSlug;
        }

        if(isset($request->txtCategory)){
        $product->category=$request->txtCategory;
        }

        $product->sub_category=$request->sub_category;

       

        if(isset($request->txtLongDescription)){
        $product->long_description=$request->txtLongDescription;
        } 

        if(isset($request->txtShortDescription)){
        $product->short_desctiption=$request->txtShortDescription;
        } 

        if(isset($request->txtIcon)){
        $product->icon=$request->txtIcon;
        } 

        if(isset($request->txtStatus)){
        $product->status=$request->txtStatus;
        } 


        if(isset($request->file_p_img)){
            $p_imgName = time().(rand(100,1000)).'.'.$request->file_p_img->extension();
            $product->p_img=$p_imgName;
            $request->file_p_img->move(public_path('img'),$p_imgName);
        }


        if(isset($request->file_otherimg1)){
            $otherimg1Name = time().(rand(100,1000)).'.'.$request->file_otherimg1->extension();
            $product->other_img1=$otherimg1Name;
            $request->file_otherimg1->move(public_path('img'),$otherimg1Name);
        }

        if(isset($request->file_otherimg2)){
            $otherimg2Name = time().(rand(100,1000)).'.'.$request->file_otherimg2->extension();
            $product->other_img2=$otherimg2Name;
            $request->file_otherimg2->move(public_path('img'),$otherimg2Name);
        }


        if(isset($request->file_otherimg3)){
            $otherimg3Name = time().(rand(100,1000)).'.'.$request->file_otherimg3->extension();
            $product->other_img3=$otherimg3Name;
            $request->file_otherimg3->move(public_path('img'),$otherimg3Name);
        }

        $product->update();
        return redirect()->back()
        ->with('success',' Updated successfully'); 
                    
    }


    public function destroy(Request $request){  
        $productid=$request->input('d_product');
		$product= Product::find($productid);
		$product->delete();

        return redirect()->back()
        ->with('success',' Deleted successfully');
    }
}
