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

<body class="page-body login-page">
	<div class="login-container">
		<div class="row">
			<div class="col-sm-6">
				<!-- Errors container -->
				<div class="errors-container"></div>
				<!-- Add class "fade-in-effect" for login form effect -->
				<form method="post" role="form" id="login" class="login-form fade-in-effect">
					<div class="login-header">
						<a href="index.html" class="logo">
							<span>莘莘学子-后台管理系统</span>
						</a>
					</div>
					<div class="form-group">
						<label class="control-label" for="username">用户</label>
						<input type="text" class="form-control input-dark" name="username" id="username" autocomplete="off" />
					</div>
					
					<div class="form-group">
						<label class="control-label" for="passwd">密码</label>
						<input type="password" class="form-control input-dark" name="passwd" id="passwd" autocomplete="off" />
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-dark  btn-block text-left">
							<i class="fa-lock"></i>登录
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
	<!-- Bottom Scripts -->
	<script type="text/javascript" src="/ssxz/Public/assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="/ssxz/Public/assets/js/TweenMax.min.js"></script>
	<script type="text/javascript" src="/ssxz/Public/assets/js/resizeable.js"></script>
	<script type="text/javascript" src="/ssxz/Public/assets/js/joinable.js"></script>
	<script type="text/javascript" src="/ssxz/Public/assets/js/xenon-api.js"></script>
	<script type="text/javascript" src="/ssxz/Public/assets/js/xenon-toggles.js"></script>
	<script type="text/javascript" src="/ssxz/Public/assets/js/jquery-validate/jquery.validate.min.js"></script>
	<script type="text/javascript" src="/ssxz/Public/assets/js/toastr/toastr.min.js"></script>
	<!-- JavaScripts initializations and stuff -->
	<script type="text/javascript" src="/ssxz/Public/assets/js/xenon-custom.js"></script>

	<script type="text/javascript">
		jQuery(document).ready(function($)
		{
			// Reveal Login form
			setTimeout(function(){ $(".fade-in-effect").addClass('in'); }, 1);
			// Validation and Ajax action
			$("form#login").validate({
				rules: {
					username: {
						required: true
					},
					passwd: {
						required: true
					}
				},
				
				messages: {
					username: {
						required: '请输入用户名.'
					},
					
					passwd: {
						required: '请输入密码.'
					}
				},
				
				// Form Processing via AJAX
				submitHandler: function(form)
				{
					show_loading_bar(70); // Fill progress bar to 70% (just a given value)
					
					var opts = {
						"closeButton": true,
						"debug": false,
						"positionClass": "toast-top-full-width",
						"onclick": null,
						"showDuration": "300",
						"hideDuration": "1000",
						"timeOut": "5000",
						"extendedTimeOut": "1000",
						"showEasing": "swing",
						"hideEasing": "linear",
						"showMethod": "fadeIn",
						"hideMethod": "fadeOut"
					};
						
					$.ajax({
						url: "/ssxz/admin.php/Login/checkUser",
						method: 'POST',
						dataType: 'json',
						data: {
							do_login: true,
							username: $(form).find('#username').val(),
							passwd:$(form).find('#passwd').val(),
						},
						success: function(resp)
						{
							show_loading_bar({
								delay: .5,
								pct: 100,
								finish: function(){
									if(resp=="success")
									{
										window.location.href = '/ssxz/admin.php/School/schoolList';
									}
									else
									{
										toastr.error("用户名密码错误，请重新输入。", "登录错误!", opts);
										$(form).find('#passwd').select();
									}
								}
							});	
						}
					});
				}
			});
			
			// Set Form focus
			$("form#login .form-group:has(.form-control):first .form-control").focus();
		});
	</script>
</html>