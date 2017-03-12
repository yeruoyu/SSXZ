<?php
namespace Admin\Controller;
use Think\Controller;
class UserController extends Controller {
	public function index(){
		$User = D('User');
		$userlist =$User->select();	
		$this->assign('user',$userlist);
		$this->display();
	}
	
	/**
	 * 用户登录界面
	 */
	public function login(){
		$this->display();
	}
	
	/**
	 * 检查用户信息
	 */
	public function checkUser(){
		$_POST = $_REQUEST;
		$data['loginName'] = $_POST['username'];
		$data['loginPwd'] = $_POST['passwd'];
		$User = D('User');
		
		$map['user_login'] = array('EQ',$data['loginName']);
		$map['user_pwd'] = array('EQ',$data['loginPwd']);
		$map['user_type'] = '1';
		$userlist =$User->where($map)->find();
		if( $userlist !=null){
			session('userInfo',$userlist);
			$data = 'success';
			$this->ajaxReturn($data);
		}else{
			$data = 'failed';
			$this->ajaxReturn($data);
		}
	}
	
	/**
	 * 跳转到用户列表页面
	 */
	public function userList($start=0,$pagesize=10){
		$login = session('userInfo');
		$this->assign('user',$login);
		$menulist =session('menulist');
		$this->assign('menulist',$menulist);
		
		$this->assign('catalogId','系统管理');
		$this->assign('funId','用户管理');
		$this->assign('start',$start);
		$this->assign('pagesize',$pagesize);
		$this->display();
	}
	
	public function userListQuery(){
		$login = session('userInfo');
		$this->assign('user',$login);
	
		$User = M('User');
	
		$userCond="(user_name like '%".str_replace("'","",$_REQUEST['sSearch'])."%')";
	
		$articleOrder = 'user_name desc';
		if($_POST['iSortCol_0']=='0'){
			$articleOrder ='user_id';
		}
		if($_POST['iSortCol_0']=='1'){
			$articleOrder ='user_type';
		}
		if($_POST['iSortCol_0']=='2'){
			$articleOrder ='user_name';
		}
		if($_POST['iSortCol_0']=='3'){
			$articleOrder ='school_id';
		}
		if($_POST['iSortCol_0']=='4'){
			$articleOrder ='user_status';
		}
	
		$userCount =$User->where($userCond)->count();
	
		$userList = $User->where($userCond)->
		field('user_id,user_type,user_name,user_school_id,user_status')->
		order($articleOrder.' '.$_POST['sSortDir_0'])->
		limit($_POST['iDisplayStart'],$_POST['iDisplayLength'])->select();
	
		$sEcho = $_POST['sEcho'];
	
		if($userList ==null){
			$userList= Array();
		}
	
		$_res['data'] = $userList;
		$_res['sEcho'] = $sEcho;
		$_res['recordsTotal'] = $userCount;
		$_res['recordsFiltered'] = $userCount;
		$this->ajaxReturn($_res);
	}
	
	/**
	 * 用户信息
	 * @param number $id
	 * @param string $edit
	 * @param number $start
	 * @param number $pagesize
	 */
	public function userDetail($id=-1,$edit=false,$start=0,$pagesize=10){
		$userInfo = session('userInfo');
		$this->assign('user',$userInfo);
		$menulist =session('menulist');
		$this->assign('menulist',$menulist);
		$this->assign('catalogId','系统管理');
		$this->assign('funId','用户管理');
		
		if($id==-1){
			$title="新增用户";
			$this->assign('action','add');
		}else{
			if($edit){
				$title="修改用户";
				$this->assign('action','edit');
			}else{
				$title="用户信息";
				$this->assign('action','view');
			}
		}
		
		$this->assign('start',$start);
		$this->assign('pagesize',$pagesize);
		$this->assign('title',$title);
		$this->assign('articleId',$id);
		$User = M('User');
		$userCond['user_id']=$id;
		$userInfo = $User->find($id);
		$this->assign('userInfo',$userInfo);
		
		//  学校信息
		$School = D('School');
		$schoolCond['school_status']=1;
		$schoolList= $School->where($schoolCond)->select();
		$this->assign('schoolList',$schoolList);
		
		$this->display();
	}
	
	
}