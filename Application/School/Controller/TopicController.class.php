<?php
namespace School\Controller;
use Think\Controller;
/**
 * 话题Controller
 *
 */
class TopicController extends Controller {
	/**
	 * 话题列表
	 */
	public function topicList(){
		$this->display();
	}
	
	/**
	 * 话题信息
	 * @param number $id
	 */
	public function topicDetail($id=0){
		$this->display();
	}
	
	/**
	 * 保存话题
	 */
	public function saveTopic(){
		$this->display();
	}
}