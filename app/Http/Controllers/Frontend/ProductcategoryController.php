<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\Productcategory;
use App\Models\Submenu;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductcategoryController extends Controller
{
    public function product_category(Request $request){

        $data['SubmenuId'] = Submenu::where('slug',$request->slug)->select('id','submenu_name')->first();

        $data['ProductData'] = Product::where('sub_category',$data['SubmenuId']->id)
        ->get();
        //return $data['ProductData'];

        return view('pages.frontend.product_category.index', $data);
    }
}
