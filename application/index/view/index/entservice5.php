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
                    <li class="on"><a>灵活用工</a>
                    </li>
                    <li><a href="{:url('index/index/entservice6')}">人才培训</a>
                    </li>
                    <li><a href="{:url('index/index/entservice7')}">代交社保</a>
                    </li>
                </ul>
            </div>

            <div class="fuwu_content">
                <div class="content_tit_type">
                    <h1>灵活用工</h1>
                    <ul>
                        <!-- <li>作者：为力小编</li> -->
                        <li>发布时间：2018-09-28 11:04:16</li>
                        <li>浏览次数：147</li>
                    </ul>
                </div>

                <div class="content_con_type">
                    <p>
                        <span style="font-size:14px;"><strong>&nbsp; &nbsp; &nbsp; &nbsp; 灵活用工</strong>等同于“<strong>灵活派遣</strong>(Flexible Staffing)”，是人才派遣服务领域的成长型产品，它由派遣公司承担全方位的法定雇主责任，在派遣人数确定、派遣周期、派遣人才的筛选方面都非常灵活的一种用工形式。"用人不管人，管人不用人"是派遣制用工形式。派遣单位招聘和管理职工而不使用职工，用人单位使用职工但不招聘和管理职工。从法律关系来看，劳动者和劳务派遣单位签署劳动合同，劳务派遣单位和用工单位签署劳务派遣协议，涉及劳动者、用人单位（即劳务派遣单位）以及用工单位三方主体。</span><span style="font-size:14px;"></span> 
                    </p>
                    <p style="text-align:center;">
                        <span style="font-size:14px;"><img src="__PICTURE__/20180928110412895528932.jpg" alt="" /><br />
</span> 
                    </p>
                    <p>
                        <span style="font-size:14px;">&nbsp; &nbsp; &nbsp; &nbsp;1、作为用人单位认为：这种劳动用工形式，灵活机动，好处多多。这种用工形式解决了编制限制，大大降低用人单位的成本，有利于提高效益和效率。而且可以有效避免劳动者不确定性导致的各种风险，用人单位什么时候缺人、缺多少、缺哪些人，只需照单索取。用人单位只需要把支票一开，其它的事情，如工资发放、福利发放、各项保险缴纳等，统统由劳务派遣机构搞定，省工、省时、省心。对于派遣来的员工，用人单位根据个人表现，能够很快发现一些能人，加以重点培养，或者开点小灶，可以将这些劳务工转化为用人单位的长期员工，实现了人力资源使用的可持续发展。</span> 
                    </p>
                    <p>
                        <span style="font-size:14px;"><br />
　　2、劳务派遣机构认为：作为专门从事劳务中介的“第三者”，一方面要保护劳动者的切身利益，另一方面要维护企业的权益，最重要的是这个机构要“有利可图”。派遣机构负责人才信息的搜寻、筛选和培训。用人单位为这种中间流程的便利买单。人才派遣机构将零散无序的劳动者整理、打包、外派，变无序为有序、变无组织为有组织，减少了劳动者外出务工的盲目性，为务工者提供了一条便捷、快速、稳妥、安全的就业通道。<br />
<br />
</span> 
                    </p>
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