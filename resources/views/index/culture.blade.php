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
                <h4 style='color:#5C5449;'><a href="{{route('home')}}" style='color:#5C5449;'> 首页 </a> / 文化 </h4>
                <h3 style='color:#5C5449;'>企业文化</h3>
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
<style type="">
    p{
        margin: 0;
        text-align: left;
    }
</style>
<section class="service_list_section service_list_sec_pg">
        <div class="container">
            <div class="base_header_2" style="width: 86%;">
                <h3>企业文化</h3>
                <p>{!! $culture->content !!}</p>
            </div>
            
            <!--End: row-->
        </div>
        <!-- End: container-->
    </section>



@stop