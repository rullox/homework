<?php
namespace app\index\controller;

use think\Controller;
use think\Loader;

class Base extends Controller {
    
    public function __construct(\think\Request $request = null) {

        parent::__construct($request);
        
        /*
         * 本项目全部默认位于Index单模块下
         */
         
        //判定cookie是否失效
        if (is_null(cookie('username')) || is_null(cookie('token'))) 
            $this->error('操作失败，请重新登陆！', 'index/index/index');
        
        //对token的合法性进行判定
        $username = cookie('username');
        $token = cookie('token');
        $row = db('admin', [], false)->where('username', $username)->find();
        if ($token != $row['token']) 
            $this->error('操作失败，请重新登陆！', 'index/index/index');
            
        //绑定参数，使前端提示用户名
        $this->assign('username', $username);
    }
    
}
?>