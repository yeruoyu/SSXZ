<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller {
	
	/**
	 * 跳转到注册第一步页面
	 */
	public function registerStep1(){
		$this->display();
	}
	
	public function doRegisterStep1(){
		//保存客户信息
		$User = M('User');
		$user['user_login'] = $_POST['userLogin'];
		$user['user_name'] = $_POST['userName'];
		$user['user_type'] = 4;
		$user['user_pwd'] = $_POST['passwd'];
		$user['user_mobile'] = $_POST['mobile'];
		
		$User->create($user,2);
		
		$userId = $User->add();
		
		if ((isset($userId))){
			$this->ajaxReturn('success');
		}else{
			$this->ajaxReturn('error');
		}

		$data = 'success';
		$this->ajaxReturn($data);
	}
	
	/**
	 * 跳转到注册第二步页面
	 */
	public function registerStep2(){
		$this->display();
	}
	
	/**
	 * 跳转到登录页面
	 */
	public function registerStep3(){

		
		$this->display();
	}
	
	/**
	 * 跳转到注册第二步页面
	 */
	public function login(){
		$this->display();
	}
	
	public function checkUser(){
		
		$User = M('User');
		$userLogin = $_POST['userLogin'];
		$userPassword = $_POST['password'];
		$userCond = "(user_login='".$userLogin."' or user_mobile='".$userLogin."' or user_email='".$userLogin."') and user_pwd='".$userPassword."' and user_type=4 and user_status=1";
		
				
		$userInfo =$User->where($userCond)->find();
		$sql = $User->getLastSql();
		if($userInfo !=null){
			session('userInfo',$userInfo);
			$data = 'success';
			$this->ajaxReturn($data);
		}else{
			$data = 'failed:'.$sql;
			$this->ajaxReturn($data);
		}
	}
	
	/** 
	 *  
	 * 验证码生成 
	 */  
	public function verify_c(){
		ob_end_clean();
		
	    $Verify = new \Think\Verify();  
	    $Verify->fontSize = 18;  
	    $Verify->length   = 4;  
	    $Verify->useNoise = false;  
	    $Verify->codeSet = '0123456789abcdefg';  
	    $Verify->imageW = 130;  
	    $Verify->imageH = 50;  
	    //$Verify->expire = 600;  
	    $Verify->entry();  
	}
	
	/**
	 * 验证码检查
	 */
	function check_verify($code, $id = ""){
		$verify = new \Think\Verify();
		return $verify->check($code, $id);
	}
	//判断是否存在登录名
	public function checkUserName(){
		$userLogin = $_POST['userLogin'];
		
		$User = M('User');
		//验证手机号或用户名是否存在
		$userCond = "user_login = '".$userLogin."'";
		$userList=$User->where($userCond)->select();
		//$sql = $User->getLastSql();
		if(isset($userList)==0){
			$this->ajaxReturn(true);
		}else{
			$this->ajaxReturn(false);
		}
	}
	//判断是否存在手机号
	public function checkMobile(){
		$mobile = $_POST['mobile'];
		
		$User = D('User');
		//验证手机号或用户名是否存在
		$userCond = "user_mobile = '".$mobile."'";
		$userList=$User->where($userCond)->select();
		$sql = $User->getLastSql();
		if(isset($userList)==0){
			$this->ajaxReturn(true);
		}else{
			$this->ajaxReturn(false);
		}
	}
	// 判断验证码是否正确
	public function checkVerify(){
		//$verify = I('param.verify','');
		
		$verify = $_POST['verify'];
		if(!$this->check_verify($verify)){
			$this->ajaxReturn(false);
		}else{
			$this->ajaxReturn(true);
		}
	}
}