<?php
namespace Admin\Controller;
use Think\Controller;

class ProjectController extends CommonController {
	
	public function projectList($start=0,$pagesize=10){
		$login = session('userInfo');
		$this->assign('user',$login);
		$menulist =session('menulist');
		$this->assign('menulist',$menulist);
	
		$this->assign('catalogId','招生信息');
		$this->assign('funId','招生信息列表');
		$this->assign('start',$start);
		$this->assign('pagesize',$pagesize);
		$this->display();
	}
	
	public function projectListQuery(){
		$login = session('userInfo');
		$this->assign('user',$login);
		
		$Project = M('Project');
		
		$projectCond="(school_name like '%".str_replace("'","",$_REQUEST['sSearch'])."%'"
				." or level_name like '%".str_replace("'","",$_REQUEST['sSearch'])."%')";

		
		$projectOrder = 'project_id desc';
		if($_POST['iSortCol_0']=='0'){
			$projectOrder ='project_id';
		}
		if($_POST['iSortCol_0']=='1'){
			$projectOrder ='level_id';
		}
		if($_POST['iSortCol_0']=='2'){
			$projectOrder ='school_name';
		}
		if($_POST['iSortCol_0']=='3'){
			$projectOrder ='status';
		}
		
		$projectCount =$Project->where($projectCond)->count();

			
		$projectList = $Project->where($projectCond)->
		field('project_id,level_id,school_name,status')->
		order($projectOrder)->
		limit($_POST['iDisplayStart'],$_POST['iDisplayLength'])->select();
		$sql = $Project->getLastSql();
		$sEcho = $_POST['sEcho'];
			
		if($projectList ==null){
			$projectList= Array();
		}
		
		$_res['data'] = $projectList;
		$_res['sEcho'] = $sEcho;
		$_res['recordsTotal'] = $projectCount;
		$_res['recordsFiltered'] = $projectCount;
		$_res['sql']=$sql;
		$this->ajaxReturn($_res);
	}
	
	public function projectDetail($id=-1,$edit=false,$start=0,$pagesize=10){
		$userInfo = session('userInfo');
		$this->assign('user',$userInfo);
		$menulist =session('menulist');
		$this->assign('menulist',$menulist);
		$this->assign('catalogId','项目管理');
		$this->assign('funId','新增项目');
	
		if($id==-1){
			$title="新增项目";
			$this->assign('action','add');
		}else{
			if($edit){
				$title="修改项目";
				$this->assign('action','edit');
			}else{
				$title="项目信息";
				$this->assign('action','view');
			}
		}
	
		$this->assign('start',$start);
		$this->assign('pagesize',$pagesize);
		$this->assign('title',$title);
		$this->assign('projectId',$id);
		$Project = M('Project');
		$projectCond['project_id']=$id;
		$projectInfo = $Project->find($id);
		$this->assign('projectInfo',$projectInfo);
	
		//  学校信息
		$School = D('School');
		$schoolCond['school_status']=1;
		$schoolList= $School->where($schoolCond)->select();
		$this->assign('schoolList',$schoolList);
		
		// 级别信息
		$Level = D('Level');
		$levelList= $Level->select();
		$this->assign('levelList',$levelList);
		$this->display();
	}
	
	public function projectSave(){
		$start = $_POST['start'];
		$pagesize = $_POST['pagesize'];

		$Project = M('Project');
		
		$projectInfo = $_POST;
		
		$Level = M('Level');
		$levelInfo = $Level->find($_POST['level_id']);

		$School = M('School');
		$schoolInfo = $School->find($_POST['school_id']);
		
		$projectInfo['school_name'] = $schoolInfo['school_name'];
		$projectInfo['level_name'] = $levelInfo['level_name'];
		
		if($_POST['action']=='edit'){
			$Project->create($projectInfo,2);
			$result = $Project->save();
			if ( false !== $result ){
				$this->success('保存成功',U('projectList',array('start'=>$start,'pagesize'=>$pagesize)),1);
			}else{
				$this->error('保存失败',U('projectList',array('start'=>$start,'pagesize'=>$pagesize)),1);
			}
		}else{
			$validCond['level_id'] = $_POST['level_id'];
			$validCond['school_id'] = $_POST['school_id'];
			$validInfo =  $Project->where($validCond)->find();
			if(isset($validInfo)){
				$this->error('保存失败,已经存在相同学校、相同等级的记录',U('projectList',array('start'=>$start,'pagesize'=>$pagesize)),1);
			}
			$Project->create($projectInfo,2);
			$projectInsId = $Project->add();
		
			if ((isset($projectInsId))){
				$this->success('保存成功',U('projectList',array('start'=>$start,'pagesize'=>$pagesize)),1);
			}else{
				$this->error('保存失败',U('projectList',array('start'=>$start,'pagesize'=>$pagesize)),1);
			}
		}
	}
}