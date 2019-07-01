<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>重置我的密码</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="stylesheet" href="__LAYUI__/layui/css/layui.css" media="all">
    <link rel="stylesheet" href="__LAYUI__/style/admin.css" media="all">
</head>

<body>

    <div class="layui-fluid">
        <div class="layui-row layui-col-space15">
            <div class="layui-col-md12">
                <div class="layui-card">
                    <div class="layui-card-header">修改密码</div>
                    <div class="layui-card-body" pad15>
                        <form class="layui-form" method="post" id="addUserform">
                            <div class="layui-form" lay-filter="">
                                <div class="layui-form-item">
                                    <label class="layui-form-label">当前密码</label>
                                    <div class="layui-input-inline">
                                        <input type="password" name="oldpwd" lay-verify="required" lay-verType="tips" class="layui-input" id="oldpwd">
                                    </div>
                                </div>
                                <div class="layui-form-item">
                                    <label class="layui-form-label">新密码</label>
                                    <div class="layui-input-inline">
                                        <input type="password" name="password" lay-verify="required" lay-verType="tips" autocomplete="off" id="pwd" class="layui-input">
                                    </div>
                                </div>
                                <div class="layui-form-item">
                                    <label class="layui-form-label">确认新密码</label>
                                    <div class="layui-input-inline">
                                        <input type="password" name="repwd" lay-verify="repass" lay-verType="tips" autocomplete="off" class="layui-input" id="repwd">
                                    </div>
                                </div>
                                <div class="layui-form-item">
                                    <div class="layui-input-block">
                                        <button class="layui-btn .savepwd" lay-submit lay-filter="savepwd">确认修改</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="__LAYUI__/layui/layui.js"></script>
    <script type="text/javascript" src="__JS__/user/editpwd.js"></script>
    
</body>

</html>