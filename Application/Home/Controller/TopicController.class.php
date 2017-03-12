<?php
namespace Home\Controller;
use Think\Controller;
use Think\Page;
class TopicController extends Controller {
    public function topicList($groupType=2,$schoolId=-1,$type='%',$keyword='%',$p=1,$pagesize=10){
    	$this->assign("navStyple","Topic"); // 首页式样

    	$Topic = M('Varticle');
    	
    	$topicCond="article_cataloge like '". $type ."' "
    		." and (article_detail like '%".$keyword."%' "
    		." and article_title like '%".$keyword."%') "
    		." and article_status=1 and topic_flag=1 ";
    	if($groupType==1){
    		$topicCond = $topicCond." and group_flag=1";
    	}
    	else if($groupType==0){
    		$topicCond = $topicCond." and group_flag=0";
    	}
    	if($schoolId>-1){
    		$topicCond = $topicCond." and school_id=".$schoolId;
    	}
    	
    	$pagestart = ($p-1)*$pagesize;
    	$topicList = $Topic->field('article_id,article_cataloge,school_name,article_title,article_excerpt,article_author')
    		->where($topicCond)
    		->order('article_id desc')
    		->limit($pagestart,$pagesize)->select();
    	
    	$this->assign("topicList",$topicList);
    		 
    	$p=$this->getpage($Topic,$topicCond,$pagesize);
    	$this->page=$p->show();
    	
    	$topTopicCond ="article_status=1 and topic_flag=1 ";
    	
    	
    	$topTopic= $Topic->field('article_id,article_cataloge,school_name,article_title,article_excerpt,article_author')
    		->where($topTopicCond)
    		->order('article_id desc')
    		->limit(0,5)->select();
    	
    	$this->assign("topTopic",$topTopic);
    		
    		
    	if($keyword<>'%'){
    		$this->assign("keyword",$keyword);
    	}
    	$this->assign("groupType",$groupType);
    	
    	$userInfo = "0";
    	$this->assign("userInfo",$userInfo);
    	$this->display();

    }
    
    public function topicDetail($id=0){
    	$this->assign("navStyple","Topic"); // 首页式样
    	
    		$News=M('News');	// 招生信息
    		$Article=M('Article');  // 对应的文章信息
    		$Comment = M('Comment'); // 对应的评论信息
    		
    		$articleInfo=$Article->find($id);
    		if($id>0){
    			$this->assign("commentArticleId",$id);
    		}
    		//$commentCond['comment_article_id']=$id;
    		//$commentList= $Comment->where($commentCond)->select();

    		//$this->assign('newsInfo',$newsInfo);
    		$this->assign('articleInfo',$articleInfo);
    		//$this->assign('commentList',$commentList);
    		
    		// 有用的话题15篇
    		$Varticle = M('Varticle');
    		$usefulCond['article_status'] = '1';
    		$usefulCond['topic_flag'] = '1';
    		$usefulList = $Varticle->field('article_id,article_title,article_cataloge')->where($usefulCond)->order('article_useful asc,article_id desc')->limit(0,15)->select();
    		$this->assign("usefulList",$usefulList);
    		
    		// 排名前15的学校
    		$School = M('School');
    		$topSchoolCond['school_status'] = 1;
    		$topSchoolList = $School->field('school_id,school_name')->where($topSchoolCond)->order('school_sort asc,school_id desc')->limit(0,15)->select();
    		$this->assign("topSchoolList",$topSchoolList);
    		
    		$this->display();
    }
    
    
    public function getpage(&$m,$where,$pagesize=10){
    	$m1=clone $m;//浅复制一个模型
    	$count = $m->where($where)->count();//连惯操作后会对join等操作进行重置
    	$m=$m1;//为保持在为定的连惯操作，浅复制一个模型
    	$p=new Page($count,$pagesize);
    	$p->lastSuffix=false;
    	$p->setConfig('header','<li class="rows">共<b>%TOTAL_ROW%</b>条记录   第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页</li>');
    	$p->setConfig('prev','上一页');
    	$p->setConfig('next','下一页');
    	$p->setConfig('last','末页');
    	$p->setConfig('first','首页');
    	$p->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');
    	$p->parameter=I('get.');
    	$m->limit($p->firstRow,$p->listRows);
    	return $p;
    }
}