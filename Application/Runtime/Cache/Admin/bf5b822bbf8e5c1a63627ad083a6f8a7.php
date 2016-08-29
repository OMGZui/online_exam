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
                        <li><a href="#">学生管理</a></li>
                        <li><a href="#">编辑学生</a></li>
                    </ol>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="col-md-2"></div>
                            <div class="col-md-8">
                                <form class="form-horizontal" role="form" action="/online/index.php/Admin/Student/edit_student_do" method="post">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">
                                            id
                                        </label>
                                        <div class="col-md-5">
                                            <input type="text" name="id" class="form-control" value="<?php echo ($list['id']); ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">
                                            学号
                                        </label>
                                        <div class="col-md-5">
                                            <input type="text" name="username" class="form-control" value="<?php echo ($list['username']); ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">
                                            姓名
                                        </label>
                                        <div class="col-md-5">
                                            <input type="text" name="name" class="form-control" value="<?php echo ($list['name']); ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">
                                            年龄
                                        </label>
                                        <div class="col-md-5">
                                            <input type="text" name="age" class="form-control" value="<?php echo ($list['age']); ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">
                                            性别
                                        </label>
                                        <div class="col-md-5">
                                            <input type="text" name="sex" class="form-control" value="<?php if($list["sex"] == 0): ?>男<?php else: ?>女<?php endif; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">
                                            专业
                                        </label>
                                        <div class="col-md-5">
                                            <input type="text" name="major" class="form-control" value="<?php echo ($list['major']); ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">
                                            班级
                                        </label>
                                        <div class="col-md-5">
                                            <input type="text" name="class" class="form-control" value="<?php echo ($list['class']); ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">

                                        </label>
                                        <div class="col-md-2">
                                            <input type="submit" class="btn btn-info" value="提交">
                                        </div>
                                        <button class="btn"><a href="/online/index.php/Admin/Student/index">返回</a></button>
                                    </div>

                                </form>
                            </div>
                            <div class="col-md-2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(function () {
        $('#collapseTwo').collapse('show')
    });
    $(function () {
        $('#collapseOne').collapse('hide')
    });

</script>
<div id="footer">
    <div class="container-fluid">
        <p class="alert alert-info">Copyright© 2016 盛俊 版权所有</p>
    </div>
</div>
</body>
</html>