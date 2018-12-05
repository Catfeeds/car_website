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
                <h4><a href="index.html"> 首页 </a> / 文化 </h4>
                <h3>企业文化</h3>
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
            <h3>企业文化</h3>
        </div>
        <!-- End:  heading -->
        <div class="row">
            <div class="owl-carousel owl-theme col-md-12" id="servic">
                <div class="service_list">
                    <div class="service_img">
                        <img alt="team" class="img-responsive" src="images/service1.jpg">
                    </div>
                    <div class="service_para hei">
                        <a href="services.html"><h5>Office cleaning</h5></a>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elited hasellus id lectus quis dui euismod con placerat ssa nec elit egestas efficitur </p>
                    </div>
                </div>
                <!--/Item -->
                <div class="service_list">
                    <div class="service_img">
                        <img alt="team" class="img-responsive" src="images/service2.jpg">
                    </div>
                    <div class="service_para hei">
                        <a href="services.html"><h5>Floor cleaning</h5></a>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elited hasellus id lectus quis dui euismod con placerat ssa nec elit egestas efficitur </p>
                    </div>
                </div>
                <!--/Item -->
                <div class="service_list">
                    <div class="service_img">
                        <img alt="team" class="img-responsive" src="images/service3.jpg">
                    </div>
                    <div class="service_para hei">
                        <a href="services.html"><h5>Carpet cleaning</h5></a>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elited hasellus id lectus quis dui euismod con placerat ssa nec elit egestas efficitur </p>
                    </div>
                </div>
                <div class="service_list">
                    <div class="service_img">
                        <img alt="team" class="img-responsive" src="images/service4.jpg">
                    </div>
                    <div class="service_para hei">
                        <a href="services.html"><h5>Pool cleaning</h5></a>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elited hasellus id lectus quis dui euismod con placerat ssa nec elit egestas efficitur </p>
                    </div>
                </div>
                <!--/Item -->
                <!-- End : Tab pane 1 -->
            </div>
        </div>
        <!---/.row -->
    </div>
    <!--/.container -->
</section>
<!-- End: Service Section


<!-- End: Estimat Section
==================================================-->
@stop