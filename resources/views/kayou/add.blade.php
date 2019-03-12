@extends("frame")
@section('title','咖友圈--这里都是爱喝咖啡的朋友')

@section("header")
    @include("header")
@endsection
@section("body")
    <link rel="stylesheet" type="text/css" href="{{asset("dist/css/wangEditor.min.css")}}">
    <script src="{{asset("js/admin/add.js")}}"></script>
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
    <div class="container">
        <div class="col-lg-8">
            <form  method="post" enctype="multipart/form-data" class="form-horizontal" role="form" onsubmit="return checkall()">
                {!! csrf_field() !!}
                <div class="form-group">
                    <label for="title" class="col-sm-2">请输入标题</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="title" placeholder="" name="title" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="content" class="col-sm-3">请输入文章内容</label>
                    <br/><br/><br/>
                    <style>
                        #content
                        {
                            min-height: 300px;
                        }
                    </style>
                    <div class="col-sm-12 ">
                        <textarea class="form-control" id="content" name="content" ></textarea>
                        <script type="text/javascript" src="{{asset("dist/js/wangEditor.js")}}"></script>
                        <script type="text/javascript">
                            var editor = new wangEditor('content');
                            editor.config.uploadImgUrl = 'upload';

                            // 配置自定义参数（举例）
                            editor.config.uploadParams = {
                                token: 123,
                                user: 'wangfupeng1988'
                            };

                            // 设置 headers（举例）
                            editor.config.uploadHeaders = {
                                'Accept' : 'text/x-json'
                            };
                            editor.create();
                        </script>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-5">
                        <button type="submit" class="btn btn-primary col-sm-12">提交</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection