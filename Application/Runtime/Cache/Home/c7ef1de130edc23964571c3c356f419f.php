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
        <!--topbannerbegin-->
		<div class="container">
			<div class="topbanner">
				<img src="/ssxz/Public/home/images/topbanner2.jpg" alt="" />
			</div>
		</div>
        <!--topbannerend-->
        <!--容器begin-->
		<div class="container"> 
			<div class="background-ff">    
				<div class="kcxx">
					<div class="kcxx-title">
						<div class="tio"><i class="s-ico"></i><span>学习小组</span></div>
					</div>
					<div class="kcxx-main">
						<div class="stxz">
							<?php if(is_array($studyGroupList)): $i = 0; $__LIST__ = $studyGroupList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="item">
									<div class="item-bg">
										<div class="item-tbox">
											<div class="lv tit"><a href="/ssxz/index.php/home/study/studyDetail/id/<?php echo ($vo["school_id"]); ?>" ><?php echo ($vo["school_name"]); ?></a></div>
											<!-- <div class="pro"><a href="/ssxz/index.php/home/study/studyDetail/id//<?php echo ($vo["school_id"]); ?>" ><?php echo ($vo["school_name"]); ?></a></div> -->
										</div>
                                        <div class="item-mbox">
											<div class="col"><a href="/ssxz/index.php/home/study/studyDetail/id/<?php echo ($vo["school_id"]); ?>" >
												<img src="/ssxz/Uploads/<?php echo ($vo["school_photo"]); ?>" /></a></div>
                                            <div class="col" style="padding-left: 10px;">
                                            	<a href="/ssxz/index.php/home/study/studyDetail/id//<?php echo ($vo["school_id"]); ?>" >
                                            <p><?php echo ($vo["school_excerpt"]); ?></p>
                                            	</a>
                                            </div>
                                            <div class="clearfix"></div>
                                            <div class="item-bmbox">
                                                <span class="nub">成员：<?php echo ($vo["account_count"]); ?></span>
                                                <span class="to">+关注</span>
                                            </div>
										</div>
									</div>
								</div><?php endforeach; endif; else: echo "" ;endif; ?>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
                <div class="clearfix"></div>
			</div>
		</div>
        <!--容器end-->
        
        <!--容器begin-->
		<div class="container"> 
			<div class="background-ff">    
				<div class="kcxx">
					<div class="kcxx-title">
						<div class="tio"><i class="s-ico"></i><span>学习资讯</span></div>
                   	</div>
                   	<div class="kcxx-main">
            			<div class="zixun-l" style="margin-top: 20px;">                                
	                		<div class="bg title zixun-t">
		                    	<div class="title-main">                        
			                    	<span onmouseover="ShowTab(1,1,10);showArticle('ibstudy','tab1Ul')" id="Span1">IB学习</span>|
			                    	<span onmouseover="ShowTab(2,1,10);showArticle('alevelstudy','tab2Ul')" id="Span2">A-level学习</span>|
			                    	<span onmouseover="ShowTab(3,1,10);showArticle('apstudy','tab3Ul')" id="Span3">AP学习</span>|
			                    	<span onmouseover="ShowTab(4,1,10);showArticle('satstudy','tab4Ul')" id="Span4">SAT学习</span>|
			                    	<span onmouseover="ShowTab(5,1,10);showArticle('ysstudy','tab5Ul')" id="Span5">雅思学习</span>|
			                    	<span onmouseover="ShowTab(6,1,10);showArticle('tfstudy','tab6Ul')" id="Span6">托福学习</span>|
			                    	<span onmouseover="ShowTab(7,1,10);showArticle('otherstudy','tab7Ul')" id="Span7">其它</span>|
			                    	<span onmouseover="ShowTab(8,1,10);showArticle('schoolexam','tab8Ul')" id="Span8">学校考试</span>|
			                    	<span onmouseover="ShowTab(9,1,10);showArticle('act','tab9Ul')" id="Span9">ACT</span>
		                    	</div>
		                	</div>
		                	<div class="index-li">                    
			                	<div id="Tab1">   
									<ul id="tab1Ul" class="xxjs-list">
									</ul>
									<!--<div class="bottom-next"></div> -->
			                	</div>
		                    	<div id="Tab2">
		                        	<ul id="tab2Ul" class="xxjs-list"></ul>
		                   		</div>
		                    	<div id="Tab3">
		                        	<ul id="tab3Ul" class="xxjs-list"></ul>
		                    	</div>
		                    	<div id="Tab4">
		                        	<ul id="tab4Ul" class="xxjs-list"></ul>
		                    	</div>
		                    	<div id="Tab5">
		                        	<ul id="tab5Ul" class="xxjs-list"></ul>
		                    	</div>   
		                    	<div id="Tab6">
		                        	<ul id="tab6Ul" class="xxjs-list"></ul>
		                    	</div>   
		                    	<div id="Tab7">
		                        	<ul id="tab7Ul" class="xxjs-list"></ul>
		                    	</div>   
		                    	<div id="Tab8">
		                        	<ul id="tab8Ul" class="xxjs-list"></ul>
		                    	</div>   
		                    	<div id="Tab9">
		                        	<ul id="tab9Ul" class="xxjs-list"></ul>
		                    	</div>
		                		<SCRIPT type="text/javascript">ShowTab(1, 1, 10);</SCRIPT>
		                	</div>
            			</div>
		            	<div class="zixun-r" style="margin-top: 20px;">
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
		                	<!-- 关于我们 -->
							<meta charset="UTF-8">
<div class="gywm" style="margin-top: 45px;">
    <div class="gywm-t">关于我们</div>
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
				</div>
				<div class="clearfix"></div>
			</div>
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
        	showArticle('ibstudy','tab1Ul');
    		// UsefulArticle
    		showUserfulArticle('expert','usefulArticle');
    		// TopSchool
    		showTopSchool('topSchool');
        });
        
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
    </script>
</html>