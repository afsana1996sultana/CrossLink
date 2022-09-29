<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\Ourcustomer;
use App\Models\Customer;
use App\Models\Customerwork;
use Illuminate\Http\Request;

class OurcustomerController extends Controller
{
    public function index()
    {
       $data['customer'] = Customer::select('id', 'customer_logo')->get();

       $data['work'] = Customerwork::select('id', 'title', 'detail')->get();

       return view('pages.frontend.our-customer.index', $data); 
    }
}
