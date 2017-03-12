<?php
namespace School\Controller;
use Think\Controller;
class IndexController extends Controller {
		
    public function index(){
    	
    	$this->redirect("/School/schoolInfo");
    	
//     	$login = session('userInfo');
//     	$this->assign('user',$login);
    	
//     	$schoolInfo = session('schoolInfo');
//     	$this->assign('schoolInfo',$schoolInfo);
    	
//     	$menulist = session('menulist');
//     	$this->assign('menulist',$menulist);
    	
    	
//     	$this->display();
    
    }
    
    /**
     * 页面跳转到登录页
     */
    public function login(){
    	$School = M('School');
    	
    	$schoolList = $School->select();
    	
    	$this->assign("schoolList",$schoolList);
    	
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
    	$userCond['user_type'] = '2';
    	$userInfo =$User->where($userCond)->find();

    	if($userInfo !=null){
    		session('userInfo',$userInfo);
    		
    		//根据用户信息查询学校信息
    		if($userInfo['user_school_id'] !=null){
    			$School = M('School');
    			$schoolInfo = $School->find($userInfo['user_school_id']);
    			session('schoolInfo',$schoolInfo);
    		}
			//获取菜单了信息
    		$Function = D('Function');
    		$menulist =$Function->where("fun_module='school' and fun_type='menu' and fun_status='1'")->order('fun_order')->select();
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