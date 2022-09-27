<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\Career;
use App\Models\Careerdata;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    public function index()
    {

        $data['careerdata'] = Careerdata::select('id', 'header1', 'header2', 'title1', 'title2', 
        'long_description1', 'long_description2', 'img1', 'img2', 'w_p_name1', 'w_p_name2',
        'w_p_name3', 'w_p_icon1', 'w_p_icon2', 'w_p_icon3', 'w_p_detail1', 'w_p_detail2',
        'w_p_detail3',)->get();

        return view('pages.frontend.career.index',$data);
        
    }
}
