<?php
namespace Home\Controller;
use Think\Controller;
class CommentController extends Controller {
	
	/**
	 * 根据文章ID查找文章评论
	 * @param unknown $articleId
	 */
	public function queryComment(){
		$articleId = $_POST['articleId'];
		$Comment = M('Comment');
		$commentCond="comment_article_id =".$articleId." and comment_type=1 and comment_status=1";
		$commentOrder="comment_level asc,comment_id desc";
		$commentList = $Comment->where($commentCond)->
			order($commentOrder)->select();
			$this->ajaxReturn($commentList);
	}
	
	public function querySchoolComment(){
		$schoolId = $_POST['schoolId'];
		$Comment = M('Comment');
		$commentCond = "comment_school_id=1 and comment_type=2 and comment_status=1 and comment_level=0";
		$commentOrder="comment_level asc,comment_parent_id asc,comment_id desc";
		$commentList = $Comment->where($commentCond)->
			order($commentOrder)->select();
		
		for(){
			
		}
		
			$this->ajaxReturn($commentList);
	}
	
	public function commentSave(){
		
		//if(!isset($_SESSION['userInfo'])){
		//	$this->error('请先登录',U('Index/index'),1);
		//}
		$userInfo = session('userInfo');

		$comment['comment_parent_id'] = $_POST['comment_parent_id'];
		$comment['comment_article_id'] = $_POST['articleId'];
		$comment['comment_type'] = '1';
		$comment['comment_detail'] = $_POST['commentDetail'];
		$comment['comment_status'] = '0'; // 可通过后台控制

		$comment['comment_level'] = $_POST['commentLevel'];
		
		if(isset($_POST['comment_parent_id'])){
			$parentComment =  $Comment->where('comment_id = '.$_POST['comment_parent_id'])->find();
			if(isset($parentComment)){
				$comment['comment_level'] = $parentComment['comment_level']+1;
			}else{
				$comment['comment_level'] = 0;
			}
		}else{
			$comment['comment_level'] =0;
		}
		
		$comment['comment_time'] =date("Y-m-d H:i:s");
		$comment['comment_ip'] =get_client_ip();
		
		$comment['comment_user_id'] = $userInfo['user_id'];
		$comment['comment_user_name'] = $userInfo['user_name'];
		
		$Comment = M('Comment');
		$Comment->create($comment,2);
		
		$commentId = $Comment->add();
		
		if ((isset($commentId))){
			$this->ajaxReturn('success');
		}else{
			$this->ajaxReturn('error');
		}
	}
	
	
	public function commentSchoolSave(){
	
		//if(!isset($_SESSION['userInfo'])){
		//	$this->error('请先登录',U('Index/index'),1);
		//}
		$userInfo = session('userInfo');
		$Comment = M('Comment');
		
		$comment['comment_parent_id'] = $_POST['comment_parent_id'];		
		$comment['comment_school_id'] = $_POST['schoolId'];
		$comment['comment_type'] = '2';
		$comment['comment_detail'] = $_POST['commentDetail'];
		$comment['comment_status'] = '0'; // 可通过后台控制

		$comment['comment_level'] = $_POST['commentLevel'];
		
		if(isset($_POST['comment_parent_id'])){
			$parentComment =  $Comment->where('comment_id = '.$_POST['comment_parent_id'])->find();
			if(isset($parentComment)){
				$comment['comment_level'] = $parentComment['comment_level']+1;
			}else{
				$comment['comment_level'] = 0;
			}
		}else{
			$comment['comment_level'] =0;
		}
		
		$comment['comment_time'] =date("Y-m-d H:i:s");
		$comment['comment_ip'] =get_client_ip();
	
		$comment['comment_user_id'] = $userInfo['user_id'];
		$comment['comment_user_name'] = $userInfo['user_name'];
	
		
		$Comment->create($comment,2);
	
		$commentId = $Comment->add();
	
		if ((isset($commentId))){
			$this->ajaxReturn('success');
		}else{
			$this->ajaxReturn('error');
		}
	}
}