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
        tr ,td,th{
            text-align: center;
        }
        #footer {
            position: static;
            bottom: 0;
            width: 100%;
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
                        <li><a href="#">试卷管理</a></li>
                        <li><a href="/online/index.php/Admin/Index/index">试卷列表</a></li>
                        <li><a href="#"><?php echo ($subject); ?></a></li>
                    </ol>
                    <div class="panel panel-default">
                        <div class="panel-heading" style="text-align: center;font-size: 24px;">
                            <?php echo ($subject); ?>
                        </div>
                        <div class="panel-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <td>序号</td>
                                        <td>题目</td>
                                        <td>题型</td>
                                        <td>ABC卷</td>
                                        <td>操作</td>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php if(is_array($list)): foreach($list as $k=>$vo): ?><tr>
                                        <td><?php echo ($k+1); ?></td>
                                        <td><a href="/online/index.php/Admin/Index/edit_paper/id/<?php echo ($vo['id']); ?>" id=""><?php echo ($vo['s_title']); ?></a></td>
                                        <td>
                                            <?php if($vo['title_type'] == 1): ?>单选题<?php endif; ?>
                                            <?php if($vo['title_type'] == 2): ?>多选题<?php endif; ?>
                                            <?php if($vo['title_type'] == 3): ?>判断题<?php endif; ?>
                                            <?php if($vo['title_type'] == 4): ?>填空题<?php endif; ?>
                                            <?php if($vo['title_type'] == 5): ?>简答题<?php endif; ?>
                                        </td>
                                        <td><?php echo ($vo['paper_type']); ?></td>
                                        <td>
                                            <a class="btn btn-info" href="/online/index.php/Admin/Index/edit_paper/id/<?php echo ($vo['id']); ?>">编辑</a>
                                            <a class="btn btn-info" href="/online/index.php/Admin/Index/delete_paper/id/<?php echo ($vo['id']); ?>" onclick="return confirm('你确定要删除吗？')">删除</a>
                                        </td>
                                    </tr><?php endforeach; endif; ?>
                                </tbody>
                            </table>
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
<script>
    $(function () {
        $('#collapseThree').collapse('show')
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