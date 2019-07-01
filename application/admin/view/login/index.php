<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>后台登录</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" href="__LAYUI__/layui/css/layui.css">
    <link rel="stylesheet" href="__CSS__/login.css">
    <link rel="icon" href="/public/images/code.png">
    <script src="__JS__/background/three.min.js" type="text/javascript"></script>
</head>
<body>
<div class="login-main">
    <header class="layui-elip">为力后台管理系统</header>
    <form class="layui-form" method="post" id="loginform">
        <div class="layui-input-inline">
            <input type="text" name="name" id="name" required lay-verify="required" placeholder="用户名" autocomplete="off" class="layui-input">
        </div>
        <div class="layui-input-inline">
            <input type="password" name="password" id="password" required lay-verify="required" placeholder="密码" autocomplete="off" class="layui-input">
        </div>
        <div class="layui-input-inline login-btn">
            <button class="layui-btn" lay-submit="" lay-filter="check">登录</button>
        </div>
        <!-- <hr/> -->
        <!--<div class="layui-input-inline">
            <button type="button" class="layui-btn layui-btn-primary">QQ登录</button>
        </div>
        <div class="layui-input-inline">
            <button type="button" class="layui-btn layui-btn-normal">微信登录</button>
        </div>-->
        <!-- <p><a href="?>" class="fl">立即注册</a><a href="javascript:;" class="fr">忘记密码？</a></p> -->
    </form>
</div>
<script src="__JS__/background/wallbgcanvas.js" type="text/javascript"></script>
<script src="__LAYUI__/layui/layui.js"></script>
<!-- <script src="js/jquery-2.1.4.min.js"></script> -->
<script type="text/javascript">
    layui.use(['layer','form'], function(){
        var $ = layui.jquery //由于layer弹层依赖jQuery，所以可以直接得到
        ,layer = layui.layer;
        var form = layui.form;

        form.on('submit(check)', function(data){
            var _this = $(this);
            $(this).text("登录中...").prop("disabled", true).addClass("layui-disabled");
            var temp=$("#loginform").serialize();
            console.log(temp);
            $.ajax({
                type:"POST",
                url:"{:url('admin/login/logincheck')}",
                data:temp,
                // contentType: 'application/json',
                dataType:"json",
                success: function(msg){
                    var temp = JSON.stringify(msg);
                    console.log(temp);
                    if (msg.digit==1){
                        layer.alert("用户名或密码错误");
                        _this.text("登录").prop("disabled", false).removeClass("layui-disabled");
                    }
                    else if (msg.digit==2){
                        window.location.href="{:url('admin/homepage/index')}";
                    }
                }
            });
            return false;
        });
    });
</script>
</body>
</html>