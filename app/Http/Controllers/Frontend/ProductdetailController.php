<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Submenu;
use App\Models\Product;

class ProductdetailController extends Controller
{
    public function product_details(Request $request){

        $data['ProductData'] = Product::where('products.slug',$request->slug)
        ->join('menus','menus.id', '=', 'products.category')
        ->join('submenus','submenus.id', '=', 'products.sub_category')
        ->select('menus.menu_name', 'submenus.submenu_name', 'products.*')
        ->first();

        return view('pages.frontend.product-details.index', $data);

    }
}
