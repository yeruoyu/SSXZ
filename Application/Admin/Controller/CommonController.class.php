<?php
namespace Admin\Controller;
use Think\Controller;
// 拦截器，判断用户是否登录
class CommonController extends Controller {
	public function _initialize(){
		if(!isset($_SESSION['userInfo'])){
			$this->error('请先登录',U('Login/login'),1);
		}
	}
}
