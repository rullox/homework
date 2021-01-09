<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:77:"/www/wwwroot/www.homework.com/public/../application/index/view/buy/index.html";i:1609422223;}*/ ?>
<!doctype html>
<html class="x-admin-sm">
<head>
    <script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
    <meta charset="UTF-8">
    <title>名酒抢抢抢！</title>
</head>
<body>
    您想购买的是<?php echo $goods_id; ?>号商品<?php echo $goods_name; ?>。<br />
    商品价格为<?php echo $goods_price; ?>元。<br />
    您确定要预定并支付吗？<br /><br />
    请输入验证码：<input type="" id="code"/><br />
    <img src="/captcha" onclick="this.src='/captcha'" alt="验证码" title="点击直接刷新" ><br />
    <a onclick="check()"><button>确认支付</button></a><br />
    <a href="<?php echo url('@index/platform/index'); ?>"><button>再等等</button></a>
    <script type="text/javascript" charset="utf-8">
        function check() {
            console.log($("#code").val());
            window.location.href = "<?php echo url('@index/buy/dobuy'); ?>" + "?code=" + $("#code").val();
        }
    </script>
</body>
</html>
