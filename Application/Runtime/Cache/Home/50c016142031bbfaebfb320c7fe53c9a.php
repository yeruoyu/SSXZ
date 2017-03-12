<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<title>莘莘网</title>
<!-- jquery库 -->
<script src="/ssxz/Public/home/js/jQuery.min.js"></script>
<!-- bootstrap -->
<link type="text/css" rel="stylesheet" href="/ssxz/Public/home/css/bootstrap.min.css" />
<!--图标-->
<link type="text/css" rel="stylesheet" href="/ssxz/Public/home/css/font-awesome.min.css" />
<link href="/ssxz/Public/home/css/owl.carousel.css" rel="stylesheet" />
<link href="/ssxz/Public/home/css/owl.theme.css" rel="stylesheet" /> 
<link type="text/css" rel="stylesheet" href="/ssxz/Public/home/css/main.css" />
<link type="text/css" rel="stylesheet" href="/ssxz/Public/home/css/container.css" />
 
<script src="/ssxz/Public/home/js/bootstrap.min.js"></script>
<script src="/ssxz/Public/home/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="/ssxz/Public/home/js/sliding.js"></script>
</head>
<body>
    <!--容器begin-->
    <div class="container-body">
        <!--头部begin-->
        <div class="header">
            <div class="header-top">
                <div class="container">
                    <div class="inner">您还，欢迎来到莘莘网</div>
                    <div class="inner-right">
                        <ul class="list-inline">
                            <li><a href="login.html">登录</a>|</li>
                            <li><a href="register_step1.html">注册</a>|</li>
                            <li><a href="#">手机客户端</a>|</li>
                            <li><a href="#">微信</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="divide-wrap">
                <div class="colorbar-one"></div>
                <div class="colorbar-two"></div>
                <div class="colorbar-three"></div>
                <div class="colorbar-four"></div>
            </div>
            <div class="header-wap-box">
                <div class="container">
                    <div class="header-wap">
                        <div class="header-login">
                            <h2>LOGO</h2>
                        </div>
                        <div class="header-nav">
                            <ul class="list-inline nav-control">
                                <li class="cur"><a href="school_list.html" title="国际学校">国际学校</a></li>
                                <li><a href="news_list.html" title="最新资讯">最新资讯</a></li>
                                <li><a href="study_list.html" title="课程学习">课程学习</a></li>
                                <li><a href="topic_list.html" title="话题区">话题区</a></li>
                            </ul>
                        </div>
                        <div class="header-search">
                            <div class="search-box">
                                <i class="fa fa-search search-ico"></i>
                                <input class="form-control input-sm" />
                                <a href="#" class="search-btn">搜索</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="header-bottom">
                <div class="container">
                    专注国际课程与学校，同您和孩子一起分享点评最全面教育信息<span class="tel-r">400-123-123-123</span>
                </div>
            </div>    
        </div>    
        <!--头部end-->

        <!--容器begin-->
        <div class="container slide-top">
            <!--学校日历begin-->
            <div class="schoolcalendar-box right">
                <div class="schoolcalendar-title">国际学校日历</div>
                <div class="schoolcalendar-main">
                    <img src="/ssxz/Public/home/images/schoolcalendar-mainbg.jpg" />
                </div>
            </div>
            
            <!--学校日历end-->
            <!--焦点图begin-->
            <div class="slide-box left">
                <div id="owl-demo" class="owl-carousel">
                    <a class="item"><img src="/ssxz/Public/home/images/banner.jpg" alt=""></a>
                    <a class="item"><img src="/ssxz/Public/home/images/banner.jpg" alt=""></a>
                    <a class="item"><img src="/ssxz/Public/home/images/banner.jpg" alt=""></a>
                </div>
            </div>
            <!--焦点图end-->
            <div class="clearfix"></div>           
            
        </div>
        <!--容器end-->


        
        <!--中间begin-->
        <div class="container school-box">
            <div class="school-title">
                <div class="item rico-6"><a href="topic_list.html">话题区</a></div>
                <div class="item rico-5"><a href="school_detail5.html">视频</a></div>
                <div class="item rico-4"><a href="school_detail4.html">学生会</a></div>
                <div class="item rico-3"><a href="school_detail3.html">学校动态</a></div>
                <div class="item rico-2"><a href="school_detail2.html">招生信息</a></div>
                <div class="item rico-1-cur"><a href="school_detail1.html">学校介绍</a></div>
            </div>
            <div class="school-main-box">
                <div class="l-bg-top"></div>
                <div class="l-bg-bottom"></div>
                <div class="l-bg-conent"></div>
                <div class="school-tb"></div>
                <!--左侧栏开始-->
                <div class="school-side">
                    <div class="side-bg">                        
	                    <span onclick="ShowTab(1,1,8)" id="Span1">学校简介</span>
	                    <span onclick="ShowTab(2,1,8)" id="Span2">课堂特色</span>
	                    <span onclick="ShowTab(3,1,8)" id="Span3">校长录</span>
	                    <span onclick="ShowTab(4,1,8)" id="Span4">师资团体</span>
	                    <span onclick="ShowTab(5,1,8)" id="Span5">教学成果</span>
	                    <span onclick="ShowTab(6,1,8)" id="Span6">印象校园</span>
	                    <span onclick="ShowTab(7,1,8)" id="Span7"><i>MAP</i></span>
                       <!-- <div class="item">校园新闻</div>
                        <div class="item">课堂特色</div>
                        <div class="item">校长录</div>
                        <div class="item">师资团体</div>
                        <div class="item">教学成果</div>
                        <div class="item">印象校园</div>
                        <div class="item">MAP</div>-->
                    </div>
                </div>
                <!--左侧栏结束-->
                <!--右侧栏开始-->
                <div class="school-right">
                    <div class="school-right-box">
                        <div class="r-main-box">
                            <!--教学成果begin-->
                            <div id="Tab1">
                                <div class="main-box">  
                                    <img src="/ssxz/Public/home/images/xxlog.jpg"  style="width:340px; height:150px; margin:74px auto 133px; display:block;" />
                                    <p style="font-size:18px;"><strong>北京爱迪国际学校</strong></p>
                                    <p>北京爱迪(国际)学校（ National Institute of Technology ），由爱迪教育集团投资创办，经北京市教委批准、国家教育部备案、 澳大利亚政府认可，是中国唯一一所全英文讲授完全与国际接轨的澳大利亚同步课程，文凭和学位广受国际认可的国际学校、双语学校，为中国境内的中、外籍学生系统地提供 双语幼儿园、双语小学、双语初中、全英文澳大利亚高中（WACE）、大学预科、大学文凭、本科及雅思英语课程。同时，北京爱迪学校也是澳大利亚西澳州政府教育署课程委员会正式授权的国际大学录取考试  TEE（ Tertiary Entrance Examination ）中国唯一考试中心。学生参加 TEE 考试可直接报考或申请澳大利亚的悉尼大学、墨尔本大学，英国的牛津大学、剑桥大学，美国的 斯坦福大学，麻省理工学院，新西兰的奥克兰理工大学以及 加拿大的 多伦多大学 等 近千 所世界名校。目前，学校已输送 2000 多名学生前往澳大利亚、加拿大、英国、美国、新西兰等世界各国深造， 90% 以上获得了学士或学士以上学位， 70% 以上移居了海外， 被誉为“中澳两国教育合作的成功典范”。</p>
                                    <p style="font-size:18px;"><strong>办学优势</strong></p>
                                    <p>NIT 利用自身国际化的办学优势，与多所海外院校保持着良好的长期合作关系，为中国学生开辟了留学海外的绿色通道。几年来，已输送5000余名学生到美国、澳大利亚、英国、加拿大、新西兰等国家深造。NIT提供免费的出国留学信息咨询服务，为符合条件的学生免费办理签证，并在南澳阿德雷得市（中国学生签证审批地）设立了专门机构，为在海外求学的NIT学子提供全方位服务。  NIT拥有软硬件设备先进的学习中心，采用先进的电脑教学系统，为每位学生设立免费的个人宽带网络专区。通过它，学生可直接进入NIT电子网校学习，查找学习资料和进行科研作业等，并配有专职指导教师悉心指导。</p>
                                    <p>
长期以来，北京爱迪学校一直与多所海外知名院校保持着良好的合作关系，共同致力于为中国境内的中外籍学生系统地提供更多、更好地享受国际优质教育的机会。学校校园里 聚集着来自等世界其它国家的优秀学者，学术氛围非常浓厚。 爱迪教育集团是在澳大利亚政府注册的国际知名教育机构，教学投资经验丰富，在国际教育界中享有盛誉。　</p>
                                    <p>
                                        <img src="/ssxz/Public/home/images/bk.jpg" style="margin-top:65px;" />
                                    </p>
                                </div>                                
                                <div class="bottom-next"></div>
                            </div>                            
                            <!--校园新闻end-->
                            <!--课程特色begin-->
                            <div id="Tab2">
                                <h2 class="lv"><span>课程特色</span></h2>   
                                <div class="main-box">
                                    <!--编辑begin-->
                                    <img src="/ssxz/Public/home/images/kcte.jpg" style="margin:0 45px; width:828px;" />
                                    <h6>国际高中 - WACE简介</h6>
                                    <p>澳大利亚高中（WACE）是经西澳课程委员会授权，由北京爱迪学校开设的全日制高中课程。我们的学生不仅可以在这里学习西澳原版的课程，而且可以完成西澳课程的学分和参加西澳高考（TEE）。在12年级期末的时候，学生们通过澳大利亚毕业高考，获取高考排名（ATAR)，最终实现他们申请世界名校的梦想。</p>
                                    <h6>英国高中-BSE简介</h6>
                                    <p>爱迪英国高中是经英国剑桥大学国际考试委员会(Cambridge International Examinations)全权授权，在中国开设的英国高中课程。在英国高中，同学们会和英国本土学生同步学习专业课程，更有机会参加各样丰富的活动，国际竞赛，英国交换生项目。</p>
                                    <p>英国高中除了教授原汁原味的A Level课程体系外，同时在每个阶段，切实结合学生的学习成绩，量身定制个性化的专业课及英语辅导课程。使得同学们根据不同的专业方向，打造自身的升学优势。同时，针对12年级的升学指导，更是能够考虑到每个同学的实际学习情况和专业兴趣所在，辅导每名毕业生更清楚地认识自我，发现自我，最终为实现升入理想大学而深造。</p>
                                    <h6>美国高中-ASE简介</h6>
                                    <p>爱迪美国高中是由WASC认可，由爱迪教育集团开设的纯正美国高中课程。提供的课程与美国当地高中生所学的课程完全一致，共计240个学分，修满全部学分即可高中毕业。如果中途转去美国读高中，所修学分可以完全转换。学生毕业后获得由WASC颁发的高中毕业证，在申请美国大学的时候享受和美国本土高中生同等待遇。</p>
                                    <h6></h6>
                                    <p>爱迪美国高中课程还涵盖托福和SAT的培训，能够帮助学生在出国之前积累丰富的社区活动经历，在申请美国名校时非常有竞争力。</p>
                                    <!--编辑区end-->
                                </div>                      
                                <div class="bottom-next"></div>

                            </div>                        
                            <!--课程特色end-->
                            <!--校长录begin-->
                            <div id="Tab3">
                                
                                <h2 class="lv"><span>校长致辞</span></h2>
                                <div class="main-box">
                                    <img src="/ssxz/Public/home/images/xz.jpg" style="float:left; width:280px; height:189px; margin-left:24px;" />
                                    <div class="" style="color:#727171; margin-top:25px;">
                                        <p style="color:#000;font-size:18px;">赵均宁</p>
                                        <p>中国 英语高级讲师</p>
                                        <p>中国教育学会外语专业委员会常务理事</p>
                                        <p>全国外国语学校英语教材</p>
                                        <p>上海外国语大学附属外国语学校副校长</p>
                                    </div>
                                    <div class="clearfix"></div>
                                    <p style="margin-top:25px;">中国的基础教育扎实可靠，上海的PISA考试名列世界的前茅，如果能与国际化的教学理念和国际课程相结合，则无异于猛虎添翼，蛟龙入海，定能创造出创新时代的教育新模式，从而服务学生和家长的国际化教育新需求。我么的A-Level中心正是为此而诞生。国际化，化国际，我们以办中西合璧教育，树国际青年英才为己任，为中国学子奉献世界上最成熟最优秀最权威的课程之一-通行英联邦国家和美、加、澳等国的课程，学生毕业后可以在世界范围内选择全球最优秀、最适合自己的国际一流大学，进一步深造和发展，为自己圆梦，为家庭增容，为国家之才，为人类添力。让我们家、校、生齐心协力，实现教育新理念。</p>
                                </div>
                                <h2 class="lv"><span>校长录</span></h2>
                                <div class="main-box">  
                                    <ul class="xxjs-list">
                                        <li>
                                            <a href="#"><img src="/ssxz/Public/home/images/jpg1.jpg" alt="" /></a>
                                            <div class="xxjs-list-tit"><span class="sxzd lv"><a href="#" >北京爱迪国际学校</a></span></div>
                                            <div class="xxjs-main">由爱迪教育集团投资创办，经北京市教委批准、国家教育部备案、 澳大利亚政府认可，是中国唯一一所全英文讲授完全与国际接轨的澳大利亚同步课程。文凭和学位广受国际认可的国际学校、双语学校，为中国境内的中、外籍学生系统地提供 双语幼儿园、双语小学、双语初中、全英文澳大利亚高中（WACE）、大学预科、大学文凭、本科及雅思英语课程。</div>
                                            <div class="icon-ai">
                                                <span class="icon-z">置顶</span>
                                                <span class="icon-j">精品</span>
                                            </div>
                                            <div class="icon-box">
                                                <span class="icon-y">有用</span>
                                                <span class="icon-yue">阅读数</span>
                                                <span class="icon-g">跟帖数</span>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="#"><img src="/ssxz/Public/home/images/jpg1.jpg" alt="" /></a>
                                            <div class="xxjs-list-tit"><span class="sxzd lv"><a href="#" >北京爱迪国际学校</a></span></div>
                                            <div class="xxjs-main">由爱迪教育集团投资创办，经北京市教委批准、国家教育部备案、 澳大利亚政府认可，是中国唯一一所全英文讲授完全与国际接轨的澳大利亚同步课程。文凭和学位广受国际认可的国际学校、双语学校，为中国境内的中、外籍学生系统地提供 双语幼儿园、双语小学、双语初中、全英文澳大利亚高中（WACE）、大学预科、大学文凭、本科及雅思英语课程。</div>
                                            <div class="icon-ai">
                                                <span class="icon-z">置顶</span>
                                                <span class="icon-j">精品</span>
                                            </div>
                                            <div class="icon-box">
                                                <span class="icon-y">有用</span>
                                                <span class="icon-yue">阅读数</span>
                                                <span class="icon-g">跟帖数</span>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="#"><img src="/ssxz/Public/home/images/jpg1.jpg" alt="" /></a>
                                            <div class="xxjs-list-tit"><span class="sxzd lv"><a href="#" >北京爱迪国际学校</a></span></div>
                                            <div class="xxjs-main">由爱迪教育集团投资创办，经北京市教委批准、国家教育部备案、 澳大利亚政府认可，是中国唯一一所全英文讲授完全与国际接轨的澳大利亚同步课程。文凭和学位广受国际认可的国际学校、双语学校，为中国境内的中、外籍学生系统地提供 双语幼儿园、双语小学、双语初中、全英文澳大利亚高中（WACE）、大学预科、大学文凭、本科及雅思英语课程。</div>
                                            <div class="icon-ai">
                                                <span class="icon-z">置顶</span>
                                                <span class="icon-j">精品</span>
                                            </div>
                                            <div class="icon-box">
                                                <span class="icon-y">有用</span>
                                                <span class="icon-yue">阅读数</span>
                                                <span class="icon-g">跟帖数</span>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="#"><img src="/ssxz/Public/home/images/jpg1.jpg" alt="" /></a>
                                            <div class="xxjs-list-tit"><span class="sxzd lv"><a href="#" >北京爱迪国际学校</a></span></div>
                                            <div class="xxjs-main">由爱迪教育集团投资创办，经北京市教委批准、国家教育部备案、 澳大利亚政府认可，是中国唯一一所全英文讲授完全与国际接轨的澳大利亚同步课程。文凭和学位广受国际认可的国际学校、双语学校，为中国境内的中、外籍学生系统地提供 双语幼儿园、双语小学、双语初中、全英文澳大利亚高中（WACE）、大学预科、大学文凭、本科及雅思英语课程。</div>
                                            <div class="icon-ai">
                                                <span class="icon-z">置顶</span>
                                                <span class="icon-j">精品</span>
                                            </div>
                                            <div class="icon-box">
                                                <span class="icon-y">有用</span>
                                                <span class="icon-yue">阅读数</span>
                                                <span class="icon-g">跟帖数</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>                                
                                <div class="bottom-next"></div>
                            </div>
                            <!--校长录end-->
                            <!--师资团体begin-->
                            <div id="Tab4">
                                
                                <h2 class="lv"><span>师资团体</span></h2>
                                <div class="main-box">
                                   <ul class="sztt">
                                       <li>
                                           <div class="li-img"><img src="/ssxz/Public/home/images/stt.jpg" width="306" /></div>
                                           <div class="li-name">马京敏</div>
                                           <div class="li-tag">中教一级，优秀教师，骨干教师</div>
                                           <div class="li-school">毕业于河北师范大学汉语言文学系</div>
                                           <div class="li-de">16年来一直在高中语文教学一线工作。撰写多篇教学论文，曽在全国
教学论文比赛中获得一等奖，在省级教学基本功大赛上获得二等奖。
众多毕业班学生考入上海交大，南开，北航等优秀学校。</div>
                                       </li>
                                       <li>
                                           <div class="li-img"><img src="/ssxz/Public/home/images/stt.jpg" width="306" /></div>
                                           <div class="li-name">马京敏</div>
                                           <div class="li-tag">中教一级，优秀教师，骨干教师</div>
                                           <div class="li-school">毕业于河北师范大学汉语言文学系</div>
                                           <div class="li-de">16年来一直在高中语文教学一线工作。撰写多篇教学论文，曽在全国
教学论文比赛中获得一等奖，在省级教学基本功大赛上获得二等奖。
众多毕业班学生考入上海交大，南开，北航等优秀学校。</div>
                                       </li>
                                       <li>
                                           <div class="li-img"><img src="/ssxz/Public/home/images/stt.jpg" width="306" /></div>
                                           <div class="li-name">马京敏</div>
                                           <div class="li-tag">中教一级，优秀教师，骨干教师</div>
                                           <div class="li-school">毕业于河北师范大学汉语言文学系</div>
                                           <div class="li-de">16年来一直在高中语文教学一线工作。撰写多篇教学论文，曽在全国
教学论文比赛中获得一等奖，在省级教学基本功大赛上获得二等奖。
众多毕业班学生考入上海交大，南开，北航等优秀学校。</div>
                                       </li>
                                       <li>
                                           <div class="li-img"><img src="/ssxz/Public/home/images/stt.jpg" width="306" /></div>
                                           <div class="li-name">马京敏</div>
                                           <div class="li-tag">中教一级，优秀教师，骨干教师</div>
                                           <div class="li-school">毕业于河北师范大学汉语言文学系</div>
                                           <div class="li-de">16年来一直在高中语文教学一线工作。撰写多篇教学论文，曽在全国
教学论文比赛中获得一等奖，在省级教学基本功大赛上获得二等奖。
众多毕业班学生考入上海交大，南开，北航等优秀学校。</div>
                                       </li>
                                   </ul>

                                </div>
                                <h2 class="lv"><span>教师中心</span></h2>
                                <div class="main-box">  
                                    <ul class="xxjs-list">
                                        <li>
                                            <a href="#"><img src="/ssxz/Public/home/images/jpg1.jpg" alt="" /></a>
                                            <div class="xxjs-list-tit"><span class="sxzd lv"><a href="#" >北京爱迪国际学校</a></span></div>
                                            <div class="xxjs-main">由爱迪教育集团投资创办，经北京市教委批准、国家教育部备案、 澳大利亚政府认可，是中国唯一一所全英文讲授完全与国际接轨的澳大利亚同步课程。文凭和学位广受国际认可的国际学校、双语学校，为中国境内的中、外籍学生系统地提供 双语幼儿园、双语小学、双语初中、全英文澳大利亚高中（WACE）、大学预科、大学文凭、本科及雅思英语课程。</div>
                                            <div class="icon-ai">
                                                <span class="icon-z">置顶</span>
                                                <span class="icon-j">精品</span>
                                            </div>
                                            <div class="icon-box">
                                                <span class="icon-y">有用</span>
                                                <span class="icon-yue">阅读数</span>
                                                <span class="icon-g">跟帖数</span>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="#"><img src="/ssxz/Public/home/images/jpg1.jpg" alt="" /></a>
                                            <div class="xxjs-list-tit"><span class="sxzd lv"><a href="#" >北京爱迪国际学校</a></span></div>
                                            <div class="xxjs-main">由爱迪教育集团投资创办，经北京市教委批准、国家教育部备案、 澳大利亚政府认可，是中国唯一一所全英文讲授完全与国际接轨的澳大利亚同步课程。文凭和学位广受国际认可的国际学校、双语学校，为中国境内的中、外籍学生系统地提供 双语幼儿园、双语小学、双语初中、全英文澳大利亚高中（WACE）、大学预科、大学文凭、本科及雅思英语课程。</div>
                                            <div class="icon-ai">
                                                <span class="icon-z">置顶</span>
                                                <span class="icon-j">精品</span>
                                            </div>
                                            <div class="icon-box">
                                                <span class="icon-y">有用</span>
                                                <span class="icon-yue">阅读数</span>
                                                <span class="icon-g">跟帖数</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>                                
                                <div class="bottom-next"></div>


                            </div>
                            <!--师资团体end-->
                            <!--教学成果begin-->
                            <div id="Tab5">
                                <h2 class="lv"><span>教学成果</span></h2>
                                <div class="main-box">  
                                    <ul class="xxjs-list">
                                        <li>
                                            <a href="#"><img src="/ssxz/Public/home/images/jpg1.jpg" alt="" /></a>
                                            <div class="xxjs-list-tit"><span class="sxzd lv"><a href="#" >北京爱迪国际学校</a></span></div>
                                            <div class="xxjs-main">由爱迪教育集团投资创办，经北京市教委批准、国家教育部备案、 澳大利亚政府认可，是中国唯一一所全英文讲授完全与国际接轨的澳大利亚同步课程。文凭和学位广受国际认可的国际学校、双语学校，为中国境内的中、外籍学生系统地提供 双语幼儿园、双语小学、双语初中、全英文澳大利亚高中（WACE）、大学预科、大学文凭、本科及雅思英语课程。</div>
                                            <div class="icon-ai">
                                                <span class="icon-z">置顶</span>
                                                <span class="icon-j">精品</span>
                                            </div>
                                            <div class="icon-box">
                                                <span class="icon-y">有用</span>
                                                <span class="icon-yue">阅读数</span>
                                                <span class="icon-g">跟帖数</span>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="#"><img src="/ssxz/Public/home/images/jpg1.jpg" alt="" /></a>
                                            <div class="xxjs-list-tit"><span class="sxzd lv"><a href="#" >北京爱迪国际学校</a></span></div>
                                            <div class="xxjs-main">由爱迪教育集团投资创办，经北京市教委批准、国家教育部备案、 澳大利亚政府认可，是中国唯一一所全英文讲授完全与国际接轨的澳大利亚同步课程。文凭和学位广受国际认可的国际学校、双语学校，为中国境内的中、外籍学生系统地提供 双语幼儿园、双语小学、双语初中、全英文澳大利亚高中（WACE）、大学预科、大学文凭、本科及雅思英语课程。</div>
                                            <div class="icon-ai">
                                                <span class="icon-z">置顶</span>
                                                <span class="icon-j">精品</span>
                                            </div>
                                            <div class="icon-box">
                                                <span class="icon-y">有用</span>
                                                <span class="icon-yue">阅读数</span>
                                                <span class="icon-g">跟帖数</span>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="#"><img src="/ssxz/Public/home/images/jpg1.jpg" alt="" /></a>
                                            <div class="xxjs-list-tit"><span class="sxzd lv"><a href="#" >北京爱迪国际学校</a></span></div>
                                            <div class="xxjs-main">由爱迪教育集团投资创办，经北京市教委批准、国家教育部备案、 澳大利亚政府认可，是中国唯一一所全英文讲授完全与国际接轨的澳大利亚同步课程。文凭和学位广受国际认可的国际学校、双语学校，为中国境内的中、外籍学生系统地提供 双语幼儿园、双语小学、双语初中、全英文澳大利亚高中（WACE）、大学预科、大学文凭、本科及雅思英语课程。</div>
                                            <div class="icon-ai">
                                                <span class="icon-z">置顶</span>
                                                <span class="icon-j">精品</span>
                                            </div>
                                            <div class="icon-box">
                                                <span class="icon-y">有用</span>
                                                <span class="icon-yue">阅读数</span>
                                                <span class="icon-g">跟帖数</span>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="#"><img src="/ssxz/Public/home/images/jpg1.jpg" alt="" /></a>
                                            <div class="xxjs-list-tit"><span class="sxzd lv"><a href="#" >北京爱迪国际学校</a></span></div>
                                            <div class="xxjs-main">由爱迪教育集团投资创办，经北京市教委批准、国家教育部备案、 澳大利亚政府认可，是中国唯一一所全英文讲授完全与国际接轨的澳大利亚同步课程。文凭和学位广受国际认可的国际学校、双语学校，为中国境内的中、外籍学生系统地提供 双语幼儿园、双语小学、双语初中、全英文澳大利亚高中（WACE）、大学预科、大学文凭、本科及雅思英语课程。</div>
                                            <div class="icon-ai">
                                                <span class="icon-z">置顶</span>
                                                <span class="icon-j">精品</span>
                                            </div>
                                            <div class="icon-box">
                                                <span class="icon-y">有用</span>
                                                <span class="icon-yue">阅读数</span>
                                                <span class="icon-g">跟帖数</span>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="#"><img src="/ssxz/Public/home/images/jpg1.jpg" alt="" /></a>
                                            <div class="xxjs-list-tit"><span class="sxzd lv"><a href="#" >北京爱迪国际学校</a></span></div>
                                            <div class="xxjs-main">由爱迪教育集团投资创办，经北京市教委批准、国家教育部备案、 澳大利亚政府认可，是中国唯一一所全英文讲授完全与国际接轨的澳大利亚同步课程。文凭和学位广受国际认可的国际学校、双语学校，为中国境内的中、外籍学生系统地提供 双语幼儿园、双语小学、双语初中、全英文澳大利亚高中（WACE）、大学预科、大学文凭、本科及雅思英语课程。</div>
                                            <div class="icon-ai">
                                                <span class="icon-z">置顶</span>
                                                <span class="icon-j">精品</span>
                                            </div>
                                            <div class="icon-box">
                                                <span class="icon-y">有用</span>
                                                <span class="icon-yue">阅读数</span>
                                                <span class="icon-g">跟帖数</span>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="#"><img src="/ssxz/Public/home/images/jpg1.jpg" alt="" /></a>
                                            <div class="xxjs-list-tit"><span class="sxzd lv"><a href="#" >北京爱迪国际学校</a></span></div>
                                            <div class="xxjs-main">由爱迪教育集团投资创办，经北京市教委批准、国家教育部备案、 澳大利亚政府认可，是中国唯一一所全英文讲授完全与国际接轨的澳大利亚同步课程。文凭和学位广受国际认可的国际学校、双语学校，为中国境内的中、外籍学生系统地提供 双语幼儿园、双语小学、双语初中、全英文澳大利亚高中（WACE）、大学预科、大学文凭、本科及雅思英语课程。</div>
                                            <div class="icon-ai">
                                                <span class="icon-z">置顶</span>
                                                <span class="icon-j">精品</span>
                                            </div>
                                            <div class="icon-box">
                                                <span class="icon-y">有用</span>
                                                <span class="icon-yue">阅读数</span>
                                                <span class="icon-g">跟帖数</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="bottom-next"></div>
                            </div>
                            <!--教学成果end-->                            
                            <!--印象校园end-->
                            <div id="Tab6">
                                <div class="main-box">
                                    <ul class="yxxy">
                                        <li><a href="#">
                                                <img src="/ssxz/Public/home/images/xy1.jpg" />
                                                <p>上外附中国际教育中心环境</p>
                                            </a>
                                        </li>
                                        <li><a href="#">
                                                <img src="/ssxz/Public/home/images/xy2.jpg" />
                                                <p>上外附中国际教育中心环境</p>
                                            </a>
                                        </li>
                                        <li><a href="#">
                                                <img src="/ssxz/Public/home/images/xy3.jpg" />
                                                <p>上外附中国际教育中心环境</p>
                                            </a>
                                        </li>
                                        <li><a href="#">
                                                <img src="/ssxz/Public/home/images/xy1.jpg" />
                                                <p>上外附中国际教育中心环境</p>
                                            </a>
                                        </li>
                                        <li><a href="#">
                                                <img src="/ssxz/Public/home/images/xy2.jpg" />
                                                <p>上外附中国际教育中心环境</p>
                                            </a>
                                        </li>
                                        <li><a href="#">
                                                <img src="/ssxz/Public/home/images/xy3.jpg" />
                                                <p>上外附中国际教育中心环境</p>
                                            </a>
                                        </li>
                                        <li><a href="#">
                                                <img src="/ssxz/Public/home/images/xy1.jpg" />
                                                <p>上外附中国际教育中心环境</p>
                                            </a>
                                        </li>
                                        <li><a href="#">
                                                <img src="/ssxz/Public/home/images/xy2.jpg" />
                                                <p>上外附中国际教育中心环境</p>
                                            </a>
                                        </li>
                                        <li><a href="#">
                                                <img src="/ssxz/Public/home/images/xy3.jpg" />
                                                <p>上外附中国际教育中心环境</p>
                                            </a>
                                        </li>
                                        <li><a href="#">
                                                <img src="/ssxz/Public/home/images/xy1.jpg" />
                                                <p>上外附中国际教育中心环境</p>
                                            </a>
                                        </li>
                                        <li><a href="#">
                                                <img src="/ssxz/Public/home/images/xy2.jpg" />
                                                <p>上外附中国际教育中心环境</p>
                                            </a>
                                        </li>
                                        <li><a href="#">
                                                <img src="/ssxz/Public/home/images/xy3.jpg" />
                                                <p>上外附中国际教育中心环境</p>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="bottom-next"></div>
                            </div>
                            <!--印象校园end-->
                            <!--MAP end-->
                            <div id="Tab7">M A P</div> 
                            <!--MAP end-->
                        </div>       
                        <SCRIPT type="text/javascript">ShowTab(1, 1, 8);</SCRIPT>
                    </div>             
                    
                </div>
                <!--右侧栏结束-->        
            </div>
        </div>
        <!--中间end-->
        
        <!--评论begin-->
        <div class="container comment">
            <div class="comment-box">
                <h1><span>我的点评</span></h1>
                <div class="comment-main">
                    <img src="/ssxz/Public/home/images/plc.jpg"  style="margin:40px 0;" />
                </div>
                <h1><span>最新点评</span></h1>
                <div class="comment-main">
                    <ul class="PinL">
                        <li>
                            <div class="img">
                                <a href="#"><img src="/ssxz/Public/home/images/pl.jpg" /></a>
                            </div>
                            <div class="box">
                                <div class="box-main">
                                    <div class="tit">
                                        <span class="us-time">2015年9月28日 15:32</span>
                                        <span class="us-name"><a href="#">几乎成律</a></span><span>丨</span><span class="us-zd">针对“学校硬件”发表</span>
                                    </div>
                                    <div class="conn">
                                        <p>我是上师大剑桥国际的学生，我个人认为我们学校不错。首先，所有的外教每人都有很高的学位。学校也充分为我们学生着想，我们不仅上英国的教材，还上国内高中同步教材。我们学校是一个很不错的选择。</p>
                                    </div>
                                    <div class="ico">
                                        <div class="ico-box">
                                             <i class="gap-gw"></i>
                                            <span class="click-ding-gw"><a href="javascript:void(0)" title="顶" class="evt-support"><i class="icon-gw icon-ding-bg"></i><em class="icon-name-bg"></em></a></span>
                                            <i class="gap-gw"></i>
                                            <span class="click-cai-gw"><a href="javascript:void(0)" title="踩" class="evt-opposed"><i class="icon-gw icon-cai-bg"></i><em class="icon-name-bg"></em></a></span>
                                            <i class="gap-gw"></i>
                                            <span class="click-reply-gw click-reply-eg"><a href="javascript:void(0)" class="evt-reply">回复</a></span>
                                            <i class="gap-gw"></i>
                                            <span class="click-share-gw click-reply-eg"><a href="javascript:void(0)" class="evt-share">分享</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </li>
                        <li>
                            <div class="img">
                                <a href="#"><img src="/ssxz/Public/home/images/pl.jpg" /></a>
                            </div>
                            <div class="box">
                                <div class="box-main">
                                    <div class="tit">
                                        <span class="us-time">2015年9月28日 15:32</span>
                                        <span class="us-name"><a href="#">几乎成律</a></span><span>丨</span><span class="us-zd">针对“学校硬件”发表</span>
                                    </div>
                                    <div class="conn">
                                        <p>我是上师大剑桥国际的学生，我个人认为我们学校不错。首先，所有的外教每人都有很高的学位。学校也充分为我们学生着想，我们不仅上英国的教材，还上国内高中同步教材。我们学校是一个很不错的选择。</p>
                                    </div>
                                    <div class="ico">
                                        <div class="ico-box">
                                             <i class="gap-gw"></i>
                                            <span class="click-ding-gw"><a href="javascript:void(0)" title="顶" class="evt-support"><i class="icon-gw icon-ding-bg"></i><em class="icon-name-bg"></em></a></span>
                                            <i class="gap-gw"></i>
                                            <span class="click-cai-gw"><a href="javascript:void(0)" title="踩" class="evt-opposed"><i class="icon-gw icon-cai-bg"></i><em class="icon-name-bg"></em></a></span>
                                            <i class="gap-gw"></i>
                                            <span class="click-reply-gw click-reply-eg"><a href="javascript:void(0)" class="evt-reply">回复</a></span>
                                            <i class="gap-gw"></i>
                                            <span class="click-share-gw click-reply-eg"><a href="javascript:void(0)" class="evt-share">分享</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </li>
                        <li>
                            <div class="img">
                                <a href="#"><img src="/ssxz/Public/home/images/pl.jpg" /></a>
                            </div>
                            <div class="box">
                                <div class="box-main">
                                    <div class="tit">
                                        <span class="us-time">2015年9月28日 15:32</span>
                                        <span class="us-name"><a href="#">几乎成律</a></span><span>丨</span><span class="us-zd">针对“学校硬件”发表</span>
                                    </div>
                                    <div class="conn">
                                        <p>我是上师大剑桥国际的学生，我个人认为我们学校不错。首先，所有的外教每人都有很高的学位。学校也充分为我们学生着想，我们不仅上英国的教材，还上国内高中同步教材。我们学校是一个很不错的选择。</p>
                                    </div>
                                    <div class="ico">
                                        <div class="ico-box">
                                             <i class="gap-gw"></i>
                                            <span class="click-ding-gw"><a href="javascript:void(0)" title="顶" class="evt-support"><i class="icon-gw icon-ding-bg"></i><em class="icon-name-bg"></em></a></span>
                                            <i class="gap-gw"></i>
                                            <span class="click-cai-gw"><a href="javascript:void(0)" title="踩" class="evt-opposed"><i class="icon-gw icon-cai-bg"></i><em class="icon-name-bg"></em></a></span>
                                            <i class="gap-gw"></i>
                                            <span class="click-reply-gw click-reply-eg"><a href="javascript:void(0)" class="evt-reply">回复</a></span>
                                            <i class="gap-gw"></i>
                                            <span class="click-share-gw click-reply-eg"><a href="javascript:void(0)" class="evt-share">分享</a></span>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="area">
                                        <div class="areabox">
                                            <textarea name="" class="textarea"></textarea>
                                        </div>
                                        <div class="actio">
                                            <div class="actio-box">
                                                <ul class="clear-g">
                                                    <li class="function-face-w"><a href="javascript:void(0)" class="effect-w" title="表情"><i class="face-b"></i></a></li>
                                                    <li class="function-uploadimg-w"><a href="javascript:void(0)" class="effect-w" title="上传图片"><i class="uploadimg-b"></i></a><div class="uploadimg-file-w"></div><div class="img-btn-cover" style="width:40px;height:40px;margin-top:-40px;z-index:-1;position: relative;"></div></li>
                                                </ul>
                                            </div>
                                            <div class="hf">
                                                <div class="hf-box">
                                                    <span>0/140</span><span class="hf-btn">回复</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </li>
                    </ul>



                    

                </div>
                
            </div>
        </div>
        <!--评论end-->

    </div>
     <!--容器end-->

    <div class="footer">
        <div class="container">
            <div class="footer-Scan">
                <img src="/ssxz/Public/home/images/wxg.jpg" title="微博关注" />
                <p>微博关注</p>
                <img src="/ssxz/Public/home/images/appg.jpg" title="微博关注" />
                <p>APP下载</p>
            </div>
            <div class="footer-inner">
                <div class="footer-inline-item column-1">
                    <ul class="list-inline">
                        <li><a href="#">关于我们</a></li>
                        <li><a href="#">免责声明</a></li>
                        <li><a href="#">国际高中</a></li>
                        <li><a href="#">国际学校</a></li>
                        <li><a href="#">专家栏目</a></li>
                        <li><a href="#">留学预科班点评</a></li>
                    </ul>
                </div>
                <div class="footer-inline-item column-2">
                    <p><a href="#">热门项目：上海师范大学剑桥国际中心</a><a href="#">上海市文莱中国国际部</a><a href="#">上海泾进修学校剑桥国际中心</a></p>
                    <p>2012-2013@莘莘网 版权所有 泸ICP备13030050号</p>
                </div>
                <div class="footer-inline-item column-3">
                    <p>友情链接：<a href="#">托福考试培训</a><a href="#">英国留学中介</a><a href="#">美国高中留学</a><a href="#">福州大学至诚学院A-level中心</a></p>
                    <p><a href="#">中南财经政法大学武汉学院A-level中心</a><a href="#">上海外国语大学立秦学院A-level课程中心</a></p>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(function () {
            $('#owl-demo').owlCarousel({
                scrollPerPage: true,navigation:true,
                items: 1
            });
        });
    </script>
    
</body>
</html>