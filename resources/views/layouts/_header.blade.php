
    <div id="preloader"></div>
    <!-- ::::::::::::::::::::::::::: End: Preloader section ::::::::::::::::::::::::::: -->

    <!-- Start: Header Section 
==================================================-->
    
    <!-- End: Header Info -->

    <!-- Start: header navigation -->
    <div class="navigation">
        <div class="container">
            <div class="row">
              <div class="left" style="margin-top: 15px;">
                    <a href="{{route('home')}}">
                        <img style="float: left; margin-left: 10px;width: 50px; height: 50px;" src="{{asset('index/images/logo.png')}}" alt="">
                        <img style="margin-left: 10px; height: 40px; float: left;margin-top: 5px;" src="{{asset('index/images/logo_1.png')}}" alt="">
                    </a>
                </div>
                <div id="navigation" style="float: right;">
                    <ul class="heig" id="nav">
                        <li><a class="active" href="{{route('home')}}">首页</a>
                        </li>
                        <li><a href="{{route('detail')}}" title="Gallery">公司详情</a>
                        </li>
                        <li><a href="{{route('culture')}}" title="Services">企业文化</a>
                                </li>
                                <li><a href="{{route('branch')}}" title="blog">分公司简介</a>
                        </li>
                        <li><a href="{{route('about')}}">关于我们</a>
                        </li>
                        {{-- <li class="has-sub"><a href="{{route('home')}}" title="page">公司简介</a>
                            <ul>
                                <li><a href="{{route('detail')}}" title="Gallery">公司详情</a>
                                </li>
                                <li><a href="{{route('member')}}" title="Gallery">公司人员</a>
                                </li>
                                <li><a href="{{route('local')}}" title="Services">办公场所</a>
                                </li>
                                <li><a href="{{route('culture')}}" title="Services">企业文化</a>
                                </li>
                              	
                            </ul>
                      		 <div style="clear: both;"></div>
                        </li>
                        <li><a href="{{route('branch')}}" title="blog">分公司简介</a>
                        </li> --}}
                     
                    </ul>
                </div>

            </div>
            <!--/ row -->
        </div>
        <!--/ container -->
    </div>
    <div class="callme w1024">
       <div class="rela" style="width:100%; height: 33.33%;">
            <a href="{{env('APP_URL').'/uploads/'.\App\Models\About::find(1)->qq_image}}"> 
                <img class="pos pic" src="{{env('APP_URL').'/uploads/'.\App\Models\About::find(1)->qq_image}}" alt="qq" >
         	</a>
        </div>
        <div class="rela" style="width:100%; height: 33.33%;">
            <a href="{{env('APP_URL').'/uploads/'.\App\Models\About::find(1)->qq_image}}"> 
                <img class="pos pic" src="{{env('APP_URL').'/uploads/'.\App\Models\About::find(1)->wx_image}}" alt="wx" >
            </a>
        </div>
        <div class="rela" style="width:100%; height: 33.33%;">
            <div class="phone call">
            	{{\App\Models\About::find(1)->phone}}
        	</div>
        </div>
    </div>
    <div class="carshop w1024_1">
      	<a href="http://crfsc.xionganea.cn" title="shop">
        	<img src="{{asset('index/images/carshop.png')}}" alt="" style="width:100%; height100%;">
         </a>
    </div>
<style>
.carshop{
            position: fixed;
            right: 0;
            top: 150px;
            z-index: 10;
        }
        .w1024_1{
            width: 163px;
          	height: 233px
        }
        .w768_1{
            width: 50px;
            height: 71px;
        }
        .callme{
            position:fixed;
          	left:0;
            top: 140px;
            z-index: 10;
          	
          	background:url("{{asset('index/images/callme.png')}}") center center no-repeat;
          	background-size:cover;

        }
        .w1024{
            width: 80px; 
          	height: 240px
        }
        .w768{
            width: 30px;
            height: 90px;
        }
        .dis{
            display: none;
        }
  .blog-banner{
  	position:relative;
    z-index:30;
  }
  .rela:hover .pos{
            display: block;
        }
        .rela{
            position: relative;
        }
        .rela img{
            width: 100%;
            height: 100%;
        }
        .pos{
            position: absolute;
            left: 80px;
            top: 0;
            display: none;
        }
        .pos_1{
            position: absolute;
            left: 30px;
            top: 0;
            display: none;
        }
		.rela:hover .phone{
       		display: block;
    	}
   		 .phone{
            position: absolute;
            top: 0;
            left: 80px;
            text-align: center;
            display: none;
            font-size: 20px;
            line-height: 78px;
            min-width: 170px;
            background: url("{{asset('index/images/phone.jpg')}}") no-repeat center center;
            background-size: 100% 100%;
            white-space : normal nowrap;
        }
        .phone_1{
            position: absolute;
            top: 0;
            left: 30px;
            text-align: center;
            display: none;
            font-size: 12px;
            line-height: 28px;
            background: url("{{asset('index/images/phone.jpg')}}") no-repeat center center;
            background-size: 100% 100%;
            white-space : normal nowrap;
            min-width: 110px;
        }
        .carshop_1{
          width:173px;
          height:243px;
        }
        .carshop_2{
          width:60px;
          height:81px;
        }
        .heig{
          max-height:79px;
        }
</style>


