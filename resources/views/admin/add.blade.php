@extends('admin.index')
@section('main_section')
    <link rel="stylesheet" type="text/css" href="{{asset("dist/css/wangEditor.min.css")}}">
    <script src="{{asset("js/admin/add.js")}}"></script>
    <div class="col-md-12">
        <h2>添加文章</h2>
    </div>
    <form  method="post" enctype="multipart/form-data" class="form-horizontal" role="form" onsubmit="return checkall()">
        {!! csrf_field() !!}
        <div class="form-group">
            <label for="title" class="col-sm-2 control-label">请输入文章标题</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" id="title" placeholder="" name="title" />
            </div>
        </div>
        <div class="form-group">
            <label for="type" class="col-sm-2 control-label">请选择文章分类</label>
            <div class="col-sm-5">
                <select class="form-control" id="type" name="type" >
                    <option value="">请选择文章分类</option>
                    @foreach($types as $type)
                        <option value="{{$type->tid}}">{{$type->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="type" class="col-sm-2 control-label">请选择是否置顶</label>
            <div class="col-sm-5">
                <select class="form-control" id="top" name="top" >
                    <option value="">文章是否置顶</option>
                        <option value="0">普通文章</option>
                        <option value="1">一般置顶(多篇置顶文章按日期排列)</option>
                        <option value="2">绝对置顶(比一般置顶优先级高)</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="content" class="col-sm-2 control-label">请输入文章内容</label>
            <br/>
            <style>
                #content
                {
                    min-height: 300px;
                }
            </style>
            <div class="col-sm-8 ">
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

@endsection