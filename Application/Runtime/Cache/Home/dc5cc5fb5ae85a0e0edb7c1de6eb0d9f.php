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
<link type="text/css" rel="stylesheet" href="/ssxz/Public/home/css/login.css" />
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
                 <img src="/ssxz/Public/home/images/topbanner.jpg" alt="" />
             </div>
         </div>
        <!--topbannerend-->
        <!--容器begin-->
        <div class="container" style="padding-bottom: 100px;"> 
            <div class="background-ff">    
                <!--左边begin-->
                <div class="h-side left">
                	<!--登录-->
                	<?php if(!isset($_SESSION['userInfo'])): ?><div class="h-side-box h-side-g">
	                    <div style="top: 51px;right: 0px;background-color: #fff;">
	                    	<div class="login_title"><span class="h3">立刻登录</span><span class="zc"><a href="register_step1.html">立即注册</a></span></div>
	                    	<div class="login_body">
	                        	<form action="student_index.html" method="post">
	                        		<div class="input-group"> <span class="input-group-addon"><i class="fa fa-user"></i></span>
	                            		<input type="text" class="form-control" name="UserName" required value="" placeholder="邮箱/用户名/已验证手机">
	                        		</div>
	                        		<div class="input-group"> <span class="input-group-addon"> <i class="fa fa-pas"></i> </span>
	                            		<input type="text" class="form-control" name="UserName" required value="" placeholder="密码">
	                        		</div>
	                        		<div class="input-group item">
	                            		<div class="pull-right">
	                            			<a href="#forget-panel" data-toggle="modal" aria-hidden="true" data-dismiss="modal">忘记密码?</a>
	                            		</div>
	                       			</div>
	                       	 		<div class="form-group item">
	                          			<button class="btn btn-xh form-control" type="submit">登&nbsp;&nbsp;&nbsp;&nbsp;录</button>
	                        		</div>
	                            </form>
	                    	</div>
	                	</div>
                    </div>
                    <?php else: ?>
                    <!--我的关注begin-->
                    <div class="h-side-box h-side-g">
                        <div class="h-side-t">
                            <h2>我在话题区</h2>
                        </div>
                        <div class="h-side-box">
                            <div class="h-img" >
                                <img src="/ssxz/Public/home/images/problem2.jpg" alt=""  class=" img-circle"/>
                                <p>上海小组</p>
                            </div>
                        </div>
                        <h3 class="h-side-span">我的关注</h3>
                        <div class="h-side-forums">
                            <a target="_blank" href="#" class="h-f-item unsign">上海枫叶上海枫叶<span class="forum_level lv9"></span></a>
                            <a target="_blank" href="#" class="h-f-item unsign">上海枫叶<span class="forum_level lv12"></span></a>
                            <a target="_blank" href="#" class="h-f-item unsign">上海枫叶<span class="forum_level lv12"></span></a>
                            <a target="_blank" href="#" class="h-f-item unsign">上海枫叶<span class="forum_level lv12"></span></a>
                            <a target="_blank" href="#" class="h-f-item unsign">上海枫叶<span class="forum_level lv12"></span></a>
                            <a target="_blank" href="#" class="h-f-item unsign">上海枫叶<span class="forum_level lv12"></span></a>
                        </div>
                        <div class="clearfix"></div>
                        <div class="h-side-more">
                            <a href="#" title="" class="more">查看更多</a>
                        </div>
                        <div class="h-side-box">
                            <div class="h-side-p">
                                <p>我发布的话题<span>1</span></p>
                                <p>我加入的话题<span>1</span></p>
                            </div>
                        </div>
                    </div><?php endif; ?>
                    <!--我的关注end-->
                    <!--热门话题begin-->
                    <div class="area-box">
                        <div class="area-title">
                            <h2>一周你热门话题</h2>
                            <div class="area-l"></div>
                            <div class="area-r"></div>
                        </div>
                        <div class="area-main">
                            <ul class="favorite-list"> 
                            	<?php if(is_array($topTopic)): $i = 0; $__LIST__ = $topTopic;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>      
	                            	<div><a href="/ssxz/index.php/home/topic/topicDetail/id/<?php echo ($vo["article_id"]); ?>" ><?php echo ($vo["article_title"]); ?></a></div>
	                            	<div class="liAuthor">作者：<?php echo ($vo["article_author"]); ?></div>
	                                    <div><span class="count-eye"><i class="icon-eye"></i>204578</span><a rel="external nofollow" class="count-infor" href="#"><i class="icon-infor"></i>3974</a></div>
	                                </li><?php endforeach; endif; else: echo "" ;endif; ?>
                            </ul>
                        </div>
                    </div>
                    <!--热门话题end-->
                </div>
                <!--左边end-->
                <!--右边begin-->
                <div class="h-main right">
                    <div class="h-side-tit">
                        <div class="r-side-box">
                        	<?php if($groupType == 2): ?><span class="sxzd lv"><a href="/ssxz/index.php/home/topic/topicList">全部</a></span>
                            	<span><a href="/ssxz/index.php/home/topic/topicList/groupType/0">学校话题</a></span>
                            	<span><a href="/ssxz/index.php/home/topic/topicList/groupType/1">学习小组</a></span><?php endif; ?>
                            <?php if($groupType == 0): ?><span><a href="/ssxz/index.php/home/topic/topicList">全部</a></span>
                            	<span class="sxzd lv"><a href="/ssxz/index.php/home/topic/topicList/groupType/0">学校话题</a></span>
                            	<span><a href="/ssxz/index.php/home/topic/topicList/groupType/1">学习小组</a></span><?php endif; ?>
							<?php if($groupType == 1): ?><span><a href="/ssxz/index.php/home/topic/topicList">全部</a></span>
                            	<span><a href="/ssxz/index.php/home/topic/topicList/groupType/0">学校话题</a></span>
                            	<span class="sxzd lv"><a href="/ssxz/index.php/home/topic/topicList/groupType/1">学习小组</a></span><?php endif; ?>
                        </div>
                        <div class="r-search">
                            <input type="text" id="keyword" value="<?php echo ($keyword); ?>" placeholder="关键字模糊搜索" class="r-search-input form-control" />
                            <input type="hidden" id="groupType" value="<?php echo ($groupType); ?>" />
                            <input type="button" class="r-searcj-btn" onclick="doSearch()" value="搜索" />
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="r-main-title">
                        <div class="r-main-tit">
                            <h3>最新话题</h3>
                        </div>
                    </div>
                    <div class="r-main-box">
                        <ul class="newft-list">
                        	<?php if(is_array($topicList)): $i = 0; $__LIST__ = $topicList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
	                                <a href="/ssxz/index.php/home/topic/topicDetail/id/<?php echo ($vo["article_id"]); ?>"><img src="/ssxz/Public/home/images/abm.jpg" alt="" /></a>
	                                <div class="newft-list-tit">
	                                	<a href="/ssxz/index.php/home/topic/topicDetail/id/<?php echo ($vo["article_id"]); ?>" ><span class="sxzd lv"><?php echo ($vo["school_name"]); ?></span></a>
	                                	<a href="/ssxz/index.php/home/topic/topicDetail/id/<?php echo ($vo["article_id"]); ?>" ><?php echo ($vo["article_title"]); ?></a>
	                                	<!-- <i class="r-d">顶</i><i class="r-t">荐</i> -->
	                                </div>
                                	<div><?php echo ($vo["article_excerpt"]); ?></div>
                                	<div class="r-tag"><span class="liAuthor lv"><?php echo ($vo["article_author"]); ?></span><!-- <span>2015年11月30日 17:25发表于【<a href="#">资讯点评</a>】 </span> --></div>
	                                <div class="icon-box">
	                                    <span class="icon-y">有用</span>
	                                    <span class="icon-yue">阅读数</span>
	                                    <span class="icon-g">跟帖数</span>
	                                </div>
	                            </li><?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </div>
                    <div class="green-black">
					　　<?php echo ($page); ?>
					</div>
                </div>
                <!--右边end-->
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
        
		// 查询事件
        function doSearch(){
        	var keyword = $("#keyword").val();
        	var strKeyword='';
        	if(keyword!=''){
        		strKeyword = "/keyword/"+keyword;
        	}

        	var groupType = $("#groupType").val();
        	var strGroup='';
        	if(groupType!='2'){
        		strGroup = "/groupType/"+groupType;
        	}
        	
        	window.location.href= "/ssxz/index.php/home/topic/topicList"+strGroup+strKeyword;
        }
    </script>
</html>