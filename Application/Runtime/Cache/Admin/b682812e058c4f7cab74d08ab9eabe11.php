<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/online/Public/css/Admin/login.css"/>
    <title>用户登录-在线考试系统</title>
    <style>
        #content {
            width: auto;
            height: 28em;
            text-align: center;
            background-image: url(/online/Public/img/Admin/xgxt_login_bg.jpg);
            background-size: 100% 100%;
        }
    </style>
</head>
<body>

<div id="header">
    <div class="header_title">
        <span class="title_con">在线考试系统</span>
    </div>
</div>

<form id="content" action="/online/index.php/Admin/Admin/login_do" method="post">
    <center>
        <div class="con">
            <div class="con_title">
                <span class="con_title_sp">欢迎登录在线考试系统</span>
            </div>
            <div class="con_panel">
                <div class="con_input">
                    <span>用户名：</span><input type="text" name="username" placeholder="学号"/>
                </div>
                <div class="con_input">
                    <span>密&nbsp;&nbsp;&nbsp;&nbsp;码：</span><input type="password" name="password" placeholder="密码"/>
                </div>
                <div class="con_input">
                    <span>验证码：</span>
                    <input type="text" name="code" style="width: 80px;" />
                    <img id="" src="/online/index.php/Admin/Admin/verify" onclick="this.src=this.src+'?'+Math.random() "/>
                </div>
                <div class="con_select">
                    <input type="radio" name="t1" value="0"/>管理员
                    <input type="radio" name="t1" value="1"/>教师
                    <input type="radio" name="t1" value="2"/>学生
                </div>
                <input type="submit" value="登    录" class="submit-btn"/>
            </div>
        </div>
    </center>
</form>

</body>
</html>