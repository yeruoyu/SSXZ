<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<title>莘莘网</title>
<!-- bootstrap -->
<link type="text/css" rel="stylesheet" href="/ssxz/Public/home/css/bootstrap.min.css" />
<link type="text/css" rel="stylesheet" href="/ssxz/Public/home/css/style.css" />
<link type="text/css" rel="stylesheet" href="/ssxz/Public/home/css/main.css" />
<link type="text/css" rel="stylesheet" href="/ssxz/Public/home/css/page.css">
<link type="text/css" rel="stylesheet" href="/ssxz/Public/home/css/font-awesome.min.css" />
<link type="text/css" rel="stylesheet" href="/ssxz/Public/home/css/owl.carousel.css" />
<link type="text/css" rel="stylesheet" href="/ssxz/Public/home/css/owl.theme.css" />
<link type="text/css" rel="stylesheet" href="/ssxz/Public/home/css/Admission.css" />
<link type="text/css" rel="stylesheet" href="/ssxz/Public/home/css/container.css" />
<!-- jquery -->
<script type="text/javascript" src="/ssxz/Public/home/js/jQuery.min.js"></script>
<script type="text/javascript" src="/ssxz/Public/home/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/ssxz/Public/home/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="/ssxz/Public/home/js/sliding.js"></script>


<link type="text/css" rel="stylesheet" href="/ssxz/Public/fullcalendar/fullcalendar.min.css" />

<script type="text/javascript" src="/ssxz/Public/home/js/moment.min.js"></script>
<script type="text/javascript" src="/ssxz/Public/fullcalendar/fullcalendar.js"></script>
<script type="text/javascript" src="/ssxz/Public/jquery-ui/jquery-ui.min.js"></script>
</head>
<body>
    <!--容器begin-->
    <div class="container-body">
        <!--头部begin-->
        <meta charset="UTF-8">
<!--头部begin-->
<div class="header">
    <div class="header-top">
        <div class="container">
            <div class="inner">您好，欢迎来到莘莘网</div>
            <div class="inner-right">
                <ul class="list-inline">
                    <li><a href="/ssxz/index.php/home/User/login">登录</a>|</li>
                    <li><a href="/ssxz/index.php/home/User/registerStep1">注册</a></li>
     <!--                <li><a href="#">手机客户端</a>|</li>
                    <li><a href="#">微信</a></li> -->
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
                    <h2><a href="/ssxz/index.php/home/index/index"><img src="/ssxz/Public/home/images/logo.png" style="margin-top:-12px"/></a></h2>
                </div>
                <div class="header-nav">
                    <ul class="list-inline nav-control">
                        <?php if($navStyple == 'School' ): ?><li  class="cur">
                        <?php else: ?>
                        	<li><?php endif; ?>
                        <a href="/ssxz/index.php/home/school/schoolList" title="国际学校">国际学校</a></li>
                        <?php if($navStyple == 'Article' ): ?><li  class="cur">
                        <?php else: ?>
                        	<li><?php endif; ?>
                        <a href="/ssxz/index.php/home/news/newsList" title="最新资讯">最新资讯</a></li>
                        <?php if($navStyple == 'Study' ): ?><li  class="cur">
                        <?php else: ?>
                        	<li><?php endif; ?>
                        <a href="/ssxz/index.php/home/study/studyList" title="课程学习">课程学习</a></li>
                        <?php if($navStyple == 'Topic' ): ?><li  class="cur">
                        <?php else: ?>
                        	<li><?php endif; ?>
                        <a href="/ssxz/index.php/home/topic/topicList" title="话题区">话题区</a></li>
                    </ul>
                </div>
                <div class="header-search">
                    <div class="search-box">
                        <select style="width:60px;height:30px"id="searchType" >
                       		<option value="1" selected="selected">文章</option>
                       		<option value="2">学校</option>
                       	</select>
                        <input style="height:30px;width:200px" id="searchPara" />
                        <a href="javascript:navDoSearch()" class="search-btn">搜索</a>
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
<script type="text/javascript">
		// 全搜索
        function navDoSearch(){
        	var searchType=$('#searchType').val();
        	var searchParam=$('#searchPara').val();
        	if(searchType==1){
        		window.location.href='/ssxz/index.php/home/news/newsList/keyword/'+searchParam;
        	}
        	else if(searchType==2){
        		window.location.href='/ssxz/index.php/home/school/schoolList/keyword/'+searchParam;
        	}else{
        		window.location.href='/ssxz/index.php/home/news/newsList/keyword/'+searchParam;
        	}
        	
        }
</script>
        <!--头部end-->
        <!--容器begin-->
        <meta charset="UTF-8">
<!--容器begin-->
<div class="container slide-top">
    <!--学校日历begin-->
    <div class="schoolcalendar-box right">
        <div class="schoolcalendar-title">国际学校日历</div>
        <div class="schoolcalendar-main">
           <div id="calendar"></div>
        </div>
    </div>
    
    <!--学校日历end-->
    <!--焦点图begin-->
    <div class="slide-box left">
        <div id="owl-demo" class="owl-carousel">
        	<?php if(is_array($bannerList)): $i = 0; $__LIST__ = $bannerList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a class="item"><img src="<?php echo ($vo["banner_path"]); ?>" alt="<?php echo ($vo["banner_title"]); ?>"></a><?php endforeach; endif; else: echo "" ;endif; ?>
            <a class="item"><img src="/ssxz/Public/home/images/banner.jpg" alt=""></a>
            <a class="item"><img src="/ssxz/Public/home/images/banner.jpg" alt=""></a>
            <a class="item"><img src="/ssxz/Public/home/images/banner.jpg" alt=""></a>
        </div>
    </div>
    <!--焦点图end-->
    <div class="clearfix"></div>           
    
</div>
<!--容器end-->
        <!--容器end-->
        <!--中间begin-->
        <div class="container school-box">
            <meta charset="UTF-8">
<?php if($currNav == 'detail1' ): ?><div class="school-title">
    <div class="item rico-6"><a href="/ssxz/index.php/home/Topic/topicList/groupType/0/schoolId/<?php echo ($schoolId); ?>">话题区</a></div>
    <div class="item rico-5"><a href="/ssxz/index.php/home/School/schoolDetail5/id/<?php echo ($schoolId); ?>">视频</a></div>
    <div class="item rico-4"><a href="/ssxz/index.php/home/School/schoolDetail4/id/<?php echo ($schoolId); ?>">学生会</a></div>
    <div class="item rico-3"><a href="/ssxz/index.php/home/School/schoolDetail3/id/<?php echo ($schoolId); ?>">学校动态</a></div>
    <div class="item rico-2"><a href="/ssxz/index.php/home/School/schoolDetail2/id/<?php echo ($schoolId); ?>">招生信息</a></div>
    <div class="item rico-1-cur"><a href="/ssxz/index.php/home/School/schoolDetail1/id/<?php echo ($schoolId); ?>">学校介绍</a></div>
</div><?php endif; ?>
<?php if($currNav == 'detail2' ): ?><div class="school-title">
    <div class="item rico-6"><a href="/ssxz/index.php/home/Topic/topicList/groupType/0/schoolId/<?php echo ($schoolId); ?>">话题区</a></div>
    <div class="item rico-5"><a href="/ssxz/index.php/home/School/schoolDetail5/id/<?php echo ($schoolId); ?>">视频</a></div>
    <div class="item rico-4"><a href="/ssxz/index.php/home/School/schoolDetail4/id/<?php echo ($schoolId); ?>">学生会</a></div>
    <div class="item rico-3"><a href="/ssxz/index.php/home/School/schoolDetail3/id/<?php echo ($schoolId); ?>">学校动态</a></div>
    <div class="item rico-2-cur"><a href="/ssxz/index.php/home/School/schoolDetail2/id/<?php echo ($schoolId); ?>">招生信息</a></div>
    <div class="item rico-1"><a href="/ssxz/index.php/home/School/schoolDetail1/id/<?php echo ($schoolId); ?>">学校介绍</a></div>
</div><?php endif; ?>
<?php if($currNav == 'detail3' ): ?><div class="school-title">
    <div class="item rico-6"><a href="/ssxz/index.php/home/Topic/topicList/groupType/0/schoolId/<?php echo ($schoolId); ?>">话题区</a></div>
    <div class="item rico-5"><a href="/ssxz/index.php/home/School/schoolDetail5/id/<?php echo ($schoolId); ?>">视频</a></div>
    <div class="item rico-4"><a href="/ssxz/index.php/home/School/schoolDetail4/id/<?php echo ($schoolId); ?>">学生会</a></div>
    <div class="item rico-3-cur"><a href="/ssxz/index.php/home/School/schoolDetail3/id/<?php echo ($schoolId); ?>">学校动态</a></div>
    <div class="item rico-2"><a href="/ssxz/index.php/home/School/schoolDetail2/id/<?php echo ($schoolId); ?>">招生信息</a></div>
    <div class="item rico-1"><a href="/ssxz/index.php/home/School/schoolDetail1/id/<?php echo ($schoolId); ?>">学校介绍</a></div>
</div><?php endif; ?>
<?php if($currNav == 'detail4' ): ?><div class="school-title">
    <div class="item rico-6"><a href="/ssxz/index.php/home/Topic/topicList/groupType/0/schoolId/<?php echo ($schoolId); ?>">话题区</a></div>
    <div class="item rico-5"><a href="/ssxz/index.php/home/School/schoolDetail5/id/<?php echo ($schoolId); ?>">视频</a></div>
    <div class="item rico-4-cur"><a href="/ssxz/index.php/home/School/schoolDetail4/id/<?php echo ($schoolId); ?>">学生会</a></div>
    <div class="item rico-3"><a href="/ssxz/index.php/home/School/schoolDetail3/id/<?php echo ($schoolId); ?>">学校动态</a></div>
    <div class="item rico-2"><a href="/ssxz/index.php/home/School/schoolDetail2/id/<?php echo ($schoolId); ?>">招生信息</a></div>
    <div class="item rico-1"><a href="/ssxz/index.php/home/School/schoolDetail1/id/<?php echo ($schoolId); ?>">学校介绍</a></div>
</div><?php endif; ?>
<?php if($currNav == 'detail5' ): ?><div class="school-title">
    <div class="item rico-6"><a href="/ssxz/index.php/home/Topic/topicList/groupType/0/schoolId/<?php echo ($schoolId); ?>">话题区</a></div>
    <div class="item rico-5-cur"><a href="/ssxz/index.php/home/School/schoolDetail5/id/<?php echo ($schoolId); ?>">视频</a></div>
    <div class="item rico-4"><a href="/ssxz/index.php/home/School/schoolDetail4/id/<?php echo ($schoolId); ?>">学生会</a></div>
    <div class="item rico-3"><a href="/ssxz/index.php/home/School/schoolDetail3/id/<?php echo ($schoolId); ?>">学校动态</a></div>
    <div class="item rico-2"><a href="/ssxz/index.php/home/School/schoolDetail2/id/<?php echo ($schoolId); ?>">招生信息</a></div>
    <div class="item rico-1"><a href="/ssxz/index.php/home/School/schoolDetail1/id/<?php echo ($schoolId); ?>">学校介绍</a></div>
</div><?php endif; ?>
<?php if($currNav == 'detail6' ): ?><div class="school-title">
    <div class="item rico-6-cur"><a href="/ssxz/index.php/home/Topic/topicList/groupType/0/schoolId/<?php echo ($schoolId); ?>">话题区</a></div>
    <div class="item rico-5"><a href="/ssxz/index.php/home/School/schoolDetail5/id/<?php echo ($schoolId); ?>">视频</a></div>
    <div class="item rico-4"><a href="/ssxz/index.php/home/School/schoolDetail4/id/<?php echo ($schoolId); ?>">学生会</a></div>
    <div class="item rico-3"><a href="/ssxz/index.php/home/School/schoolDetail3/id/<?php echo ($schoolId); ?>">学校动态</a></div>
    <div class="item rico-2"><a href="/ssxz/index.php/home/School/schoolDetail2/id/<?php echo ($schoolId); ?>">招生信息</a></div>
    <div class="item rico-1"><a href="/ssxz/index.php/home/School/schoolDetail1/id/<?php echo ($schoolId); ?>">学校介绍</a></div>
</div><?php endif; ?>
            <div class="school-main-box">
                <div class="l-bg-top"></div>
                <div class="l-bg-bottom"></div>
                <div class="l-bg-conent"></div>
                <div class="school-tb"></div>
                <!--左侧栏开始-->
                <div class="school-side">
                    <div class="side-bg">                        
	                    <span onclick="ShowTab(1,1,3)" id="Span1">学生故事</span>
	                    <span onclick="ShowTab(2,1,3)" id="Span2">学生风采</span>
                    </div>
                </div>
                <!--左侧栏结束-->
                <!--右侧栏开始-->
                <div class="school-right">
                    <div class="school-right-box">
                        <div class="r-main-box">
                            <!--学生故事begin-->
                            <div id="Tab1">
                                <h2 class="lv"><span>学生故事</span></h2>
                                <div class="main-box">  
                                    <ul class="xxjs-list">
                                        <?php if(is_array($storyList)): $i = 0; $__LIST__ = $storyList;if( count($__LIST__)==0 ) : echo "正在添加..." ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
	                                            <a href="#"><img src="/ssxz/Public/home/images/jpg1.jpg" alt="" /></a>
	                                            <div class="xxjs-list-tit"><span class="sxzd"><a href="#" ><?php echo ($vo["article_title"]); ?></a></span></div>
	                                            <div class="xxjs-main"><?php echo ($vo["acticle_excerpt"]); ?></div>
	                                            <div class="icon-ai">
	                                                <span class="icon-z">置顶<?php echo ($vo["article_top"]); ?></span>
	                                                <span class="icon-j">精品<?php echo ($vo["article_elite"]); ?></span>
	                                            </div>
	                                            <div class="icon-box">
	                                                <span class="icon-y">有用<?php echo ($vo["article_useful"]); ?></span>
	                                                <span class="icon-yue">阅读数<?php echo ($vo["article_read"]); ?></span>
	                                                <span class="icon-g">跟帖数<?php echo ($vo["article_comment"]); ?></span>
	                                            </div>
	                                        </li><?php endforeach; endif; else: echo "正在添加..." ;endif; ?>
                                    </ul>
                                </div>
                                <div class="bottom-next"></div>
                            </div>                            
                            <!--学生故事end-->
                            <!--学生风采begin-->
                            <div id="Tab2">
                                <h2 class="lv"><span>学生风采</span></h2>   
                                <div class="main-box">  
                                    <ul class="xxjs-list">
                                        <?php if(is_array($studentsList)): $i = 0; $__LIST__ = $studentsList;if( count($__LIST__)==0 ) : echo "正在添加..." ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
	                                            <a href="#"><img src="/ssxz/Public/home/images/jpg1.jpg" alt="" /></a>
	                                            <div class="xxjs-list-tit"><span class="sxzd"><a href="#" ><?php echo ($vo["article_title"]); ?></a></span></div>
	                                            <div class="xxjs-main"><?php echo ($vo["acticle_excerpt"]); ?></div>
	                                            <div class="icon-ai">
	                                                <span class="icon-z">置顶<?php echo ($vo["article_top"]); ?></span>
	                                                <span class="icon-j">精品<?php echo ($vo["article_elite"]); ?></span>
	                                            </div>
	                                            <div class="icon-box">
	                                                <span class="icon-y">有用<?php echo ($vo["article_useful"]); ?></span>
	                                                <span class="icon-yue">阅读数<?php echo ($vo["article_read"]); ?></span>
	                                                <span class="icon-g">跟帖数<?php echo ($vo["article_comment"]); ?></span>
	                                            </div>
	                                        </li><?php endforeach; endif; else: echo "正在添加..." ;endif; ?>
                                    </ul>
                                </div>
                                <div class="bottom-next"></div>
                            </div>                        
                            <!--学生风采end-->
                        </div>       
                        <SCRIPT type="text/javascript">ShowTab(1, 1, 3);</SCRIPT>
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
    <meta charset="UTF-8">
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
<script type="text/javascript">
	// Calendar Initialization
	jQuery(document).ready(function($)
	{

		$('#calendar').fullCalendar({
			header: {
				left: 'prev',
				center: 'title',
				right: 'next'
			},
			monthNames: ["一月", "二月", "三月", "四月", "五月", "六月", "七月", "八月", "九月", "十月", "十一月", "十二月"]
			,monthNamesShort: ["一月", "二月", "三月", "四月", "五月", "六月", "七月", "八月", "九月", "十月", "十一月", "十二月"]
			,dayNames: ["周日", "周一", "周二", "周三", "周四", "周五", "周六"]
			,dayNamesShort: ["周日", "周一", "周二", "周三", "周四", "周五", "周六"]
			,titleFormat:{
				month: 'YYYY年M月'
				}
			,today: ["今天"]
			,firstDay: 1
			,buttonText: {today: '今天',prev: '<',next: '>'}
			,buttonIcons: {
				prev: 'prev fa-angle-left',
				next: 'next fa-angle-right',
			},
			// defaultDate: '2014-09-12',
			editable: true,
			eventLimit: true,
			droppable: false,
			events:function(start, end, timezone, callback) {
		        $.ajax({
		        	url:'/ssxz/index.php/home/Activity/findActivitys?schoolId=<?php echo ($schoolId); ?>',
		        	type:"POST",
		        	async:false,
		    		success:function(response, postdata) {
		    			$("#calendar").fullCalendar('removeEvents');    
		    			for(var i=0;i<response.data.length;i++) {    
		            		var obj = new Object();    
		                   	//obj.title = response.data[i].activity_title;
		                   	obj.title = '*';  // response.data[i].activity_title
		                   	obj.url="/ssxz/index.php/home/School/schoolDetail2/id/<?php echo ($schoolId); ?>";
		                   	obj.start = response.data[i].activity_startdate;                   
		                   	obj.end = response.data[i].activity_enddate;   
		                   $("#calendar").fullCalendar('renderEvent',obj,true);                     
		               } 
		    		}
		        }); //把从后台取出的数据进行封装以后在页面上以fullCalendar的方式进行显示  
		    }
			
		});
	});
</script>
</body>
</html>