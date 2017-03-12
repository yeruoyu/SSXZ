<?php
namespace Admin\Controller;
use Think\Controller;
class StudyGroupController extends CommonController {
	/**
	 * 学习小组信息列表
	 */
	public function studyGroupList($start=0,$pagesize=10){
		$login = session('userInfo');
		$this->assign('user',$login);
		$menulist =session('menulist');
		$this->assign('menulist',$menulist);
		$this->assign('catalogId','学习小组管理');
		$this->assign('funId','学习小组列表');
		$this->assign('start',$start);
		$this->assign('pagesize',$pagesize);
	
		$this->display();
	}
	
	/**
	 * 查询数据信息(AJAX)
	 */
	public function studyGroupListQuery(){
		$login = session('userInfo');
		$this->assign('user',$login);
	
		$School = M('School');
		$schoolCond['school_name']=array('like','%'.$_POST['sSearch'].'%');
		$schoolCond['group_flag'] = 1;
		
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
			$schoolOrder ='school_status';
		}
		
		$schoolCount =$School->where($schoolCond)->count();
		$schoolList = $School->field('school_id,school_name,school_attention,school_comments,school_isnew,school_status')->where($schoolCond)->
		order($schoolOrder.' '.$_POST['sSortDir_0'])->
		limit($_POST['iDisplayStart'],$_POST['iDisplayLength'])->select();
		$sEcho = $_POST['sEcho'];
		
		$_res['data'] = $schoolList;
		$_res['sEcho'] = $sEcho;
		$_res['recordsTotal'] = $schoolCount;
		$_res['recordsFiltered'] = $schoolCount;

		$this->ajaxReturn($_res);
	}
	
	/**
	 * 学习小组信息
	 * @param number $id
	 * @param string $edit
	 * @param number $start
	 * @param number $pagesize
	 */
	public function studyGroupDetail($id=0,$edit=false,$start=0,$pagesize=10){
		$login = session('userInfo');
		$this->assign('user',$login);
		$title="";
	
		$this->assign('catalogId','学习小组管理');
		$this->assign('funId','新增学习小组');
	
		$menulist =session('menulist');
		$this->assign('menulist',$menulist);
			
		if($id==0){
			$title="新增学习小组";
			$this->assign('action','add');
		}else{
			if($edit){
				$title="修改学习小组";
				$this->assign('action','edit');
			}else{
				$title="学习小组信息";
				$this->assign('action','view');
			}
		}
	
		$Area = M('Area');
		$areaList = $Area->order('area_id')->select();
		$this->assign('areaList',$areaList);
	
		$School = M('School');
		$schoolInfo = $School->find($id);
		$this->assign('schoolInfo',$schoolInfo);

		$this->assign('title',$title);
		$this->assign('start',$start);
		$this->assign('pagesize',$pagesize);
	
		$this->display();
	}
	
	/**
	 * 保存学习小组信息
	 */
	public function studyGroupSave(){
		$_POST = $_REQUEST;
	
		$start = $_POST['start'];
		$pagesize = $_POST['pagesize'];
	
		$Area = M('Area');
		$areaId['area_id'] = $_POST['school_area'];
		$areaInfo = $Area->where($areaId)->find();;
		// 学习小组介绍
		$_data['school_id'] = $_POST['school_id'];	// 学习小组ID
		$_data['school_name'] = $_POST['school_name']; // 学习小组名称
		$_data['school_coursename'] = $_POST['school_coursename']; // 课程名称
		$_data['school_detail'] = $_POST['school_detail']; // 学习小组明细介绍
		$_data['school_step'] = $_POST['school_step']; // 学习小组阶段
		$_data['school_excerpt'] = $_POST['school_excerpt']; // 学习小组简介
		$_data['school_keyword'] = $_POST['school_keyword']; // 学习小组关键字
		// 联系信息
		$_data['school_address'] = $_POST['school_address']; // 学习小组地址
		$_data['school_phone'] = $_POST['school_phone']; // 学习小组电话
		$_data['school_area'] = $_POST['school_area']; // 学习小组地区
		$_data['school_areaname'] = $areaInfo['area_name']; // 学习小组地区名称
		$_data['school_map'] = $_POST['school_map']; // 学习小组地图坐标
		$_data['school_traffic'] = $_POST['school_traffic']; // 学习小组交通
		// 学习小组状态
		$_data['school_status'] = $_POST['school_status']; //学习小组状态
		$_data['school_sort'] = $_POST['school_sort']; // 学习小组排序字段
		$_data['school_attention'] = $_POST['school_attention']; // 学习小组受关注度
		$_data['school_isnew'] = $_POST['school_isnew']; // 是否是新增学校
		$_data['school_recommend'] = $_POST['school_recommend']; // 是否是推荐学校
		$_data['group_flag'] = 1; // 是否是学习小组 - 是
	
		// 学习小组Logo
		$upload = new \Think\Upload();// 实例化上传类
		$upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
		$upload->rootPath  =     './Uploads/'; // 设置附件上传根目录
		$upload->savePath  =     ''; // 设置附件上传（子）目录
		$info   =   $upload->upload();
		if(!$info) {// 上传错误提示错误信息
			//$this->error($upload->getError());
		}else{
			foreach($info as $file){
				$_data['school_photo']= $file['savepath'].$file['savename'];
				$_data['school_photoname']=$file['name'];
			}
		}
	
	
		$School = M('School');
		$School->create($_data,2);
		if($_POST['action']=='edit'){
			$result = $School->save();
			if ( false !== $result ){
	
				$this->success('保存成功',U('studyGroupList',array('start'=>$start,'pagesize'=>$pagesize)),1);
			}else{
				$this->error('保存失败',U('studyGroupList',array('start'=>$start,'pagesize'=>$pagesize)),1);
			}
		}else{
			$schoolInsId = $School->add();
			if ((isset($schoolInsId))){
				$this->success('保存成功',U('studyGroupList',array('start'=>$start,'pagesize'=>$pagesize)),1);
			}else{
				$this->error('保存失败',U('studyGroupList',array('start'=>$start,'pagesize'=>$pagesize)),1);
			}
		}
	}
	
	public function disableStudyGroup($id=0,$start=0,$pagesize=10){
		$School = M('School');
		$schoolInfo = $School->find($id);
		$schoolInfo['school_status']=0;
		$School->create($schoolInfo,2);
		$result = $School->save();
		if ( false !== $result ){
			$this->success('更新成功',U('studyGroupList',array('start'=>$start,'pagesize'=>$pagesize)),1);
		}else{
			$this->error('更新失败',U('studyGroupList',array('start'=>$start,'pagesize'=>$pagesize)),1);
		}
	}
	
	public function enableStudyGroup($id=0,$start=0,$pagesize=10){
		$School = M('School');
		$schoolInfo = $School->find($id);
		$schoolInfo['school_status']=1;
		$School->create($schoolInfo,2);
		$result = $School->save();
		if ( false !== $result ){
			$this->success('更新成功',U('studyGroupList',array('start'=>$start,'pagesize'=>$pagesize)),1);
		}else{
			$this->error('更新失败',U('studyGroupList',array('start'=>$start,'pagesize'=>$pagesize)),1);
		}
	}
}