@extends('frame')
@section('title','用户登陆')
@section('body')
    <div class="container">
        <div class="row myCenter">
            <div class="col-lg-3">

            </div>
            <div class="col-xs-12 col-md-6 col-sm-12 ">
                <form class="form-signin" method="post">
                    {!! csrf_field() !!}
                    <div class="text-center"><h2 class="help-block">城旺咖啡后台管理系统</h2></div>
                    <br>
                    <h4 class="form-signin-heading">请登录</h4>
                    <label for="username" class="sr-only">账号</label>
                    <input type="text" id="U_Account" class="form-control input-lg" placeholder="账号" name="account"
                           required autofocus>
                    <br>
                    <label for="inputPassword" class="sr-only">密码</label>
                    <input type="password" id="password" class="form-control input-lg" placeholder="密码"
                           name="password" required>
                    <br/>
                    <input name="submit" class="btn btn-lg btn-primary btn-block " type="submit" value="登录">

                </form>
                <br/>
                <div class="text-center">
                    <a href="{{url('/')}}" class="btn btn-success"><font color="white">返回主页</font></a>

                </div>
                <h2><strong>@if(!empty($state))
                            <div class="text-center text-info">{{$state}}</div>
                        @endif</strong></h2>
            </div>
        </div>

    </div>
@endsection
