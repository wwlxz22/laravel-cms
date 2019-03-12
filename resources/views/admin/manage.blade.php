@extends('admin.index')
@section('main_section')
    <h2>文章管理</h2>
    <table class="table table-striped table-bordered">
        <thead>
        <td>文章ID</td>
        <td>文章标题</td>
        <td>功能选项</td>
        <td>功能选项</td>
        </thead>
        @foreach($articles as $article)
            <tr>
                <td>
                    {{$article->aid}}
                </td>
                <td>
                    {{$article->title}}
                </td>
                <td><a href="{{url('admin/delete').'/'.$article->aid}}" class="btn btn-default" onclick="return del()">删除</a></td>
                <td><a href="{{url('admin/edit').'/'.$article->aid}}" class="btn btn-default">修改文章</a> </td>
            </tr>
        @endforeach
    </table>
<script>
    function del() {

        var msg = confirm("您确定要执行此删除操作？\n\n请确认！");
        if (msg == true) {
            return true;
        } else {
            return false;
        }
    }
</script>
@endsection