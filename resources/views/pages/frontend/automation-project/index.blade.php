@extends('layout.frontend.master')
@section('main_content')
<style>
.service-style-one {
    position: relative;
    padding: 50px 0px 100px;
} 

.sec-title-one {
    position: relative;
    margin-bottom: 10px;
}
</style>

<!--Page Title-->
<section class="page-title" style="background-image:url('frontend/images/background/featured-2-bg.jpg');">
    <div class="auto-container">
        <h1>Automation Project Work</h1>
    </div>
    
    <!--page-info-->
    <div class="page-info">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li class="active">Automation Project Work</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


<!--service-style-one-->
<section class="service-style-one">
    <div class="auto-container">
        <div class="row clearfix">  
            <div class="col-md-12 col-sm-12">
                <div class="sec-title-one">
                    <h2>WHAT WE DO</h2>
                </div>

                <div class="row clearfix">
                    @foreach ($automation as $val)
                    <!--service-block-->
                    <div class="service-block col-md-6 col-sm-6 col-sm-12">
                        <div class="inner-box">
                            <!--icon-box-->
                            <div class="icon-box">
                                <span class="{{ $val->icon }}"></span>
                            </div>
                            <h3>{{ $val->header }}</h3>
                            <div class="text" style="text-align: justify;">{{ $val->detail }}</div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@endsection