<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {
    
    /**
     * 页面跳转到登录页
     */
    public function login(){
    	$this->display();
    }
    
    /**
     * 根据用户名密码
     */
    public function checkUser(){
    	$_POST = $_REQUEST;
    	$User = M('User');
    	$userCond['user_login'] = array('EQ',$_POST['username']);
    	$userCond['user_pwd'] = array('EQ',$_POST['passwd']);
    	$userCond['user_type'] = '1';
    	$userInfo =$User->where($userCond)->find();
    
    	if($userInfo !=null){
    		session('userInfo',$userInfo);

    		//获取菜单了信息
    		$Function = D('Function');
    		$functionCond['fun_module']='admin';
    		$functionCond['fun_type']='menu';
    		$functionCond['fun_status']='1';
    		$menulist =$Function->where($functionCond)->order('fun_order')->select();
    		$this->assign('menulist',$menulist);
    		session('menulist',$menulist);
    
    		$data = 'success';
    		$this->ajaxReturn($data);
    	}else{
    		$data = 'failed';
    		$this->ajaxReturn($data);
    	}
    }
}