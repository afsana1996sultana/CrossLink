@extends('layout.frontend.master')
@section('main_content')
<!--Page Title-->
<section class="page-title" style="background-image:url('/frontend/images/background/featured-2-bg.jpg');">
    <div class="auto-container">
        <h1>Blog Details</h1>
    </div>
    
    <!--page-info-->
    <div class="page-info">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li class="active">Blog Details</li>
                    </ul>
                </div>
            </div> 
        </div>
    </div> 
</section>

<!--Sidebar blog Page-->
<div class="sidebar-page-container">
    <div class="auto-container">
        <div class="row clearfix">
            <!--Content Side-->
            <div class="content-side col-lg-9 col-md-8 col-sm-12 col-xs-12">
                <section class="news-outer"> 
                    <div class="news-style-two">
                        <div class="inner-box">
                            <div>
                                <img src="{{url('img/'.$blogData->banner_img)}}" alt=""></a>
                            </div>
                    
                            <!--lower-content-->
                            <div class="lower-content">
                                <h3>{{$blogData->title}}</h3>
                                <!--post-meta-->
                                <ul class="post-meta">
                                    <li><span class="fa fa-heart-o"></span> 10 Likes</li>
                                    <li><span class="fa fa-comments-o"></span> 06 Comments</li>
                                </ul>
                                <p>{!! $blogData->description !!}</p>
                            </div>
                        </div>
                    </div>
                    
                    <!--Comments Area-->
                    <div class="comments-area">
                        <h2 class="total-comments">Comments (03)</h2>
                        <div class="comment-box">
                            <div class="comment">
                                <div class="comment-inner">
                                    <div class="author-thumb"><img src="{{url('frontend/images/resource/blog-image-17.jpg')}}" alt=""></div>
                                    <!--comment-content-->
                                    <div class="comment-content">
                                        <div class="comment-header clearfix">
                                            <h4>George Mc Mahon</h4>
                                            <div class="comment-info">{{ date('M d, Y', strtotime($blogData->published_date)) }} </div>
                                        </div>
                                        <div class="text">The Love Boat promises something for everyone be from me and the card attached would say federal impossible to this time there is no stopping us the Love Boat soon run.</div>
                                    </div>     
                                </div>
                            </div>
                            
                            <div class="comment reply-comment">
                                <div class="comment-inner">
                                    <div class="author-thumb"><img src="{{url('frontend/images/resource/blog-image-17.jpg')}}" alt=""></div>
                                    <!--comment-content-->
                                    <div class="comment-content">
                                        <div class="comment-header clearfix">
                                            <h4>Stephen</h4>
                                            <div class="comment-info">{{ date('M d, Y', strtotime($blogData->published_date)) }}</div>
                                        </div>
                                        <div class="text">The Love Boat promises something for everyone be from me and the card attached to would say federal impossible to this time there is no run.</div>
                                    </div>
                                </div>
                            </div>  
                        </div>
                    </div>
                
                    <!-- Comment Form -->
                    <div class="comment-form wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="group-title"><h2>Post your Comments</h2></div>
                        <!--Comment Form-->
                        <form method="post" action="">
                            <div class="row clearfix">
                                <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                    <input type="text" name="username" placeholder="Name">
                                </div>
                                
                                <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                    <input type="email" name="email" placeholder="Email id">
                                </div>
                                
                                <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                    <input type="email" name="Subject" placeholder="Subject">
                                </div>
                                
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                    <textarea name="message" placeholder="Comment"></textarea>
                                </div>
                                
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                    <button class="theme-btn btn-style-four" type="submit" name="submit-form">SUBMIT</button>
                                </div>  
                            </div>
                        </form>
                    </div>
                    <!--End Comment Form -->
                </section>
            </div>
            <!--Content Side-->

            <!--Sidebar-->
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <aside class="sidebar news-sidebar">
                    <!-- Recent Posts -->
                    <div class="sidebar-widget recent-posts wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="sec-title-seven"><h2>Recent Posts</h2></div>
                        @foreach ($blog as $val)	
                        <article class="post">
                            <figure class="post-thumb"><img src="{{url('img/'.$val->blog_img)}}" alt=""></figure>
                            <h4>{{ \Illuminate\Support\Str::limit($val->title, 30, $end='...') }}</h4>
                            <!--post-meta-->
                            <ul class="post-meta">
                                <li>Jul, 03</li>
                                <li><span class="fa fa-commenting-o"></span> 05 Comments</li>
                            </ul>
                        </article>
                        @endforeach
                    </div>
                    
                    <!--Call TO Action-->
                    <div class="sidebar-widget call-to-action-four wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms" style="background-image:url('/frontend/images/resource/quote-widget.jpg');">
                        <div class="title">Any Questions related Industrial Solution? Call us</div>
                        <div class="number"><span class="fa fa-phone"></span> +001-345-6789-00</div>
                        <a class="theme-btn btn-style-one" href="{{url('/contact-us')}}">GET QUOTES</a>
                    </div>

                    <!-- Popular Tags -->
                    <div class="sidebar-widget popular-tags wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="sec-title-seven"><h2>Popular Tags</h2></div>
                        <a href="">Automation</a>
                        <a href="">PLC</a>
                        <a href="">Metal</a>
                        <a href="">Process</a>
                        <a href="">Gas</a>
                        <a href="">Mechanical</a>
                        <a href="">Power</a>
                    </div>
                </aside>
            </div>
            <!--Sidebar-->
        </div>
    </div>
</div>
@endsection