<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class users extends Controller
{
    //
    function __construct()
    {
        $this->middleware('web');
    }

    public function login_post()
    {
        $info = Input::get();
        $userinfo = DB::table('users')
            ->select('uid')
            ->where(['account' => $info['account'], 'password' => md5($info['password'])])
            ->first();
        if ($userinfo) {
            Session::put('login', md5($info['account'] . md5($info['password'])));
            $state = (array)$userinfo;
            Session::put('uid', $state['uid']);
            Session::save();
            return redirect('admin/index');
        } else return view('admin.login', ['state' => '登陆失败']);
    }

    public function add_get()
    {
        $types = DB::table('types')->get();
        return view('admin.add', ['types' => $types]);
    }

    public function add_post()
    {
        $info = Input::get();
        DB::table('articles')->insert(['title' => $info['title'], 'type' => $info['type'],
            'content' => $info['content'], 'userid' => Session::get('uid'), 'top' => $info['top']]);
        return back()->with('state', '修改成功');
    }

    public function manage_get()
    {
        $articles = DB::table('articles')->paginate(10);
        return view('admin.manage', ['articles' => $articles]);
    }

    public function edit_get($aid)
    {
        $types = DB::table('types')->get();
        $article = DB::table('articles')
            ->where('aid', $aid)
            ->first();
        return view('admin.edit', ['article' => $article, 'types' => $types]);
    }

    public function edit_post($id)
    {
        $info = Input::get();
        DB::table('articles')
            ->where('aid', $info['id'])
            ->update(['title' => $info['title'], 'type' => $info['type'],
                'content' => $info['content'], 'userid' => Session::get('uid'), 'top' => $info['top']]);
        return back()->with('state', '修改成功');
    }

    public function delete($id)
    {
        //删除文章
        DB::table('articles')
            ->where('aid', $id)
            ->delete();
        return back()->with('state', '删除成功');

    }

    public function upload(Request $request)
    {

        $uptypes = array(
            'image/jpg',
            'image/jpeg',
            'image/png',
            'image/pjpeg');
        if (in_array($_FILES['wangEditorH5File']['type'], $uptypes)) {
            $file = $request->file('wangEditorH5File');
            $cover = 'upload/' . time() . '/';
            $rand = random_int(0, 1000);
            $file->move($cover, $rand . 'tx.jpg');
            echo asset($cover . $rand . 'tx.jpg');
        }
    }

    function type_get()
    {
        //文章类型管理
        $types = DB::table('types')->get();
        return view('admin.types', ['types' => $types]);
    }

    public function type_add()
    {
        $info = Input::get();
        $in = DB::table('types')->insert(['name' => $info['type']]);
        if ($in) {
            return back()->with('state', '添加成功');
        }
    }

    public function type_edit()
    {
        $info = Input::get();
        $in = DB::table('types')
            ->where('tid', $info['tid'])
            ->update(['name' => $info['type']]);
        if ($in) {
            return back()->with('state', '修改成功');
        }
    }
    public function changepass()
    {
        return view('admin.changepass');
    }
    public function changepass_post()
    {
        $info=Input::get();
        $find=DB::table('users')
            ->where(['uid'=>$info['uid'],'password'=>md5($info['pass'])])
            ->count();
        if ($find>0)
        {
            DB::table('users')
                ->where('uid',$info['uid'])
                ->update(['password'=>md5($info['newpass'])]);
            echo "<script>alert('修改成功');</script>";
            Session::flush();
        }
       return back()->with('state', '修改失败');

    }
}
