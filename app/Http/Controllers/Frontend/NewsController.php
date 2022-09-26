<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\Blog;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {

        // $data['contactus'] = Contactus::select('id','title', 'heading', 'details', 'address', 'email', 'phone')->get();
        // View()->share($partner);
        $data['blog'] = Blog::select('id', 'user_id', 'title', 'slug', 'description', 'published_date', 'blog_img', 'banner_img')->get();
        return view('pages.frontend.news.index', $data);
        
    }
}
