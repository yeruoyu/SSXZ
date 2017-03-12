<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>


<meta charset="UTF-8">
<title>莘莘学子</title>
	
	<link rel="stylesheet" href="http://fonts.useso.com/css?family=Arimo:400,700,400italic">
	<link rel="stylesheet" type="text/css" href="/ssxz/Public/assets/css/fonts/linecons/css/linecons.css" />
	<link rel="stylesheet" type="text/css" href="/ssxz/Public/assets/css/fonts/fontawesome/css/font-awesome.min.css" />
	<link rel="stylesheet" type="text/css" href="/ssxz/Public/assets/css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="/ssxz/Public/assets/css/xenon-core.css" />
	<link rel="stylesheet" type="text/css" href="/ssxz/Public/assets/css/xenon-forms.css" />
	<link rel="stylesheet" type="text/css" href="/ssxz/Public/assets/css/xenon-components.css" />
	<link rel="stylesheet" type="text/css" href="/ssxz/Public/assets/css/xenon-skins.css" />
	<link rel="stylesheet" type="text/css" href="/ssxz/Public/assets/css/custom.css" />
	<script type="text/javascript" src="/ssxz/Public/assets/js/jquery-1.11.1.min.js"></script>
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body class="page-body">
	<div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->
			
		<!-- Add "fixed" class to make the sidebar fixed always to the browser viewport. -->
		<!-- Adding class "toggle-others" will keep only one menu item open at a time. -->
		<!-- Adding class "collapsed" collapse sidebar root elements and show only icons. -->
		<div class="sidebar-menu toggle-others fixed expanded">
			
			<div class="sidebar-menu-inner">	
				
				<header class="logo-env">
					
					<!-- logo -->
					<div class="logo">
						<a href="index.html" class="logo-expanded">
							<h1 style="color:#FFF">莘莘学子</h1>
						</a>
						<a href="index.html" class="logo-collapsed">
							<span style="color:#FFF">XXSZ</span>
						</a>
					</div>
				</header>
				<ul id="main-menu" class="main-menu">
					<!-- add class "multiple-expanded" to allow multiple submenus to open -->
					<!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
					<?php if(is_array($menulist)): $index = 0; $__LIST__ = $menulist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($index % 2 );++$index; if(($vo["fun_level"] == 1) AND ($index == 1) ): ?><li class="opened active">
								<a href="/ssxz/admin.php<?php echo ($vo["fun_url"]); ?>">
									<span class="title"><?php echo ($vo["fun_name"]); ?></span>
								</a>
								<ul>
						<?php elseif(($vo["fun_level"] == 1)): ?>
								</ul>
							</li>
							<li>
								<a href="/ssxz/admin.php<?php echo ($vo["fun_url"]); ?>">
									<span class="title"><?php echo ($vo["fun_name"]); ?></span>
								</a>
								<ul>
						<?php elseif(($vo["fun_level"] == 2)): ?>		
								<li>
									<a href="/ssxz/admin.php<?php echo ($vo["fun_url"]); ?>">
										<span class="title"><?php echo ($vo["fun_name"]); ?></span>
									</a>
								</li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
					</ul>
					</li>
				</ul>
			</div>
		</div>
		
		<div class="main-content">	
			<!-- User Info, Notifications and Menu Bar -->
			<nav class="navbar user-info-navbar" role="navigation">
				
				<!-- Left links for user info navbar -->
				<ul class="user-info-menu left-links list-inline list-unstyled">
					
					<li class="hidden-sm hidden-xs">
						<a href="#" data-toggle="sidebar">
							<i class="fa-bars"></i>
						</a>
					</li>
				</ul>
				<!-- Right links for user info navbar -->
				<ul class="user-info-menu right-links list-inline list-unstyled">
					<li class="dropdown user-profile">
						<a href="#" data-toggle="dropdown">
							<img src="/ssxz/Public/assets/images/user-4.png" alt="user-image" class="img-circle img-inline userpic-32" width="28" />
							<span>
								<?php echo ($user["user_name"]); ?>
							</span>
						</a>
					</li>
				</ul>
			</nav>
			<div class="page-title">
<!-- 				<div class="title-env">
					<h3 class="title">学校管理</h3>
				</div> -->
				<div class="breadcrumb-env">
					<ol class="breadcrumb bc-1">
						<ol class="breadcrumb bc-1">
						<li>
							<a href="index.html"><i class="fa-home"></i>首页</a>
						</li>
						<li>
							<a href="customer/customerList.html">新闻管理</a>
						</li>
						<li class="active">
							<strong><?php echo ($title); ?></strong>
						</li>
					</ol>
					</ol>		
				</div>
					
			</div>
			<!-- Content Panel -->
			<div class="row">
				<div class="col-md-12">
				
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title"><?php echo ($title); ?></h3>
						</div>
						<div class="panel-body">
							<!-- Content -->
							<form role="form" id="formArticle" action="/ssxz/admin.php/News/articleSave" method="post" class="form-horizontal validate">
								<div class="form-group">
									<label class="col-sm-2 control-label">新闻类别</label>
									<div class="col-sm-4">
										<input type="hidden" name="article_cataloge" value="news" />
										<select class="form-control" name="article_cataloge" data-validate="required" data-message-required="文章类别不能为空。" >
											<option value="">--</option>
											<option value="school">学生故事</option>
											<option value="news">学生风采</option>
											<option value="activity">探营</option>
											<option value="quotation">专家专栏</option>
											<option value="feature">升学指导</option>
											<option value="feature">签证</option>
										</select>
									</div>
									<label class="col-sm-2 control-label">所属学校</label>
									<div class="col-sm-4">
										<select class="form-control" name="article_school_id" data-validate="required" data-message-required="文章学校不能为空。" >
											<option value="">--</option>
											<?php if(is_array($schoolList)): $index = 0; $__LIST__ = $schoolList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($index % 2 );++$index;?><option value="<?php echo ($vo["school_id"]); ?>"><?php echo ($vo["school_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>

										</select>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label" for="article_keyword">文章新闻检索关键字</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" name="article_keyword" value="<?php echo ($article["article_keyword"]); ?>" data-validate="required" data-message-required="文章检索关键字不能为空。" />
									</div>
									
								</div>
								
								<div class="form-group">
									<label class="col-sm-2 control-label" for="article_title">新闻标题</label>
									<div class="col-sm-10">
										<input type="hidden" name="article_id" value="<?php echo ($news["news_id"]); ?>"/>
										<input type="hidden" name="article_news_id" value="<?php echo ($article["article_news_id"]); ?>"/>
										<input type="hidden" name="article_activity_id" value="<?php echo ($article["article_activity_id"]); ?>"/>
										<input type="hidden" name="article_teacher_id" value="<?php echo ($article["article_teacher_id"]); ?>"/>
										<input type="text" class="form-control" name="article_title" value="<?php echo ($article["article_title"]); ?>" data-validate="required" data-message-required="文章标题不能为空。" />
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label" for="article_detail">新闻内容</label>
									<div class="col-sm-10">
										<textarea class="form-control" rows="30" name="article_detail" data-validate="required" data-message-required="文章标题不能为空。"><?php echo ($article["article_detail"]); ?></textarea>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label" for="article_top">是否置顶</label>
									<div class="col-sm-4">
										<select class="form-control" name="article_top" data-validate="required" data-message-required="文章学校不能为空。" >
											<?php if($article["article_top"] == 0 ): ?><option value="">--</option>
												<option value="0" selected="selected">否</option>
												<option value="1">是</option>
											<?php elseif($article["article_top"] == 1): ?>
												<option value="">--</option>
												<option value="0">否</option>
												<option value="1"  selected="selected">是</option>
											<?php else: ?>
												<option value="">--</option>
												<option value="0">否</option>
												<option value="1">是</option><?php endif; ?>
										</select>
									</div>
									<label class="col-sm-2 control-label">是否加精</label>
									<div class="col-sm-4">
										<select class="form-control" name="article_elite" data-validate="required" data-message-required="文章学校不能为空。" >
											<?php if($article["article_elite"] == 0 ): ?><option value="">--</option>
												<option value="0" selected="selected">否</option>
												<option value="1">是</option>
											<?php elseif($article["article_elite"] == 1): ?>
												<option value="">--</option>
												<option value="0">否</option>
												<option value="1"  selected="selected">是</option>
											<?php else: ?>
												<option value="">--</option>
												<option value="0">否</option>
												<option value="1">是</option><?php endif; ?>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label" for="article_status">新闻状态</label>
									<div class="col-sm-4">
										<select class="form-control" name="article_status" data-validate="required" data-message-required="文章学校不能为空。" >
											<option value="">--</option>
											<option value="0">未发布</option>
											<option value="1">已发布</option>
											<option value="9">已删除</option>
										</select>
									</div>
									<label class="col-sm-2 control-label">排序</label>
									<div class="col-sm-4">
										<input type="text" class="form-control" name="article_sort" value="<?php echo ($article["article_top"]); ?>" data-validate="required" data-message-required="文章标题不能为空。" />
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label" for="article_read">新闻阅读数</label>
									<div class="col-sm-4">
										<input type="text" class="form-control" name="article_read" value="<?php echo ($article["article_read"]); ?>" readonly="readonly"/>
									</div>
									<label class="col-sm-2 control-label" for="article_mark">新闻收藏数</label>
									<div class="col-sm-4">
										<input type="text" class="form-control" name="article_mark" value="<?php echo ($article["article_mark"]); ?>" readonly="readonly"/>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label" for="article_comment">新闻点评数</label>
									<div class="col-sm-10">
										<a id="article_comment" href="#"><?php echo ($article["article_comment"]); ?></a>
									</div>
									
								</div>
								<div class="form-group">
									<div class="col-sm-10"></div>
									<div class="col-sm-2">
										<button type="submit" class="btn btn-success">保存</button>
										<button type="reset" class="btn btn-white">撤销</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<footer class="main-footer sticky footer-type-1">
				<div class="footer-inner">
					<!-- Go to Top Link, just add rel="go-top" to any link to add this functionality -->
					<div class="go-up">
						<a href="#" rel="go-top">
							<i class="fa-angle-up"></i>
						</a>
					</div>
				</div>
			</footer>
		</div>
	</div>
</body>
	<link rel="stylesheet" type="text/css" href="/ssxz/Public/assets/js/datatables/dataTables.bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="/ssxz/Public/assets/js/uikit/vendor/codemirror/codemirror.css" />
	<link rel="stylesheet" type="text/css" href="/ssxz/Public/assets/js/uikit/uikit.css" />
	<link rel="stylesheet" type="text/css" href="/ssxz/Public/assets/js/uikit/css/addons/uikit.almost-flat.addons.min.css" />

	<!-- Bottom Scripts -->
	<script type="text/javascript" src="/ssxz/Public/assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="/ssxz/Public/assets/js/TweenMax.min.js"></script>
	<script type="text/javascript" src="/ssxz/Public/assets/js/resizeable.js"></script>
	<script type="text/javascript" src="/ssxz/Public/assets/js/joinable.js"></script>
	<script type="text/javascript" src="/ssxz/Public/assets/js/xenon-api.js"></script>
	<script type="text/javascript" src="/ssxz/Public/assets/js/xenon-toggles.js"></script>
	
	<script type="text/javascript" src="/ssxz/Public/assets/js/jquery-validate/jquery.validate.min.js"></script>

	<!-- JavaScripts initializations and stuff -->
	<script type="text/javascript" src="/ssxz/Public/assets/js/xenon-custom.js"></script>
</html>