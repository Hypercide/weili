<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>新闻资讯-南昌为力人力资源服务有限公司</title>
    <link rel="stylesheet" href="__CSS__/index/public.css">
    <link rel="stylesheet" href="__CSS__/index/main.css">
    <script src="__JS__/index/jquery-1.8.3.min.js"></script>

    <body>
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
                        <li><a href="{:url('index/index/news')}" id="news" class="on">新闻资讯</a>
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
                        <li><a href="{:url('index/index/jobs')}" id="recruit">求职招聘</a>
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
        <div class="banner1">
            <img src="__PICTURE__/banner3.jpg" alt="banner">
        </div>
        <div class="main center">
            <div class="main_tit">
                <h2>新闻资讯</h2>
                <img src="__PICTURE__/jian.png" alt="">
                <p>提供最有价值的人力资源服务和解决方案，持续为客户创造最大价值</p>
                <ul>
                    <li><a href='http://www.jxwlrl.com/news/67'>薪酬福利</a>
                    </li>
                    <li><a href='http://www.jxwlrl.com/news/66'>员工关系</a>
                    </li>
                    <li><a href='http://www.jxwlrl.com/news/53'>公司动态</a>
                    </li>
                    <li><a href='http://www.jxwlrl.com/news/54'>行业快讯</a>
                    </li>
                    <li><a href='http://www.jxwlrl.com/news/58'>政策法规</a>
                    </li>
                    <li><a href='http://www.jxwlrl.com/news/68'>劳务维权</a>
                    </li>
                </ul>
            </div>


            <div class="qzzp_ms_list">
                <ul>
                    <!-- <li>
                        <div>
                            <b>05</b> 
                            <span>2019-03</span> 
                        </div>
                        <a href='http://www.jxwlrl.com/news/show/200'>
                            <h2>2018年江西省人力资源服务机构 年度报告相关情况公示表</h2> 
                            <p>2018年江西省人力资源服务机构 年度报告相关情况公示表</p>
                        </a>
                    </li> -->
                    {volist name="result" id="vo"}
                        <li>
                        <div>
                            <b>05</b> 
                            <span>2019-03</span> 
                        </div>
                        <a href="{:url('index/index/newscontent','id='.$vo['id'])}">
                            <h2 class="linelimit">{$vo.title}</h2>
                            <span class="contentspan">{$vo.content|raw}</span>
                        </a>
                        </li>
                    {/volist}
                </ul>
            </div>
            {$result|raw}
            <!-- <div class="paging">
                <a>共 14 页, 每页显示5条</a>    <b>1</b><a onclick="this.blur()" href="/news?page=2">2</a><a onclick="this.blur()" href="/news?page=3">3</a><a onclick="this.blur()" href="/news?page=4">4</a><a onclick="this.blur()" href="/news?page=5">5</a><a onclick="this.blur()" href="/news?page=6">6</a><a onclick="this.blur()" href="/news?page=7">7</a><a onclick="this.blur()" href="/news?page=8">8</a><a onclick="this.blur()" href="/news?page=9">9</a><a onclick="this.blur()" href="/news?page=10">10</a><a href="/news?page=2" onclick="this.blur()" class="next">下一页</a><a onclick="this.blur()" href="/news?page=14">末页</a> 
            </div> -->
        </div>




        <!-- 友情链接 -->

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
    </body>

</html>