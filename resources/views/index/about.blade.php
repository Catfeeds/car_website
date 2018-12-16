@extends('layouts.app')
@section('content')
<style>
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
                <h4 style='color:#5C5449;'><a href="{{route('home')}}" style='color:#5C5449;'> 首页 </a> / 我们 </h4>
                <h3 style='color:#5C5449;'>关于我们</h3>
            </div>
        </div>
        <!-- End: .row -->
    </div>
    <!-- End: Header Content -->
</header>
<!--/. header -->

    <!-- End: Header Section
==================================================-->

 
 <!-- Start: Service list Section 
==================================================-->
    <style type="text/css">
        p{
            margin: 0;
            

        }
    </style>

    <section class="service_list_section service_list_sec_pg">
        <div class="container">
            <div class="base_header_2" style="width: 86%;">
                <h3>关于我们</h3>
                <div style="text-align: left;">
                    <p >{!! $detail->content !!}</p>
                </div>
                
            </div>
            <div class="row service_list_warp">
                <div class="col-sm-4 col-xs-12 wow fadeInUp">
                    <!-- about-item -->
                    <div class="serv_list">

                        <h4>地址</h4>
                        <div class="service_list_pa" style="width: 200px"> {{$abouts->address}}</div>
                    </div>
                    <!-- End: .about-item -->
                </div>
                <div class="col-sm-4 col-xs-12 wow fadeInUp" data-wow-delay=".1s">
                    <!-- about-item -->
                    <div class="serv_list">

                        <h4>电话</h4>
                        <div class="service_list_pa" style="width: 200px"> {{$abouts->phone}}</div>
                    </div>
                    <!-- End: .about-item -->
                </div>
                <div class="col-sm-4 col-xs-12 wow fadeInUp" data-wow-delay=".2s">
                    <!-- about-item -->
                    <div class="serv_list">

                        <h4>邮箱</h4>
                        <div class="service_list_pa" style="width: 200px"> {{$abouts->email}}</div>
                    </div>
                    <!-- End: .about-item -->
                </div>
            </div>
            <!--End: row-->
        </div>
        <!-- End: container-->
    </section>
@stop