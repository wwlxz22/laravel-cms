<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use Illuminate\Support\Facades\Session;



Route::get('/', function () {
    return view('index');
});
Route::get('download', function () {
    return view('download');
});
Route::get('news', function () {
    if (isset($_GET['type']))
    {
        $articles = DB::table('articles')
            ->join('users', 'users.uid', '=', 'articles.userid')
            ->join('types', 'types.tid', '=', 'articles.type')
            ->where('articles.type', $_GET['type'])
            ->orderby('top', 'desc')
            ->orderby('aid', 'desc')
            ->paginate(5);
    }
    else{
        $articles = DB::table('articles')
            ->join('users', 'users.uid', '=', 'articles.userid')
            ->join('types', 'types.tid', '=', 'articles.type')
            ->orderby('top', 'desc')
            ->orderby('aid', 'desc')
            ->paginate(5);
    }

    $types = DB::table('types')->get();
    return view('news', ['articles' => $articles, 'types' => $types]);
});
Route::get('news/{id}', function ($aid) {
    DB::table('articles')->where('aid', $aid)
        ->increment('count');;
    $types = DB::table('types')->get();
    $articles = DB::table('articles')
        ->join('users', 'users.uid', '=', 'articles.userid')
        ->join('types', 'types.tid', '=', 'articles.type')
        ->where('articles.aid', $aid)
        ->get();
    return view('news', ['articles' => $articles, 'aid' => $aid, 'types' => $types]);
});
/*

|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/
Route::group(['middleware' => ['web']], function () {
    Route::get('admin/login', function () {
        return view('admin.login');
    });
    Route::post('admin/login', 'users@login_post');
    Route::get('kayou','kayou@kayou');
    Route::get('kayou/detail','kayou@detail');
});
Route::group(['middleware' => ['web', 'auth']], function () {
    //
    Route::get('admin/index', function () {
        return view('admin.index');
    });
    Route::get('admin/edit/{id}', 'users@edit_get');
    Route::post('admin/edit/{id}', 'users@edit_post');
    Route::get('admin/add', 'users@add_get');
    Route::post('admin/add', 'users@add_post');
    Route::get('admin/manage', 'users@manage_get');
    Route::get('admin/types', 'users@type_get');
    Route::post('admin/types/add', 'users@type_add');
    Route::post('admin/types/edit', 'users@type_edit');
    Route::post('admin/upload', 'users@upload');
    Route::get('admin/delete/{id}', 'users@delete');
    Route::get('admin/changepass', 'users@changepass');
    Route::post('admin/changepass', 'users@changepass_post');
});

Route::group(['middleware' => 'web'], function () {

    Route::auth();
});
Route::group(['middleware' => ['web','kayou']], function () {

    Route::get('kayou/add','kayou@add');
});
