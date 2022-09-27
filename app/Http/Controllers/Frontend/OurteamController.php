<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\Ourteam;
use Illuminate\Http\Request;

class OurteamController extends Controller
{
    public function index()
    {
       //$data['about'] = About::select('id', 'header1', 'header2', 'title1', 'title2', 'long_description1', 'long_description2', 'img1', 'img2')->get();

       return view('pages.frontend.our-team.index'); 
    }
}
