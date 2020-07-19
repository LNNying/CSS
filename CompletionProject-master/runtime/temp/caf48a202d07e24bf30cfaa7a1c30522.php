<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:67:"C:\wamp64\www\phone\public/../ems/index\view\index\person_info.html";i:1552311883;s:53:"C:\wamp64\www\phone\ems\index\view\public\__head.html";i:1557031811;s:55:"C:\wamp64\www\phone\ems\index\view\public\__footer.html";i:1555944734;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>柠檬手机公司管理系统</title>
    <link rel="stylesheet" href="../static/bootstrap/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../static/layer/css/layer.css"/>
    <link rel="stylesheet" href="../static/css/index.css">
    <script src="../static/bootstrap/jquery.min.js"></script>
    <script src="../static/layer/js/layer.js"></script>
    <script src="https://cdn.staticfile.org/popper.js/1.12.5/umd/popper.min.js"></script>
    <script src="../static/bootstrap/bootstrap.min.js"></script>
    <script src="../static/js/judgeBrowser.js"></script>
</head>
<body>
<div id="fullScreen">
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
        <a class="navbar-brand" href="#"><img src="../static/images/logo.svg"/></a>
        <ul class="navbar-nav nav-left">
            <li style="margin-top: 9px;cursor: pointer;" id="eidtScreen">
                <a href="#" data-toggle="tooltip" data-placement="bottom" title="退出">
                    <span style="color: #fff;" onclick="toggleFullScreen(event)">
                        <i class="fa fa-compress"></i>
                    </span>
                </a>
            </li>
            <li style="margin-top: 9px;cursor: pointer;" id="full">
                <a href="#" data-toggle="tooltip" data-placement="bottom" title="全屏">
                    <span style="color: #fff;" onclick="toggleFullScreen(event)">
                        <i class="fa fa-arrows-alt"></i>
                    </span>
                </a>
            </li>

            <li class="nav-item dropdown" style="margin-right: 35px;">
                <a class="nav-link dropdown-toggle" href="javascript:" id="navbardrop" data-toggle="dropdown">
                    <?php echo session('manger_name'); ?>
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="<?php echo url('index/index/personInfo'); ?>">个人中心</a>
                    <a class="dropdown-item" href="javascript:" id="outLogin">退出登陆</a>
                </div>
            </li>
        </ul>
    </nav>
    <!--测导航栏-->
    <div class="left-menu" style="top: 58px;">
        <div class="menu">
            <?php if(session('roleId') == 1): ?>
            <div class="menu-item">
                <div class="title-menu">
                    <i class="fa fa-home"></i>
                    财务管理
                    <i class="fa fa-angle-down"></i>
                    <i class="fa fa-angle-up"></i>
                </div>
                <div class="sub-menu">
                    <a href="<?php echo url('index/index/wageManger'); ?>">工资管理</a>
                </div>
                <div class="sub-menu">
                    <a href="<?php echo url('index/index/profitManger'); ?>">盈利管理</a>
                </div>
            </div>
            <?php endif; if(session('roleId') == 1 || session('roleId') == 2 || session('roleId') == 4): ?>
            <div class="menu-item">
                <div class="title-menu">
                    <i class="fa fa-globe"></i>
                    销售管理
                    <i class="fa fa-angle-down"></i>
                    <i class="fa fa-angle-up"></i>
                </div>
                <div class="sub-menu">
                    <a href="<?php echo url('index/index/orderList'); ?>">销售订单</a>
                </div>
            </div>
            <?php endif; if(session('roleId') == 1): ?>
            <div class="menu-item">
                <div class="title-menu">
                    <i class="fa fa-globe"></i>
                    统计分析
                    <i class="fa fa-angle-down"></i>
                    <i class="fa fa-angle-up"></i>
                </div>
                <div class="sub-menu">
                    <a href="<?php echo url('index/index/saleAnalysis'); ?>">销售分析</a>
                </div>
                <!--<div class="sub-menu">-->
                    <!--<a href="#">产品分析</a>-->
                <!--</div>-->
            </div>
            <div class="menu-item">
                <div class="title-menu">
                    <i class="fa fa-globe"></i>
                    部门管理
                    <i class="fa fa-angle-down"></i>
                    <i class="fa fa-angle-up"></i>
                </div>
                <div class="sub-menu">
                    <a href="<?php echo url('index/index/department'); ?>">部门设置</a>
                </div>
                <!--<div class="sub-menu">-->
                    <!--<a href="#">部门管理</a>-->
                <!--</div>-->
            </div>

            <div class="menu-item">
                <div class="title-menu">
                    <i class="fa fa-globe"></i>
                    角色管理
                    <i class="fa fa-angle-down"></i>
                    <i class="fa fa-angle-up"></i>
                </div>
                <div class="sub-menu">
                    <a href="<?php echo url('index/index/role'); ?>">角色设置</a>
                </div>
                <!--<div class="sub-menu">-->
                    <!--<a href="#">角色说明</a>-->
                <!--</div>-->
            </div>
            <div class="menu-item">
                <div class="title-menu">
                    <i class="fa fa-globe"></i>
                    员工管理
                    <i class="fa fa-angle-down"></i>
                    <i class="fa fa-angle-up"></i>
                </div>
                <div class="sub-menu">
                    <a href="<?php echo url('index/index/mangerList'); ?>">员工列表</a>
                </div>
                <div class="sub-menu">
                    <a href="<?php echo url('index/index/transfer'); ?>">员工调动</a>
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
                    <a href="<?php echo url('index/index/clientList'); ?>">普通客户</a>
                </div>
                <div class="sub-menu">
                    <a href="<?php echo url('index/index/supList'); ?>">供应商</a>
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
                    <a href="<?php echo url('index/index/productList'); ?>">产品列表</a>
                </div>
                <div class="sub-menu">
                    <a href="<?php echo url('index/index/productRole'); ?>">产品分类</a>
                </div>
            </div>
            <?php endif; if(session('roleId') == 1 || session('roleId') == 3 || session('roleId') == 5): ?>
            <div class="menu-item">
                <div class="title-menu">
                    <i class="fa fa-globe"></i>
                    售后管理
                    <i class="fa fa-angle-down"></i>
                    <i class="fa fa-angle-up"></i>
                </div>
                <div class="sub-menu">
                    <a href="<?php echo url('index/index/serveList'); ?>">维修管理</a>
                </div>
                <div class="sub-menu">
                    <a href="<?php echo url('index/index/evaluateList'); ?>">售后评价</a>
                </div>
            </div>
            <?php endif; if(session('roleId') == 1): ?>
            <div class="menu-item">
                <div class="title-menu">
                    <i class="fa fa-gear"></i>
                    系统管理
                    <i class="fa fa-angle-down"></i>
                    <i class="fa fa-angle-up"></i>
                </div>
                <div class="sub-menu">
                    <a href="<?php echo url('index/index/systemView'); ?>">系统设置</a>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
<script src="../static/Echart/echarts.min.js"></script>
<script src="../static/Echart/echarts-gl.min.js"></script>
<script src="../static/Echart/echarts-liquidfill.min.js"></script>
<script src="../static/Echart/dark.js"></script>
<script src="../static/Echart/footer.js"></script>
<script src="../static/js/common.js"></script>
<script type="text/javascript">
    // 全屏
    function FullScreen(el) {
        var isFullscreen = document.fullScreen || document.mozFullScreen || document.webkitIsFullScreen;
        if (!isFullscreen) {
            (el.requestFullscreen && el.requestFullscreen()) ||
            (el.mozRequestFullScreen && el.mozRequestFullScreen()) ||
            (el.webkitRequestFullscreen && el.webkitRequestFullscreen()) || (el.msRequestFullscreen && el.msRequestFullscreen());
            document.getElementById('full').style.display = 'none';
            document.getElementById('eidtScreen').style.display = 'block';
            window.sessionStorage['item'] = 1
        } else {
            document.exitFullscreen ? document.exitFullscreen() :
                document.mozCancelFullScreen ? document.mozCancelFullScreen() :
                    document.webkitExitFullscreen ? document.webkitExitFullscreen() : '';
            document.getElementById('full').style.display = 'block';
            document.getElementById('eidtScreen').style.display = 'none';
            window.sessionStorage['item'] = 0;
        }
    }
    function toggleFullScreen(e) {
        var el = e.srcElement || e.target;
        var ele = document.getElementById('fullScreen');
        FullScreen(ele);
    }
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
    });
    // 退出登录
    $(function () {
        $('#outLogin').click(function () {
            $.ajax({
                type: "post",
                url: "<?php echo url('index/login/outLogin'); ?>",
                data: "",
                dataType: "",
                success: function (data) {
                    if (data.code == 1) {
                        layer.msg(data.msg, {
                            icon: 6,
                            time: 2000,
                        }, function () {
                            location.href = data.url;
                        });
                    } else {
                        layer.open({
                            title: '退出登陆失败',
                            icon: 2,
                            content: data.msg,
                        });
                    }

                }
            });
        });
    });
</script>
<!-- <div class="content"> -->
<!--<div class="nav_title">-->
    <nav class="breadcrumb">
        <a class="breadcrumb-item" href="<?php echo url('index/index/index'); ?>">
            <i class="fa fa-home"></i>首页
        </a>
    </nav>
<!--</div>-->
<div class="content" style="padding-left: 10px">
    <div style="font-size: 18px; font-weight: bold; margin-bottom: 10px;">
        个人信息
    </div>
    <form id="personForm" class="mb-5">
        <table>
            <tr>
                <td>
                    <label for="name">姓名:</label>
                </td>
                <td class="pl-10">
                    <div class="input-group-sm">
                        <input type="text" class="form-control" id="name" name="" value="<?php echo $info['manger_name']; ?>">
                    </div>
                </td>
            </tr>
            <tr class="mb-5">
                <td>
                    <label for="pass">密码:</label>
                </td>
                <td class="pl-10">
                    <div class="input-group-sm">
                        <input type="password" class="form-control" id="pass" name="" value="<?php echo $info['pass']; ?>" disabled>
                    </div>
                </td>
            </tr>
            <tr class="mb-5">
                <td>
                    <label for="name">部门:</label>
                </td>
                <td class="pl-10">
                    <div class="input-group-sm">
                        <input type="text" class="form-control" id="department" name=""
                               value="<?php echo $info['department']['department_name']; ?>" disabled>
                    </div>
                </td>
            </tr>
            <tr class="mb-5">
                <td>
                    <label for="name">角色:</label>
                </td>
                <td class="pl-10">
                    <div class="input-group-sm">
                        <input type="text" class="form-control" id="role" name="" value="<?php echo $info['role']['role_name']; ?>" disabled>
                    </div>
                </td>
            </tr>
            <tr class="mb-5">
                <td>
                    <label for="name">邮箱:</label>
                </td>
                <td class="pl-10">
                    <div class="input-group-sm">
                        <input type="email" class="form-control" id="email" name="" value="<?php echo $info['email']; ?>">
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="name">手机:</label>
                </td>
                <td class="pl-10">
                    <div class="input-group-sm">
                        <input type="text" class="form-control" id="phone" name="" value="<?php echo $info['phone']; ?>">
                    </div>
                </td>
            </tr>
            <tr style="margin-top: 10px;">
                <td>
                    &nbsp;
                </td>
                <td style="padding-left: 114px;padding-top: 10px;">
                    <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#myModal">
                        修改密码
                    </button>
                    <button type="button" class="btn btn-success btn-sm" id="submit">保存</button>
                </td>
            </tr>
        </table>
    </form>
    <div class="modal fade" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title" style="font-weight: bold;">修改密码</h6>
                    <button type="button" class="close btn-sm" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form id="changePass">
                        <table>
                            <tr>
                                <td>
                                    <label for="oldPass">旧密码:</label>
                                </td>
                                <td class="pl-10">
                                    <div class="input-group-sm">
                                        <input type="password" class="form-control" id="oldPass" name="oldPass"
                                               value="" placeholder="旧密码">
                                    </div>
                                </td>
                            </tr>
                            <tr class="mb-5">
                                <td>
                                    <label for="newPass">新密码:</label>
                                </td>
                                <td class="pl-10">
                                    <div class="input-group-sm">
                                        <input type="password" class="form-control" id="newPass" name="oldPass"
                                               value="" placeholder="新密码">
                                    </div>
                                </td>
                            </tr>
                            <tr class="mb-5">
                                <td>
                                    <label for="secondPass">确认密码:</label>
                                </td>
                                <td class="pl-10">
                                    <div class="input-group-sm">
                                        <input type="password" class="form-control" id="secondPass" name="oldPass"
                                               value="" placeholder="确认密码">
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success btn-sm" data-dismiss="modal" id="onChange">确定</button>
                    <button type="button" class="btn btn-warning btn-sm" data-dismiss="modal">取消</button>
                </div>
            </div>
        </div>
    </div>
</div>
<script>

    $(function () {
        $('#submit').click(function (e) {
            e.preventDefault();
            var name = $('#name').val();
            var phone = $('#phone').val();
            var email = $('#email').val();
            testEmail(email);
            testPhone(phone);
            var info = {
                id: "<?php echo $info['id']; ?>",
                name: name,
                phone: phone,
                email: email
            };
            $.ajax({
                type: "post",
                url: "<?php echo url('index/index/changeInfo'); ?>",
                data: info,
                dataType: "json",
                success: function (data) {
                    if (data.code == 1) {
                        layer.msg(data.msg, {
                            icon: 6,
                            time: 2000,
                        }, function () {
                            location.href = data.url;
                        });
                    } else {
                        msg('保存失败',data.msg);
                    }
                }
            })
        });
        $('#onChange').click(function (e) {
            e.preventDefault();
            var newPass = $('#newPass').val();
            var secondPass = $('#secondPass').val();
            var oldPass = $('#oldPass').val();
            if (newPass.length < 6) {
                msg('密码错误','新密码长度不小于6！');
                return;
            }
            if (oldPass == "<?php echo $info['pass']; ?>") {
                if (newPass == secondPass) {
                    var data = {
                        pass: newPass,
                        id: Number("<?php echo $info['id']; ?>")
                    };
                    console.log(data);
                    $.ajax({
                        type: "post",
                        url: "<?php echo url('index/index/changePass'); ?>",
                        data: data,
                        dataType: "",
                        success: function (data) {
                            if (data.code == 1) {
                                layer.msg(data.msg, {
                                    icon: 6,
                                    time: 2000,
                                }, function () {
                                    location.href = data.url;
                                });
                            } else {
                                layer.open({
                                    title: '退出登陆失败',
                                    icon: 2,
                                    content: data.msg,
                                });
                            }

                        }
                    });
                } else {
                    msg('密码错误','二次密码错误！');
                }
            } else {
                msg('密码错误','原始密码填写错误！')
            }
        });
    });
</script>
 </div>
<script src="../static/js/menuItem.js"></script>
</body>
</html>