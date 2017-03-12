<?php
namespace Admin\Model;

use Think\Model;

class MyTopicModel extends ViewModel{
	public $viewFields = array(
			'article'=>array('article_id','article_title','article_cataloge','article_excerpt','article_status','topic_flag'),
			'user_article_attention'=>array('user_id', '_on'=>'article.article_id=user_article_attention.article_id'),
	);	
}