@extends('admin.index')
@section('main_section')
    <h2>类型管理</h2>
    为了避免已经发布的文章出错，不允许删除文章类型，只可以修改和添加
    <br/>
    <button href="" class="btn btn-default" data-toggle="modal" data-target="#addtypes">添加分类</button>
    <div class="modal fade" id="addtypes" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">添加分类</h4>
                </div>
                <div class="modal-body">
                    <form action="{{url('admin/types/add')}}" method="post">
                        {!! csrf_field() !!}
                        <input type="text" class="input-sm" name="type" id="type">
                        <input type="submit" value="添加" class="btn btn-default">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="changetypes" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">修改分类</h4>
                </div>
                <div class="modal-body">
                    <form action="{{url('admin/types/edit')}}" method="post">
                        {!! csrf_field() !!}
                        <input type="text" id="tid" name="tid" style="display: none">
                        <input type="text" class="input-sm" name="type" id="type">
                        <input type="submit" value="修改" class="btn btn-default">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                </div>
            </div>
        </div>
    </div>
    <table class="table table-striped table-bordered">
        <thead>
        <td>类型ID</td>
        <td>类型名称</td>
        <td>功能选项</td>
        </thead>
        @foreach($types as $type)
            <tr>
                <td>
                    {{$type->tid}}
                </td>
                <td>
                    {{$type->name}}
                </td>
                <td>
                    <button id="{{$type->tid}}" name="ch_btn" class="btn btn-default" data-toggle="modal"
                            data-target="#changetypes">修改名称
                    </button>
                </td>
            </tr>
        @endforeach
    </table>
    @if(Session::has('state'))
        <script>
            alert("{{Session::get('state')}}");
        </script>
    @endif
    <script>
        $(function () {
            $('button[name="ch_btn"]').click(
                function () {
                    $('#tid').val(this.id)
                }
            )
        })
    </script>
@endsection