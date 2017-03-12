<?php
namespace School\Controller;
use Think\Controller;
/**
 * 系统Controller
 *
 */
class SystemController extends Controller {
	
	/**
	 * 用户列表
	 */
	public function userList(){
		$this->assign('schoolInfo',session('schoolInfo'));
		$this->assign('user',session('userInfo'));
		$this->assign('menulist',session('menulist'));
		$this->assign('catalogId','系统管理');
		$this->assign('funId','用户管理');
		$this->display();
	}
	
	/**
	 * 用户信息
	 * @param number $id
	 */
	public function userDetail($id=0){
		$this->assign('schoolInfo',session('schoolInfo'));
		$this->assign('user',session('userInfo'));
		$this->assign('menulist',session('menulist'));
		$this->assign('catalogId','系统管理');
		$this->assign('funId','用户管理');
		$this->display();
	}
	
	/**
	 * 保存用户
	 */
	public function saveUser(){
		$this->assign('schoolInfo',session('schoolInfo'));
		$this->assign('user',session('userInfo'));
		$this->assign('menulist',session('menulist'));
		$this->assign('catalogId','系统管理');
		$this->assign('funId','用户管理');
		$this->display();
	}
	
	/**
	 * 用户组列表
	 */
	public function groupList(){
		$this->assign('schoolInfo',session('schoolInfo'));
		$this->assign('user',session('userInfo'));
		$this->assign('menulist',session('menulist'));
		$this->assign('catalogId','系统管理');
		$this->assign('funId','用户组管理');
		$this->display();
	}
	
	/**
	 * 用户组信息
	 * @param number $id
	 */
	public function groupDetail($id=0){
		$this->assign('schoolInfo',session('schoolInfo'));
		$this->assign('user',session('userInfo'));
		$this->assign('menulist',session('menulist'));
		$this->assign('catalogId','系统管理');
		$this->assign('funId','用户组管理');
		$this->display();
	}
	
	/**
	 * 保存用户组
	 */
	public function groupUser(){
		$this->assign('schoolInfo',session('schoolInfo'));
		$this->assign('user',session('userInfo'));
		$this->assign('menulist',session('menulist'));
		$this->assign('catalogId','系统管理');
		$this->assign('funId','用户组管理');
		$this->display();
	}
}