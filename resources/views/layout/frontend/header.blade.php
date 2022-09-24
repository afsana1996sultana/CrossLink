<!-- Main Header-->
<header class="main-header header-style-one">
    <!-- Header Top -->
    <div class="header-top">
        <div class="auto-container clearfix">
            <!--Top Left-->
            <div class="top-left pull-left">
                <ul class="links-nav clearfix">
                    @foreach ($topbar as $val)
                    <li><span class="fa fa-check-square-o"></span> {{ $val->suplier }}</li>
                    <li><span class="fa fa-support"></span> {{ $val->certificate }}</li>
                    <li><span class="fa fa-bell-o"></span> {{ $val->service }}</li>
                    @endforeach
                </ul>
            </div>
             <!--Top Right-->
             <div class="top-right pull-right">
                <ul class="links-nav clearfix">
                    @foreach($sociallink as $val)
                        <li><a href="{{$val->slug}}"><span class="{{$val->icon}}"></span></a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <!-- Header Top End -->
    
    <!--Header-Upper-->
    <div class="header-upper">
        <div class="auto-container">
            <div class="clearfix">
                @foreach ($header as $val)
                <div class="pull-left logo-outer">
                    <div class="logo"><a href="{{url('/')}}"><img src="{{ asset('img/' . $val->logo) }}" alt="CrosLink" title="CrosLink"></a></div>
                </div>
                
                <div class="pull-right upper-right clearfix">
                    <!--Info Box-->
                    <div class="upper-column info-box">
                        <div class="icon-box"><span class="flaticon-location-pin"></span></div>
                        <ul>
                            <li><strong>{{ $val->time }}</strong></li>
                            <li>Friday : Closed</li>
                        </ul>
                    </div>
                    
                    <!--Info Box-->
                    <div class="upper-column info-box">
                        <div class="icon-box"><span class="flaticon-technology"></span></div>
                        <ul>
                            <li><strong>{{ $val->phone }}</strong></li>
                            <li>{{ $val->email }}</li>
                        </ul>
                    </div>
                </div> 
                @endforeach
            </div>
        </div>
    </div>
    
    <!--Header-Lower-->
    <div class="header-lower">
        <div class="auto-container">
            <div class="nav-outer clearfix">
                <!-- Main Menu -->
                <nav class="main-menu">
                    <div class="navbar-header">
                        <!-- Toggle Button -->    	
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>
                    </div>
                    
                    <div class="navbar-collapse collapse clearfix">
                        <ul class="navigation clearfix">
                            <li class="current"><a href="{{url('/home')}}">Home</a></li>
                            <li class="dropdown"><a href="{{url('/about-us')}}">About Us</a>
                                <ul>
                                    <li><a href="{{url('/our-team')}}">Our Team</a></li>
                                </ul>
                            </li>
                            @foreach ($menu as $val)
                            <?php
                            $Submenu = App\Models\Submenu::where('menu_id', $val->id)->get();
                            ?>
                            <li class="@if(sizeof($Submenu) >= 1) dropdown @endif">
                                <a href="{{ $val->slug }}">{{ $val->menu_name }}</a>
                                @if(sizeof($Submenu) >= 1)
                                    <ul>
                                        @foreach($Submenu as $subData)
                                            <?php
                                                $childmenu = App\Models\Childmenu::where('submenu_id', $subData->id)->get();
                                            ?>
                                                <li class="@if(sizeof($childmenu) >= 1) dropdown @endif">
                                                    <a href="{{url('product_category/'.$subData->slug)}}">{{$subData->submenu_name}}</a>
                                            @if(sizeof($childmenu) >= 1)
                                            <ul class="from-left">
                                                @foreach($childmenu as $chData)
                                                <li><a href="{{url('product_sub_category/'.$chData->slug)}}">{{$chData->childmenu_name}}</a></li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        @endif
                                        @endforeach
                                    </ul>
                                @endif
                            </li>
                            @endforeach
                            <li class="dropdown"><a href="{{url('/projects')}}">Projects</a>
                                <ul>
                                    <li><a href="{{url('/automation-projects-work')}}">Automation Projects Work</a></li>
                                    <li><a href="{{url('/projects-done')}}">Projects Done</a></li>
                                    <li><a href="{{url('/our-customers')}}">Our Customers</a></li>
                                </ul>
                            </li>
                            <li><a href="{{url('/contact-us')}}">Contact Us</a></li>
                        </ul>
                    </div>
                </nav>
                <!-- Main Menu End-->
                <div class="btn-outer"><a href="{{url('/contact-us')}}" class="theme-btn quote-btn"><span class="fa fa-mail-reply-all"></span> Get a Quote</a></div>
            </div> 
        </div>
    </div>
    
    <!--Sticky Header-->
    <div class="sticky-header">
        <div class="auto-container clearfix">
            <!--Logo-->
            <div class="logo pull-left">
                <a href="{{url('/')}}" class="img-responsive"><img src="{{url('frontend/images/logo-small1.png')}}" alt="CrosLink" title="CrosLink"></a>
            </div>
            
            <!--Right Col-->
            <div class="right-col pull-right">
                <!-- Main Menu -->
                <nav class="main-menu">
                    <div class="navbar-header">
                        <!-- Toggle Button -->    	
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>
                    </div>
                    
                    <div class="navbar-collapse collapse clearfix">
                        <ul class="navigation clearfix">
                            <li class="current"><a href="{{url('/home')}}">Home</a></li>
                            <li class="dropdown"><a href="{{url('/about-us')}}">About Us</a>
                                <ul>
                                    <li><a href="{{url('/our-team')}}">Our Team</a></li>
                                </ul>
                            </li>
                            @foreach ($menu as $val)
                            <?php
                            $Submenu = App\Models\Submenu::where('menu_id', $val->id)->get();
                            ?>
                            <li class="@if(sizeof($Submenu) >= 1) dropdown @endif">
                                <a href="{{ $val->slug }}">{{ $val->menu_name }}</a>
                                @if(sizeof($Submenu) >= 1)
                                    <ul>
                                        @foreach($Submenu as $subData)
                                            <?php
                                                $childmenu = App\Models\Childmenu::where('submenu_id', $subData->id)->get();
                                            ?>
                                                <li class="@if(sizeof($childmenu) >= 1) dropdown @endif">
                                                    <a href="{{url('product_category/'.$subData->slug)}}">{{$subData->submenu_name}}</a>
                                            @if(sizeof($childmenu) >= 1)
                                            <ul class="from-left">
                                                @foreach($childmenu as $chData)
                                                <li><a href="{{url('product_sub_category/'.$chData->slug)}}">{{$chData->childmenu_name}}</a></li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        @endif
                                        @endforeach
                                    </ul>
                                @endif
                            </li>
                            @endforeach
                            <li class="dropdown"><a href="{{url('/projects')}}">Projects</a>
                                <ul>
                                    <li><a href="{{url('/automation-projects-work')}}">Automation Projects Work</a></li>
                                    <li><a href="{{url('/projects-done')}}">Projects Done</a></li>
                                    <li><a href="{{url('/our-customers')}}">Our Customers</a></li>
                                </ul>
                            </li>
                            <li><a href="{{url('/contact-us')}}">Contact Us</a></li>
                        </ul>
                    </div>
                </nav><!-- Main Menu End-->
            </div>
        </div>
    </div><!--End Sticky Header-->
</header>
<!--End Main Header -->