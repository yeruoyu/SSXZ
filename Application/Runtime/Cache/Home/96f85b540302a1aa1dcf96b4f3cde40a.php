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
                    	<span onclick="ShowTab(1,1,9)" id="Span1">校历</span>
                    	<?php if(empty($level1Info)): ?><span onclick="ShowTab(2,1,9)" id="Span2" style="display:none">学前</span>
                    	<?php else: ?>
                    		<span onclick="ShowTab(2,1,9)" id="Span2">学前</span><?php endif; ?>
                    	<?php if(empty($level2Info)): ?><span onclick="ShowTab(3,1,9)" id="Span3" style="display:none">小学</span>
	                    <?php else: ?>
	                    	<span onclick="ShowTab(3,1,9)" id="Span3">小学</span><?php endif; ?>
	                    <?php if(empty($level3Info)): ?><span onclick="ShowTab(4,1,9)" id="Span4" style="display:none">初中</span>
	                    <?php else: ?>
	                    	<span onclick="ShowTab(4,1,9)" id="Span4">初中</span><?php endif; ?>
	                    <?php if(empty($level4Info)): ?><span onclick="ShowTab(5,1,9)" id="Span5" style="display:none">高中</span>
	                    <?php else: ?>
	                    	<span onclick="ShowTab(5,1,9)" id="Span5">高中</span><?php endif; ?>
	                    <?php if(empty($level5Info)): ?><span onclick="ShowTab(6,1,9)" id="Span6" style="display:none">预科</span>
	                    <?php else: ?>
	                    	<span onclick="ShowTab(6,1,9)" id="Span6">预科</span><?php endif; ?>
	                    <?php if(empty($level6Info)): ?><span onclick="ShowTab(7,1,9)" id="Span7" style="display:none">本科</span>
	                    <?php else: ?>
	                    	<span onclick="ShowTab(7,1,9)" id="Span7">本科</span><?php endif; ?>
	                    <span onclick="ShowTab(8,1,9)" id="Span8">招生简章</span>
                    </div>
                </div>
                <!--左侧栏结束-->
                <!--右侧栏开始-->
                <div class="school-right">
                    <div class="school-right-box">
                        <div class="r-main-box">
                            <!--招生简章begin-->
                            <div id="Tab8">
                                <h2 class="lv"><span>招生简章</span></h2>
                                <div class="main-box">  
                                    <ul class="xxjs-list">
			                        	<?php if(is_array($guideList)): $i = 0; $__LIST__ = $guideList;if( count($__LIST__)==0 ) : echo "正在添加..." ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
				                                <a href="#"><img src="/ssxz/Public/home/images/jpg1.jpg" alt="" /></a>
				                                <div class="con">
				                                    <div class="xxjs-list-tit"><span class="sxzd lv"><a href="/ssxz/index.php/home/news/newsDetail/id/<?php echo ($vo["article_id"]); ?>" ><?php echo ($vo["article_title"]); ?></a></span></div>
				                                    <div class="xxjs-main"><?php echo ($vo["article_excerpt"]); ?></div>
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
				                            </li><?php endforeach; endif; else: echo "正在添加..." ;endif; ?>
			                        </ul>
			                        <div class="green-black">
										　　<?php echo ($page); ?>
									</div>
                                </div>
                            </div>
                            <!--招生简章end-->
                            <!--学前begin-->
                            <div id="Tab2">
                                <div class="hd-box">  
                                    <img src="/ssxz/Uploads/<?php echo ($schoolInfo["school_photo"]); ?>"  style="width:239px; height:219px; margin:74px auto 133px; display:block;" />
                                    <div class="xxbox">
                                        <table class="xtable">
                                            <tr>
                                                <th>课程体系</th>
                                                <td><?php echo ($level1Info["kctx"]); ?></td>
                                            </tr>
                                            <tr>
                                                <th>课程设置</th>
                                                <td><?php echo ($level1Info["kcsz"]); ?></td>
                                            </tr>
                                            <tr>
                                                <th>招生对象</th>
                                                <td><?php echo ($level1Info["zsdx"]); ?></td>
                                            </tr>
                                            <tr>
                                                <th>招生规模</th>
                                                <td><?php echo ($level1Info["zsgm"]); ?></td>
                                            </tr>
                                            <tr>
                                                <th>学费</th>
                                                <td><?php echo ($level1Info["xf"]); ?></td>
                                            </tr>
                                            <tr>
                                                <th>是否招收中国学生</th>
                                                <td><?php echo ($level1Info["zszgxs"]); ?></td>
                                            </tr>
                                            <tr>
                                                <th>是否接受插班生</th>
                                                <td><?php echo ($level1Info["cbs"]); ?></td>
                                            </tr>
                                            <tr>
                                                <th>住宿条件</th>
                                                <td><?php echo ($level1Info["zs"]); ?></td>
                                            </tr>
                                            <tr>
                                                <th>入学标准</th>
                                                <td><?php echo ($level1Info["rxbz"]); ?></td>
                                            </tr>
                                            <tr>
                                                <th>入学考试科目</th>
                                                <td><?php echo ($level1Info["kskm"]); ?></td>
                                            </tr>
                                            <tr>
                                                <th>入学考试安排</th>
                                                <td><?php echo ($level1Info["ksap"]); ?></td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="clearfix"></div>
                                </div> 
                            </div>                            
                            <!--学前end-->
                            <!--小学begin-->
                            <div id="Tab3">
                                <div class="hd-box">  
                                    <img src="/ssxz/Uploads/<?php echo ($schoolInfo["school_photo"]); ?>"  style="width:239px; height:219px; margin:74px auto 133px; display:block;" />
                                    <div class="xxbox">
                                        <table class="xtable">
                                            <tr>
                                                <th>课程体系</th>
                                                <td><?php echo ($level2Info["kctx"]); ?></td>
                                            </tr>
                                            <tr>
                                                <th>课程设置</th>
                                                <td><?php echo ($level2Info["kcsz"]); ?></td>
                                            </tr>
                                            <tr>
                                                <th>招生对象</th>
                                                <td><?php echo ($level2Info["zsdx"]); ?></td>
                                            </tr>
                                            <tr>
                                                <th>招生规模</th>
                                                <td><?php echo ($level2Info["zsgm"]); ?></td>
                                            </tr>
                                            <tr>
                                                <th>学费</th>
                                                <td><?php echo ($level2Info["xf"]); ?></td>
                                            </tr>
                                            <tr>
                                                <th>是否招收中国学生</th>
                                                <td><?php echo ($level2Info["zszgxs"]); ?></td>
                                            </tr>
                                            <tr>
                                                <th>是否接受插班生</th>
                                                <td><?php echo ($level2Info["cbs"]); ?></td>
                                            </tr>
                                            <tr>
                                                <th>住宿条件</th>
                                                <td><?php echo ($level2Info["zs"]); ?></td>
                                            </tr>
                                            <tr>
                                                <th>入学标准</th>
                                                <td><?php echo ($level2Info["rxbz"]); ?></td>
                                            </tr>
                                            <tr>
                                                <th>入学考试科目</th>
                                                <td><?php echo ($level2Info["kskm"]); ?></td>
                                            </tr>
                                            <tr>
                                                <th>入学考试安排</th>
                                                <td><?php echo ($level2Info["ksap"]); ?></td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>                        
                            <!--小学end-->
                            <!--初中begin-->
                            <div id="Tab4">
								<div class="hd-box">  
                                    <img src="/ssxz/Uploads/<?php echo ($schoolInfo["school_photo"]); ?>"  style="width:239px; height:219px; margin:74px auto 133px; display:block;" />
                                    <div class="xxbox">
                                        <table class="xtable">
                                            <tr>
                                                <th>课程体系</th>
                                                <td><?php echo ($level3Info["kctx"]); ?></td>
                                            </tr>
                                            <tr>
                                                <th>课程设置</th>
                                                <td><?php echo ($level3Info["kcsz"]); ?></td>
                                            </tr>
                                            <tr>
                                                <th>招生对象</th>
                                                <td><?php echo ($level3Info["zsdx"]); ?></td>
                                            </tr>
                                            <tr>
                                                <th>招生规模</th>
                                                <td><?php echo ($level3Info["zsgm"]); ?></td>
                                            </tr>
                                            <tr>
                                                <th>学费</th>
                                                <td><?php echo ($level3Info["xf"]); ?></td>
                                            </tr>
                                            <tr>
                                                <th>是否招收中国学生</th>
                                                <td><?php echo ($level3Info["zszgxs"]); ?></td>
                                            </tr>
                                            <tr>
                                                <th>是否接受插班生</th>
                                                <td><?php echo ($level3Info["cbs"]); ?></td>
                                            </tr>
                                            <tr>
                                                <th>住宿条件</th>
                                                <td><?php echo ($level3Info["zs"]); ?></td>
                                            </tr>
                                            <tr>
                                                <th>入学标准</th>
                                                <td><?php echo ($level3Info["rxbz"]); ?></td>
                                            </tr>
                                            <tr>
                                                <th>入学考试科目</th>
                                                <td><?php echo ($level3Info["kskm"]); ?></td>
                                            </tr>
                                            <tr>
                                                <th>入学考试安排</th>
                                                <td><?php echo ($level3Info["ksap"]); ?></td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <!--初中end-->
                            <!--高中begin-->
                            <div id="Tab5">
								<div class="hd-box">  
                                    <img src="/ssxz/Uploads/<?php echo ($schoolInfo["school_photo"]); ?>"  style="width:239px; height:219px; margin:74px auto 133px; display:block;" />
                                    <div class="xxbox">
                                        <table class="xtable">
                                            <tr>
                                                <th>课程体系</th>
                                                <td><?php echo ($level4Info["kctx"]); ?></td>
                                            </tr>
                                            <tr>
                                                <th>课程设置</th>
                                                <td><?php echo ($level4Info["kcsz"]); ?></td>
                                            </tr>
                                            <tr>
                                                <th>招生对象</th>
                                                <td><?php echo ($level4Info["zsdx"]); ?></td>
                                            </tr>
                                            <tr>
                                                <th>招生规模</th>
                                                <td><?php echo ($level4Info["zsgm"]); ?></td>
                                            </tr>
                                            <tr>
                                                <th>学费</th>
                                                <td><?php echo ($level4Info["xf"]); ?></td>
                                            </tr>
                                            <tr>
                                                <th>是否招收中国学生</th>
                                                <td><?php echo ($level4Info["zszgxs"]); ?></td>
                                            </tr>
                                            <tr>
                                                <th>是否接受插班生</th>
                                                <td><?php echo ($level4Info["cbs"]); ?></td>
                                            </tr>
                                            <tr>
                                                <th>住宿条件</th>
                                                <td><?php echo ($level4Info["zs"]); ?></td>
                                            </tr>
                                            <tr>
                                                <th>入学标准</th>
                                                <td><?php echo ($level4Info["rxbz"]); ?></td>
                                            </tr>
                                            <tr>
                                                <th>入学考试科目</th>
                                                <td><?php echo ($level4Info["kskm"]); ?></td>
                                            </tr>
                                            <tr>
                                                <th>入学考试安排</th>
                                                <td><?php echo ($level4Info["ksap"]); ?></td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
							<!--高中end-->
							<!--预科start-->
							<div id="Tab6">
								<div class="hd-box">  
                                    <img src="/ssxz/Uploads/<?php echo ($schoolInfo["school_photo"]); ?>"  style="width:239px; height:219px; margin:74px auto 133px; display:block;" />
                                    <div class="xxbox">
                                        <table class="xtable">
                                            <tr>
                                                <th>课程体系</th>
                                                <td><?php echo ($level5Info["kctx"]); ?></td>
                                            </tr>
                                            <tr>
                                                <th>课程设置</th>
                                                <td><?php echo ($level5Info["kcsz"]); ?></td>
                                            </tr>
                                            <tr>
                                                <th>招生对象</th>
                                                <td><?php echo ($level5Info["zsdx"]); ?></td>
                                            </tr>
                                            <tr>
                                                <th>招生规模</th>
                                                <td><?php echo ($level5Info["zsgm"]); ?></td>
                                            </tr>
                                            <tr>
                                                <th>学费</th>
                                                <td><?php echo ($level5Info["xf"]); ?></td>
                                            </tr>
                                            <tr>
                                                <th>是否招收中国学生</th>
                                                <td><?php echo ($level5Info["zszgxs"]); ?></td>
                                            </tr>
                                            <tr>
                                                <th>是否接受插班生</th>
                                                <td><?php echo ($level5Info["cbs"]); ?></td>
                                            </tr>
                                            <tr>
                                                <th>住宿条件</th>
                                                <td><?php echo ($level5Info["zs"]); ?></td>
                                            </tr>
                                            <tr>
                                                <th>入学标准</th>
                                                <td><?php echo ($level5Info["rxbz"]); ?></td>
                                            </tr>
                                            <tr>
                                                <th>入学考试科目</th>
                                                <td><?php echo ($level5Info["kskm"]); ?></td>
                                            </tr>
                                            <tr>
                                                <th>入学考试安排</th>
                                                <td><?php echo ($level5Info["ksap"]); ?></td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <!--预科end-->
                            <!--本科begin-->
                            <div id="Tab7">
								<div class="hd-box">  
                                    <img src="/ssxz/Uploads/<?php echo ($schoolInfo["school_photo"]); ?>"  style="width:239px; height:219px; margin:74px auto 133px; display:block;" />
                                    <div class="xxbox">
                                        <table class="xtable">
                                            <tr>
                                                <th>课程体系</th>
                                                <td><?php echo ($level6Info["kctx"]); ?></td>
                                            </tr>
                                            <tr>
                                                <th>课程设置</th>
                                                <td><?php echo ($level6Info["kcsz"]); ?></td>
                                            </tr>
                                            <tr>
                                                <th>招生对象</th>
                                                <td><?php echo ($level6Info["zsdx"]); ?></td>
                                            </tr>
                                            <tr>
                                                <th>招生规模</th>
                                                <td><?php echo ($level6Info["zsgm"]); ?></td>
                                            </tr>
                                            <tr>
                                                <th>学费</th>
                                                <td><?php echo ($level6Info["xf"]); ?></td>
                                            </tr>
                                            <tr>
                                                <th>是否招收中国学生</th>
                                                <td><?php echo ($level6Info["zszgxs"]); ?></td>
                                            </tr>
                                            <tr>
                                                <th>是否接受插班生</th>
                                                <td><?php echo ($level6Info["cbs"]); ?></td>
                                            </tr>
                                            <tr>
                                                <th>住宿条件</th>
                                                <td><?php echo ($level6Info["zs"]); ?></td>
                                            </tr>
                                            <tr>
                                                <th>入学标准</th>
                                                <td><?php echo ($level6Info["rxbz"]); ?></td>
                                            </tr>
                                            <tr>
                                                <th>入学考试科目</th>
                                                <td><?php echo ($level6Info["kskm"]); ?></td>
                                            </tr>
                                            <tr>
                                                <th>入学考试安排</th>
                                                <td><?php echo ($level6Info["ksap"]); ?></td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <!--本科end-->                
                            <!--招生活动end-->
                            <div id="Tab1">
                                <div class="hd-box"> 
<!--                                 	<div class="zshd">
                                		<img src="/ssxz/Public/home/images/schedule_logo.jpg" />
                                	</div>  -->
                                    <div class="zshd">
                                        <!-- <div class="fm-l">
                                            <img src="/ssxz/Public/home/images/adx.jpg" />
                                            <div class="fm-t">
                                            </div>
                                            <?php if(is_array($activityList)): $i = 0; $__LIST__ = $activityList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="fm-d"><span><?php echo ($vo["activity_startdate"]); ?></span><span><?php echo ($vo["activity_title"]); ?></span></div><?php endforeach; endif; else: echo "" ;endif; ?>
                                            <div class="fm-btn text-center"><a href="#" class=" btn-default btn ">免费预约</a></div>
                                        </div>-->
                                        <!--<div class="rl-r">-->
                                            <!--学校日历begin-->
											<div id="calendar1"></div>
										    <!--学校日历end-->  
                                        <!--</div>-->
                                        <div class="clearfix"></div>
                                    </div>
                                    
									<div class="hd-libox">
                                        <div class="hd-tit"><span id="activityTitle"></span></div>
                                        <ul class="ol-li">
                                            <li><span  id="activityDetail"></span></li>
                                        </ul>
                                    </div>
                                    <div class="clearfix"></div>

                                    <!-- <div class="hd-libox" style="height:800px">
                                        <div class="hd-tit"><span id="activityTitle"></span></div>
                                        <div class="hd-detail" id="activityDetail">4234234
						                </div>
                                    </div>
                                    <div class="clearfix"></div> -->
                                </div> 
                            </div>
                            <!--招生活动end-->
                        </div>       
                        <SCRIPT type="text/javascript">ShowTab(<?php echo ($showTab); ?>, 1, 9);</SCRIPT>
                    </div>             
                    
                </div>
                <!--右侧栏结束-->        
            </div>
        </div>
        <!--中间end-->
        
        <!--评论begin-->
        <div class="container comment" style="display:none">
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
		        	url:'/ssxz/index.php/home/Activity/findActivityDays?schoolId=<?php echo ($schoolId); ?>',
		        	type:"POST",
		        	async:false,
		    		success:function(response, postdata) {
		    			$("#calendar").fullCalendar('removeEvents');    
		    			for(var i=0;i<response.data.length;i++) {    
		            		var obj = new Object();    
		            		obj.title = '*';  // response.data[i].activity_title
		            		//obj.title = response.data[i].activity_title;
		                   	obj.url="/ssxz/index.php/home/School/schoolDetail2/id/<?php echo ($schoolId); ?>";
		                   	obj.start = response.data[i].activity_startdate;                   
		                   	//obj.end = response.data[i].activity_enddate;   
		                   $("#calendar").fullCalendar('renderEvent',obj,true);                     
		               } 
		    		}
		        }); //把从后台取出的数据进行封装以后在页面上以fullCalendar的方式进行显示  
		    }
			
		});
		
		$('#calendar1').fullCalendar({
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
		    			$("#calendar1").fullCalendar('removeEvents');    
		    			for(var i=0;i<response.data.length;i++) {    
		            		var obj = new Object();    
		                   	//obj.id = response[i].id;    
		                   	obj.title = response.data[i].activity_title;  
		                   	//obj.url="/crm_web/schedule/scheduleDetail?scheduleId="+response[i].scheduleId; 
		                   	//obj.description = data[i].description;            
		                   	//obj.color = data[i].color;  
		                   	//obj.remindertime = $.fullCalendar.parseDate(data[i].remindertime);  
		                   	//obj.messagenotice = data[i].messagenotice;  
		                   //	obj.description = data[i].description;
		                   obj.description = response.data[i].activity_detail;
		                   	obj.start = response.data[i].activity_startdate;                   
		                   	obj.end = response.data[i].activity_enddate;   
		                   $("#calendar1").fullCalendar('renderEvent',obj,true);                     
		               } 
		    		}
		        }); //把从后台取出的数据进行封装以后在页面上以fullCalendar的方式进行显示  
		    },
		    eventClick: function(calEvent, jsEvent, view) {
		    	var activityTitle = calEvent.title;
		    	var activityDetail = calEvent.description;
		    	
		    	$('#activityTitle').html(activityTitle);
		    	$('#activityDetail').html(activityDetail);
	        } 
		});
	});
</script>
</body>
</html>