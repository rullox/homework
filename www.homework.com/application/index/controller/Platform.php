<?php
namespace app\index\controller;

use think\Controller;
use think\Loader;

//Base类中有拦截器判定登录身份
class Platform extends Base {
    
    public function index() {
        $list = db('goods', [], false)->select();
        $this->assign('list', $list);
        return $this->fetch();
    }
    
    public function welcome() {
        return cookie('username');
    }
    
    public function list() {
        $list = db('list', [], false)->where('user_name', session('username'))->select();
        $this->assign('list', $list);
        return $this->fetch();
    }
    
}
?>