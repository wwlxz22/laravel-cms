{{--
咖啡交友的主页
--}}
@extends('frame')
@section('title','咖友圈--这里都是爱喝咖啡的朋友')
@section('header')
    @include('header')
@endsection
@section('body')

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
                                    <a class="btn btn-primary" href="{{url('logout')}}">退出</a>4
                                @endif
                                <a href="{{url('kayou/add')}}" class="btn btn-success ">我要发帖</a>
                            </div>
                        </div><!-- /.nav-collapse -->

                    </div><!-- /.container-fluid -->
                </nav>

            </div>
        </div>
    </section>


    <div class="container">
        <div id="">
            <div class="col-lg-8">
                <div class="container newsbox">
                    <h2>
                        发帖测试
                    </h2>
                    <div class="newsbox detail">
                        日期
                    </div>
                    <div class="content">
                        这事一个测试
                    </div>
                </div>
                <div class="container reply">
                    <span style="text-align: left">回复</span>
                </div>
                <hr>
                <form>
                    请发表您的回复：<br>
                    <textarea style="width: 100%">在这里输入您的信息</textarea>
                    <input type="submit" value="发布" class="btn btn-default" style="float: right">
                </form>
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
@section('footer')
    fasdfasd
@endsection