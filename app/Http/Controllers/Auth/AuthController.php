<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:16',
            'email' => 'required|email|max:64',
            'password' => 'required|confirmed|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

    protected function login()
    {
        $info = Input::get();
        if ($info['email'] == '')
            return back()->with('email', "请输入正确的邮箱");
        if (strlen($info['password']) < 6)
            return back()->with('password', "请输入正确的密码");
        $userinfo = DB::table('user_core')->
        where(['user_email' => $info['email'], 'user_password' => $info['password']])
            ->first();
        if ($userinfo) {
            Session::put('kayou', md5($info['email'] . md5($info['password'])));
            Session::put('uid', $userinfo->user_id);
            Session::save();
            return redirect('kayou');
        } else return back()->with('state',"账号或密码错误");
        return 1;
    }
    public function logout()
    {
        Session::flush();
        return redirect("kayou");
    }

    public function register()
    {
        $info = Input::get();
        $id=DB::table('user_core')
            ->insertGetId(['user_email' => $info['user_email'], 'user_password' => md5($info['user_password'])]);
        DB::table('user_profile')
            ->insert(['user_name' => $info['user_name'],'user_id'=>$id]);
    }

}
