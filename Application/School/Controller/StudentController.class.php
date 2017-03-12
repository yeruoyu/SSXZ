<?php
namespace School\Controller;
use Think\Controller;
/**
 * 学生会Controller
 *
 */
class StudentController extends Controller {
	/**
	 * 学生故事列表
	 */
	public function storyList(){
		$this->assign('schoolInfo',session('schoolInfo'));
		$this->assign('user',session('userInfo'));
		$this->assign('menulist',session('menulist'));
		$this->assign('catalogId','学生会');
		$this->assign('funId','学生故事');
		
		$schoolInfo=session('schoolInfo');
		
		$Article=M('Article');
		$storyCond['article_cataloge'] = 'story';
		$storyCond['article_school_id'] = $schoolInfo['school_id'];
		$storyList = $Article->where($storyCond)->select();
		
		$this->assign('storyList',$storyList);
		
		$this->display();
	}
	
	/**
	 * 学生故事信息
	 * @param number $id
	 */
	public function storyDetail($id=0){
		$this->assign('schoolInfo',session('schoolInfo'));
		$this->assign('user',session('userInfo'));
		$this->assign('menulist',session('menulist'));
		$this->assign('catalogId','学生会');
		$this->assign('funId','学生故事');
		
		if($id>0){
			$this->assign('action','edit');
		
			$Article=M('Article');
			$campInfo = $Article->find($id);
			$this->assign('articleInfo',$campInfo);
		}else{
			$this->assign('action','add');
		}
		
		$this->display();
	}
	
	/**
	 * 保存学生故事
	 */
	public function saveStory(){
		$this->assign('schoolInfo',session('schoolInfo'));
		$this->assign('user',session('userInfo'));
		$this->assign('menulist',session('menulist'));
		$this->assign('catalogId','学生会');
		$this->assign('funId','学生故事');
		
		$schoolInfo = session('schoolInfo');
		
		$_POST = $_REQUEST;
		$dataArticle['article_id']=$_POST['article_id'];
		$dataArticle['article_cataloge']='story';
		$dataArticle['article_title']=$_POST['article_title'];
		$dataArticle['article_keyword']=$_POST['article_keyword'];
		$dataArticle['article_source']=$_POST['article_source'];
		$dataArticle['article_excerpt']=$_POST['article_excerpt'];
		$dataArticle['article_detail']=$_POST['article_detail'];
		$dataArticle['article_elite']=$_POST['article_elite'];
		$dataArticle['article_top']=$_POST['article_top'];
		$dataArticle['comment_status']=$_POST['comment_status'];
		$dataArticle['article_status']=$_POST['article_status'];
		$dataArticle['article_school_id'] = $schoolInfo['school_id'];
		$dataArticle['article_newsflag'] = '1';
		
		$Article = M('Article');
		$Article->create($dataArticle,2);
		if($_POST['action']=='edit'){
			$Article->save();
		}else{
			$articleInsId = $Article->add();
		}
		$this->redirect('storyList');
	}
	
	/**
	 * 学生风采列表
	 */
	public function studentsList(){
		$this->assign('schoolInfo',session('schoolInfo'));
		$this->assign('user',session('userInfo'));
		$this->assign('menulist',session('menulist'));
		$this->assign('catalogId','学生会');
		$this->assign('funId','学生风采');
		
		$schoolInfo=session('schoolInfo');
		
		$Article=M('Article');
		$studentCond['article_cataloge'] = 'student';
		$studentCond['article_school_id'] = $schoolInfo['school_id'];
		$studentList = $Article->where($studentCond)->select();
		
		$this->assign('studentList',$studentList);
		
		$this->display();
	}
	
	/**
	 * 学生风采信息
	 * @param number $id
	 */
	public function studentsDetail($id=0){
		$this->assign('schoolInfo',session('schoolInfo'));
		$this->assign('user',session('userInfo'));
		$this->assign('menulist',session('menulist'));
		$this->assign('catalogId','学生会');
		$this->assign('funId','学生风采');
		
		if($id>0){
			$this->assign('action','edit');
		
			$Article=M('Article');
			$campInfo = $Article->find($id);
			$this->assign('articleInfo',$campInfo);
		}else{
			$this->assign('action','add');
		}
		
		$this->display();
	}
	
	/**
	 * 保存学生风采
	 */
	public function saveStudents(){
		$this->assign('schoolInfo',session('schoolInfo'));
		$this->assign('user',session('userInfo'));
		$this->assign('menulist',session('menulist'));
		$this->assign('catalogId','学生会');
		$this->assign('funId','学生风采');
		
		$schoolInfo = session('schoolInfo');
		
		$_POST = $_REQUEST;
		$dataArticle['article_id']=$_POST['article_id'];
		$dataArticle['article_cataloge']='student';
		$dataArticle['article_title']=$_POST['article_title'];
		$dataArticle['article_keyword']=$_POST['article_keyword'];
		$dataArticle['article_source']=$_POST['article_source'];
		$dataArticle['article_excerpt']=$_POST['article_excerpt'];
		$dataArticle['article_detail']=$_POST['article_detail'];
		$dataArticle['article_elite']=$_POST['article_elite'];
		$dataArticle['article_top']=$_POST['article_top'];
		$dataArticle['comment_status']=$_POST['comment_status'];
		$dataArticle['article_status']=$_POST['article_status'];
		$dataArticle['article_school_id'] = $schoolInfo['school_id'];
		$dataArticle['article_newsflag'] = '1';
		
		$Article = M('Article');
		$Article->create($dataArticle,2);
		if($_POST['action']=='edit'){
			$Article->save();
		}else{
			$articleInsId = $Article->add();
		}
		$this->redirect('studentsList');
	}
}