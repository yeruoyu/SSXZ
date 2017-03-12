<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<title>莘莘网</title>
<meta charset="UTF-8">
<link type="text/css" rel="stylesheet" href="/ssxz/Public/home/css/bootstrap.min.css" />
<link type="text/css" rel="stylesheet" href="/ssxz/Public/home/css/style.css" />
<link type="text/css" rel="stylesheet" href="/ssxz/Public/home/css/main.css" />
<link type="text/css" rel="stylesheet" href="/ssxz/Public/home/css/page.css">
<link type="text/css" rel="stylesheet" href="/ssxz/Public/home/css/font-awesome.min.css" />

<script type="text/javascript" src="/ssxz/Public/home/js/jQuery.min.js"></script>
<script type="text/javascript" src="/ssxz/Public/home/js/bootstrap.min.js"></script>
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
                    <p><a href="/ssxz/index.php/home/news/newsList/type/schoolnews">校园新闻</a></p>
                    <p><a href="/ssxz/index.php/home/news/newsList/type/documentary">课堂纪实</a></p>
                    <p><a href="/ssxz/index.php/home/news/newsList/type/achievement">教学成果</a></p>
                </div>
                <div class="item col2">
                    <p><a href="/ssxz/index.php/home/news/newsList/type/story">学生故事</a></p>
                    <p><a href="/ssxz/index.php/home/news/newsList/type/student">学生风采</a></p>
                    <p><a href="/ssxz/index.php/home/news/newsList/type/camp">探&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;营</a></p>
                </div>
                <div class="item col3">
                    <p><a href="/ssxz/index.php/home/news/newsList/type/expert">专家专栏</a></p>
                    <p><a href="/ssxz/index.php/home/news/newsList/type/master">校&nbsp;&nbsp;长&nbsp;&nbsp;录</a></p>
                    <p><a href="/ssxz/index.php/home/news/newsList/type/schoolgrade">升学指导</a></p>
                </div>
                <div class="item col4">
                    <p><a href="/ssxz/index.php/home/news/newsList/type/enroll">招生简章</a></p>
                    <p><a href="/ssxz/index.php/home/news/newsList/type/activity">招生活动</a></p>
                    <p><a href="/ssxz/index.php/home/news/newsList/type/visa">签&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;证</a></p>
                </div>
                <div class="item col5">
                    <p><a href="/ssxz/index.php/home/news/newsList/type/qaischool">国际学校</a></p>
                    <p><a href="/ssxz/index.php/home/news/newsList/type/qaicourse">国际课程</a></p>
                    <p><a href="/ssxz/index.php/home/news/newsList/type/qaichoose">如何选择</a></p>
                </div>
            </div>
            <div class="zixun-l" style="min-height:2075px;max-height:2075px;border-bottom: 1px solid #05B865;">
                <div class="zixun-sea">                
                            <div class="r-search" style="padding:0px; margin-top:0px;">
                            	<input type="hidden" id="type" name="type" value="<?php echo ($type); ?>"/>
                                <input type="text" id="keyword" name="keyword" placeholder="关键字模糊搜索" value="<?php echo ($keyword); ?>" class="r-search-input form-control" style="width:90%;" />
                                <input type="button" onclick="doSearch()" class="r-searcj-btn" value="搜索" />
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
                        	<?php if(is_array($varticleList)): $i = 0; $__LIST__ = $varticleList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
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
	                            </li><?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                </div>
                <div class="green-black">
					　　<?php echo ($page); ?>
				</div>
            </div>
            <div class="zixun-r">
                <!-- 有用的文章15篇 -->
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
				<!-- 排名前15的学校 -->
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
             </div>
            <div class="clearfix"></div>
        </div>
        <!--容器end-->
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
        $(document).ready(function () {
            var _ch = $(".container-body").height();
            var _wh = $(window).height();
            if (_wh - _ch > 377) {
                $(".container-body").css("min-height", (_wh - 397) + "px");
            }
        })
        
        jQuery(document).ready(function($){
    		// UsefulArticle
    		showUserfulArticle('expert','usefulArticle');
    		// TopSchool
    		showTopSchool('topSchool');
        });
        // 查询事件
        function doSearch(){
        	var keyword = $("#keyword").val();
        	if(keyword!=''){
        		window.location.href= "/ssxz/index.php/home/news/newsList/keyword/"+keyword;
        	}else{
        		window.location.href= "/ssxz/index.php/home/news/newsList/";
        	}
        	
        	
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
    </script>
</html>