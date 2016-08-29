<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo ($title); ?></title>
    <link rel="stylesheet" href="/online/Public/css/Home/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap.min.css">
    <script type="text/javascript" src="/online/Public/js/Home/jquery.min.js"></script>
    <script type="text/javascript" src="/online/Public/js/Home/bootstrap.min.js"></script>
    <style>
        #footer {
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        #footer p{
            text-align: center;
            color: black;
        }
        @media screen and (max-width: 1000px) {
            #footer{
                position: static;
            }
        }
        .kong{
            height: 30px;;
        }
        td{
            text-align: center;
        }
    </style>
</head>
<body>
<div class="container-fluid">
    <div style="height: 80px; width: 100%; background-color: #d9edf7;"></div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="kong"></div>
            <div class="panel panel-default">
                <div class="panel-heading" style="text-align: center;font-size: 24px;">
                    修改密码
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" action="/online/index.php/Home/User/change_password_do" method="post">
                        <div class="form-group">
                            <label class="col-md-3 control-label">
                                旧密码
                            </label>
                            <div class="col-md-5">
                                <input type="password" name="old_password" class="form-control" placeholder="请输入旧密码">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">
                                新密码
                            </label>
                            <div class="col-md-5">
                                <input type="password" name="new_password" class="form-control" placeholder="请输入新密码">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">
                                重复密码
                            </label>
                            <div class="col-md-5">
                                <input type="password" name="new_password_re" class="form-control" placeholder="请再次输入新密码">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">

                            </label>
                            <div class="col-md-5">
                                <input type="submit" class="btn btn-info" value="提交">
                                <a class="btn btn-info" href="/online/index.php/Home/Index/index">返回</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>
<div id="footer">
    <div class="container-fluid">
        <p class="alert alert-info">Copyright© 2016 盛俊 版权所有</p>
    </div>
</div>
</body>
</html>