<?php
namespace Admin\Controller;
use Think\Controller;
// 拦截器，判断用户是否登录
class CommentController extends CommonController {
	
	/**
	 * 跳转到评论列表页面
	 * @param number $start
	 * @param number $pagesize
	 */
	public function commentList($start=0,$pagesize=10){
		$login = session('userInfo');
		$this->assign('user',$login);
		$menulist =session('menulist');
		$this->assign('menulist',$menulist);
		
		$this->assign('catalogId','评论管理');
		$this->assign('funId','评论列表');
		$this->assign('start',$start);
		$this->assign('pagesize',$pagesize);
		$this->display();
	}
	
	/**
	 * 动态查询评论
	 */
	public function commentListQuery(){
		$login = session('userInfo');
		$this->assign('user',$login);
		$Comment = M('Comment');
		$commentCond="";
		$commentOrder = 'comment_id desc';
		$commentCount =$Comment->where($commentCond)->count();
		$commentList = $Comment->where($commentCond)->
			field('comment_id,comment_type,comment_school_id,comment_article_id,comment_user_id,comment_ip,comment_detail,comment_time,comment_status')->
			order($commentOrder)->
			limit($_POST['iDisplayStart'],$_POST['iDisplayLength'])->select();
			$sql = $Comment->getLastSql();
			$sEcho = $_POST['sEcho'];
									
			if($commentList ==null){
				$commentList= Array();
			}
	
			$_res['data'] = $commentList;
			$_res['sEcho'] = $sEcho;
			$_res['recordsTotal'] = $commentCount;
			$_res['recordsFiltered'] = $commentCount;
			$_res['sql']=$sql; //测试用
			$this->ajaxReturn($_res);
	}
	
	public function commentDetail($id=-1,$edit=false,$start=0,$pagesize=10){
		$login = session('userInfo');
		$this->assign('user',$login);
		$menulist =session('menulist');
		$this->assign('menulist',$menulist);
		$this->assign('catalogId','评论管理');
		$this->assign('funId','评论列表');
		$title="评论审核";
		$this->assign('action','edit');
		
		
		$this->assign('start',$start);
		$this->assign('pagesize',$pagesize);
		$this->assign('title',$title);
		$this->assign('commentId',$id);
		$Comment = M('Comment');
		$commentCond['comment_id']=$id;
		$commentInfo = $Comment->find($id);
		$this->assign('commentInfo',$commentInfo);
		
		$this->display();
	}
	
	/**
	 * 启用文章
	 * @param number $id
	 * @param number $start
	 * @param number $pagesize
	 */
	public function saveComment($id=-1,$start=0,$pagesize=10){
		
		$start = $_POST['start'];
		$pagesize = $_POST['pagesize'];
		$status=$_POST['comment_status'];
		$id=$_POST['comment_id'];
		
		$Comment = M('Comment');
		$commentInfo = $Comment->find($id);
		$commentInfo['comment_status']=$status;
		$Comment->create($commentInfo,2);
		$result = $Comment->save();
		if ( false !== $result ){
			$this->success('更新成功',U('commentList',array('start'=>$start,'pagesize'=>$pagesize)),1);
		}else{
			$this->error('更新失败',U('commentList',array('start'=>$start,'pagesize'=>$pagesize)),1);
		}
	}
}
