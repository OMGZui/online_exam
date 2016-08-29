<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo ($title); ?></title>
    <link rel="stylesheet" href="/online/Public/css/Home/bootstrap.min.css">
    <link rel="stylesheet" href="../index/bootstrap.min.css">
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
                <div class="panel-heading" style="text-align: center;font-size: 32px;">
                    成绩
                </div>
                <div class="panel-body">
                    <div class="" style="text-align: center;">
                        <?php if(is_array($list)): foreach($list as $key=>$vo): ?><b>你的客观题分数：</b><p style="font-size: 48px;color: red;"><?php echo ($vo['object_grade']); ?></p><br/>
                            <b>简答题已经提交到后台，分数由科任老师进行评分，总分等公布后到后台进行查看</b><?php endforeach; endif; ?>
                    </div>
                    <div style="text-align: center;">
                        <a class="btn btn-info" href="/online/index.php/Home/Index/index">回到首页</a>
                        <a class="btn btn-info" href="/online/index.php/Home/Index/logout">退出系统</a>
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