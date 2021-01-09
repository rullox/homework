<?php
namespace app\index\controller;

use think\Controller;

class Index extends Controller {

    public function index() {
        $this->view->engine->layout(false); 
        return $this->fetch();
    }
    
    public function dologin() {
        $username = input('post.username');
        $password = substr(md5(substr(md5(input('post.password')), 0, 16)), 0, 16);
        if ($username) {
            $row = db('admin', [], false)->where('username', $username)->find();
            if ($password == $row['password']) {
                //建立新token
                $str = md5(time());
                $token = substr($str, 5, 10);
                db('admin', [], false)->where('username', $username)->update(['token' => $token]);
                //cookie设置
                cookie('username', $username);
                cookie('token', $token, 60 * 300);
                //session设置
                session('username', $username);
                session('userid', $row['id']);
                return $this->success($username.', 欢迎您登录秒杀网站管理系统', 'index/platform/index');
            }
        }
        return $this->error('登录失败，请重新登录！', 'index');
    }
}
