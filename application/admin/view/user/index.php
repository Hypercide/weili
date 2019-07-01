<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>用户中心--DedsecAdmin</title>
	<meta name="renderer" content="webkit">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="format-detection" content="telephone=no">
	<link rel="stylesheet" href="__LAYUI__/layui/css/layui.css" media="all" />
	<link rel="stylesheet" href="__CSS__/public.css" media="all" />
</head>
<body class="childrenBody">
<form class="layui-form">
	<div class="layui-card">
		<div class="layui-card-header card-top">
			<form class="layui-form">
				<div class="layui-inline">
					<div class="layui-input-inline">
						<input type="text" class="layui-input searchVal" placeholder="请输入搜索的内容" />
					</div>
					<a class="layui-btn search_btn layui-btn-normal" data-type="reload">搜索</a>
				</div>
				<div class="layui-inline">
					<a class="layui-btn layui-btn-warm addUser_btn">添加用户</a>
				</div>
			</form>
		</div>
		<div class="layui-card-body">
			<table id="userList" lay-filter="userList"></table>
		</div>
	</div>

	<!--操作-->
	<script type="text/html" id="userListBar">
		<a class="layui-btn layui-btn-xs layui-btn-danger" lay-event="del">删除</a>
	</script>
</form>
<script type="text/javascript" src="__JS__/datechange.js"></script>
<script type="text/javascript" src="__LAYUI__/layui/layui.js"></script>
<script type="text/javascript" src="__JS__/user/userList.js"></script>
</body>
</html>