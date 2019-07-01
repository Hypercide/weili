<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>添加用户</title>
	<meta name="renderer" content="webkit">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="format-detection" content="telephone=no">
	<link rel="stylesheet" href="__LAYUI__/layui/css/layui.css" media="all" />
	<link rel="stylesheet" href="__CSS__/user.css" media="all" />
</head>
<body class="childrenBody">
	<div class="layui-card">
		<div class="layui-card-body">
			<form class="layui-form" method="post" id="addUserform">
				<div class="user_left">
					<div class="layui-form-item">
						<label class="layui-form-label">用户名</label>
						<div class="layui-input-block">
							<input type="text" name="name" class="layui-input userame" lay-verify="required" placeholder="请输入姓名" id="name">
						</div>
					</div>
					<div class="layui-form-item">
					    <label class="layui-form-label">密码</label>
					    <div class="layui-input-block">
					    	<input type="password" name="password" value="" placeholder="请输入密码" lay-verify="required" class="layui-input pwd" id="pwd">
					    </div>
					</div>
					<div class="layui-form-item">
					    <label class="layui-form-label">确认密码</label>
					    <div class="layui-input-block">
					    	<input type="password" name="repwd" value="" placeholder="请再次输入密码" lay-verify="required" class="layui-input repwd" id="repwd">
					    </div>
					</div>
				</div>
				<div class="layui-form-item" style="margin-left: 5%;">
				    <div class="layui-input-block">
            			<button class="layui-btn reg" lay-submit="" lay-filter="reg">注册</button>
						<button type="reset" class="layui-btn layui-btn-primary">重置</button>
				    </div>
				</div>
			</form>
		</div>
	</div>
	<script type="text/javascript" src="__LAYUI__/layui/layui.js"></script>
	<script type="text/javascript" src="__JS__/user/userAdd.js"></script>
	<!-- <script type="text/javascript" src="/public/js/jquery-2.1.4.min.js"></script> -->
</body>
</html>