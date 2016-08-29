<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>正式考试</title>
    <link rel="stylesheet" href="/online/Public/css/Home/bootstrap.min.css">
    <link rel="stylesheet" href="../index/bootstrap.min.css">
    <script type="text/javascript" src="/online/Public/js/Home/jquery.min.js"></script>
    <script type="text/javascript" src="/online/Public/js/Home/jquery.downCount.js"></script>
    <script type="text/javascript" src="/online/Public/js/Home/bootstrap.min.js"></script>
    <style>
        #footer {
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        #footer p {
            text-align: center;
            color: black;
        }

        @media screen and (max-width: 1000px) {
            #footer {
                position: static;
            }
        }

        .kong {
            height: 30px;;
        }

        td {
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
                    考试协议
                </div>
                <div class="panel-body">
                    <ul class="nav nav-pills nav-stacked">
                        <li>
                            <b>1、</b>
                            点击考试名称按钮进入答题界面，考试开始计时。
                        </li>
                        <li>
                            <b>2、</b>
                            在随机考试过程中，您可以通过顶部的考试时间来掌握自己的做题时间。
                        </li>
                        <li>
                            <b>3、</b>
                            提交试卷后，你可以看到你的客观题成绩，总成绩需要到后台等老师批改后查看。
                        </li>
                    </ul>
                    <div style="text-align: center;">
                        <a class="btn btn-info" href="/online/index.php/Home/Online/online">开始考试</a>
                        <a class="btn btn-info" href="/online/index.php/Home/Online/index">返回</a>
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