{{--
咖啡交友的主页
--}}
@extends('frame')
@section('title','咖友圈--这里都是爱喝咖啡的朋友')
@section('body')
    @include('header')
    <link rel="stylesheet" href="{{asset('css/style1.css')}}"/>
    <section id="nav">
        <div class="container">
            <div class="col-lg-12">
                <nav id="navbar-example" class="navbar navbar-default navbar-static">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button class="navbar-toggle collapsed" type="button" data-toggle="collapse"
                                    data-target=".bs-example-js-navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="{{url('news')}}">全部帖子</a>
                        </div>
                        <div class="navbar-collapse bs-example-js-navbar-collapse collapse" aria-expanded="false"
                             style="height: 1px;">
                            <ul class="nav navbar-nav">
                                <li class="dropdown">
                                    <a id="drop1" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                       aria-haspopup="true" aria-expanded="false">
                                        帖子分类
                                        <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="drop1">
                                        <li><a href="#">测试</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="navbar-right" style="margin-top: 10px">
                                @if(!Session::has('kayou'))
                                    <a class="btn btn-primary" href="{{url('login')}}">登陆</a>
                                    <a class="btn btn-warning" href="{{url('register')}}">注册</a>
                                    @else
                                    <a class="btn btn-primary" href="{{url('logout')}}">退出</a>
                                @endif
                                <a href="{{url('kayou/add')}}" class="btn btn-success ">我要发帖</a>
                            </div>
                        </div><!-- /.nav-collapse -->
                    </div><!-- /.container-fluid -->

                </nav>
            </div>

        </div>
    </section>

    <div id="news">

        <div class="container">

            <div class="col-lg-8">
                <div class="container newsbox">
                    <h2>
                        苏州城旺咖啡有限公司
                    </h2>
                    <div class="newsbox detail">
                        日期：2017年3月20日
                    </div>
                    <div class="content">
                        苏州云咖飞有限公司是云咖飞项目的线上公司，负责线上运营。

                        柜台咖啡/互联网咖啡解决方案

                        苏州城旺咖啡有限公司于2015年5月注册成立于苏州工业园区苏州国际科技园，
                        致力于现磨咖啡的互联网运营解决方案，产品有互联网咖啡机、云咖飞APP、云端数据支撑系统等，
                        为商家提供自主品牌咖啡的商业运营服务，为商家咖啡零售移动收款、口味定制及咖啡豆供应配送等提供一揽子解决方案。
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-xs-12">
                <div class="container newsbox">
                    <h3>热点帖子</h3>
                    <div class="newsitem">
                        <div class="col-lg-3 col-sm-3 col-xs-3">
                            <img src="{{asset('images/logo.jpg')}}">
                        </div>
                        <div class="col-lg-9 col-sm-9 col-xs-9">
                            <p><a href="{{url('news/1')}}">苏州城旺咖啡简介</a></p>
                        </div>
                    </div>
                    <div class="newsitem">
                        <div class="col-lg-3 col-sm-3 col-xs-3">
                            <img src="{{asset('images/portfolio-img1.jpg')}}">
                        </div>
                        <div class="col-lg-9 col-sm-9 col-xs-9">
                            <p><a href="{{url('news/13')}}">咖啡机型号和价格表</a></p>
                        </div>
                    </div>
                    <div class="newsitem">
                        <div class="col-lg-3 col-sm-3 col-xs-3">
                            <img src="{{asset('images/app.png')}}">
                        </div>
                        <div class="col-lg-9 col-sm-9 col-xs-9">
                            <p><a href="{{url('download')}}">云咖啡APP下载</a></p>
                        </div>
                    </div>
                    <div class="newsitem">
                        <div class="col-lg-3 col-sm-3 col-xs-3">
                            <img src="{{asset('images/portfolio-img1.jpg')}}">
                        </div>
                        <div class="col-lg-9 col-sm-9 col-xs-9">
                            <p><a href="{{url('news/12')}}"> 咖啡机型号和功能介绍</a></p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
