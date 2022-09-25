@extends('layout.frontend.master')
@section('main_content')

<!--Page Title-->
<section class="page-title" style="background-image:url('frontend/images/background/featured-2-bg.jpg');">
    <div class="auto-container">
        <h1>PLC</h1>
    </div>
    
    <!--page-info-->
    <div class="page-info">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li class="active">PLC</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


<!--Sidebar Page-->
<div class="sidebar-page-container">
    <div class="auto-container">
        <div class="row clearfix">
            <!--Content Side-->
            <div class="content-side col-lg-9 col-md-8 col-sm-12 col-xs-12">
                <section class="content-section services-content">
                    <figure class="bigger-image"><img src="{{url('frontend/images/resource/service-detail-1.jpg')}}" alt=""></figure>
                    <div class="sec-title-one"><h2>Chemical Research</h2></div>

                    <div class="text-block">
                        <p>The way we all became the Brady come and listen to a story about a man barely kept his family never heard to the word able this time there is no stopping us the Love Boat soon will be making another run the Love Boat in a promises something for a everyone be from me and the card attached would say federal impossible this time there is no stopping us the Love Boat to soon will be making another run the Love Boat promises became the Brady come and listen to a story about a man barely kept his family never heard to the word able this time there is no stopping us the Love Boat soon will be making another run the Love Boat in a promises something for a everyone be from me and the card attached would say federal impossible this time there is no stopping us the Love Boat to soon will be making another run the Love Boat promises.</p>
                        <p>The Brady come and listen to a story about a man barely kept his family never heard to the word able this time there is no stopping us the Love Boat soon will be making another run the Love Boat in a promises something for a everyone be from me and the card attached would say federal impossible this time there is no stopping us the Love Boat to soon will be making another run the Love Boat promises became the Brady come and listen to a story.</p>
                        <p>The Love Boat promises something for everyone be from me and the card attached would say federal impossible to this bee time there is no stopping us the Love Boat soon will be the Love Boat in a promises something for a everyone be from me and the card attached would say federal impossible making another run.</p>
                    </div>

                    <div class="row clearfix">
                        <div class="col-md-7 col-sm-7 col-xs-12 clearfix">
                            <div class="featured-gallery-two clearfix">
                                <!--featured-image-box-->
                                <div class="featured-image-box col-md-12 col-sm-12 col-xs-12">
                                    <figure class="image">
                                        <a class="lightbox-image" href="{{url('frontend/images/resource/featured-image-4.jpg')}}" title="Image Caption Here"><img src="{{url('frontend/images/resource/featured-image-4.jpg')}}" alt=""></a>
                                    </figure>
                                </div>
                                
                                <!--featured-image-box-->
                                <div class="featured-image-box col-md-6 col-sm-6 col-xs-12">
                                    <figure class="image">
                                        <a class="lightbox-image" href="{{url('frontend/images/resource/featured-image-5.jpg')}}" title="Image Caption Here"><img src="{{url('frontend/images/resource/featured-image-5.jpg')}}" alt=""></a>
                                    </figure>
                                </div>
                                
                                <!--featured-image-box-->
                                <div class="featured-image-box col-md-6 col-sm-6 col-xs-12">
                                    <figure class="image">
                                        <a class="lightbox-image" href="{{url('frontend/images/resource/featured-image-6.jpg')}}" title="Image Caption Here"><img src="{{url('frontend/images/resource/featured-image-6.jpg')}}" alt=""></a>
                                    </figure>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-5 col-sm-5 col-xs-12">
                            <div class="sec-title-one"><h2>Strategies of Theory</h2></div>
                            <div class="text">The way we all became the Brady come and listen to a story about a man barely kept his family never heard to the word able this time there is no stopng us the Love Boat soon will be making another run the Love Boat in a promises onething for a eryone be from me and the card attached.</div>
                            <ul class="list-style-one">
                                <li><span class="fa fa-check-square-o"></span> Promises something for everyone</li>
                                <li><span class="fa fa-check-square-o"></span> Feels so right it cant be wrong</li>
                                <li><span class="fa fa-check-square-o"></span> Fellow and they knew it</li>
                                <li><span class="fa fa-check-square-o"></span> Wondered whatever became of me</li>
                            </ul>
                        </div>
                    </div>
                </section>
            </div>
            <!--Content Side-->
            <!--Sidebar-->
            <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                <aside class="sidebar about-sidebar">
                    <!-- Tabbed Links -->
                    <div class="sidebar-widget tabbed-links">
                        <ul class="tabbed-nav">
                            <li><a href="services-details.html">Agriculture Processing</a></li>
                            <li class="current"><a href="services-details.html">Chemical Research</a></li>
                            <li><a href="services-details.html">Mechanical Engineering</a></li>
                            <li><a href="services-details.html">Metal Engineering</a></li>
                            <li><a href="services-details.html">Petroleum & Gas</a></li>
                            <li><a href="services-details.html">Power & Energy</a></li>
                        </ul>
                    </div>

                    <!--quote-widget-->
                    <div class="call-to-action-four" style="background-image:url('frontend/images/resource/quote-widget.jpg');">
                        <div class="title">Any Questions related Solutions? Call us</div>
                        
                        <div class="number"><span class="flaticon-phone-receiver"></span> +001-345-6789-00</div>
                        <a class="theme-btn btn-style-one" href="contact.html">GET QUOTES</a>
                    </div>
                </aside>
            </div>
            <!--Sidebar-->
        </div>
    </div>
</div>
@endsection