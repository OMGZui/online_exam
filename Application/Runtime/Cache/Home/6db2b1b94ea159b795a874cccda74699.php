<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>正式考试</title>
    <link rel="stylesheet" href="/online/Public/css/Home/bootstrap.min.css">
    <link rel="stylesheet" href="../index/bootstrap.min.css">
    <script type="text/javascript" src="/online/Public/js/Home/jquery.min.js"></script>
    <script type="text/javascript" src="/online/Public/js/Home/bootstrap.min.js"></script>
    <link href="/online/Public/umeditor/themes/default/css/umeditor.css" type="text/css" rel="stylesheet">
    <script type="text/javascript" charset="utf-8" src="/online/Public/umeditor/umeditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="/online/Public/umeditor/umeditor.min.js"></script>
    <script type="text/javascript" src="/online/Public/umeditor/lang/zh-cn/zh-cn.js"></script>

    <style>
        #footer {
            position: static;
            bottom: 0;
            width: 100%;
        }

        #footer p {
            text-align: center;
            color: black;
        }

        .kong {
            height: 50px;;
        }

        td {
            text-align: center;
        }

        /*** 倒计时**/
        .time-item {
            text-align: center;
        }

        .time-item strong {
            background: #C71C60;
            color: #fff;
            line-height: 50px;
            font-size: 14px;
            font-family: Arial;
            padding: 0 10px;
            margin-right: 10px;
            border-radius: 5px;
        / / box-shadow: 1 px 1 px 3 px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>
<div class="container-fluid">
    <div style="height: 80px; width: 100%; background-color: #d9edf7;"></div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <div class="kong">
                <div class="time-item">
                    <span class="glyphicon glyphicon-time"></span>
                    <strong id="hour_show">0时</strong>：
                    <strong id="minute_show">0分</strong>：
                    <strong id="second_show">0秒</strong>
                </div>
            </div>
            <form action="/online/index.php/Home/Online/item" method="post">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <?php if(is_array($paper)): foreach($paper as $key=>$vo): endforeach; endif; ?>
                        <div style="text-align: center;font-size: 24px;">
                            <?php echo ($subject); ?><b>(<?php echo ($paper_type); ?>)</b>卷
                            <input type="hidden" name="paper_type" value="<?php echo ($paper_type); ?>">
                        </div>
                    </div>
                    <div class="panel-body">
                        <!--
                                            /**单选**/
                        -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <b>一、单选题</b><span style="color:red;">(2*10=20)</span>分
                            </div>
                            <?php if(is_array($paper1)): foreach($paper1 as $k=>$vo): $radio = explode(",",$vo['options']); ?>
                                <div class="panel-heading">
                                    <b><?php echo ($k+1); ?>、</b><?php echo ($vo['s_title']); ?>
                                </div>
                                <div class="panel-body">
                                    <ul class="nav nav-stacked">
                                        <li><input type="radio" name="radio<?php echo ($k+1); ?>" value="A"><b>A</b>&nbsp;&nbsp;&nbsp;<span><?php echo ($radio[0]); ?></span>
                                        </li>
                                        <li><input type="radio" name="radio<?php echo ($k+1); ?>" value="B"><b>B</b>&nbsp;&nbsp;&nbsp;<span><?php echo ($radio[1]); ?></span>
                                        </li>
                                        <li><input type="radio" name="radio<?php echo ($k+1); ?>" value="C"><b>C</b>&nbsp;&nbsp;&nbsp;<span><?php echo ($radio[2]); ?></span>
                                        </li>
                                        <li><input type="radio" name="radio<?php echo ($k+1); ?>" value="D"><b>D</b>&nbsp;&nbsp;&nbsp;<span><?php echo ($radio[3]); ?></span>
                                        </li>
                                    </ul>
                                </div><?php endforeach; endif; ?>
                        </div>
                        <!--
                                            /**多选**/
                        -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <b>二、多选题</b><span style="color:red;">(4*5=20)</span>分
                            </div>
                            <?php if(is_array($paper2)): foreach($paper2 as $k=>$vo): $checkbox = explode(",",$vo['options']); ?>
                                <div class="panel-heading">
                                    <b><?php echo ($k+11); ?>、</b><?php echo ($vo['s_title']); ?>
                                </div>
                                <div class="panel-body">
                                    <ul class="nav nav-stacked">
                                        <li><input type="checkbox" name="checkbox<?php echo ($k+11); ?>[]" value="A"><b>A</b>&nbsp;&nbsp;&nbsp;<span><?php echo ($checkbox[0]); ?></span>
                                        </li>
                                        <li><input type="checkbox" name="checkbox<?php echo ($k+11); ?>[]" value="B"><b>B</b>&nbsp;&nbsp;&nbsp;<span><?php echo ($checkbox[1]); ?></span>
                                        </li>
                                        <li><input type="checkbox" name="checkbox<?php echo ($k+11); ?>[]" value="C"><b>C</b>&nbsp;&nbsp;&nbsp;<span><?php echo ($checkbox[2]); ?></span>
                                        </li>
                                        <li><input type="checkbox" name="checkbox<?php echo ($k+11); ?>[]" value="D"><b>D</b>&nbsp;&nbsp;&nbsp;<span><?php echo ($checkbox[3]); ?></span>
                                        </li>
                                    </ul>
                                </div><?php endforeach; endif; ?>
                        </div>

                        <!--
                                             /**判断**/
                         -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <b>三、判断题</b><span style="color:red;">(2*5=10)</span>分
                            </div>
                            <?php if(is_array($paper3)): foreach($paper3 as $k=>$vo): $judge = explode(",",$vo['options']); ?>
                                <div class="panel-heading">
                                    <b><?php echo ($k+16); ?>、</b><?php echo ($vo['s_title']); ?>
                                </div>
                                <div class="panel-body">
                                    <ul class="nav nav-stacked">
                                        <li><input type="radio"
                                                   name="judge<?php echo ($k+16); ?>" value="是"><b>A</b>&nbsp;&nbsp;&nbsp;<span><?php echo ($judge[0]); ?></span>
                                        </li>
                                        <li><input type="radio"
                                                   name="judge<?php echo ($k+16); ?>" value="否"><b>B</b>&nbsp;&nbsp;&nbsp;<span><?php echo ($judge[1]); ?></span>
                                        </li>
                                    </ul>
                                </div><?php endforeach; endif; ?>
                        </div>
                        <!--
                                            /**填空**/
                        -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <b>四、填空题</b><span style="color:red;">(4*5=20)</span>分
                            </div>
                            <?php if(is_array($paper4)): foreach($paper4 as $k=>$vo): ?><div class="panel-heading">
                                    <b><?php echo ($k+21); ?>、</b><?php echo ($vo['s_title']); ?>
                                    <input type="text" name="text<?php echo ($k+21); ?>" class="form-control" style="width: 60%;">
                                </div><?php endforeach; endif; ?>
                        </div>
                        <!--
                                            /**简答**/
                        -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <b>五、简答题</b><span style="color:red;">(30*1=30)</span>分
                            </div>
                            <?php if(is_array($paper5)): foreach($paper5 as $k=>$vo): ?><div class="panel-heading">
                                    <b><?php echo ($k+26); ?>、</b><?php echo ($vo['s_title']); ?>
                                </div>
                                <div class="panel-body">
                                    <!--style给定宽度可以影响编辑器的最终宽度-->
                                    <script type="text/plain" id="myEditor<?php echo ($k+26); ?>" name="content<?php echo ($k+26); ?>"></script>
                                    <script>
                                        //实例化编辑器
                                        var um = UM.getEditor('myEditor<?php echo ($k+26); ?>', {
                                            focus: true,
                                            initialFrameHeight: 240
                                        });
                                    </script>
                                </div><?php endforeach; endif; ?>
                        </div>
                        <div style="text-align: center;">
                            <button class="btn btn-info" type="submit">提交试卷</button>
                        </div>
            </form>

        </div>
        <script type="text/javascript">
            var intDiff = parseInt(90 * 60);//倒计时总秒数量

            function timer(intDiff) {
                window.setInterval(function () {
                    var day = 0,
                            hour = 0,
                            minute = 0,
                            second = 0;//时间默认值
                    if (intDiff > 0) {
                        hour = Math.floor(intDiff / (60 * 60)) - (day * 24);
                        minute = Math.floor(intDiff / 60) - (day * 24 * 60) - (hour * 60);
                        second = Math.floor(intDiff) - (day * 24 * 60 * 60) - (hour * 60 * 60) - (minute * 60);
                    }
                    if (minute <= 9) minute = '0' + minute;
                    if (second <= 9) second = '0' + second;
                    $('#hour_show').html('<s id="h"></s>' + hour + '时');
                    $('#minute_show').html('<s></s>' + minute + '分');
                    $('#second_show').html('<s></s>' + second + '秒');
                    intDiff--;
                }, 1000);
            }
            $(function () {
                timer(intDiff);
            });
        </script>
    </div>
</div>
<div class="col-md-1"></div>
</div>
</div>
<div id="footer">
    <div class="container-fluid">
        <p class="alert alert-info">Copyright© 2016 盛俊 版权所有</p>
    </div>
</div>
</body>
</html>