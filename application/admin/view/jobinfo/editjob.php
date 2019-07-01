<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>修改条目</title>
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
<form class="layui-form layui-row layui-col-space10" id='addJobform'>
	<div class="layui-col-md9 layui-col-xs12">
		<div class="layui-card">
			<div class="layui-card-body">
				<div class="layui-row layui-col-space10">
					<div class="layui-col-md9">
						<input type="hidden" name="id" value="{$job.id}">
						<div class="layui-form-item magt3">
							<label class="layui-form-label">招聘岗位</label>
							<div class="layui-input-block">
								<input type="text" class="layui-input" name="position" lay-verify="required" placeholder="必填" id="position" value="{$job.position}">
							</div>
						</div>
						<div class="layui-form-item magt3">
							<label class="layui-form-label">招聘部门</label>
							<div class="layui-input-block">
								<input type="text" class="layui-input" name="department" lay-verify="required" placeholder="必填" id="department" value="{$job.department}">
							</div>
						</div>
						<div class="layui-form-item magt3">
							<label class="layui-form-label">学历要求</label>
							<div class="layui-input-block">
								<input type="text" class="layui-input" name="education" lay-verify="required" placeholder="必填" id="education" value="{$job.education}">
							</div>
						</div>
						<div class="layui-form-item magt3">
							<label class="layui-form-label">岗位职责</label>
							<div class="layui-input-block">
								<input type="text" class="layui-input" name="duty" lay-verify="" placeholder="可不填" id="duty" value="{$job.duty}">
							</div>
						</div>
						
					</div>
				</div>
				<div class="layui-form-item magb0">
					<label class="layui-form-label">岗位要求</label>
					<div class="layui-input-block">
						<textarea class="layui-textarea layui-hide" name="requirement" lay-verify="content" id="requirement">{$job.requirement}</textarea>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="layui-col-md3 layui-col-xs12">
		<div class="layui-card">
			<div class="layui-card-header">
				<i class="layui-icon">&#xe609;</i> 发布
			</div>
			<div class="layui-card-body">
				<div class="border">
					<div class="layui-form-item magt3">
						<label class="layui-form-label"><i class="layui-icon layui-icon-log"></i> 预计薪资</label>
						<div class="layui-input-block">
							<input type="text" class="layui-input" name="payment" lay-verify="required" placeholder="必填" id="payment" value="{$job.payment}">
						</div>
					</div>
					<div class="layui-form-item magt3">
						<label class="layui-form-label"><i class="layui-icon layui-icon-log"></i> 福利待遇</label>
						<div class="layui-input-block">
							<input type="text" class="layui-input" name="treatment" placeholder="可不填" id="treatment" value="{$job.treatment}">
						</div>
					</div>
					<div class="layui-form-item magt3">
						<label class="layui-form-label"><i class="layui-icon layui-icon-log"></i> 招聘人数</label>
						<div class="layui-input-block">
							<input type="text" class="layui-input" name="number" lay-verify="required" placeholder="必填" id="number" value="{$job.number}">
						</div>
					</div>
					<hr class="layui-bg-gray" />
					<div class="layui-right">
						<a class="layui-btn layui-btn-sm" id="addJob" lay-filter="addJob" lay-submit><i class="layui-icon">&#xe609;</i>发布</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>
<script type="text/javascript" src="__LAYUI__/layui/layui.js"></script>
<script type="text/javascript" src="__JS__/jobinfo/jobEdit.js"></script>
</body>
</html>