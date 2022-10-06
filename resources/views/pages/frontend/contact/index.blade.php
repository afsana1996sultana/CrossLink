@extends('layout.frontend.master')
@section('main_content')
<style>
    .contact-info-section {
    position: relative;
    padding: 100px 0px 10px;
}
</style>
<!--Page Title-->
<section class="page-title" style="background-image:url('frontend/images/background/featured-2-bg.jpg');">
    <div class="auto-container">
        <h1>Contact</h1>
    </div>
    
    <!--page-info-->
    <div class="page-info">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li class="active">Contact</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!--contact-info-->
<section class="contact-info-section">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="column col-md-4 col-sm-6 col-xs-12">
                <div class="info-box wow zoomInStable" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <!--icon-box-->
                    <div class="icon-box">
                        <span class="flaticon-home-1"></span>
                    </div>
                    
                    <h3>Visit Us</h3>
                    <div class="text">Sector #09, Road #02, House #27,Uttara,<br>Dhaka-1230, Bangladesh</div>
                </div>
            </div>
            
            <div class="column col-md-4 col-sm-6 col-xs-12">
                <div class="info-box wow zoomInStable" data-wow-delay="500ms" data-wow-duration="1500ms">
                    <!--icon-box-->
                    <div class="icon-box">
                        <span class="flaticon-mail-3"></span>
                    </div>
                    
                    <h3>Mail Us</h3>
                    <div class="text">support@crosslink.com<br>info@crosslink.com</div>
                </div>
            </div>
            
            <div class="column col-md-4 col-sm-6 col-xs-12">
                <div class="info-box wow zoomInStable" data-wow-delay="1000ms" data-wow-duration="1500ms">
                    <!--icon-box-->
                    <div class="icon-box">
                        <span class="flaticon-technology"></span>
                    </div>
                    
                    <h3>Call Us</h3>
                    <div class="text">(+01) 22-333-4444-000<br>(+01) 33-444-5555-001</div>
                </div>
            </div>
        </div>
    </div>
</section>


<!--contact-section-->
<section class="contact-form-section">
    <div class="auto-container">
        <div class="sec-title-eight padd-bott-10">
            <h2>Keep in Touch with us</h2>
        </div>
            
        <!-- Contact Form -->
        <div class="default-form contact-form">
            <form class="wpcf7" id="ajaxmsg">
                @csrf
                <div class="row clearfix">
                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="txtName" id="txtName" value="" placeholder="Name *">
                    </div>

                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                        <input type="email" name="txtEmail" id="txtEmail" value="" placeholder="Email *">
                    </div>

                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                        <input type="text" name="txtSubject" id="txtSubject" value="" placeholder="Subject *">
                    </div>

                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                        <textarea name="txtMessage" id="txtMessage" placeholder="Message *"></textarea>
                    </div>
                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                        <button id="snd_msg" class="theme-btn btn-style-three">Send Message</button>
                    </div>
                </div>
            </form>
        </div>
        <!--End Contact Form -->    
    </div>
</section>

<!--Map Section-->
<section class="map-section">
    <div class="map-outer">
        <div class="no-padding">
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3648.4034730697995!2d90.39332511637642!3d23.875307447688005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c539b2e97ced%3A0x9c18c0c64bae9ec4!2sCross-Link%20Engineering%20Ltd!5e0!3m2!1sen!2sbd!4v1663753946739!5m2!1sen!2sbd" width="1340" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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