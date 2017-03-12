<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
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
						<li>项目管理</li>
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
							<form role="form" id="formProject"  action="/ssxz/admin.php/Project/projectSave" method="post" class="form-horizontal validate">
								<div class="form-group">
									<label class="col-sm-2 control-label" for="project_level">项目级别</label>
									<div class="col-sm-3">
										<input type="hidden" name="action" value="<?php echo ($action); ?>"/>
										<input type="hidden" name="project_id" value="<?php echo ($projectInfo["project_id"]); ?>"/>
										<input type="hidden" name="start" value="<?php echo ($start); ?>"/>
										<input type="hidden" name="pagesize" value="<?php echo ($pagesize); ?>"/>
										<select class="form-control" id="level_id" name="level_id" data-validate="required" data-message-required="请选择级别。">
											<?php if(is_array($levelList)): $index = 0; $__LIST__ = $levelList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($index % 2 );++$index; if($projectInfo['level_id'] == $vo['level_id']): ?><option value="<?php echo ($vo["level_id"]); ?>" selected ><?php echo ($vo["level_name"]); ?></option>
												<?php else: ?>
													<option value="<?php echo ($vo["level_id"]); ?>"><?php echo ($vo["level_name"]); ?></option><?php endif; ?>
												</if><?php endforeach; endif; else: echo "" ;endif; ?>
										</select>
									</div>
									<script type="text/javascript">
										jQuery(document).ready(function($)
										{
											$("#school_id").select2({
												placeholder: '查询学校...',
												allowClear: true
											}).on('select2-open', function()
											{
												// Adding Custom Scrollbar
												$(this).data('select2').results.addClass('overflow-hidden').perfectScrollbar();
											});
											
										});
									</script>
									<label class="col-sm-2 control-label">项目对应学校</label>
									<div class="col-sm-3">
										<select class="form-control" id="school_id" name="school_id" data-validate="required" data-message-required="请选择项目对应学校。">
											<option value="null">--</option>
											<?php if(is_array($schoolList)): $index = 0; $__LIST__ = $schoolList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($index % 2 );++$index; if($projectInfo['school_id'] == $vo['school_id']): ?><option value="<?php echo ($vo["school_id"]); ?>" selected><?php echo ($vo["school_name"]); ?></option>
												<?php else: ?>
													<option value="<?php echo ($vo["school_id"]); ?>"><?php echo ($vo["school_name"]); ?></option><?php endif; endforeach; endif; else: echo "" ;endif; ?>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label" for="article_detail">课程体系</label>
									<div class="col-sm-8">
										<textarea class="form-control" rows="5" id="kctx" name="kctx" data-validate="required" data-message-required="课程体系不能为空。"><?php echo ($projectInfo["kctx"]); ?></textarea>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label" for="article_detail">课程设置</label>
									<div class="col-sm-8">
										<textarea class="form-control" rows="5" name="kcsz" data-validate="required" data-message-required="课程设置不能为空。"><?php echo ($projectInfo["kcsz"]); ?></textarea>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label" for="article_detail">招生对象</label>
									<div class="col-sm-3">
										<input type="text" class="form-control" name="kcsz" data-validate="required" data-message-required="招生对象不能为空。"  value="<?php echo ($projectInfo["zsdx"]); ?>"/>
									</div>
									<label class="col-sm-2 control-label" for="article_detail">招生规模</label>
									<div class="col-sm-3">
										<input type="text" class="form-control" name="zsgm" data-validate="required" data-message-required="招生规模不能为空。"  value="<?php echo ($projectInfo["zsgm"]); ?>"/>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label" for="article_detail">学费</label>
									<div class="col-sm-3">
										<input type="text" class="form-control" name="xf" data-validate="required" data-message-required="学费不能为空。"  value="<?php echo ($projectInfo["xf"]); ?>"/>
									</div>
									<label class="col-sm-2 control-label" for="article_detail">住宿条件</label>
									<div class="col-sm-3">
										<input type="text" class="form-control" name="zs" data-validate="required" data-message-required="住宿条件不能为空。"  value="<?php echo ($projectInfo["zs"]); ?>"/>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label" for="article_detail">是否招收中国学生</label>
									<div class="col-sm-3">
										<select class="form-control" name="zszgxs">
											<?php if($projectInfo["zszgxs"] == 否): ?><option value="否" selected="selected">否</option>
												<option value="是">是</option>
											<?php elseif($projectInfo["zszgxs"] == 是): ?>
												<option value="否">否</option>
												<option value="是"  selected="selected">是</option>
											<?php else: ?>
												<option value="否">否</option>
												<option value="是">是</option><?php endif; ?>
										</select>
									</div>
									<label class="col-sm-2 control-label" for="article_detail">是否接受插班生</label>
									<div class="col-sm-3">
										<select class="form-control" name="cbs">
											<?php if($projectInfo["cbs"] == 否): ?><option value="否" selected="selected">否</option>
												<option value="是">是</option>
											<?php elseif($projectInfo["cbs"] == 是): ?>
												<option value="否">否</option>
												<option value="是"  selected="selected">是</option>
											<?php else: ?>
												<option value="否">否</option>
												<option value="是">是</option><?php endif; ?>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label" for="article_detail">入学标准</label>
									<div class="col-sm-8">
										<textarea class="form-control" rows="5" name="rxbz" data-validate="required" data-message-required="入学标准不能为空。"><?php echo ($projectInfo["rxbz"]); ?></textarea>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label" for="article_detail">入学考试科目</label>
									<div class="col-sm-8">
										<textarea class="form-control" rows="5" name="kskm" data-validate="required" data-message-required="入学考试科目不能为空。"><?php echo ($projectInfo["kskm"]); ?></textarea>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label" for="article_detail">入学考试安排</label>
									<div class="col-sm-8">
										<textarea class="form-control" rows="5" name="ksap" data-validate="required" data-message-required="入学考试安排不能为空。"><?php echo ($projectInfo["ksap"]); ?></textarea>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label" for="article_detail">状态</label>
									<div class="col-sm-3">
										<select class="form-control" name="status">
											<?php if($projectInfo["status"] == 0): ?><option value="0" selected="selected">未发布</option>
												<option value="1">已发布</option>
												<option value="2">审核通过</option>
												<option value="3">审核未通过</option>
												<option value="9">删除</option>
											<?php elseif($projectInfo["status"] == 1): ?>
												<option value="0">未发布</option>
												<option value="1" selected="selected">已发布</option>
												<option value="2">审核通过</option>
												<option value="3">审核未通过</option>
												<option value="9">删除</option>
											<?php elseif($projectInfo["status"] == 2): ?>
												<option value="0">未发布</option>
												<option value="1">已发布</option>
												<option value="2" selected="selected">审核通过</option>
												<option value="3">审核未通过</option>
												<option value="9">删除</option>
											<?php elseif($projectInfo["status"] == 3): ?>
												<option value="0">未发布</option>
												<option value="1">已发布</option>
												<option value="2">审核通过</option>
												<option value="3" selected="selected">审核未通过</option>
												<option value="9">删除</option>
											<?php elseif($projectInfo["status"] == 9): ?>
												<option value="0">未发布</option>
												<option value="1">已发布</option>
												<option value="2">审核通过</option>
												<option value="3">审核未通过</option>
												<option value="9" selected="selected">删除</option>
											<?php else: ?>
												<option value="0">未发布</option>
												<option value="1">已发布</option>
												<option value="2">审核通过</option>
												<option value="3">审核未通过</option>
												<option value="9">删除</option><?php endif; ?>
										</select>
									</div>
									
								</div>
								<div class="form-group">
									<div class="col-sm-9"></div>
									<div class="col-sm-3">
										<button type="submit" class="btn btn-success">保存</button>
										<button type="reset" class="btn btn-white">取消</button>
										<a href="/ssxz/admin.php/Project/projectList/start/<?php echo ($start); ?>/pagesize/<?php echo ($pagesize); ?>" class="btn btn-info">返回</a>
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
		var ue = UE.getEditor('banner_detail');
    </script>
</html>