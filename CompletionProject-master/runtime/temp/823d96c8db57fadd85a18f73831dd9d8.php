<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:66:"C:\wamp64\www\phone\public/../ems/index\view\index\add_manger.html";i:1557383119;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>柠檬手机公司管理系统</title>
    <link rel="stylesheet" href="/static/bootstrap/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/static/layer/css/layer.css"/>
    <link rel="stylesheet" href="/static/css/index.css">
    <script src="/static/bootstrap/jquery.min.js"></script>
    <script src="/static/layer/js/layer.js"></script>
    <script src="https://cdn.staticfile.org/popper.js/1.12.5/umd/popper.min.js"></script>
    <script src="/static/bootstrap/bootstrap.min.js"></script>
    <script src="/static/js/judgeBrowser.js"></script>
</head>
<body>
<div id="fullScreen">
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
        <a class="navbar-brand" href="#"><img src="/static/images/logo.svg"/></a>
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
    <script src="/static/Echart/echarts.min.js"></script>
    <script src="/static/Echart/echarts-gl.min.js"></script>
    <script src="/static/Echart/echarts-liquidfill.min.js"></script>
    <script src="/static/Echart/dark.js"></script>
    <script src="/static/Echart/footer.js"></script>
    <script src="/static/js/common.js"></script>
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
<nav class="breadcrumb">
    <a class="breadcrumb-item" href="<?php echo url('index/index/index'); ?>">
        <i class="fa fa-home"></i>首页
    </a>
    <a class="breadcrumb-item" href="<?php echo url('index/index/mangerList'); ?>">
        员工列表
    </a>
</nav>
<div class="content" style="height: auto;margin-bottom: 10px;padding-bottom: 20px;">
    <div class="role_title">
        <div class="icon_role"></div>
        <div class="role_word">
            员工添加
        </div>
    </div>
    <form id="addForm" class="addForm" style="margin-top: 5px;margin-left: 11px">
        <div class="row">
            <div class="col-sm-4">
                <table>
                    <tr>
                        <td><label for="manger_no">员工编号:</label></td>
                        <td class="pl-10">
                            <div class="input-group-sm" style="float:left;">
                                <input type="text" class="form-control" id="manger_no" name="" value="" disabled style="width: 180px;" placeholder="编号">
                            </div>
                            <div style="float:left;margin-left: 2px;">
                                <button type="button" class="btn btn-sm btn-success" id="getNo" style="float:left;">获取</button>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="col-sm-4">
                <table>
                    <tr>
                        <td><label for="name">员工姓名:</label></td>
                        <td class="pl-10">
                            <div class="input-group-sm">
                                <input type="text" class="form-control" id="name" name="" value="" placeholder="姓名">
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="col-sm-4">
                <table>
                    <tr>
                        <td><label for="name">登录密码:</label></td>
                        <td class="pl-10">
                            <div class="input-group-sm">
                                <input type="password" class="form-control" id="pass" name="" value="" placeholder="密码">
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="row" style="margin-top: 5px;">
            <div class="col-sm-4">
                <table>
                    <tr>
                        <td style="padding-left: 32px;"><label for="sex">性别:</label></td>
                        <td class="pl-10">
                            <div class="input-group-sm">
                                <select class="form-control" id="sex">
                                    <option value="0">男</option>
                                    <option value="1">女</option>
                                </select>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="col-sm-4">
                <table>
                    <tr>
                        <td style="padding-left: 32px;"><label for="address">地址:</label></td>
                        <td class="pl-10">
                            <div class="input-group-sm">
                                <input type="text" class="form-control" id="address" name="" value="" placeholder="地址">
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="col-sm-4">
                <table>
                    <tr>
                        <td><label for="marry">婚姻状态:</label></td>
                        <td class="pl-10">
                            <div class="input-group-sm">
                                <select class="form-control" id="marry">
                                    <option value="0">未婚</option>
                                    <option value="1">已婚</option>
                                </select>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="row" style="margin-top: 5px;">
            <div class="col-sm-4">
                <table>
                    <tr>
                        <td style="padding-left: 16px;"><label for="name">手机号:</label></td>
                        <td class="pl-10">
                            <div class="input-group-sm">
                                <input type="text" class="form-control" id="phone" name="" value="" placeholder="手机号">
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="col-sm-4">
                <table>
                    <tr>
                        <td style="padding-left: 32px;"><label for="name">邮箱:</label></td>
                        <td class="pl-10">
                            <div class="input-group-sm">
                                <input type="email" class="form-control" id="email" name="" value="" placeholder="邮箱">
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </form>
    <div class="role_title"></div>
    <form class="addForm" style="margin-top: 25px;margin-left: 11px">
        <div class="row" >
            <div class="col-sm-4">
                <table>
                    <tr>
                        <td><label for="name">隶属部门:</label></td>
                        <td class="pl-10">
                            <div class="input-group-sm">
                                <select class="form-control" id="department">
                                    <option>请选择</option>
                                    <?php if(is_array($department) || $department instanceof \think\Collection || $department instanceof \think\Paginator): $i = 0; $__LIST__ = $department;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                    <option value="<?php echo $vo['id']; ?>"><?php echo $vo['department_name']; ?></option>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </select>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="col-sm-4">
                <table>
                    <tr>
                        <td><label for="name">角色类型:</label></td>
                        <td class="pl-10">
                            <div class="input-group-sm">
                                <select class="form-control" id="role">
                                    <option>请选择</option>
                                    <?php if(is_array($role) || $role instanceof \think\Collection || $role instanceof \think\Paginator): $i = 0; $__LIST__ = $role;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                    <option value="<?php echo $vo['id']; ?>"><?php echo $vo['role_name']; ?></option>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </select>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="col-sm-4">
                <table>
                    <tr>
                        <td><label for="name">职位属性:</label></td>
                        <td class="pl-10">
                            <div class="input-group-sm">
                                <select class="form-control" id="incumbency">
                                    <option>请选择</option>
                                    <option value="0">在职员工</option>
                                    <option value="1">实习员工</option>
                                </select>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="row" style="margin-top: 5px;">
            <div class="col-sm-4">
                <table>
                    <tr>
                        <td><label for="name">合同期限:</label></td>
                        <td class="pl-10">
                            <div class="input-group-sm">
                                <input type="text" class="form-control" id="year" name="" value="" placeholder="期限">
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </form>
    <div class="role_title"></div>
    <div style="margin-top: 20px;">
        <button type="button" class="btn btn-sm btn-success" id="submits">提交</button>
    </div>
</div>
<script>
    $(function () {
        $('#getNo').click(function (e) {
            e.preventDefault();
            var number = '';
            var no = [0,1,2,3,4,5,6,7,8,9];
            for (var i = 0; i < 6; i++) {
                var index = Math.round(Math.random()*9);
                number += no[index];
            }
            var mangerNo = "EN" + number;
            $('#manger_no').val(mangerNo);
        });
        $('#year').change(function (e) {
            e.preventDefault();
            $('#year').val($('#year').val() + '年');
        });
        // 伴随更改
        $('#department').change(function (e) {
            e.preventDefault();
            var depart_id = {
                id: $('#department').val()
            };
            console.log(depart_id);
            var roleHtml = '';
            $.ajax({
                type: "post",
                url: "<?php echo url('index/index/changeRole'); ?>",
                data: depart_id,
                dataType: "json",
                success: function (data) {
                    console.log(data);
                    if (data.length > 0) {
                        for (var i = 0; i < data.length; i++) {
                            roleHtml += '<option value="'+data[i].id+'">'+data[i].role_name+'</option>'
                        }
                    } else {
                        roleHtml = '<option>暂无数据</option>'
                    }
                    $('#role').html(roleHtml);
                }
            });
        });
        // 提交
        $('#submits').click(function (e) {
            e.preventDefault();
            var manger_no = $('#manger_no').val();
            var name = $('#name').val();
            var pass = $('#pass').val();
            var sex = $('#sex').val();
            var address = $('#address').val();
            var marry = $('#marry').val();
            var phone = $('#phone').val();
            var email = $('#email').val();
            var department = $('#department').val();
            var role = $('#role').val();
            var incumbency = $('#incumbency').val();
            var year = $('#year').val();
            if (email.length > 0 || email.trim() != '') {
                testEmail(email);
            }
            if (phone.length > 0 || phone.trim() != '') {
                testPhone(phone);
            }
            if (incumbency == '0') {
                if (year.length <= 0 || year.trim() == '') {
                    msg('错误','该员工为在职员工，请填写合同期限！');
                    return;
                }
            }
            if (department == 1) {
                if (role == 2 || role == 4) {

                } else {
                    msg('错误','部门与角色不匹配！');
                    return;
                }
            }
            if (department == 2) {
                if (role == 3 || role == 5) {

                } else {
                    msg('错误','部门与角色不匹配！');
                    return;
                }
            }
            if (department == '请选择') {
                msg('错误','部门必选！');
            }
            if (role == '请选择') {
                msg('错误','角色必选！');
            }
            if (incumbency == '请选择') {
                msg('错误','职位属性必选！');
            }
            var mangerInfo = {
                no: manger_no,
                name: name,
                pass: pass,
                sex: sex,
                address: address,
                marry: marry,
                phone: phone,
                email: email,
                department: department,
                role: role,
                incumbency: incumbency,
                year: year
            };
            $.ajax({
                type: "post",
                url: "<?php echo url('index/index/addManger'); ?>",
                data: mangerInfo,
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
                        layer.open({
                            title: '删除失败',
                            icon: 2,
                            content: data.msg,
                        });
                    }
                }
            });

        });
    });
</script>
</div>
<script src="/static/js/menuItem.js"></script>
</body>
</html>