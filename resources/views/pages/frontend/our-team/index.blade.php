@extends('layout.frontend.master')
@section('main_content')
<style>
 .industry-section{
    position: relative;
    padding: 60px 0px 70px 0px;
 }  
</style>
<!--Page Title-->
<section class="page-title" style="background-image:url('frontend/images/background/featured-2-bg.jpg');">
    <div class="auto-container">
        <h1>Our Team</h1>
    </div>
    
    <!--page-info-->
    <div class="page-info">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li class="active">Our Team</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


<!--industry-->
<section class="industry-section">
    <div class="auto-container">
        @foreach($team as $val)
        <div class="row" style="padding-bottom: 50px;">
            <div class="column col-md-8 col-sm-12 col-xs-12">
                <!--content-column-->
                <div class="content-column">
                    <div class="sec-title-one">
                        <h2 style="font-weight: bold;">{{ $val->designation }}</h2> 
                        <h3 style="font-size: 22px;">{{ $val->name }}</h3> 
                        <h4 style="color: red;">{{ $val->email }}</h4>           
                    </div> 
                    <div class="text" style="font-size: 18px; text-align: justify;">{!! $val->details !!}</div> 
                </div>
            </div>

            <div class="column left-column col-md-4 col-sm-12 col-xs-12">
                <!--video-box-->
                <div class="box-column wow slideInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <figure>
                        <a class="lightbox-image" href="" title="Image Caption Here">
                        <img style="border-radius: 200px;" src="{{url('img/'.$val->img)}}" alt="" /></a>
                    </figure>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>
@endsection