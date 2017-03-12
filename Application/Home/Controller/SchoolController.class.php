<?php
namespace Home\Controller;



use Think\Controller;
use Think\Page;
class SchoolController extends Controller {
	public function index(){
		
	}
	
	/**
	 * 学校列表页面
	 * @param number $showflag
	 * @param number $pagesize
	 */
    public function schoolList($type='',$typeValue='',$keyword='%',$showflag=1,$p=1,$pagesize=10){
    	$this->assign("navStyple","School"); // 首页式样
    	$schoolCond= "1=1 and school_status=1 ";
    	if($type=='school_coursename'){
    		$schoolCond = $schoolCond." and school_coursename like '%".$typeValue."%'";
    	}
    	if($type=='school_areaname'){
    		$schoolCond = $schoolCond." and school_areaname like '%".$typeValue."%'";
    	}
    	if($type=='school_step'){
    		$schoolCond = $schoolCond." and school_step like '%".$typeValue."%'";
    	}
    	if($type=='school_abroad'){
    		$schoolCond = $schoolCond." and school_abroad like '%".$typeValue."%'";
    	}
    	$schoolCond = $schoolCond." and (school_name like '%".$keyword."%' or school_keyword like '%".$keyword."%')";
    	
    	$schoolOrder = 'school_id desc';
    	
    	$pagestart = ($p-1)*$pagesize;
    	$Vschool = M('Vschool');
    	$vschoolList = $Vschool
    		->where($schoolCond)
    		->limit($pagestart,$pagesize)
    		->order($schoolOrder)
    		->select();
    	$sql = $Vschool->getLastSql();
    	$this->assign("sql",$sql);
    	$this->assign("type",$type);
    	$this->assign("typeValue",$typeValue);
    	if($type!='school_name' && $keyword<>'%'){
    		$this->assign("keyword",$keyword);
    	}

    	$this->assign("vschoolList",$vschoolList);
    
    	$p=$this->getpage($Vschool,$schoolCond,$pagesize);
    	$this->page=$p->show();
    	
    	
    	
    	$School = M('School');
    	$slideCond['school_status'] = 1;
    	$slideCond=array();
    	$slideOrder = 'school_id desc';
    	if($showflag==1){
    		$slideCond['school_recommend']='1'; // 显示推荐学校
    	}else{
    		$slideCond['school_isnew']='1'; // 显示新增学校
    	}
    	$vslidechoolList = $School->where($slideCond)->order($slideOrder)->limit(10)->select();
    	$this->assign("vslidechoolList",$vslidechoolList);
    	
    	//登录用户是否关注
    	$UserSchoolAttention = M('UserSchoolAttention');
    	$attentionCond['school_id'] = 1;
    	$attentionCond['user_id'] = 1;
    	$attentionCount = $UserSchoolAttention->where($attentionCond)->Count();
    	$this->assign('attentionCount',$attentionCount);
    	
    	// 排名前15的学校
    	$topSchoolCond['school_status'] = 1;
    	$topSchoolList = $School->where($topSchoolCond)->order('school_sort asc,school_id desc')->limit(15)->select();
    	$this->assign("topSchoolList",$topSchoolList);
    	
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
    	
    	$Banner = M('Banner');
    	$bannerList = $Banner->field('banner_title,banner_path')->where('banner_type=2 and banner_status=1 and banner_select=1')->order('banner_first desc')->select();
    	$this->assign("bannerList",$bannerList);
    	
    	$this->display();
    }

    public function schoolDetail1($id=0,$showTab =1){
    	$this->assign("navStyple","School"); // 首页式样
    	$this->assign("currNav","detail1"); // 首页式样
    	// 学校信息
    	$School = M('School');
    	$schoolInfo =$School->find($id);
    	
    	$arrayMap = explode(",",$schoolInfo['school_map']);
    	if(isset($arrayMap) and sizeof($arrayMap)>1){
    		$this->assign("mapx",$arrayMap[0]);
    		$this->assign("mapy",$arrayMap[1]);
    	}
    	$this->assign("schoolInfo",$schoolInfo);
    	$this->assign("commentSchoolId",$id);
    	$this->assign("schoolId",$id);

    	// 课堂特色
    	$Article = M('Article');
    	$featureCond['article_school_id'] = $id;
    	$featureCond['article_cataloge'] = 'feature';
    	$featureInfo = $Article->where($featureCond)->limit(1)->select();
    	$this->assign("featureInfo",$featureInfo);
    	
    	// 校长录
    	$masterCond['article_school_id'] = $id;
    	$masterCond['article_cataloge'] = 'master';
    	$masterCond['article_status'] = '1';
    	$masterList = $Article->where($masterCond)->select();
    	$this->assign("masterList",$masterList);
    	
    	// 师资团队
    	$Teacher = M('Teacher');
    	$teacherCond['teacher_school_id'] = $id;
    	$teacherCond['teacher_status'] = '1';
    	$teacherList = $Teacher->where($teacherCond)->select();
    	$teacherCount = $Teacher->where($teacherCond)->count();
    	$this->assign("teacherList",$teacherList);
    	$this->assign("teacherCount",$teacherCount);
    	
    	// 教学成果
    	$Varticle = M('Varticle');
    	$achievementCond['article_school_id'] = $id;
    	$achievementCond['article_cataloge'] = 'achievement';
    	$achievementList = $Varticle->where($achievementCond)->limit(10)->select();
    	$this->assign("achievementList",$achievementList);

    	// 校园印象
    	$SchoolImages = M('SchoolImages');
    	$imagesCond['images_school_id'] = $id;
    	$imagesCond['images_status'] = '1';
    	$imagesCond['images_type'] = '1';
    	$imageList =$SchoolImages->where($imagesCond)->order('sort asc,id desc')->limit(15)->select();
    	$this->assign("imageList",$imageList);
    	
    	// 活动
    	$Activity = M('Activity');
    	$activityCond['school_id'] = $id;
    	$activityCond['activity_status'] = '2';
    	$activityList=$Activity->where($activityCond)->order('activity_sort asc,activity_id desc')->select();
    	
    	$Banner = M('Banner');
    	$bannerList = $Banner->field('banner_title,banner_path')->where('banner_type=3 and banner_status=1 and banner_select=1')->order('banner_first desc')->select();
    	$this->assign("bannerList",$bannerList);
    	
    	$this->assign("showTab",$showTab);
    	$this->display();
    }
    
    public function schoolDetail2($id=0,$showTab =1,$p=1,$pagesize=10){
    	$this->assign("navStyple","School"); // 首页式样
    	$this->assign("currNav","detail2"); // 首页式样
    	$School = M('School');
    	$schoolInfo =$School->find($id);
    	$this->assign("schoolInfo",$schoolInfo);
    	$this->assign("schoolId",$id);

    	$Project = M('Project');
    	
    	$level1Info = $Project->where("level_id=1 and status=2 and school_id=".$id)->find();
    	$level2Info = $Project->where("level_id=2 and status=2 and school_id=".$id)->find();
    	$level3Info = $Project->where("level_id=3 and status=2 and school_id=".$id)->find();
    	$level4Info = $Project->where("level_id=4 and status=2 and school_id=".$id)->find();
    	$level5Info = $Project->where("level_id=5 and status=2 and school_id=".$id)->find();
    	$level6Info = $Project->where("level_id=6 and status=2 and school_id=".$id)->find();
    	
    	
    	$this->assign("level1Info",$level1Info);
    	$this->assign("level2Info",$level2Info);
    	$this->assign("level3Info",$level3Info);
    	$this->assign("level4Info",$level4Info);
    	$this->assign("level5Info",$level5Info);
    	$this->assign("level6Info",$level6Info);
    	$this->assign("showTab",$showTab);
    	
    	//招生简章
    	$Varticle = M('Article');
    	$guideCond="article_cataloge='guide' and article_status=1 and topic_flag=0 and article_school_id='".$id."'";
    	    	
    	$pagestart = ($p-1)*$pagesize;
    	$guideList = $Varticle->field('article_id,article_title,article_excerpt,article_top,article_elite,article_useful,article_read,article_comment')
    	->where($guideCond)
    	->limit($pagestart,$pagesize)->select();
    	$this->assign("guideList",$guideList);
    	 
    	$p=$this->getpage($Varticle,$guideCond,$pagesize);
    	$this->page=$p->show();

    	// 活动
    	$Activity = M('Activity');
    	$activityCond['school_id'] = $id;
    	$activityCond['activity_status'] = '2';
    	$activityList=$Activity->where($activityCond)->order('activity_sort asc,activity_id desc')->select();
    	$this->assign("activityList",$activityList);
    	
    	$this->display();
    }
    
    public function schoolDetail3($id=0,$showTab =1){
    	$this->assign("navStyple","School"); // 首页式样
    	$this->assign("currNav","detail3"); // 首页式样
    	$School = M('School');
    	$schoolInfo =$School->find($id);
    	$this->assign("schoolInfo",$schoolInfo);
    	$this->assign("schoolId",$id);
    	
    	// 校园新闻
    	$Varticle = M('Varticle');
    	$schoolNewsCond['article_school_id'] = $id;
    	$schoolNewsCond['article_cataloge'] = 'schoolnews';
    	$schoolNewsCond['article_status'] = '1';
    	$schoolNewsList = $Varticle->where($schoolNewsCond)->limit(10)->select();
    	$this->assign("schoolNewsList",$schoolNewsList);
    	
    	// 课堂纪实
    	$documentaryCond['article_school_id'] = $id;
    	$documentaryCond['article_cataloge'] = 'documentary';
    	$documentaryCond['article_status'] = '1';
    	$documentaryList = $Varticle->where($documentaryCond)->limit(10)->select();
    	$this->assign("documentaryList",$documentaryList);
    	
    	// 课堂纪实
    	$campCond['article_school_id'] = $id;
    	$campCond['article_cataloge'] = 'camp';
    	$campCond['article_status'] = '1';
    	$campList = $Varticle->where($campCond)->limit(10)->select();
    	$this->assign("campList",$campList);

    	$this->assign("showTab",$showTab);
    	
    	$this->display();
    }
    
    public function schoolDetail4($id=0,$showTab =1){
    	$this->assign("navStyple","School"); // 首页式样
    	$this->assign("currNav","detail4"); // 首页式样
    	$School = M('School');
    	$schoolInfo =$School->find($id);
    	$this->assign("schoolInfo",$schoolInfo);
    	$this->assign("schoolId",$id);
    	
    	// 学生故事
    	$Varticle = M('Varticle');
    	$storyCond['article_school_id'] = $id;
    	$storyCond['article_cataloge'] = 'story';
    	$storyCond['article_status'] = '1';
    	$storyList = $Varticle->where($storyCond)->limit(10)->select();
    	$this->assign("storyList",$storyList);
    	 
    	// 学生风采
    	$studentsCond['article_school_id'] = $id;
    	$studentsCond['article_cataloge'] = 'student';
    	$studentsCond['article_status'] = '1';
    	$studentsList = $Varticle->where($studentsCond)->limit(10)->select();
    	$this->assign("studentsList",$studentsList);
    	
    	$this->assign("showTab",$showTab);

    	$this->display();
    }
    
    public function schoolDetail5($id=0){
    	$this->assign("navStyple","School"); // 首页式样
    	$this->assign("currNav","detail5"); // 首页式样
    	$School = M('School');
    	$schoolInfo =$School->find($id);
    	$this->assign("schoolInfo",$schoolInfo);
    	$this->assign("schoolId",$id);
    	
    	$SchoolImages = M('SchoolImages');
    	// 校园视频
    	$videoCond['images_school_id'] = $id;
    	$videoCond['images_status'] = '1';
    	$videoCond['images_type'] = '2';
    	$videoList =$SchoolImages->where($videoCond)->order('sort asc,id desc')->limit(15)->select();
    	$this->assign("videoList",$videoList);
    	
    	// 拍客
    	$shootCond['images_school_id'] = $id;
    	$shootCond['images_status'] = '1';
    	$shootCond['images_type'] = '3';
    	$shootList =$SchoolImages->where($shootCond)->order('sort asc,id desc')->limit(15)->select();
    	$this->assign("shootList",$shootList);
    	$this->display();
    }
    
    /**
     * 学校关注信息
     * @param string $type
     * @param number $id
     */
    public function attentionSchool($type='add',$id=0){
    	$this->assign("navStyple","School"); // 首页式样
    	
    	$ip = get_client_ip();
    	$userId = 1;
    	
    	$UserSchoolAttention = M('UserSchoolAttention');
    	$attentionCond['user_id'] = $userId;
    	$attentionCond['school_id'] = $id;
    	
    	$attentionCount = $UserSchoolAttention->where($attentionCond)->Count();
    	
    	// 取消关注
    	if($type=='del' && $id>0 && $attentionCount>0){
    		$UserSchoolAttention->where($attentionCond)->delete();
    		
    		$School = M('School');
    		$schoolInfo =$School->find($id);
    		$attentions = $schoolInfo['school_attention']-1;
    		//$schoolInfo['school_attention'] = $attentions;
    		$schoolCond['school_id'] = $id;
    		D('School')->where($schoolCond)->setField('school_attention',$attentions);
    	}

    	
    	//添加关注
    	if($type=='add' && $id>0 && $attentionCount==0 ){
    		$data['school_id'] = $id;
    		$data['user_id'] = $userId;
    		$UserSchoolAttention->create($data,2);
    		$UserSchoolAttention->add();
    		
    		$School = M('School');
    		$schoolInfo =$School->find($id);
    		$attentions = $schoolInfo['school_attention']+1;
    		//$schoolInfo['school_attention'] = $attentions;
    		$schoolCond['school_id'] = $id;
    		D('School')->where($schoolCond)->setField('school_attention',$attentions); 

    	}
		$this->assign('attentionCount',$attentionCount);
    	$this->redirect('schoolList');
    }
    
    // 获取分页
    public function getpage(&$m,$where,$pagesize=10){
    	$m1=clone $m;//浅复制一个模型
    	$count = $m->where($where)->count();//连惯操作后会对join等操作进行重置
    	$m=$m1;//为保持在为定的连惯操作，浅复制一个模型
    	$p=new Page($count,$pagesize);
    	$p->lastSuffix=false;
    	//$p->setConfig('header','<li class="rows">共<b>%TOTAL_ROW%</b>条记录   第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页</li>');
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