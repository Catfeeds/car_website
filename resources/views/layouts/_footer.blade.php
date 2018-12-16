<style>
  .row .phone{
            margin-bottom: 5px;
        }
        .row .list .left{
            padding: 0 10px;
            border-left: 1px solid #515151;
            margin-bottom: 5px;
        }
        .row .list .left:first-child {
            border-left: none;
            padding-left: 0;
        }
        .addres p{
            margin: 0 10px 5px 0;

        }
        .company p{
            margin: 0 0 5px 0;
        }
 
</style>
    <footer class="footer-section" style="background: #001534; padding-bottom: 42px;">
        <div class="container">
            <div class="row col-lg-12 col-xs-12" style="color: #fff; ">
                <div class="phone">
                    <sapn>联系电话：</sapn>
                    <span style="font-weight: 700; font-size: 26px; color: red;">{{\App\Models\About::find(1)->phone}}</span>
                </div>
                <div class="list">
                    <div class="left"><a class="active" href="{{route('home')}}" style="color:#fff;">首页</a></div>
                    <div class="left"><a href="{{route('detail')}}" style="color:#fff;">公司详情</a></div>
                    <div class="left"><a href="{{route('culture')}}" style="color:#fff;">企业文化</a></div>
                    <div class="left"><a href="{{route('branch')}}" style="color:#fff;">分公司简介</a></div>
                    <div class="left"><a href="{{route('about')}}" style="color:#fff;">关于我们</a></div>
                    <div style="clear: both;"></div>
                </div>
                <div class="addres">
                    <p class="left">地址：{{\App\Models\About::find(1)->address}}</p>
                    <p class="left">总机：{{\App\Models\About::find(1)->phone}}</p>
                    <div style="clear: both;"></div>
                </div>
                <div class="company">
                    <p>呈瑞峰集团</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- End:Footer Section 
========================================