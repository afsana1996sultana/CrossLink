@extends('layout.frontend.master')
@section('main_content')
<style>
    .sidebar-page-container {
    position: relative;
    padding: 50px 0px 90px;
}
</style>

<!--Page Title-->
<section class="page-title" style="background-image:url('/frontend/images/background/featured-2-bg.jpg');">
    <div class="auto-container">
        <h1>{{$ProductData->childmenu_name}}</h1>
    </div>
    
    <!--page-info-->
    <div class="page-info">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li class="active">PLC</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


<!--Sidebar Page-->
<div class="sidebar-page-container">
    <div class="auto-container">
        <div class="row clearfix">
            <!--Content Side-->
            <div class="content-side col-lg-9 col-md-8 col-sm-12 col-xs-12">
                <section class="content-section services-content">
                    <div>
                       <img style="height: 500px; width: 700px; object-fit: contain;" src="{{url('img/'.$ProductData->p_img)}}" alt="">
                    </div>
                    <div class="sec-title-one"><h2>{{$ProductData->childmenu_name}}</h2></div>

                    <div class="text-block" style="text-align: justify;">
                        <p>{!! $ProductData->long_description !!}</p>
                    </div>

                    <div class="row clearfix">
                        <div class="col-md-7 col-sm-7 col-xs-12 clearfix">
                            <div class="featured-gallery-two clearfix">
                                <!--featured-image-box-->
                                <div class="featured-image-box col-md-12 col-sm-12 col-xs-12">
                                    <div>
                                        <a class="lightbox-image" href="{{url('img/'.$ProductData->other_img1)}}" title="Image Caption Here">
                                        <img style="height: 200px; width: 485px; object-fit: contain;" src="{{url('img/'.$ProductData->other_img1)}}" alt=""></a>
                                    </div>
                                </div>
                                
                                <!--featured-image-box-->
                                <div class="featured-image-box col-md-6 col-sm-6 col-xs-12">
                                    <div>
                                        <a class="lightbox-image" href="{{url('img/'.$ProductData->other_img2)}}" title="Image Caption Here">
                                        <img style="height: 200px; width: 238px; object-fit: contain;" src="{{url('img/'.$ProductData->other_img2)}}" alt=""></a>
                                    </div>
                                </div>
                                
                                <!--featured-image-box-->
                                <div class="featured-image-box col-md-6 col-sm-6 col-xs-12">
                                    <div>
                                        <a class="lightbox-image" href="{{url('img/'.$ProductData->other_img3)}}" title="Image Caption Here">
                                        <img style="height: 200px; width: 238px; object-fit: contain;" src="{{url('img/'.$ProductData->other_img3)}}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-5 col-sm-5 col-xs-12">
                            <div class="sec-title-one"><h2>{{$ProductData->title}}</h2></div>
                            <div class="text" style="text-align: justify;">{!! $ProductData->short_desctiption !!}</div>
                        </div>
                    </div>
                </section>
            </div>
            <!--Content Side-->
            <!--Sidebar-->
            <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                <aside class="sidebar about-sidebar">
                    <!-- Tabbed Links -->
                    <div class="sidebar-widget tabbed-links">
                        <ul class="tabbed-nav">
                            @foreach ($submenu as $val)
                                    <?php
                                    $Submenu = App\Models\Submenu::where('id', $val->id)->get();
                                    ?>
                                <li><a href="{{url('product_category/'.$val->slug)}}">{{$val->submenu_name}}</a></li>
                            @endforeach
                        </ul>
                    </div>

                    <!--quote-widget-->
                    <div class="call-to-action-four" style="background-image:url('frontend/images/resource/quote-widget.jpg');">
                        <div class="title">Any Questions related Solutions? Call us</div>
                        
                        <div class="number"><span class="flaticon-phone-receiver"></span> +001-345-6789-00</div>
                        <a class="theme-btn btn-style-one" href="{{url('/contact-us')}}">GET QUOTES</a>
                    </div>
                </aside>
            </div>
            <!--Sidebar-->
        </div>
    </div>
</div>
@endsection