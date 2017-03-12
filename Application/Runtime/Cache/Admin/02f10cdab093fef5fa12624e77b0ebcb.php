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
						<li>话题管理</li>
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
							<form role="form" id="formTopic"  action="/ssxz/admin.php/Topic/topicSave" method="post" method="post" class="form-horizontal validate">
								<div class="form-group">
									<label class="col-sm-2 control-label" for="article_title">话题标题</label>
									<div class="col-sm-10">
										<input type="hidden" name="action" value="<?php echo ($action); ?>"/>
										<input type="hidden" name="article_id" value="<?php echo ($articleInfo["article_id"]); ?>"/>
										<input type="hidden" name="topic_flag" value="1"/>
										<input type="hidden" name="start" value="<?php echo ($start); ?>"/>
										<input type="hidden" name="pagesize" value="<?php echo ($pagesize); ?>"/>
										<input type="text" class="form-control" name="article_title" value="<?php echo ($articleInfo["article_title"]); ?>" data-validate="required" data-message-required="话题标题不能为空。" />
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label" for="article_keyword">话题关键字</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" name="article_keyword" value="<?php echo ($articleInfo["article_keyword"]); ?>" data-validate="required" data-message-required="话题检索关键字不能为空。" />
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">话题来源</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" name="article_source" value="<?php echo ($articleInfo["article_source"]); ?>"/>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">摘要</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" name="article_excerpt" value="<?php echo ($articleInfo["article_excerpt"]); ?>"/>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label" for="article_detail">话题内容</label>
									<div class="col-sm-10">
										<script id="article_detail" name="article_detail" type="text/plain" style="width:100%;height:500px;" ><?php echo (htmlspecialchars_decode($articleInfo["article_detail"])); ?></script>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">所属学校</label>
									<div class="col-sm-4">
										<script type="text/javascript">
										jQuery(document).ready(function($)
											{
												$("#article_school_id").select2({
													placeholder: 'Select your country...',
													allowClear: true
												}).on('select2-open', function()
												{
													// Adding Custom Scrollbar
													$(this).data('select2').results.addClass('overflow-hidden').perfectScrollbar();
												});
												
											});
										</script>
										<select class="form-control" id="article_school_id" name="article_school_id">
											<option value="null">--</option>
											<?php if(is_array($schoolList)): $index = 0; $__LIST__ = $schoolList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($index % 2 );++$index; if($articleInfo['article_school_id'] == $vo['school_id']): ?><option value="<?php echo ($vo["school_id"]); ?>" selected><?php echo ($vo["school_name"]); ?></option>
												<?php else: ?>
													<option value="<?php echo ($vo["school_id"]); ?>"><?php echo ($vo["school_name"]); ?></option><?php endif; endforeach; endif; else: echo "" ;endif; ?>
										</select>
									</div>
									<label class="col-sm-2 control-label">所属学习小组</label>
									<div class="col-sm-4">
										<script type="text/javascript">
										jQuery(document).ready(function($)
											{
												$("#article_group_id").select2({
													placeholder: 'Select your country...',
													allowClear: true
												}).on('select2-open', function()
												{
													// Adding Custom Scrollbar
													$(this).data('select2').results.addClass('overflow-hidden').perfectScrollbar();
												});
											});
										</script>
										<select class="form-control" id="article_group_id" name="article_group_id">
											<option value="null">--</option>
											<?php if(is_array($schoolList)): $index = 0; $__LIST__ = $schoolList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($index % 2 );++$index; if($articleInfo['article_school_id'] == $vo['school_id']): ?><option value="<?php echo ($vo["school_id"]); ?>" selected><?php echo ($vo["school_name"]); ?></option>
												<?php else: ?>
													<option value="<?php echo ($vo["school_id"]); ?>"><?php echo ($vo["school_name"]); ?></option><?php endif; endforeach; endif; else: echo "" ;endif; ?>
										</select>
									</div>
								</div>
								<!-- <div  class="form-group">
									<label class="col-sm-2 control-label">话题类型</label>
									<div class="col-sm-4">
										<select class="form-control" name="article_cataloge" data-validate="required" data-message-required="话题类别不能为空。" >
											<option value="">--</option>
											<?php if(is_array($catalogeList)): $i = 0; $__LIST__ = $catalogeList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($articleInfo['article_cataloge'] == $vo['cataloge_key']): ?><option value="<?php echo ($vo["cataloge_key"]); ?>" selected><?php echo ($vo["cataloge_key"]); ?> - <?php echo ($vo["cataloge_name"]); ?></option>
												<?php else: ?>
													<option value="<?php echo ($vo["cataloge_key"]); ?>"><?php echo ($vo["cataloge_key"]); ?> - <?php echo ($vo["cataloge_name"]); ?></option><?php endif; endforeach; endif; else: echo "" ;endif; ?>
										</select>
									</div>
									<label class="col-sm-2 control-label">话题子类</label>
									<div class="col-sm-4">
										<input type="text" class="form-control" name="article_subcataloge" value="<?php echo ($articleInfo["article_subcataloge"]); ?>" />
									</div>
								</div> -->
								<div class="form-group">
									<label class="col-sm-2 control-label" for="article_top">是否置顶</label>
									<div class="col-sm-4">
										<select class="form-control" name="article_top" data-validate="required" data-message-required="话题学校不能为空。" >
											<?php if($articleInfo["article_top"] == 0 ): ?><option value="">--</option>
												<option value="0" selected="selected">否</option>
												<option value="1">是</option>
											<?php elseif($articleInfo["article_top"] == 1): ?>
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
										<select class="form-control" name="article_elite" data-validate="required" data-message-required="话题学校不能为空。" >
											<?php if($articleInfo["article_elite"] == 0 ): ?><option value="">--</option>
												<option value="0" selected="selected">否</option>
												<option value="1">是</option>
											<?php elseif($articleInfo["article_elite"] == 1): ?>
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
									<label class="col-sm-2 control-label" for="article_status">话题状态</label>
									<div class="col-sm-4">
										<select class="form-control" name="article_status" data-validate="required" data-message-required="话题学校不能为空。" >
											<?php if($articleInfo["article_status"] == 0 ): ?><option value="">--</option>
												<option value="0" selected>未发布</option>
												<option value="1">已发布</option>
												<option value="9">已删除</option>
											<?php elseif($articleInfo["article_status"] == 1): ?>
												<option value="">--</option>
												<option value="0">未发布</option>
												<option value="1" selected>已发布</option>
												<option value="9">已删除</option>
											<?php elseif($articleInfo["article_status"] == 9): ?>
												<option value="">--</option>
												<option value="0">未发布</option>
												<option value="1">已发布</option>
												<option value="9" selected>已删除</option>
											<?php else: ?>
												<option value="">--</option>
												<option value="0">未发布</option>
												<option value="1">已发布</option>
												<option value="9">已删除</option><?php endif; ?>
										</select>
									</div>
									<label class="col-sm-2 control-label">排序</label>
									<div class="col-sm-4">
										<input type="text" class="form-control" name="article_sort" value="<?php echo ($articleInfo["article_top"]); ?>" />
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label" for="article_status">是否可以评论</label>
									<div class="col-sm-4">
										<select class="form-control" name="comment_status" data-validate="required" data-message-required="话题学校不能为空。" >
											<?php if($articleInfo["comment_status"] == 0 ): ?><option value="">--</option>
												<option value="0" selected="selected">否</option>
												<option value="1">是</option>
											<?php elseif($articleInfo["comment_status"] == 1): ?>
												<option value="">--</option>
												<option value="0">否</option>
												<option value="1"  selected="selected">是</option>
											<?php else: ?>
												<option value="">--</option>
												<option value="0">否</option>
												<option value="1">是</option><?php endif; ?>
										</select>
									</div>
									<label class="col-sm-2 control-label">是否是新闻</label>
									<div class="col-sm-4">
										<select class="form-control" name="article_newsflag">
											<?php if($articleInfo["article_newsflag"] == 0 ): ?><option value="0" selected="selected">否</option>
												<option value="1">是</option>
											<?php elseif($articleInfo["article_newsflag"] == 1): ?>
												<option value="0">否</option>
												<option value="1"  selected="selected">是</option>
											<?php else: ?>
												<option value="0">否</option>
												<option value="1">是</option><?php endif; ?>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label" for="article_read">话题阅读数</label>
									<div class="col-sm-4"><span class="form-control"><?php echo ($articleInfo["article_read"]); ?></span></div>
									<label class="col-sm-2 control-label" for="article_mark">话题收藏数</label>
									<div class="col-sm-4"><span class="form-control"><?php echo ($articleInfo["article_mark"]); ?></span></div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label" for="article_comment">话题点评数</label>
									<div class="col-sm-10">
										<a class="form-control" id="article_comment" href="#"><?php echo ($articleInfo["article_comment"]); ?></a>
									</div>
									
								</div>
								<div class="form-group">
									<div class="col-sm-10"></div>
									<div class="col-sm-2">
										<button type="submit" class="btn btn-success">保存</button>
										<button type="reset" class="btn btn-white">取消</button>
										<a href="/ssxz/admin.php/Topic/topicList/start/<?php echo ($start); ?>/pagesize/<?php echo ($pagesize); ?>" class="btn btn-info">返回</a>
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