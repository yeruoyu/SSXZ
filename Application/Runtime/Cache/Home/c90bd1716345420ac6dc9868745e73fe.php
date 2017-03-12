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
                    <div class="inner">您好，欢迎来到莘莘网</div>
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
                                <li><a href="/ssxz/index.php/home/school/schoolList" title="国际学校">国际学校</a></li>
                                <li class="cur"><a href="/ssxz/index.php/home/news/newsList" title="最新资讯">最新资讯</a></li>
                                <li><a href="/ssxz/index.php/home/study/studyList" title="课程学习">课程学习</a></li>
                                <li><a href="/ssxz/index.php/home/topic/topicList" title="话题区">话题区</a></li>
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
            <div class="zixun-l zx"  style="padding-right:28px;">
                <div class="prc"><?php echo ($articleInfo["article_cataloge"]); ?></div>
                <div class="title"><?php echo ($articleInfo["article_title"]); ?></div>
                <div class="des">
                    <span class="r1">作者：<?php echo ($articleInfo["article_create_user"]); ?></span>
                    <span class="r2">来源：<?php echo ($articleInfo["article_course"]); ?></span>
                    <span class="r3"><?php echo ($articleInfo["article_create_time"]); ?></span>
                    <!-- <span class="r4">我要评论（）</span>  -->
                </div>
                <div class="zx-main">
                	<!-- 
                    <img src="/ssxz/Public/home/images/z_03.jpg" style="display:block;  margin:88px auto; width:501px;" />
                     -->
                    <span>
                    <?php echo ($articleInfo["article_detail"]); ?>
                    </span>
                    <div class="main-ico">
                        <div class="icon-ai">
                            <span class="icon-z">置顶</span>
                            <span class="icon-j">精品</span>
                        </div>
                        <div class="icon-box">
                            <span class="icon-y">有用</span>
                            <span class="icon-yue">阅读数</span>
                            <span class="icon-g">跟帖数</span>
                        </div>
                    </div>
                    <div class="fenx">
                        <span class="f1">分享到新浪微博</span>
                        <span class="f2">分享到腾讯微博</span>
                        <span class="f3">分享微信</span>
                        <span class="f4">收藏</span>
                    </div>
                </div>


<div class="comment"  style=" position:relative; border-bottom: 2px solid #0fa484;">
            <div class="comment-box">
                <h1><span>我的点评</span></h1>
                <div class="comment-main">
                    <img src="/ssxz/Public/home/images/p_34.jpg"  style="margin:40px 0;" />
                </div>
                <h1><span>最新点评</span></h1>
                <div class="comment-main">
                    <ul class="PinL">
                    	<?php if(is_array($commentList)): $i = 0; $__LIST__ = $commentList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
	                            <div class="img">
	                                <a href="#"><img src="/ssxz/Public/home/images/pl.jpg" /></a>
	                            </div>
	                            <div class="box">
	                                <div class="box-main">
	                                    <div class="tit">
	                                        <span class="us-time"><?php echo ($vo["comment_time"]); ?></span>
	                                        <span class="us-name"><a href="#"><?php echo ($vo["comment_user_id"]); ?></a></span>
	                                    </div>
	                                    <div class="conn">
	                                        <p><?php echo ($vo["comment_detail"]); ?></p>
	                                    </div>
	                                    <!-- 
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
	                                     -->
	                                </div>
	                            </div>
	                            <div class="clearfix"></div>
	                        </li><?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </div>
                <div class="bottom-next" style="left:47%; width:52px; height:26px; background:url(images/b_42.png) no-repeat; bottom:12px;"></div>
            </div>
        </div>
                <div class="gxq">
                    <div class="title">您可能还对以下内容感兴趣</div>
                    <ul>
                        <li><a href="#">什么是国际学校？</a></li>
                        <li><a href="#">国际班里开设哪些课程？</a></li>
                        <li><a href="#">选择国际班看重哪些因素？</a></li>
                        <li><a href="#">北京有哪些学校开设国际班？</a></li>
                        <li><a href="#">如何为孩子挑选高中国际班？</a></li>
                        <li><a href="#">选择国际班看重哪些因素？</a></li>
                        <li><a href="#">北京有哪些学校开设国际班？</a></li>
                    </ul>
                </div>
            </div>
            <div class="zixun-r">
                
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
                
                
                <div class="gywm" style="margin-top: 45px;">
                    <div class="gywm-t">
                        关于我们
                    </div>
                    <div class="item">
                        <img src="/ssxz/Public/home/images/wxg.jpg" title="微博关注" />
                    <p>微博关注</p>
                    </div>
                    <div class="item">
                        <img src="/ssxz/Public/home/images/wxg.jpg" title="微博关注" />
                    <p>APP下载</p>
                    </div>
                    <div class="clearfix"></div>
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