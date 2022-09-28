<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\Ourteam;
use App\Models\Team;
use Illuminate\Http\Request;

class OurteamController extends Controller
{
    public function index()
    {
       $data['team'] = Team::select('id', 'name', 'email', 'designation', 'details', 'img')->get();

       return view('pages.frontend.our-team.index', $data); 
    }
}
