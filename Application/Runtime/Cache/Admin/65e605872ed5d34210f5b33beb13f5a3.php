<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
<table>
	<thead>
		<tr>
			<th>用户ID</th>
			<th>用户姓名</th>
		</tr>
		
	</thead>
	<tbody>
		<?php if(is_array($user)): $i = 0; $__LIST__ = $user;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
				<td><?php echo ($vo["user_id"]); ?></td>
				<td><?php echo ($vo["user_name"]); ?></td>
			</tr><?php endforeach; endif; else: echo "" ;endif; ?>
	</tbody>
</table>

</body>
</html>