<?php

namespace App\Http\Controllers;

use App\Models\Frontend;
use App\Models\Mission;
use App\Models\Vission;
use App\Models\Testimonial;
use App\Models\Frequentlyasked;
use App\Models\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Support\Facades\DB;


class FrontendController extends Controller
{
    public function home()
    {
        $data['mission'] = Mission::select('id', 'mission')->get();

        $data['vission'] = Vission::select('id', 'vission')->get();

        $data['testimonial'] = Testimonial::select('id', 'name', 'designation', 'description', 'img')->get();

        $data['frequentlyasked'] = Frequentlyasked::select('id', 'question', 'answer', 'img')->get();

        $data['offer'] = Offer::select('id', 'header', 'icon', 'detail')->get();

        return view('pages.frontend.home', $data);
        
    }
}
