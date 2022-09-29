<?php

namespace App\Http\Controllers\Admins;

use App\Models\Customer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customer=Customer::all();
        return view("pages.backend.customer.index",["customer"=>$customer]);
        
    }


    public function store(Request $request){
        $customer=new Customer; 

        if(isset($request->filePhoto)){
			$imgName = (rand(100,1000)).'.'.$request->filePhoto->extension();
			$customer->customer_logo=$imgName;
			$customer->update();
			$request->filePhoto->move(public_path('img'),$imgName);
		}
        $customer->deleted_at=$request->txtDeleted_at;
        $customer->save();
               
        return back()->with('success','Created Successfully.');     
    }


    public function edit($id){
		$customer=Customer::find($id);
		return response()->json([
			'status'=>200,
			'customer'=>$customer
		]);
	}


    public function update(Request $request,Customer $customer){
        $customerid=$request->input('cmbCustomerId');
        $customer = Customer::find($customerid);
        $customer->id=$request->cmbCustomerId; 

        if(isset($request->filePhoto)){
			$imgName = (rand(100,1000)).'.'.$request->filePhoto->extension();
			$customer->customer_logo=$imgName;
			$request->filePhoto->move(public_path('img'),$imgName);
		}
        $customer->deleted_at=$request->txtDeleted_at;		   
        $customer->update();
        return redirect()->back()
        ->with('success',' Updated successfully'); 
                    
    }


    public function destroy(Request $request){  
        $customerid=$request->input('d_customer');
		$customer= Customer::find($customerid);
		$customer->delete();

        return redirect()->back()
        ->with('success',' Deleted successfully');
    }
}
