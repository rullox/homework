<?php
namespace app\index\controller;

use think\Controller;
use think\Loader;

//Base类中有拦截器判定登录身份
class Buy extends Base {
    
    public function index() {
        $this->view->engine->layout(false);
        $this->assign('username', cookie('username'));
        $this->assign('goods_id', $_GET['id']);
        cookie('goods_id', $_GET['id']);
        $row = db('goods', [], false)->where('id', $_GET['id'])->find();
        $this->assign('goods_name', $row['name']);
        $this->assign('goods_price', $row['price']);
        cookie('goods_price', $row['price']);
        
        return $this->fetch();
    }
    
    public function dobuy() {
        $code = $_GET['code'];
        if (!captcha_check($code)) {
            return $this->error('支付失败！', 'index/platform/index');
        }
        //防止有人修改cookie导致数值错误
        if (!is_numeric(cookie('goods_id')) || !is_numeric(cookie('goods_price'))) {
            return $this->error('支付失败！', 'index/platform/index');
        }
        $this->view->engine->layout(false);
        $row = db('users', [], false)->where('username', cookie('username'))->find();
        if ($row['money'] < cookie('goods_price')) {
            return $this->error('支付失败，您的余额不足！', 'index/platform/index');
        }
        $date = getdate();
        $number = $date['year'].str_pad($date['mon'], 2, "0", STR_PAD_LEFT).str_pad($date['mday'], 2, "0", STR_PAD_LEFT).str_pad($date['hours'], 2, "0", STR_PAD_LEFT).str_pad($date['minutes'], 2, "0", STR_PAD_LEFT).str_pad($date['seconds'], 2, "0", STR_PAD_LEFT).mt_rand(10000, 99999);
        $this->assign('number', $number);
        
        //send msg to go
        $post_data = array(
            'user_id' => $row['id'],
            'goods_id' => cookie('goods_id'),
            'goods_price' => cookie('goods_price'),
            'count' => 1,
            'number' => $number
        );
        $post_data = http_build_query($post_data);
        $url='http://localhost:8787/send';
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_HEADER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/x-www-form-urlencoded'));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); //1: 将curl_exe()获取的信息以字符串返回，而不是直接输出
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $post_data);
        $result = curl_exec($curl);
        curl_close($curl);
        
        return $this->fetch();
    }
    
}
?>
