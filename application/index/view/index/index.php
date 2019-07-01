<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>南昌为力人力资源服务有限公司-主营人力资源服务外包,代招聘,招聘流程外包（HR外包）</title>
    <meta name="keywords" content="服务外包,代招聘,招聘流程外包（HR外包）" />
    <meta name="description" content="主营人力资源服务外包,代招聘,招聘流程外包（HR外包）" />
    <link rel="stylesheet" href="__CSS__/index/public.css">
    <link rel="stylesheet" href="__CSS__/index/main.css">
    <script src="__JS__/index/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="__JS__/index/superslide.2.1.js"></script>
    <link href="__CSS__/index/superslide.2.1.css" rel="stylesheet" type="text/css" />

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
                        <li><a href="/" id="hello" class="on">网站首页</a>
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
        <div class="banner">
            <div class="fullSlide">
                <div class="bd">
                    <ul>
                        <li _src='url(__IMAGES__/2018092840841224795894.jpg)' style='background:#fff center 0 no-repeat;'>
                            <a href=''></a>
                        </li>
                        <li _src='url(__IMAGES__/20180927138262022973776.jpg)' style='background:#fff center 0 no-repeat;'>
                            <a href=''></a>
                        </li>
                        <li _src='url(__IMAGES__/20180927137511722296109.jpg)' style='background:#fff center 0 no-repeat;'>
                            <a href=''></a>
                        </li>
                    </ul>
                </div>

                <div class="hd">
                    <ul></ul>
                </div>
                <span class="prev"></span>
                <span class="next"></span>
            </div>
            <script type="text/javascript">
                /*幻灯 begin*/
                jQuery(".fullSlide").hover(function () {
                        jQuery(this).find(".prev,.next").stop(true, true).fadeTo("show", 0.1)
                    },
                    function () {
                        jQuery(this).find(".prev,.next").fadeOut()
                    });
                jQuery(".fullSlide").slide({
                    titCell: ".hd ul",
                    mainCell: ".bd ul",
                    effect: "fold",
                    autoPlay: true,
                    autoPage: true,
                    trigger: "click",
                    startFun: function (i) {
                        var curLi = jQuery(".fullSlide .bd li").eq(i);
                        if (!!curLi.attr("_src")) {
                            curLi.css("background-image", curLi.attr("_src")).removeAttr("_src")
                        }
                    }
                });
                /*幻灯 end*/
            </script>
        </div>
        <!--banner begin-->
        <script>
            function search_gjc() {
                var gjc = $("#search").val();
                alert(gjc);
            }
        </script>

        <div class="main center">
            <!--     资讯及小工具 -->
            <div class="main1">
                <div class="main1_zixun">
                    <div class="main1_zixun_tit" id="main1_zixun_tit">
                        <ul>
                            <h2>公司动态</h2>
                        </ul>
                        <a href="{:url('index/index/news','newstype=公司动态')}">更多>></a>
                    </div>
                    <ul class="main1_zixun_list" id="main1_zixun_list">
                        <ul>
                            {volist name="news" id="vo"}
                                <li>
                                    <a href="{:url('index/index/newscontent','id='.$vo['id'])}">
                                        <img src='__PICTURE__/20190124216461320465033.jpg' alt="{$vo.title}" />
                                        <h2 class="linelimit">{$vo.title}</h2>
                                        <div>{$vo.content|raw}</div>
                                    </a>
                                </li>
                            {/volist}
                        </ul>
                    </ul>

                </div>
                <div class="main1_zcfg">
                    <div class="main1_zcfg_tit" id="main1_zcfg_tit">
                        <h2>政策法规</h2>
                        <a href="{:url('index/index/news','newstype=政策法规')}">更多>></a>
                    </div>
                    <ul class="main1_zcfg_list" id="main1_zcfg_list">
                        {volist name="policy" id="po"}
                            <li>
                                <a href="{:url('index/index/newscontent','id='.$po['id'])}">{$po.title}</a> 
                            </li>
                        {/volist}
                    </ul>
                </div>

                <div class="main1_tab">
                    <ul>
                        <li>
                            <a href="http://120.203.70.4:8006/uaa/personlogin#/personLogin" target="_blank">
                                <h2>社保查询</h2>
                            </a>
                        </li>
                        <li>
                            <a href="http://www.ncgjj.com.cn:8081/wt-web/login" target="_blank">
                                <h2>公积金查询</h2>
                            </a>
                        </li>
                        <!--  <li>
                       <a href="http://www.ncgjj.com.cn/" target="_blank">
                           <h2>成绩查询</h2>
                       </a>
                   </li> -->
                        <li>
                            <a href="{:url('index/index/staffservice')}">
                                <h2>员工服务</h2>
                            </a>
                        </li>
                        <!--  <li>
                       <a href="">
                           <h2>招生简章</h2>
                       </a>
                   </li> -->
                        <li>
                            <a href="{:url('index/index/jobs')}">
                                <h2>求职招聘</h2>
                            </a>
                        </li>
                    </ul>
                </div>
                <div style="clear: both;"></div>
            </div>
        </div>
        <!-- 招聘求职 -->
        <div class="main" id="zhao_pin_qiu_zhi">
            <div class="main2 center">
                <h2>招聘求职</h2>
                <p>为力人力资源服务有限公司为企业提供最好、最专业的服务外包、招聘猎头、员工福利和
                    <br>人事服务等相关人力资源解决方案</p>

                <div class="main2_zpxx">
                    <div class="main2_zpxx_tit">
                        <h3>招聘信息</h3>
                        <a href="{:url('index/index/jobs')}">更多>></a>
                    </div>
                    <div class="main2_zpxx_list">
                        <img src="__PICTURE__/zp1.jpg">
                        <ul>
                            {volist name="jobs" id="jo"}
                                <li>
                                    <a href="{:url('index/index/jobs')}">
                                        <h6>{$jo.position}</h6> 
                                        <p>{$jo.department}</p>
                                    </a>
                                </li>
                            {/volist}
                        </ul>
                    </div>
                </div>
                <div style="clear: both;"></div>
            </div>
        </div>

        <div class="main center">
            <!-- 核心服务 -->
            <div class="main3">
                <h2>核心服务</h2>
                <p>为力人力资源服务有限公司为企业提供最好、最专业的服务外包、招聘猎头、员工福利和
                    <br>人事服务等相关人力资源解决方案</p>
                <ul class="main3_list">
                    <li>
                        <a href="{:url('index/index/entservice1')}">
                            <img src="__PICTURE__/hxff1.jpg" alt="">
                            <div>
                                <h3>劳务派遣</h3>
                                <p>劳务派遣是企业将一些非核心员工外包给劳务公司，其特征就是劳动力的雇佣和...</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="{:url('index/index/entservice2')}">
                            <img src="__PICTURE__/hxff2.jpg" alt="">
                            <div>
                                <h3>服务外包</h3>
                                <p>劳务外包是企事业单位将某个岗位（特别是一些人员流动比较大、力资源服务...</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="{:url('index/index/entservice7')}">
                            <img src="__PICTURE__/hxff3.jpg" alt="">
                            <div>
                                <h3>代交社保</h3>
                                <p>社保代理是劳动保障事务代理中的一种代理方式，指由专业的人力资源公司，按照...</p>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>


        <!-- 友情链接 -->

        <div class="yqlj center">
            友情链接 : <a href="{:url('index/index/')}" target='_blank' title='南昌为力人力资源有限公司'>南昌为力人力资源有限公司</a><a href='http://www.ncyateng.com' target='_blank' title='南昌雅腾科技有限公司'>南昌雅腾科技有限公司</a><a href='http://www.jxhrss.gov.cn/' target='_blank' title='江西省人社厅'>江西省人社厅</a><a href='http://www.jxrcw.com/' target='_blank' title='江西人才网'>江西人才网</a><a href='http://rsj.nc.gov.cn/' target='_blank' title='南昌市人保局'>南昌市人保局</a><a href='http://www.ncyteng.com' target='_blank' title='南昌市职业技能培训中心'>南昌市职业技能培训中心</a> 
        </div>
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