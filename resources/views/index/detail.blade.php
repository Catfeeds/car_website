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
                <h4><a href="{{route('home')}}"> 首页 </a> / 详情 </h4>
                <h3>公司详情</h3>
            </div>
        </div>
        <!-- End: .row -->
    </div>
    <!-- End: Header Content -->
</header>
<!--/. header -->

<!-- End: Header Section
==================================================-->

<!-- Start: Service Section
==================================================-->
<section class="service_list_section service_list_sec_pg">
        <div class="container">
            <div class="base_header_2">
                <h3>公司详情</h3>
                <p>{!! $detail->content !!}</p>
            </div>
            
            <!--End: row-->
        </div>
        <!-- End: container-->
    </section>
<!-- End: Service Section


@stop