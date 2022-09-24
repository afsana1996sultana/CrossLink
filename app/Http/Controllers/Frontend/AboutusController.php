<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\Aboutus;
use Illuminate\Http\Request;

class AboutusController extends Controller
{
    public function index()
    {
       return view('pages.frontend.about-us.index'); 
    }
}
