@extends('layouts.app')
@section('content')
<style>
    .left{
        float: left;
    }
    .right{
        float: right;
    }
    .clear{
        clear: both;
    }
    .hei{
        min-height: 13.9rem;
        position: relative;
    }
    .mar{
        position: absolute;
        bottom: 10px;
        right: 30px;
    }
    .pos{
        position: absolute;
        bottom: 10px; 
        width: 300px;
    }
    .pos p{
        margin: 5px 0;
    }
  .service_para a:hover{
    color:red;
    
  }
</style>
<!-- header -->
<header id="page-top" class="blog-banner">
    <!-- Start: Header Content -->
    <div class="container" id="blog">
        <div class="row blog-header text-center wow fadeInUp" data-wow-delay="0.5s">
            <div class="col-sm-12">
                <!-- Headline Goes Here -->
                <h4 style='color:#5C5449;'><a href="{{route('home')}}" style='color:#5C5449;'> 首页 </a> / 介绍 </h4>
                <h3 style='color:#5C5449;'>分公司介绍</h3>
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
<section class="service_section">
    <div class="container">
        <!-- Start: Heading -->
        <div class="base_header_2">
            <h3>分公司介绍</h3>
        </div>
        <!-- End:  heading -->
        <div class="row">
            <div class="owl-carousel owl-theme col-md-12" id="servic">
                @foreach($branchs as $branch)
                <div class="service_list">
                    <div class="service_img" style="height: 13.75rem; width: 22.5rem;">
                        <img alt="team" class="img-responsive" style="height: 100%; width: 100%;" src="{{env('APP_URL').'/uploads/'.$branch->image}}">
                    </div>
                    <div class="service_para hei">
                         <a href="{{route('branch_info',['branch_id'=>$branch->id])}}"><h5>{{$branch->name}}</h5></a>
                    <!--  <p>{{$branch->address}}</p>-->
                        <div class="pos">
                                <p>tell：{{$branch->phone}}</p>
                         <!--     <p class="right" ><a href="{{route('branch_info',['branch_id'=>$branch->id])}}" >分公司介绍</a></p>
                            <p class="left " ><a href="{{route('product',['branch_id'=>$branch->id])}}">商品介绍</a></p>-->
                            <div class="clear"></div>
                        </div>
                        
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