<?php
namespace School\Controller;
use Think\Controller;
/**
 * 校长语录Controller
 *
 */
class MasterController extends Controller {
	
	/**
	 * 校长语录列表
	 */
	public function masterList(){
		$this->assign('schoolInfo',session('schoolInfo'));
		$this->assign('user',session('userInfo'));
		$this->assign('menulist',session('menulist'));
		$this->assign('catalogId','学校管理');
		$this->assign('funId','校长录');
		
		$schoolInfo=session('schoolInfo');
		
		$Article=M('Article');
		$masterCond['article_cataloge'] = 'master';
		$masterCond['article_school_id'] = $schoolInfo['school_id'];
		$masterList = $Article->where($masterCond)->select();
				
		$this->assign('masterList',$masterList);
		$this->display();
	}
	
	/**
	 * 校长语录信息
	 * @param number $id
	 */
	public function masterDetail($id=0){
		$this->assign('schoolInfo',session('schoolInfo'));
		$this->assign('user',session('userInfo'));
		$this->assign('menulist',session('menulist'));
		$this->assign('catalogId','学校管理');
		$this->assign('funId','校长录');

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
	 * 保存校长语录信息
	 */
	public function saveMaster(){
		$this->assign('schoolInfo',session('schoolInfo'));
		$this->assign('user',session('userInfo'));
		$this->assign('menulist',session('menulist'));
		$this->assign('catalogId','学校管理');
		$this->assign('funId','校长录');
		
		$schoolInfo = session('schoolInfo');
		
		$_POST = $_REQUEST;
		$dataArticle['article_id']=$_POST['article_id'];
		$dataArticle['article_cataloge']='master';
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
		$this->redirect('masterList');
	}

}