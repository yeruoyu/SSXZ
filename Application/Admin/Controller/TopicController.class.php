<?php
namespace Admin\Controller;
/**
 * 话题区总控
 * @author Administrator
 *
 */
class TopicController extends CommonController {
	public function topicList($start=0,$pagesize=10){
		$login = session('userInfo');
		$this->assign('user',$login);
		$menulist =session('menulist');
		$this->assign('menulist',$menulist);
		
		$this->assign('catalogId','话题区管理');
		$this->assign('funId','话题列表');
		$this->assign('start',$start);
		$this->assign('pagesize',$pagesize);
		$this->display();
	}
	
	public function topicListQuery(){
		$login = session('userInfo');
		$this->assign('user',$login);
		
		$Varticle = M('Varticle');
		
		$topicCond="(cataloge_name like '%".str_replace("'","",$_REQUEST['sSearch'])."%'"
				." or article_title like '%".str_replace("'","",$_REQUEST['sSearch'])."%'"
				." or school_name like '%".str_replace("'","",$_REQUEST['sSearch'])."%')"
				." and topic_flag=1";

		$articleOrder = 'article_title desc';
		if($_POST['iSortCol_0']=='0'){
			$articleOrder ='article_id';
		}
		if($_POST['iSortCol_0']=='1'){
			$articleOrder ='cataloge_name';
		}
		if($_POST['iSortCol_0']=='2'){
			$articleOrder ='article_title';
		}
		if($_POST['iSortCol_0']=='3'){
			$articleOrder ='school_name';
		}
		if($_POST['iSortCol_0']=='4'){
			$articleOrder ='article_status';
		}
		
		$articleCount =$Varticle->where($topicCond)->count(); 
		
		$articleList = $Varticle->where($topicCond)->
		field('article_id,cataloge_name,article_title,school_name,article_status')->
		order($articleOrder.' '.$_POST['sSortDir_0'])->
		limit($_POST['iDisplayStart'],$_POST['iDisplayLength'])->select();

		$sEcho = $_POST['sEcho'];
		
		if($articleList ==null){
			$articleList= Array();
		}
	
		$_res['data'] = $articleList;
		$_res['sEcho'] = $sEcho;
		$_res['recordsTotal'] = $articleCount;
		$_res['recordsFiltered'] = $articleCount;
		$this->ajaxReturn($_res);
	}
	
	/**
	 * 话题明细信息
	 * @param number $id
	 * @param string $edit
	 * @param number $start
	 * @param number $pagesize
	 */
	public function topicDetail($id=-1,$edit=false,$start=0,$pagesize=10){
		$userInfo = session('userInfo');
		$this->assign('user',$userInfo);
		$menulist =session('menulist');
		$this->assign('menulist',$menulist);
		$this->assign('catalogId','话题管理');
		$this->assign('funId','新增话题');
		
		if($id==-1){
			$title="新增话题";
			$this->assign('action','add');
		}else{
			if($edit){
				$title="修改话题";
				$this->assign('action','edit');
			}else{
				$title="话题信息";
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
	 * 保存话题信息
	 */
	public function topicSave(){
		$start = $_POST['start'];
		$pagesize = $_POST['pagesize'];
		
		$Article = M('Article');
		$Article->create($_POST,2);
		
		if($_POST['action']=='edit'){
			$result = $Article->save();
			if ( false !== $result ){
				$this->success('保存成功',U('topicList',array('start'=>$start,'pagesize'=>$pagesize)),1);
			}else{
				$this->error('保存失败',U('topicList',array('start'=>$start,'pagesize'=>$pagesize)),1);
			}
		}else{
			$articleInsId = $Article->add();
		
			if ((isset($articleInsId))){
				$this->success('保存成功',U('topicList',array('start'=>$start,'pagesize'=>$pagesize)),1);
			}else{
				$this->error('保存失败',U('topicList',array('start'=>$start,'pagesize'=>$pagesize)),1);
			}
		}
	}
	
	/**
	 * 禁止话题
	 * @param number $id
	 * @param number $start
	 * @param number $pagesize
	 */
	public function disableTopic($id=0,$start=0,$pagesize=10){
		$Article = M('Article');
		$articleInfo = $Article->find($id);
		$articleInfo['article_status']=0;
		$Article->create($articleInfo,2);
		$result = $Article->save();
		if ( false !== $result ){
			$this->success('更新成功',U('topicList',array('start'=>$start,'pagesize'=>$pagesize)),1);
		}else{
			$this->error('更新失败',U('topicList',array('start'=>$start,'pagesize'=>$pagesize)),1);
		}
	}
	
	/**
	 * 开放话题
	 * @param number $id
	 * @param number $start
	 * @param number $pagesize
	 */
	public function enableTopic($id=0,$start=0,$pagesize=10){
		$Article = M('Article');
		$articleInfo = $Article->find($id);
		$articleInfo['article_status']=1;
		$Article->create($articleInfo,2);
		$result = $Article->save();
		if ( false !== $result ){
			$this->success('更新成功',U('topicList',array('start'=>$start,'pagesize'=>$pagesize)),1);
		}else{
			$this->error('更新失败',U('topicList',array('start'=>$start,'pagesize'=>$pagesize)),1);
		}
	}
	
// 	//评论列表
// 	function topicCommentList($topicId=0,$pid=0,&$commentList=array(),$spac=0,$pauthor=NULL){
// 		static $i=0;
// 		$spac=$spac+1;//初始为1级评论
// 		$pauthor=$pauthor;
// 		$List=M('Comment')->
// 		$comd

// 		field('comment_id,comment_detail,comment_user_name,comment_time,comment_level,comment_ip,comment_parent_id')
// 			-> where(array('comment_parent_id'=>$pid))->select();

// 		foreach($List as $k=>$v){
// 			$commentList[$i]['comment_level']=$spac;//评论层级
// 			$commentList[$i]['author']=$v['author'];
// 			$commentList[$i]['id']=$v['id'];
// 			$commentList[$i]['pid']=$v['pid'];//此条评论的父id
// 			$commentList[$i]['content']=$v['content'];
// 			$commentList[$i]['time']=$v['add_time'];
// 			$commentList[$i]['pauthor']=$pauthor;
// 			$i++;
// 			$this->CommentList($v['id'],$commentList,$spac,$v['author']);
// 		}
// 		return $commentList;
//	}
}