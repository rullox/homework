<?php
namespace app\index\controller;

use think\Controller;
use think\Loader;

//Base类中有拦截器判定登录身份
class Platform extends Base {
    
    public function index() {
        $list = db('users', [], false)->select();
        $this->assign('list', $list);
        return $this->fetch();
    }
    
    public function good() {
        $list = db('goods', [], false)->select();
        $this->assign('list', $list);
        return $this->fetch();
    }
    
    public function order() {
        $list = db('list', [], false)->select();
        $this->assign('list', $list);
        return $this->fetch();
    }
    
    public function log() {
        $list = db('logs', [], false)->select();
        $this->assign('list', $list);
        return $this->fetch();
    }
    
    public function welcome() {
        return cookie('username');
    }
    
    public function save() {
        $this->view->engine->layout(false);
        $table = input('t');
        $result = 0;
        if ($table == "user") {
            $id = input('c0');
            $username = input('c1');
            $password = input('c2');
            $token = input('c3');
            $money = input('c4');
            //初步判定值合法性
            if (is_numeric($id) && is_numeric($money) && $username != "" && $password != "" && $token != "") {
                //前后表名不一致，保证安全性
                $result = db('users', [], false)
                    ->update([
                        'id' => $id,
                        'username' => $username,
                        'password' => $password,
                        'token' => $token,
                        'money' => $money
                    ]);
            }
        }
        else if ($table == "good") {
            $id = input('c0');
            $name = input('c1');
            $count = input('c2');
            $status = input('c3');
            $pic = input('c4');
            $price = input('c5');
            //初步判定值合法性
            if (is_numeric($id) && is_numeric($status) && is_numeric($count) && is_numeric($price) && $name != "") {
                //前后表名不一致，保证安全性
                $result = db('goods', [], false)
                    ->update([
                        'id' => $id,
                        'name' => $name,
                        'count' => $count,
                        'status' => $status,
                        'pic' => $pic,
                        'price' => $price
                    ]);
            }
        }
        else if ($table == "order") {
            $id = input('c0');
            $user_id = input('c1');
            $user_name = input('c2');
            $goods_id = input('c3');
            $goods_name = input('c4');
            $number = input('c5');
            //初步判定值合法性
            if (is_numeric($id) && is_numeric($user_id) && is_numeric($goods_id) && is_numeric($price) && $user_name != "" && $goods_name != "") {
                //前后表名不一致，保证安全性
                $result = db('list', [], false)
                    ->update([
                        'id' => $id,
                        'user_id' => $user_id,
                        'user_name' => $user_name,
                        'goods_id' => $goods_id,
                        'goods_name' => $goods_name,
                        'number' => $number
                    ]);
            }
        }
        
        if ($result) return "修改成功！";
        else return "修改失败，请重试！";
    }
    
    public function delete() {
        $this->view->engine->layout(false); 
        $table = input('t');
        $id = input('c0');
        $result = 0;
        if ($table == "user") {
            $result = db('users', [], false)->where('id', $id)->delete();
        }
        else if ($table == "good"){
            $result = db('good', [], false)->where('id', $id)->delete();
        }
        else if ($table == "log"){
            $result = db('logs', [], false)->where('id', $id)->delete();
        }
        else if ($table == "order"){
            $result = db('list', [], false)->where('id', $id)->delete();
        }
        if ($result) return "修改成功！";
        else return "修改失败，请重试！";
    }
    
    
    public function add() {
        $t = input('t');
        $this->assign('t', $t);
        return $this->fetch();
    }
    
    public function do_add() {
        $result = 0;
        $table = input('t');
        if ($table == "user") {
            $username = input('c1');
            $password = input('c2');
            $token = input('c3');
            $money = input('c4');
            //前后表名不一致，保证安全性
            $result = db('users', [], false)
                ->insert([
                    'username' => $username,
                    'password' => $password,
                    'token' => $token,
                    'money' => $money
                ]);
        }
        else if ($table == "good") {
            $name = input('c1');
            $count = input('c2');
            $status = input('c3');
            $pic = input('c4');
            $price = input('c5');
            //前后表名不一致，保证安全性
            $result = db('goods', [], false)
                ->insert([
                    'name' => $name,
                    'count' => $count,
                    'status' => $status,
                    'pic' => $pic,
                    'price' => $price
                ]);
        }
        else if ($table == "order") {
            $user_id = input('c1');
            $user_name = input('c2');
            $goods_id = input('c3');
            $goods_name = input('c4');
            $number = input('c5');
            //前后表名不一致，保证安全性
            $result = db('list', [], false)
                ->insert([
                    'user_id' => $user_id,
                    'user_name' => $user_name,
                    'goods_id' => $goods_id,
                    'goods_name' => $goods_name,
                    'number' => $number
                ]);
        }
        
        if ($result) return "添加成功！";
        else return "添加失败，请重试！";
    }
    
    public function check() {
        $code = $_POST['code'];
        if (!captcha_check($code)) {
            return 0;
        }
        return 1;
    }
    
    public function err() {
        return "验证码错误，请重试！";
    }
}
?>
