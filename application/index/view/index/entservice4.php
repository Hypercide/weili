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
                    <li class="on"><a>人才招聘</a>
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
                    <h1>人才招聘</h1>
                    <ul>
                        <!-- <li>作者：为力小编</li> -->
                        <li>发布时间：2018-09-28 11:13:22</li>
                        <li>浏览次数：155</li>
                    </ul>
                </div>

                <div class="content_con_type">
                    <p>
                        <span style="font-size:14px;">&nbsp; &nbsp; &nbsp; &nbsp;招聘流程外包，是一种以客户为导向，以项目为建制的招聘解决方案服务，是着眼于公司在较长的招聘周期内大规模招聘需求提供的定制化解决方案。</span><span style="font-size:14px;">&nbsp;</span> 
                    </p>
                    <p>
                        <span style="font-size:14px;">&nbsp; &nbsp; &nbsp; 招聘流程外包（RPO ）服务属于人力资源外包（HRO）的一种方式，在这种服务中，企业外包的是内部招聘的整个流程，所谓整个流程是指从确定职位描述，到分析用人理念、职位需求、与用人部门负责人沟通，筛选简历，人才测评，面试到录用通知，直至候选人报到的所有环节。也就是说，RPO 可以提供的是“起点到终点(End to End)”的一站式服务。招聘流程外包(RPO)是指一个企业将整个招聘流程交付外部机构来完成，它涉及从人力发掘到最后的招聘录取工作的方方面面，是个集成化的过程。简单说来，RPO就是定义一个招聘流程，并将这个招聘流程交给一个外部公司来完成，当然这个公司必须具有相应的资历和经验，并按这个招聘流程来为委托公司招聘所需人才。</span> 
                    </p>
                    <p>
                        <br />
                    </p>
                    <p style="text-align:center;">
                        <img src="__PICTURE__/201809281113051762837103.jpg" alt="" />
                    </p>
                    <p>
                        <span style="font-size:14px;">招聘流程外包可以提高招聘质量、缩短填补职位空缺的时间、改善整个行政流程、管理核心业务指标的汇报以及削减总体成本，许多企业都开始利用RPO完成招聘任务。大幅削减成本和改善招聘质量可以提高招聘流程的成效与效率。RPO是指企业将全部或部分招聘需求外包给专业公司来完成。此类专业服务公司的功能相当于企业内部的招聘部门，负责向客户提供必要的技能、工具和技术。&nbsp;</span> 
                    </p>
                    <p>
                        <span style="font-size:14px;"><strong>服务范围：</strong></span> 
                    </p>
                    <p>
                        <span style="font-size:14px;">1)固定周期内，有较大量的职位需求的企业。<br />
2)新建项目团队，招聘压力大的企业。<br />
3)招聘主管对候选人的预期与实际情况不一致，导致招聘工作很难展开的企业；<br />
4)需要到另一个城市开设新工厂或者运营中心，但是自身的人才储备或招聘渠道有限，内部招聘部门压力过大的企业；<br />
5)需要优化内部面试和测评流程的企业。<br />
6)需要在二三线城市开展招聘，但是二三线城市候选人员各方面能力不均衡，选拔困难的企业。<br />
7)猎头公司访寻候选人的工作效率不能满足目前需求的企业。<br />
8)规模不大，暂无计划设立内部招聘部门的企业。</span> 
                    </p>
                    <p>
                        <span style="font-size:14px;"><br />
<strong>服务内容：</strong><br />
</span> 
                    </p>
                    <p>
                        <span style="font-size:14px;">1、<strong>企业代理招聘：</strong>企业招聘需求量大，招聘人员不足，以及新组建企业的人员招聘，省去企业招聘广告、发布信息、面试等成本和时间。该服务适用于技术类职位和人事行政财务类职位，以及部分主管级职位，但招聘难度很大的职位属于猎头职位范畴</span> 
                    </p>
                    <p>
                        <span style="font-size:14px;"><br />
2、<strong>应届生校园招聘外包：</strong>大型企业进行应届生的校园招聘工作，时间紧，准备工作烦琐，可将前期准备工作如信息发布、招聘信息宣传推广、校园宣讲、简历接收和筛选、第一轮面试和笔试等工作外包给人才公司，企业人力资源部门可专注于少量候选学生的专业和素质考察以及最终面试录用，缓解了人力资源部的时间压力，提高了招聘的效率。</span> 
                    </p>
                    <p>
                        <span style="font-size:14px;"><br />
3、<strong>招聘流程整合咨询：</strong>可帮助中大型企业进行招聘流程优化，招聘渠道整合，重建招聘体系，培训和辅导企业招聘人员提升招聘技能，根据企业发展规划构建企业人才梯队并辅导实施，从而提升人才对于企业竞争优势的支持<br />
<br />
</span> 
                    </p>
                    <span style="font-size:14px;"></span>
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