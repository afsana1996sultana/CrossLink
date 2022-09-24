<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\Career;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    public function index()
    {

        // $data['contactus'] = Contactus::select('id','title', 'heading', 'details', 'address', 'email', 'phone')->get();
        // View()->share($partner);

        return view('pages.frontend.career.index');
        
    }
}
