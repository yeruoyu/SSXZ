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
                    <form class="form-horizontal" action="/ssxz/index.php/home/Index/registerstep3">
                        <input name="" type="hidden" value="">
                        
                        <div class="form-group reg-er">
                            <label class="reg-t1 control-label"><i>*</i>姓名</label>
                            <span class="reg-t2">
                                <input type="text" name="name"  class="form-control" >
                            </span>
                                <span class="reg-t3">                                    
                                    <label class="radio-inline">
                                      <input type="radio" name="gender" value="男"> 男
                                    </label>
                                    <label class="radio-inline">
                                      <input type="radio" name="gender"  value="女"> 女
                                    </label>
                                </span>
                                <span class="reg-t4 control-label"> 
                                    注：请输入真实姓名以用于学校、课程报名
                                </span>
                            <div class="clearfix"></div>
                        </div>

                        <div class="form-group reg-er">
                            <label class="reg-t1 control-label"><i>*</i>生日</label>
                            <span class="reg-t2 select-ico-box">
                                <select class="form-control reg-select">
                                    <option>年</option>
                                    <option>2015</option>
                                    <option>2015</option>
                                    <option>2015</option>
                                    <option>2015</option>
                                </select>
                                <span class="select-ico"></span>
                            </span>
                            <span class="reg-t2 select-ico-box">
                                <select class="form-control reg-select">
                                    <option>月</option>
                                    <option>2015</option>
                                    <option>2015</option>
                                    <option>2015</option>
                                    <option>2015</option>
                                </select>
                                <span class="select-ico"></span>
                            </span>
                            <span class="reg-t2 select-ico-box">
                                <select class="form-control reg-select">
                                    <option>日</option>
                                    <option>2015</option>
                                    <option>2015</option>
                                    <option>2015</option>
                                    <option>2015</option>
                                </select>
                                <span class="select-ico"></span>
                            </span>
                            <div class="clearfix"></div>
                        </div>

                        
                        
                        <div class="form-group reg-er">
                            <label class="reg-t1 control-label"><i></i>ＱＱ</label>
                            <span class="reg-t2 reg-tc">
                                <input type="text" name="name"  class="form-control" >
                            </span>
                                <span class="reg-t4 control-label"> 
                                    QQ号码
                                </span>
                            <div class="clearfix"></div>
                        </div>
                        
                        <div class="form-group reg-er">
                            <label class="reg-t1 control-label"><i></i>电子邮箱</label>
                            <span class="reg-t2 reg-tc">
                                <input type="text" name="name"  class="form-control" >
                            </span>
                                <span class="reg-t4 control-label"> 
                                    常用邮箱
                                </span>
                            <div class="clearfix"></div>
                        </div>


                        <div class="form-group reg-er">
                            <label class="reg-t1 control-label"><i></i>邮寄地址</label>
                            <span class="reg-t2 reg-tc">
                                <input type="text" name="name"  class="form-control" >
                            </span>
                                <span class="reg-t4 control-label"> 
                                    常用地址
                                </span>
                            <div class="clearfix"></div>
                        </div>
                        <div class="text-right reg-b">我们十分重视您的隐私，查看保密政策</div>    
                        <div class="reg-tit lv">
                            <h4>学校信息</h4>
                        </div>
                        <div class="form-group reg-er">
                            <span class="reg-t2 select-ico-box">
                                <select class="form-control reg-select">
                                    <option>意向/在读</option>
                                    <option>意向/在读</option>
                                    <option>意向/在读</option>
                                </select>
                                <span class="select-ico"></span>
                            </span>
                            <span class="reg-t2 select-ico-box">
                                <select class="form-control reg-select">
                                    <option>地区</option>
                                    <option>地区</option>
                                    <option>地区</option>
                                </select>
                                <span class="select-ico"></span>
                            </span>
                            <span class="reg-t2 reg-tx select-ico-box">
                                <select class="form-control reg-select">
                                    <option>选择学校、多学</option>
                                    <option>选择学校、多学</option>
                                    <option>选择学校、多学</option>
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
                                    <option></option>
                                    <option></option>
                                    <option></option>
                                </select>
                                <span class="select-ico"></span>
                            </span>
                            <div class="clearfix"></div>
                        </div>
                        
                        <div class="form-group reg-er">
                            <label class="reg-t1 reg-t1x control-label"><i>*</i>有无培训需求</label>
                            <span class="reg-t2 select-ico-box">
                                <select class="form-control reg-select">
                                    <option>是/否</option>
                                    <option>是/否</option>
                                    <option>是/否</option>
                                </select>
                                <span class="select-ico"></span>
                            </span>
                                <span class="reg-t4 control-label"> 
                                    常用邮箱
                                </span>
                            <div class="clearfix"></div>
                        </div>


                        <div class="form-group reg-er">
                            <label class="reg-t1 control-label"><i></i>邮寄地址</label>
                            <span class="reg-t2 reg-tc">
                                <input type="text" name="name"  class="form-control" >
                            </span>
                                <span class="reg-t4 control-label"> 
                                    常用地址
                                </span>
                            <div class="clearfix"></div>
                        </div>
                        <div class="text-right reg-b">我们十分重视您的隐私，查看保密政策</div>
                        <div class="reg-tit lv">
                            <h4>验证码</h4>
                        </div>
                        <div class="form-group reg-er">
                            <label class="reg-t1 control-label"><i>*</i>验证码&nbsp;&nbsp;&nbsp</label>
                            <span class="yzm">
                                <span class="reg-t2">
                                    <input type="text" name="name"  class="form-control" >
                                </span>
                                <span class="reg-t2">
                                    <img src="/ssxz/Public/home/images/yzm.jpg" class="form-control" />
                                </span>                                
                            </span>
                                <span class="col-sm-5 control-label reg-zh"><a href="#">换一张</a></span>
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