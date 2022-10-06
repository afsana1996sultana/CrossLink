<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Allservice;
use App\Models\Sponsor;

class AllserviceController extends Controller
{
    public function index()
    {

       $data['service'] = Service::select('id', 'name', 'slug', 'icon', 'description', 'img')->get();

       $data['sponsor'] = Sponsor::select('id', 'sponsor_logo')->get();

       return view('pages.frontend.services.index', $data); 
    }
}
