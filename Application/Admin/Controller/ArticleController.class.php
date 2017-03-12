<?php
namespace Admin\Controller;
use Think\Controller;
class ArticleController extends CommonController {
	
	/**
	 * 显示文章列表,页面跳转
	 */
	public function articleList($start=0,$pagesize=10){
		$login = session('userInfo');
		$this->assign('user',$login);
		$menulist =session('menulist');
		$this->assign('menulist',$menulist);
		
		$this->assign('catalogId','文章管理');
		$this->assign('funId','文章列表');
		$this->assign('start',$start);
		$this->assign('pagesize',$pagesize);
		$this->display();
	}
	
	/**
	 * 查询数据信息(AJAX)
	 */
	public function articleListQuery(){
		$login = session('userInfo');
		$this->assign('user',$login);
	
		$Varticle = M('Varticle');
		
		$articleCond="(cataloge_name like '%".str_replace("'","",$_REQUEST['sSearch'])."%'"
				." or article_title like '%".str_replace("'","",$_REQUEST['sSearch'])."%'"
				." or school_name like '%".str_replace("'","",$_REQUEST['sSearch'])."%')"
				." and topic_flag=0";

		
		//$articleCond['topic_flag']= array('eq',0);
		
		$articleOrder = 'article_update_time desc,article_id desc';
		if($_POST['iSortCol_0']=='0'){
			//$articleOrder ='article_id '.' '.$_POST['sSortDir_0'];
		}
		if($_POST['iSortCol_0']=='1'){
			$articleOrder ='cataloge_name '.' '.$_POST['sSortDir_0'];
		}
		if($_POST['iSortCol_0']=='2'){
			$articleOrder ='article_title '.' '.$_POST['sSortDir_0'];
		}
		if($_POST['iSortCol_0']=='3'){
			$articleOrder ='school_name '.' '.$_POST['sSortDir_0'];
		}
		if($_POST['iSortCol_0']=='4'){
			$articleOrder ='article_status '.' '.$_POST['sSortDir_0'];
		}

 		$articleCount =$Varticle->where($articleCond)->count();
 		
 		$articleList = $Varticle->where($articleCond)->
 			field('article_id,cataloge_name,article_title,school_name,article_status')->
 			order($articleOrder)->
 			limit($_POST['iDisplayStart'],$_POST['iDisplayLength'])->select();
 		$sql = $Varticle->getLastSql();
 		$sEcho = $_POST['sEcho'];
 		
		if($articleList ==null){
			$articleList= Array();
		}
		
 		$_res['data'] = $articleList;
 		$_res['sEcho'] = $sEcho;
 		$_res['recordsTotal'] = $articleCount;
 		$_res['recordsFiltered'] = $articleCount;
 		$_res['sql']=$sql;
		$this->ajaxReturn($_res);
	}

	/**
	 * 显示文章明细信息
	 * @param number $id
	 * @param string $edit
	 * @param number $start
	 * @param number $pagesize
	 */
	public function articleDetail($id=-1,$edit=false,$start=0,$pagesize=10){
		$userInfo = session('userInfo');
		$this->assign('user',$userInfo);
		$menulist =session('menulist');
    	$this->assign('menulist',$menulist);
		$this->assign('catalogId','文章管理');
		$this->assign('funId','新增文章');

		if($id==-1){
			$title="新增文章";
			$this->assign('action','add');
		}else{
			if($edit){
				$title="修改文章";
				$this->assign('action','edit');
			}else{
				$title="文章信息";
				$this->assign('action','view');
			}
		}
		
		$this->assign('start',$start);
		$this->assign('pagesize',$pagesize);
		$this->assign('title',$title);
		$this->assign('articleId',$id);
		$Article = M('Article');
		$articleCond['article_id']=$id;
		$articleInfo = $Article->find($id);
		$this->assign('articleInfo',$articleInfo);
		
		//  学校信息
		$School = D('School');
		$schoolCond['school_status']=1;
		$schoolList= $School->where($schoolCond)->select();
		$this->assign('schoolList',$schoolList);

		// 文章类型
		$Cataloge = M('Cataloge');
		$catalogeList = $Cataloge->order('cataloge_id')->select();
		$this->assign('catalogeList',$catalogeList);

		$this->display();
	}
	
	/**
	 * 保存文章变更信息
	 */
	public function articleSave(){
		$start = $_POST['start'];
		$pagesize = $_POST['pagesize'];
		
		$Article = M('Article');
		$Article->create($_POST,2);
		
		if($_POST['action']=='edit'){
			$result = $Article->save();
			if ( false !== $result ){
				$this->success('保存成功',U('articleList',array('start'=>$start,'pagesize'=>$pagesize)),1);
			}else{
				$this->error('保存失败',U('articleList',array('start'=>$start,'pagesize'=>$pagesize)),1);
			}
		}else{
			$articleInsId = $Article->add();

			if ((isset($articleInsId))){
				$this->success('保存成功',U('articleList',array('start'=>$start,'pagesize'=>$pagesize)),1);
			}else{
				$this->error('保存失败',U('articleList',array('start'=>$start,'pagesize'=>$pagesize)),1);
			}
		}
	}
	
	/**
	 * 关闭文章
	 * @param number $id
	 * @param number $start
	 * @param number $pagesize
	 */
	public function disableArticle($id=0,$start=0,$pagesize=10){
		$Article = M('Article');
		$articleInfo = $Article->find($id);
		$articleInfo['article_status']=0;
		$Article->create($articleInfo,2);
		$result = $Article->save();
		if ( false !== $result ){
			$this->success('更新成功',U('articleList',array('start'=>$start,'pagesize'=>$pagesize)),1);
		}else{
			$this->error('更新失败',U('articleList',array('start'=>$start,'pagesize'=>$pagesize)),1);
		}
	}
	
	/**
	 * 启用文章
	 * @param number $id
	 * @param number $start
	 * @param number $pagesize
	 */
	public function enableArticle($id=0,$start=0,$pagesize=10){
		$Article = M('Article');
		$articleInfo = $Article->find($id);
		$articleInfo['article_status']=1;
		$Article->create($articleInfo,2);
		$result = $Article->save();
		if ( false !== $result ){
			$this->success('更新成功',U('articleList',array('start'=>$start,'pagesize'=>$pagesize)),1);
		}else{
			$this->error('更新失败',U('articleList',array('start'=>$start,'pagesize'=>$pagesize)),1);
		}
	}
}