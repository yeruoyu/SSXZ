<?php
namespace Admin\Controller;
use Think\Controller;
class SchoolController extends CommonController {
	
	public function schoolList($start=0,$pagesize=10){
		$login = session('userInfo');
		$this->assign('user',$login);
		$this->assign('catalogId','学校管理');
		$this->assign('funId','学校列表');
    	$menulist =session('menulist');
    	$this->assign('menulist',$menulist);
    	$this->assign('start',$start);
    	$this->assign('pagesize',$pagesize);
		$this->display();
	}
	
	public function  schoolListQuery(){

		$School = D('School');
		//$schoolList = $School->order('school_status','school_sort')->select();
		//$this->assign('schoolList',$schoolList);
		
		$School = M('School');
		$schoolCond['school_name']=array('like','%'.$_POST['sSearch'].'%');
		$schoolCond['group_flag'] = 0;
		
		$schoolOrder = 'school_id desc';
		if($_POST['iSortCol_0']=='0'){
			$schoolOrder ='school_id';
		}
		if($_POST['iSortCol_0']=='1'){
			$schoolOrder ='school_name';
		}
		if($_POST['iSortCol_0']=='2'){
			$schoolOrder ='school_attention';
		}
		if($_POST['iSortCol_0']=='3'){
			$schoolOrder ='school_comments';
		}
		if($_POST['iSortCol_0']=='4'){
			$schoolOrder ='school_isnew';
		}
		if($_POST['iSortCol_0']=='5'){
			$schoolOrder ='school_status';
		}
		
		$schoolCount =$School->where($schoolCond)->count();
		$schoolList = $School->where($schoolCond)->
		field('school_id,school_name,school_attention,school_comments,school_isnew,school_status')->
		order($schoolOrder.' '.$_POST['sSortDir_0'])->
		limit($_POST['iDisplayStart'],$_POST['iDisplayLength'])->select();
		$sEcho = $_POST['sEcho'];
		$_res['data'] = $schoolList;
		$_res['sEcho'] = $sEcho;
		$_res['recordsTotal'] = $schoolCount;
		$_res['recordsFiltered'] = $schoolCount;

		$this->ajaxReturn($_res);
	}
	
	public function schoolDetail($id=0,$edit=false,$start=0,$pagesize=10){
		$login = session('userInfo');
		$this->assign('user',$login);
		$title="";
		
		$this->assign('catalogId','学校管理');
		$this->assign('funId','新增学校');
		
		$menulist =session('menulist');
    	$this->assign('menulist',$menulist);
			
		if($id==0){
			$title="新增学校";
			$this->assign('action','add');
		}else{
			if($edit){
				$title="修改学校";
				$this->assign('action','edit');
			}else{
				$title="学校信息";
				$this->assign('action','view');
			}
		}
		
		$Area = M('Area');
		$areaList = $Area->order('area_id')->select();
		$this->assign('areaList',$areaList);
		
		$School = M('School');
		$schoolInfo = $School->find($id);
		$this->assign('schoolInfo',$schoolInfo);
		
		
		// 课堂特色
// 		$Article = M('Article');
// 		$cond['article_cataloge']='feature';
// 		$cond['article_status']='1';
// 		$cond['article_school_id']=$schoolInfo['school_id'];
		
// 		$feature =$Article->where($cond)->find();
// 		$this->assign('feature',$feature);
				
		$this->assign('title',$title);
		$this->assign('start',$start);
		$this->assign('pagesize',$pagesize);
		
		$this->display();
	}
	
	/**
	 * 保存学校信息
	 */
	public function schoolSave(){
		$_POST = $_REQUEST;
		
		$start = $_POST['start'];
		$pagesize = $_POST['pagesize'];
		
		$Area = M('Area');
		$areaId['area_id'] = $_POST['school_area'];
		$areaInfo = $Area->where($areaId)->find();;
		// 学校介绍
		$_data['school_id'] = $_POST['school_id'];	// 学校ID
		$_data['school_name'] = $_POST['school_name']; // 学校名称
		$_data['school_coursename'] = $_POST['school_coursename1']
			.','.$_POST['school_coursename2']
			.','.$_POST['school_coursename3']
			.','.$_POST['school_coursename4']
			.','.$_POST['school_coursename5']
			.','.$_POST['school_coursename6']
			.','.$_POST['school_coursename7']
			.','.$_POST['school_coursename8']
			.','.$_POST['school_coursename9']
			.','.$_POST['school_coursename10']
			.','.$_POST['school_coursename11']
			; // 课程名称
		$_data['school_detail'] = $_POST['school_detail']; // 学校明细介绍
		$_data['school_step'] = $_POST['school_step']; // 学校阶段
		$_data['school_excerpt'] = $_POST['school_excerpt']; // 学校简介
		$_data['school_keyword'] = $_POST['school_keyword']; // 学校关键字
		// 联系信息
		$_data['school_address'] = $_POST['school_address']; // 学校地址
		$_data['school_phone'] = $_POST['school_phone']; // 学校电话
		$_data['school_area'] = $_POST['school_area']; // 学校地区
		$_data['school_areaname'] = $areaInfo['area_name']; // 学校地区名称
		$_data['school_map'] = $_POST['school_map']; // 学校地图坐标
		$_data['school_traffic'] = $_POST['school_traffic']; // 学校交通
		// 学校状态
		$_data['school_status'] = $_POST['school_status']; //学校状态
		$_data['school_sort'] = $_POST['school_sort']; // 学校排序字段
		$_data['school_attention'] = $_POST['school_attention']; // 学校受关注度
        $_data['school_isnew'] = $_POST['school_isnew']; // 是否是新增学校
        $_data['school_recommend'] = $_POST['school_recommend']; // 是否是推荐学校
        //$_data['school_comments'] = $_POST['school_comments']; // 点评数
		// 校长信息
		$_data['master_name'] = $_POST['master_name']; // 校长姓名
		$_data['master_excerpt'] = $_POST['master_excerpt']; // 校长简介
		$_data['master_record1'] = $_POST['master_record1']; // 校长履历1
		$_data['master_record2'] = $_POST['master_record2']; // 校长履历1
		$_data['master_record3'] = $_POST['master_record3']; // 校长履历1
		$_data['master_record4'] = $_POST['master_record4']; // 校长履历1

		// 课堂特色
		$_data['school_feature'] = $_POST['school_feature']; // 课堂特色
		
		
// 		$Article = M('Article');
// 		$aData['article_id'] =  $_POST['article_id'];
// 		$aData['article_cataloge']='feature';
// 		$aData['article_status']='1';
// 		$aData['article_detail'] = $_POST['feature_info'];
// 		$Article->create($aData,2);
// 		if(isset($aData['article_id'])){
// 			$result = $Article->save();
// 			if( false == $result){
// 				$this->error('课堂特色保存失败');
// 			}
// 		}else{
// 			$articleId = $Article->add();
// 			if( isset($articleId)==false){
// 				$this->error('课堂特色保存失败');
// 			}
// 		}
		
		// 学校Logo
		$upload = new \Think\Upload();// 实例化上传类
		$upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
		$upload->rootPath  =     './Uploads/'; // 设置附件上传根目录
		$upload->savePath  =     ''; // 设置附件上传（子）目录
		$info   =   $upload->upload();
		if(!$info) {// 上传错误提示错误信息
			//$this->error($upload->getError());
		}else{
			$index = 0;
			foreach($info as $file){
				if($index==0){
					$_data['school_photo']= $file['savepath'].$file['savename'];
					$_data['school_photoname']=$file['name'];
				}else{
					$_data['master_photo'] = $file['savepath'].$file['savename']; // 校长照片
					$_data['master_photoname'] = $file['name']; // 校长照片名称
				}
				$index=$index+1;
			}
		}
		
		
		$School = M('School');
		$School->create($_data,2);
		if($_POST['action']=='edit'){
			$result = $School->save();
			if ( false !== $result ){
				
				$this->success('保存成功',U('schoolList',array('start'=>$start,'pagesize'=>$pagesize)),1);
			}else{
				$this->error('保存失败',U('schoolList',array('start'=>$start,'pagesize'=>$pagesize)),1);
			}
		}else{
			$schoolInsId = $School->add();
			if ((isset($schoolInsId))){
				$this->success('保存成功',U('schoolList',array('start'=>$start,'pagesize'=>$pagesize)),1);
			}else{
				$this->error('保存失败',U('schoolList',array('start'=>$start,'pagesize'=>$pagesize)),1);
			}
		}
		
	}
	
	public function disableSchool($id=0,$start=0,$pagesize=10){
		$School = M('School');
		$schoolInfo = $School->find($id);
		$schoolInfo['school_status']=0;
		$School->create($schoolInfo,2);
		$result = $School->save();
		if ( false !== $result ){
			$this->success('更新成功',U('schoolList',array('start'=>$start,'pagesize'=>$pagesize)),1);
		}else{
			$this->error('更新失败',U('schoolList',array('start'=>$start,'pagesize'=>$pagesize)),1);
		}
	}
	
	public function enableSchool($id=0,$start=0,$pagesize=10){
		$School = M('School');
		$schoolInfo = $School->find($id);
		$schoolInfo['school_status']=1;
		$School->create($schoolInfo,2);
		$result = $School->save();
		if ( false !== $result ){
			$this->success('更新成功',U('schoolList',array('start'=>$start,'pagesize'=>$pagesize)),1);
		}else{
			$this->error('更新失败',U('schoolList',array('start'=>$start,'pagesize'=>$pagesize)),1);
		}
	}
}