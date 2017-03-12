<?php
namespace School\Controller;
use Think\Controller;
/**
 * 学校信息Controller
 *
 */
class EnrollController extends Controller {
	/**
	 * 招生信息列表
	 */
	public function enrollList(){
		$this->assign('schoolInfo',session('schoolInfo'));
		$this->assign('user',session('userInfo'));
		$this->assign('menulist',session('menulist'));
		$this->assign('catalogId','招生管理');
		$this->assign('funId','招生信息');
		
		$Enrollment=M('Enrollment');
		$cond['enrollment_guide']='1';
		
		$enrollList=$Enrollment->where($cond)->select();
				
		$this->assign('enrollList',$enrollList);
		
		$this->display();
	}
	/**
	 * 招生信息
	 */
	public function enrollDetail($id=0){
		$this->assign('schoolInfo',session('schoolInfo'));
		$this->assign('user',session('userInfo'));
		$this->assign('menulist',session('menulist'));
		$this->assign('catalogId','招生管理');
		$this->assign('funId','招生信息');

		if($id>0){
			$this->assign('action','edit');

			$Enrollment=M('Enrollment');	// 招生信息
			$Article=M('Article');  // 对应的文章信息
			
			$enrollInfo = $Enrollment->find($id);
			$articleInfo=$Article->find($enrollInfo['exrollment_article_id']);
				
			$this->assign('enrollInfo',$enrollInfo);
			$this->assign('articleInfo',$articleInfo);
		}else{
			$this->assign('action','add');
		}
		$this->display();
	}
	
	/**
	 * 保存招生信息
	 */
	public function saveEnroll(){
		$this->assign('schoolInfo',session('schoolInfo'));
		$this->assign('user',session('userInfo'));
		$this->assign('menulist',session('menulist'));
		$this->assign('catalogId','招生管理');
		$this->assign('funId','招生信息');
		$schoolInfo = session('schoolInfo');
		
		$_POST = $_REQUEST;
		$dataArticle['article_id']=$_POST['article_id'];
		$dataArticle['article_cataloge']='enroll';
		$dataArticle['article_status']=$_POST['enrollment_status'];
		$dataArticle['article_detail']=$_POST['article_detail'];
		$dataArticle['article_title']=$_POST['enrollment_title'];
		$dataArticle['article_keyword']=$_POST['article_keyword'];
		$dataArticle['article_school_id'] = $schoolInfo['school_id'];
		
		$dataEnroll['enrollment_type']=$_POST['enrollment_type'];
		$dataEnroll['enrollment_id']=$_POST['enrollment_id'];
		$dataEnroll['enrollment_school_id'] = $schoolInfo['school_id'];
		$dataEnroll['enrollment_status']=$_POST['enrollment_status'];
		$dataEnroll['enrollment_title']=$_POST['enrollment_title'];
		$dataEnroll['enrollment_guide']='1';
		
		$Article = M('Article');
		$Enrollment = M('Enrollment');
		$Article->create($dataArticle,2);
		if($_POST['action']=='edit'){
			$Article->save();
	
			$articleInsId=$_POST['article_id'];
			$dataEnroll['exrollment_article_id']=$articleInsId;
			$Enrollment->create($dataEnroll,2);
			$Enrollment->save($dataEnroll);
			
		}else{
			$articleInsId = $Article->add();
			
			$dataEnroll['exrollment_article_id']=$articleInsId;
			$Enrollment->create($dataEnroll,2);
			$Enrollment->add($dataEnroll);
		}
		
		redirect('enrollList', 5, '页面跳转中...');
	}
	
	/**
	 * 招生简章列表
	 */
	public function guideList(){
		$this->assign('schoolInfo',session('schoolInfo'));
		$this->assign('user',session('userInfo'));
		$this->assign('menulist',session('menulist'));
		$this->assign('catalogId','招生管理');
		$this->assign('funId','招生信息');
		
		$Enrollment=M('Enrollment');
		$cond['enrollment_guide']='2';
		
		$enrollList=$Enrollment->where($cond)->select();
				
		$this->assign('enrollList',$enrollList);
		
		$this->display();
	}
	
	/**
	 * 招生简章信息
	 */
	public function guideDetail($id=0){
		$this->assign('schoolInfo',session('schoolInfo'));
		$this->assign('user',session('userInfo'));
		$this->assign('menulist',session('menulist'));
		$this->assign('catalogId','招生管理');
		$this->assign('funId','招生简章');
		
		if($id>0){
			$this->assign('action','edit');

			$Enrollment=M('Enrollment');	// 招生信息
			$Article=M('Article');  // 对应的文章信息
			
			$enrollInfo = $Enrollment->find($id);
			$articleInfo=$Article->find($enrollInfo['exrollment_article_id']);
				
			$this->assign('enrollInfo',$enrollInfo);
			$this->assign('articleInfo',$articleInfo);
		}else{
			$this->assign('action','add');
		}
		$this->display();
	}
	
	/**
	 * 保存招生简章信息
	 */
	public function saveGuide(){
		$this->assign('schoolInfo',session('schoolInfo'));
		$this->assign('user',session('userInfo'));
		$this->assign('menulist',session('menulist'));
		$this->assign('catalogId','招生管理');
		$this->assign('funId','招生简章');
		
		$schoolInfo = session('schoolInfo');
		
		$_POST = $_REQUEST;
		$dataArticle['article_id']=$_POST['article_id'];
		$dataArticle['article_cataloge']='guide';
		$dataArticle['article_status']=$_POST['enrollment_status'];
		$dataArticle['article_detail']=$_POST['article_detail'];
		$dataArticle['article_title']=$_POST['enrollment_title'];
		$dataArticle['article_keyword']=$_POST['article_keyword'];
		$dataArticle['article_school_id'] = $schoolInfo['school_id'];
		
		$dataEnroll['enrollment_id']=$_POST['enrollment_id'];
		$dataEnroll['enrollment_school_id'] = $schoolInfo['school_id'];
		$dataEnroll['enrollment_status']=$_POST['enrollment_status'];
		$dataEnroll['enrollment_title']=$_POST['enrollment_title'];
		$dataEnroll['enrollment_guide']='2';
		
		$Article = M('Article');
		$Enrollment = M('Enrollment');
		$Article->create($dataArticle,2);
		if($_POST['action']=='edit'){
			$Article->save();
	
			$articleInsId=$_POST['article_id'];
			$dataEnroll['exrollment_article_id']=$articleInsId;
			$Enrollment->create($dataEnroll,2);
			$Enrollment->save($dataEnroll);
			
		}else{
			$articleInsId = $Article->add();
			
			$dataEnroll['exrollment_article_id']=$articleInsId;
			$Enrollment->create($dataEnroll,2);
			$Enrollment->add($dataEnroll);
		}
		
		redirect('guideList', 5, '页面跳转中...');
	}
	
	/**
	 * 招生活动信息列表
	 */
	public function activityList(){
		$this->assign('schoolInfo',session('schoolInfo'));
		$this->assign('user',session('userInfo'));
		$this->assign('menulist',session('menulist'));
		$this->assign('catalogId','招生管理');
		$this->assign('funId','招生活动');
		
		$this->display();
	}
	
	/**
	 *  招生活动信息
	 * @param number $id
	 */
	public function activityDetail($id=0){
		$this->assign('schoolInfo',session('schoolInfo'));
		$this->assign('user',session('userInfo'));
		$this->assign('menulist',session('menulist'));
		$this->assign('catalogId','招生管理');
		$this->assign('funId','招生活动');
		
		$this->display();
	}
	
	/**
	 *  保存招生活动信息
	 */
	public function saveActivity(){
		$this->assign('schoolInfo',session('schoolInfo'));
		$this->assign('user',session('userInfo'));
		$this->assign('menulist',session('menulist'));
		$this->assign('catalogId','招生管理');
		$this->assign('funId','招生活动');
		
		$this->display();
	}
}