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
	 <script type="text/javascript" charset="utf-8" src="ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="ueditor.all.min.js"> </script>
    
    <script type="text/javascript" src="/ssxz/Public/ueditor14/ueditor.config.js"></script>
    <script type="text/javascript" src="/ssxz/Public/ueditor14/ueditor.all.min.js"></script>
    <script type="text/javascript" src="/ssxz/Public/ueditor14/lang/zh-cn/zh-cn.js"></script>
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
					<?php if(is_array($menulist)): $index = 0; $__LIST__ = $menulist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($index % 2 );++$index; if(($vo["fun_level"] == 1) AND ($index == 1) ): if(($vo["fun_name"] == $catalogId)): ?><li class="opened active">
							<?php else: ?>
								<li><?php endif; ?>
								<a href="/ssxz/school.php<?php echo ($vo["fun_url"]); ?>">
									<span class="title"><?php echo ($vo["fun_name"]); ?></span>
								</a>
								<ul>
						<?php elseif(($vo["fun_level"] == 1)): ?>
								</ul>
							</li>
							<?php if(($vo["fun_name"] == $catalogId)): ?><li class="opened active">
							<?php else: ?>
								<li><?php endif; ?>
								<a href="/ssxz/school.php<?php echo ($vo["fun_url"]); ?>">
									<span class="title"><?php echo ($vo["fun_name"]); ?></span>
								</a>
								<ul>
						<?php elseif(($vo["fun_level"] == 2)): ?>
							<?php if(($vo["fun_name"] == $funId)): ?><li class="active">
							<?php else: ?>	
								<li><?php endif; ?>
									<a href="/ssxz/school.php<?php echo ($vo["fun_url"]); ?>">
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
						<li>
							<a href="index.html"><i class="fa-home"></i>首页</a>
						</li>
						<li>
							<a href="customer/customerList.html">学校动态</a>
						</li>
						<li class="active">
							<strong>课堂纪实</strong>
						</li>
					</ol>		
				</div>
					
			</div>
			<!-- Content Panel -->
			<div class="row">
				<div class="col-md-12">
				
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title"><?php echo ($schoolInfo["school_name"]); ?> - 课堂纪实</h3>
						</div>
						<div class="panel-body">
							<form role="form" id="form1" method="post" class="form-horizontal validate">
								
								<div class="form-group">
									<label class="col-sm-2 control-label">课堂纪实标题</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" name="title"/>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">课堂纪实关键字</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" name="keyword"/>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">课堂纪实内容</label>
									<div class="col-sm-8">
										<script id="editor" type="text/plain" style="width:100%;height:500px;" ></script>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">状态</label>
									<div class="col-sm-4">
										<select class="form-control" name="status">
											<option value="1">有效</option>
											<option value="0">无效</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-7"></div>
									<div class="col-sm-3">
										<button type="button" class="btn btn-success">预览</button>
										<button type="submit" class="btn btn-success">保存</button>
										<button type="reset" class="btn btn-white">取消</button>
										<a href="/ssxz/school.php/Enroll/enrollList" class="btn btn-info">返回</a>
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

	<!-- Bottom Scripts -->
	<script type="text/javascript" src="/ssxz/Public/assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="/ssxz/Public/assets/js/TweenMax.min.js"></script>
	<script type="text/javascript" src="/ssxz/Public/assets/js/resizeable.js"></script>
	<script type="text/javascript" src="/ssxz/Public/assets/js/joinable.js"></script>
	<script type="text/javascript" src="/ssxz/Public/assets/js/xenon-api.js"></script>
	<script type="text/javascript" src="/ssxz/Public/assets/js/xenon-toggles.js"></script>
	
	<script type="text/javascript" src="/ssxz/Public/assets/js/datatables/js/jquery.dataTables.min.js"></script>
	
	

	<!-- Imported scripts on this page -->
	<script type="text/javascript" src="/ssxz/Public/assets/js/datatables/dataTables.bootstrap.js"></script>
	<script type="text/javascript" src="/ssxz/Public/assets/js/datatables/yadcf/jquery.dataTables.yadcf.js"></script>
	<script type="text/javascript" src="/ssxz/Public/assets/js/datatables/tabletools/dataTables.tableTools.min.js"></script>

	<!-- Imported scripts on this page -->
	<script type="text/javascript" src="/ssxz/Public/assets/js/rwd-table/js/rwd-table.min.js"></script>

	<!-- JavaScripts initializations and stuff -->
	<script type="text/javascript" src="/ssxz/Public/assets/js/xenon-custom.js"></script>
	
	<script type="text/javascript">

    //实例化编辑器
    //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
    var ue = UE.getEditor('editor');
    </script>
</html>