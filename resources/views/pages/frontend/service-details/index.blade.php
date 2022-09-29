@extends('layout.frontend.master')
@section('main_content')
<style>
    .industry-section {
    position: relative;
    padding: 40px 0px 0px 0px;
}
.image img {
    height: 350px; 
    width: 555px;
    object-fit: contain;
    padding-top: 20px;
}
</style>

<!--Page Title-->
<section class="page-title" style="background-image:url('/frontend/images/background/featured-2-bg.jpg');">
    <div class="auto-container">
        <h1>Service Details</h1>
    </div>
    
    <!--page-info-->
    <div class="page-info">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li class="active">Service Details</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!--industry-->
<section class="industry-section">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="column left-column col-md-6 col-sm-12 col-xs-12">
                <!--video-box-->
                <div class="box-column wow slideInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <a class="lightbox-image" href="" title="Image Caption Here">
                    <div class="image"> 
                        <img src="{{ asset('img/' . $serviceData->img) }}" alt="" /></a>
                    </div>
                </div>
            </div>
            <div class="column col-md-6 col-sm-12 col-xs-12">
                <!--content-column-->
                <div class="content-column">
                    <div class="sec-title-one">
                        <h2>{{ $serviceData->name }}</h2>
                    </div> 
                    <div class="text" style="text-align: justify;">{!! $serviceData->description !!}</div> 
                </div>
            </div>
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