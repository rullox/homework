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
        
        
        //判定session是否失效
        $this->username = session('username');
        $token = cookie('token');
        if (is_null($this->username) || is_null($token) || cookie('username') != $this->username) 
            $this->error('操作失败，请重新登陆！', 'index/index/index');
        //对token的合法性进行判定
        $row = db('users', [], false)->where('username', $this->username)->find();
        if ($token != $row['token']) 
            $this->error('操作失败，请重新登陆！', 'index/index/index');
            
        //绑定参数，使前端提示用户名
        $this->assign('username', $this->username);
        
        
        //记录日志
        $this->_addLog();
    }
    
    /**
     * 记录日志
     */
    private function _addLog() {
        $data = array();
        $data['user_id'] = session('userid');
        $data['user_name'] = $this->username;
        $data['controller'] = request()->controller();
        $data['action'] = request()->action();
    	$data['time'] = time();
        $data['ip'] = ip2long(request()->ip());
        db('logs', [], false)->insert($data);
    }
    
}
?>