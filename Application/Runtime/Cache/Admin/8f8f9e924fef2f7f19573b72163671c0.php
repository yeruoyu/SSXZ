<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>莘莘学子</title>
	<link rel="stylesheet" type="text/css" href="/ssxz/Public/assets/css/fonts/linecons/css/linecons.css" />
	<link rel="stylesheet" type="text/css" href="/ssxz/Public/assets/css/fonts/fontawesome/css/font-awesome.min.css" />
	<link rel="stylesheet" type="text/css" href="/ssxz/Public/assets/css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="/ssxz/Public/assets/css/xenon-core.css" />
	<link rel="stylesheet" type="text/css" href="/ssxz/Public/assets/css/xenon-forms.css" />
	<link rel="stylesheet" type="text/css" href="/ssxz/Public/assets/css/xenon-components.css" />
	<link rel="stylesheet" type="text/css" href="/ssxz/Public/assets/css/xenon-skins.css" />
	<link rel="stylesheet" type="text/css" href="/ssxz/Public/assets/css/custom.css" />
	<script type="text/javascript" src="/ssxz/Public/assets/js/jquery-1.11.1.min.js"></script>
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body class="page-body">
	<div class="page-container">
		<div class="sidebar-menu toggle-others fixed expanded">

	<div class="sidebar-menu-inner">

		<header class="logo-env">

			<!-- logo -->
			<div class="logo">
				<a href="" class="logo-expanded">
					<h1 style="color: #FFF">莘莘学子</h1>
				</a> <a href="" class="logo-collapsed"> <span
					style="color: #FFF">XXSZ</span>
				</a>
			</div>
		</header>
		<ul id="main-menu" class="main-menu">
			<!-- add class "multiple-expanded" to allow multiple submenus to open -->
			<!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
			<?php if(is_array($menulist)): $index = 0; $__LIST__ = $menulist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($index % 2 );++$index; if(($vo["fun_level"] == 1) AND ($index == 1) ): if(($vo["fun_name"] == $catalogId)): ?><li class="opened active"><?php else: ?><li><?php endif; ?> <a href="/ssxz/admin.php<?php echo ($vo["fun_url"]); ?>"> <span class="title"><?php echo ($vo["fun_name"]); ?></span>
			</a>
			<ul>
				<?php elseif(($vo["fun_level"] == 1)): ?>
			</ul>
			</li>
			<?php if(($vo["fun_name"] == $catalogId)): ?><li class="opened active"><?php else: ?><li><?php endif; ?> <a href="/ssxz/admin.php<?php echo ($vo["fun_url"]); ?>"> <span class="title"><?php echo ($vo["fun_name"]); ?></span>
			</a>
			<ul>
				<?php elseif(($vo["fun_level"] == 2)): ?>
				<?php if(($vo["fun_name"] == $funId)): ?><li class="active"><?php else: ?><li><?php endif; ?>
				<a href="/ssxz/admin.php<?php echo ($vo["fun_url"]); ?>"> <span class="title"><?php echo ($vo["fun_name"]); ?></span>
				</a>
				</li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
		</ul>
		</li>
		</ul>
	</div>
</div>
		<div class="main-content">	
			<!-- User Info, Notifications and Menu Bar -->
<nav class="navbar user-info-navbar" role="navigation">

	<!-- Left links for user info navbar -->
	<ul class="user-info-menu left-links list-inline list-unstyled">

		<li class="hidden-sm hidden-xs"><a href="#" data-toggle="sidebar">
				<i class="fa-bars"></i>
		</a></li>
	</ul>
	<!-- Right links for user info navbar -->
	<ul class="user-info-menu right-links list-inline list-unstyled">
		<li class="dropdown user-profile"><a href="#"
			data-toggle="dropdown"> <img
				src="/ssxz/Public/assets/images/user-4.png" alt="user-image"
				class="img-circle img-inline userpic-32" width="28" /> <span>
					<?php echo ($user["user_name"]); ?> </span>
		</a></li>
	</ul>
</nav>
			<div class="page-title">
				<div class="breadcrumb-env">
					<ol class="breadcrumb bc-1">
						<li><i class="fa-home"></i>首页</li>
						<li>文章管理</li>
						<li class="active"><strong>文章列表</strong></li>
					</ol>		
				</div>
			</div>
			<!-- Content Panel -->
			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">文章列表</h3>
							<div style="float:right">
								<a href="/ssxz/admin.php/Article/articleDetail"  class="btn btn-success">添加文章</a>
							</div>
						</div>
						<div class="panel-body">
							<table class="table table-bordered table-striped" id="tb_article">
								<thead>
									<tr>
										<th>文章ID</th>
										<th>文章类型</th>
										<th>文章标题</th>
										<th>所属学校</th>
										<th>文章状态</th>
										<th>操作</th>
									</tr>
								</thead>
								<tbody class="middle-align">
									
								</tbody>
								<tfoot>
									<tr>
										<th>文章ID</th>
										<th>文章类型</th>
										<th>文章标题</th>
										<th>所属学校</th>
										<th>文章状态</th>
										<th>操作</th>
									</tr>
								</tfoot>
							</table>
						</div>
					</div>
				</div>
			</div>
			<footer class="main-footer sticky footer-type-1">
	<div class="footer-inner">
		<div class="go-up">
			<a href="#" rel="go-top"> <i class="fa-angle-up"></i>
			</a>
		</div>
	</div>
</footer>
		</div>
	</div>
</body>
	<!-- Bottom Scripts -->
	<script type="text/javascript" src="/ssxz/Public/assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="/ssxz/Public/assets/js/TweenMax.min.js"></script>
	<script type="text/javascript" src="/ssxz/Public/assets/js/resizeable.js"></script>
	<script type="text/javascript" src="/ssxz/Public/assets/js/joinable.js"></script>
	<script type="text/javascript" src="/ssxz/Public/assets/js/xenon-api.js"></script>
	<script type="text/javascript" src="/ssxz/Public/assets/js/xenon-toggles.js"></script>
	
	<link rel="stylesheet" type="text/css" href="/ssxz/Public/assets/js/datatables/dataTables.bootstrap.css" />
	<script type="text/javascript" src="/ssxz/Public/assets/js/datatables/js/jquery.dataTables.js"></script>

	<!-- Imported scripts on this page -->
	<script type="text/javascript" src="/ssxz/Public/assets/js/datatables/dataTables.bootstrap.js"></script>
	<!-- <script type="text/javascript" src="/ssxz/Public/assets/js/datatables/yadcf/jquery.dataTables.yadcf.js"></script> -->
	<!-- <script type="text/javascript" src="/ssxz/Public/assets/js/datatables/tabletools/dataTables.tableTools.min.js"></script> -->

	<!-- Imported scripts on this page -->
	<!-- <script type="text/javascript" src="/ssxz/Public/assets/js/rwd-table/js/rwd-table.min.js"></script> -->

	<!-- JavaScripts initializations and stuff -->
	<script type="text/javascript" src="/ssxz/Public/assets/js/xenon-custom.js"></script>
	
	<script type="text/javascript">
		jQuery(document).ready(function($)
		{
			var oTable = $("#tb_article").dataTable({
					aLengthMenu: [
								[10, 25, 50, 100], [10, 25, 50, 100]
							],
				iDisplayLength:<?php echo ($pagesize); ?>,
				displayStart:<?php echo ($start); ?>,
				bPaginate: true,
				bProcessing:true, //DataTables载入数据时，是否显示‘进度’提示
	            bServerSide:true, //是否启动服务器端数据导入
				sPaginationType:"full_numbers",
				bLengthChange: true, //改变每页显示数据数量
				bFilter: true, //过滤功能
				bSort: true, //排序功能
				bInfo: true,//页脚信息
				bFilter:true,
				sZeroRecords: "抱歉， 没有找到",
				sInfoEmpty: "没有数据",
				sAjaxSource: "/ssxz/admin.php/Article/articleListQuery",
				fnServerData: function (sSource, data, fnCallback) {
					$.ajax( {
					dataType: 'json',
					type: "POST",
					url: sSource,
					data: data,
					success: function(resp) {
			            fnCallback(resp);
					}  
					} );
				},
				aoColumns: [
					{"mData" : "article_id","asSorting": [ "desc", "asc", "desc" ] },
					{"mData" : "cataloge_name"},
					{"mData" : "article_title"},
					{"mData" : "school_name"},
					{"mData" : "article_status"},
					{"mData" : "article_id"}
				],
				columnDefs: [
				               {
				                   "render": function ( data, type, row ) {
				                	   if(data==1){
				                		   return '发布';
				                	   }else if(data==0){
				                		   return '未发布';
				                	   }else if(data==-1){
				                		   return '已删除';
				                	   }else if(data==3){
				                		   return '已下架';
				                	   }else{
				                		   return  data;
				                	   }
				                      
				                   },
				                   "targets": 4
				               },
				               {
				                   "render": function ( data, type, row) {
				
										if(row['article_status']==1){
											return '<a href="/ssxz/admin.php/Article/articleDetail/id/'+data+'/edit/true/start/'+oTable.fnSettings()._iDisplayStart+'/pagesize/'+oTable.fnSettings()._iDisplayLength+'" class="btn btn-secondary btn-sm btn-icon icon-left">编辑</a> <a href="/ssxz/admin.php/Article/disableArticle/id/'+data+'/start/'+oTable.fnSettings()._iDisplayStart+'/pagesize/'+oTable.fnSettings()._iDisplayLength+'" class="btn btn-secondary btn-sm btn-icon icon-left">无效</a>';
										}else{
											return '<a href="/ssxz/admin.php/Article/articleDetail/id/'+data+'/edit/true/start/'+oTable.fnSettings()._iDisplayStart+'/pagesize/'+oTable.fnSettings()._iDisplayLength+'" class="btn btn-secondary btn-sm btn-icon icon-left">编辑</a> <a href="/ssxz/admin.php/Article/enableArticle/id/'+data+'/start/'+oTable.fnSettings()._iDisplayStart+'/pagesize/'+oTable.fnSettings()._iDisplayLength+'" class="btn btn-secondary btn-sm btn-icon icon-left">有效</a>';
										}
				                   },
				                   "targets": 5
				               },
				               { "bVisible": false, "aTargets": [ 0 ] }
				           ],
				
				oLanguage: {  //下面是一些汉语翻译
	                            "sSearch": "搜索",
	                            "sLengthMenu": "每页显示 _MENU_ 条记录",
	                            "sZeroRecords": "没有检索到数据",
	                            "sInfo": "显示 _START_ 至 _END_ 条 &nbsp;&nbsp;共 _TOTAL_ 条",
	                            "sInfoFiltered": "(筛选自 _MAX_ 条数据)",
	                            "sInfoEmtpy": "没有数据",
	                            "sProcessing": "正在加载数据...",
	                            "oPaginate":
	                                    {
	                                        "sFirst": "首页",
	                                        "sPrevious": "前一页",
	                                        "sNext": "后一页",
	                                        "sLast": "末页"
	                                    }
	                        },
			});
		});
	</script>
</html>