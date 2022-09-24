@extends('layout.frontend.master')
@section('main_content')
<style>
 .industry-section{
    position: relative;
    padding: 40px 0px 70px 0px;
 }   
</style>

<!--Page Title-->
<section class="page-title" style="background-image:url(images/background/featured-2-bg.jpg);">
    <div class="auto-container">
        <h1>About</h1>
    </div>
    
    <!--page-info-->
    <div class="page-info">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li class="active">About</li>
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
            <div class="column left-column col-md-6 col-sm-12 col-xs-12" style="padding-top: 60px;">
                <!--video-box-->
                <div class="box-column wow slideInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <figure class="image">
                        <a class="lightbox-image" href="" title="Image Caption Here">
                        <img src="{{url('frontend/images/resource/head_ofc.jpg')}}" alt="" /></a>
                    </figure>
                </div>
            </div>
            <div class="column col-md-6 col-sm-12 col-xs-12">
                <!--content-column-->
                <div class="content-column">
                    <div class="sec-title-one">
                        <h2>Company Overview</h2>
                        <h4 style="font-weight: bold;">TOTAL SOLUTION OF INDUSTRIAL AUTOMATION AND ELECTRICAL UNDER ONE ROOF</h4>
                    </div> 
                    <h4 style="color: red;">Precise Automation & Controls Pvt Ltd Vadodara</h4>
                    <div class="text" style="text-align: justify;">We are gold channel partner of ABB who is the world leader in the field 
                        of Industrial Automation. We provide wide array of Engineering Solutions and Services. 
                        Our business primarily in to field of electrical systems and industrial automation. 
                        We are system integrator of ABB for AC/DC & Servo drives, motors, PLC and SCADA, DCS, 
                        Switchgear and instrumentation. We are Level 3 Certified Drive division channel partner 
                        for control of automation products.We are manufacturer of all types of Electrical & 
                        automation control panels like MCC, PCC, PDB, ACDB, LDB, PMCC, IMCC, APFC, Furnace
                        Control, Chiller Control, Damper Control, Batch House, Drive Panels, PLC
                        panel, DCS panel, Draw out type intelligent panel, Synchronizing panel etc.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!--industry-->
<section class="industry-section">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="column col-md-6 col-sm-12 col-xs-12">
                <!--content-column-->
                <div class="content-column">
                    <div class="sec-title-one">
                        <h4 style="color: red;">OUR VALUES</h4>
                        <h2 style="font-weight: bold;">Our Mission & Our Motto</h2>
                    </div> 
                    <p style="font-size: 18px;">* To build value, performance and leadership into Electrical &
                        Automation world, responsibility, respect and determination are
                        key.</p>

                    <p style="font-size: 18px;">* Our motto is to shift our esteemed customer in a comfort zone by
                        giving excellent & timely services</p>
                </div>
            </div>

            <div class="column left-column col-md-6 col-sm-12 col-xs-12" style="padding-top: 60px;">
                <!--video-box-->
                <div class="box-column wow slideInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <figure class="image">
                        <a class="lightbox-image" href="" title="Image Caption Here">
                        <img src="{{url('frontend/images/resource/industry-generic-1.jpg')}}" alt="" /></a>
                    </figure>
                </div>
            </div>
        </div>
    </div>
</section>


 <!--services-style-three-->
 <section class="services-style-three pt-2">
    <div class="auto-container">
        <div class="sec-title-four">
            <h4 style="color: red;">WHAT WE DO</h4>
            <h2 style="font-weight: bold;">A Selection Of Industries We Serve</h2>
            <div style="font-size: 22px;">Precise Automation & Control was formerly known as Precise Process Control, it was established in year 1999.</div>
        </div>
        <div class="row clearfix">
        
            <div class="column col-md-3 col-sm-6 col-xs-12">
                <div class="service-block-five wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="icon-box"><span class="flaticon-atom"></span></div>
                        <h3>Molecular Research</h3>
                        <div class="text">The year is and launches the last of that americas deep space probes and we come true.</div>
                    </div>
                </div>
            </div>
            
            <div class="column col-md-3 col-sm-6 col-xs-12">
                <div class="service-block-five wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="icon-box"><span class="flaticon-users"></span></div>
                        <h3>Dedicated Team</h3>
                        <div class="text">The year is and launches the last of that americas deep space probes and we come true.</div>
                    </div>
                </div>
            </div>
            
            <div class="column col-md-3 col-sm-6 col-xs-12">
                <div class="service-block-five wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="icon-box"><span class="flaticon-package-cube-box-for-delivery"></span></div>
                        <h3>Updated Standards</h3>
                        <div class="text">The year is and launches the last of that americas deep space probes and we come true.</div>
                    </div>
                </div>
            </div>
            
            <div class="column col-md-3 col-sm-6 col-xs-12">
                <div class="service-block-five wow fadeInUp" data-wow-delay="900ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="icon-box"><span class="flaticon-anchor"></span></div>
                        <h3>Quality Assurance</h3>
                        <div class="text">The year is and launches the last of that americas deep space probes and we come true.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!--call-to-action-->
<section class="call-to-action" style="background-image:url('frontend/images/background/call-toaction-one-bg.png');">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-md-8 col-sm-8 col-xs-12">
                <h3>Get Your Next Project Done!</h3>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12 text-right">
                <a class="quote-btn btn-style-three theme-btn" href="{{url('/about-us')}}">KNOW MORE</a>
            </div>
        </div>
    </div>
</section>

<!--industry-->
<section class="industry-section">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="column left-column col-md-6 col-sm-12 col-xs-12">
                <div class="sec-title-one">
                    <h2 style="font-weight: bold;">The Highest Quality</h2>
                    <h4 style="color: red;">We are supplying Electrical & Automation Products & Systems to the Industries.</h4>
                    <div style="font-size: 20px;">Precise Automation & Control was formerly known as Precise Process Control, it was established in year 1999.</div>
                </div> 
            </div>
            <div class="column col-md-6 col-sm-12 col-xs-12">
                <!--content-column-->
                <div class="content-column">
                    <div class="text" style="text-align: justify;">Precise Automation & Control (P) Ltd. is a professionally managed company that
                    is carrying out business primarily in to field of Electrical systems and Industrial Automation systems.
                    We are manufacturer of all types of Electrical & automation control panels like MCC, PCC, PDB, ACDB, LDB,
                    PMCC, IMCC, APFC, Furnace Control, Chiller Control, Damper Control, Batch House, Drive Panels, PLC panel, 
                    DCS panel, Draw out type intelligent panel, Synchronizing panel etc.We are system integrator of ABB for 
                    AC/DC & Servo Drives, Motors, PLC and SCADA , DCS, Switchgear and Instrumentation.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection