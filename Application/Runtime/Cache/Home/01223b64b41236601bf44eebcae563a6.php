<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
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
</head>
<body>
    <div class="container-body">
        <!--头部begin-->
        <meta charset="UTF-8">
<!--头部begin-->
<div class="header">
    <div class="header-top">
        <div class="container">
            <div class="inner">您还，欢迎来到莘莘网</div>
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
                    <h2><a href="/ssxz/index.php/home/index/index">LOGO</a></h2>
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
                        <a href="#" class="search-btn" onclick="doSearch()">搜索</a>
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
        function doSearch(){
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
            <div class="reg regb">
                <div class="item cur">注册账号</div>
                <div class="item cur">填写基本信息</div>
                <div class="item">完成注册</div>
            </div>
            <div class="reg-tag">
                <h3 class="lv">为了更好的帮助您或您的孩子，请填写真实有效的信息数据!</h3>
            </div>
            <div class="reg-box">
                <div class="reg-tit lv">
                    <h4>个人信息和联系方式</h4>
                </div>
                <div class="reg-main">                    
                    <form class="form-horizontal" action="/ssxz/index.php/home/User/registerStep3">
                        <input name="userLogin" type="hidden" value="<?php echo ($userLogin); ?>">
                        <div class="form-group reg-er">
                            <label class="reg-t1 control-label"><i>*</i>姓名</label>
                            <span class="reg-t2">
                                <input type="text" name="userName" id="userName" class="form-control" >
                            </span>
							<span class="reg-t3">                                    
								<label class="radio-inline">
									<input type="radio" name="userSex" id="userSex" value="1"> 男
								</label>
								<label class="radio-inline">
									<input type="radio" name="userSex" id="userSex"  value="0"> 女
								</label>
							</span>
							<span class="reg-t4 control-label"> 注：请输入真实姓名以用于学校、课程报名</span>
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group reg-er">
                            <label class="reg-t1 control-label"><i>*</i>生日</label>
                            <span class="reg-t2 reg-tc">
                            	<input type="text" id="userBirthday" name="userBirthday" class="form-control"/>
                            </span>
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group reg-er">
                            <label class="reg-t1 control-label"><i></i>QQ号码</label>
                            <span class="reg-t2 reg-tc">
                                <input type="text" name="userQQ" id="userQQ" class="form-control" >
                            </span>                               
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group reg-er">
                            <label class="reg-t1 control-label"><i></i>电子邮箱</label>
                            <span class="reg-t2 reg-tc">
                                <input type="text" name="name"  class="form-control" >
                            </span>
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group reg-er">
                            <label class="reg-t1 control-label"><i></i>邮寄地址</label>
                            <span class="reg-t2 reg-tc">
                                <input type="text" id="userEmail" name="userEmail" class="form-control" >
                            </span>
                            <div class="clearfix"></div>
                        </div>
<!--                         <div class="text-right reg-b">我们十分重视您的隐私，查看保密政策</div>   -->  
                        <div class="reg-tit lv">
                            <h4>学校信息</h4>
                        </div>
                        <div class="form-group reg-er">
                            <span class="reg-t2 select-ico-box">
                                <select class="form-control reg-select" id="">
                                    <option value="">请选择</option>
                                    <option value="意向">意向</option>
                                    <option value="在读">在读</option>
                                </select>
                                <span class="select-ico"></span>
                            </span>
                            <span class="reg-t2 select-ico-box">
                                <select class="form-control reg-select">
                                    <option value="">请选择</option>
                                    <option value="美国">美国</option>
                                    <option value="英国">英国</option>
                                    <option value="加拿大">加拿大</option>
                                    <option value="澳大利亚">加拿大</option>
                                    <option value="新西兰">加拿大</option>
                                    <option value="其他">其他</option>
                                </select>
                                <span class="select-ico"></span>
                            </span>
                            <span class="reg-t2 reg-tx select-ico-box">
                                <select class="form-control reg-select">
                                    <option value="">请选择</option>
                                    <option value="">学校001</option>
                                    <option value="">学校002</option>
                                </select>
                                <span class="select-ico"></span>
                            </span>
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group reg-er">
                            <div class="reg-b1">
                                 <input type="text" name=""  class="form-control"  placeholder="如果列表内没有">
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group reg-er">
                            <label class="reg-t1 control-label"><i>*</i>留学方向</label>
                            <span class="reg-t2 select-ico-box">
                                <select class="form-control reg-select">
									<option value="">请选择</option>
                                    <option value="美国">美国</option>
                                    <option value="英国">英国</option>
                                    <option value="加拿大">加拿大</option>
                                    <option value="澳大利亚">加拿大</option>
                                    <option value="新西兰">加拿大</option>
                                    <option value="其他">其他</option>
                                </select>
                                <span class="select-ico"></span>
                            </span>
                            <div class="clearfix"></div>
                        </div>
                        
                        <div class="form-group reg-er">
                            <label class="reg-t1 reg-t1x control-label"><i>*</i>有无培训需求</label>
                            <span class="reg-t2 select-ico-box">
                                <select class="form-control reg-select">
                                    <option value="">请选择</option>
                                    <option value="是">是</option>
                                    <option value="否">否</option>
                                </select>
                                <span class="select-ico"></span>
                            </span>
                            <div class="clearfix"></div>
                        </div>
                        <div class="reg-tit lv">
                            <h4>验证码</h4>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label"><i>*</i>验证码&nbsp;&nbsp;&nbsp</label>
                            <span class="col-sm-4 yzm">
                                <span class="col-sm-7">
                                    <input type="text" name="verify"  class="form-control" >
                                </span>
                                <span class="col-sm-5" id="captcha-container">
									  <img width="30%" class="form-control" height="50" alt="验证码" src="<?php echo U('Home/User/verify_c',array());?>" title="点击刷新">  
                                </span>                                
                            </span>
                        </div>
                        <div class="form-group reg-er">
                            <div class="reg-btnr">
                                    <input type="submit" value="同意协议并注册" class="btn  btn-block btn-xh" />
                            </div>
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
            var _ch = $(".container-body").height();
            var _wh = $(window).height();
            if (_wh - _ch > 377) {
                $(".container-body").css("min-height", (_wh - 397) + "px");
            }
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