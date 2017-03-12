<?php
namespace Admin\Controller;
use Think\Controller;
class BannerController extends CommonController {

	public function bannerList($start=0,$pagesize=10){
		$login = session('userInfo');
		$this->assign('user',$login);
		$menulist =session('menulist');
		$this->assign('menulist',$menulist);
		
		$this->assign('catalogId','Banner管理');
		$this->assign('funId','Banner列表');
		$this->assign('start',$start);
		$this->assign('pagesize',$pagesize);
		$this->display();
	}
	
	public function bannerListQuery(){
		$login = session('userInfo');
		$this->assign('user',$login);
		
		$Banner = M('Banner');
		
		$bannerCond="(banner_title like '%".str_replace("'","",$_REQUEST['sSearch'])."%')";
		
 		$bannerCount =$Banner->where($bannerCond)->count();
 		$bannerOrder = 'banner_type,banner_status desc,banner_id desc';
 		
 		$bannerList = $Banner->where($bannerCond)->
 			field('banner_id,banner_type,banner_title,banner_path,banner_select,banner_first,banner_status')->
 			order($bannerOrder)->
 			limit($_POST['iDisplayStart'],$_POST['iDisplayLength'])->select();
 		$sql = $Banner->getLastSql();
 		$sEcho = $_POST['sEcho'];
 		
		if($bannerList ==null){
			$bannerList= Array();
		}
		
 		$_res['data'] = $bannerList;
 		$_res['sEcho'] = $sEcho;
 		$_res['recordsTotal'] = $bannerCount;
 		$_res['recordsFiltered'] = $bannerCount;
 		$_res['sql']=$sql;
		$this->ajaxReturn($_res);
	}
	
	
	public function bannerDetail($id=-1,$edit=false,$start=0,$pagesize=10){
		$userInfo = session('userInfo');
		$this->assign('user',$userInfo);
		$menulist =session('menulist');
		$this->assign('menulist',$menulist);
		$this->assign('catalogId','Banner管理');
		$this->assign('funId','新增Banner');
	
		if($id==-1){
			$title="新增Banner";
			$this->assign('action','add');
		}else{
			if($edit){
				$title="修改Banner";
				$this->assign('action','edit');
			}else{
				$title="Banner信息";
				$this->assign('action','view');
			}
		}
	
		$this->assign('start',$start);
		$this->assign('pagesize',$pagesize);
		$this->assign('title',$title);
		$this->assign('bannerId',$id);
		$Banner = M('Banner');
		$bannerCond['banner_id']=$id;
		$bannerInfo = $Banner->find($id);
		$this->assign('bannerInfo',$bannerInfo);
	
		//  学校信息
		$School = D('School');
		$schoolCond['school_status']=1;
		$schoolList= $School->where($schoolCond)->select();
		$this->assign('schoolList',$schoolList);	
		$this->display();
	}
}