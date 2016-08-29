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
                    个人信息
                </div>
                <div class="panel-body">
                    <table class="table table-bordered">
                        <caption style="color:red;">如个人信息有误，请与老师联系</caption>
                        <tbody>
                            <tr>
                                <td>学号</td>
                                <td><?php echo ($list['username']); ?></td>
                            </tr>
                            <tr>
                                <td>姓名</td>
                                <td><?php echo ($list['name']); ?></td>
                            </tr>
                            <tr>
                                <td>年龄</td>
                                <td><?php echo ($list['age']); ?></td>
                            </tr>
                            <tr>
                                <td>性别</td>
                                <td><?php echo ($sex); ?></td>
                            </tr>
                            <tr>
                                <td>班级</td>
                                <td><?php echo ($list['class']); ?></td>
                            </tr>
                            <tr>
                                <td>专业</td>
                                <td><?php echo ($list['major']); ?></td>
                            </tr>
                        </tbody>
                    </table>
                    <div style="text-align: center;">
                    <a class="btn btn-info" href="/online/index.php/Home/User/change_password">修改密码</a>
                        &nbsp;
                        &nbsp;
                        &nbsp;
                    <a class="btn btn-info" href="/online/index.php/Home/Online/index">进入考试</a>
                        &nbsp;
                        &nbsp;
                        &nbsp;
                    <a class="btn btn-info" href="/online/index.php/Home/Index/logout">退出</a>
                    </div>
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