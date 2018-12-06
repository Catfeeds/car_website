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
                    <h4><a href="{{route('home')}}"> 首页 </a> / 人员 </h4>
                    <h3>公司人员</h3>
                </div>
            </div>
            <!-- End: .row -->
        </div>
        <!-- End: Header Content -->
    </header>
    <!--/. header -->

    <!-- End: Header Section
==================================================-->



 
 <!-- End: Team Section 
==================================================-->
    <section class="service_section">
        <div class="container">
            <!-- Start: Heading -->
            <div class="base_header_2">
                <h3>公司人员</h3>
            </div>
            <!-- End:  heading -->
            <div class="row">
                <div class="owl-carousel owl-theme col-md-12" id="servic">
                    @foreach($members as $member)
                    <div class="service_list">
                        <div class="service_img">
                            <img alt="team" class="img-responsive" src="{{env('APP_URL').'/uploads/'.$member->image}}">
                        </div>
                        <div class="service_para hei">
                            <a href="services.html"><h5>{{$member->name}}</h5></a>
                            <p>{{$member->content}}</p>
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

    <!-- Start: Team Section 
==================================================-->
@stop
