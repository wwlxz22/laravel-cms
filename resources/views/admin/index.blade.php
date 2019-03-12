@extends('frame')
@section('title','苏州城旺咖啡后台管理')
@section('body')
    <link href="{{asset("css/adminstyle.css")}}" rel='stylesheet' type='text/css'/>
    <link href="{{asset("css/custom.css")}}" rel="stylesheet">
    <link href="{{asset("css/lines.css")}}" rel='stylesheet' type='text/css'/>
    <link href="{{asset("css/font-awesome.css")}}" rel="stylesheet">
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{url('admin.index')}}">后台管理</a>
            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-nav navbar-right">
                <li class="">
                    <a href="{{url('logout')}}" class="">退出</a>
                </li>
            </ul>
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="{{url('admin/index')}}"><i class="fa fa-dashboard fa-fw nav_icon"></i>首页管理</a>
                        </li>
                        <li>
                            <a href="{{url("admin/add")}}"><i class="fa fa-book nav_icon"></i>添加文章</a>
                        </li>
                        <li>
                            <a href="{{url("admin/manage")}}"><i class="fa fa-bookmark nav_icon"></i>管理文章</a>
                        </li>
                        <li>
                            <a href="types"><i class="fa fa-bookmark nav_icon"></i>文章分类管理</a>
                        </li>
                        <li>
                            <a href="{{url('admin/changepass')}}"><i class="fa fa-bookmark nav_icon"></i>修改密码</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        <div id="page-wrapper">
            <div class="graphs">
                @yield('main_section')
            </div>
        </div>
        <!-- /#page-wrapper -->
    </div>

@endsection
@section('footer')

@endsection