@extends('layout.frontend.master')
@section('main_content')
<style>
 .news-section{
    position: relative;
    padding: 50px 0px 70px 0px;
 }  
 
 .two-col-section {
    position: relative;
    padding: 30px 0px 40px 0px;
}

.services-style-three {
    position: relative;
    padding: 0px 0px 40px;
}
</style>
<!--Page Title-->
<section class="page-title" style="background-image:url('frontend/images/background/featured-2-bg.jpg');">
    <div class="auto-container">
        <h1>Career</h1>
    </div>
    
    <!--page-info-->
    <div class="page-info">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li class="active">Career</li>
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
            @foreach ($careerdata as $val)
            <div class="column col-md-6 col-sm-12 col-xs-12">
                <!--content-column-->
                <div class="content-column">
                    <div class="sec-title-one">
                        <h4 style="color: red;">{{ $val->title1 }}</h4>
                        <h2 style="font-weight: bold;">{{ $val->header1 }}</h2>           
                    </div> 
                    <div class="text" style="font-size: 18px; text-align: justify;">{!! $val->long_description1 !!}</div> 
                </div>
            </div>

            <div class="column left-column col-md-6 col-sm-12 col-xs-12">
                <!--video-box-->
                <div class="box-column wow slideInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <figure class="image">
                        <a class="lightbox-image" href="" title="Image Caption Here">
                        <img style="height: 350px; width: 500px; object-fit: contain;" src="{{ asset('img/' . $val->img1) }}" alt="" /></a>
                    </figure>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>


<!--services-style-three-->
<section class="services-style-three">
    <div class="auto-container">
        @foreach ($careerdata as $val)
        <div class="sec-title-four">
            <h4 style="color: red;">{{ $val->title2 }}</h4>
            <h2 style="font-weight: bold;">{{ $val->header2 }}</h2>
            <div style="font-size: 22px;">{{ $val->long_description2 }}</div>
        </div>
        <div class="row clearfix">
        
            <div class="column col-md-4 col-sm-6 col-xs-12">
                <div class="service-block-five wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="icon-box"><span class="{{ $val->w_p_icon1 }}"></span></div>
                        <h3>{{ $val->w_p_name1 }}</h3>
                        <div class="text">{{ $val->w_p_detail1 }}</div>
                    </div>
                </div>
            </div>
            
            <div class="column col-md-4 col-sm-6 col-xs-12">
                <div class="service-block-five wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="icon-box"><span class="{{ $val->w_p_icon2 }}"></span></div>
                        <h3>{{ $val->w_p_name2 }}</h3>
                        <div class="text">{{ $val->w_p_detail2 }}</div>
                    </div>
                </div>
            </div>
            
            <div class="column col-md-4 col-sm-6 col-xs-12">
                <div class="service-block-five wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="icon-box"><span class="{{ $val->w_p_icon3 }}"></span></div>
                        <h3>{{ $val->w_p_name3 }}</h3>
                        <div class="text">{{ $val->w_p_detail3 }}</div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>

<!--two-col-section-->
<section class="two-col-section">
    <div class="auto-container">
        <div class="sec-title-four">
            <h2 style="font-weight: bold;">Apply Now</h2>
        </div>
        <div class="row clearfix">
            @foreach ($careerdata as $val)
            <div class="column left-column col-md-6 col-sm-12 col-xs-12">
                <!--video-box-->
                <div class="box-column wow slideInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <figure class="image">
                        <a class="lightbox-image" href="" title="Image Caption Here">
                        <div>
                            <img style="background-color: red; height: 400px; width: 500px; object-fit: contain;" src="{{ asset('img/' . $val->img2) }}" alt="" /></a>
                        </div>
                    </figure>
                </div>
            </div>
            @endforeach

            <div class="column news-column col-md-6 col-sm-12 col-sm-12">
                <!--form-box-->
                <div class="form-box default-form default-form wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="contact-form">
                        @if(session()->has('msg'))
                            <div class="alert alert-success" role="alert">
                            {{ session()->get('msg') }}
                            </div>
                        @endif
                        <form class="wpcf7" enctype="multipart/form-data" method="post" action="{{url('resume_store')}}">
                            @csrf
                            <div class="row clearfix">
                                <div class="form-group icon-group col-md-6 col-sm-6 col-xs-12">
                                    <div class="group-inner">
                                        <label class="icon-label" for="field-one"><span class="fa fa-user"></span></label>
                                        <input type="text" name="txtName" id="txtName" value="" placeholder="Name *">
                                    </div>
                                </div>
                            
                                <div class="form-group icon-group col-md-6 col-sm-6 col-xs-12">
                                    <div class="group-inner">
                                        <label class="icon-label" for="field-two"><span class="fa fa-envelope"></span></label>
                                        <input type="email" name="txtEmail" id="txtEmail" value="" placeholder="Email Id *">
                                    </div>
                                </div>
                            
                                <div class="form-group icon-group col-md-12 col-sm-12 col-xs-12">
                                    <div class="group-inner">
                                        <label class="icon-label" for="field-three"><span class="fa fa-file"></span></label>
                                        <input type="text" name="txtSubject" id="txtSubject" value="" placeholder="Subject *">
                                    </div>
                                </div>


                                <div class="form-group icon-group col-md-12 col-sm-12 col-xs-12">
                                    <div class="group-inner">
                                        <label class="icon-label" for="field-three"><span class="fa fa-phone"></span></label>
                                        <input type="text" name="txtPhone" id="txtPhone" value="" placeholder="Contact Number *">
                                    </div>
                                </div>
    
                                <div class="form-group icon-group col-md-12 col-sm-12 col-xs-12">
                                    <div class="group-inner">
                                        <label class="textarea-label icon-label" for="field-four"><span class="fa fa-file"></span></label>
                                        <textarea name="txtMessage" id="txtMessage" placeholder="Message *"></textarea>
                                    </div>
                                </div>

                                <div class="form-group icon-group col-md-12 col-sm-12 col-xs-12">
                                    <input type="file" class="form-control-file"  name="fileAttach">
                                </div>

                                <div class="form-group col-md-4 col-sm-12 col-xs-12">
                                    <button type="submit" id="snd_resume" class="theme-btn btn-style-four">SUBMIT</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>   
            </div>
        </div>
    </div>
</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endsection