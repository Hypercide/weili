<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>为力后台管理系统</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="stylesheet" href="__LAYUI__/layui/css/layui.css" media="all">
    <link rel="stylesheet" href="__LAYUI__/style/admin.css" media="all">
</head>
<body class="layui-layout-body">
    <div id="LAY_app">
        <div class="layui-layout layui-layout-admin">
            <div class="layui-header">
                <!-- 头部区域 -->
                <ul class="layui-nav layui-layout-left">
                    <li class="layui-nav-item layadmin-flexible" lay-unselect>
                        <a href="javascript:;" layadmin-event="flexible" title="侧边伸缩">
                            <i class="layui-icon layui-icon-shrink-right" id="LAY_app_flexible"></i>
                        </a>
                    </li>
                    <li class="layui-nav-item layui-hide-xs" lay-unselect>
                        <a href="http://www.layui.com/admin/" target="_blank" title="前台">
                            <i class="layui-icon layui-icon-website"></i>
                        </a>
                    </li>
                    <li class="layui-nav-item" lay-unselect>
                        <a href="javascript:;" layadmin-event="refresh" title="刷新">
                            <i class="layui-icon layui-icon-refresh-3"></i>
                        </a>
                    </li>
                </ul>
                <ul class="layui-nav layui-layout-right" lay-filter="layadmin-layout-right">

                    <li class="layui-nav-item layui-hide-xs" lay-unselect>
                        <a href="javascript:;" layadmin-event="theme">
                            <i class="layui-icon layui-icon-theme"></i>
                        </a>
                    </li>
                    <li class="layui-nav-item layui-hide-xs" lay-unselect>
                        <a href="javascript:;" layadmin-event="note">
                            <i class="layui-icon layui-icon-note"></i>
                        </a>
                    </li>
                    <li class="layui-nav-item layui-hide-xs" lay-unselect>
                        <a href="javascript:;" layadmin-event="fullscreen">
                            <i class="layui-icon layui-icon-screen-full"></i>
                        </a>
                    </li>
                    <li class="layui-nav-item" lay-unselect>
                        <a href="javascript:;">
                            <cite>{$logname}</cite>
                        </a>
                        <dl class="layui-nav-child">
                            <dd><a lay-href="">基本资料</a>
                            </dd>
                            <dd><a lay-href="{:url('admin/user/editpwd')}">修改密码</a>
                            </dd>
                            <hr>
                            <dd layadmin-event="logout" style="text-align: center;"><a lay-href="{:url('admin/login/logout')}">退出</a>
                            </dd>
                        </dl>
                    </li>

                    <li class="layui-nav-item layui-hide-xs" lay-unselect>
                        <a href="javascript:;" layadmin-event="about"><i class="layui-icon layui-icon-more-vertical"></i></a>
                    </li>
                    <li class="layui-nav-item layui-show-xs-inline-block layui-hide-sm" lay-unselect>
                        <a href="javascript:;" layadmin-event="more"><i class="layui-icon layui-icon-more-vertical"></i></a>
                    </li>
                </ul>
            </div>

            <!-- 侧边菜单 -->
            <div class="layui-side layui-side-menu">
                <div class="layui-side-scroll">
                    <div class="layui-logo" lay-href="{:url('admin/homepage/console')}">
                        <span>为力后台管理系统</span>
                    </div>

                    <ul class="layui-nav layui-nav-tree" lay-shrink="all" id="LAY-system-side-menu" lay-filter="layadmin-system-side-menu">
                        <li data-name="home" class="layui-nav-item layui-nav-itemed">
                            <a href="javascript:;" lay-tips="主页" lay-direction="2">
                                <i class="layui-icon layui-icon-home"></i>
                                <cite>内容管理</cite>
                            </a>
                            <dl class="layui-nav-child">
                                <dd data-name="console" class="layui-this">
                                    <a lay-href="{:url('admin/homepage/console')}">控制台</a>
                                </dd>
                                <dd data-name="console">
                                    <a lay-href="{:url('admin/newsinfo/index')}">新闻资讯</a>
                                </dd>
                                <dd data-name="console">
                                    <a lay-href="{:url('admin/staffinfo/index')}">员工服务</a>
                                </dd>
                                <dd data-name="console">
                                    <a lay-href="{:url('admin/jobinfo/index')}">招聘信息</a>
                                </dd>
                            </dl>
                        </li>
                        <li data-name="component" class="layui-nav-item">
                            <a href="javascript:;" lay-tips="组件" lay-direction="2">
                                <i class="layui-icon layui-icon-component"></i>
                                <cite>用户管理</cite>
                            </a>
                            <dl class="layui-nav-child">
                                <dd data-name="button">
                                    <a lay-href="{:url('admin/user/index')}">用户列表</a>
                                </dd>
                                <dd data-name="button">
                                    <a lay-href="{:url('admin/user/editpwd')}">修改密码</a>
                                </dd>
                            </dl>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- 页面标签 -->
            <div class="layadmin-pagetabs" id="LAY_app_tabs">
                <div class="layui-icon layadmin-tabs-control layui-icon-prev" layadmin-event="leftPage"></div>
                <div class="layui-icon layadmin-tabs-control layui-icon-next" layadmin-event="rightPage"></div>
                <div class="layui-icon layadmin-tabs-control layui-icon-down">
                    <ul class="layui-nav layadmin-tabs-select" lay-filter="layadmin-pagetabs-nav">
                        <li class="layui-nav-item" lay-unselect>
                            <a href="javascript:;"></a>
                            <dl class="layui-nav-child layui-anim-fadein">
                                <dd layadmin-event="closeThisTabs"><a href="javascript:;">关闭当前标签页</a>
                                </dd>
                                <dd layadmin-event="closeOtherTabs"><a href="javascript:;">关闭其它标签页</a>
                                </dd>
                                <dd layadmin-event="closeAllTabs"><a href="javascript:;">关闭全部标签页</a>
                                </dd>
                            </dl>
                        </li>
                    </ul>
                </div>
                <div class="layui-tab" lay-unauto lay-allowClose="true" lay-filter="layadmin-layout-tabs">
                    <ul class="layui-tab-title" id="LAY_app_tabsheader">
                        <li lay-id="home/console.html" lay-attr="home/console.html" class="layui-this"><i class="layui-icon layui-icon-home"></i>
                        </li>
                    </ul>
                </div>
            </div>


            <!-- 主体内容 -->
            <div class="layui-body" id="LAY_app_body">
                <div class="layadmin-tabsbody-item layui-show">
                    <iframe src="{:url('admin/homepage/console')}" frameborder="0" class="layadmin-iframe"></iframe>
                </div>
            </div>

            <!-- 辅助元素，一般用于移动设备下遮罩 -->
            <div class="layadmin-body-shade" layadmin-event="shade"></div>
        </div>
    </div>

    <script src="__LAYUI__/layui/layui.js"></script>
    <script>
        layui.config({
            base: '__LAYUI__/' //静态资源所在路径
        }).extend({
            index: 'lib/index' //主入口模块
        }).use('index');
    </script>

    <!-- 百度统计 -->
    <script>
        var _hmt = _hmt || [];
        (function () {
            var hm = document.createElement("script");
            hm.src = "https://hm.baidu.com/hm.js?d214947968792b839fd669a4decaaffc";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    </script>
</body>

</html>