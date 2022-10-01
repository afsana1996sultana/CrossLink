<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\Productsubcategory;
use App\Models\Childmenu;
use App\Models\Menu;
use App\Models\Submenu;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductsubcategoryController extends Controller
{
    public function product_sub_category(Request $request){

       

        $ChildmenuId = Childmenu::where('slug',$request->slug)->select('id','childmenu_name')->first();



        $data['ProductData'] = Product::where('products.child_category', $ChildmenuId->id)
        ->join('menus','menus.id', '=', 'products.category')
        ->join('submenus','submenus.id', '=', 'products.sub_category')
        ->join('childmenus','childmenus.id', '=', 'products.child_category')
        ->select('menus.menu_name', 'submenus.submenu_name', 'childmenus.childmenu_name', 'products.*')
        ->first();

   //return $data;

        return view('pages.frontend.product_sub_category.index', $data);
    }
}
