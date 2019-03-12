<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>苏州云咖飞网络科技有限公司官网</title>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="keywords" content="云咖飞"/>
    <meta name="description" content="云咖飞"/>
    <!--

    Template 2075 Digital Team

    http://www.tooplate.com/view/2075-digital-team
    -->
    <link href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet"/>
    {{--<link href="//cdn.bootcss.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">--}}
    <link href="//cdn.bootcss.com/animate.css/3.5.2/animate.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset("css/et-line-font.css")}}"/>
    <link rel="stylesheet" href="{{asset("css/nivo-lightbox.css")}}"/>
    <link rel="stylesheet" href="{{asset("css/nivo_themes/default/default.css")}}"/>
    <link rel="stylesheet" href="{{asset("css/style.css")}}"/>


</head>
<body data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

<!-- preloader section -->
<div class="preloader">
    <div class="sk-spinner sk-spinner-circle">
        <div class="sk-circle1 sk-circle"></div>
        <div class="sk-circle2 sk-circle"></div>
        <div class="sk-circle3 sk-circle"></div>
        <div class="sk-circle4 sk-circle"></div>
        <div class="sk-circle5 sk-circle"></div>
        <div class="sk-circle6 sk-circle"></div>
        <div class="sk-circle7 sk-circle"></div>
        <div class="sk-circle8 sk-circle"></div>
        <div class="sk-circle9 sk-circle"></div>
        <div class="sk-circle10 sk-circle"></div>
        <div class="sk-circle11 sk-circle"></div>
        <div class="sk-circle12 sk-circle"></div>
    </div>
</div>

<!-- navigation section -->
<section class="navbar navbar-fixed-top custom-navbar" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand">云咖飞</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#home" class="">主页</a></li>
                <li><a href="#work" class="">业务</a></li>
                <li><a href="#about" class="">APP下载</a></li>
                <li><a href="#portfolio" class="">咖啡机</a></li>
                <li><a href="#pricing" class="">购买</a></li>
                <li><a href="#contact" class="">联系</a></li>
                <li id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        <a href="#">登录</a>
                </li>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1" >
                        <li><a href="http://yuncafei.com:9999" style="color: black">登录物联后台</a></li>
                        <li><a href="http://login.yuncafei.com/login" style="color: black">登录商家后台</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</section>

<!-- home section -->
<section id="home">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <h3>互联网智能咖啡机 / 技术开发 / 技术咨询</h3>
                <h1>云咖飞</h1>
                <hr/>
                <a href="{{url('news')}}" class=" btn btn-danger">公司资讯</a>
                <a href="{{url('download')}}" class="stable down_bt theme-login1  btn btn-default">APP下载</a>
            </div>
        </div>
    </div>
</section>

<!-- work section -->
<section id="work">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 wow fadeInUp bold href-btn">
                <a href="#pricing" class=" btn btn-danger">查看商业模式</a>
                <a href="{{url('news/15')}}" class="stable down_bt theme-login1  btn btn-default">自主品牌咖啡</a>
            </div>
        </div>
    </div>
</section>

<!-- about section -->
<section id="about">
    <div class="container">
        <div class="row">
            <div role="tabpanel" class="tab-pane active text-center href-btn">
                <a href="#work" class=" btn btn-danger">我爱咖啡</a>
                <a href="{{url('download')}}"
                   class="stable down_bt theme-login1  btn btn-default">APP下载</a>
            </div>
        </div>


    </div>
  
</section>

<!-- team section -->

<!-- portfolio section -->
<div id="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="href-btn">
                    <a href="{{url('news/13')}}" class=" btn btn-danger">查看咖啡机参数</a>
                    <a href="{{url('news/1')}}"
                       class="stable down_bt theme-login1  btn btn-default">到店查询购买</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- pricing section -->
<section id="pricing">
    <div class="container ">
        <div class="row ">

            <div class="col-md-4 col-sm-6">
                <div class="plan plan-two wow bounceIn" id="jiudian" data-wow-delay="0.3s">
                    <div class="plan_title">
                        <img src="{{asset('images/logo1.png')}}">
                        <h3>酒店咖啡</h3>
                    </div>
                    <ul>
                        <li>面向中高端连锁酒店提供专业设计的咖啡机</li>
                        <li>提供咖啡机广告服务</li>
                        <li>酒店放置咖啡机提高服务质量、增加盈利点</li>
                    </ul>
                    <button class="btn btn-warning" onclick='javascrtpt:jump("{{url('news/13')}}")'>查看详情
                    </button>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="plan plan-two wow bounceIn" data-wow-delay="0.3s">
                    <div class="plan_title">
                        <img src="{{asset('images/logo2.png')}}">
                        <h3>商业咖啡</h3>
                    </div>
                    <ul>
                        <li>面向商业经营的商铺、便利店的商业咖啡机</li>
                        <li>提供咖啡机广告服务</li>
                        <li>连锁便利店、烘培店、奶茶店首选</li>
                    </ul>
                    <button class="btn btn-warning" onclick='javascrtpt:jump("{{url('news/13')}}")'>查看详情
                    </button>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="plan plan-two wow bounceIn" data-wow-delay="0.3s">
                    <div class="plan_title">
                        <img src="{{asset('images/logo3.jpg')}}">
                        <h3>办公室咖啡</h3>
                    </div>
                    <ul>
                        <li>面向企业用户的办公室咖啡机</li>
                        <li>提供咖啡机广告服务</li>
                        <li>员工福利、提高工作效率</li>
                    </ul>
                    <button class="btn btn-warning" onclick='javascrtpt:jump("{{url('news/13')}}")'>查看详情
                    </button>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- contact section -->
<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 text-center">
                <div class="section-title">
                    <h1 class="heading bold">联系我们</h1>
                    <hr/>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 contact-info">
                <h2 class="heading bold">联系我们</h2>
                <p>公司地址:苏州市工业园国际科技园二期A410苏州城旺咖啡有限公司</p>
                <div class="col-md-6 col-sm-4">
                    <h3><i class="icon-envelope medium-icon wow bounceIn" data-wow-delay="0.6s"></i> E-mail</h3>
                    <p>feinin@wintel-tech.com</p>
                </div>
                <div class="col-md-6 col-sm-4">
                    <h3><i class="icon-phone medium-icon wow bounceIn" data-wow-delay="0.6s"></i> 联系电话</h3>
                    <p>0512-62528285 | 18662225266</p>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <form action="#" method="get" class="wow fadeInUp" data-wow-delay="0.6s">
                    <div class="col-md-6 col-sm-6">
                        <input type="text" class="form-control" placeholder="姓名" name="name"/>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <input type="email" class="form-control" placeholder="Email" name="email"/>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <textarea class="form-control" placeholder="您想说的话……" rows="7" name="message"></textarea>
                    </div>
                    <div class="col-md-offset-4 col-md-8 col-sm-offset-4 col-sm-8">
                        <input type="submit" class="form-control" value="留 言"/>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- footer section -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <p>Copyright © 苏州云咖飞网络科技有限公司</p>
                <hr/>

            </div>
        </div>
    </div>
</footer>


<script src="//cdn.bootcss.com/jquery/1.11.1/jquery.js"></script>
<script src="//cdn.bootcss.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="js/nivo-lightbox.min.js"></script>
<script src="//cdn.bootcss.com/jquery-backstretch/2.0.4/jquery.backstretch.min.js"></script>
<script src="{{asset("js/wow.min.js")}}"></script>
<script src="{{asset("js/custom.js")}}"></script>
<script>
    function jump(url) {
        window.location.href = url;
    }
    //点击指定按钮后弹出显示

</script>

</body>
</html>