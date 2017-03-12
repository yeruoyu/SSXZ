<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<meta charset="UTF-8">
<head>
<meta charset="UTF-8">
<title>莘莘学子</title>
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
	<div class="page-container">
		<div class="sidebar-menu toggle-others fixed expanded">

	<div class="sidebar-menu-inner">

		<header class="logo-env">

			<!-- logo -->
			<div class="logo">
				<a href="" class="logo-expanded">
					<h1 style="color: #FFF">莘莘学子</h1>
				</a> <a href="" class="logo-collapsed"> <span
					style="color: #FFF">XXSZ</span>
				</a>
			</div>
		</header>
		<ul id="main-menu" class="main-menu">
			<!-- add class "multiple-expanded" to allow multiple submenus to open -->
			<!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
			<?php if(is_array($menulist)): $index = 0; $__LIST__ = $menulist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($index % 2 );++$index; if(($vo["fun_level"] == 1) AND ($index == 1) ): if(($vo["fun_name"] == $catalogId)): ?><li class="opened active"><?php else: ?><li><?php endif; ?> <a href="/ssxz/admin.php<?php echo ($vo["fun_url"]); ?>"> <span class="title"><?php echo ($vo["fun_name"]); ?></span>
			</a>
			<ul>
				<?php elseif(($vo["fun_level"] == 1)): ?>
			</ul>
			</li>
			<?php if(($vo["fun_name"] == $catalogId)): ?><li class="opened active"><?php else: ?><li><?php endif; ?> <a href="/ssxz/admin.php<?php echo ($vo["fun_url"]); ?>"> <span class="title"><?php echo ($vo["fun_name"]); ?></span>
			</a>
			<ul>
				<?php elseif(($vo["fun_level"] == 2)): ?>
				<?php if(($vo["fun_name"] == $funId)): ?><li class="active"><?php else: ?><li><?php endif; ?>
				<a href="/ssxz/admin.php<?php echo ($vo["fun_url"]); ?>"> <span class="title"><?php echo ($vo["fun_name"]); ?></span>
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

		<li class="hidden-sm hidden-xs"><a href="#" data-toggle="sidebar">
				<i class="fa-bars"></i>
		</a></li>
	</ul>
	<!-- Right links for user info navbar -->
	<ul class="user-info-menu right-links list-inline list-unstyled">
		<li class="dropdown user-profile"><a href="#"
			data-toggle="dropdown"> <img
				src="/ssxz/Public/assets/images/user-4.png" alt="user-image"
				class="img-circle img-inline userpic-32" width="28" /> <span>
					<?php echo ($user["user_name"]); ?> </span>
		</a></li>
	</ul>
</nav>
			<div class="page-title">
				<div class="breadcrumb-env">
					<ol class="breadcrumb bc-1">
						<ol class="breadcrumb bc-1">
						<li><i class="fa-home"></i>首页</li>
						<li>系统管理</li>
						<li class="active"><strong><?php echo ($title); ?></strong></li>
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
							<form role="form" id="formTopic"  action="/ssxz/admin.php/User/userSave" method="post" method="post" class="form-horizontal validate">
								<div class="form-group">
									<label class="col-sm-2 control-label" for="article_title">用户姓名</label>
									<div class="col-sm-3">
										<input type="hidden" name="action" value="<?php echo ($action); ?>"/>
										<input type="hidden" name="user_id" value="<?php echo ($userInfo["user_id"]); ?>"/>
										<input type="hidden" name="start" value="<?php echo ($start); ?>"/>
										<input type="hidden" name="pagesize" value="<?php echo ($pagesize); ?>"/>
										<input type="text" class="form-control" name="user_name" value="<?php echo ($userInfo["user_name"]); ?>" data-validate="required" data-message-required="用户姓名不能空。" />
									</div>
									<label class="col-sm-2 control-label" for="article_keyword">用户昵称</label>
									<div class="col-sm-3">
										<input type="text" class="form-control" name="user_nicename" value="<?php echo ($userInfo["user_nicename"]); ?>" />
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">用户类型</label>
									<div class="col-sm-3">
										<select class="form-control" name="user_type">
											<?php if($userInfo["user_type"] == 1 ): ?><option value="1" selected="selected">系统人员</option>
												<option value="2">学校用户</option>
												<option value="3">教师</option>
												<option value="4">一般用户</option>
											<?php elseif($userInfo["user_type"] == 2 ): ?>
												<option value="1">系统人员</option>
												<option value="2" selected="selected">学校用户</option>
												<option value="3">教师</option>
												<option value="4">一般用户</option>
											<?php elseif($userInfo["user_type"] == 3 ): ?>
												<option value="1">系统人员</option>
												<option value="2">学校用户</option>
												<option value="3" selected="selected">教师</option>
												<option value="4">一般用户</option>
											<?php elseif($userInfo["user_type"] == 4 ): ?>
												<option value="1">系统人员</option>
												<option value="2">学校用户</option>
												<option value="3">教师</option>
												<option value="4" selected="selected">一般用户</option>
											<?php else: ?>
												<option value="1">系统人员</option>
												<option value="2">学校用户</option>
												<option value="3">教师</option>
												<option value="4">一般用户</option><?php endif; ?>
										</select>
									</div>
									<label class="col-sm-2 control-label">所属学校</label>
									<div class="col-sm-3">
										<script type="text/javascript">
										jQuery(document).ready(function($)
											{
												$("#user_school_id").select2({
													placeholder: 'Select your country...',
													allowClear: true
												}).on('select2-open', function()
												{
													// Adding Custom Scrollbar
													$(this).data('select2').results.addClass('overflow-hidden').perfectScrollbar();
												});
												
											});
										</script>
										<select class="form-control" id="user_school_id" name="user_school_id">
											<option value="null">--</option>
											<?php if(is_array($schoolList)): $index = 0; $__LIST__ = $schoolList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($index % 2 );++$index; if($userInfo['user_school_id'] == $vo['school_id']): ?><option value="<?php echo ($vo["school_id"]); ?>" selected><?php echo ($vo["school_name"]); ?></option>
												<?php else: ?>
													<option value="<?php echo ($vo["school_id"]); ?>"><?php echo ($vo["school_name"]); ?></option><?php endif; endforeach; endif; else: echo "" ;endif; ?>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label" for="article_status">用户状态</label>
									<div class="col-sm-3">
										<select class="form-control" name="user_status" data-validate="required" data-message-required="话题学校不能为空。" >
											<?php if($userInfo["user_status"] == 0 ): ?><option value="">--</option>
												<option value="0" selected>未审核</option>
												<option value="1">审核通过</option>
												<option value="-1">审核未通过</option>
												<option value="3">已删除</option>
											<?php elseif($userInfo["user_status"] == 1): ?>
												<option value="">--</option>
												<option value="0">未审核</option>
												<option value="1" selected>审核通过</option>
												<option value="-1">审核未通过</option>
												<option value="3">已删除</option>
											<?php elseif($userInfo["user_status"] == -1): ?>
												<option value="">--</option>
												<option value="0">未审核</option>
												<option value="1">审核通过</option>
												<option value="-1" selected>审核未通过</option>
												<option value="3">已删除</option>
											<?php elseif($userInfo["user_status"] == 3): ?>
												<option value="">--</option>
												<option value="0">未审核</option>
												<option value="1">审核通过</option>
												<option value="-1">审核未通过</option>
												<option value="3" selected>已删除</option>
											<?php else: ?>
												<option value="">--</option>
												<option value="0">未审核</option>
												<option value="1">审核通过</option>
												<option value="-1">审核未通过</option>
												<option value="3">已删除</option><?php endif; ?>
										</select>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-9"></div>
									<div class="col-sm-3">
										<button type="submit" class="btn btn-success">保存</button>
										<button type="reset" class="btn btn-white">取消</button>
										<a href="/ssxz/admin.php/User/userList/start/<?php echo ($start); ?>/pagesize/<?php echo ($pagesize); ?>" class="btn btn-info">返回</a>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<footer class="main-footer sticky footer-type-1">
	<div class="footer-inner">
		<div class="go-up">
			<a href="#" rel="go-top"> <i class="fa-angle-up"></i>
			</a>
		</div>
	</div>
</footer>
		</div>
	</div>
</body>
	<link rel="stylesheet" href="/ssxz/Public/assets/js/uikit/vendor/codemirror/codemirror.css">
	<link rel="stylesheet" href="/ssxz/Public/assets/js/uikit/uikit.css">
	<link rel="stylesheet" href="/ssxz/Public/assets/js/uikit/css/addons/uikit.almost-flat.addons.min.css">
	<link rel="stylesheet" href="/ssxz/Public/assets/js/select2/select2.css">
	<link rel="stylesheet" href="/ssxz/Public/assets/js/select2/select2-bootstrap.css">
	
	<!-- Bottom Scripts -->
	<script type="text/javascript" src="/ssxz/Public/ueditor14/ueditor.config.js"></script>
    <script type="text/javascript" src="/ssxz/Public/ueditor14/ueditor.all.min.js"></script>
    <script type="text/javascript" src="/ssxz/Public/ueditor14/lang/zh-cn/zh-cn.js"></script>
	<script type="text/javascript" src="/ssxz/Public/assets/js/bootstrap.min.js"></script>
	
	<script type="text/javascript" src="/ssxz/Public/assets/js/TweenMax.min.js"></script>
	<script type="text/javascript" src="/ssxz/Public/assets/js/resizeable.js"></script>
	<script type="text/javascript" src="/ssxz/Public/assets/js/joinable.js"></script>
	<script type="text/javascript" src="/ssxz/Public/assets/js/xenon-api.js"></script>
	<script type="text/javascript" src="/ssxz/Public/assets/js/xenon-toggles.js"></script>
	
	<script type="text/javascript" src="/ssxz/Public/assets/js/jquery-ui/jquery-ui.min.js"></script>
	<script type="text/javascript" src="/ssxz/Public/assets/js/jquery-validate/jquery.validate.min.js"></script>
	<script type="text/javascript" src="/ssxz/Public/assets/js/select2/select2.js"></script>
	
	<!-- JavaScripts initializations and stuff -->
	<script type="text/javascript" src="/ssxz/Public/assets/js/xenon-custom.js"></script>
	
	<script type="text/javascript">
		var ue = UE.getEditor('article_detail');
    </script>
</html>