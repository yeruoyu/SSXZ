<?php
namespace Admin\Model;

use Think\Model;

class VTopicModel extends ViewModel{
	public $viewFields = array(
			'article'=>array('article_id','article_title','article_cataloge','article_excerpt','article_status','topic_flag'),
			'user_article_attention'=>array('user_id', '_on'=>'article.article_id=user_article_attention.article_id'),
	);	
}

/*
		'article_id'
		'article_title'
		'article_cataloge'
		'article_school_id'
		'article_activity_id'
		'article_detail'
		'article_status'
		'article_sort'
		'article_top'
		'article_elite'
		'article_create_user'
		`article_create_time` datetime DEFAULT NULL COMMENT '创建日期',
		`article_update_user` int(11) DEFAULT NULL COMMENT '修改用户ID',
		`article_update_time` datetime DEFAULT NULL COMMENT '修改时间',
		`article_audit_user` int(11) DEFAULT NULL COMMENT '审核用户ID',
		`article_audit_time` datetime DEFAULT NULL COMMENT '审核日期',
		`article_keyword` varchar(200) DEFAULT NULL COMMENT '文章关键字',
		`article_teacher_id` int(11) DEFAULT NULL COMMENT '教师ID，用于对应教师发表的文章。',
		`article_mark` int(11) DEFAULT '0' COMMENT '文章收藏数',
		`article_read` int(11) DEFAULT '0' COMMENT '文章阅读数',
		`article_comment` int(11) DEFAULT '0' COMMENT '文章点评数',
		`article_category` varchar(45) DEFAULT NULL COMMENT '文章栏目:school-学校文章;news-咨询文章;activity-活动文章',
		`article_source` varchar(100) DEFAULT NULL COMMENT '文章来源',
		`article_excerpt` text COMMENT '文章摘要',
		`comment_status` int(2) DEFAULT '1' COMMENT '是否可以评论:1-是;2-否',
		`smeta` text COMMENT 'post的扩展字段，保存相关扩展属性，如缩略图；格式为json',
		`article_useful` int(11) DEFAULT NULL COMMENT '认为文章有用数量',
		`article_creator_name` varchar(100) DEFAULT NULL COMMENT '创建者姓名',
		'article_newsflag'
		'article_photo'
		'article_photoname'
		'article_subcataloge'
		'topic_flag'
		'all_top'
		'article_author'
*/