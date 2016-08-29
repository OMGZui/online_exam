<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>后台模板管理系统</title>
    <link rel="stylesheet" href="/online/Public/css/Admin/style2.css"/>
    <link rel="stylesheet" href="/online/Public/css/Admin/bootstrap.min.css">
    <link rel="stylesheet" href="../admin/bootstrap.min.css">
    <script type="text/javascript" src="/online/Public/js/Admin/jquery.min.js"></script>
    <script type="text/javascript" src="/online/Public/js/Admin/bootstrap.min.js"></script>
    <style>
        #header .navbar-brand {
            font-size: 34px;
            line-height: 60px;
        }

        #footer {
            position: absolute;
            bottom: 0;
            width: 100%;
        }
        #footer p{
            text-align: center;
            color: black;
        }
    </style>
</head>
<body>
<div id="header">
    <div class="container-fluid">
        <nav class="navbar navbar-inverse" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                    <span class="sr-only">切换</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand">在线考试后台管理系统</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a>欢迎你</a></li>
                    <li><a style="color: red;font-size: 18px;font-weight: bold;"><?php echo ($username); ?></a></li>
                    <li><a href="/online/index.php/Admin/Admin/change_password">修改密码</a></li>
                    <li><a href="/online/index.php/Admin/Index/logout">退出</a></li>
                </ul>
            </div>
        </nav>
    </div>
</div>

<div id="content">
    <div class="container">
        <div class="row">
            <div class="col-md-2 ">
    <div class="panel-group" id="accordion">
        <?php if(is_array($admin)): foreach($admin as $key=>$vo): endforeach; endif; ?>
        <?php ?>
            <?php if(($admin['state'] < 3)): ?><div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion"
                               href="#collapseOne">
                                <span class="glyphicon glyphicon-cog"></span>系统管理
                            </a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <a href="/online/index.php/Admin/Admin/change_password">修改密码</a>
                        </div>
                        <div class="panel-body">
                            <a href="/online/index.php/Admin/Index/logout">退出系统</a>
                        </div>
                    </div>
                </div><?php endif; ?>
        <?php if(($admin['state'] == 0) or ($admin['state'] == 1) ): ?><div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion"
                               href="#collapseTwo">
                                <span class="glyphicon glyphicon-user"></span>
                                学生管理
                            </a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse ">
                        <div class="panel-body">
                            <a href="/online/index.php/Admin/Student/index">学生列表</a>
                        </div>
<!--                        <div class="panel-body">
                            <a href="/online/index.php/Admin/Student/add_student">添加学生</a>
                        </div>-->
                    </div>
                </div><?php endif; ?>
            <?php if(($admin['state'] == 0) or ($admin['state'] == 1) ): ?><div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion"
                               href="#collapseThree">
                                <span class="glyphicon glyphicon-book"></span>试卷管理
                            </a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse ">
                        <div class="panel-body">
                            <a href="/online/index.php/Admin/Index/index">试卷列表</a>
                        </div>
                        <div class="panel-body">
                            <a href="/online/index.php/Admin/Index/add_paper">添加试卷</a>
                        </div>
                        <div class="panel-body">
                            <a href="/online/index.php/Admin/Index/paper_list">批改试卷</a>
                        </div>
                    </div>
                </div><?php endif; ?>
            <?php if(($admin['state'] < 3)): ?><div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion"
                               href="#collapseFour">
                                <span class="glyphicon glyphicon-usd"></span>成绩管理
                            </a>
                        </h4>
                    </div>
                    <div id="collapseFour" class="panel-collapse collapse ">
                        <div class="panel-body">
                            <a href="/online/index.php/Admin/Grade/index">成绩列表</a>
                        </div>
                    </div>
                </div><?php endif; ?>
    </div>
    <!--    <script type="text/javascript">
            $(function () {
                $('#collapseFour').collapse({
                    toggle: false
                })
            });
            $(function () {
                $('#collapseTwo').collapse('show')
            });
            $(function () {
                $('#collapseThree').collapse('hide')
            });
            $(function () {
                $('#collapseOne').collapse('hide')
            });
        </script>-->
</div>
            <div class="col-md-10">
                <div class="container-fluid">
                    <ol class="breadcrumb">
                        <li><a>当前位置</a></li>
                        <li><a href="#">成绩管理</a></li>
                        <li><a href="#">成绩列表</a></li>
                    </ol>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <form class="bs-example bs-example-form" role="form" action="/online/index.php/Admin/Grade/search" method="post">
                                <div class="input-group input-group-sm">
                                    <div class="input-group-btn">
                                        <button type="button" class="btn btn-sm " tabindex="-1"><span >学号</span></button>
                                    </div>
                                    &nbsp;
                                    &nbsp;
                                    &nbsp;
                                    <input type="text" class="form-control" name="username" style="width: 30%">
                                    <div class="input-group-btn">
                                        <button type="button" class="btn btn-sm " tabindex="-1"><span >姓名</span></button>
                                    </div>
                                    &nbsp;
                                    &nbsp;
                                    &nbsp;
                                    <input type="text" class="form-control" name="name" style="width: 30%">
                                    <div class="input-group-btn">
                                        <button type="button" class="btn btn-sm " tabindex="-1"><span >成绩</span></button>
                                    </div>
                                    &nbsp;
                                    &nbsp;
                                    &nbsp;
                                    <input type="text" class="form-control"  name="grade1" style="width: 30%">
                                    -
                                    <input type="text" class="form-control"  name="grade2" style="width: 30%">

                                    <div class="input-group-btn">
                                        <button type="submit" class="btn btn-sm " tabindex="-1"><span class="glyphicon glyphicon-search"></span></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="panel-body">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="table-responsive">
                                        <div class="col-md-1"></div>
                                        <div class="col-md-10">
                                            <table class="table table-bordered">
                                                <thead>
                                                <tr>
                                                    <th>学号</th>
                                                    <th>姓名</th>
                                                    <th>科目</th>
                                                    <th>成绩</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php if($rs2['state'] < 2): if(is_array($list)): foreach($list as $key=>$vo): ?><tr>
                                                        <td><?php echo ($vo['username']); ?></td>
                                                        <td><?php echo ($vo['name']); ?></td>
                                                        <td><?php if($vo['subject_id'] == 1): ?>大学生计算机基础<?php endif; if($vo['subject_id'] == 2): ?>计算机组成原理<?php endif; ?></td>
                                                        <td><?php echo ($vo['grade']); ?></td>
                                                    </tr><?php endforeach; endif; endif; ?>
                                                <?php if($rs2['state'] == 2): if(is_array($list1)): foreach($list1 as $key=>$vo): ?><tr>
                                                        <td><?php echo ($vo['username']); ?></td>
                                                        <td><?php echo ($vo['name']); ?></td>
                                                        <td><?php if($vo['subject_id'] == 1): ?>大学生计算机基础<?php endif; if($vo['subject_id'] == 2): ?>计算机组成原理<?php endif; ?></td>
                                                        <td><?php echo ($vo['grade']); ?></td>
                                                    </tr><?php endforeach; endif; endif; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-md-1"></div>
                                    </div>
                                </div>
                                <!-- 分页-->
                                <div class="row">
                                    <div class="col-md-5"></div>
                                    <div class="col-md-7">
                                        <ul class="pagination">
                                            <?php echo ($page); ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(function () {
        $('#collapseFour').collapse('show')
    });
    $(function () {
        $('#collapseOne').collapse('hide')
    });</script>
<div id="footer">
    <div class="container-fluid">
        <p class="alert alert-info">Copyright© 2016 盛俊 版权所有</p>
    </div>
</div>
</body>
</html>