@extends('layout.frontend.master')
@section('main_content')
<style>
    .two-col-section {
    position: relative;
    padding: 100px 0px 40px 0px;
}
</style>

<!--Page Title-->
<section class="page-title" style="background-image:url('frontend/images/background/featured-2-bg.jpg');">
    <div class="auto-container">
        <h1>News</h1>
    </div>
    
    <!--page-info-->
    <div class="page-info">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li class="active">News</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!--two-col-section-->
<section class="two-col-section">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="column news-column col-md-6 col-sm-12 col-sm-12">
                <div class="sec-title-one">
                    <h2>Latest News</h2>
                </div>
                
                <!--News Style One-->
                @foreach($blog as $val)
                <div class="news-style-one">
                    <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="row clearfix">
                            <div class="image-column col-md-4 col-sm-4 col-xs-12">
                                <figure class="image-box"><a href="{{URL::to('blog_details/'.$val->slug)}}"><img src="{{url('img/'.$val->blog_img)}}" alt=""></a></figure>
                            </div>

                            <div class="content-column col-md-8 col-sm-8 col-xs-12">
                                <div class="content">
                                    <h3><a href="{{URL::to('blog_details/'.$val->slug)}}">{{$val->title}}</a></h3>
                                    <div class="text">{!! \Illuminate\Support\Str::words(strip_tags($val->description), 15,'....')  !!}</div>
                                    <a href="{{URL::to('blog_details/'.$val->slug)}}" class="theme-btn btn-style-five read-more">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="column news-column col-md-6 col-sm-12 col-sm-12">
                <div class="sec-title-one">
                    <h2>Contact Form</h2>
                </div>
                
                <!--form-box-->
                <div class="form-box default-form default-form wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="contact-form">
                        <form class="wpcf7" id="ajaxmsg">
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
                                        <label class="textarea-label icon-label" for="field-four"><span class="fa fa-file"></span></label>
                                        <textarea name="txtMessage" id="txtMessage" placeholder="Message *"></textarea>
                                    </div>
                                </div>
                                <div class="form-group col-md-4 col-sm-12 col-xs-12">
                                    <button id="snd_msg" class="theme-btn btn-style-four">SUBMIT</button>
                                </div>
                            </div>
                        </form>
                    </div>
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
                <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{url('frontend/images/clients/1.jpg')}}" alt=""></a></figure></li>
                <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{url('frontend/images/clients/2.jpg')}}" alt=""></a></figure></li>
                <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{url('frontend/images/clients/3.jpg')}}" alt=""></a></figure></li>
                <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{url('frontend/images/clients/4.jpg')}}" alt=""></a></figure></li>
                <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{url('frontend/images/clients/5.jpg')}}" alt=""></a></figure></li>
            </ul>
        </div>
        </div>
    </div>
</section>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
       
    $("#snd_msg").click(function(){

      $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });

      $('#snd_msg').html('Please Wait...');
      $("#snd_msg"). attr("disabled", true);

      $.ajax({
        url: "message_store",       
        type: "POST",
        data: $('#ajaxmsg').serialize(),
        success: function( response ) {
          $('#snd_msg').html('Submit');
          $("#snd_msg"). attr("disabled", false);
         
          $("#txtName").val('');
          $("#txtEmail").val('');
          $("#txtSubject").val('');
          $("#txtMessage").val('');
          alert('Your Message has been submitted successfully');
        }
       });
    });
    
</script>
@endsection