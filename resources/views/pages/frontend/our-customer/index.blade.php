@extends('layout.frontend.master')
@section('main_content')
<style>
    .services-style-three{
        position: relative;
        padding: 40px 0px 70px 0px;
    } 
    
    .sec-title-one {
        position: relative;
        margin-bottom: 30px;
    }
    .service-block-five .inner-box {
        position: relative;
        padding: 0px 0px;
        height: 104px;
        width: 270px;
    }

    .service-style-one {
        position: relative;
        padding: 50px 0px 70px;
    }

    .service-style-one .left-column {
        padding-right: 0px;
    }
</style>
<!--Page Title-->
<section class="page-title" style="background-image:url('frontend/images/background/featured-2-bg.jpg');">
    <div class="auto-container">
        <h1>Our Customer</h1>
    </div>
    
    <!--page-info-->
    <div class="page-info">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li class="active">Our Customer</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


<!--services-style-three-->
<section class="services-style-three">
    <div class="auto-container">
        <div class="sec-title-one">
            <h2>Our Happy Customers</h2>
        </div>

        <div class="row clearfix">
            @foreach($customer as $val)
            <div class="column col-md-3 col-sm-6 col-xs-12">
                <div class="service-block-five wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <img src="{{url('img/'.$val->customer_logo)}}" alt="" />             
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>


<!--service-style-one-->
<section class="service-style-one" style="background-color: #D7DBDD;">
    <div class="auto-container">
        <div class="row clearfix">
            <!--left-column-->
            @foreach($work as $val)
            <div class="column left-column col-md-4 col-sm-12">
                <!--box-column-->
                <div class="box-column wow slideInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <h2>{{ $val->title }}</h2>
                    <div class="text">{!! $val->detail !!}</div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection