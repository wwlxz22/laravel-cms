@extends('frame')
@section('title','苏州城旺咖啡有限公司')
@section('header')
    @include('header')
@endsection
@section('body')
    <script>
        $(function () {
            $('table').addClass('table');
            $('table').addClass('table-bordered');
            $('table').addClass('table-responsive');
        })
    </script>
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
                            <a class="navbar-brand" href="{{url('news')}}">全部文章</a>
                        </div>
                        <div class="navbar-collapse bs-example-js-navbar-collapse collapse" aria-expanded="false"
                             style="height: 1px;">
                            <ul class="nav navbar-nav">
                                <li class="dropdown">
                                    <a id="drop1" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                       aria-haspopup="true" aria-expanded="false">
                                        文章分类
                                        <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="drop1">
                                        @foreach($types as $type)
                                            <li><a href="{{url('news?type=').$type->tid}}">{{$type->name}}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                {{-- <li class="dropdown">
                                     <a id="drop2" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                        aria-haspopup="true" aria-expanded="false">
                                         热点分类
                                         <span class="caret"></span>
                                     </a>
                                     <ul class="dropdown-menu" aria-labelledby="drop2">
                                         <li><a href="#">Action</a></li>
                                         <li><a href="#">Another action</a></li>
                                         <li><a href="#">Something else here</a></li>
                                         <li role="separator" class="divider"></li>
                                         <li><a href="#">Separated link</a></li>
                                     </ul>
                                 </li>--}}
                            </ul>

                        </div><!-- /.nav-collapse -->
                    </div><!-- /.container-fluid -->
                </nav>
            </div>
        </div>
    </section>

    <div id="news">

        <div class="container">

            <div class="col-lg-8  table-responsive">
                @foreach($articles as $article)
                    <div class="container newsbox">
                        <h2>
                            <a href="{{url("news").'/'.$article->aid}}">{{$article->title}}</a>
                        </h2>
                        <div class="newsbox detail">
                            日期：{{$article->date}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            分类：{{$article->name}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            作者：{{$article->uname}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            浏览量：{{$article->count}}
                        </div>
                        <div class="content">
                            @if(empty($aid))
                                <p>{{mb_substr(strip_tags($article->content),0,100,"utf-8")}}</p>
                                <a href="{{url("news").'/'.$article->aid}}" style="float: left;">查看全文</a>
                            @else
                                {!! $article->content !!}
                                <style>
                                    .content {
                                        min-height: 400px;
                                    }
                                </style>
                            @endif
                        </div>
                    </div>
                @endforeach
                @if(empty($aid))
                    {!!  $articles->appends(['type' => isset($_GET['type'])?$_GET['type']:null])->render()  !!}
                @endif
            </div>

            <div class="col-lg-4 col-xs-12">
                <div class="container newsbox">
                    <h3>热点推荐</h3>
                    <div class="newsitem">
                        <div class="col-lg-3 col-sm-3 col-xs-3">
                            <img src="{{asset('images/logo.jpg')}}">
                        </div>
                        <div class="col-lg-9 col-sm-9 col-xs-9">
                            <p><a href="{{url('news/1')}}">苏州城旺咖啡简介</a></p>
                        </div>
                    </div>
                    <div class="newsitem ">
                        <div class="col-lg-3 col-sm-3 col-xs-3">
                            <img src="{{asset('images/kafeiji.png')}}">
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
                            <img src="{{asset('images/logo1.png')}}">
                        </div>
                        <div class="col-lg-9 col-sm-9 col-xs-9">
                            <p><a href="{{url('download')}}">自主品牌咖啡</a></p>
                        </div>
                    </div>
                    <div class="newsitem">
                        <div class="col-lg-3 col-sm-3 col-xs-3">
                            <img src="{{asset('images/kafeiji.png')}}">
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
    @ copyright by <a href="http://www.yuncafei.com"> 苏州城旺咖啡有限公司</a>
@endsection