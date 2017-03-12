<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<title>莘莘网</title>
<!-- bootstrap -->
<link type="text/css" rel="stylesheet" href="/ssxz/Public/home/css/bootstrap.min.css" />

<link type="text/css" rel="stylesheet" href="/ssxz/Public/home/css/main.css" />
<link type="text/css" rel="stylesheet" href="/ssxz/Public/home/css/font-awesome.min.css" />
<link type="text/css" rel="stylesheet" href="/ssxz/Public/home/css/owl.carousel.css" />
<link type="text/css" rel="stylesheet" href="/ssxz/Public/home/css/owl.theme.css" />
<link type="text/css" rel="stylesheet" href="/ssxz/Public/home/css/Admission.css" />
<link type="text/css" rel="stylesheet" href="/ssxz/Public/home/css/style.css" />
<!-- jquery -->
<script type="text/javascript" src="/ssxz/Public/home/js/jQuery.min.js"></script>
<script type="text/javascript" src="/ssxz/Public/home/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/ssxz/Public/home/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="/ssxz/Public/home/js/sliding.js"></script>
</head>
<body>
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
        <div class="container-fluid index-main  sx-bg" style="margin:0 -15px;">
            <!--轮播-->
            <div id="owl-demo" class="owl-carousel">
            	<?php if(is_array($bannerList)): $i = 0; $__LIST__ = $bannerList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a class="item"><img src="<?php echo ($vo["banner_path"]); ?>" alt="<?php echo ($vo["banner_title"]); ?>"></a><?php endforeach; endif; else: echo "" ;endif; ?>
                <a class="item"><img src="/ssxz/Public/home/images/banner1.jpg" alt=""></a>
                <a class="item"><img src="/ssxz/Public/home/images/banner1.jpg" alt=""></a>
                <a class="item"><img src="/ssxz/Public/home/images/banner1.jpg" alt=""></a>
            </div>
            <!--轮播end-->
            <!--筛选-->
            <div class="container sx-box">
                <div class="title">
                    <span class="t1">国际学校查询</span><span class="t2"><a href="#">更多...</a></span><span class="t3">全国最全的国际学校分析、最客观的国际学校评价信息</span>
                </div>
                <div class="row">
                <div class="col-sm-6">
                    <div class="sm-tit">
                        <div class="sm-tit1">课程阶段</div>
                        <div class="sm-tit2">
                            <span><a href="javascript:doSearch('','')">全部</a></span>
                            <?php if(is_array($stepList)): $i = 0; $__LIST__ = $stepList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><span><a href="javascript:doSearch('school_step','<?php echo ($vo["step_name"]); ?>')"><?php echo ($vo["step_name"]); ?></a></span><?php endforeach; endif; else: echo "" ;endif; ?>
                        </div>
                    </div>
                    <div class="sm-tit">
                        <div class="sm-tit1">留学方向</div>
                        <div class="sm-tit2">
                            <span><a href="javascript:doSearch('','')">全部</a></span>
                            <?php if(is_array($abroadList)): $i = 0; $__LIST__ = $abroadList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><span><a href="javascript:doSearch('school_abroad','<?php echo ($vo["abroad_name"]); ?>')"><?php echo ($vo["abroad_name"]); ?></a></span><?php endforeach; endif; else: echo "" ;endif; ?>
                        </div>
                    </div>
                    <div class="sm-tit">
                        <div class="sm-tit1">最热课程</div>
                        <div class="sm-tit2">
                            <span><a href="javascript:doSearch('','')">全部</a></span>
                            <?php if(is_array($courseList)): $i = 0; $__LIST__ = $courseList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><span><a href="javascript:doSearch('school_coursename','<?php echo ($vo["course_name"]); ?>')"><?php echo ($vo["course_name"]); ?></a></span><?php endforeach; endif; else: echo "" ;endif; ?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    
                    <div class="sm-tit">
                        <div class="sm-tit1">地区</div>
                        <div class="sm-tit2">
                            <span><a href="javascript:doSearch('','')">全部</a></span>
                            <?php if(is_array($areaList)): $i = 0; $__LIST__ = $areaList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><span><a href="javascript:doSearch('school_areaname','<?php echo ($vo["area_name"]); ?>')"><?php echo ($vo["area_name"]); ?></a></span><?php endforeach; endif; else: echo "" ;endif; ?>
                        </div>
                    </div>

                </div>
                </div>
            </div>
            <!--筛选end-->
        </div>
        <!--容器end-->
        <div class="container">
            <div class="tj-box">
				<div class="tj-span">
                    <a href="/ssxz/index.php/home/index/index/showflag/1">推荐学校</a>
                    <a href="/ssxz/index.php/home/index/index/showflag/0">新加入学校</a>
                </div>
                <div class="lunbo">
                    <div class="scroll-outer">
	                    <div id="scroll" class="owl-carousel">
	                    	<?php if(is_array($vslidechoolList)): $i = 0; $__LIST__ = $vslidechoolList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="item">
				                    <?php if(empty($vo["school_photo"])): ?><img src="/ssxz/Public/home/images/lb1.jpg" width="239" height="219"/>
	                        		<?php else: ?>
	                        		 	<img src="<?php echo ($vo["school_photo"]); ?>" width="239" height="219" /><?php endif; ?>
				                    
				                    <div class="shd"><a href="/ssxz/index.php/home/School/schoolDetail1/id/<?php echo ($vo["school_id"]); ?>"></a></div>
				                    <div class="txt">
					                    <h3><a href="/ssxz/index.php/home/School/schoolDetail1/id/<?php echo ($vo["school_id"]); ?>"><?php echo ($vo["school_name"]); ?></a></h3>
					                    <p>课程类型：<?php echo (str_replace(',',' ',$vo["school_coursename"])); ?></p>
					                    <p>项目阶段：<?php echo ($vo["school_step"]); ?></p>
					                    <p>所属地区：<?php echo ($vo["school_areaname"]); ?></p>
	                                   <!-- <div class="lb-ht">话题区</div>
	                                    <div class="lb-ht2">+加关注</div> --> 
				                    </div>
			                    </div><?php endforeach; endif; else: echo "" ;endif; ?>

	                    </div>
                    </div>
                </div>
            </div>
        </div>

        <!--以下-->
        <div class="container" style="margin-bottom:75px;">
            <div class="xueli-l left" style=" border-bottom:1px solid #05b865; min-height:778px;max-height:778px;">
                <div class="bg title index-t">
                    <div class="title-main">                        
	                    <span onmouseover="ShowTab(1,1,6);showArticle('schoolnews','tab1Ul')" id="Span1">学校动态</span>
	                    <span onmouseover="ShowTab(2,1,6);showArticle('guide','tab2Ul')" id="Span2">招生简章</span>
	                    <span onmouseover="ShowTab(3,1,6);showArticle('story','tab3Ul')" id="Span3">学生故事</span>
	                    <span onmouseover="ShowTab(4,1,6);showArticle('expert','tab4Ul')" id="Span4">专家专栏</span>
	                    <span onmouseover="ShowTab(5,1,6);showArticle('schoolgrade','tab5Ul')" id="Span5">升学指导</span>
	                    <span><a href="/ssxz/index.php/home/news/newsList">更多</a></span>
                    </div>
                </div>

                <div class="index-li">                    
	                <div id="Tab1">   
                        <ul id="tab1Ul" class="xxjs-list"></ul>
                        <!-- page -->
	                </div>
                    <div id="Tab2">
                        <ul id="tab2Ul" class="xxjs-list"></ul>
                        <!-- page -->
                    </div>
                    <div id="Tab3">
                        <ul id="tab3Ul" class="xxjs-list"></ul>
                        <!-- page -->
                    </div>
                    <div id="Tab4">
                        <ul id="tab4Ul" class="xxjs-list"></ul>
                        <!-- page -->
                    </div>      
                    <div id="Tab5">
                    	 <ul id="tab5Ul" class="xxjs-list"></ul>
                        <div class="bottom-next"></div>
                    </div>                  
                <SCRIPT type="text/javascript">ShowTab(1, 1, 6);</SCRIPT>
                </div>
                
            </div>
            <!-- Top School -->
            <meta charset="UTF-8">
<div class="xueli-r left" style=" min-height:778px;max-height:778px;background-color: #05b865;">
    <div class="list-07">
        <div class="list_08">
            <img src="/ssxz/Public/home/images/list_08.jpg" />
        </div>
        <div class="list_09">
            <ul id="topSchool">
            	<!-- <?php if(is_array($topSchoolList)): $i = 0; $__LIST__ = $topSchoolList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><i><?php echo ($i); ?></i><a href="/ssxz/index.php/home/School/schoolDetail1/id/<?php echo ($vo["school_id"]); ?>"><?php echo ($vo["school_name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?> -->
            </ul>
        </div>

    </div>
</div>
            <div class="clearfix"></div>
        </div>
        <div class="container">
            <!--精彩推荐-->
            <meta charset="UTF-8">
<div class="index-01">
    <div class="index-01-title">
        <a href="#" class="right">查看更多...</a>精彩推荐
    </div>
    <div class="index-02">
        <ul>
            <li>
                <a href="#">
                   <div class="img">
                       <img src="/ssxz/Public/home/images/i_11.jpg" />
                       <div class="img-t">
                           <h2>校长语录</h2>
                           <p>ason .Youth is wasted on the young .It's hunting season And this lamb is on the run .</p>
                       </div>
                   </div>
                    <div class="title">北京艾迪国际学校</div>
                </a>
            </li>
            <li>
                <a href="#">
                   <div class="img">
                       <img src="/ssxz/Public/home/images/i_13.jpg" />
                       <div class="img-t">
                           <h2>校长语录</h2>
                           <p>ason .Youth is wasted on the young .It's hunting season And this lamb is on the run .</p>
                       </div>
                   </div>
                    <div class="title">北京艾迪国际学校</div>
                </a>
            </li>
            <li>
                <a href="#" class="cur">
                   <div class="img">
                       <img src="/ssxz/Public/home/images/i_15.jpg" />
                       <div class="img-t">
                           <h2>校长语录</h2>
                           <p>ason .Youth is wasted on the young .It's hunting season And this lamb is on the run .</p>
                       </div>
                   </div>
                    <div class="title">北京艾迪国际学校</div>
                </a>
            </li>
            <li>
                <a href="#">
                   <div class="img">
                       <img src="/ssxz/Public/home/images/i_17.jpg" />
                       <div class="img-t">
                           <h2>校长语录</h2>
                           <p>ason .Youth is wasted on the young .It's hunting season And this lamb is on the run .</p>
                       </div>
                   </div>
                    <div class="title">北京艾迪国际学校</div>
                </a>
            </li>
            <li>
                <a href="#">
                   <div class="img">
                       <img src="/ssxz/Public/home/images/i_19.jpg" />
                       <div class="img-t">
                           <h2>校长语录</h2>
                           <p>ason .Youth is wasted on the young .It's hunting season And this lamb is on the run .</p>
                       </div>
                   </div>
                    <div class="title">北京艾迪国际学校</div>
                </a>
            </li>
        </ul>
            <div class="clearfix"></div>
    </div>
</div>
            <div class="index-03">
            	<!-- 最有用的文章 -->
                <meta charset="UTF-8">
<div class="item col1">
    <div class="title">
        <a href="/ssxz/index.php/home/news/newsList" class="right">更多...</a>
        <span>最有用的文章</span>
    </div>
    <ul id="usefulArticle" class="zy-w"><!-- you-w -->
    	<!-- <?php if(is_array($usefulList)): $i = 0; $__LIST__ = $usefulList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><i><?php echo ($i); ?></i><a href="/ssxz/index.php/home/news/newsDetail/id/<?php echo ($vo["article_id"]); ?>"><div><?php echo ($vo["article_title"]); ?></div></a></li><?php endforeach; endif; else: echo "" ;endif; ?> -->
    </ul>
</div>
                <!-- 最新学校点评信息 -->
                <meta charset="UTF-8">
<div class="item col2">
                    <div class="title">
                        <span>最新学校点评信息</span>
                    </div>
                    <ul class="you-c">
                    	<?php if(is_array($topCommentList)): $i = 0; $__LIST__ = $topCommentList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
	                            <div class="img">
	                                <img src="/ssxz/Public/home/images/p_53.jpg" />
	                            </div>
	                            <div class="box">
	                                <div class="t">昆山加拿大国际学校</div>
	                                <div class="b">
	                                    ason .Youth is wasted on the young .It's hunting season And this lamb is on the run .asa
	young .It's hunting season And this lamb is on the run .ason .Youth is wasted on the young .It's hunting season And this lamb is on the run .on .Youth is wasted on the young .It's hunting season And this lamb is on the run .
	                                </div>
	                            </div>
	                        </li><?php endforeach; endif; else: echo "" ;endif; ?>
                        <li>
                            <div class="img">
                                <img src="/ssxz/Public/home/images/p_53.jpg" />
                            </div>
                            <div class="box">
                                <div class="t">昆山加拿大国际学校</div>
                                <div class="b">
                                    ason .Youth is wasted on the young .It's hunting season And this lamb is on the run .asa
young .It's hunting season And this lamb is on the run .ason .Youth is wasted on the young .It's hunting season And this lamb is on the run .on .Youth is wasted on the young .It's hunting season And this lamb is on the run .
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img">
                                <img src="/ssxz/Public/home/images/p_53.jpg" />
                            </div>
                            <div class="box">
                                <div class="t">昆山加拿大国际学校</div>
                                <div class="b">
                                    ason .Youth is wasted on the young .It's hunting season And this lamb is on the run .asa
young .It's hunting season And this lamb is on the run .ason .Youth is wasted on the young .It's hunting season And this lamb is on the run .on .Youth is wasted on the young .It's hunting season And this lamb is on the run .
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img">
                                <img src="/ssxz/Public/home/images/p_53.jpg" />
                            </div>
                            <div class="box">
                                <div class="t">昆山加拿大国际学校</div>
                                <div class="b">
                                    ason .Youth is wasted on the young .It's hunting season And this lamb is on the run .asa
young .It's hunting season And this lamb is on the run .ason .Youth is wasted on the young .It's hunting season And this lamb is on the run .on .Youth is wasted on the young .It's hunting season And this lamb is on the run .
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img">
                                <img src="/ssxz/Public/home/images/p_53.jpg" />
                            </div>
                            <div class="box">
                                <div class="t">昆山加拿大国际学校</div>
                                <div class="b">
                                    ason .Youth is wasted on the young .It's hunting season And this lamb is on the run .asa
young .It's hunting season And this lamb is on the run .ason .Youth is wasted on the young .It's hunting season And this lamb is on the run .on .Youth is wasted on the young .It's hunting season And this lamb is on the run .
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img">
                                <img src="/ssxz/Public/home/images/p_53.jpg" />
                            </div>
                            <div class="box">
                                <div class="t">昆山加拿大国际学校</div>
                                <div class="b">
                                    ason .Youth is wasted on the young .It's hunting season And this lamb is on the run .asa
young .It's hunting season And this lamb is on the run .ason .Youth is wasted on the young .It's hunting season And this lamb is on the run .on .Youth is wasted on the young .It's hunting season And this lamb is on the run .
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img">
                                <img src="/ssxz/Public/home/images/p_53.jpg" />
                            </div>
                            <div class="box">
                                <div class="t">昆山加拿大国际学校</div>
                                <div class="b">
                                    ason .Youth is wasted on the young .It's hunting season And this lamb is on the run .asa
young .It's hunting season And this lamb is on the run .ason .Youth is wasted on the young .It's hunting season And this lamb is on the run .on .Youth is wasted on the young .It's hunting season And this lamb is on the run .
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- 最新話題 -->
                <meta charset="UTF-8">
<div class="item col3">       
    <div class="title1">
        <div class="in-sea">
            <input type="text" id="keyword" placeholder="请输入话题区关键字"/>
            <a style="cursor:pointer" onclick="doTopicSearch()">搜索</a>
        </div>
    </div>
    
    <div class="area-box" style="width:100%">
        <div class="area-title">
            <h2>一周你热门话题</h2>
            <div class="area-l"></div>
            <div class="area-r"></div>
        </div>
        <div class="area-main">
            <ul class="favorite-list">
            	<?php if(is_array($topTopicList)): $i = 0; $__LIST__ = $topTopicList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>                        	        
                    <div><a href="/ssxz/index.php/home/news/newsDetail/id/<?php echo ($vo["article_id"]); ?>"><?php echo ($vo["article_title"]); ?></a></div>
                   <!--  <div class="liAuthor">作者：{vo.article_author}</div>
                    <div><span class="count-eye"><i class="icon-eye"></i>204578</span><a rel="external nofollow" class="count-infor" href="#"><i class="icon-infor"></i>3974</a></div>
                	 -->
                </li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
    </div>
</div>
<script type="text/javascript">
	function doTopicSearch(){
		var keyword = $("#keyword").val();
		var topicUrl = "/ssxz/index.php/home/topic/topicList/";
		if(keyword !=''){
			topicUrl = "/ssxz/index.php/home/topic/topicList/keyword/"+keyword;
			window.location.href=topicUrl;
		}
		
	}
</script>
                <div class="clearfix"></div>
            </div>
        </div>
        <!--国际学校--->
        <meta charset="UTF-8">
<div class="index-bottom">
    <div class="index-04">
        <div class="tit">
            <a href="/ssxz/index.php/home/news/newsList" class="right more">更多...</a>
            	国际学校Q&A
        </div>
        <div class="index-05">
            <div class="divide-wrap">
                <div class="colorbar-one"></div>
                <div class="colorbar-two"></div>
                <div class="colorbar-three"></div>
                <div class="colorbar-four"></div>
            </div>
        </div>
        <div class="index-06">                    
         <span onmouseover="ShowTab(7,7,10);showQAList('qaischool','tab7Ul')" id="Span7">国际学校</span>
         <span onmouseover="ShowTab(8,7,10);showQAList('qaicourse','tab8Ul')" id="Span8">国际课程</span>
         <span onmouseover="ShowTab(9,7,10);showQAList('qaichoose','tab9Ul')" id="Span9">如何选择</span>
        </div>
        <div class="index-07">                    
         <div id="Tab7">
                <ul id="tab7Ul" class="ul-1"></ul>
         </div>
            <div id="Tab8">
                <ul id="tab8Ul" class="ul-1"></ul>
            </div>
            <div id="Tab9">
                <ul id="tab9Ul" class="ul-1"></ul>
            </div>
        <SCRIPT type="text/javascript">ShowTab(7, 7,10);</SCRIPT>
        </div>
    </div>
</div>
    </div>
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
</body>
    <script type="text/javascript">
    	jQuery(document).ready(function($){

    		showArticle('schoolnews','tab1Ul');
    		// UsefulArticle
    		showUserfulArticle('expert','usefulArticle');
    		// TopSchool
    		showTopSchool('topSchool');
    		// QAList
    		showQAList('qaischool','tab7Ul');
		
        });
    	/**/
    	function showArticle(cataloge,dispId){
    		var articleQueryUrl = "/ssxz/index.php/home/index/articleQuery";
    		$.ajax({
				type: 'POST',
				url: articleQueryUrl ,
				data:{'cataloge':cataloge},
				dataType:'json',
				success: function(msg){
					if(msg.data!=null){
						var articleView = $('#'+dispId);
						articleView.text("");
						var rowIndex=1;
						msg.data.forEach(function(vo){
							var imagePath=vo.imagePath;
							if(imagePath==null|| imagePath==""){
								imagePath="/ssxz/Public/home/images/jpg1.jpg";
							}

							var articleItem='<li>'
								+'<a href="/ssxz/index.php/home/news/newsDetail/id/'+vo.article_id+'"><img src="'+imagePath+'" width="266" height="143"/></a>'
								+'<div class="con">'
								+'<div class="xxjs-list-tit"><span class="sxzd lv"><a href="/ssxz/index.php/home/news/newsDetail/id/'+vo.article_id+'" >'+vo.article_title+'</a></span></div>'
								+' <div class="xxjs-main">'+vo.article_excerpt+'</div>'
								+' <div class="icon-ai">'
								+'	<span class="icon-z">置顶'+vo.article_top+'</span>'
								+'	<span class="icon-j">精品'+ vo.article_elite +'</span>'
								+' </div>'
								+' <div class="icon-box">'
								+' <span class="icon-y">有用'+vo.article_useful+'</span>'
								+' <span class="icon-yue">阅读数'+vo.article_read+'</span>'
								+' <span class="icon-g">跟帖数'+vo.article_comment+'</span>'
								+' </div>'
								+' </div>'
								+'</li>';	
							articleView.append(articleItem);
							rowIndex++;
						});
					}
				}
			});
    	}
    	
    	/* 前15有用的文章 */
    	function showUserfulArticle(cataloge,dispId){
    		var usefulArticleQueryUrl = "/ssxz/index.php/home/index/usefulArticleQuery";
    		$.ajax({
				type: 'POST',
				url: usefulArticleQueryUrl ,
				data:{'cataloge':cataloge},
				dataType:'json',
				success: function(msg){
					if(msg.data!=null){
						var articleView = $('#'+dispId);
						articleView.text("");
						var rowIndex=1;
						msg.data.forEach(function(vo){
							var articleItem='<li>'
								+'<i>'+rowIndex+'</i>'
								+'<a href="/ssxz/index.php/home/news/newsDetail/id/'+vo.article_id+'"><div>'+vo.article_title+'</div></a>'
								+'</li>';	
							articleView.append(articleItem);
							rowIndex++;
						});
					}
				}
			});
    	}
    	/* 前15的学校 */
    	function showTopSchool(dispId){
    		var usefulSchoolUrl = "/ssxz/index.php/home/index/topSchool";
    		$.ajax({
				type: 'POST',
				url: usefulSchoolUrl ,
				//data:{'cataloge':cataloge},
				dataType:'json',
				success: function(msg){
					if(msg.data!=null){
						var schoolView = $('#'+dispId);
						schoolView.text("");
						var rowIndex=1;
						msg.data.forEach(function(vo){
							var schoolItem='<li>'
								+'<i>'+rowIndex+'</i>'
								+'<a href="/ssxz/index.php/home/School/schoolDetail1/id/'+vo.school_id+'">'+vo.school_name+'</a>'
								+'</li>';	
								schoolView.append(schoolItem);
							rowIndex++;
						});
					}
				}
			});
    	}
    	
    	function showQAList(cataloge,tabUl){
    		var qaQueryUrl = "/ssxz/index.php/home/index/qaQuery";
			$.ajax({
				type: 'POST',
				url: qaQueryUrl ,
				data:{'cataloge':cataloge},
				dataType:'json',
				success: function(msg){
					if(msg.data!=null){
						var qaView = $('#'+tabUl);
						qaView.text("");
						var rowIndex=1;
						msg.data.forEach(function(vo){
							
							var qaItem='<li>'
								+'<a href="/ssxz/index.php/home/news/newsDetail/id/'+vo.article_id+'">'
								+'<i>'+rowIndex+'</i>'+vo.article_title
								+'</a>'
								+'</li>';
							
							qaView.append(qaItem);
							rowIndex++;
						});
					}
				}
			});
    	}
    </script>
    
    <script type="text/javascript">
        $(function () {
            $('#owl-demo').owlCarousel({
                items: 1,navigation:true
            });

            //或者
            /*
            $('#owl-demo').owlCarousel({
                singleItem: true
            });
            */
        });

        $(function () {
            $('#scroll').owlCarousel({
                items: 5,
                autoPlay: true,
                navigation: true,
                navigationText: ["", ""],
                scrollPerPage: true,pagination:false
            });
        });
        
        // 查询事件
        function doSearch(type,typeValue){
        	var keyword = $("#keyword").val();
        	var strPara = '';
        	// 如果存在类型
        	if(type!=null && type!=''){
        		strPara = strPara+"/type/"+type+"/typeValue/"+typeValue;
        	}
        	// 如果存在关键字
        	if(keyword!=null && keyword!=''){
        		strPara = strPara +"/keyword/"+keyword;
        	}
        	window.location.href= "/ssxz/index.php/home/school/schoolList"+strPara;
        }
    </script>
</html>