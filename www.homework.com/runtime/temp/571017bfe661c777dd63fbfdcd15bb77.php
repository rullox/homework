<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:81:"/www/wwwroot/www.homework.com/public/../application/index/view/platform/list.html";i:1608969045;s:64:"/www/wwwroot/www.homework.com/application/index/view/layout.html";i:1608966678;}*/ ?>
<!doctype html>
<html class="x-admin-sm">
    <head>
        <meta charset="UTF-8">
        <title>名酒抢抢抢！</title>
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
                <a href="<?php echo url('@index/platform/index'); ?>">名酒抢购系统</a></div>
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
                            <i class="iconfont left-nav-li" lay-tips="我要购买">&#xe6b8;</i>
                            <cite>我要购买</cite>
                            <i class="iconfont nav_right">&#xe697;</i>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="<?php echo url('@index/platform/index'); ?>">
                                    <i class="iconfont">&#xe6a7;</i>
                                    <cite>立即购买</cite></a>
                            </li>
                            <li>
                                <a href="<?php echo url('@index/platform/list'); ?>">
                                    <i class="iconfont">&#xe6a7;</i>
                                    <cite>购买记录</cite></a>
                            </li>
                            <li>
                                <a href="">
                                    <i class="iconfont">&#xe6a7;</i>
                                    <cite>我的购物车</cite></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <i class="iconfont left-nav-li" lay-tips="其他">&#xe723;</i>
                            <cite>其他</cite>
                            <i class="iconfont nav_right">&#xe697;</i>
                        </a>
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
    <title>名酒抢抢抢！</title>
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="stylesheet" href="/static/css/font.css">
    <link rel="stylesheet" href="/static/css/xadmin.css">
    <!-- <link rel="stylesheet" href="./css/theme5.css"> -->
    <script src="/static/lib/layui/layui.js" charset="utf-8"></script>
    <script type="text/javascript" src="/static/js/xadmin.js"></script>
    <!-- 让IE8/9支持媒体查询，从而兼容栅格 -->
    <script src="https://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
    <script src="https://cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>

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
                        <a><cite>名酒抢购系统</cite></a>
                    </span>
                    <a class="layui-btn layui-btn-small" style="line-height:1.6em;margin-top:3px;float:right" onclick="location.reload()" title="刷新">
                    <i class="layui-icon layui-icon-refresh" style="line-height:30px"></i></a>
                </div>
                <div class="layui-fluid">
                    
                    <div class = "layui-card">
                        <div class="layui-card-header">
                            <legend><a name="default">您的购买记录</a></legend>
                        </div>
                        <div class = "layui-card-body layui-table-body layui-table-main">
                            
                            <!--
                            <iframe src='./welcome.html' frameborder="0" scrolling="yes" class="x-iframe"></iframe>
                            -->
                            <table class="layui-table">
                                <thead>
                                    <tr>
                                        <th>用户名</th>
                                        <th>商品序号</th>
                                        <th>商品名</th>
                                        <th>订单号</th>
                                        <th>购物时间</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                    <tr>
                                        <td><?php echo $vo['user_name']; ?></td>
                                        <td><?php echo $vo['goods_id']; ?></td>
                                        <td><?php echo $vo['goods_name']; ?></td>
                                        <td><?php echo $vo['number']; ?></td>
                                        <script type="text/javascript">
                                            var number = "" + <?php echo $vo['number']; ?>;
                                            document.write(
                                                '<td>' 
                                                + number.substring(0, 4) + "年"
                                                + number.substring(4, 6) + "月"
                                                + number.substring(6, 8) + "日"
                                                + number.substring(8, 10) + "时"
                                                + number.substring(10, 12) + "分"
                                                + number.substring(12, 14) + "秒"
                                                + '</td>');
                                        </script>
                                    </tr>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div id="tab_show"></div>
        </div>
    </div>
    <div class="page-content-bg"></div>
    <style id="theme_style"></style>
    <!-- 右侧主体结束 -->
    <!-- 中部结束 -->
    

</body>


</html>

        <!-- 右侧主体结束 -->
        <!-- 中部结束 -->
        
        <script type="text/javascript" charset="utf-8">
        </script>
        
    </body>
    
</html>