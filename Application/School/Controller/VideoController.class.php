<?php
namespace School\Controller;
use Think\Controller;
/**
 * 视频Controller
 *
 */
class VideoController extends Controller {
	/**
	 * 校园视频列表
	 */
	public function videoList(){
		$this->assign('schoolInfo',session('schoolInfo'));
		$this->assign('user',session('userInfo'));
		$this->assign('menulist',session('menulist'));
		$this->assign('catalogId','视频');
		$this->assign('funId','校园视频');
		
		$schoolInfo=session('schoolInfo');
		
		$Video =M('Images');
		$videoCond['images_type'] = 2;
		$videoCond['images_school_id'] = $schoolInfo['school_id'];
		
		$videoList = $Video->where($videoCond)->select();
		$this->assign('videoList',$videoList);
		
		$this->display();
	}
	
	/**
	 * 校园视频信息
	 */
	public function videoDetail($id=0){
		$this->assign('schoolInfo',session('schoolInfo'));
		$this->assign('user',session('userInfo'));
		$this->assign('menulist',session('menulist'));
		$this->assign('catalogId','视频');
		$this->assign('funId','校园视频');
		
		if($id>0){
			$this->assign('action','edit');
		
			$Video=M('Images');
			$videoInfo = $Video->find($id);
			$this->assign('videoInfo',$videoInfo);
		}else{
			$this->assign('action','add');
		}
		
		$this->display();
	}
	
	/**
	 * 保存校园视频
	 */
	public function saveVideo(){
		$this->assign('schoolInfo',session('schoolInfo'));
		$this->assign('user',session('userInfo'));
		$this->assign('menulist',session('menulist'));
		$this->assign('catalogId','视频');
		$this->assign('funId','校园视频');
		$this->display();
	}
	
	/**
	 * 拍客列表
	 */
	public function shootList(){
		$this->assign('schoolInfo',session('schoolInfo'));
		$this->assign('user',session('userInfo'));
		$this->assign('menulist',session('menulist'));
		$this->assign('catalogId','视频');
		$this->assign('funId','拍客');

		$schoolInfo=session('schoolInfo');

		$Shoot =M('Images');
		$shootCond['images_type'] = 3;
		$shootCond['images_school_id'] = $schoolInfo['school_id'];

		$shootList = $Shoot->where($shootCond)->select();
		$this->assign('shootList',$shootList);
		$this->display();

	}

	/**
	 * 拍客信息
	 */
	public function shootDetail($id=0){
		$this->assign('schoolInfo',session('schoolInfo'));
		$this->assign('user',session('userInfo'));
		$this->assign('menulist',session('menulist'));
		$this->assign('catalogId','视频');
		$this->assign('funId',' 拍客');
		
		if($id>0){
			$this->assign('action','edit');
		
			$Shoot=M('Images');
			$shootInfo = $Shoot->find($id);
			$this->assign('shootInfo',$shootInfo);
		}else{
			$this->assign('action','add');
		}
		
		$this->display();
	}
	
	/**
	 * 保存拍客
	 */
	public function saveShoot(){
		$this->assign('schoolInfo',session('schoolInfo'));
		$this->assign('user',session('userInfo'));
		$this->assign('menulist',session('menulist'));
		$this->assign('catalogId','视频');
		$this->assign('funId',' 拍客');
		$this->display();
	}
}