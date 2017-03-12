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
						<li><i class="fa-home"></i>首页</li>
						<li>学校管理</li>
						<li class="active"><strong><?php echo ($title); ?></strong></li>
					</ol>
				</div>
			</div>
			<!-- Content Panel -->
			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-default">
						<form role="form" id="formSchool"  action="/ssxz/admin.php/School/schoolSave"  enctype="multipart/form-data"  method="post" class="form-horizontal validate">
							<div class="panel-heading">
								<h3 class="panel-title"><?php echo ($title); ?></h3>
								<div style="float:right">
									<button type="submit" class="btn btn-success">保存</button>
									<button type="reset" class="btn btn-white">取消</button>
									<a href="/ssxz/admin.php/School/schoolList/start/<?php echo ($start); ?>/pagesize/<?php echo ($pagesize); ?>" class="btn btn-info">返回</a>
									<input type="hidden" name="start" value="<?php echo ($start); ?>"/>
											<input type="hidden" name="pagesize" value="<?php echo ($pagesize); ?>"/>
								</div>
							</div>
							<div class="panel-body">
								<!-- Content -->
								<div class="tabs-vertical-env tabs-vertical-bordered">
									<ul class="nav tabs-vertical">
										<li class="active"><a href="#v4-home" data-toggle="tab">学校简介</a></li>
										<li><a href="#v4-profile" data-toggle="tab">课堂特色</a></li>
										<li><a href="#v4-messages" data-toggle="tab">校长简介</a></li>
										<li><a href="#v4-school7" data-toggle="tab">联系方式</a></li>
										<li><a href="#v4-status" data-toggle="tab">学校状态</a></li>
									</ul>
									<div class="tab-content">
										<div class="tab-pane active" id="v4-home">
											<div class="form-group">
												<label class="col-sm-2 control-label">学校名称</label>
												<div class="col-sm-10">
													<input type="hidden" name="action" value="<?php echo ($action); ?>"/>
													<input type="hidden" name="start" value="<?php echo ($start); ?>"/>
													<input type="hidden" name="pagesize" value="<?php echo ($pagesize); ?>"/>
													<input type="hidden" name="school_id" value="<?php echo ($schoolInfo["school_id"]); ?>"/>
													<input type="text" class="form-control" name="school_name" value="<?php echo ($schoolInfo["school_name"]); ?>" data-validate="required" data-message-required="学校名称不能为空." placeholder="Required Field" />
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">学校简介</label>
												<div class="col-sm-10">
													<textarea class="form-control" rows="3" name="school_excerpt"><?php echo ($schoolInfo["school_excerpt"]); ?></textarea>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">学校检索关键字</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" name="school_keyword" value="<?php echo ($schoolInfo["school_keyword"]); ?>" data-validate="required" data-message-required="学校名称不能为空." placeholder="Required Field" />
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">热门课程</label>
												<div class="col-sm-10">
													<p>
														<label class="checkbox-inline">
															<input type="checkbox" id="school_coursename1" onclick="checkCheckde('school_coursename1')" name="school_coursename1" value="IB">
															IB
														</label>
														<label class="checkbox-inline">
															<input type="checkbox" id="school_coursename2" onclick="checkCheckde('school_coursename2')" name="school_coursename2" value="A-LEVEL">
															A-LEVEL
														</label>
														<label class="checkbox-inline">
															<input type="checkbox" id="school_coursename3" onclick="checkCheckde('school_coursename3')" name="school_coursename3" value="IGCSE">
															IGCSE
														</label>
														<label class="checkbox-inline">
															<input type="checkbox" id="school_coursename4" onclick="checkCheckde('school_coursename4')" name="school_coursename4" value="BC">
															BC
														</label>
														<label class="checkbox-inline">
															<input type="checkbox" id="school_coursename5" onclick="checkCheckde('school_coursename5')" name="school_coursename5" value="VCE">
															VCE
														</label>
														<label class="checkbox-inline">
															<input type="checkbox" id="school_coursename6" onclick="checkCheckde('school_coursename6')" name="school_coursename6" value="AP">
															AP
														</label>
														<label class="checkbox-inline">
															<input type="checkbox" id="school_coursename7" onclick="checkCheckde('school_coursename7')" name="school_coursename7" value="SAT">
															SAT
														</label>
														<label class="checkbox-inline">
															<input type="checkbox" id="school_coursename8" onclick="checkCheckde('school_coursename8')" name="school_coursename8" value="ACT">
															ACT
														</label>
														<label class="checkbox-inline">
															<input type="checkbox" id="school_coursename9" onclick="checkCheckde('school_coursename9')" name="school_coursename9" value="美高">
															美高
														</label>
														<label class="checkbox-inline">
															<input type="checkbox" id="school_coursename10" onclick="checkCheckde('school_coursename10')" name="school_coursename10" value="预科">
															预科
														</label>
														<label class="checkbox-inline">
															<input type="checkbox" id="school_coursename11" onclick="checkCheckde('school_coursename11')" name="school_coursename11" value="PGA">
															PGA
														</label>
														
													</p>

												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">项目阶段</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" name="school_step" value="<?php echo ($schoolInfo["school_step"]); ?>"/>
												</div>
												
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">学校介绍</label>
												<div class="col-sm-10">
													<script id="school_detail" name="school_detail" type="text/plain" style="width:100%;height:500px;" ><?php echo (htmlspecialchars_decode($schoolInfo["school_detail"])); ?></script>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">学校LOGO</label>
												<div class="col-sm-4">
													<input type="file" name="school_photo"/>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label"></label>
												<div class="col-sm-4">
													<img src="/ssxz/Uploads/<?php echo ($schoolInfo["school_photo"]); ?>" width="239" height="219"/>
												</div>
											</div>
										</div>
										<div class="tab-pane" id="v4-profile">
											<div class="form-group">
												<label class="col-sm-2 control-label">课堂特色</label>
												<div class="col-sm-10">
													<script id="school_feature" name="school_feature" type="text/plain" style="width:100%;height:500px;" ><?php echo (htmlspecialchars_decode($schoolInfo["school_feature"])); ?></script>
												</div>
											</div>
										</div>
										<div class="tab-pane" id="v4-messages">
											<!-- Content -->
											<div class="form-group">
												<label class="col-sm-2 control-label">校长姓名</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" name="master_name" value="<?php echo ($schoolInfo["master_name"]); ?>"/>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">校长履历</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" name="master_record1" value="<?php echo ($schoolInfo["master_record1"]); ?>"/>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label"></label>
												<div class="col-sm-10">
													<input type="text" class="form-control" name="master_record2" value="<?php echo ($schoolInfo["master_record2"]); ?>"/>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label"></label>
												<div class="col-sm-10">
													<input type="text" class="form-control" name="master_record3" value="<?php echo ($schoolInfo["master_record3"]); ?>"/>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label"></label>
												<div class="col-sm-10">
													<input type="text" class="form-control" name="master_record4" value="<?php echo ($schoolInfo["master_record4"]); ?>"/>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">校长简介</label>
												<div class="col-sm-10">
													<script id="master_excerpt" name="master_excerpt" type="text/plain" style="width:100%;height:500px;" ><?php echo (htmlspecialchars_decode($schoolInfo["master_excerpt"])); ?></script>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">校长照片</label>
												<div class="col-sm-4">
													<input type="file" name="master_photo"/>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label"></label>
												<div class="col-sm-4">
													<img src="/ssxz/Uploads/<?php echo ($schoolInfo["master_photo"]); ?>" width="100px"></img>
												</div>
											</div>
										</div>
										<div class="tab-pane" id="v4-school7">
											<div class="form-group">
												<label class="col-sm-2 control-label">学校地址</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" name="school_address" value="<?php echo ($schoolInfo["school_address"]); ?>"/>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">所属区域</label>
												<div class="col-sm-10">
													<select id="school_area" name="school_area" class="form-control">
														<option value=''>--</option>
														<?php if(is_array($areaList)): $index = 0; $__LIST__ = $areaList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($index % 2 );++$index; if($schoolInfo['school_area'] == $vo['area_id']): ?><option value="<?php echo ($vo["area_id"]); ?>" selected><?php echo ($vo["area_name"]); ?></option>
															<?php else: ?>
																<option value="<?php echo ($vo["area_id"]); ?>"><?php echo ($vo["area_name"]); ?></option><?php endif; endforeach; endif; else: echo "" ;endif; ?>
													</select>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">联系电话</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" name="school_phone" value="<?php echo ($schoolInfo["school_phone"]); ?>"/>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">交通信息</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" name="school_traffic" value="<?php echo ($schoolInfo["school_traffic"]); ?>"/>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">地图坐标</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" name="school_map" value="<?php echo ($schoolInfo["school_map"]); ?>"/>
												</div>
											</div>
										</div>
										<div class="tab-pane" id="v4-status">
											<div class="form-group">
												<label class="col-sm-2 control-label">学校状态</label>
												<div class="col-sm-10">
													<select id="school_area" name="school_status" class="form-control">
														<?php if($schoolInfo["school_status"] == 0 ): ?><option value="">--</option>
															<option value="0" selected>未发布</option>
															<option value="1">已发布</option>
															<option value="9">已删除</option>
														<?php elseif($schoolInfo["school_status"] == 1): ?>
															<option value="">--</option>
															<option value="0">未发布</option>
															<option value="1" selected>已发布</option>
															<option value="9">已删除</option>
														<?php elseif($schoolInfo["school_status"] == 9): ?>
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
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">学校排序</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" name="school_sort" value="<?php echo ($schoolInfo["school_sort"]); ?>"/>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">受关注度</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" name="school_attention" value="<?php echo ($schoolInfo["school_attention"]); ?>"/>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">是否是新增学校</label>
												<div class="col-sm-10">
													<select id="school_area" name="school_isnew" class="form-control">
														<?php if($schoolInfo["school_isnew"] == 0 ): ?><option value="">--</option>
															<option value="0" selected>否</option>
															<option value="1">是</option>
														<?php elseif($schoolInfo["school_status"] == 1): ?>
															<option value="">--</option>
															<option value="0">否</option>
															<option value="1" selected>是</option>
														<?php else: ?>
															<option value="">--</option>
															<option value="0">否</option>
															<option value="1">是</option><?php endif; ?>
													</select>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">是否是推荐学校</label>
												<div class="col-sm-10">
													<select id="school_area" name="school_recommend" class="form-control">
														<?php if($schoolInfo["school_recommend"] == 0 ): ?><option value="">--</option>
															<option value="0" selected>否</option>
															<option value="1">是</option>
														<?php elseif($schoolInfo["school_status"] == 1): ?>
															<option value="">--</option>
															<option value="0">否</option>
															<option value="1" selected>是</option>
														<?php else: ?>
															<option value="">--</option>
															<option value="0">否</option>
															<option value="1">是</option><?php endif; ?>
													</select>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">点评数</label>
												<div class="col-sm-10">
													<a class="form-control" href=""><?php echo ($schoolInfo["school_comments"]); ?></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</form>
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
	<link rel="stylesheet" type="text/css" href="/ssxz/Public/assets/js/datatables/dataTables.bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="/ssxz/Public/assets/js/uikit/vendor/codemirror/codemirror.css" />
	<link rel="stylesheet" type="text/css" href="/ssxz/Public/assets/js/uikit/uikit.css" />
	<link rel="stylesheet" type="text/css" href="/ssxz/Public/assets/js/uikit/css/addons/uikit.almost-flat.addons.min.css" />
	<load href="/ssxz/Public/assets/js/select2/select2.css">
	<load href="/ssxz/Public/assets/js/select2/select2-bootstrap.css">
	<!-- Bottom Scripts -->
	<script type="text/javascript" src="/ssxz/Public/assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="/ssxz/Public/assets/js/TweenMax.min.js"></script>
	<script type="text/javascript" src="/ssxz/Public/assets/js/resizeable.js"></script>
	<script type="text/javascript" src="/ssxz/Public/assets/js/joinable.js"></script>
	<script type="text/javascript" src="/ssxz/Public/assets/js/xenon-api.js"></script>
	<script type="text/javascript" src="/ssxz/Public/assets/js/xenon-toggles.js"></script>
	<script type="text/javascript" src="/ssxz/Public/assets/js/jquery-ui/jquery-ui.min.js"></script>
	<script type="text/javascript" src="/ssxz/Public/assets/js/jquery-validate/jquery.validate.min.js"></script>
	<!-- JavaScripts initializations and stuff -->
	<script type="text/javascript" src="/ssxz/Public/assets/js/xenon-custom.js"></script>
	<script type="text/javascript" src="/ssxz/Public/ueditor14/ueditor.config.js"></script>
    <script type="text/javascript" src="/ssxz/Public/ueditor14/ueditor.all.min.js"></script>
    <script type="text/javascript" src="/ssxz/Public/ueditor14/lang/zh-cn/zh-cn.js"></script>
	<script type="text/javascript" src="/ssxz/Public/assets/js/select2/select2.js"></script>
	
	<script type="text/javascript">
		var ue = UE.getEditor('school_detail'); // 学校介绍
		var uefeature = UE.getEditor('school_feature'); // 课堂特色
		var uemaster = UE.getEditor('master_excerpt'); // 校长介绍
		
		
		
		function checkCheckde(checkId){
			var checkCount=0;
			for(var i=1;i<=11;i++)
			if($('#school_coursename'+i).is(':checked')){
				checkCount++;
			}
			if(checkCount>2){
				alert("热门课程最多选择两个");
				$('#'+checkId).removeAttr("checked");
			}
		}
		
		
		jQuery(document).ready(function($){
			//var school_coursename = $('#school_coursename').val();

			var school_coursename ="<?php echo ($schoolInfo["school_coursename"]); ?>";
			
			if(school_coursename.indexOf('IB')>=0){
				$('#school_coursename1').attr("checked",'true');
			}else{
				$('#school_coursename1').removeAttr("checked");
			}
			if(school_coursename.indexOf('A-LEVEL')>=0){
				$('#school_coursename2').attr("checked",'true');
			}else{
				$('#school_coursename2').removeAttr("checked");
			}
			if(school_coursename.indexOf('IGCSE')>=0){
				$('#school_coursename3').attr("checked",'true');
			}else{
				$('#school_coursename3').removeAttr("checked");
			}
			if(school_coursename.indexOf('BC')>=0){
				$('#school_coursename4').attr("checked",'true');
			}else{
				$('#school_coursename4').removeAttr("checked");
			}
			if(school_coursename.indexOf('VCE')>=0){
				$('#school_coursename5').attr("checked",'true');
			}else{
				$('#school_coursename5').removeAttr("checked");
			}
			if(school_coursename.indexOf('AP')>=0){
				$('#school_coursename6').attr("checked",'true');
			}else{
				$('#school_coursename6').removeAttr("checked");
			}
			if(school_coursename.indexOf('SAT')>=0){
				$('#school_coursename7').attr("checked",'true');
			}else{
				$('#school_coursename7').removeAttr("checked");
			}
			if(school_coursename.indexOf('ACT')>=0){
				$('#school_coursename8').attr("checked",'true');
			}else{
				$('#school_coursename8').removeAttr("checked");
			}
			if(school_coursename.indexOf('美高')>=0){
				$('#school_coursename9').attr("checked",'true');
			}else{
				$('#school_coursename9').removeAttr("checked");
			}
			if(school_coursename.indexOf('预科')>=0){
				$('#school_coursename10').attr("checked",'true');
			}else{
				$('#school_coursename10').removeAttr("checked");
			}
			if(school_coursename.indexOf('PGA')>=0){
				$('#school_coursename11').attr("checked",'true');
			}else{
				$('#school_coursename11').removeAttr("checked");
			}
			
			
        });
    </script>
</html>