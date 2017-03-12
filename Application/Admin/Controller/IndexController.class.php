<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends CommonController {
    public function index(){
    	$login = session('userInfo');
    	$this->assign('user',$login);
    		
    	$menulist = session('menulist');
    	$this->assign('menulist',$menulist);

    		 
    	$School = D('School');
    	$schoolList = $School->order('school_status','school_sort')->select();
    	$this->assign('schoolList',$schoolList);
    		 
    	$this->display();
    }
}