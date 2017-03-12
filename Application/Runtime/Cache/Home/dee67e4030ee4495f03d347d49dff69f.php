<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
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
<script type="text/javascript" src="/ssxz/Public/assets/js/jquery-validate/jquery.validate.min.js"></script>
<style type="text/css">
error {
	color:red;
}
</style>
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

        <!--容器begin-->
        <div class="container bgcolorf">
            <div class="reg">
                <div class="item cur">注册账号</div>
                <div class="item">填写基本信息</div>
                <div class="item">完成注册</div>
            </div>
            <div class="reg-tag">
                <h3 class="lv">只需10秒完成注册，为了给您最好的服务</h3>
            </div>
            <div class="reg-box">
                <div class="reg-tit lv">
                    <h4 class="col-md-offset-2"><span>登录名和密码</span></h4>
                </div>
                <div class="reg-main">                    
                    <form class="form-horizontal" id="regist" method="post" role="form"><!-- action="/ssxz/index.php/home/User/registerStep2" -->
                        <div class="form-group">
                            <label class="col-sm-3 control-label"><i>*</i>用户名&nbsp;&nbsp;&nbsp</label>
                            <span class="col-sm-4">
                                <input type="text" name="userLogin" id="userLogin"  class="form-control" >
                            </span>
                                <span class="col-sm-5 control-label reg-zh">6个字符以上，建议使用字母或数字</span>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label"><i>*</i>昵称&nbsp;&nbsp;&nbsp</label>
                            <span class="col-sm-4">
                                <input type="text" name="userNiceName" id="userNiceName"  class="form-control" >
                            </span>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label"><i>*</i>密码&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <span class="col-sm-4">
                                <input type="password" id="password" name="password" class="form-control" >
                            </span>
                                <span class="col-sm-5 control-label reg-zh">6个字符以上，建议使用字母或数字（区分大小写）</span>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label"><i>*</i>确认密码</label>
                            <span class="col-sm-4">
                                <input type="password" id="cpassword" name="cpassword"  class="form-control" >
                            </span>
                                <span class="col-sm-5 control-label reg-zh">请再输入一遍您上面填写的密码</span>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label"><i>*</i>手机号码</label>
                            <span class="col-sm-4">
                                <input type="text" id="mobile" name="mobile"  class="form-control" >
                            </span>
                                <span class="col-sm-5 control-label reg-zh"></span>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label"><i>*</i>验证码&nbsp;&nbsp;&nbsp</label>
                            <span class="col-sm-4 yzm">
                                <span class="col-sm-7">
                                    <input type="text" id="verify" name="verify"  class="form-control" >
                                </span>
                                <span class="col-sm-5" id="captcha-container">
									  <img width="30%" class="form-control" height="50" alt="验证码" src="<?php echo U('Home/User/verify_c',array());?>" title="点击刷新">  
                                </span>
                            </span>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label"></label>
                            <span class="col-sm-4">
                                    <input type="submit" value="下一步" class="btn  btn-block btn-xh" />
                            </span>
                                <span class="col-sm-5 control-label reg-zh"></span>
                        </div>
                    </form>
                </div>
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
        	
        	//$('#myAlert').alert('close');
        	
            var _ch = $(".container-body").height();
            var _wh = $(window).height();
            if (_wh - _ch > 377) {
                $(".container-body").css("min-height", (_wh - 397) + "px");
            }
            
            
            jQuery.validator.addMethod("stringCheck", function(value, element) {
            	return this.optional(element) || /^[u0391-uFFE5w]+$/.test(value);
            }, "只能包括中文字、英文字母、数字和下划线");
            
            jQuery.validator.addMethod("isMobile", function(value, element) {
           		var length = value.length;
           		var mobile = /^(13[0-9]{9})|(18[0-9]{9})|(14[0-9]{9})|(17[0-9]{9})|(15[0-9]{9})$/;
           		return this.optional(element) || (length == 11 && mobile.test(value));
           	}, "请正确填写您的手机号码");
            
            $("form#regist").validate({
				rules: {
					userLogin: {
						required: true,
						rangelength:[6,20],
						stringCheck:true,
						remote:{
		                    type:"POST",
		                    url:"/ssxz/index.php/home/User/checkUserName", //请求地址
		                    data:{
		                    	userLogin:function(){ return $("#userLogin").val(); }
		                    }
						}
					},
					userNiceName:{
						required: true,
						rangelength:[6,20]
					},
					password: {
						required: true,
						rangelength:[6,20],
						stringCheck: true
					},
					cpassword: {
						required: true,
						rangelength:[6,20],
						stringCheck: true
					},
					mobile: {
						required: true,
						isMobile: true,
						remote:{
		                    type:"POST",
		                    url:"/ssxz/index.php/home/User/checkMobile", //请求地址
		                    data:{
		                    	mobile:function(){ return $("#mobile").val(); }
		                    }
						}
					},
					 verify: {
						required: true,
						remote:{
		                    type:"POST",
		                    url:"/ssxz/index.php/home/User/checkVerify", //请求地址
		                    data:{
		                    	verify:function(){ return $("#verify").val(); }
		                    }
						}
					} 
				},
				
				messages: {
					userLogin: {
						required: '请输入用户名',
						rangelength:'请输入6~20个数字或字母',
						remote:'用户名已存在'
					},
					userNiceName:{
						required: '请输入昵称',
						rangelength:'请输入6~20个数字或字母'
					},
					password: {
						required: '请输入密码',
						rangelength:'请输入6~20个数字或字母'
					},
					cpassword: {
						required: '请输入确认密码',
						rangelength:'请输入6~20个数字或字母'
					},
					mobile: {
						required: '请输入手机号',
						remote:'手机号已存在'
						
					},
					 verify: {
						required: '请输入验证码',
						remote:'验证码错误,请重新刷新输入'
					} 
				},
				
				// Form Processing via AJAX
				submitHandler: function(form)
				{
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
						url: "/ssxz/index.php/home/User/doRegisterStep1",
						method: 'POST',
						dataType: 'json',
						data: {
							userLogin: $(form).find('#userLogin').val(),
							userName: $(form).find('#userName').val(),
							passwd:$(form).find('#password').val(),
							cpassword:$(form).find('#cpassword').val(),
							mobile:$(form).find('#mobile').val(),
							verify:$(form).find('#verify').val()
						},
						success: function(resp)
						{
							if(resp=="success")
							{
								window.location.href = '/ssxz/index.php/home/User/registerStep2';
							}
							else
							{
								alert("注册失败,请重新注册");
							}

						}
					});
				}
			});

        });
        
        var captcha_img = $('#captcha-container').find('img');
		var verifyimg = captcha_img.attr("src");  
		captcha_img.attr('title', '点击刷新');  
		captcha_img.click(function(){  
		    if( verifyimg.indexOf('?')>0){
		        $(this).attr("src", verifyimg+'&random='+Math.random());  
		    }else{  
		        $(this).attr("src", verifyimg.replace(/\?.*$/,'')+'?'+Math.random());  
		    }  
		});
		
        
		
		
		
		
    </script>
</html>