<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\Blog;
use App\Models\Sponsor;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $data['blog'] = Blog::select('id', 'user_id', 'title', 'slug', 'description', 'published_date', 'blog_img', 'banner_img')->get();

        $data['sponsor'] = Sponsor::select('id', 'sponsor_logo')->get();

        return view('pages.frontend.news.index', $data);
        
    }
}
