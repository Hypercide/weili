<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>劳务派遣-南昌为力人力资源服务有限公司</title>
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
                            <a href="{:url('index/index/entservice1')}" id="entservice" class="on">企业服务</a>
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
                <h2>企业服务</h2>
                <img src="__PICTURE__/jian.png" alt="">
                <p>提供最有价值的人力资源服务和解决方案，持续为客户创造最大价值</p>
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
                    <li class="on"><a>人才培训</a>
                    </li>
                    <li><a href="{:url('index/index/entservice7')}">代交社保</a>
                    </li>
                </ul>
            </div>

            <div class="fuwu_content">
                <div class="content_tit_type">
                    <h1>人才培训</h1>
                    <ul>
                        <!-- <li>作者：为力小编</li> -->
                        <li>发布时间：2018-09-28 11:24:17</li>
                        <li>浏览次数：131</li>
                    </ul>
                </div>

                <div class="content_con_type">
                    <p>
                        <span style="font-size:14px;"><strong>人才培训</strong>是指对人才进行教育、培训的过程。被选拔的人才一般都需经过培养训练，才能成为各种职业和岗位要求的专门人才。培养人才的形式有多种，除了在各级各类学校中进行系统教育的进修外，还可采取业余教育，脱产或不脱产的培训班、研讨班等形式，充分利用成人教育、业余教育、电化教育等条件，提倡并鼓励自学成才。</span> 
                    </p>
                    <p style="text-align:center;">
                        <span style="font-size:14px;"><img src="__PICTURE__/201809281124131791670000.jpg" alt="" /><br />
</span> 
                    </p>
                    <p>
                        <span style="font-size:14px;"><strong>服务项目</strong></span> 
                    </p>
                    <br />
                    <span style="font-size:14px;"><strong>招考委托 </strong>（招聘、招考、笔试、面试流程化服务）&nbsp;&nbsp;</span>
                    <br />
                    <br />
                    <span style="font-size:14px;"><strong>入职培训</strong>（岗前培训、新员工融入拓展培训）&nbsp;&nbsp;</span>
                    <br />
                    <br />
                    <span style="font-size:14px;">技能培训</span>
                    <br />
                    <br />
                    <span style="font-size:14px;">&nbsp; &nbsp; &nbsp; &nbsp;1) 茶艺培训、花艺培训、香道培训、礼仪培训、家政服务培训、拓展培训及以上各类培训师资班；</span>
                    <br />
                    <br />
                    <span style="font-size:14px;">&nbsp; &nbsp; &nbsp; &nbsp;2) 安全生产培训、食品安全培训、特种作业培训、特种设备操作培训；</span>
                    <br />
                    <span style="font-size:14px;">行业培训</span>
                    <br />
                    <br />
                    <span style="font-size:14px;">&nbsp; &nbsp; &nbsp; &nbsp; l 电力系统培训（优质服务、班组长管理、安全管理、经营管理、技能培训等）</span>
                    <br />
                    <p>
                        <span style="font-size:14px;">学历提升（函授本科、在职研究生）</span> 
                    </p>
                    <p>
                        <span style="font-size:14px;"><br />
</span> 
                    </p>
                    <p>
                        <span style="font-size:14px;">企业内训（股权、投融资、领导力、执行力、市场营销、商务礼仪、户外拓展、教练技术、人力资源、九型人格等）</span> 
                    </p>
                    <p>
                        <span style="font-size:14px;"><br />
</span> 
                    </p>
                    <span style="font-size:14px;">职业技能认证（人力资源师、企业培训师、职业指导师、理财规划师、心理咨询师、物流师、电子商务师、创业咨询师、健康管理师、营销师等）</span>
                    <br />
                </div>

            </div>
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