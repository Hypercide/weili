<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>DedsecAdmin 控制台主页一</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="stylesheet" href="__LAYUI__/layui/css/layui.css" media="all">
    <link rel="stylesheet" href="__LAYUI__/style/admin.css" media="all">
</head>
<body>
    <div class="layui-fluid">
        <div class="layui-row layui-col-space15">
            <div class="layui-col-md8">
                <div class="layui-row layui-col-space15">
                    <div class="layui-col-md6">
                        <div class="layui-card">
                            <div class="layui-card-header">快捷方式</div>
                            <div class="layui-card-body">

                                <div class="layui-carousel layadmin-carousel layadmin-shortcut">
                                    <div carousel-item>
                                        <ul class="layui-row layui-col-space10">
                                            <li class="layui-col-xs3">
                                                <a lay-href="{:url('admin/homepage/console')}">
                                                    <i class="layui-icon layui-icon-survey"></i>
                                                    <cite>控制台</cite>
                                                </a>
                                            </li>
                                            <li class="layui-col-xs3">
                                                <a lay-href="{:url('admin/newsinfo/index')}">
                                                    <i class="layui-icon layui-icon-console"></i>
                                                    <cite>新闻资讯</cite>
                                                </a>
                                            </li>
                                            <li class="layui-col-xs3">
                                                <a lay-href="{:url('admin/staffinfo/index')}">
                                                    <i class="layui-icon layui-icon-chart"></i>
                                                    <cite>员工服务</cite>
                                                </a>
                                            </li>
                                            <li class="layui-col-xs3">
                                                <a lay-href="{:url('admin/jobinfo/index')}">
                                                    <i class="layui-icon layui-icon-template-1"></i>
                                                    <cite>招聘信息</cite>
                                                </a>
                                            </li>
                                            <li class="layui-col-xs3">
                                                <a lay-href="{:url('admin/user/index')}">
                                                    <i class="layui-icon layui-icon-user"></i>
                                                    <cite>用户列表</cite>
                                                </a>
                                            </li>
                                            <li class="layui-col-xs3">
                                                <a lay-href="{:url('admin/user/editpwd')}">
                                                    <i class="layui-icon layui-icon-find-fill"></i>
                                                    <cite>修改密码</cite>
                                                </a>
                                            </li>
                                            <li class="layui-col-xs3">
                                                <a lay-href="user/user/list.html">
                                                    <i class="layui-icon layui-icon-set"></i>
                                                    <cite>占位</cite>
                                                </a>
                                            </li>
                                            <li class="layui-col-xs3">
                                                <a lay-href="set/system/website.html">
                                                    <i class="layui-icon layui-icon-set"></i>
                                                    <cite>占位</cite>
                                                </a>
                                            </li>
                                        </ul>
                                        <ul class="layui-row layui-col-space10">
                                            <li class="layui-col-xs3">
                                                <a lay-href="set/user/info.html">
                                                    <i class="layui-icon layui-icon-set"></i>
                                                    <cite>我的资料</cite>
                                                </a>
                                            </li>
                                            <li class="layui-col-xs3">
                                                <a lay-href="set/user/info.html">
                                                    <i class="layui-icon layui-icon-set"></i>
                                                    <cite>我的资料</cite>
                                                </a>
                                            </li>
                                            <li class="layui-col-xs3">
                                                <a lay-href="set/user/info.html">
                                                    <i class="layui-icon layui-icon-set"></i>
                                                    <cite>我的资料</cite>
                                                </a>
                                            </li>
                                            <li class="layui-col-xs3">
                                                <a lay-href="set/user/info.html">
                                                    <i class="layui-icon layui-icon-set"></i>
                                                    <cite>我的资料</cite>
                                                </a>
                                            </li>
                                            <li class="layui-col-xs3">
                                                <a lay-href="set/user/info.html">
                                                    <i class="layui-icon layui-icon-set"></i>
                                                    <cite>我的资料</cite>
                                                </a>
                                            </li>
                                            <li class="layui-col-xs3">
                                                <a lay-href="set/user/info.html">
                                                    <i class="layui-icon layui-icon-set"></i>
                                                    <cite>我的资料</cite>
                                                </a>
                                            </li>
                                            <li class="layui-col-xs3">
                                                <a lay-href="set/user/info.html">
                                                    <i class="layui-icon layui-icon-set"></i>
                                                    <cite>我的资料</cite>
                                                </a>
                                            </li>
                                            <li class="layui-col-xs3">
                                                <a lay-href="set/user/info.html">
                                                    <i class="layui-icon layui-icon-set"></i>
                                                    <cite>我的资料</cite>
                                                </a>
                                            </li>
                                        </ul>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="layui-col-md6">
                        <div class="layui-card">
                            <div class="layui-card-header">数据统计</div>
                            <div class="layui-card-body">

                                <div class="layui-carousel layadmin-carousel layadmin-backlog">
                                    <div carousel-item>
                                        <ul class="layui-row layui-col-space10">
                                            <li class="layui-col-xs6">
                                                <a lay-href="{:url('admin/newsinfo/index')}" class="layadmin-backlog-body">
                                                    <h3>新闻资讯</h3>
                                                    <p><cite>66</cite>
                                                    </p>
                                                </a>
                                            </li>
                                            <li class="layui-col-xs6">
                                                <a lay-href="{:url('admin/staffinfo/index')}" class="layadmin-backlog-body">
                                                    <h3>员工服务</h3>
                                                    <p><cite>12</cite>
                                                    </p>
                                                </a>
                                            </li>
                                            <li class="layui-col-xs6">
                                                <a lay-href="{:url('admin/jobinfo/index')}" class="layadmin-backlog-body">
                                                    <h3>招聘信息</h3>
                                                    <p><cite>23</cite>
                                                    </p>
                                                </a>
                                            </li>
                                            <li class="layui-col-xs6">
                                                <a href="javascript:;" onclick="layer.tips('不跳转', this, {tips: 3});" class="layadmin-backlog-body">
                                                    <h3>用户列表</h3>
                                                    <p><cite>2</cite>
                                                    </p>
                                                </a>
                                            </li>
                                        </ul>
                                        <ul class="layui-row layui-col-space10">
                                            <li class="layui-col-xs6">
                                                <a href="javascript:;" class="layadmin-backlog-body">
                                                    <h3>待审友情链接</h3>
                                                    <p><cite style="color: #FF5722;">5</cite>
                                                    </p>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="layui-col-md12">
                        <div class="layui-card">
                            <div class="layui-card-header">数据概览</div>
                            <div class="layui-card-body">

                                <div class="layui-carousel layadmin-carousel layadmin-dataview" data-anim="fade" lay-filter="LAY-index-dataview">
                                    <div carousel-item id="LAY-index-dataview">
                                        <div><i class="layui-icon layui-icon-loading1 layadmin-loading"></i>
                                        </div>
                                        <div></div>
                                        <div></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="layui-card">
                            <div class="layui-tab layui-tab-brief layadmin-latestData">
                                <ul class="layui-tab-title">
                                    <li class="layui-this">今日热搜</li>
                                    <li>今日热帖</li>
                                </ul>
                                <div class="layui-tab-content">
                                    <div class="layui-tab-item layui-show">
                                        <table id="LAY-index-topSearch"></table>
                                    </div>
                                    <div class="layui-tab-item">
                                        <table id="LAY-index-topCard"></table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="layui-col-md4">
                <div class="layui-card">
                    <div class="layui-card-header">版本信息</div>
                    <div class="layui-card-body layui-text">
                        <table class="layui-table">
                            <colgroup>
                                <col width="100">
                                    <col>
                            </colgroup>
                            <tbody>
                                <tr>
                                    <td>前端框架</td>
                                    <td>
                                        <script type="text/html" template>
                                            layui - v.2.3.4                                        
                                        </script>
                                    </td>
                                </tr>
                                <tr>
                                    <td>后端框架</td>
                                    <td>
                                        <script type="text/html" template>
                                            ThinkPHP - v.5.1.3                                        
                                        </script>
                                    </td>
                                </tr>
                                <tr>
                                    <td>主要特色</td>
                                    <td>响应式 / 清爽 / 极简</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="layui-card">
                    <div class="layui-card-header">实时监控</div>
                    <div class="layui-card-body layadmin-takerates">
                        <div class="layui-progress" lay-showPercent="yes">
                            <h3>CPU使用率</h3>
                            <div class="layui-progress-bar" lay-percent="58%"></div>
                        </div>
                        <div class="layui-progress" lay-showPercent="yes">
                            <h3>内存占用率</h3>
                            <div class="layui-progress-bar layui-bg-red" lay-percent="90%"></div>
                        </div>
                    </div>
                </div>

                <div class="layui-card">
                    <div class="layui-card-header">产品动态</div>
                    <div class="layui-card-body">
                        <div class="layui-carousel layadmin-carousel layadmin-news" data-autoplay="true" data-anim="fade" lay-filter="news">
                            <div carousel-item>
                                <div><a href="http://fly.layui.com/docs/2/" target="_blank" class="layui-bg-red">为力后台管理系统</a>
                                </div>
                                <div><a href="http://fly.layui.com/vipclub/list/layuiadmin/" target="_blank" class="layui-bg-green">第一个版本</a>
                                </div>
                                <div><a href="http://www.layui.com/admin/#get" target="_blank" class="layui-bg-blue">敬请期待</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script src="__LAYUI__/layui/layui.js?t=1"></script>
    <script>
        layui.config({
            base: '__LAYUI__/' //静态资源所在路径
        }).extend({
            index: 'lib/index' //主入口模块
        }).use(['index', 'console']);
    </script>
</body>

</html>

