<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
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
                <a class="item"><img src="/ssxz/Public/home/images/banner1.jpg" alt=""></a>
                <a class="item"><img src="/ssxz/Public/home/images/banner1.jpg" alt=""></a>
                <a class="item"><img src="/ssxz/Public/home/images/banner1.jpg" alt=""></a>
            </div>
            <!--轮播end-->
            <!--筛选-->
            <div class="container sx-box">
                <div class="title">
                    <span class="t1">国际学校查询</span>
                    <span class="t3">全国最全的国际学校分析、最客观的国际学校评价信息</span>
                    <div class=" t2 r-search" style="padding:0px; margin-top:0px;">
                     	<input type="hidden" id="type" name="type" value="<?php echo ($type); ?>"/>
                     	<input type="hidden" name="sql" value="<?php echo ($sql); ?>"/>
                        <input type="text" id="keyword" name="keyword" placeholder="关键字模糊搜索" value="<?php echo ($keyword); ?>" class="r-search-input form-control" style="width:90%;" />
                        <input type="button" onclick="doSearch('','')" class="r-searcj-btn" value="搜索" />
                         <div class="clearfix"></div>
                     </div> 

                    
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
                <!-- 
                <div class="fzcd">
                    <div class="zcd">
                        <i></i><a href="login.html"> 注册登录</a>
                    </div>
                    <div class="wdgz">
                       	 我的关注
                    </div>
                    <div class="zx">
                        <a href="#"><img src="/ssxz/Public/home/img/zx.png" /></a>
                    </div>
                </div>
                 -->
            </div>
            <!--筛选end-->
        </div>
        <!--容器end-->
		
        <div class="container">
        <!-- 
            <div class="row" style="margin:97px auto;">
                <div class="col-sm-3" style="padding-left:0px; height:314px">
                    <div class="right" style="height:264px;">
                <div class="schoolcalendar-title" style="height:50px; line-height:50px;">国际学校日历</div>
                <div class="schoolcalendar-main" style="height:264px;">
                    <img src="/ssxz/Public/home/images/schoolcalendar-mainbg.jpg">
                </div>
            </div>
                </div>
                <div class="col-sm-9" style="padding-left:0px; padding-right:0px;">

                    <div class="Admission">
                        <div class="group-title" style="margin-top:0px;">
                            <a href="#" class="group-item">
                                国际学校匹配推荐
                            </a>
                            <a href="#" class="group-item on">
                                国际学校录取评估
                            </a>
                        </div>
                        <div class="group-box">
                            <form action="#" method="post">
                            <div class="group">
                                <div class="item item1">
                                    <select class="form-control">
                                        <option>选择国际学校地区</option>
                                        <option>选择国际学校地区</option>
                                        <option>选择国际学校地区</option>
                                        <option>选择国际学校地区</option>
                                        <option>选择国际学校地区</option>
                                    </select>
                                </div>
                                <div class="item item2">
                                    <span class="item_label">最新英语成绩</span>
                                    <div class="right_box">
                                        <select class="form-control">
                                            <option>选择类型</option>
                                            <option>选择类型</option>
                                            <option>选择类型</option>
                                            <option>选择类型</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>

            
                            <div class="group">
                                <div class="item item1">
                                    <select class="form-control">
                                        <option>选择热门课程</option>
                                        <option>选择热门课程</option>
                                        <option>选择热门课程</option>
                                        <option>选择热门课程</option>
                                    </select>
                                </div>
                                <div class="item item2">
                                        <input type="text" placeholder="填写其他英语考试" required="" value="" class="form-control input-con">
                    
                                </div>
                                    <div class="right_in">
                                        <input type="text" placeholder="填写成绩" class="form-control input-con">
                                    </div>
                                <div class="clearfix"></div>
                            </div>
            
                            <div class="group">
                                <div class="item item1">
                                    <span class="item_label">年纪</span>
                                    <div class="right_box">
                                        <div class="age">
                                            <select class="form-control">
                                                <option>年</option>
                                                <option>2015</option>
                                                <option>2014</option>
                                                <option>2013</option>
                                            </select>
                                        </div>
                                        <div class="age">
                                            <select class="form-control">
                                                <option>月</option>
                                                <option>12</option>
                                                <option>11</option>
                                                <option>10</option>
                                            </select>
                                        </div>
                                        <div class="age">
                                            <select class="form-control">
                                                <option>日</option>
                                                <option>31</option>
                                                <option>30</option>
                                                <option>29</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="item item2">
                                    <span class="item_label">最新数学成绩</span>
                                    <div class="right_box">
                                        <select class="form-control">
                                            <option>选择考试类型</option>
                                            <option>选择考试类型</option>
                                            <option>选择考试类型</option>
                                            <option>选择考试类型</option>
                                        </select>
                                    </div>
                                </div>
                                    <div class="right_in">
                                        <input type="text" placeholder="填写成绩" class="form-control input-con">
                                    </div>
                                <div class="clearfix"></div>
                            </div>


            
                            <div class="group">
                                <div class="item item1">
                                    <span class="item_label">就读/毕业于</span>
                                    <div class="right_box">
                                        <div class="diqux">
                                            <select class="form-control">
                                                <option>选择地区</option>
                                                <option>选择地区</option>
                                                <option>选择地区</option>
                                            </select>
                                        </div>
                                        <div class="schoolname">
                                                <input type="text" placeholder="输入学校名称" class="form-control input-con">
                                        </div>
                                    </div>
                                </div>
                                <div class="item item2">
                                    <span class="item_label">艺术特长</span>
                                    <div class="right_box">
                                        <select class="form-control">
                                            <option>选择类型</option>
                                            <option>选择类型</option>
                                            <option>选择类型</option>
                                            <option>选择类型</option>
                                        </select>
                                    </div>
                                </div>
                                    <div class="right_in">
                                        <input type="text" placeholder="填写详细成绩" class="form-control input-con">
                                    </div>
                                <div class="clearfix"></div>
                            </div>

            
                            <div class="group item_center">
                
                                    <div class="group-page">
                                        <select class="form-control">
                                            <option>选择留学方向</option>
                                            <option>选择留学方向</option>
                                            <option>选择留学方向</option>
                                            <option>选择留学方向</option>
                                        </select>
                                    </div>
                                <button class="btn btn-danger btn-star" type="submit">开&nbsp;&nbsp;&nbsp;&nbsp;始</button>
                                <div class="clearfix"></div>
                            </div>
                                </form>
                        </div>


        
        
            
                    </div>

                </div>
            </div>
             -->
            <!--------->

            <div class="tj-box">
                <div class="tj-span">
                    <a href="/ssxz/index.php/home/school/schoolList/showflag/1">推荐学校</a>
                    <a href="/ssxz/index.php/home/school/schoolList/showflag/0">新加入学校</a>
                </div>
                <div class="lunbo">
                    <div class="scroll-outer">
	                    <div id="scroll" class="owl-carousel">
	                    	<?php if(is_array($vslidechoolList)): $i = 0; $__LIST__ = $vslidechoolList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="item">
				                    <?php if(empty($vo["school_photo"])): ?><img src="/ssxz/Public/home/images/lb1.jpg" width="239" height="219"/>
	                        		<?php else: ?>
	                        		 	<img src="/ssxz/Uploads/<?php echo ($vo["school_photo"]); ?>" width="239" height="219" /><?php endif; ?>
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
            <div class="xueli-l left">
                <div class="bg title">
                    <div class="title-main">
                        <a href="#" class="cur">加入时间</a>|
                        <a href="#">关注度</a>|
                        <a href="#">点评数</a>
                    </div>
                </div>

                <div class="lib-li">
                	<?php if(is_array($vschoolList)): $i = 0; $__LIST__ = $vschoolList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="col">
	                        <div class="dp">
	                            <a href="#">关注点分值</a>
	                            <a href="#"><?php echo ($vo["comment_count"]); ?>人点评</a>
	                        </div>
	                        <?php if(($attentionCount == 0)): ?><div class="g io"><a href="/ssxz/index.php/home/School/attentionSchool/type/add/id/<?php echo ($vo["school_id"]); ?>">+关注</a></div> 
	                        <?php else: ?>
	                        	<div class="g io"><a href="/ssxz/index.php/home/School/attentionSchool/type/del/id/<?php echo ($vo["school_id"]); ?>">取消关注</a></div><?php endif; ?>
	                        <!-- <div class="h io">话题区</div>  -->
	                        <div class="img"><img src="/ssxz/Uploads/<?php echo ($vo["school_photo"]); ?>" /></div>
	                        <div class="img-r">
	                            <div class="title">
	                                <a href="/ssxz/index.php/home/School/schoolDetail1/id/<?php echo ($vo["school_id"]); ?>" class="tit"><?php echo ($vo["school_name"]); ?></a>
	                               <!--  <a href="#" class="lib-btn">立即报名</a> -->
	                            </div>
	                            <div class="con">
	                                <span>所在地区：<?php echo ($vo["school_areaname"]); ?></span>
	                                <span>课程体系：<?php echo (str_replace(',',' ',$vo["school_coursename"])); ?></span>
	                            </div>
	                            <div class="clearfix"></div>
	                        </div>
	                        <div class="clearfix"></div>
	                    </div><?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
                <div class="green-black">
					　　<?php echo ($page); ?>
				</div>
                
            </div>
            <div class="xueli-r left">
                <div class="list-07">
                    <div class="list_08">
                        <img src="/ssxz/Public/home/images/list_08.jpg" />
                    </div>
                    <div class="list_09">
                        <ul>
                       		<?php if(is_array($topSchoolList)): $i = 0; $__LIST__ = $topSchoolList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><i><?php echo ($i); ?></i><a href="/ssxz/index.php/home/School/schoolDetail1/id/<?php echo ($vo["school_id"]); ?>"><?php echo ($vo["school_name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </div>
                </div>
                <!-- 
                <div class="list-10">
                    <div class="tit10">
                        <div class="tit10-in">
                          	  最近浏览
                        </div>
                    </div>
                    <div class="list-11">
                        <div class="list-11img">
                            <img src="/ssxz/Public/home/images/list_11.jpg" />
                        </div>
                        <div class="list11-p">
                            <h3>北京爱迪国际学校</h3>
                            <div><span>课程类型：</span>A-Level</div>
                            <div><span>项目阶段：</span>高等教育阶段</div>
                            <div><span>所属地区：</span></div>
                        </div>
                        <div class="list11-h">+关注</div>
                        <div class="list11-g">话题区</div>
                    </div>
                    <div class="list-11">
                        <div class="list-11img">
                            <img src="/ssxz/Public/home/images/list_11.jpg" />
                        </div>
                        <div class="list11-p">
                            <h3>北京爱迪国际学校</h3>
                            <div><span>课程类型：</span>A-Level</div>
                            <div><span>项目阶段：</span>高等教育阶段</div>
                            <div><span>所属地区：</span></div>
                        </div>
                        <div class="list11-h">+关注</div>
                        <div class="list11-g">话题区</div>
                    </div>
                    <div class="list-11">
                        <div class="list-11img">
                            <img src="/ssxz/Public/home/images/list_11.jpg" />
                        </div>
                        <div class="list11-p">
                            <h3>北京爱迪国际学校</h3>
                            <div><span>课程类型：</span>A-Level</div>
                            <div><span>项目阶段：</span>高等教育阶段</div>
                            <div><span>所属地区：</span></div>
                        </div>
                        <div class="list11-h">+关注</div>
                        <div class="list11-g">话题区</div>
                    </div>
                    <div class="list-11">
                        <div class="list-11img">
                            <img src="/ssxz/Public/home/images/list_11.jpg" />
                        </div>
                        <div class="list11-p">
                            <h3>北京爱迪国际学校</h3>
                            <div><span>课程类型：</span>A-Level</div>
                            <div><span>项目阶段：</span>高等教育阶段</div>
                            <div><span>所属地区：</span></div>
                        </div>
                        <div class="list11-h">+关注</div>
                        <div class="list11-g">话题区</div>
                    </div>
                </div>
 -->
            </div>
            <div class="clearfix"></div>
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