<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Status;


class BlogdetailController extends Controller
{
    public function blog_details(Request $request){

        $data['blogData'] = Blog::where('blogs.slug',$request->slug)
        ->join('statuses','statuses.id', '=', 'blogs.status')
        ->select('statuses.s_name', 'blogs.*')
        ->first();
        
        $data['blog'] = Blog::select('id', 'user_id', 'title', 'slug', 'description', 'published_date', 'blog_img', 'banner_img')->get();

        return view('pages.frontend.blog-details.index', $data);

    }
}
