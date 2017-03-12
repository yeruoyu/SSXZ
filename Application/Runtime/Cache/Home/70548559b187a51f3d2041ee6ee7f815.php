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

<script type="text/javascript" src="http://api.map.baidu.com/api?v=1.3"></script>
<style>
#mapbox{width:970px;height:1100px; background-color:#CCC; border:1px solid #CCC; font-size:12px;}
#mapbox #map{width:970px;height:1100px; float:left;}
#mapbox .close{ display:block; right:10px; top:0px; line-height:22px; text-decoration:none; color:#0000}
</style>
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
		        	url:'/ssxz/index.php/home/Activity/findActivityDays?schoolId=<?php echo ($schoolId); ?>',
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
	                    <span onclick="ShowTab(1,1,8)" id="Span1">学校简介</span>
	                    <?php if(empty($featureInfo)): ?><span onclick="ShowTab(2,1,8)" id="Span2" style="display:none">课堂特色</span>
	                    <?php else: ?>
	                    	<span onclick="ShowTab(2,1,8)" id="Span2">课堂特色</span><?php endif; ?>
	                    <?php if(empty($schoolInfo["master_name"])): ?><span onclick="ShowTab(3,1,8)" id="Span3" style="display:none">校长录</span>
	                    <?php else: ?>
	                    	<span onclick="ShowTab(3,1,8)" id="Span3">校长录</span><?php endif; ?>
	                    <?php if(empty($teacherList)): ?><span onclick="ShowTab(4,1,8)" id="Span4" style="display:none">师资团体</span>
	                    <?php else: ?>
	                    	<span onclick="ShowTab(4,1,8)" id="Span4">师资团体</span><?php endif; ?>
	                    <?php if(empty($achievementList)): ?><span onclick="ShowTab(5,1,8)" id="Span5" style="display:none">教学成果</span>
	                    <?php else: ?>
	                    	<span onclick="ShowTab(5,1,8)" id="Span5">教学成果</span><?php endif; ?>
	                    <?php if(empty($imageList)): ?><span onclick="ShowTab(6,1,8)" id="Span6" style="display:none">印象校园</span>
	                    <?php else: ?>
	                    	<span onclick="ShowTab(6,1,8)" id="Span6">印象校园</span><?php endif; ?>
	                    <?php if(empty($schoolInfo["school_map"])): ?><span onclick="ShowTab(7,1,8)" id="Span7" style="display:none"><i>MAP</i></span>
	                    <?php else: ?>
	                    	<span onclick="ShowTab(7,1,8)" id="Span7"><i>MAP</i></span><?php endif; ?>
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
                                    <img src="/ssxz/Uploads/<?php echo ($schoolInfo["school_photo"]); ?>"  style="width:239px; height:219px; margin:74px auto 133px; display:block;" />
                                    <p style="font-size:18px;"><strong><?php echo ($schoolInfo["school_name"]); ?></strong></p>
                                    <?php echo ($schoolInfo["school_detail"]); ?>
                                </div>                                
                                <!-- <div class="bottom-next"></div> -->
                            </div>                            
                            <!--校园新闻end-->
                            <!--课程特色begin-->
                            <div id="Tab2">
                                <h2 class="lv"><span>课堂特色</span></h2>   
                                <div class="main-box">
                                    <!--编辑begin-->
                                    <?php if(is_array($featureInfo)): $i = 0; $__LIST__ = $featureInfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; echo ($vo["article_detail"]); endforeach; endif; else: echo "" ;endif; ?>
                                    <!--编辑区end-->
                                </div>                      
                                <div class="bottom-next"></div>

                            </div>                        
                            <!--课程特色end-->
                            <!--校长录begin-->
                            <div id="Tab3">
                                <h2 class="lv"><span>校长致辞</span></h2>
                                <div class="main-box">
                                    <img src="/ssxz/Uploads/<?php echo ($schoolInfo["master_photo"]); ?>" style="float:left; width:280px; height:189px; margin-left:24px;" />
                                    <div class="" style="color:#727171; margin-top:25px;">
                                        <p style="color:#000;font-size:18px;"><?php echo ($schoolInfo["master_name"]); ?></p>
                                        <p><?php echo ($schoolInfo["master_record1"]); ?></p>
                                        <p><?php echo ($schoolInfo["master_record2"]); ?></p>
                                        <p><?php echo ($schoolInfo["master_record3"]); ?></p>
                                        <p><?php echo ($schoolInfo["master_record4"]); ?></p>
                                    </div>
                                    <div class="clearfix"></div>
                                    <p style="margin-top:25px;"><?php echo ($schoolInfo["master_excerpt"]); ?></p>
                                </div>
                                <h2 class="lv"><span>校长录</span></h2>
                                <div class="main-box">  
                                    <ul class="xxjs-list">
                                    	<?php if(is_array($masterList)): $i = 0; $__LIST__ = $masterList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
	                                            <a href="#"><img src="/ssxz/Uploads/<?php echo ($vo["article_photo"]); ?>" alt="" /></a>
	                                            <div class="xxjs-list-tit"><span class="sxzd lv"><a href="#" ><?php echo ($vo["article_title"]); ?></a></span></div>
	                                            <div class="xxjs-main"><?php echo ($vo["article_excerpt"]); ?></div>
	                                            <div class="icon-ai">
	                                                <span class="icon-z">置顶</span>
	                                                <span class="icon-j">精品</span>
	                                            </div>
	                                            <div class="icon-box">
	                                                <span class="icon-y">有用</span>
	                                                <span class="icon-yue">阅读数</span>
	                                                <span class="icon-g">跟帖数</span>
	                                            </div>
	                                        </li><?php endforeach; endif; else: echo "" ;endif; ?>
                                    </ul>
                                </div>                                
                                <!-- <div class="bottom-next"></div> -->
                            </div>
                            <!--校长录end-->
                            <!--师资团体begin-->
                            <div id="Tab4">
                                <h2 class="lv"><span>师资团体</span></h2>
                                <div class="main-box">
                                   <ul class="sztt">
                                       <?php if(is_array($teacherList)): $i = 0; $__LIST__ = $teacherList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
											   <div class="li-img"><img src="/ssxz/Uploads/<?php echo ($vo["teacher_photo"]); ?>" width="306" /></div>
											   <div class="li-name"><?php echo ($vo["teacher_name"]); ?></div>
											   <div class="li-tag"><?php echo ($vo["teacher_tag"]); ?></div>
											   <div class="li-school"><?php echo ($vo["teacher_school"]); ?></div>
											   <div class="li-de"><?php echo ($vo["teacher_introduction"]); ?></div>
										   </li><?php endforeach; endif; else: echo "" ;endif; ?>
										<?php if(($teacherCount%2 == 1)): ?><li>
											   <div class="li-img" style="width:306">&nbsp;</div>
											   <div class="li-name">&nbsp;</div>
											   <div class="li-tag">&nbsp;</div>
											   <div class="li-school">&nbsp;</div>
											   <div class="li-de">&nbsp;</div>
										   </li><?php endif; ?>
                                   </ul>
                                </div>
                               <!--  <div class="bottom-next"></div> -->
                            </div>
                            <!--师资团体end-->
                            <!--教学成果begin-->
                            <div id="Tab5">
                                <h2 class="lv"><span>教学成果</span></h2>
                                <div class="main-box">  
                                    <ul class="xxjs-list">
                                    	<?php if(is_array($achievementList)): $i = 0; $__LIST__ = $achievementList;if( count($__LIST__)==0 ) : echo "暂无信息" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
	                                            <a href="#"><img src="/ssxz/Public/home/images/jpg1.jpg" alt="" /></a>
	                                            <div class="xxjs-list-tit"><span class="sxzd lv"><a href="#" ><?php echo ($vo["article_title"]); ?></a></span></div>
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
	                                        </li><?php endforeach; endif; else: echo "暂无信息" ;endif; ?>
                                    </ul>
                                </div>
                                <!-- <div class="bottom-next"></div> -->
                            </div>
                            <!--教学成果end-->                            
                            <!--印象校园end-->
                            <div id="Tab6">
                                <div class="main-box">
                                    <ul class="yxxy">
                                    	<?php if(is_array($imageList)): $i = 0; $__LIST__ = $imageList;if( count($__LIST__)==0 ) : echo "暂无信息" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="#">
	                                                <img src="/ssxz/Uploads/<?php echo ($vo["images_path"]); ?>" />
	                                                <p><?php echo ($vo["images_title"]); ?></p>
	                                            </a>
	                                        </li><?php endforeach; endif; else: echo "暂无信息" ;endif; ?>
                                    </ul>
                                </div>
                                <!-- <div class="bottom-next"></div> -->
                            </div>
                            <!--印象校园end-->
                            <!--MAP end-->
                            <div id="Tab7">
								<div id="mapbox">
									<div class="mapheader">
									</div>
									<div id="map"></div>
									</div>
							</div> 
                            <!--MAP end-->
                        </div>       
                        <SCRIPT type="text/javascript">ShowTab(<?php echo ($showTab); ?>, 1, 8);</SCRIPT>
                    </div>             
                    
                </div>
                <!--右侧栏结束-->        
            </div>
        </div>
        <!--中间end-->
        
        <!--评论begin-->
        <meta charset="UTF-8">


<div class="comment"  style=" position:relative; border-bottom: 2px solid #0fa484;" id="comments">
	<div class="comment-box">
		<?php if(isset($_SESSION['userInfo'])): ?><input type="hidden" id="loginFlag" value="1"/>
			<h1><span>我的点评</span></h1>
				<div class="comment-main">
					<form class="form-horizontal comment-form" method="post" role="form" id="login">
				  		<div class="control-group" style="padding-bottom: 2px">
					  		<div class="comment-postbox-wraper">
					  			<input type="hidden" value="<?php echo ($commentSchoolId); ?>" id="commentSchoolId" />
					  			<input type="hidden" value="0" id="commentLevel" />
					  			<textarea class="form-control comment-postbox" id="commentDetail" placeholder="请输入你的评论" style="min-height:90px;"  name="content"></textarea>
					  		</div>
				  		</div>
				  		<div class="control-group" style="padding-bottom: 20px">
				   			<button type="button" onclick="doSave()" class="btn pull-right btn-primary js-ajax-submit"><i class="fa fa-comment-o"></i> 发表评论</button>
				  		</div>
					</form>
				</div>
			<?php else: ?>
				<input type="hidden" id="loginFlag" value="0"/><?php endif; ?>
            <h1><span>最新点评</span></h1>
            <div class="comment-main">
            	<ul class="PinL" id="commentRoot"></ul>
            </div>
	</div>
</div>
<script type="text/javascript">
	
	jQuery(document).ready(function($){
		queryComments();
	});
	
	function dispHf(areaId){
		
		
		
		if( $('#'+areaId).css('display')=='none' ){
			$('#'+areaId).css('display',''); 
		}else{
			$('#'+areaId).css('display','none'); 
		}
	}
	
	function queryComments(){
		var queryUrl="/ssxz/index.php/home/comment/querySchoolComment";
		var loginFlag= $('#loginFlag').val();
		$.ajax({
			url:queryUrl,
			method: 'POST',
			dataType: 'json',
			data: {
				schoolId: $('#commentSchoolId').val()
			},success: function(resp)
			{
				var strHtml = "";
				$(resp).each(function(i,val) {

                    strHtml +="<li>";
                    strHtml +="<div class='img'>";
                    strHtml +="<a href='#'><img src='/ssxz/Public/home/images/pl.jpg' /></a>";
                    strHtml +="</div>";
                    strHtml +="<div class='box'>";
                    strHtml +="<div class='box-main'>";
					strHtml +="<div class='tit'>";
					strHtml +="<span class='us-time'>"+val.comment_time+"</span>";
					if(val.comment_user_name==null){
						strHtml +="<span class='us-name'>游客</span>";
					}else{
						strHtml +="<span class='us-name'>"+val.comment_user_name+"</span>";
					}
					strHtml +="</div>";
					strHtml +="<div class='conn'>";
					strHtml +="<p>"+val.comment_detail+"</p>";
					strHtml +="</div>";
					if(loginFlag=="1"){
					strHtml +="<div class='ico'>";
					strHtml +="<div class='ico-box' style='cursor:pointer'>";
					//strHtml +="<i class='gap-gw'></i>";
					//strHtml +=" <span class='click-ding-gw'><a href='javascript:void(0)' title='顶' class='evt-support'><i class='icon-gw icon-ding-bg'></i><em class='icon-name-bg'></em></a></span>";
					//strHtml +="<i class='gap-gw'></i>";
					//strHtml +="<span class='click-cai-gw'><a href='javascript:void(0)' title='踩' class='evt-opposed'><i class='icon-gw icon-cai-bg'></i><em class='icon-name-bg'></em></a></span>";
					strHtml +="<i class='gap-gw'></i>";
					strHtml +="<span class='click-reply-gw click-reply-eg' onclick='dispHf(\"area_"+val.comment_id+"\")' >回复</span>";
					//strHtml +="<i class='gap-gw'></i>";
					//strHtml +="<span class='click-share-gw click-reply-eg'><a href='javascript:void(0)' class='evt-share'>分享</a></span>";
					strHtml +="</div>";
					strHtml +="</div>";
					strHtml +="<div class='clearfix'></div>";
					strHtml +="<div class='area' style='display:none' id='area_"+val.comment_id+"'>";
					strHtml +="<div class='areabox'>";
					strHtml +="<textarea id='hfArea_"+val.comment_id+"' class='textarea'></textarea>";
					strHtml +="</div>";
					strHtml +="<div class='actio'>";
					strHtml +="<div class='actio-box'>";
					strHtml +="</div>";
					strHtml +="<div class='hf'>";
					strHtml +="<div class='hf-box'>";
					strHtml +="<span class='hf-btn'  onclick='doHf(\"hfArea_"+val.comment_id+"\",\""+val.comment_id+"\")'>回复</span>";
					strHtml +="</div>";       
					strHtml +="</div>"; 
					}
					strHtml +="</div>"; 
					strHtml +="</div>"; 
					strHtml +="</div>"; 
					strHtml +="<div class='clearfix'></div>"; 
					strHtml +="</li>"; 
				});
				$('#commentRoot').html(strHtml);
			}
		});
	}
	
	function doHf(hfAreaId,parentId){
		var saveUrl="/ssxz/index.php/home/comment/commentSchoolSave";
		$.ajax({
			url:saveUrl,
			method: 'POST',
			dataType: 'json',
			data: {
				schoolId: $('#commentSchoolId').val(),
				commentLevel: $('#commentLevel').val(),
				commentDetail:$('#'+hfAreaId).val(),
				comment_parent_id: parentId,
			},success: function(resp)
			{
				if(resp=="success")
				{
					alert("回复成功.");
					queryComments();
				}
				else
				{
					alert("回复失败");
				}
			}
		});
	}
	
	function doSave(){
		var saveUrl="/ssxz/index.php/home/comment/commentSchoolSave";
		$.ajax({
			url:saveUrl,
			method: 'POST',
			dataType: 'json',
			data: {
				schoolId: $('#commentSchoolId').val(),
				commentLevel: $('#commentLevel').val(),
				commentDetail:$('#commentDetail').val(),
			},success: function(resp)
			{
				if(resp=="success")
				{
					alert("学校评论成功.");
					$('#commentDetail').val('');
					queryComments();
				}
				else
				{
					alert("评论失败.");
				}
			}
		});
	}
</script>
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

<script type="text/javascript"> 
var map = new BMap.Map("map"); // 创建地图实例 ,48
var map_value_x = <?php echo ($mapx); ?>;
var map_value_y = <?php echo ($mapy); ?>;
var map_title = "<?php echo ($schoolInfo["school_name"]); ?>";
var map_address = "<?php echo ($schoolInfo["school_address"]); ?>";
var point = new BMap.Point(map_value_x ,map_value_y); // 创建点坐标 
map.centerAndZoom(point, 20); // 初始化地图，设置中心点坐标和地图级别
map.addEventListener("zoomend", function(){   //缩放事件
 //alert("地图缩放至：" + this.getZoom() + "级");   
}); 
/*
1.
NavigationControl：地图平移缩放控件，默认位于地图左上方，它包含控制地图的平移和缩放的功能。 
OverviewMapControl：缩略地图控件，默认位于地图右下方，是一个可折叠的缩略地图。 
ScaleControl：比例尺控件，默认位于地图左下方，显示地图的比例关系。 
MapTypeControl：地图类型控件，默认位于地图右上方。 
CopyrightControl：版权控件，默认位于地图左下方。 
*/
//配置控件参数
//var opts = {type: BMAP_NAVIGATION_CONTROL_SMALL}   
//map.addControl(new BMap.NavigationControl(opts));
map.addControl(new BMap.NavigationControl());  
map.addControl(new BMap.ScaleControl());   
//map.addControl(new BMap.OverviewMapControl());   
//map.addControl(new BMap.MapTypeControl());   
//map.setCurrentCity("台州");


var marker = new BMap.Marker(point);        // 创建标注   
map.addOverlay(marker);  

var opts = {   
 width : 250,     // 信息窗口宽度   
 height: 100,     // 信息窗口高度   
 title : map_title  // 信息窗口标题   
}   
var infoWindow = new BMap.InfoWindow(map_address, opts);  // 创建信息窗口对象   
map.openInfoWindow(infoWindow, map.getCenter());      // 打开信息窗口   

map.enableScrollWheelZoom();//滚轮缩放事件
//map.enableKeyboard(); //键盘方向键缩放事件
map.enableContinuousZoom(); // 开启连续缩放效果
//map.enableInertialDragging();　// 开启惯性拖拽效果 


</script>
</body>
</html>