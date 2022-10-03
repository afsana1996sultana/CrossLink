<?php

namespace App\Http\Controllers\Admins;
use Illuminate\Support\Facades\DB;
use App\Models\Blog;
use App\Models\Status;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    public function index()
    {
        $status=Status::all();
        $blog =DB::table('blogs')
            ->join('statuses','statuses.id', '=', 'blogs.status')
            ->select('statuses.s_name', 'blogs.*')
            ->get();
        return view("pages.backend.blog.index",["blog"=>$blog, "status"=>$status]);
        
    }


    public function create()
    {
        $blog=Blog::all();
        $status=Status::all(); 

        return view("pages.backend.blog.create",["blog"=>$blog, "status"=>$status]);
    }


    public function store(Request $request){
        $blog=new Blog; 
        $blog->user_id=Auth::user()->id;
        $blog->title=$request->txtTitle;
        $blog->meta_title=$request->txtMetaTitle;
        $blog->slug=$request->txtSlug;
        $blog->description=$request->txtDescription;
        $blog->published_date=$request->txtPublishedDate;
        $blog->seo_title=$request->txtSeoTitle;
        $blog->seo_description=$request->txtSeoDescription;
        $blog->status=$request->txtStatus;
        $blog->deleted_at=$request->txtDeleted_at;

        if(isset($request->file_blog_img)){
            $blog_imgName = time().(rand(100,1000)).'.'.$request->file_blog_img->extension();
            $blog->blog_img=$blog_imgName;
            $blog->update();
            $request->file_blog_img->move(public_path('img'),$blog_imgName);
        }

        if(isset($request->file_banner_img)){
            $blog_imgName = time().(rand(100,1000)).'.'.$request->file_blog_img->extension();
            $blog->banner_img=$banner_imgName;
            $blog->update();
            $request->file_banner_img->move(public_path('img'),$banner_imgName);
        }
        $blog->save();        
        return back()->with('success','Created Successfully.');
          
    }


    public function edit($id){
        $blog=Blog::find($id);
        $status=Status::all(); 	    
        return view("pages.backend.blog.edit",["blog"=>$blog, "status"=>$status]);
		
	}



    public function update(Request $request,$id){
        $blog = Blog::find($id);

        if(isset($request->txtTitle)){
        $blog->title=$request->txtTitle;
        }

        if(isset($request->txtMetaTitle)){
        $blog->meta_title=$request->txtMetaTitle;
        }

        if(isset($request->txtSlug)){
        $blog->slug=$request->txtSlug;
        }

        if(isset($request->txtDescription)){
        $blog->description=$request->txtDescription;
        }

        if(isset($request->txtPublishedDate)){
        $blog->published_date=$request->txtPublishedDate;
        }

        if(isset($request->txtSeoTitle)){
        $blog->seo_title=$request->txtSeoTitle;
        }

        if(isset($request->txtSeoDescription)){
        $blog->seo_description=$request->txtSeoDescription;
        }

        if(isset($request->txtStatus)){
        $blog->status=$request->txtStatus;
        } 

        if(isset($request->file_blog_img)){
            $blog_imgName = (rand(100,1000)).'.'.$request->file_blog_img->extension();
            $blog->blog_img=$blog_imgName;
            $request->file_blog_img->move(public_path('img'),$blog_imgName);
        }

        if(isset($request->file_banner_img)){
            $banner_imgName = (rand(100,1000)).'.'.$request->file_banner_img->extension();
            $blog->banner_img=$banner_imgName;
            $request->file_banner_img->move(public_path('img'),$banner_imgName);
        }

        $blog->update();
        return redirect()->back()
        ->with('success',' Updated successfully'); 
                    
    }


    public function destroy(Request $request){  
        $blogid=$request->input('d_blog');
		$blog= Blog::find($blogid);
		$blog->delete();

        return redirect()->back()
        ->with('success',' Deleted successfully');
    }
}
