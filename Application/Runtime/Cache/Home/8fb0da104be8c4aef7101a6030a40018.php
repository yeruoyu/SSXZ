<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<title>莘莘网</title>
<!-- jquery库 -->
<script src="/ssxz/Public/home/js/jQuery.min.js"></script>
<!-- bootstrap -->
<link type="text/css" rel="stylesheet" href="/ssxz/Public/home/css/bootstrap.min.css" />
<link type="text/css" rel="stylesheet" href="/ssxz/Public/home/css/main.css" />
<!--图标-->
<link type="text/css" rel="stylesheet" href="/ssxz/Public/home/css/font-awesome.min.css" />
 
<script src="/ssxz/Public/home/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container-body">
        <!--头部begin-->
        <div class="header">
            <div class="header-top">
                <div class="container">
                    <div class="inner">您还，欢迎来到莘莘网</div>
                    <div class="inner-right">
                        <ul class="list-inline">
                            <li><a href="login.html">登录</a>|</li>
                            <li><a href="register_step1.html">注册</a>|</li>
                            <li><a href="#">手机客户端</a>|</li>
                            <li><a href="#">微信</a></li>
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
                            <h2>LOGO</h2>
                        </div>
                        <div class="header-nav">
                            <ul class="list-inline nav-control">
                                <li><a href="school_list.html" title="国际学校">国际学校</a></li>
                                <li><a href="news_list.html" title="最新资讯">最新资讯</a></li>
                                <li><a href="study_list.html" title="课程学习">课程学习</a></li>
                                <li><a href="topic_list.html" title="话题区">话题区</a></li>
                            </ul>
                        </div>
                        <div class="header-search">
                            <div class="search-box">
                                <i class="fa fa-search search-ico"></i>
                                <input class="form-control input-sm" />
                                <a href="#" class="search-btn">搜索</a>
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
                    <form class="form-horizontal" action="/ssxz/index.php/home/Index/registerStep2">
                        <input name="" type="hidden" value="">
                        <div class="form-group">
                            <label class="col-sm-3 control-label"><i>*</i>用户名&nbsp;&nbsp;&nbsp</label>
                            <span class="col-sm-4">
                                <input type="text" name="name"  class="form-control" >
                            </span>
                                <span class="col-sm-5 control-label reg-zh">6个字符以上，建议使用字母或数字</span>
                        </div>

                        
                        <div class="form-group">
                            <label class="col-sm-3 control-label"><i>*</i>密码&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <span class="col-sm-4">
                                <input type="text" name="password"  class="form-control" >
                            </span>
                                <span class="col-sm-5 control-label reg-zh">6个字符以上，建议使用字母或数字（区分大小写）</span>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label"><i>*</i>确认密码</label>
                            <span class="col-sm-4">
                                <input type="text" name="password"  class="form-control" >
                            </span>
                                <span class="col-sm-5 control-label reg-zh">请再输入一遍您上面填写的密码</span>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label"><i>*</i>手机号码</label>
                            <span class="col-sm-4">
                                <input type="text" name="name"  class="form-control" >
                            </span>
                                <span class="col-sm-5 control-label reg-zh"></span>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label"><i>*</i>验证码&nbsp;&nbsp;&nbsp</label>
                            <span class="col-sm-4 yzm">
                                <span class="col-sm-7">
                                    <input type="text" name="name"  class="form-control" >
                                </span>
                                <span class="col-sm-5">
                                    <img src="/ssxz/Public/home/images/yzm.jpg" class="form-control" />
                                </span>                                
                            </span>
                                <span class="col-sm-5 control-label reg-zh"><a href="#">换一张</a></span>
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
        })
    </script>
</html>