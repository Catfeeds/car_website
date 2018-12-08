@extends('layouts.app')
@section('content')
<style>
        .name{
            margin: -20px 0 0 0;
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 1;
            -webkit-box-orient: vertical;
        }
        .jieshao{
            margin: 10px 0;
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
        }
        .hei{
            min-height: 20rem;
        }
    </style>
 <!-- header -->
        <header id="page-top" class="blog-banner">
            <!-- Start: Header Content -->
            <div class="container" id="blog">
                <div class="row blog-header text-center wow fadeInUp" data-wow-delay="0.5s">
                    <div class="col-sm-12">
                        <!-- Headline Goes Here -->
                        <h4><a href="{{route('home')}}"> 首页</a> / 场地 </h4>
                        <h3>办公场地</h3>
                    </div>
                </div>
                <!-- End: .row -->
            </div>
            <!-- End: Header Content -->
        </header>
        <!--/. header -->

        <!-- End: Header Section
==================================================-->


<!-- Start: Work Section 
==================================================-->
    <section class="service_section">
        <div class="container">
            <!-- Start: Heading -->
            <div class="base_header_2">
                <h3>办公场地</h3>
            </div>
            <!-- End:  heading -->
            <div class="row">
                <div class="owl-carousel owl-theme col-md-12" id="servic">
                    @foreach($locals as $local)
                    <div class="service_list">
                        <div class="service_img" style="height: 13.75rem; width: 22.5rem;">
                            <img alt="team" class="img-responsive" style="height: 100%; width: 100%;" src="{{env('APP_URL').'/uploads/'.$local->image}}">
                        </div>
                        <div class="service_para hei">
                            <a href="services.html"><h5>{{$local->name}}</h5></a>
                            <p>{{$local->content}}</p>
                        </div>
                    </div>
                    @endforeach
                    
                    <!--/Item -->
                    <!-- End : Tab pane 1 -->
                </div>
            </div>
            <!---/.row -->
        </div>
        <!--/.container -->
    </section>
   
@stop