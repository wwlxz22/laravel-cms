@extends('admin.index')
@section('main_section')
<h2>更改密码</h2>
<div style="min-height: 450px">

<form  method="post" enctype="multipart/form-data" class="form-horizontal" role="form" onsubmit="return checkall()">
    {!! csrf_field() !!}
    <input style="display: none;" name="uid" value="{{Session::get('uid')}}">
    <div class="form-group">
        <label for="title" class="col-sm-2 control-label">请输入原有密码</label>
        <div class="col-sm-5">
            <input type="password" class="form-control" id="pass" placeholder="请输入原有密码" name="pass" />
        </div>
    </div>
    <div class="form-group">
        <label for="type" class="col-sm-2 control-label">请输入新的密码</label>
        <div class="col-sm-5">
            <input type="password" class="form-control" id="newpass" placeholder="请输入新的密码" name="newpass" />
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-5">
            <button type="submit" class="btn btn-primary col-sm-12">修改密码</button>
        </div>
    </div>
</form>

</div>
@if(Session::has('state'))
    <script>
        alert("{{Session::get('state')}}");
    </script>

@endif
@endsection