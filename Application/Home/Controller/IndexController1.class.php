<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index($showflag=1){
    	// 1.学校列表
    	$School = M('School');
    	$schoolList = $School->select();
    	$this->assign("schoolList",$schoolList);
    	
    	
    	$Vschool = M('Vschool');
    	$vschoolList = $Vschool->limit(0,10)->select();
    	$this->assign("vschoolList",$vschoolList);
    	 
    	// 学校Slide
    	$slideCond=array();;
    	if($showflag==1){
    		$slideCond['school_recommend']='1'; // 显示推荐学校
    	}else{
    		$slideCond['school_isnew']='1'; // 显示新增学校
    	}
    	$vslidechoolList = $School->where($slideCond)->limit(0,10)->select();
    	 
    	$this->assign("vslidechoolList",$vslidechoolList); 	
    	
    	//2.学校动态
    	$Varticle = M('Varticle');
    	$schoolNewsCond['article_cataloge'] = 'schoolnews';
    	$schoolNewsCond['article_status'] = '1';
    	$schoolNewsList = $Varticle->field('article_id,article_title,article_excerpt,article_top,article_elite,article_useful,article_read,article_comment
    			,SUBSTRING(
					SUBSTRING(article_detail,LOCATE(\'<img src="\',article_detail)+10)
    				,1
    				,LOCATE(\'" alt\',SUBSTRING(article_detail,LOCATE(\'<img src="\',article_detail)+10))-1) as imagePath
    			')->where($schoolNewsCond)->limit(0,4)->select();
    	
    	$this->assign("schoolNewsList",$schoolNewsList);
    	
    	//3.招生简章
    	$guideCond['article_cataloge'] = 'guide';
    	$guideCond['article_status'] = '1';
    	$guideList = $Varticle->field('article_id,article_title,article_excerpt,article_top,article_elite,article_useful,article_read,article_comment
    			,SUBSTRING(
					SUBSTRING(article_detail,LOCATE(\'<img src="\',article_detail)+10)
    				,1
    				,LOCATE(\'" alt\',SUBSTRING(article_detail,LOCATE(\'<img src="\',article_detail)+10))-1) as imagePath
    			')->where($guideCond)->limit(0,4)->select();
    	$this->assign("guideList",$guideList);

    	//4.学生故事
    	$storyCond['article_cataloge'] = 'studentStory';
    	$schoolNewsCond['article_status'] = '1';
    	$storyList = $Varticle->field('article_id,article_title,article_excerpt,article_top,article_elite,article_useful,article_read,article_comment
    			,SUBSTRING(
					SUBSTRING(article_detail,LOCATE(\'<img src="\',article_detail)+10)
    				,1
    				,LOCATE(\'" alt\',SUBSTRING(article_detail,LOCATE(\'<img src="\',article_detail)+10))-1) as imagePath
    			')->where($storyCond)->limit(0,4)->select();
    	$this->assign("storyList",$storyList);
    	
    	//5.专家专栏
    	$expertCond['article_cataloge'] = 'expert';
    	$expertCond['article_status'] = '1';
    	$expertList = $Varticle->field('article_id,article_title,article_excerpt,article_top,article_elite,article_useful,article_read,article_comment
    			,SUBSTRING(
					SUBSTRING(article_detail,LOCATE(\'<img src="\',article_detail)+10)
    				,1
    				,LOCATE(\'" alt\',SUBSTRING(article_detail,LOCATE(\'<img src="\',article_detail)+10))-1) as imagePath
    			')->where($expertCond)->limit(0,4)->select();
    	$this->assign("expertList",$expertList);
    	
    	//6.升学指导
    	$gradeCond['article_cataloge'] = 'schoolgrade';
    	$gradeCond['article_status'] = '1';
    	$gradetList = $Varticle->field('article_id,article_title,article_excerpt,article_top,article_elite,article_useful,article_read,article_comment,SUBSTRING(
					SUBSTRING(article_detail,LOCATE(\'<img src="\',article_detail)+10)
    				,1
    				,LOCATE(\'" alt\',SUBSTRING(article_detail,LOCATE(\'<img src="\',article_detail)+10))-1) as imagePath
    			')->where($gradeCond)->limit(0,4)->select();
    	$this->assign("gradetList",$gradetList);
    	
    	// 国际学校Q&A
    	$Article = M('Article');
    	$qaischoolCond['article_cataloge'] = 'qaischool';
    	$qaischoolCond['article_status'] = '1';
    	$qaischoolList = $Article->field('article_id,article_title')->where($qaischoolCond)->order('article_sort asc,article_id desc')->limit(0,8)->select();
    	$this->assign("qaischoolList",$qaischoolList);
    	
    	// 国际课程Q&A
    	$qaicourseCond['article_cataloge'] = 'qaicourse';
    	$qaicourseCond['article_status'] = '1';
    	$qaicourseList = $Article->field('article_id,article_title')->where($qaicourseCond)->order('article_sort asc,article_id desc')->limit(0,8)->select();
    	$this->assign("qaicourseList",$qaicourseList);
    	
    	// 如何选择Q&A
    	$qaichooseCond['article_cataloge'] = 'qaichoose';
    	$qaichooseCond['article_status'] = '1';
    	$qaichooseList = $Article->field('article_id,article_title')->where($qaichooseCond)->order('article_sort asc,article_id desc')->limit(0,8)->select();
    	$this->assign("qaichooseList",$qaichooseList);
    	
    	// 排名前15的学校
    	$topSchoolCond['school_status'] = 1;
    	$topSchoolList = $School->where($topSchoolCond)->order('school_sort asc,school_id desc')->limit(0,15)->select();
    	$this->assign("topSchoolList",$topSchoolList);
    	
    	// 有用的文章15篇
    	$expertCond['article_cataloge'] = 'expert';
    	$usefulCond['article_status'] = '1';
    	$usefulList = $Varticle->where($usefulCond)->order('article_useful asc,article_id desc')->limit(0,15)->select();
    	$this->assign("usefulList",$usefulList);
    	
    	// 热门话题
    	$topTopicCond['article_status'] = '1';
    	$topTopicCond['topic_flag']='1';
    	$topTopicList = $Varticle->field('article_id,article_title')->where($topSchoolCond)->order('article_id desc')->limit(0,15)->select();
    	$this->assign("topTopicList",$topTopicList);
    	
    	// 校园评论
    	$Comment = M('Comment');
    	$topCommentCond['comment_type'] = '1'; // 评论类型
    	$topCommentCond['comment_status'] = '1'; // 评论状态
    	$topcommentCond['comment_level'] = 0; // 顶层评论
    	$topCommentList= $Comment->field('comment_id','comment_school_id','comment_detail')
    		->where($topCommentCond)->order('comment_id desc')->limit(0,10)->select();
    	$this->assign("topCommentList",$topCommentList);
    	
    	// 学习阶段
    	$Step = M('Step');
    	$stepList = $Step->select();
    	$this->assign("stepList",$stepList);
    	
    	//留学方向
    	$Abroad = M('Abroad');
    	$abroadList = $Abroad->select();
    	$this->assign("abroadList",$abroadList);
    	
    	//课程信息
    	$Course = M('Course');
    	$courseList = $Course->select();
    	$this->assign("courseList",$courseList);
    	
    	$Area = M('Area');
    	$areaList = $Area->select();
    	$this->assign("areaList",$areaList);
    	
    	$this->assign("navStyple","School"); // 首页式样
    	$this->display();
    }
    
    public function login(){
    	$this->display();
    }
    
    public function registerStep1(){
    	$this->display();
    }
    
    public function registerStep2(){
    	$this->display();
    }
    
    public function registerStep3(){
    	$this->display();
    }
}