<?php
namespace Admin\Controller;
use Think\Controller;
class MenuController extends Controller {
	public function index(){
		$login = session('userInfo');
		$this->assign('user',$login);
		
		$Menu = D('Menu');
		$menlist =$Menu->where('fun_order')->select();
		$this->assign('menu',$menlist);
		$this->display();
	}
}