<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:86:"/www/wwwroot/www.homework-admin.com/public/../application/index/view/platform/add.html";i:1609424361;s:70:"/www/wwwroot/www.homework-admin.com/application/index/view/layout.html";i:1609316590;}*/ ?>
<!doctype html>
<html class="x-admin-sm">
    <head>
        <meta charset="UTF-8">
        <title>秒杀程序后台管理系统</title>
        <meta name="renderer" content="webkit|ie-comp|ie-stand">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta http-equiv="Cache-Control" content="no-siteapp" />
        <link rel="stylesheet" href="/static/css/font.css">
        <link rel="stylesheet" href="/static/css/xadmin.css">
        <!-- <link rel="stylesheet" href="./css/theme5.css"> -->
        <script src="/static/lib/layui/layui.js" charset="utf-8"></script>
        <script type="text/javascript" src="/static/js/xadmin.js"></script>
        <script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
        <!-- 让IE8/9支持媒体查询，从而兼容栅格 
        <script src="https://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
        <script src="https://cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>
        -->

    </head>
    <body class="index">
        <!-- 顶部开始 -->
        <div class="container">
            <div class="logo">
                <a href="<?php echo url('@index/platform/index'); ?>">秒杀程序后台管理系统</a></div>
            <div class="left_open">
                <a><i title="展开左侧栏" class="iconfont">&#xe699;</i></a>
            </div>
            <ul class="layui-nav right" lay-filter="">
                <li class="layui-nav-item">
                    <a href="javascript:;"><?php echo $username; ?></a>
                    <dl class="layui-nav-child">
                        <!-- 二级菜单 -->
                        <dd>
                            <a onclick="xadmin.open('个人信息','http://www.baidu.com')">个人信息</a></dd>
                        <dd>
                            <a onclick="xadmin.open('切换帐号','http://www.baidu.com')">切换帐号</a></dd>
                        <dd>
                            <a href="./login.html">退出</a></dd>
                    </dl>
                </li>
                <li class="layui-nav-item to-index">
                    <a href="<?php echo url('@index/index/index'); ?>">前台首页</a></li>
            </ul>
        </div>
        <!-- 顶部结束 -->
        <!-- 中部开始 -->
        <!-- 左侧菜单开始 -->
        <div class="left-nav">
            <div id="side-nav">
                <ul id="nav">
                    <li>
                        <a href="javascript:;">
                            <i class="iconfont left-nav-li" lay-tips="信息管理">&#xe6b8;</i>
                            <cite>信息管理</cite>
                            <i class="iconfont nav_right">&#xe697;</i>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="<?php echo url('@index/platform/index'); ?>">
                                    <i class="iconfont">&#xe6a7;</i>
                                    <cite>用户账号信息管理</cite></a>
                            </li>
                            <li>
                                <a href="<?php echo url('@index/platform/good'); ?>">
                                    <i class="iconfont">&#xe6a7;</i>
                                    <cite>商品信息管理</cite></a>
                            </li>
                            <li>
                                <a href="<?php echo url('@index/platform/order'); ?>">
                                    <i class="iconfont">&#xe6a7;</i>
                                    <cite>购买记录管理</cite></a>
                            </li>
                            <li>
                                <a href="<?php echo url('@index/platform/log'); ?>">
                                    <i class="iconfont">&#xe6a7;</i>
                                    <cite>网站日志管理</cite></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <i class="iconfont left-nav-li" lay-tips="其他">&#xe723;</i>
                            <cite>其他</cite>
                            <i class="iconfont nav_right">&#xe697;</i>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="<?php echo url('@index/platform/add'); ?>">
                                    <i class="iconfont">&#xe6a7;</i>
                                    <cite>综合添加处理</cite></a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!-- <div class="x-slide_left"></div> -->
        <!-- 左侧菜单结束 -->
        <!-- 右侧主体开始 -->
        <!doctype html>
<html class="x-admin-sm">
<head>
    <meta charset="UTF-8">
    <title>秒杀网站管理系统</title>
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="stylesheet" href="/static/css/font.css">
    <link rel="stylesheet" href="/static/css/xadmin.css">
    <!-- <link rel="stylesheet" href="./css/theme5.css"> -->
    <script src="/static/lib/layui/layui.js" charset="utf-8"></script>
    <script type="text/javascript" src="/static/js/xadmin.js"></script>
    <script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
    <!-- 让IE8/9支持媒体查询，从而兼容栅格 
    <script src="https://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
    <script src="https://cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>
    -->
</head>
<body>
    <!-- 右侧主体开始 -->
    <div class="page-content">
        <div class="layui-tab tab" lay-filter="xbs_tab" lay-allowclose="false">
            <ul class="layui-tab-title">
                <li class="home">
                    <i class="layui-icon">&#xe68e;</i>HOME</li></ul>
            <div class="layui-unselect layui-form-select layui-form-selected" id="tab_right">
                <dl>
                    <dd data-type="this">关闭当前</dd>
                    <dd data-type="other">关闭其它</dd>
                    <dd data-type="all">关闭全部</dd></dl>
            </div>
            <div class="layui-tab-content">
                <div class="x-nav">
                    <span class="layui-breadcrumb" style="visibility: visible;">
                        <a href="">首页</a><span lay-separator="">/</span>
                        <a><cite>秒杀网站管理系统</cite></a>
                    </span>
                    <a class="layui-btn layui-btn-small" style="line-height:1.6em;margin-top:3px;float:right" onclick="location.reload()" title="刷新">
                    <i class="layui-icon layui-icon-refresh" style="line-height:30px"></i></a>
                </div>
                <div class="layui-fluid">
                    
                    <div class = "layui-card">
                        <div class="layui-card-header">
                            <legend><a name="default">综合添加处理</a></legend>
                        </div>
                        <div id = "table_div" class = "layui-card-body layui-table-body layui-table-main">
                            <b>信息模块：</b><br />
                            <select id = "table_select" onchange="select_change()">
                                <option id = "option_user" value = "user">用户信息</option>
                                <option id = "option_good" value = "good">商品信息</option>
                                <option id = "option_order" value = "order">订单信息</option>
                            </select>
                            <br /><br />
                            <b>信息添加：</b><br />
                            <p id = "c0_text"></p><input type="text" id="c0" />
                            <p id = "c1_text"></p><input type="text" id="c1" />
                            <p id = "c2_text"></p><input type="text" id="c2" />
                            <p id = "c3_text"></p><input type="text" id="c3" />
                            <p id = "c4_text"></p><input type="text" id="c4" />
                            <p id = "c5_text"></p><input type="text" id="c5" />
                            <br /><br />
                            请输入验证码：<br /> 
                            <img src="/captcha" onclick="this.src='/captcha'" alt="验证码" title="点击直接刷新" ><br /> 
                            <input type="" id="code"/><br /><br />
                            <input type="submit" value="提交信息" onclick = "do_add()"/>
                            
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="page-content-bg"></div>
    <style id="theme_style"></style>
    <!-- 右侧主体结束 -->
    <!-- 中部结束 -->
    
    <script type="text/javascript" charset="utf-8">
    
    
    var option_id;
    if ('<?php echo $t; ?>' == '') 
        option_id = 'option_user';
    else
        option_id = 'option_<?php echo $t; ?>';
    var option = document.getElementById(option_id);
    option.selected = true;  
    select_change();
    
    
    function do_add(){
        $.ajax({
            url: "/index/platform/check",
            type: 'POST',
            data: {code: document.getElementById("code").value},
            success: function (flag) {
                if (flag == 0) {
                    xadmin.open('验证码错误', "<?php echo url('@index/platform/err'); ?>", 600, 400);
                }
                else{
                    var c1 = document.getElementById("c1").value;
                    var c2 = document.getElementById("c2").value;
                    var c3 = document.getElementById("c3").value;
                    var c4 = document.getElementById("c4").value;
                    var c5;
                    var url;
                    
                    if (document.getElementById("c5").style.display == "none") {
                        url = "<?php echo url('@index/platform/do_add', 't=_t&c1=_c1&c2=_c2&c3=_c3&c4=_c4'); ?>";
                    }
                    else {
                        c5 = document.getElementById("c5").value;
                        url = "<?php echo url('@index/platform/do_add', 't=_t&c1=_c1&c2=_c2&c3=_c3&c4=_c4&c5=_c5'); ?>";
                        url = url.replace('_c5', c5);
                    }
                    
                    url = url.replace('_t', "<?php echo $t; ?>");
                    url = url.replace('_c1', c1);
                    url = url.replace('_c2', c2);
                    url = url.replace('_c3', c3);
                    url = url.replace('_c4', c4);
                    
                    xadmin.open('提交添加记录申请', url, 600, 400);
                }
            }
        })
    }
    
    function select_change() {
        var c0 = document.getElementById("c0");
        var c5 = document.getElementById("c5");
        var c0_text = document.getElementById("c0_text");
        var c1_text = document.getElementById("c1_text");
        var c2_text = document.getElementById("c2_text");
        var c3_text = document.getElementById("c3_text");
        var c4_text = document.getElementById("c4_text");
        var c5_text = document.getElementById("c5_text");
        if ($("#table_select").find("option:selected").val() == "user") {
            c0_text.innerHTML = "id:";
            c1_text.innerHTML = "username:";
            c2_text.innerHTML = "password:";
            c3_text.innerHTML = "token:";
            c4_text.innerHTML = "money:";
            c5_text.style.display = "none"
            c0.disabled = "disabled";
            c5.style.display = "none"
        }
        else if ($("#table_select").find("option:selected").val() == "good") {
            c0_text.innerHTML = "id:";
            c1_text.innerHTML = "name:";
            c2_text.innerHTML = "count:";
            c3_text.innerHTML = "status:";
            c4_text.innerHTML = "pic:";
            c5_text.innerHTML = "price:";
            c0.disabled = "disabled";
        }
        else if ($("#table_select").find("option:selected").val() == "order") {
            c0_text.innerHTML = "id:";
            c1_text.innerHTML = "user_id:";
            c2_text.innerHTML = "user_name:";
            c3_text.innerHTML = "goods_id:";
            c4_text.innerHTML = "goods_name:";
            c5_text.innerHTML = "number:";
            c0.disabled = "disabled";
        }
    }
    
    </script>

</body>


</html>

        <!-- 右侧主体结束 -->
        <!-- 中部结束 -->
        
    </body>
    
</html>