<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:62:"C:\wamp64\www\phone\public/../ems/index\view\index\person.html";i:1549502020;s:53:"C:\wamp64\www\phone\ems\index\view\public\__head.html";i:1549501912;s:55:"C:\wamp64\www\phone\ems\index\view\public\__footer.html";i:1549501912;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>智能手机管理系统</title>
    <link rel="stylesheet" href="../../static/bootstrap/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../static/layer/css/layer.css"/>
    <link rel="stylesheet" href="../../static/css/index.css">
    <script src="../../static/bootstrap/jquery.min.js"></script>
    <script src="../../static/layer/js/layer.js"></script>
    <script src="../../static/bootstrap/bootstrap.min.js"></script>
    <script src="../../static/bootstrap/popper.min.js.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
    <a class="navbar-brand" href="#"><img src="../../static/images/logo.svg"/></a>
    <ul class="navbar-nav nav-left">
        <li class="nav-item dropdown" style="margin-right: 35px;">
            <a class="nav-link dropdown-toggle" href="javascript:" id="navbardrop" data-toggle="dropdown">
                用户名
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="">个人中心</a>
                <a class="dropdown-item" href="javascript:" id="outLogin">退出登陆</a>
            </div>
        </li>
    </ul>
</nav>
<!--测导航栏-->
<div class="left-menu" style="top: 55px;">
    <div class="menu">
        <div class="menu-item">
            <div class="title-menu">
                <i class="fa fa-home"></i>
                公司管理
                <i class="fa fa-angle-down"></i>
                <i class="fa fa-angle-up"></i>
            </div>
            <div class="sub-menu">
                <a href="#">组织架构</a>
            </div>
            <div class="sub-menu">
                <a href="#">人员档案</a>
            </div>
            <div class="sub-menu">
                <a href="#">人员档案</a>
            </div>
        </div>
        <!--{if session('depa_id') == 1 || session('roleID') == 0}-->
        <div class="menu-item">
            <div class="title-menu">
                <i class="fa fa-globe"></i>
                销售管理
                <i class="fa fa-angle-down"></i>
                <i class="fa fa-angle-up"></i>
            </div>
            <div class="sub-menu">
                <a href="<?php echo url('index/main/Order'); ?>">销售分析</a>
            </div>
        </div>
        <div class="menu-item">
            <div class="title-menu">
                <i class="fa fa-globe"></i>
                统计分析
                <i class="fa fa-angle-down"></i>
                <i class="fa fa-angle-up"></i>
            </div>
            <div class="sub-menu">
                <a href="#">月季分析</a>
            </div>
            <div class="sub-menu">
                <a href="#">年度菜单</a>
            </div>
        </div>
        <div class="menu-item">
            <div class="title-menu">
                <i class="fa fa-globe"></i>
                部门管理
                <i class="fa fa-angle-down"></i>
                <i class="fa fa-angle-up"></i>
            </div>
            <div class="sub-menu">
                <a href="#">部门设置</a>
            </div>
            <div class="sub-menu">
                <a href="#">部门管理</a>
            </div>
        </div>

        <div class="menu-item">
            <div class="title-menu">
                <i class="fa fa-globe"></i>
                角色管理
                <i class="fa fa-angle-down"></i>
                <i class="fa fa-angle-up"></i>
            </div>
            <div class="sub-menu">
                <a href="#">角色设置</a>
            </div>
            <div class="sub-menu">
                <a href="#">角色说明</a>
            </div>
        </div>
        <div class="menu-item">
            <div class="title-menu">
                <i class="fa fa-globe"></i>
                员工管理
                <i class="fa fa-angle-down"></i>
                <i class="fa fa-angle-up"></i>
            </div>
            <div class="sub-menu">
                <a href="#">员工列表</a>
            </div>
            <div class="sub-menu">
                <a href="#">员工设置</a>
            </div>
        </div>
        <div class="menu-item">
            <div class="title-menu">
                <i class="fa fa-globe"></i>
                客户管理
                <i class="fa fa-angle-down"></i>
                <i class="fa fa-angle-up"></i>
            </div>
            <div class="sub-menu">
                <a href="#">客户信息</a>
            </div>
        </div>
        <div class="menu-item">
            <div class="title-menu">
                <i class="fa fa-globe"></i>
                产品管理
                <i class="fa fa-angle-down"></i>
                <i class="fa fa-angle-up"></i>
            </div>
            <div class="sub-menu">
                <a href="#">产品统计</a>
            </div>
            <div class="sub-menu">
                <a href="#">产品分析</a>
            </div>
        </div>
        <div class="menu-item">
            <div class="title-menu">
                <i class="fa fa-globe"></i>
                售后管理
                <i class="fa fa-angle-down"></i>
                <i class="fa fa-angle-up"></i>
            </div>
            <div class="sub-menu">
                <a href="#">维修管理</a>
            </div>
            <div class="sub-menu">
                <a href="#">售后评价</a>
            </div>
        </div>
        <div class="menu-item">
            <div class="title-menu">
                <i class="fa fa-gear"></i>
                系统管理
                <i class="fa fa-angle-down"></i>
                <i class="fa fa-angle-up"></i>
            </div>
            <div class="sub-menu">
                <a href="#">系统设置</a>
            </div>
        </div>
    </div>
</div>
<div class="content">
<h1>person</h1>
</div>
<script src="../static/js/menuItem.js"></script>
</body>
</html>