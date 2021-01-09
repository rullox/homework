<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:88:"/www/wwwroot/www.homework-admin.com/public/../application/index/view/platform/index.html";i:1609500316;s:70:"/www/wwwroot/www.homework-admin.com/application/index/view/layout.html";i:1609316590;}*/ ?>
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
                            <legend><a name="default">用户管理</a></legend>
                        </div>
                        <div id = "table_div" class = "layui-card-body layui-table-body layui-table-main">
                            <div id="code_div">
                                <img src="/captcha" onclick="this.src='/captcha'" alt="验证码" title="点击直接刷新" >
                            </div>
                            <br /> 
                            <button class="layui-btn" onclick="add_user()">
                                <i class="layui-icon"></i>添加用户
                            </button>
                            <br /> 
                            <table class="layui-table" id = "my_table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>用户名</th>
                                        <th>用户密码</th>
                                        <th>token</th>
                                        <th>剩余钱数</th>
                                        <th>修改操作</th>
                                        <th>删除操作</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                    <tr contentEditable="false">
                                        <td><?php echo $vo['id']; ?></td>
                                        <td><?php echo $vo['username']; ?></td>
                                        <td><?php echo $vo['password']; ?></td>
                                        <td><?php echo $vo['token']; ?></td>
                                        <td><?php echo $vo['money']; ?></td>
                                        <td>
                                            <script type="text/javascript">
                                                var id = "<?php echo $vo['id']; ?>";
                                                document.write('<a href="javascript:void(0);" onclick="change_user(' + id
                                                    + ', this)"><span class="layui-btn layui-btn-normal layui-btn-mini">修改信息</span></a>');
                                            </script>
                                        </td>
                                        <td>
                                            <script type="text/javascript">
                                                var id = "<?php echo $vo['id']; ?>";
                                                document.write('<a href="javascript:void(0);" onclick="delete_user(' + id
                                                    + ', this)"><span class="layui-btn layui-btn-normal layui-btn-mini">删除用户</span></a>');
                                            </script>
                                        </td>
                                    </tr>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </tbody>
                            </table>
                        
                        
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

    function change_user(id, obj) {
        var td = obj.parentNode;
        var tr = td.parentNode;
        tr.contentEditable = true;
        var id_str = 'save_button_' + id;
        if (!document.getElementById(id_str)) {
            td.innerHTML += ' <a id = "' + id_str + '" href="javascript:void(0);" onclick="save_user(this)"><span class="layui-btn layui-btn-normal layui-btn-mini">保存信息</span></a>';
        }
    }
    
    function save_user(obj) {
        var code = window.prompt("请输入左侧验证码","");
        if (code) {
            $.ajax({
                url: "/index/platform/check",
                type: 'POST',
                data: {"code": code},
                success: function (flag) {
                    if (flag == 0) {
                        xadmin.open('验证码错误', "<?php echo url('@index/platform/err'); ?>", 600, 400);
                    }
                    else{
                        var td = obj.parentNode;
                        var tr = td.parentNode;
                        var c0 = "";
                        var c1 = "";
                        var c2 = "";
                        var c3 = "none";
                        var c4 = "";
                        if (tr.cells[0].childNodes[0]) c0 = tr.cells[0].childNodes[0].data; 
                        if (tr.cells[1].childNodes[0]) c1 = tr.cells[1].childNodes[0].data;
                        if (tr.cells[2].childNodes[0]) c2 = tr.cells[2].childNodes[0].data;
                        if (tr.cells[3].childNodes[0]) c3 = tr.cells[3].childNodes[0].data;
                        if (tr.cells[4].childNodes[0]) c4 = tr.cells[4].childNodes[0].data;
                        var url = "<?php echo url('@index/platform/save', 't=user&c0=_c0&c1=_c1&c2=_c2&c3=_c3&c4=_c4'); ?>";
                        url = url.replace('_c0', c0);
                        url = url.replace('_c1', c1);
                        url = url.replace('_c2', c2);
                        url = url.replace('_c3', c3);
                        url = url.replace('_c4', c4);
                        xadmin.open('保存', url, 600, 400);
                        td.removeChild(obj);
                        tr.contentEditable = false;
                    }
                }
            })
        }
    }
    
    function delete_user(id, obj) {
        var code = window.prompt("请输入左侧验证码","");
        if (code) {
            $.ajax({
                url: "/index/platform/check",
                type: 'POST',
                data: {"code": code},
                success: function (flag) {
                    if (flag == 0) {
                        xadmin.open('验证码错误', "<?php echo url('@index/platform/err'); ?>", 600, 400);
                    }
                    else{
                        var tr = obj.parentNode.parentNode;
                        var url = "<?php echo url('@index/platform/delete', 't=user&c0=_c0'); ?>";
                        url = url.replace('_c0', id);
                        xadmin.open('删除', url, 600, 400);
                        tr.parentNode.removeChild(tr);
                    }
                }
            })
        }
    }
    
    function add_user() {
        window.location.href = "<?php echo url('@index/platform/add'); ?>" + "?t=user";
    }
    </script>

</body>


</html>

        <!-- 右侧主体结束 -->
        <!-- 中部结束 -->
        
    </body>
    
</html>