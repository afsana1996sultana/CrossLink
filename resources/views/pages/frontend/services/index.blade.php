@extends('layout.frontend.master')
@section('main_content')
<style>
    .services-column-two {
    position: relative;
    padding: 50px 0px 70px 0px;
}
</style>

<!--Page Title-->
<section class="page-title" style="background-image:url('frontend/images/background/featured-2-bg.jpg');">
    <div class="auto-container">
        <h1>Services</h1>
    </div>
    
    <!--page-info-->
    <div class="page-info">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li class="active">Services</li>
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
            <h2>Our Featured Services</h2>
            <div class="text">Our Featured Services is the use of control systems, computers or robots, and 
                information technologies for handling different processes and machineries.</div>
        </div>
        <div class="row clearfix">
            @foreach ($service as $val)
            <!--Service block two-->
            <div class="service-block-two col-md-4 col-sm-6 col-xs-12">
                <div class="inner-box wow fadeIn" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="image-box">
                        <figure class="image"><a href="{{URL::to('service_details/'.$val->slug)}}"><img src="{{url('img/'.$val->img)}}" alt=""></a></figure>
                    </div>
                    <div class="lower-content">
                        <div class="outer-link">
                            <a href="{{URL::to('service_details/'.$val->slug)}}" class="theme-btn service-title"><span class="{{ $val->icon }}"></span> {{ $val->name }}</a>
                        </div>
                        <div class="text" style="text-align: justify;">{!! \Illuminate\Support\Str::words(strip_tags($val->description), 15,'....')  !!}</div>
                        <div class="link-box"><a href="{{URL::to('service_details/'.$val->slug)}}" class="theme-btn normal-link">VIEW MORE <span class="fa fa-long-arrow-right"></span></a></div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!--sponsors-->
<section class="sponsors-section">
    <div class="auto-container">
        <div class="row">
            <div class="sponsors-outer">
            <!--Sponsors Carousel-->
            <ul class="sponsors-carousel">
                @foreach($sponsor as $val)
                <li class="slide-item"><figure class="image-box"><a href=""><img src="{{url('img/'.$val->sponsor_logo)}}" alt=""></a></figure></li>
                @endforeach
            </ul>
        </div>
        </div>
    </div>
</section>
@endsection