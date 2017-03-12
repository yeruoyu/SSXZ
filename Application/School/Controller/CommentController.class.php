<?php
namespace School\Controller;
use Think\Controller;
/**
 * 评价Controller
 *
 */
class CommentController extends Controller {
	
	/**
	 * 点评信息列表
	 */
	public function commentList(){
		$this->assign('schoolInfo',session('schoolInfo'));
		$this->assign('user',session('userInfo'));
		$this->assign('menulist',session('menulist'));
		$this->assign('catalogId','点评管理');
		$this->assign('funId','点评列表');
		$this->display();
	}
	
	/**
	 * 点评信息
	 */
	public function commentDetail($id=0){
		$this->assign('schoolInfo',session('schoolInfo'));
		$this->assign('user',session('userInfo'));
		$this->assign('menulist',session('menulist'));
		$this->assign('catalogId','点评管理');
		$this->assign('funId','点评列表');
		$this->display();
	}
	
	/**
	 * 保存点评信息
	 */
	public function saveCommentDetail(){
		$this->assign('schoolInfo',session('schoolInfo'));
		$this->assign('user',session('userInfo'));
		$this->assign('menulist',session('menulist'));
		$this->assign('catalogId','点评管理');
		$this->assign('funId','点评列表');
		$this->display();
	}
}