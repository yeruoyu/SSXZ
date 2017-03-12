<?php
namespace Home\Controller;

use Think\Controller;
use Think\Page;
class ActivityController extends Controller {
	public function index(){
	
	}
	
	public function findActivityDays($schoolId=0){
		$Activity = M('Activity');
		
		$activityCond="school_id=".$schoolId." and activity_status=2";
		
		$activityList = $Activity->where($activityCond)->
		field('distinct(activity_startdate) activity_startdate')->
		order('activity_id')->
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
	
	public function findActivitys($schoolId=0){
		$Activity = M('Activity');
		
		$activityCond="school_id=".$schoolId." and activity_status=2";
		
		$activityList = $Activity->where($activityCond)->
		field('activity_id,activity_address,activity_title,activity_detail,school_name,activity_startdate,activity_enddate,activity_status')->
		order('activity_id')->
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
}