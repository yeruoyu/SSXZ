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
<link type="text/css" rel="stylesheet" href="/ssxz/Public/home/css/style.css" />
<link type="text/css" rel="stylesheet" href="/ssxz/Public/home/css/main.css" />
<!--图标-->
<link type="text/css" rel="stylesheet" href="/ssxz/Public/home/css/font-awesome.min.css" />
 
<script src="/ssxz/Public/home/js/bootstrap.min.js"></script>
</head>
<body>
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
                                <ul class="list-inline nav-control">
                                <li><a href="/ssxz/index.php/home/school/schoolList" title="国际学校">国际学校</a></li>
                                <li class="cur"><a href="/ssxz/index.php/home/news/newsList" title="最新资讯">最新资讯</a></li>
                                <li><a href="/ssxz/index.php/home/study/studyList" title="课程学习">课程学习</a></li>
                                <li><a href="/ssxz/index.php/home/topic/topicList" title="话题区">话题区</a></li>
                            </ul>
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
        <!--topbannerbegin-->
         <div class="container">
             <div class="topbanner">
                 <img src="/ssxz/Public/home/images/topbanner3.jpg" alt="" />
             </div>
         </div>
        <!--topbannerend-->
        <!--容器begin-->
        <div class="container hua-main"> 
            <div class="zixun-li">
                <div class="item col1">
                    <p><a href="#">学生故事</a></p>
                    <p><a href="#">学生风采</a></p>
                    <p><a href="#">探&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;营</a></p>
                </div>
                <div class="item col2">
                    <p><a href="#">学生故事</a></p>
                    <p><a href="#">学生风采</a></p>
                    <p><a href="#">探&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;营</a></p>
                </div>
                <div class="item col3">
                    <p><a href="#">专家专栏</a></p>
                    <p><a href="#">校长录</a></p>
                    <p><a href="#">升学指导</a></p>

                </div>
                <div class="item col4">
                    <p><a href="#">招生简章</a></p>
                    <p><a href="#">招生活动</a></p>
                    <p><a href="#">签&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;证</a></p>
                </div>
            </div>
            <div class="zixun-l" style="min-height:2075px;max-height:2075px;border-bottom: 1px solid #05B865;">
                <div class="zixun-sea">                
                            <div class="r-search" style="padding:0px; margin-top:0px;">
                                <input type="text" placeholder="关键字模糊搜索" class="r-search-input form-control" style="width:90%;" />
                                <input type="submit" class="r-searcj-btn" value="搜索" />
                                <div class="clearfix"></div>
                            </div>
                </div>
                <div class="r-main-title">
                        <div class="r-main-tit">
                            <h3>资讯类别</h3>
                        </div>
                </div>
                <div class="zixun-box">                    
                        <ul class="xxjs-list">
                        	<?php if(is_array($vnewsList)): $i = 0; $__LIST__ = $vnewsList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
	                                <a href="#"><img src="/ssxz/Public/home/images/jpg1.jpg" alt="" /></a>
	                                <div class="con">
	                                    <div class="xxjs-list-tit"><span class="sxzd lv"><a href="newsdetail" ><?php echo ($vo["news_title"]); ?></a></span></div>
	                                    <div class="xxjs-main"><?php echo ($vo["acticle_excerpt"]); ?></div>
	                                    <div class="icon-ai">
	                                        <span class="icon-z">置顶<?php echo ($vo["article_top"]); ?></span>
	                                        <span class="icon-j">精华<?php echo ($vo["article_elite"]); ?></span>
	                                    </div>
	                                    <div class="icon-box">
	                                        <span class="icon-y">有用<?php echo ($vo["article_useful"]); ?></span>
	                                        <span class="icon-yue">阅读数<?php echo ($vo["article_read"]); ?></span>
	                                        <span class="icon-g">跟帖数<?php echo ($vo["article_comment"]); ?></span>
	                                    </div>
	                                </div>
	                            </li><?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                </div>
                <div class="bottom-next" style="left:57%;"></div>
            </div>
            <div class="zixun-r" style="min-height:2075px; max-height:2075px;">
                
                <div class="item col1">
                    <div class="title">
                        <a href="#" class="right">更多...</a>
                        <span>最有用的文章</span>
                    </div>
                    <ul class="zy-w">
                        <li><i>1</i><a href="#"><div>和平学子参加十二届上海市示范中学学生会主席论坛</div></a><span>学校动态</span></li>
                        <li><i>2</i><a href="#"><div>和平学子参加十二届上海市示范中学学生会主席论坛</div></a><span>学校动态</span></li>
                        <li><i>3</i><a href="#"><div>和平学子参加十二届上海市示范中学学生会主席论坛</div></a><span>学校动态</span></li>
                        <li><i>4</i><a href="#"><div>和平学子参加十二届上海市示范中学学生会主席论坛</div></a><span>学校动态</span></li>
                        <li><i>5</i><a href="#"><div>和平学子参加十二届上海市示范中学学生会主席论坛</div></a><span>学校动态</span></li>
                        <li><i>6</i><a href="#"><div>和平学子参加十二届上海市示范中学学生会主席论坛</div></a><span>学校动态</span></li>
                        <li><i>7</i><a href="#"><div>和平学子参加十二届上海市示范中学学生会主席论坛</div></a><span>学校动态</span></li>
                        <li><i>8</i><a href="#"><div>和平学子参加十二届上海市示范中学学生会主席论坛</div></a><span>学校动态</span></li>
                        <li><i>9</i><a href="#"><div>和平学子参加十二届上海市示范中学学生会主席论坛</div></a><span>学校动态</span></li>
                        <li><i>10</i><a href="#"><div>和平学子参加十二届上海市示范中学学生会主席论坛</div></a><span>学校动态</span></li>
                        <li><i>11</i><a href="#"><div>和平学子参加十二届上海市示范中学学生会主席论坛</div></a><span>学校动态</span></li>
                        <li><i>12</i><a href="#"><div>和平学子参加十二届上海市示范中学学生会主席论坛</div></a><span>学校动态</span></li>
                        <li><i>13</i><a href="#"><div>和平学子参加十二届上海市示范中学学生会主席论坛</div></a><span>学校动态</span></li>
                        <li><i>14</i><a href="#"><div>和平学子参加十二届上海市示范中学学生会主席论坛</div></a><span>学校动态</span></li>
                        <li><i>15</i><a href="#"><div>和平学子参加十二届上海市示范中学学生会主席论坛</div></a><span>学校动态</span></li>
                        <li><i>16</i><a href="#"><div>和平学子参加十二届上海市示范中学学生会主席论坛</div></a><span>学校动态</span></li>
                        <li><i>17</i><a href="#"><div>和平学子参加十二届上海市示范中学学生会主席论坛</div></a><span>学校动态</span></li>
                    </ul>
                </div>




                
                <div class="list-07" style="margin-top:62px;">
                    <div class="list_08">
                        <img src="/ssxz/Public/home/images/list_08.jpg" />
                    </div>
                    <div class="list_09">
                        <ul>
                            <li><i>1</i><a href="#">上海立信AIA国际</a></li>
                            <li><i>2</i><a href="#">东华大学莱佛国际设计专修学院</a></li>
                            <li><i>3</i><a href="#">东华大学莱佛国际设计专修学院</a></li>
                            <li><i>4</i><a href="#">上海世界外国语中学（世外境外部）</a></li>
                            <li><i>5</i><a href="#">上海民办尚德实验学校国际部</a></li>
                            <li><i>6</i><a href="#">上海外国语大学西外外国语学校</a></li>
                            <li><i>7</i><a href="#">上海市体育中学</a></li>
                            <li><i>8</i><a href="#">上海市格致中学国际部</a></li>
                            <li><i>9</i><a href="#">上海市格致中学国际部</a></li>
                            <li><i>10</i><a href="#">上海市格致中学国际部</a></li>
                            <li><i>11</i><a href="#">上海市格致中学国际部</a></li>
                            <li><i>12</i><a href="#">上海市格致中学国际部</a></li>
                            <li><i>13</i><a href="#">上海市格致中学国际部</a></li>
                            <li><i>14</i><a href="#">上海市格致中学国际部</a></li>
                            <li><i>15</i><a href="#">上海市格致中学国际部</a></li>
                        </ul>
                    </div>

                </div>
                



            </div>
            <div class="clearfix"></div>
        </div>
        <!--容器end-->
    </div>

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
</body>
    
    <script type="text/javascript">
        $(document).ready(function () {
            var _ch = $(".container-body").height();
            var _wh = $(window).height();
            if (_wh - _ch > 377) {
                $(".container-body").css("min-height", (_wh - 397) + "px");
            }
        })
    </script>
</html>