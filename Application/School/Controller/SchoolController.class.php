<?php
namespace School\Controller;
use Think\Controller;
/**
 * 学校信息Controller
 *
 */
class SchoolController extends Controller {
	
	/**
	 * 学校信息
	 */
	public function schoolInfo(){
		$this->assign('schoolInfo',session('schoolInfo'));
		$this->assign('user',session('userInfo'));
		$this->assign('menulist',session('menulist'));
		$this->assign('catalogId','学校管理');
		$this->assign('funId','学校介绍');
		
		$Area = M('Area');
		$areaList = $Area->order('area_id')->select();
		$this->assign('areaList',$areaList);

		$this->display();
	}
	
	/**
	 * 保存学校信息
	 */
	public function saveSchoolInfo(){
		$this->assign('schoolInfo',session('schoolInfo'));
		$this->assign('user',session('userInfo'));
		$this->assign('menulist',session('menulist'));
		$this->assign('catalogId','学校管理');
		$this->assign('funId','学校介绍');
		
		$_POST = $_REQUEST;
		$schoolInfo=session('schoolInfo');
		
		//$schoolInfo['scool_id']=$_POST['school_id'];
		$schoolInfo['school_name']=$_POST['school_name'];
		
		$schoolInfo['school_excerpt'] = $_POST['school_excerpt'];
		$schoolInfo['school_keyword'] = $_POST['school_keyword'];
		$schoolInfo['school_detail'] = $_POST['school_detail'];
		$schoolInfo['school_address'] = $_POST['school_address'];
		$schoolInfo['school_area'] = $_POST['school_area'];
		$schoolInfo['school_phone'] = $_POST['school_phone'];
		
		$upload = new \Think\Upload();// 实例化上传类
		$upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
		$upload->rootPath  =     './Uploads/'; // 设置附件上传根目录
		$upload->savePath  =     ''; // 设置附件上传（子）目录
		$info   =   $upload->upload();
		if(!$info) {// 上传错误提示错误信息
			$this->error($upload->getError());
		}else{
			foreach($info as $file){
				$schoolInfo['school_photo']= $file['savepath'].$file['savename'];
				$schoolInfo['school_photoname']=$file['name'];
			}
		}
		
		$School = M('School');
		$School->create($schoolInfo,2);
		$School->save();
		session('schoolInfo',$schoolInfo);
		$this->success('修改成功！',U('schoolInfo'));

	}
	
	/**
	 * 学校管理信息
	 */
	public function introduce(){
		$this->assign('schoolInfo',session('schoolInfo'));
		$this->assign('user',session('userInfo'));
		$this->assign('menulist',session('menulist'));
		$this->assign('catalogId','学校管理');
		$this->assign('funId','学校简介');
		$this->display();
	}
	
	/**
	 * 保存学校管理信息
	 */
	public function saveIntroduce(){
		$this->assign('schoolInfo',session('schoolInfo'));
		$this->assign('user',session('userInfo'));
		$this->assign('menulist',session('menulist'));
		$this->assign('catalogId','学校管理');
		$this->assign('funId','学校简介');
		$this->display();
	}
	
	/**
	 * 课堂特色信息
	 */
	public function feature(){
		$this->assign('schoolInfo',session('schoolInfo'));
		$this->assign('user',session('userInfo'));
		$this->assign('menulist',session('menulist'));
		$this->assign('catalogId','学校管理');
		$this->assign('funId','课堂特色');
		
		$schoolInfo = session('schoolInfo');
		
		$Article = M('Article');
		$cond['article_cataloge']='feature';
		$cond['article_status']='1';
		$cond['article_school_id']=$schoolInfo['school_id'];
		
		$feature =$Article->where($cond)->find();
		$this->assign('feature',$feature);
		
		$this->display();
	}
	
	/**
	 * 保存课堂特色信息
	 */
	public function saveFeature(){
		$this->assign('schoolInfo',session('schoolInfo'));
		$this->assign('user',session('userInfo'));
		$this->assign('menulist',session('menulist'));
		$this->assign('catalogId','学校管理');
		$this->assign('funId','课堂特色');
		
		
		$schoolInfo = session('schoolInfo');
		
    	$_POST = $_REQUEST;
    	$data['article_id']=$_POST['article_id'];
    	$data['article_cataloge']='feature';
		$data['article_status']='1';
		$data['article_detail']=$_REQUEST['article_detail'];
		$data['article_title']=$schoolInfo['school_name'].'_课堂特色';
    	$data['article_school_id'] = $schoolInfo['school_id'];
		
    	$Article = M('Article');
    	$Article->create($data,2);
    	if($data['article_id']>1){
    		$Article->save();
    	}else{
    		$Article->add();
    	}
    	
    	
    	//echo($_POST['article_detail']);
    	$this->redirect('feature');
    	
    	//$this->display();
	}
	
	/**
	 * 教师信息列表
	 */
	public function teacherList(){
		$this->assign('schoolInfo',session('schoolInfo'));
		$this->assign('user',session('userInfo'));
		$this->assign('menulist',session('menulist'));
		$this->assign('catalogId','学校管理');
		$this->assign('funId','师资团队');
		
		$schoolInfo = session('schoolInfo');
		$Teacher = M('Teacher');
		$teacherCond['teacher_school_id'] = $schoolInfo['school_id'];
		$teacherList = $Teacher->where($teacherCond)->select();
		
		$this->assign('teacherList',$teacherList);
		$this->display();
	}
	
	/**
	 * 教师信息
	 * @param number $id
	 */
	public function teacherDetail($id=0){
		$this->assign('schoolInfo',session('schoolInfo'));
		$this->assign('user',session('userInfo'));
		$this->assign('menulist',session('menulist'));
		$this->assign('catalogId','学校管理');
		$this->assign('funId','师资团队');
		
		if($id>0){
			$this->assign('action','edit');
		
			$Teacher = M('Teacher');
			$teacherInfo = $Teacher->find($id);
			$this->assign('teacherInfo',$teacherInfo);
		}else{
			$this->assign('action','add');
		}
		
		$this->display();
	}
	
	/**
	 * 保存教师信息
	 */
	public function saveTeacher(){
		$this->assign('schoolInfo',session('schoolInfo'));
		$this->assign('user',session('userInfo'));
		$this->assign('menulist',session('menulist'));
		$this->assign('catalogId','学校管理');
		$this->assign('funId','师资团队');
		
		$_POST = $_REQUEST;
		
		$data['teacher_id']=$_POST['teacher_id'];
		$data['teacher_name']=$_POST['teacher_name'];
		$data['teacher_school_id']=$_POST['teacher_school_id'];
		$data['teacher_introduction']=$_POST['teacher_introduction'];
		$data['teacher_tag']=$_POST['teacher_tag'];
		$data['teacher_school']=$_POST['teacher_school'];
		$data['teacher_status'] = $_POST['teacher_status'];
		
		$upload = new \Think\Upload();// 实例化上传类
		$upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
		$upload->rootPath  =     './Uploads/'; // 设置附件上传根目录
		$upload->savePath  =     ''; // 设置附件上传（子）目录
		// 上传文件
		$info   =   $upload->upload();
		if(!$info) {// 上传错误提示错误信息
			//$this->error($upload->getError());
		}else{
			foreach($info as $file){
				$data['teacher_photo']= $file['savepath'].$file['savename'];
				$data['teacher_photoname']=$file['name'];
			}
		}
		$Teacher = M('Teacher');
		$Teacher->create($data,2);
		
		
		if($_POST['action']=='edit'){
			$Teacher->save();
		}else{
			$teacherId = $Teacher->add();
		}
		$this->success('修改成功！',U('teacherList'));
	}
	
	/**
	 * 教学成果列表
	 */
	public function achievementList(){
		$this->assign('schoolInfo',session('schoolInfo'));
		$this->assign('user',session('userInfo'));
		$this->assign('menulist',session('menulist'));
		$this->assign('catalogId','学校管理');
		$this->assign('funId','教学成果');

		$schoolInfo=session('schoolInfo');
		
		$Article=M('Article');
		$achievementCond['article_cataloge'] = 'achievement';
		$achievementCond['article_school_id'] = $schoolInfo['school_id'];
		$achievementList = $Article->where($achievementCond)->select();
		
		$this->assign('achievementList',$achievementList);
		
		$this->display();
		
	}
	
	/**
	 * 教学成果信息
	 */
	public function achievementDetail($id=0){
		$this->assign('schoolInfo',session('schoolInfo'));
		$this->assign('user',session('userInfo'));
		$this->assign('menulist',session('menulist'));
		$this->assign('catalogId','学校管理');
		$this->assign('funId','教学成果');
		
		if($id>0){
			$this->assign('action','edit');
		
			$Article=M('Article');
			$documentaryInfo = $Article->find($id);
			$this->assign('articleInfo',$documentaryInfo);
		}else{
			$this->assign('action','add');
		}
		
		$this->display();
	}
	
	/**
	 * 保存教学成果信息
	 */
	public function saveAchievement(){
		$this->assign('schoolInfo',session('schoolInfo'));
		$this->assign('user',session('userInfo'));
		$this->assign('menulist',session('menulist'));
		$this->assign('catalogId','学校管理');
		$this->assign('funId','教学成果');

		$schoolInfo = session('schoolInfo');
		
		$_POST = $_REQUEST;
		$dataArticle['article_id']=$_POST['article_id'];
		$dataArticle['article_cataloge']='achievement';
		$dataArticle['article_title']=$_POST['article_title'];
		$dataArticle['article_keyword']=$_POST['article_keyword'];
		$dataArticle['article_source']=$_POST['article_source'];
		$dataArticle['article_excerpt']=$_POST['article_excerpt'];
		$dataArticle['article_detail']=$_POST['article_detail'];
		$dataArticle['article_elite']=$_POST['article_elite'];
		$dataArticle['article_top']=$_POST['article_top'];
		$dataArticle['comment_status']=$_POST['comment_status'];
		$dataArticle['article_status']=$_POST['article_status'];
		$dataArticle['article_school_id'] = $schoolInfo['school_id'];
		$dataArticle['article_newsflag'] = '1';
		
		$Article = M('Article');
		$Article->create($dataArticle,2);
		if($_POST['action']=='edit'){
			$Article->save();
			$this->success('修改成功！',U('achievementList'));
		}else{
			$articleInsId = $Article->add();
			$this->success('添加成功！',U('achievementList'));
		}
		
		
	}
	
	/**
	 * 印象校园列表
	 */
	public function imageList(){
		$this->assign('schoolInfo',session('schoolInfo'));
		$this->assign('user',session('userInfo'));
		$this->assign('menulist',session('menulist'));
		$this->assign('catalogId','学校管理');
		$this->assign('funId','印象校园');
		
		$Images = M('Images');
		
		$imagesCond['images_type'] = '1'; // 印象校园
		$imagesCond['images_status'] = '1'; // 状态
		
		$imagesList = $Images->where($imagesCond)->order('images_sort')->select();
		$this->assign('imagesList',$imagesList);
		
		$this->display();
	}
	
	/**
	 * 印象校园信息
	 */
	public function imageDetail(){
		$this->assign('schoolInfo',session('schoolInfo'));
		$this->assign('user',session('userInfo'));
		$this->assign('menulist',session('menulist'));
		$this->assign('catalogId','学校管理');
		$this->assign('funId','印象校园');
		$this->display();
	}
	
	/**
	 * 保存印象校园信息
	 */
	public function saveImage(){
		$this->assign('schoolInfo',session('schoolInfo'));
		$this->assign('user',session('userInfo'));
		$this->assign('menulist',session('menulist'));
		$this->assign('catalogId','学校管理');
		$this->assign('funId','印象校园');
		
		$_POST = $_REQUEST;

		$imagesInfo['images_id']=$_POST['images_id'];
		$imagesInfo['images_title']=$_POST['images_title'];
		$imagesInfo['images_status']=$_POST['images_status'];
		
		$upload = new \Think\Upload();// 实例化上传类
		$upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
		$upload->rootPath  =     './Uploads/'; // 设置附件上传根目录
		$upload->savePath  =     ''; // 设置附件上传（子）目录
		$info   =   $upload->upload();
		if(!$info) {// 上传错误提示错误信息
			$this->error($upload->getError());
		}else{
			foreach($info as $file){
				$imagesInfo['images_path']= $file['savepath'].$file['savename'];
				$imagesInfo['image_filename']=$file['name'];
			}
		}
		
		$Images = M('Images');
		$Images->create($imagesInfo,2);
		$Images->save();

		$this->display();
	}
	
	/**
	 * 校长语录列表
	 */
	public function masterList(){
		$this->assign('schoolInfo',session('schoolInfo'));
		$this->assign('user',session('userInfo'));
		$this->assign('menulist',session('menulist'));
		$this->assign('catalogId','学校管理');
		$this->assign('funId','校长录');
	
		$schoolInfo=session('schoolInfo');
	
		$Article=M('Article');
		$masterCond['article_cataloge'] = 'master';
		$masterCond['article_school_id'] = $schoolInfo['school_id'];
		$masterList = $Article->where($masterCond)->select();
	
		$this->assign('masterList',$masterList);
		$this->display();
	}
	
	/**
	 * 校长语录信息
	 * @param number $id
	 */
	public function masterDetail($id=0){
		$this->assign('schoolInfo',session('schoolInfo'));
		$this->assign('user',session('userInfo'));
		$this->assign('menulist',session('menulist'));
		$this->assign('catalogId','学校管理');
		$this->assign('funId','校长录');
	
		if($id>0){
			$this->assign('action','edit');
			$Article=M('Article');  // 对应的文章信息
			$articleInfo=$Article->find($id);
			$this->assign('articleInfo',$articleInfo);
		}else{
			$this->assign('action','add');
		}
		$this->display();
	
	}
	
	/**
	 * 保存校长语录信息
	 */
	public function saveMaster(){
		$this->assign('schoolInfo',session('schoolInfo'));
		$this->assign('user',session('userInfo'));
		$this->assign('menulist',session('menulist'));
		$this->assign('catalogId','学校管理');
		$this->assign('funId','校长录');
	
		$schoolInfo = session('schoolInfo');
	
		$_POST = $_REQUEST;
		$dataArticle['article_id']=$_POST['article_id'];
		$dataArticle['article_cataloge']='master';
		$dataArticle['article_title']=$_POST['article_title'];
		$dataArticle['article_keyword']=$_POST['article_keyword'];
		$dataArticle['article_source']=$_POST['article_source'];
		$dataArticle['article_excerpt']=$_POST['article_excerpt'];
		$dataArticle['article_detail']=$_POST['article_detail'];
		$dataArticle['article_elite']=$_POST['article_elite'];
		$dataArticle['article_top']=$_POST['article_top'];
		$dataArticle['comment_status']=$_POST['comment_status'];
		$dataArticle['article_status']=$_POST['article_status'];
		$dataArticle['article_school_id'] = $schoolInfo['school_id'];
		$dataArticle['article_newsflag'] = '1';
	
		$Article = M('Article');
		$Article->create($dataArticle,2);
		if($_POST['action']=='edit'){
			$Article->save();
		}else{
			$articleInsId = $Article->add();
		}
		$this->success('修改成功！',U('masterList'));
	}
	
	/**
	 * 校长简介
	 */
	public function masterInfo(){
		$this->assign('schoolInfo',session('schoolInfo'));
		$this->assign('user',session('userInfo'));
		$this->assign('menulist',session('menulist'));
		$this->assign('catalogId','学校管理');
		$this->assign('funId','校长简介');
	
		$this->display();
	}
	
	public function saveMasterInfo(){
		
		$_POST = $_REQUEST;
		$schoolInfo = session('schoolInfo');
		
		$schoolInfo['master_name']=$_POST['master_name'];
		$schoolInfo['master_excerpt']=$_POST['master_excerpt'];
		$schoolInfo['master_record1']=$_POST['master_record1'];
		$schoolInfo['master_record2']=$_POST['master_record2'];
		$schoolInfo['master_record3']=$_POST['master_record3'];
		$schoolInfo['master_record4']=$_POST['master_record4'];
		
		
		$upload = new \Think\Upload();// 实例化上传类
		$upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
		$upload->rootPath  =     './Uploads/'; // 设置附件上传根目录
		$upload->savePath  =     ''; // 设置附件上传（子）目录
		// 上传文件
		$info   =   $upload->upload();
		if(!$info) {// 上传错误提示错误信息
			$this->error($upload->getError());
		}else{
			foreach($info as $file){
				$schoolInfo['master_photo']= $file['savepath'].$file['savename'];
				$schoolInfo['master_photoname']=$file['name'];
			}
		}
		
		
		
		$School = M('School');
		$School->create($schoolInfo,2);
		$School->save();

		session('schoolInfo',$schoolInfo);
		
		$this->success('修改成功！',U('masterInfo'));
	}
	
	//swfupload上传插件
	public function uploadImg() {
		
	}
}