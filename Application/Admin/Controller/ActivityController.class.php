<?php
namespace Admin\Controller;
use Think\Controller;
class ActivityController extends CommonController {
	
	public function activityList($start=0,$pagesize=10){
		$login = session('userInfo');
		$this->assign('user',$login);
		$menulist =session('menulist');
		$this->assign('menulist',$menulist);
		
		$this->assign('catalogId','活动管理');
		$this->assign('funId','活动列表');
		$this->assign('start',$start);
		$this->assign('pagesize',$pagesize);
		$this->display();
	}
	
	public function activityListQuery(){
		$login = session('userInfo');
		$this->assign('user',$login);
		
		$Activity = M('Activity');
		
		$activityCond="(activity_type like '%".str_replace("'","",$_REQUEST['sSearch'])."%'"
				." or activity_title like '%".str_replace("'","",$_REQUEST['sSearch'])."%'"
						." or school_name like '%".str_replace("'","",$_REQUEST['sSearch'])."%')";
		
		$activityOrder = 'activity_title desc';
		if($_POST['iSortCol_0']=='0'){
			$activityOrder ='activity_id';
		}
		if($_POST['iSortCol_0']=='1'){
			$activityOrder ='activity_type';
		}
		if($_POST['iSortCol_0']=='2'){
			$activityOrder ='activity_title';
		}
		if($_POST['iSortCol_0']=='3'){
			$activityOrder ='school_name';
		}
		if($_POST['iSortCol_0']=='4'){
			$activityOrder ='activity_status';
		}
		
		$activityCount =$Activity->where($activityCond)->count();
			
		$activityList = $Activity->where($activityCond)->
		field('activity_id,activity_type,activity_title,school_name,activity_startdate,activity_enddate,activity_status')->
		order($activityOrder.' '.$_POST['sSortDir_0'])->
		limit($_POST['iDisplayStart'],$_POST['iDisplayLength'])->select();
		$sql = $Activity->getLastSql();
		$sEcho = $_POST['sEcho'];
			
		if($activityList ==null){
			$activityList= Array();
		}
		
		$_res['data'] = $activityList;
		$_res['sEcho'] = $sEcho;
		$_res['recordsTotal'] = $activityCount;
		$_res['recordsFiltered'] = $activityCount;
		$_res['sql']=$sql;
		$this->ajaxReturn($_res);
	}
	
	public function activityDetail($id=-1,$edit=false,$start=0,$pagesize=10){
		$userInfo = session('userInfo');
		$this->assign('user',$userInfo);
		$menulist =session('menulist');
		$this->assign('menulist',$menulist);
		$this->assign('catalogId','活动管理');
		$this->assign('funId','新增活动');
	
		if($id==-1){
			$title="新增活动";
			$this->assign('action','add');
		}else{
			if($edit){
				$title="修改活动";
				$this->assign('action','edit');
			}else{
				$title="活动信息";
				$this->assign('action','view');
			}
		}
	
		$this->assign('start',$start);
		$this->assign('pagesize',$pagesize);
		$this->assign('title',$title);
		$this->assign('activityId',$id);
		$Activity = M('Activity');
		$activityCond['activity_id']=$id;
		$activityInfo = $Activity->find($id);
		$this->assign('activityInfo',$activityInfo);
	
		//  学校信息
		$School = D('School');
		$schoolCond['school_status']=1;
		$schoolList= $School->where($schoolCond)->select();
		$this->assign('schoolList',$schoolList);
		
		$this->display();
	}
	
	public function activitySave(){
		$start = $_POST['start'];
		$pagesize = $_POST['pagesize'];
	
		$Activity = M('Activity');
		
		$activityInfo = $_POST;
		
		$School = M('School');
		$schoolInfo = $School->find($_POST['school_id']);
		
		$activityInfo['school_name'] = $schoolInfo['school_name'];

		$Activity->create($activityInfo,2);
	
		if($activityInfo['action']=='edit'){
			$result = $Activity->save();
			if ( false !== $result ){
				$this->success('保存成功',U('activityList',array('start'=>$start,'pagesize'=>$pagesize)),1);
			}else{
				$this->error('保存失败',U('activityList',array('start'=>$start,'pagesize'=>$pagesize)),1);
			}
		}else{
			$activityInsId = $Activity->add();
	
			if ((isset($activityInsId))){
				$this->success('保存成功',U('activityList',array('start'=>$start,'pagesize'=>$pagesize)),1);
			}else{
				$this->error('保存失败',U('activityList',array('start'=>$start,'pagesize'=>$pagesize)),1);
			}
		}
	}
}