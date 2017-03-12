<?php
namespace Home\Controller;
use Think\Controller;
use Think\Page;
class NewsController extends Controller {
	public function getpage(&$m,$where,$pagesize=2){
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
	
    public function newsList($type='%',$keyword='%',$p=1,$pagesize=10){
    	$this->assign("navStyple","Article"); // 首页式样

    	$Varticle = M('Article');
    	$articleCond="article_cataloge like '". $type ."' "
    			." and (article_detail like '%".$keyword."%' "
    			." or article_title like '%".$keyword."%'"
    			." or article_keyword like '%".$keyword."%') "
    			." and article_status=1 and topic_flag=0 ";

    	$pagestart = ($p-1)*$pagesize;
    	$varticleList = $Varticle->field('article_id,article_title,article_excerpt,article_top,article_elite,article_useful,article_read,article_comment,SUBSTRING(
    		SUBSTRING(article_detail,LOCATE(\'<img src="\',article_detail)+10)
    	    ,1
    	    ,LOCATE(\'" alt\',SUBSTRING(article_detail,LOCATE(\'<img src="\',article_detail)+10))-1) as imagePath
    	    ')
    		->where($articleCond)->order('article_id desc')
    		->limit($pagestart,$pagesize)->select();
    	$this->assign("varticleList",$varticleList);
    	
    	$p=$this->getpage($Varticle,$articleCond,$pagesize);
    	//$this->assign("page",$p);
    	$this->page=$p->show();

    	if($keyword<>'%'){
    		$this->assign("keyword",$keyword);
    	}
    	
    	$this->display();
    }

    public function newsDetail($id=0){
    	$this->assign("navStyple","Article"); // 首页式样
    	
    		$News=M('News');	// 招生信息
    		$Article=M('Article');  // 对应的文章信息
    		$Comment = M('Comment'); // 对应的评论信息
    		
    		// $newsInfo = $News->find($id);
    		$articleInfo=$Article->find($id);
    		
    		$commentCond['comment_article_id']=$id;
    		$commentList= $Comment->where($commentCond)->select();

    		//$this->assign('newsInfo',$newsInfo);
    		$this->assign('articleInfo',$articleInfo);
    		$this->assign('commentList',$commentList);
    		$this->assign("commentArticleId",$id);
    		// 有用的文章15篇
    		$Varticle = M('Varticle');
    		$usefulCond="article_status=1 and topic_flag=0";
    		
    		$usefulList = $Varticle->field('article_id,article_title,article_cataloge')->where($usefulCond)->order('article_useful asc,article_id desc')->limit(0,15)->select();
    		$this->assign("usefulList",$usefulList);
    		
    		// 排名前15的学校
    		$School = M('School');
    		$topSchoolCond['school_status'] = 1;
    		$topSchoolList = $School->field('school_id,school_name')->where($topSchoolCond)->order('school_sort asc,school_id desc')->limit(0,15)->select();
    		$this->assign("topSchoolList",$topSchoolList);
    		
    	$this->display();
    }
    

    
}