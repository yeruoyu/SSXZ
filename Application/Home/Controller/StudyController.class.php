<?php
namespace Home\Controller;
use Think\Controller;
use Think\Page;
class StudyController extends Controller {
    public function studyList(){
    	$this->assign("navStyple","Study"); // 首页式样
    	// 学习小组
    	$StudyGroup = M('School');
    	$studyGroupCond['group_flag'] = 1;
    	$studyGroupList =$StudyGroup->where($studyGroupCond)->limit(0,8)->select();
    	$this->assign('studyGroupList',$studyGroupList);

    	// 有用的文章15篇
    	$Varticle = M('Varticle');
    	$usefulCond['article_status'] = '1';
    	$usefulList = $Varticle->field('article_id,article_title,article_cataloge')->where($usefulCond)->order('article_useful asc,article_id desc')->limit(0,15)->select();
    	$this->assign("usefulList",$usefulList);    	
    	
    	$this->display();
    }
    
    public function execAttention($flag=1,$school_id=-1){
    	$result['success']=true;
    	$result['message']="关注成功";
    	
    	//如果用户没有登录，返回要求用户先登录；
    	if(!isset($_SESSION['userInfo'])){
    		$result['success']=false;
    		$result['message']="请先登录";
    		$this->ajaxReturn($result);
    	}
    	$userInfo = session('userInfo');
    	$SchoolAttion = M('UserSchoolAttentionModel');
    	$schoolAttionCond['user_id'] =$userInfo['user_id'];
    	$schoolAttionCond['school_id'] = $school_id;
    	$attion = $SchoolAttion->where($schoolAttionCond)->find();
    	if($flag==1){
    		//添加一条学校与用户的关注记录，返回关注成功；同时学习小组关注度加1
    		if(isset($attion)){
    			//如果已经有用户学习小组信息，返回用户不用关注；
    			$result['success']=false;
    			$result['message']="已经关注过,不用再做关注";
    			$this->ajaxReturn($result);
    		}else{
    			$attion['user_id'] =$userInfo['user_id'];
    			$attion['school_id'] =$school_id;
    			
    			$SchoolAttion->create($attion,2);
    			
    			$SchoolAttion->add();
    			
    			$result['success']=true;
    			$result['message']="已关注";
    			$this->ajaxReturn($result);
    		}
    	}else{
    		// 如果flag=0;表示取消关注
    		if(isset($attion)){
    			//如果已经有用户学习小组信息，返回用户不用关注；
    			
    			$SchoolAttion->delete($attion,2);
    			
    			$result['success']=false;
    			$result['message']="已经关注过,不用再做关注";
    			$this->ajaxReturn($result);
    		}else{
    			$result['success']=false;
    			$result['message']="没有关注过，不需要取消";
    			$this->ajaxReturn($result);
    		}
    	}
	
    }
    
    public function articleQuery($cataloge='ibstudy'){
    	$Varticle = M('Varticle');
    	$articleCond['article_cataloge'] = $cataloge;
    	$articleCond['article_status'] = '1';
    	$articleList = $Varticle
    	->field('article_id,article_title,article_excerpt,article_top,article_elite,article_useful,article_read,article_comment
    	   ,SUBSTRING(
    		SUBSTRING(article_detail,LOCATE(\'<img src="\',article_detail)+10)
    	    ,1
    	    ,LOCATE(\'" alt\',SUBSTRING(article_detail,LOCATE(\'<img src="\',article_detail)+10))-1) as imagePath
    	    ')
        	    ->where($articleCond)
        	    ->limit(0,5)
        	    ->select();
    	$_res['data'] = $articleList;
    	$this->ajaxReturn($_res);
    }
    
    public function studyDetail($id=0,$keyword='%',$p=1,$pagesize=10){
    	$this->assign("navStyple","Study"); // 首页式样
    	
    	// 学校信息
    	$School = M('School');
    	$schoolInfo =$School->find($id);
    	$this->assign("schoolInfo",$schoolInfo);
    	$this->assign("schoolId",$id);
    	
    	
    	$Topic = M('Varticle');
    	 
    	$topicCond="school_id=".$id
    			." and (article_detail like '%".$keyword."%' "
    			." and article_title like '%".$keyword."%') "
    			." and article_status=1 and topic_flag=1 ";
    							 
    			$pagestart = ($p-1)*$pagesize;
    			$topicList = $Topic->field('article_id,article_cataloge,school_name,article_title,article_excerpt,article_author')
    			->where($topicCond)
    			->order('article_id desc')
    			->limit($pagestart,$pagesize)->select();
    							 
    			$this->assign("topicList",$topicList);
    							 
    			$p=$this->getpage($Topic,$topicCond,$pagesize);
    			$this->page=$p->show();
    	
    	
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