<?php
namespace Admin\Controller;
use Think\Controller;
class TeacherController extends CommonController {
	
	/**
	 * 教师信息列表
	 */
	public function teacherList($start=0,$pagesize=10){
		$login = session('userInfo');
		$this->assign('user',$login);
		$menulist =session('menulist');
		$this->assign('menulist',$menulist);
		$this->assign('catalogId','教师管理');
		$this->assign('funId','教师列表');
		$this->assign('start',$start);
		$this->assign('pagesize',$pagesize);

		$this->display();
	}
	
	/**
	 * 查询数据信息(AJAX)
	 */
	public function teacherListQuery(){
		$login = session('userInfo');
		$this->assign('user',$login);
		
		$Vteacher = M('Vteacher');
		$teacherCond['teacher_name']=array('like','%'.$_POST['sSearch'].'%');
		$teacherCond['school_name']=array('like','%'.$_POST['sSearch'].'%');
		$teacherCond['_logic'] = 'OR';
		
		$teacherOrder = 'teacher_name desc';
		if($_POST['iSortCol_0']=='0'){
			$teacherOrder ='teacher_id';
		}
		if($_POST['iSortCol_0']=='1'){
			$teacherOrder ='teacher_name';
		}
		if($_POST['iSortCol_0']=='2'){
			$teacherOrder ='teacher_type';
		}
		if($_POST['iSortCol_0']=='3'){
			$teacherOrder ='school_name';
		}
		if($_POST['iSortCol_0']=='4'){
			$teacherOrder ='teacher_status';
		}
		$teacherCount =$Vteacher->where($teacherCond)->count();
		$teacherList = $Vteacher->where($teacherCond)->
		field('teacher_id,teacher_name,teacher_type,school_name,teacher_status')->
		order($teacherOrder.' '.$_POST['sSortDir_0'])->
		limit($_POST['iDisplayStart'],$_POST['iDisplayLength'])->select();
		$sEcho = $_POST['sEcho'];
		
		$_res['data'] = $teacherList;
		$_res['sEcho'] = $sEcho;
		$_res['recordsTotal'] = $teacherCount;
		$_res['recordsFiltered'] = $teacherCount;
		$this->ajaxReturn($_res);
		
	}
	
	/**
	 * 显示文章明细信息
	 * @param number $id
	 * @param string $edit
	 */
	public function teacherDetail($id=0,$edit=false,$start=0,$pagesize=10){
		$userInfo = session('userInfo');
		$this->assign('user',$userInfo);
		$menulist =session('menulist');
    	$this->assign('menulist',$menulist);
		$this->assign('catalogId','教师管理');
		$this->assign('funId','新增教师');
		
		if($id==0){
			$title="新增教师";
		}else{
			if($edit){
				$title="修改教师";
			}else{
				$title="教师信息";
			}
		}
		$this->assign('start',$start);
		$this->assign('pagesize',$pagesize);
		$this->assign('title',$title);
		
		$Teacher = M('Teacher');
		$teacherCond['teacher_id']=$id;
		$teacherInfo = $Teacher->find($id);
		$this->assign('teacherInfo',$teacherInfo);
		
		//  学校信息
		$School = D('School');
		$schoolCond['school_status']=1;
		$schoolList= $School->where($schoolCond)->select();
		$this->assign('schoolList',$schoolList);

		$this->display();
	}
	
	/**
	 * 保存教师变更信息
	 */
	public function teacherSave(){
		$_POST = $_REQUEST;
		
		$start = $_POST['start'];
		$pagesize = $_POST['pagesize'];
		
		// 教师信息
		$_data['teacher_id'] = $_POST['teacher_id'];	// 教师ID
		$_data['teacher_name'] = $_POST['teacher_name']; // 教师姓名
		$_data['teacher_school_id'] = $_POST['teacher_school_id']; // 教师所属学校
		$_data['teacher_introduction'] = $_POST['teacher_introduction']; // 教师介绍
		$_data['teacher_tag'] = $_POST['teacher_tag']; // 教师关键字
		$_data['teacher_school'] = $_POST['teacher_school']; // 毕业学校
		$_data['teacher_status'] = $_POST['teacher_status']; // 教师状态
		$_data['teacher_type'] = $_POST['teacher_type']; // 教师类型
		
		// 教师照片
		$upload = new \Think\Upload();// 实例化上传类
		$upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
		$upload->rootPath  =     './Uploads/'; // 设置附件上传根目录
		$upload->savePath  =     ''; // 设置附件上传（子）目录
		$info   =   $upload->upload();
		if(!$info) {// 上传错误提示错误信息
			//$this->error($upload->getError());
		}else{
			foreach($info as $file){
					$_data['teacher_photo']= $file['savepath'].$file['savename'];
					$_data['teacher_photoname']=$file['name'];
			}
		}
		$Teacher = M('Teacher');
		$Teacher->create($_data,2);
		if($_POST['action']=='edit'){
			$result = $Teacher->save();
			if ( false !== $result ){
		
				$this->success('保存成功',U('teacherList',array('start'=>$start,'pagesize'=>$pagesize)),1);
			}else{
				$this->error('保存失败',U('teacherList',array('start'=>$start,'pagesize'=>$pagesize)),1);
			}
		}else{
			$teacherInsId = $Teacher->add();
			if ((isset($teacherInsId))){
				$this->success('保存成功',U('teacherList',array('start'=>$start,'pagesize'=>$pagesize)),1);
			}else{
				$this->error('保存失败',U('teacherList',array('start'=>$start,'pagesize'=>$pagesize)),1);
			}
		}
	}
	
	/**
	 * 关闭文章
	 * @param number $id
	 * @param number $start
	 * @param number $pagesize
	 */
	public function disableTeacher($id=0,$start=0,$pagesize=10){
		$Teacher = M('Teacher');
		$teacherInfo = $Teacher->find($id);
		$teacherInfo['teacher_status']=0;
		$Teacher->create($teacherInfo,2);
		$result = $Teacher->save();
		if ( false !== $result ){
			$this->success('更新成功',U('teacherList',array('start'=>$start,'pagesize'=>$pagesize)),1);
		}else{
			$this->error('更新失败',U('teacherList',array('start'=>$start,'pagesize'=>$pagesize)),1);
		}
	}
	
	/**
	 * 启用文章
	 * @param number $id
	 * @param number $start
	 * @param number $pagesize
	 */
	public function enableTeacher($id=0,$start=0,$pagesize=10){
		$Teacher = M('Teacher');
		$teacherInfo = $Teacher->find($id);
		$teacherInfo['teacher_status']=1;
		$Teacher->create($teacherInfo,2);
		$result = $Teacher->save();
		if ( false !== $result ){
			$this->success('更新成功',U('teacherList',array('start'=>$start,'pagesize'=>$pagesize)),1);
		}else{
			$this->error('更新失败',U('teacherList',array('start'=>$start,'pagesize'=>$pagesize)),1);
		}
	}
}