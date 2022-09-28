@extends('layout.frontend.master')
@section('main_content')
<style>
 .tabs-section{
    position: relative;
    padding: 40px 0px 70px 0px;
 }   

 .default-section{
    position: relative;
    padding: 40px 0px 70px 0px;
 } 
</style>

<!--Main Slider-->
<section class="main-slider">
    <div class="tp-banner-container">
        <div class="tp-banner">
            <ul>  
                <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="{{url('frontend/images/main-slider/1.jpg')}}"  data-saveperformance="off"  data-title="Awesome Title Here">
                    <img src="{{url('frontend/images/main-slider/1.jpg')}}"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat"> 
                    
                    <!--Overlay-->
                    <div class="overlay-style-one"></div>
                    
                    <div class="tp-caption sfl sfb tp-resizeme"
                    data-x="left" data-hoffset="15"
                    data-y="center" data-voffset="-110"
                    data-speed="1500"
                    data-start="0"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><div class="border-title">CrossLink Industrial Solutions</div></div>
                    
                    <div class="tp-caption sfl sfb tp-resizeme"
                    data-x="left" data-hoffset="15"
                    data-y="center" data-voffset="10"
                    data-speed="1500"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><h2>Industry is the art of directing the<br>great source of Power</h2></div>
                    
                    <div class="tp-caption sfr sfb tp-resizeme"
                    data-x="left" data-hoffset="15"
                    data-y="center" data-voffset="125"
                    data-speed="1500"
                    data-start="1000"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><a href="{{url('/contact-us')}}" class="theme-btn btn-style-two">CONTACT US</a></div>
                    
                    
                </li>
                    
                <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="{{url('frontend/images/main-slider/2.jpg')}}"  data-saveperformance="off"  data-title="Awesome Title Here">
                    <img src="{{url('frontend/images/main-slider/2.jpg')}}"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                    
                    <!--Overlay Style Two-->
                    <div class="overlay-style-two"></div>
                    
                    <div class="tp-caption sfl sfb tp-resizeme"
                    data-x="right" data-hoffset="-15"
                    data-y="center" data-voffset="-80"
                    data-speed="1500"
                    data-start="0"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><div class="subtitle-text">Welcome to CrossLink</div></div>
                    
                    <div class="tp-caption text-right sft sfb tp-resizeme"
                    data-x="right" data-hoffset="-15"
                    data-y="center" data-voffset="0"
                    data-speed="1500"
                    data-start="0"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><h2>Industry standards begins with imitation<br>but ends in Innovation</h2></div>
                    
                    <div class="tp-caption sfr sfb tp-resizeme"
                    data-x="right" data-hoffset="-15"
                    data-y="center" data-voffset="100"
                    data-speed="1500"
                    data-start="1000"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><a href="{{url('/contact-us')}}" class="theme-btn btn-style-one">contact us</a></div>
                    
                </li>
                    
                <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="{{url('frontend/images/main-slider/3.jpg')}}"  data-saveperformance="off"  data-title="Awesome Title Here">
                    <img src="{{url('frontend/images/main-slider/3.jpg')}}"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                    
                    <!--Overlay Style Three-->
                    <div class="overlay-style-three"></div>
                    
                    <div class="tp-caption sfl sfb tp-resizeme"
                    data-x="center" data-hoffset="0"
                    data-y="center" data-voffset="-100"
                    data-speed="1500"
                    data-start="0"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><div class="subtitle-text">We are Automation Industry</div></div>
                    
                    <div class="tp-caption text-center sft sfb tp-resizeme"
                    data-x="center" data-hoffset="0"
                    data-y="center" data-voffset="-20"
                    data-speed="1500"
                    data-start="0"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><h2>We are the Top Industrial Automation Service providing<br> the highest quality products</h2></div>
                    
                    <div class="tp-caption sfr sfb tp-resizeme"
                    data-x="center" data-hoffset="0"
                    data-y="center" data-voffset="90"
                    data-speed="1500"
                    data-start="1000"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><a href="{{url('/contact-us')}}" class="theme-btn btn-style-one">contact us</a></div>  
                </li>        
            </ul>
            <div class="tp-bannertimer"></div>
        </div>
    </div>
</section>
    

<!--service-style-one-->
<section class="service-style-one">
    <div class="auto-container">
        <div class="row clearfix">
            <!--left-column-->
            <div class="column left-column col-md-4 col-sm-12">
                <!--box-column-->
                <div class="box-column wow slideInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <h2>What We Can Offer</h2>
                    <div class="text">The year is and launches the last of americas deep space probes and we will do it our way yes our way make all our dreams.</div>
                    <a class="more" href="{{url('/services')}}">VIEW MORE <span class="fa fa-long-arrow-right"></span></a>
                </div>
            </div>
            
            <div class="col-md-8 col-sm-12">
                <div class="row clearfix">
                    @foreach ($offer as $val)
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
    

<!--call-to-action-->
<section class="call-to-action" style="background-image:url('frontend/images/background/call-toaction-one-bg.png');">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-md-8 col-sm-8 col-xs-12">
                <h3>“ Innovation takes Practice for the Superior Level of Excellence ”</h3>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12 text-right">
                <a class="quote-btn btn-style-three theme-btn" href="{{url('/contact-us')}}">Get a quote</a>
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
            <div class="text">The year is and launches the last of americas deep space probes and we dreams.</div>
        </div>
        <div class="row clearfix">
            
            <!--Service block two-->
            <div class="service-block-two col-md-4 col-sm-6 col-xs-12">
                <div class="inner-box wow fadeIn" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="image-box">
                        <figure class="image"><a href="services-details.html"><img src="{{url('frontend/images/resource/service-image-1.jpg')}}" alt=""></a></figure>
                    </div>
                    <div class="lower-content">
                        <div class="outer-link">
                            <a href="services-details.html" class="theme-btn service-title"><span class="flaticon-transport"></span> Agricultural processing</a>
                        </div>
                        <div class="text">The way we all became the Brady Bunch and you know where you were then be to end.</div>
                        <div class="link-box"><a href="services-details.html" class="theme-btn normal-link">VIEW MORE <span class="fa fa-long-arrow-right"></span></a></div>
                    </div>
                </div>
            </div>
            
            <div class="service-block-two col-md-4 col-sm-6 col-xs-12">
                <div class="inner-box wow fadeIn" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="image-box">
                        <figure class="image"><a href="services-details.html"><img src="{{url('frontend/images/resource/service-image-2.jpg')}}" alt=""></a></figure>
                    </div>
                    <div class="lower-content">
                        <div class="outer-link">
                            <a href="services-details.html" class="theme-btn service-title"><span class="flaticon-database"></span> Chemical Research</a>
                        </div>
                        <div class="text">The way we all became the Brady Bunch and you know where you were then be to end.</div>
                        <div class="link-box"><a href="services-details.html" class="theme-btn normal-link">VIEW MORE <span class="fa fa-long-arrow-right"></span></a></div>
                    </div>
                </div>
            </div>
            
            <div class="service-block-two col-md-4 col-sm-6 col-xs-12">
                <div class="inner-box wow fadeIn" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="image-box">
                        <figure class="image"><a href="services-details.html"><img src="{{url('frontend/images/resource/service-image-3.jpg')}}" alt=""></a></figure>
                    </div>
                    <div class="lower-content">
                        <div class="outer-link">
                            <a href="services-details.html" class="theme-btn service-title"><span class="fa  fa-support"></span> Metal Engineering</a>
                        </div>
                        <div class="text">The way we all became the Brady Bunch and you know where you were then be to end.</div>
                        <div class="link-box"><a href="services-details.html" class="theme-btn normal-link">VIEW MORE <span class="fa fa-long-arrow-right"></span></a></div>
                    </div>
                </div>
            </div>
            
            <div class="service-block-two col-md-4 col-sm-6 col-xs-12">
                <div class="inner-box wow fadeIn" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="image-box">
                        <figure class="image"><a href="services-details.html"><img src="{{url('frontend/images/resource/service-image-4.jpg')}}" alt=""></a></figure>
                    </div>
                    <div class="lower-content">
                        <div class="outer-link">
                            <a href="services-details.html" class="theme-btn service-title"><span class="flaticon-people"></span> Mechanical Process</a>
                        </div>
                        <div class="text">The way we all became the Brady Bunch and you know where you were then be to end.</div>
                        <div class="link-box"><a href="services-details.html" class="theme-btn normal-link">VIEW MORE <span class="fa fa-long-arrow-right"></span></a></div>
                    </div>
                </div>
            </div>
            
            <div class="service-block-two col-md-4 col-sm-6 col-xs-12">
                <div class="inner-box wow fadeIn" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="image-box">
                        <figure class="image"><a href="services-details.html"><img src="{{url('frontend/images/resource/service-image-5.jpg')}}" alt=""></a></figure>
                    </div>
                    <div class="lower-content">
                        <div class="outer-link">
                            <a href="services-details.html" class="theme-btn service-title"><span class="flaticon-pumpjack-1"></span> Petroleum & Gas</a>
                        </div>
                        <div class="text">The way we all became the Brady Bunch and you know where you were then be to end.</div>
                        <div class="link-box"><a href="services-details.html" class="theme-btn normal-link">VIEW MORE <span class="fa fa-long-arrow-right"></span></a></div>
                    </div>
                </div>
            </div>
            
            <div class="service-block-two col-md-4 col-sm-6 col-xs-12">
                <div class="inner-box wow fadeIn" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="image-box">
                        <figure class="image"><a href="services-details.html"><img src="{{url('frontend/images/resource/service-image-6.jpg')}}" alt=""></a></figure>
                    </div>
                    <div class="lower-content">
                        <div class="outer-link">
                            <a href="services-details.html" class="theme-btn service-title"><span class="flaticon-technology-2"></span> Power & Energy</a>
                        </div>
                        <div class="text">The way we all became the Brady Bunch and you know where you were then be to end.</div>
                        <div class="link-box"><a href="services-details.html" class="theme-btn normal-link">VIEW MORE <span class="fa fa-long-arrow-right"></span></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!--Default Section-->
<section class="default-section">
    <div class="auto-container">
        <div class="row clearfix">  
            <!--Text Column-->
            <div class="column text-column col-md-6 col-sm-12 col-xs-12">
                <div class="inner-box">
                    <div class="sec-title-one">
                        <h2>About us</h2>
                    </div>
                    
                    <div class="text">C rossLink Automation & Control (P) Ltd. is a professionally managed company that is carrying out business primarily in to field of Electrical systems and Industrial Automation systems.</div>
                    <!--featured-gallery-->
                    <div class="featured-gallery">
                        <div class="row clearfix">
                            <!--featured-image-box-->
                            <div class="featured-image-box col-md-12 col-sm-12 col-xs-12">
                                <figure class="image">
                                    <a class="lightbox-image" href="{{url('frontend/images/resource/featured-image-1.webp')}}" title="Image Caption Here"><img src="{{url('frontend/images/resource/featured-image-1.webp')}}" alt="" /></a>
                                </figure>
                            </div>
                            
                            <!--featured-image-box-->
                            <div class="featured-image-box col-md-6 col-sm-6 col-xs-12">
                                <figure class="image">
                                    <a class="lightbox-image" href="{{url('frontend/images/resource/featured-image-2.webp')}}" title="Image Caption Here"><img src="{{url('frontend/images/resource/featured-image-2.webp')}}" alt="" /></a>
                                </figure>
                            </div>
                            
                            <!--featured-image-box-->
                            <div class="featured-image-box col-md-6 col-sm-6 col-xs-12">
                                <figure class="image">
                                    <a class="lightbox-image" href="{{url('frontend/images/resource/featured-image-3.webp')}}" title="Image Caption Here"><img src="{{url('frontend/images/resource/featured-image-3.webp')}}" alt="" /></a>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!--Accordions Column-->
            <div class="column col-md-6 col-sm-12 col-xs-12">
                <div class="inner-box">
                    <div class="sec-title-one">
                        <h2>Frequently Asked Questions</h2>
                    </div>
                    <!--Accordion Box-->
                    <ul class="accordion-box">
                        <!--Block-->
                        @foreach($frequentlyasked as $key=>$val)
                        <li class="accordion block wow fadeInUp animated" data-wow-delay="{{$key==0?0:$key*100}}ms" data-wow-duration="1500ms">
                            <div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>{{$val->question}}</div>
                            <div class="acc-content {{$key==0 ? 'current':''}}">
                                <div class="content clearfix">
                                    <figure class="image"><img src="{{ asset('img/' . $val->img) }}" alt=""></figure>
                                    <p class="text" style="text-align: justify;">{{$val->answer}}</p>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul><!--End Accordion Box-->
                </div>
            </div>
        </div>
    </div>
</section>



<!--tabs-section-->
<section class="tabs-section">
    <div class="auto-container">
        <div class="sec-title-one">
            <h2>OUR MISSION & VISSION</h2>
        </div>
        <div class="row clearfix">
            <div class="column content-column col-lg-7 col-md-12 col-sm-12">
                <!--Tabs Box-->
                <div class="tabs-box tabs-style-one">
                    <!--Tab Buttons-->
                    <ul class="tab-buttons clearfix">
                        <li data-tab="#tab-one" class="tab-btn active-btn">What we do</li>
                        <li data-tab="#tab-two" class="tab-btn">Our Mission</li>
                        <li data-tab="#tab-three" class="tab-btn">Our Vision</li>
                    </ul>
                        
                    <!--Tabs Content-->
                    <div class="tabs-content">
                        <!--Tab / Active Tab-->
                        <div class="tab active-tab" id="tab-one">
                            <div class="text-content">
                                <div class="text" style="text-align: justify;">CrossLink Automation & Control (Pvt.) Ltd. is committed to deliver Automation
                                     Engineering Solution and Services of reliable Quality, required by our customers.It is achieved by 
                                     continuous improvements in systems, processes, products, services, involvement of people and training 
                                     of people.We believe Quality people create Quality products which in turn create Quality institution of value to society.</div>
                                <div class="row clearfix">
                                    <div class="col-md-6 col-sm-6">
                                        <ul class="list-style-one">
                                            <li><span class="fa fa-check-square-o"></span> Quality Policy Statement</li>
                                            <li><span class="fa fa-check-square-o"></span> Quality Assurance</li>
                                            <li><span class="fa fa-check-square-o"></span> Vision Statement</li>
                                        </ul>
                                    </div>
                                    
                                    <div class="col-md-6 col-sm-6">
                                        <ul class="list-style-one">
                                            <li><span class="fa fa-check-square-o"></span> Mission Statement</li>
                                            <li><span class="fa fa-check-square-o"></span> Motto Statement</li>
                                            <li><span class="fa fa-check-square-o"></span> Our Core Values</li>
                                        </ul>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        
                        <!--Tab-->
                        <div class="tab" id="tab-two">
                            <div class="text-content">
                                <div class="text" style="text-align: justify;">To build value, deliver performance and demonstrate leadership in the world of automation, By assuming responsibility and by inculcating our core values in day to day operations for the end goal of satisfied clients.</div>
                                <div class="row clearfix">
                                    <div class="col-md-12 col-sm-12">
                                        <ul class="list-style-one">
                                        @foreach($mission as $val)
                                            <li><span class="fa fa-check-square-o"></span> {{$val->mission}}</li>
                                        @endforeach
                                        </ul>
                                    </div>  
                                </div>
                            </div>
                        </div>
                        
                        <!--Tab-->
                        <div class="tab" id="tab-three">
                            <div class="text-content">
                                <div class="text" style="text-align: justify;">To become the world’s premier automation products, services and Project management organization by achieving extraordinary results for our customers, building satisfying careers for our employees and earning a fair return on the value we deliver.</div>
                                <div class="row clearfix">
                                    <div class="col-md-12 col-sm-12">
                                        <ul class="list-style-one">
                                        @foreach($vission as $val)
                                            <li><span class="fa fa-check-square-o"></span> {{$val->vission}}</li>
                                        @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column col-lg-5  col-md-6 col-sm-8 xs-12">
                <div class="image-box">
                    <img src="{{url('frontend/images/resource/tab-image.webp')}}" alt="" />
                </div>
            </div>
        </div>
    </div>
</section>



<!--testimonial-section-->
<section class="testimonial-section">
    <div class="auto-container">
        <div class="row clearfix">
            <!--testimonial-column-->
            <div class="testimonial-column col-md-8 col-sm-12 col-xs-12">
                <div class="sec-title-one">
                    <h2>What People Says</h2>
                </div>
                
                <!--Carousel Outer-->
                <div class="carousel-outer">
                    <div class="single-item-carousel">
                        @foreach($testimonial as $val)
                        <!--testimonial box-->
                        <div class="testimonial-box">
                            <div class="text" style="text-align: justify;"><span class="fa fa-quote-left"></span>
                                {!! $val->description !!}
                                <span class="fa fa-quote-right"></span>
                            </div>
                            <!--author-info-->
                            <div class="author-info">
                                <figure class="image">
                                    <img src="{{url('img/'.$val->img)}}" alt="" />
                                </figure>
                                <h3>{{$val->name}}</h3>
                                <div class="designation">{{$val->designation}}</div>  
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            
            <div class="fact-counter-column col-md-4 col-sm-12 col-xs-12">
                <div class="fact-counter">
                    <div class="clearfix">
                        <!--Column-->
                        <div class="column counter-column wow fadeIn" data-wow-duration="0ms">
                            <div class="inner">
                                <div class="count-outer">
                                    <span class="icon-box"><span class="fa fa-star-o"></span></span>
                                    <span class="count-text" data-speed="1000" data-stop="10">0</span>
                                </div>
                                <h4 class="counter-title">Years of Excellence</h4>
                            </div>
                        </div>
                        
                        <!--Column-->
                        <div class="column counter-column wow fadeIn" data-wow-duration="0ms">
                            <div class="inner">
                                <div class="count-outer">
                                    <span class="icon-box"><span class="flaticon-museum"></span></span>
                                    <span class="count-text" data-speed="1000" data-stop="15">0</span>
                                </div>
                                <h4 class="counter-title">Global Branches</h4>
                            </div>
                        </div>
                        
                        <!--Column-->
                        <div class="column counter-column wow fadeIn" data-wow-duration="0ms">
                            <div class="inner">
                                <div class="count-outer">
                                    <span class="icon-box"><span class="flaticon-medal"></span></span>
                                    <span class="count-text" data-speed="1000" data-stop="10">0</span>
                                </div>
                                <h4 class="counter-title">Promoted Awards</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!--Newsletter Style One-->
<div class="newsletter-style-one" style="background-image:url('frontend/images/background/newsletter-bg.png');">
    <div class="auto-container">
        <div class="sec-title-two">
            <h2>Signup for our Newsletter</h2>
        </div>
    
        <div class="newsletter-form">
            <form class="wpcf7" id="ajaxnewsletter">
                @csrf
                <div class="row clearfix">
                
                    <div class="col-lg-10 col-md-9 col-sm-12 col-xs-12">
                        <div class="row clearfix">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <input type="text" name="txtName" id="txtName" value="" placeholder="Your Name" required>
                                </div>
                            </div>
                            
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <input type="email" name="txtEmail" id="txtEmail" value="" placeholder="Your Email" required>
                                </div>
                            </div>
                        </div>
                    </div>
                        
                    <div class="col-lg-2 col-md-3 col-sm-12 col-xs-12">
                        <div class="form-group button-group">
                            <button id="snd_newsletter" class="btn-style-three theme-btn">SUBSCRIBE</button>
                        </div>
                    </div>
                    
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
       
    $("#snd_newsletter").click(function(){

      $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });

      $('#snd_newsletter').html('Please Wait...');
      $("#snd_newsletter"). attr("disabled", true);

      $.ajax({
        url: "newsletter_store",       
        type: "POST",
        data: $('#ajaxnewsletter').serialize(),
        success: function( response ) {
          $('#snd_newsletter').html('Submit');
          $("#snd_newsletter"). attr("disabled", false);
         
          $("#txtName").val('');
          $("#txtEmail").val('');
          alert('You are Successfully Signup in our Newsletter');
        }
       });
    });
    
</script>
@endsection
