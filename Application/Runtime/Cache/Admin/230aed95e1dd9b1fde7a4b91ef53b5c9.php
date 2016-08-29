<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bootstrap</title>
    <link rel="stylesheet" href="/online/Public/css/Admin/bootstrap.min.css">
    <script type="text/javascript" src="/online/Public/js/Admin/jquery.min.js"></script>
    <script type="text/javascript" src="/online/Public/js/Admin/bootstrap.min.js"></script>
    <style>
        .sys {
            color: red;
            font-size: 18px;
            font-weight: bold;
        }

        .col-md-4 {
            border: 2px solid pink;
        }
    </style>
</head>
<body>
<div class="container">
    <span class="sys">1.网络系统</span>

    <div class="row">
        <div class="col-md-4">1</div>
        <div class="col-md-4">2</div>
        <div class="col-md-4">3</div>
    </div>
</div>
<hr/>
<div class="container">
    <span class="sys">2.表格</span>
    <table class="table table-bordered">
        <caption class="alert alert-info">基本表格布局</caption>
        <thead>
        <tr>
            <td>姓名</td>
            <td>年龄</td>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>盛俊</td>
            <td>23</td>
        </tr>
        <tr>
            <td>王敏</td>
            <td>23</td>
        </tr>
        </tbody>
    </table>
</div>

<hr/>
<div class="container">
    <span class="sys">3.表单</span>

    <form class="form-horizontal" role="form">
        <div class="form-group">
            <label class="col-md-2 control-label" style="text-shadow: black 2px 2px 2px;">
                <span class=" glyphicon glyphicon-user" aria-hidden="true"></span>
            </label>

            <div class="col-md-2">
                <input type="text" class="form-control" placeholder="请输入用户名">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label" style="color: rgb(212, 106, 64);">
                <span class=" glyphicon glyphicon-lock" aria-hidden="true"></span>
            </label>

            <div class="col-md-2">
                <input type="password" class="form-control" placeholder="请输入密码">
            </div>
        </div>
        <div class="form-group ">
            <div class="col-md-offset-2 col-md-10">
                <button type="submit" class="btn btn-info">登陆</button>
                <button type="submit" class="btn btn-warning">注册</button>
            </div>
    </form>
</div>

<hr/>

<div class="container">
    <span class="sys">4.按钮</span>

    <div class="row">
        <div class="col-md-offset-1">
            <!-- 标准的按钮 -->
            <button type="button" class="btn btn-default active">默认按钮</button>

            <!-- 提供额外的视觉效果，标识一组按钮中的原始动作 -->
            <button type="button" class="btn btn-primary disabled">原始按钮</button>

            <!-- 表示一个成功的或积极的动作 -->
            <button type="button" class="btn btn-success">成功按钮</button>

            <!-- 信息警告消息的上下文按钮 -->
            <button type="button" class="btn btn-info">信息按钮</button>

            <!-- 表示应谨慎采取的动作 -->
            <button type="button" class="btn btn-warning">警告按钮</button>

            <!-- 表示一个危险的或潜在的负面动作 -->
            <button type="button" class="btn btn-danger btn-lg btn-block">危险按钮</button>

            <!-- 并不强调是一个按钮，看起来像一个链接，但同时保持按钮的行为 -->
            <button type="button" class="btn btn-link disabled">链接按钮</button>
        </div>
    </div>
</div>

<hr/>

<div class="container">
    <span class="sys">5.图片</span>

    <div class="row">
        <div class="col-md-offset-1">
            <img src="/online/Public/img/Home/3.jpg" class="img-responsive img-rounded" alt="狂三" width="200" height="40">
        </div>
    </div>
</div>

<hr/>

<div class="container">
    <span class="sys">6.下拉菜单</span>

    <div class="dropdown">
        <button type="button" class="btn dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown">
            程序语言
            <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
            <li role="presentation" class="dropdown-header">菜单列表</li>
            <li role="presentation">
                <a role="menuitem" tabindex="-1" href="#">C语言</a>
            </li>
            <li role="presentation">
                <a role="menuitem" tabindex="-1" href="#">jAVA</a>
            </li>
            <li role="presentation">
                <a role="menuitem" tabindex="-1" href="#">PHP</a>
            </li>
            <li role="presentation">
                <a role="menuitem" tabindex="-1" href="#">Perl</a>
            </li>
            <li role="presentation" class="divider"></li>
            <li role="presentation">
                <a role="menuitem" tabindex="-1" href="#">数据结构</a>
            </li>
            <li role="presentation" class="divider"></li>
            <li role="presentation">
                <a role="menuitem" tabindex="-1" href="#">Python</a>
            </li>
        </ul>
    </div>
</div>

<hr/>

<div class="container">
    <span class="sys">7.按钮组</span>
    <br/>

    <div class="btn-group">
        <button type="button" class="btn btn-info">按钮1</button>
        <button type="button" class="btn btn-default">按钮2</button>
        <div class="btn-group">
            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                下拉
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu">
                <li><a href="#">下拉1</a></li>
                <li><a href="#">下拉2</a></li>
            </ul>
        </div>
    </div>
</div>

<hr/>
<div class="container">
    <span class="sys">8.输入框组</span>

    <div style="padding: 100px 100px 10px;">
        <form class="bs-example bs-example-form" role="form">
            <div class="row">
                <div class="col-md-6">
                    <div class="input-group">
                        <div class="input-group-btn">
                            <button type="button" class="btn btn-default"
                                    tabindex="-1">下拉菜单
                            </button>
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"
                                    tabindex="-1">
                                <span class="caret"></span>
                                <span class="sr-only">切换下拉菜单</span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#">功能</a></li>
                                <li><a href="#">另一个功能</a></li>
                                <li><a href="#">其他</a></li>
                                <li class="divider"></li>
                                <li><a href="#">分离的链接</a></li>
                            </ul>
                        </div><!-- /btn-group -->
                        <input type="text" class="form-control">
                    </div><!-- /input-group -->
                </div><!-- /.col-lg-6 -->
                <div class="col-md-6">
                    <div class="input-group">
                        <input type="text" class="form-control">

                        <div class="input-group-btn">
                            <button type="button" class="btn btn-default"
                                    tabindex="-1">下拉菜单
                            </button>
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"
                                    tabindex="-1">
                                <span class="caret"></span>
                                <span class="sr-only">切换下拉菜单</span>
                            </button>
                            <ul class="dropdown-menu pull-right">
                                <li><a href="#">功能</a></li>
                                <li><a href="#">另一个功能</a></li>
                                <li><a href="#">其他</a></li>
                                <li class="divider"></li>
                                <li><a href="#">分离的链接</a></li>
                            </ul>
                        </div><!-- /btn-group -->
                    </div><!-- /input-group -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </form>
    </div>
</div>

<hr/>
<div class="container">
    <span class="sys">9.导航元素</span>
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#">程序员</a></li>
        <li><a href="">PHP</a></li>
        <li><a href="">C</a></li>
        <li><a href="">Perl</a></li>
        <li><a href="">Python</a></li>
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                Java <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
                <li><a href="#">Swing</a></li>
                <li><a href="#">jMeter</a></li>
                <li><a href="#">EJB</a></li>
                <li class="divider"></li>
                <li><a href="#">分离的链接</a></li>
            </ul>
        </li>
    </ul>
</div>
<hr/>
<div class="container">
    <span class="sys">10.导航栏</span>
    <nav class="navbar navbar-inverse" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                <span class="sr-only">切换</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">程序语言<span class="badge pull-right">5</span></a>
        </div>
        <div class="collapse navbar-collapse navbar-header " id="navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">C</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">PHP<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">数组</a></li>
                        <li><a href="#">集合</a></li>
                        <li class="divider"></li>
                        <li><a href="#">算法</a></li>
                    </ul>
                </li>
                <li><a href="#">JAVA</a></li>
                <li><a href="#">IOS</a></li>
            </ul>
        </div>
        <div>
            <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="搜索">
                </div>
                <button type="submit" class="btn btn-info">提交</button>
            </form>
        </div>
    </nav>
</div>
<hr/>
<div class="container">
    <span class="sys">11.进度君</span>

    <div class="progress progress-striped active">
        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0"
             aria-valuemax="100" style="width: 40% ;">

        </div>
    </div>
</div>
<hr/>
<div class="container">
    <span class="sys">12.列表组</span>

    <div class="row">
        <div class="col-md-6">
            <ul class="list-group">
                <li class="list-group-item ">JAVA</li>
                <li class="list-group-item">Python</li>
                <li class="list-group-item">PHP</li>
                <li class="list-group-item">C</li>
            </ul>
        </div>
        <div class="col-md-6">
            <div class="list-group">
                <a class="list-group-item active">乱入</a>
                <a class="list-group-item ">乱出</a>
                <a class="list-group-item ">中出</a>
                <a class="list-group-item ">中二</a>
            </div>
        </div>
    </div>
</div>
<hr/>
<div class="container">
    <span class="sys">13.面板</span>

    <div class="row">
        <div class="col-md-3">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">标题1</h3>
                </div>
                <div class="panel-body">
                    <ul class="list-group">
                        <li class="list-group-item ">JAVA</li>
                        <li class="list-group-item">Python</li>
                        <li class="list-group-item">PHP</li>
                        <li class="list-group-item">C</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">标题2</h3>
                </div>
                <div class="panel-body">
                    <div class="list-group">
                        <a class="list-group-item active">乱入</a>
                        <a class="list-group-item ">乱出</a>
                        <a class="list-group-item ">中出</a>
                        <a class="list-group-item ">中二</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">标题3</h3>
                </div>
                <div class="panel-body">
                    <div class="progress progress-striped active">
                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60"
                             aria-valuemin="0" aria-valuemax="100" style="width: 40% ;">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">标题4</h3>
                </div>
                <div class="panel-body">
                    <table class="table table-bordered">
                        <caption class="alert alert-info">基本表格布局</caption>
                        <thead>
                        <tr>
                            <td>姓名</td>
                            <td>年龄</td>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>盛俊</td>
                            <td>23</td>
                        </tr>
                        <tr>
                            <td>王敏</td>
                            <td>23</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>