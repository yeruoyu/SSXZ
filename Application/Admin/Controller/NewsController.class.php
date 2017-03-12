<?php
namespace Admin\Controller;
use Think\Controller;
class NewsController extends Controller {
	
	/**
	 * 文章列表
	 */
	public function newsList(){
		$login = session('userInfo');
		$this->assign('user',$login);
		
		$Function = D('Function');
		$menulist =$Function->where("fun_module='admin' and fun_type='menu'")->order('fun_order')->select();
		$this->assign('menulist',$menulist);
		
		$News = M('News');
		$newslist = $News->where()->select();
		$this->assign('newslist',$newslist);
		
		$this->display();
	}
	
	public function newsDetail($id=0,$edit=false){
		$login = session('userInfo');
		$this->assign('user',$login);
		
		$Function = M('Function');
		$menulist =$Function->where("fun_module='admin' and fun_type='menu'")->order('fun_order')->select();
		$this->assign('menulist',$menulist);

		if($id==0){
			$title="新增新闻";
		}else{
			if($edit){
				$title="修改新闻";
			}else{
				$title="文章信息";
			}
		}

		$this->assign('title',$title);
		$this->assign('newsId',$id);

		//新闻信息
		$News = M('News');
		$news = $News->find($id);
		$this->assign('news',$news);
		
		$articId = $news['news_article_id'];
		if($articId==""){$articId=0;		}
		$this->assign('articId',$articId);
		$Article = D('Article');
		$article = $Article->find($articId);
		$this->assign('article',$article);

		$School = D('School');
		$schoolCond['school_status']=1;
		$schoolList= $School->where($schoolCond)->select();
		$this->assign('schoolList',$schoolList);

		$this->display();
	}
	
	/**
	 * 保存文章变更信息
	 */
	public function newsSave(){
		//$_POST=$_REQUEST;
		/*
		$data['article_title'] = $_POST['article_title'];
		$data['article_cataloge'] = $_POST['article_cataloge'];
		$data['article_school_id'] = $_POST['article_school_id'];
		$data['article_keyword'] = $_POST['article_keyword'];
		$data['article_detail'] = $_POST['article_detail'];
		$data['article_top'] = $_POST['article_top'];
		$data['article_id'] = $_POST['article_id'];
		$data['article_elite'] = $_POST['article_elite'];
		*/
		//echo($_POST['article_title']);
		$Article = M('Article');
		$Article->create($_POST,2);
		$Article->add();
		redirect('articleList', 5, '页面跳转中...');
	}
}