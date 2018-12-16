@extends('layouts.app')
@section('content')
<style type="text/css">
    .jieshao{
            margin: 0 auto;
            width: 70%;
        }
        .jieshao img{
            margin: 0 auto;
        }
        .jieshao_1{
            margin: 20px auto;
            font-size: 18px;
        }

         .left{
             float: left;
         }
        .right{
            float: right;
        }
        .clear{
            clear: both;
        }
        .name{
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 1;
            -webkit-box-orient: vertical;
        }
        .dizhi{
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
        }
        /*.ind{*/
            /*overflow: hidden;*/
            /*text-overflow: ellipsis;*/
            /*display: -webkit-box;*/
            /*-webkit-line-clamp: 2;*/
            /*-webkit-box-orient: vertical;*/
        /*}*/

        
        .swiper-container {
            width: 100%;
            height: 100%;
			position: relative;
          	z-index:30;
        }
        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;

            /* Center slide text vertically */
            display: -webkit-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            align-items: center;
          	
        }
        .box{
            width: 100%;
        }
        .box img{
            width: 100%;
            height: 100%;
        }
  		.slides_wrapper .swiper-container .swiper-wrapper img{
    		max-height: 500px;
		}
  .service_para a:hover{
    color:red;
    
  }
</style>
    
    <div class="slides_wrapper">
        
        <div class="box ">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                     @foreach($banners as $banner) 
                    <div class="swiper-slide"><img src="{{env('APP_URL').'/uploads/'.$banner->image}}" alt=""></div>
                    @endforeach
                   
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
                <!-- Add Arrows -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>

    </div>


    


    <section class="work-section">
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
                    <div class="service_img img_1" style="height: 13.75rem; width: 22.5rem;">
                        <img alt="team" class="img-responsive" style="height: 100%; width: 100%;" src="{{env('APP_URL').'/uploads/'.$branch->image}}" >
                    </div>
                    <div class="service_para hei">
                        <h5><a href="{{route('branch_info',['branch_id'=>$branch->id])}}">{{$branch->name}}</a></h5>
                      <!--  <p style="height: 50px; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">{{$branch->address}}</p>
                        <p>tell：{{$branch->phone}}</p>
                        <p class="right mar" ><a href="{{route('branch_info',['branch_id'=>$branch->id])}}" >分公司介绍</a></p>
                        <p class="left mar" ><a href="{{route('product',['branch_id'=>$branch->id])}}">商品介绍</a></p>-->
                        <div class="clear"></div>
                    </div>
                </div>
                @endforeach
                    
                    <!--/Item -->
                    <!-- End : Tab pane 1 -->
                </div>
            </div>
        </div>
    </section>
    <!-- End: Work Section 
==================================================-->
 


 
 <!-- End: Team Section 
==================================================-->	
	<div>
    	<img style="width: 100%; max-height: 280px;" src="{{asset('index/images/banner-1.png')}}" alt="">
	</div>
    <section class="service_list_section">
        <div class="container">
            <div class="base_header_2">
                <h3>车辆介绍</h3>
            </div>
            <div class="row">
                <div class="owl-carousel owl-theme col-md-12" id="servic_1">
                    @foreach($members as $member)
                    <div class="service_list">
                        <div class="service_img" style="height: 13.75rem; width: 22.5rem;">
                            <img alt="team" class="img-responsive" style="height: 100%; width: 100%;" src="{{env('APP_URL').'/uploads/'.$member->image}}">
                        </div>
                        <div class="service_para hei">
                            <h5>{{$member->name}}</h5>
                            <p style="height: 50px; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">{{$member->content}}</p>
                        </div>
                    </div>
                   @endforeach
                    
                    <!--/Item -->
                    <!-- End : Tab pane 1 -->
                </div>
            </div>
            <!--End: row-->
        </div>
        <!-- End: container-->
    </section>

    <!-- Start: Team Section 
==================================================-->


    <!-- Start: Pricing Section 
==================================================-->
    <section class="work-section">
        <div class="container">
            <!-- Start: Heading -->
            <div class="base_header_2">
                <h3>办公场所</h3>
            </div>
            <!-- End:  heading -->
            <div class="row">
                <div class="owl-carousel owl-theme col-md-12" id="servic_2">
                    @foreach($locals as $local)
                    <div class="service_list">
                        <div class="service_img" style="height: 13.75rem; width: 22.5rem;">
                            <img alt="team" class="img-responsive" style="height: 100%; width: 100%;" src="{{env('APP_URL').'/uploads/'.$local->image}}">
                        </div>
                        <div class="service_para hei">
                            <h5>{{$local->name}}</h5>
                            <p style="height: 50px; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">{{$local->content}}</p>
                        </div>
                    </div>
                    @endforeach
                    
                    <!--/Item -->
                    <!-- End : Tab pane 1 -->
                </div>
            </div>
        </div>
    </section>

@stop

@section('afterJavaScript')
	<script>
        $("#servic_1").owlCarousel({
            autoPlay: 3000, //Set AutoPlay to 5 seconds
            autoplay: false,
            smartSpeed: 2000, // Default is 250
            items: 3,
            loop: true,
            margin: 30,
            touchDrag: true,
            mouseDrag: true,
            pagination: false,
            dots: true,
            nav: false,
            navText: ["<i class='logo-nav-icon'></i>", "<i class='logo-nav-icon'></i>"],
            responsive: {
                1200: {
                    items: 3
                },
                992: {
                    items: 3
                },
                768: {
                    items: 2
                },
                480: {
                    items: 2
                },
                320: {
                    items: 1
                },
                280: {
                    items: 1
                }
            }
        });
        $("#servic_2").owlCarousel({
            autoPlay: 3000, //Set AutoPlay to 5 seconds
            autoplay: false,
            smartSpeed: 2000, // Default is 250
            items: 3,
            loop: true,
            margin: 30,
            touchDrag: true,
            mouseDrag: true,
            pagination: false,
            dots: true,
            nav: false,
            navText: ["<i class='logo-nav-icon'></i>", "<i class='logo-nav-icon'></i>"],
            responsive: {
                1200: {
                    items: 3
                },
                992: {
                    items: 3
                },
                768: {
                    items: 2
                },
                480: {
                    items: 2
                },
                320: {
                    items: 1
                },
                280: {
                    items: 1
                }
            }
        });
        var swiper = new Swiper('.swiper-container', {
            pagination: '.swiper-pagination',
            nextButton: '.swiper-button-next',
            prevButton: '.swiper-button-prev',
            paginationClickable: true,
            spaceBetween: 30,
            centeredSlides: true,
            autoplay: 2500,
            autoplayDisableOnInteraction: false
        });
    </script>
@stop 