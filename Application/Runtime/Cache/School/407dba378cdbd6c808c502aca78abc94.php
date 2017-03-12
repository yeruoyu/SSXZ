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
							<a href=""><i class="fa-home"></i>首页</a>
						</li>
						<li>
							<a href="">视频</a>
						</li>
						<li class="active">
							<strong>校园视频</strong>
						</li>
					</ol>		
				</div>
					
			</div>
			<!-- Content Panel -->
			<div class="row">
				<div class="col-md-12">
				
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title"><?php echo ($schoolInfo["school_name"]); ?> - 校园视频列表</h3>
						</div>
						<div class="panel-body">
							<form role="form" id="form3" method="post" class="validate">
								<div class="form-group">
									<div class="col-sm-8">
										<input type="text" id="teacherSearch" class="form-control">
									</div>
									<div class="col-sm-4">
										<button type="button" class="btn btn-info">查询</button>
										<a href="/ssxz/school.php/Video/videoDetail" class="btn btn-success">添加</a>
									</div>
								</div>
							</form>
							<script type="text/javascript">
							jQuery(document).ready(function($)
							{
								$("#example-2").dataTable({
									aLengthMenu: [
													[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]
												],
									dom: "t" + "<'row'<'col-xs-6'i><'col-xs-6'p>>",
									aoColumns: [
										{bSortable: false},
										null,
										null,
										null,
										null
									],
								});
								
								// Replace checkboxes when they appear
								var $state = $("#example-2 thead input[type='checkbox']");
								
								$("#example-2").on('draw.dt', function()
								{
									cbr_replace();
									
									$state.trigger('change');
								});
								
								// Script to select all checkboxes
								$state.on('change', function(ev)
								{
									var $chcks = $("#example-2 tbody input[type='checkbox']");
									
									if($state.is(':checked'))
									{
										$chcks.prop('checked', true).trigger('change');
									}
									else
									{
										$chcks.prop('checked', false).trigger('change');
									}
								});
							});
							</script>
							<table class="table table-bordered table-striped" id="example-2">
								<thead>
									<tr>
										<th class="no-sorting">
											<input type="checkbox" class="cbr">
										</th>
										<th>用户姓名</th>
										<th>用户登录名</th>
										<th>用户状态</th>
										<th>操作</th>
									</tr>
								</thead>
								<tbody class="middle-align">
									<?php if(is_array($menulist)): $i = 0; $__LIST__ = $menulist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
										<td>
											<input type="checkbox" class="cbr" value="<?php echo ($vo["fun_id"]); ?>">
										</td>
										<td><?php echo ($vo["fun_name"]); ?></td>
										<td><?php echo ($vo["fun_level"]); ?></td>
										<td><?php echo ($vo["fun_url"]); ?></td>
										<td>
											<a href="/ssxz/school.php/Video/videoDetail/id/{#}" class="btn btn-secondary btn-sm btn-icon icon-left">
												编辑
											</a>
										</td>
									</tr><?php endforeach; endif; else: echo "" ;endif; ?>
								</tbody>
							</table>
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
</html>