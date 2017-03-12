<?php
namespace School\Controller;
use Think\Controller;
/**
 * 学校动态Controller
 *
 */
class NewsController extends Controller {
	
	/**
	 * 校园新闻列表
	 */
	public function newsList(){
		$this->assign('schoolInfo',session('schoolInfo'));
		$this->assign('user',session('userInfo'));
		$this->assign('menulist',session('menulist'));
		$this->assign('catalogId','学校动态');
		$this->assign('funId','校园新闻');
		
		$schoolInfo=session('schoolInfo');
		
		$Article=M('Article');
		$newsCond['article_cataloge'] = 'schoolnews';
		$newsCond['article_school_id'] = $schoolInfo['school_id'];
		$newsList = $Article->where($newsCond)->select();
				
		$this->assign('newslist',$newsList);
		$this->display();
	}
	
	/**
	 * 校园新闻信息
	 * @param number $id
	 */
	public function newsDetail($id=0){
		$this->assign('schoolInfo',session('schoolInfo'));
		$this->assign('user',session('userInfo'));
		$this->assign('menulist',session('menulist'));
		$this->assign('catalogId','学校动态');
		$this->assign('funId','校园新闻');

		if($id>0){
			$this->assign('action','edit');
			$Article=M('Article');  // 对应的文章信息
			$articleInfo=$Article->find($id);
			$this->assign('articleInfo',$articleInfo);
		}else{
			$this->assign('action','add');
		}
		$this->display();
		
	}
	
	/**
	 * 保存校园新闻信息
	 */
	public function saveNews(){
		$this->assign('schoolInfo',session('schoolInfo'));
		$this->assign('user',session('userInfo'));
		$this->assign('menulist',session('menulist'));
		$this->assign('catalogId','学校动态');
		$this->assign('funId','校园新闻');
		
		$schoolInfo = session('schoolInfo');
		
		$_POST = $_REQUEST;
		$dataArticle['article_id']=$_POST['article_id'];
		$dataArticle['article_cataloge']='schoolnews';
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
		$this->redirect('newsList');
	}
	
	/**
	 * 课堂纪实列表
	 */
	public function documentaryList(){
		$this->assign('schoolInfo',session('schoolInfo'));
		$this->assign('user',session('userInfo'));
		$this->assign('menulist',session('menulist'));
		$this->assign('catalogId','学校动态');
		$this->assign('funId','课堂纪实');
		
		$schoolInfo=session('schoolInfo');
		
		$Article=M('Article');
		$documentaryCond['article_cataloge'] = 'documentary';
		$documentaryCond['article_school_id'] = $schoolInfo['school_id'];
		$documentaryList = $Article->where($documentaryCond)->select();
		
		$this->assign('documentaryList',$documentaryList);
		
		$this->display();
	}
	
	/**
	 * 课堂纪实信息
	 */
	public function documentaryDetail($id=0){
		$this->assign('schoolInfo',session('schoolInfo'));
		$this->assign('user',session('userInfo'));
		$this->assign('menulist',session('menulist'));
		$this->assign('catalogId','学校动态');
		$this->assign('funId','课堂纪实');
		
		if($id>0){
			$this->assign('action','edit');
		
			$Article=M('Article');
			$documentaryInfo = $Article->find($id);
			$this->assign('articleInfo',$documentaryInfo);
		}else{
			$this->assign('action','add');
		}

		$this->display();
	}
	
	/**
	 * 保存课堂纪实信息
	 */
	public function saveDocumentary(){
		$this->assign('schoolInfo',session('schoolInfo'));
		$this->assign('user',session('userInfo'));
		$this->assign('menulist',session('menulist'));
		$this->assign('catalogId','学校动态');
		$this->assign('funId','课堂纪实');
		
		$schoolInfo = session('schoolInfo');
		
		$_POST = $_REQUEST;
		$dataArticle['article_id']=$_POST['article_id'];
		$dataArticle['article_cataloge']='documentary';
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
		$this->redirect('documentaryList');
	}
	
	/**
	 * 探营列表
	 */
	public function campList(){
		$this->assign('schoolInfo',session('schoolInfo'));
		$this->assign('user',session('userInfo'));
		$this->assign('menulist',session('menulist'));
		$this->assign('catalogId','学校动态');
		$this->assign('funId','探营');
		
		$schoolInfo=session('schoolInfo');
		
		$Article=M('Article');
		$campCond['article_cataloge'] = 'camp';
		$campCond['article_school_id'] = $schoolInfo['school_id'];
		$campList = $Article->where($campCond)->select();
		
		$this->assign('campList',$campList);
		
		$this->display();
	}
	
	/**
	 * 探营信息
	 */
	public function campDetail($id=0){
		$this->assign('schoolInfo',session('schoolInfo'));
		$this->assign('user',session('userInfo'));
		$this->assign('menulist',session('menulist'));
		$this->assign('catalogId','学校动态');
		$this->assign('funId','探营');
		
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
	 * 保存探营信息
	 */
	public function saveCamp(){
		$this->assign('schoolInfo',session('schoolInfo'));
		$this->assign('user',session('userInfo'));
		$this->assign('menulist',session('menulist'));
		$this->assign('catalogId','学校动态');
		$this->assign('funId','探营');
		
		$schoolInfo = session('schoolInfo');
		
		$_POST = $_REQUEST;
		$dataArticle['article_id']=$_POST['article_id'];
		$dataArticle['article_cataloge']='camp';
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
			$this->success('修改成功！',U('campList'));
		}else{
			$articleInsId = $Article->add();
			$this->success('新增成功！',U('campList'));
		}
		
	}
}