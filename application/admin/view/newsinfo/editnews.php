<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>修改新闻</title>
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
<form class="layui-form layui-row layui-col-space10" id='addNewsform'>
	<div class="layui-col-md9 layui-col-xs12">
		<div class="layui-card">
			<div class="layui-card-body">
				<div class="layui-row layui-col-space10">
					<div class="layui-col-md9">
						<!-- <div class="layui-form-item magt3">
							<label class="layui-form-label">课程号</label>
							<div class="layui-input-block">
								<input type="text" class="layui-input" name="course_id" id="course_id" lay-verify="required" placeholder="请输入课程号">
							</div>
						</div> -->
						<input type="hidden" name="id" value="{$news.id}">
						<div class="layui-form-item magt3">
							<label class="layui-form-label">新闻标题</label>
							<div class="layui-input-block">
								<input type="text" class="layui-input" name="title" lay-verify="required" placeholder="请输入新闻标题" id="title" value="{$news.title}">
							</div>
						</div>
					</div>
					<!-- <div class="layui-col-md3 layui-col-xs5">
						<div class="layui-upload-list thumbBox mag0 magt3">
							<p class="msg">上传图片</p>
							<img class="layui-upload-img thumbImg">
						</div>
						<input type="hidden" class="ListAction">
						<input type="hidden" class="isupload" value="">
						<input type="hidden" name="thumbnail" id="thumbnail" value="">
					</div> -->
				</div>
				<div class="layui-form-item magb0">
					<label class="layui-form-label">新闻内容</label>
					<div class="layui-input-block">
						<textarea class="layui-textarea layui-hide" name="content" lay-verify="content" id="content">{$news.content}</textarea>
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
					<div class="layui-form-item">
						<label class="layui-form-label"><i class="layui-icon layui-icon-tabs"></i> 新闻分类</label>
						<div class="layui-input-block newstype_block"></div>
						<input type="hidden" name="defaultnewstype" id="defaultnewstype" value="{$news.newstype}">
					</div>
					<div class="layui-form-item magt3">
						<label class="layui-form-label"><i class="layui-icon layui-icon-log"></i> 浏览数</label>
						<div class="layui-input-block">
							<input type="text" class="layui-input" name="viewcount" placeholder="默认为0" id="viewcount" value="{$news.viewcount}">
						</div>
					</div>
					<hr class="layui-bg-gray" />
					<div class="layui-right">
						<a class="layui-btn layui-btn-sm" id="addNews" lay-filter="addNews" lay-submit><i class="layui-icon">&#xe609;</i>发布</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>
<script type="text/javascript" src="__LAYUI__/layui/layui.js"></script>
<script type="text/javascript" src="__JS__/newsinfo/newsEdit.js"></script>
</body>
</html>