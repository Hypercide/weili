<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>招聘职位-南昌为力人力资源服务有限公司</title>
    <link rel="stylesheet" href="__CSS__/index/public.css">
    <link rel="stylesheet" href="__CSS__/index/main.css">
    <script src="__JS__/index/jquery-1.8.3.min.js"></script>
</head>
<body>
    <!--header begin-->
    <header class="center">
        <div class="logo left">
            <img src="__PICTURE__/logo.png" alt="logo" width="100%">
        </div>

        <div class="right">
            <p class="tel">全国服务热线：<span>0791-82203969</span>
            </p>

            <div class="lanmu">
                <ul>
                    <li><a href="/" id="hello">网站首页</a>
                    </li>
                    <li><a href="{:url('index/index/aboutus')}" id="aboutus">关于我们</a>
                        <ul>
                            <li><a href="{:url('index/index/aboutus')}">公司简介</a>
                            </li>
                            <li><a href="{:url('index/index/culture')}">企业文化</a>
                            </li>
                            <li><a href="{:url('index/index/honor')}">荣誉资质</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="{:url('index/index/news')}" id="news">新闻资讯</a>
                        <ul>
                            <li><a href="{:url('index/index/news','newstype=公司动态')}">公司动态</a>
                            </li>
                            <li><a href="{:url('index/index/news','newstype=行业快讯')}">行业快讯</a>
                            </li>
                            <li><a href="{:url('index/index/news','newstype=政策法规')}">政策法规</a>
                            </li>
                            <li><a href="{:url('index/index/news','newstype=员工关系')}">员工关系</a>
                            </li>
                            <li><a href="{:url('index/index/news','newstype=薪酬福利')}">薪酬福利</a>
                            </li>
                            <li><a href="{:url('index/index/news','newstype=劳务维权')}">劳务维权</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{:url('index/index/entservice1')}" id="entservice">企业服务</a>
                        <ul>
                            <li><a href="{:url('index/index/entservice1')}">劳务派遣</a>
                            </li>
                            <li><a href="{:url('index/index/entservice2')}">服务外包</a>
                            </li>
                            <li><a href="{:url('index/index/entservice3')}">人事代理</a>
                            </li>
                            <li><a href="{:url('index/index/entservice4')}">人才招聘</a>
                            </li>
                            <li><a href="{:url('index/index/entservice5')}">灵活用工</a>
                            </li>
                            <li><a href="{:url('index/index/entservice6')}">人才培训</a>
                            </li>
                            <li><a href="{:url('index/index/entservice7')}">代交社保</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{:url('index/index/staffservice')}" id="staffservice">员工服务</a>
                        <ul>
                            <li><a href="{:url('index/index/staffservice','newstype=入职手续')}"'>入职手续</a>
                            </li>
                            <li><a href="{:url('index/index/staffservice','newstype=离职手续')}"'>离职手续</a>
                            </li>
                            <li><a href="{:url('index/index/staffservice','newstype=办事指南')}"'>办事指南</a>
                            </li>
                            <li><a href="{:url('index/index/staffservice','newstype=社保基金')}"'>社保基金</a>
                            </li>
                            <li><a href="{:url('index/index/staffservice','newstype=通告专栏')}"'>通告专栏</a>
                            </li>
                            <li><a href="{:url('index/index/staffservice','newstype=学历提升')}"'>学历提升</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="{:url('index/index/jobs')}" id="recruit" class="on">求职招聘</a>
                    </li>
                    <li><a href="{:url('index/index/contactus')}" id="contactus">联系我们</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <script>
        $(function () {
            $(".lanmu>ul>li").hover(
                function () {
                    var _w = $(this).outerWidth(true);
                    $(this).children("ul").width(_w);
                }
            );
        })
    </script>
    <!--header end-->
    <!--banner end-->
    <div class="banner1">
        <img src="__PICTURE__/banner2.jpg" alt="banner">
    </div>

    <div class="main center">
        <div class="main_tit">
            <h2>求职招聘</h2>
            <img src="__PICTURE__/jian.png" alt="">
            <p>提供最有价值的人力资源服务和解决方案，持续为客户创造最大价值</p>
            <!-- <ul>
                <li class="on"><a>招聘信息</a>
                </li>
            </ul> -->
        </div>
        <div class="join_us">
            <ul id="xingxi">
                <li>
                    <dd width="395">招聘岗位</dd>
                    <dd width="180">招聘部门</dd>
                    <dd width="140">学历要求</dd>
                    <dd width="150">预计薪资</dd>
                    <dd width="140">聘人数</dd>
                    <dd width="170">发布时间</dd>
                </li>
                {volist name="result" id="vo"}
                    <li class='bg1'>
                        <dd>{$vo.position}</dd>
                        <dd>{$vo.department}</dd>
                        <dd>{$vo.education}</dd>
                        <dd>{$vo.payment}</dd>
                        <dd>{$vo.number}</dd>
                        <dd>{$vo.addtime}</dd>
                        <ul class='xiangxi'>
                            <li>
                                <h5>岗位职责：</h5> 
                                <span style="font-size:14px;">{$vo.duty}</span>
                            </li>
                            <li>
                                <h5>岗位要求：</h5> 
                                <span style="font-size:14px;">{$vo.requirement|raw}</span>
                            </li>
                            <li>
                                <h5>福利待遇：</h5> 
                                <span style="font-size:14px;">{$vo.treatment}</span> 
                            </li>
                        </ul>
                    </li>
                {/volist}
            </ul>
        </div>
        {$result|raw}
    </div>
    <script>
        $("#xingxi > li").click(function () {
            if ($(this).attr("class") == 'bg1') {
                $(this).removeClass("bg1").addClass("bg2");
            } else {
                $(this).removeClass("bg2").addClass("bg1");
            }
            $(this).children(".xiangxi").toggle();
        })
    </script>
    <!--主内容 end-->
    <!--底部 begin-->
    <div style="clear: both;"></div>
    <footer>
        <div class="foot center">
            <div class="foot_xinxi">
                <h2>南昌为力人力资源服务有限公司</h2>
                <p>联系电话： 0791-82203970</p>
                <p>邮箱： 512763522@qq.com</p>
                <p>QQ：512763522</p>
                <p>地址：江西省南昌市顺外路君嘉广场1号楼10楼　　备案号：赣ICP备18012679号</p>
                <p>版权所有 © 2018-2019南昌为力人力资源服务有限公司　　技术支持：<a href="http://www.ncyateng.com" target="_blank">南昌雅腾信息科技有限公司</a>
                </p>
            </div>
            <img src="__PICTURE__/ewm.jpg">
        </div>
    </footer>
    <!--底部 end-->
</body>

</html>