<!--Main Footer-->
<footer class="main-footer">
    <!--Footer Upper-->        
    <div class="footer-upper">
        <div class="auto-container">
            <div class="row clearfix"> 
                <!--Two 4th column-->
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="row clearfix">
                        <div class="col-lg-7 col-sm-6 col-xs-12 column">
                            <div class="footer-widget logo-widget">
                            @foreach ($footer as $val)
                                <div class="logo"><a href="{{url('/')}}"><img src="{{ asset('img/' . $val->f_logo) }}" class="img-responsive" alt=""></a></div>
                                <div class="text">{{ $val->f_description }}</div>
                                
                                <ul class="contact-info">
                                    <li><span class="icon flaticon-pin"></span> {{ $val->f_address }}</li>
                                    <li><span class="icon flaticon-technology"></span> {{ $val->f_phone }}</li>
                                    <li><span class="icon flaticon-mail-2"></span> {{ $val->f_email }}</li>
                                </ul>
                            @endforeach
                            </div>
                        </div>
                        
                        <!--Footer Column-->
                        <div class="col-lg-5 col-sm-6 col-xs-12 column">
                            <div class="sec-title-three">
                                <h2>Usefull Links</h2>
                            </div>
                            <div class="footer-widget links-widget">
                                <ul>
                                @foreach ($usefulllink as $val)
                                    <li><a href="{{ $val->slug }}">{{ $val->name }}</a></li>
                                @endforeach
                                </ul>
    
                            </div>
                        </div>
                    </div>
                </div>
                <!--Two 4th column End-->
                
                <!--Two 4th column-->
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="row clearfix">
                        <!--Footer Column-->
                        <div class="col-lg-6 col-sm-6 col-xs-12 column">
                            <div class="footer-widget twitter-widget">
                                    <div class="sec-title-three">
                                        <h2>Twitter Feed</h2>
                                    </div>
                                <div class="widget-content">
                                    <div class="feed">
                                        <div class="text"><span class="icon fa fa-twitter"></span> @ <h4 class="author-title">Roffell</h4>this year is and launches the last of that deep : paragraph.co.in</div>
                                        <span class="month">about a month</span>
                                    </div>
                                    <div class="feed">
                                        <div class="text"><span class="icon fa fa-twitter"></span> @ <h4 class="author-title">Markel</h4>this year is and launches the last of that deep time to light the lights poster :  abstract.co.in</div>
                                        <span class="month">about 5 min ago</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!--Footer Column-->
                        <div class="col-md-6 col-sm-6 col-xs-12 column">
                            <div class="footer-widget gallery-widget">
                                <div class="sec-title-three">
                                    <h2>Flickr Photos</h2>
                                </div>
                                <div class="clearfix">
                                    <figure class="image"><a href="{{url('frontend/images/resource/footer-gallery-1.jpg')}}" class="lightbox-image" title="Caption Here"><img src="{{url('frontend/images/resource/footer-gallery-1.jpg')}}" alt=""></a></figure>
                                    <figure class="image"><a href="{{url('frontend/images/resource/footer-gallery-2.jpg')}}" class="lightbox-image" title="Caption Here"><img src="{{url('frontend/images/resource/footer-gallery-2.jpg')}}" alt=""></a></figure>
                                    <figure class="image"><a href="{{url('frontend/images/resource/footer-gallery-3.jpg')}}" class="lightbox-image" title="Caption Here"><img src="{{url('frontend/images/resource/footer-gallery-3.jpg')}}" alt=""></a></figure>
                                    <figure class="image"><a href="{{url('frontend/images/resource/footer-gallery-4.jpg')}}" class="lightbox-image" title="Caption Here"><img src="{{url('frontend/images/resource/footer-gallery-4.jpg')}}" alt=""></a></figure>
                                    <figure class="image"><a href="{{url('frontend/images/resource/footer-gallery-5.jpg')}}" class="lightbox-image" title="Caption Here"><img src="{{url('frontend/images/resource/footer-gallery-5.jpg')}}" alt=""></a></figure>
                                    <figure class="image"><a href="{{url('frontend/images/resource/footer-gallery-6.jpg')}}" class="lightbox-image" title="Caption Here"><img src="{{url('frontend/images/resource/footer-gallery-6.jpg')}}" alt=""></a></figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--Two 4th column End-->  
            </div>
        </div>
    </div>
    <!--Footer Bottom-->
    <div class="footer-bottom">
        <div class="auto-container">
            <div class="row clearfix">
                <!--Copyright-->
                @foreach ($footer as $val)
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="copyright">{{ $val->f_copyright }}</div>
                </div>
                @endforeach
                
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <ul class="footer-bottom-social">
                    @foreach ($sociallink as $val)
                        <li><a href="{{ $val->slug }}"><span class="{{ $val->icon }}"></span></a></li>
                    @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>