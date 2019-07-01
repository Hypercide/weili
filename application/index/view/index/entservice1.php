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
                    <li class='on'><a>劳务派遣</a>
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
            </div>

            <div class="fuwu_content">
                <div class="content_tit_type">
                    <h1>劳务派遣</h1>
                    <ul>
                        <!-- <li>作者：为力小编</li> -->
                        <li>发布时间：2018-09-27 13:49:16</li>
                        <li>浏览次数：620</li>
                    </ul>
                </div>

                <div class="content_con_type">
                    <span style="font-size:14px;"><strong>劳务派遣</strong>，又称人力资源派遣，即企事业单位作为实际用工单位根据工作需要与我公司签订《劳务派遣合同》，我公司与员工签订《劳动合同》并派往用工单位工作。用工单位与员工只有使用关系，负责员工的工作管理费用；我公司作为员工的法定雇主，负责员工的人事管理。</span>
                    <br />
                    <br />
                    <div style="text-align:center;">
                        <span style="font-size:14px;">&nbsp;<img src="__PICTURE__/20180928104814555404358.jpg" alt="" /></span>
                    </div>
                    <span style="font-size:14px;"><strong>劳务派遣形式</strong></span>
                    <br />
                    <br />
                    <span style="font-size:14px;">◆ 完全派遣</span>
                    <br />
                    <br />
                    <span style="font-size:14px;">&nbsp; 根据企事业单位需求，由我公司承担一整套员工派遣服务工作，包括人才招募、选拔、培训、劳动关系、薪酬和福利、安全和健康，劳动争议处理等。</span>
                    <br />
                    <br />
                    <span style="font-size:14px;">◆ 转移派遣</span>
                    <br />
                    <br />
                    <span style="font-size:14px;">&nbsp; 由企事业单位自行招募、选拔、培训人员，再由我公司与员工签订《劳动合同》，并负责员工的薪酬、福利、绩效评估、处理劳动纠纷等事务。</span>
                    <br />
                    <span style="font-size:14px;">◆ 短期或项目派遣</span>
                    <br />
                    <br />
                    <span style="font-size:14px;">&nbsp; 企事业单位为了完成一项生产任务或工作项目需临时用工，由我公司在约定时间内提供人员招聘和劳动合同管理等事务。</span>
                    <br />
                    <br />
                    <span style="font-size:14px;">&nbsp;</span>
                    <br />
                    <br />
                    <span style="font-size:14px;"><strong>劳务派遣流程及服务内容</strong></span>
                    <br />
                    <br />
                    <span style="font-size:14px;">◆ 员工招聘：发布招聘信息、组织招聘；</span>
                    <br />
                    <br />
                    <span style="font-size:14px;">◆ 员工培训：员工就职前的岗位培训和工作纪律培训；</span>
                    <br />
                    <br />
                    <span style="font-size:14px;">◆ 劳动关系：与员工签订劳动合同，劳动合同履行过程中的日常管理，员工离职时为其相关手续；</span>
                    <br />
                    <br />
                    <span style="font-size:14px;">◆ 薪酬福利：核算及发放员工的工资和福利待遇，个税申报，办理员工的社会保险和住房公积金的相关手续；</span>
                    <br />
                    <br />
                    <span style="font-size:14px;">◆ 工作管理：协助用工单位对员工工作进行管理和考核，落实用工单位的奖惩方案，办理派遣员工的工伤及突发事件的相关事宜；</span>
                    <br />
                    <br />
                    <span style="font-size:14px;">◆ 档案服务：根据客户及员工需求，为员工提供统一的存档服务；</span>
                    <br />
                    <br />
                    <span style="font-size:14px;">◆ 政策咨询：提供有关人事和劳动管理方面的信息、最新颁布的各地政府政策和规定。</span>
                    <br />
                    <br />
                    <br />
                    <span style="font-size:14px;"><strong>劳务派遣好处</strong></span>
                    <br />
                    <br />
                    <span style="font-size:14px;">◆ 用人机动灵活；</span>
                    <br />
                    <br />
                    <span style="font-size:14px;">◆ 人事管理便捷；</span>
                    <br />
                    <br />
                    <span style="font-size:14px;">◆ 人事成本下降；</span>
                    <br />
                    <br />
                    <span style="font-size:14px;">◆ 财务成本下降；</span>
                    <br />
                    <br />
                    <span style="font-size:14px;">◆ 减少人事（劳动）纠纷；</span>
                    <br />
                    <br />
                    <span style="font-size:14px;">◆ 解决用人编制问题。</span>
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