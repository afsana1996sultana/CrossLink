@extends('layout.frontend.master')
@section('main_content')

<!--Page Title-->
<section class="page-title" style="background-image:url('frontend/images/background/featured-2-bg.jpg');">
    <div class="auto-container">
        <h1>{{$SubmenuId->submenu_name}}</h1>
    </div>
    
    <!--page-info-->
    <div class="page-info">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li class="active">{{$SubmenuId->submenu_name}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!--services-column-two-->
<section class="services-column-two">
    <div class="auto-container">
        
        <!--Section Title-->
        <div class="sec-title-one">
            <h2>Our Featured Products</h2>
            <div class="text" style="font-size: 18px;">Our marketing automation product features can help you enhance customer experiences, increase engagement, collect in-depth information to analyze target.</div>
        </div>
        <div class="row clearfix">
            @foreach($ProductData as $Val)
            <!--Service block two-->
            <div class="service-block-two col-md-4 col-sm-6 col-xs-12">
                <div class="inner-box wow fadeIn" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="image-box">
                        <figure class="image"><a href="{{URL::to('product_details/'.$Val->slug)}}"><img src="{{ asset('img/' . $Val->p_img) }}" alt=""></a></figure>
                    </div>
                    <div class="lower-content">
                        <div class="outer-link">
                            <a href="{{URL::to('product_details/'.$Val->slug)}}" class="theme-btn service-title"><span class="{{$Val->icon}}"></span> {{$Val->p_name}}</a>
                        </div>
                        <div class="text">   
                            {!! \Illuminate\Support\Str::words(strip_tags($Val->long_description), 15,'....')  !!}
                        </div>
                        <div class="link-box"><a href="{{URL::to('product_details/'.$Val->slug)}}" class="theme-btn normal-link">VIEW MORE <span class="fa fa-long-arrow-right"></span></a></div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection