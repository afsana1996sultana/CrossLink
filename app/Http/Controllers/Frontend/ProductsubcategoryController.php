<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\Productsubcategory;
use App\Models\Childmenu;
use Illuminate\Http\Request;

class ProductsubcategoryController extends Controller
{
    public function product_sub_category(Request $request){

        $data['ChildmenuId'] = Childmenu::where('slug',$request->slug)->select('id','childmenu_name')->first();


        // $data['ProductData'] = Products::where('category',$data['CategoryId']->id)
        // ->paginate(18);


        return view('pages.frontend.product_sub_category.index', $data);
    }
}
