<!-- ::::::::::::::::::::::::::: Start: Preloader section ::::::::::::::::::::::::::: -->
    <div id="preloader"></div>
    <!-- ::::::::::::::::::::::::::: End: Preloader section ::::::::::::::::::::::::::: -->

    <!-- Start: Header Section 
==================================================-->
    <div class="header_top">
        <!-- Logo -->
        <div class="container">
            <div class="row">
                <div class="header_logo">
                    <a href="index.html"><img src="images/logo.png" alt="">
                    </a>
                </div>
                <div class="header_top_location">
                    <div class="top_location">
                        <i class="icon_clock_alt"></i>
                        <p>营业时间</p>
                        <span> 8:00AM - 6:00PM</span>
                    </div>
                    <div class="top_location">
                        <i class="icon_phone"></i>
                        <p>联系我们</p>
                        <span>014 7422 866</span>
                    </div>                  
                </div>

                <!-- End: social-nav -->
            </div>
        </div>
    </div>
    <!-- End: Header Info -->

    <!-- Start: header navigation -->
    <div class="navigation">
        <div class="container">
            <div class="row">
                <div id="navigation">
                    <ul>
                        <li><a class="active" href="{{route('home')}}">首页</a>
                        </li>
                        <li><a href="{{route('about')}}">关于我们</a>
                        </li>
                        <li class="has-sub"><a href="{{route('home')}}" title="page">公司简介</a>
                            <ul>
                                <li><a href="services.html" title="Gallery">公司详情</a>
                                </li>
                                <li><a href="{{route('member')}}" title="Gallery">公司人员</a>
                                </li>
                                <li><a href="{{route('local')}}" title="Services">办公场所</a>
                                </li>
                                <li><a href="{{route('culture')}}" title="Services">企业文化</a>

                            </ul>
                        </li>
                        <li><a href="{{route('branch')}}" title="blog">分公司简介</a>
                        </li>
                    </ul>
                </div>

            </div>
            <!--/ row -->
        </div>
        <!--/ container -->
    </div>
    <!-- End: header navigation -->