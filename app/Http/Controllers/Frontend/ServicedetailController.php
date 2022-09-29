<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Sponsor;

class ServicedetailController extends Controller
{
    public function service_details(Request $request){

        $data['serviceData'] = Service::where('services.slug',$request->slug)
        ->first();

        $data['sponsor'] = Sponsor::select('id', 'sponsor_logo')->get();

        return view('pages.frontend.service-details.index', $data);

    }
}
