<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:60:"C:\wamp64\www\phone\public/../ems/index\view\index\role.html";i:1552556735;s:53:"C:\wamp64\www\phone\ems\index\view\public\__head.html";i:1557393599;s:55:"C:\wamp64\www\phone\ems\index\view\public\__footer.html";i:1555944734;}*/ ?>
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
            <?php endif; if(session('roleId') == 1 || session('roleId') == 4): ?>
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
			<?php endif; if(session('roleId') == 1): ?>
            <div class="menu-item">
                <div class="title-menu">
                    <i class="fa fa-globe"></i>
                    部门管理
                    <i class="fa fa-angle-down"></i>
                    <i class="fa fa-angle-up"></i>
                </div>
                <div class="sub-menu">
                    <a href="<?php echo url('index/index/department'); ?>">部门配置</a>
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
                    <a href="<?php echo url('index/index/role'); ?>">角色配置</a>
                </div>
                <!--<div class="sub-menu">-->
                    <!--<a href="#">角色说明</a>-->
                <!--</div>-->
            </div>
			<?php endif; if(session('roleId') == 1 || session('roleId') == 5 || session('roleId') == 4): ?>
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
			<?php endif; if(session('roleId') == 1 || session('roleId') == 2 || session('roleId') == 4): ?>
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
<nav class="breadcrumb">
    <a class="breadcrumb-item" href="<?php echo url('index/index/index'); ?>">
        <i class="fa fa-home"></i>首页
    </a>
</nav>
<div class="content" style="padding: 0px;">
    <div class="role_title">
        <div class="icon_role"></div>
        <div class="role_word">
            角色管理
        </div>
    </div>
    <div class="row" style="height: calc(100% - 30px);">
        <div class="col-sm-5 role_left_table">
            <button type="button" class="btn btn-sm btn-success" style="margin-top: 5px;margin-left: 2px;"
                    data-toggle="modal"
                    data-target="#addModal">添加
            </button>
            <div class="table-responsive" style="margin-top: 5px;">
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                    <tr>
                        <th style="text-align: center">序号</th>
                        <th style="text-align: center">角色名称</th>
                        <th style="text-align: center">角色描述</th>
                        <th style="width: 150px;text-align: center;">操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td style="text-align: center"><?php echo $vo['role_name']; ?></td>
                        <td style="text-align: center"><?php echo $vo['role_desc']; ?></td>
                        <td style="text-align: center">
                            <button type="button" class="btn btn-success btn-sm changeRole" data-toggle="modal"
                                    data-target="#roleModal" data-id="<?php echo $vo['id']; ?>">修改
                            </button>
                            <button type="button" class="btn btn-light btn-sm showMange" data-id="<?php echo $vo['id']; ?>">显示成员
                            </button>
                        </td>
                    </tr>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-sm-7">
            <div class="table-responsive" style="margin-top: 10px;">
                <table class="table table-striped table-bordered" style="text-align: center">
                    <thead>
                    <tr>
                        <th width="100px">序号</th>
                        <th width="130px">编号</th>
                        <th width="100px">姓名</th>
                        <th width="130px">联系方式</th>
                    </tr>
                    </thead>
                    <tbody class="show">
                    <tr>
                        <td colspan="4" style="text-align: center">暂无数据</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="roleModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title">编辑</h6>
                <button type="button" class="close btn btn-sm" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form id="roleForm">
                    <table>
                        <tr>
                            <td><label for="departments">归属部门:</label></td>
                            <td class="pl-10">
                                <div class="input-group-sm">
                                    <!--<select class="form-control" id="departments">-->
                                        <!--<option>请选择</option>-->
                                        <!--<?php if(is_array($department) || $department instanceof \think\Collection || $department instanceof \think\Paginator): $i = 0; $__LIST__ = $department;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>-->
                                        <!--<option value="<?php echo $vo['id']; ?>"><?php echo $vo['department_name']; ?></option>-->
                                        <!--<?php endforeach; endif; else: echo "" ;endif; ?>-->
                                    <!--</select>-->
                                    <input type="text" class="form-control" name="departments" id="departments" disabled/>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="roleName">名称:</label></td>
                            <td class="pl-10">
                                <div class="input-group-sm">
                                    <input type="text" name="id" hidden id="id"/>
                                    <input type="text" class="form-control" name="roleName" id="roleName"/>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="roleDesc">描述:</label></td>
                            <td class="pl-10">
                                <div class="input-group-sm">
                                    <input type="text" class="form-control" name="roleDesc" id="roleDesc"/>
                                </div>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success btn-sm" data-dismiss="modal" id="roleSubmit">确定</button>
                <button type="button" class="btn btn-warning btn-sm" data-dismiss="modal">取消</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="addModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title">编辑</h6>
                <button type="button" class="close btn btn-sm" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form id="addForm">
                    <table>
                        <tr>
                            <td><label for="department">归属部门:</label></td>
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
                        <tr>
                            <td><label for="name">名称:</label></td>
                            <td class="pl-10">
                                <div class="input-group-sm">
                                    <input type="text" class="form-control" name="roleName" id="name"/>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="desc">描述:</label></td>
                            <td class="pl-10">
                                <div class="input-group-sm">
                                    <input type="text" class="form-control" name="roleDesc" id="desc"/>
                                </div>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success btn-sm" data-dismiss="modal" id="roleAdd">确定</button>
                <button type="button" class="btn btn-warning btn-sm" data-dismiss="modal">取消</button>
            </div>
        </div>
    </div>
</div>
<script>
    $(function () {
        $('.changeRole').click(function (e) {
            e.preventDefault();
            var roleId = {
                id: $(this).attr("data-id")
            };
            $.ajax({
                type: "post",
                url: "<?php echo url('index/index/roleEditInfo'); ?>",
                data: roleId,
                dataType: "json",
                success: function (data) {
                    if (data) {
                        $('#id').val(data.id);
                        $('#departments').val(data.department.department_name);
                        $('#roleName').val(data.role_name);
                        $('#roleDesc').val(data.role_desc)
                    } else {
                        msg('编辑失败', '系统运行错误，请检查后台数据！');
                    }
                }
            })
        });
        $('#roleSubmit').click(function (e) {
            e.preventDefault();
            var roleName = $('#roleName').val();
            var roleDesc = $('#roleDesc').val();
            var id = $('#id').val();
            if (roleName.length <= 0) {
                msg('编辑失败', '角色名称必填！');
            }
            var role = {
                roleName: roleName,
                roleDesc: roleDesc,
                id: id
            }
            $.ajax({
                type: "post",
                url: "<?php echo url('index/index/roleEdit'); ?>",
                data: role,
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
                            title: '编辑失败',
                            icon: 2,
                            content: data.msg,
                        });
                    }
                }
            })
        });
        $('.showMange').click(function (e) {
            e.preventDefault();
            var showId = {
                id: $(this).attr('data-id')
            };
            var html = '';
            var list = [];
            $.ajax({
                type: "post",
                url: "<?php echo url('index/index/role'); ?>",
                data: showId,
                dataType: "json",
                success: function (data) {
                    if (data) {
                        console.log(data.data.data[0].manger);
                        list = data.data.data[0].manger;
                        if (list.length > 0) {
                            for (var i = 0; i < list.length; i++) {
                                html += '<tr>' +
                                    '<td>' + list[i].id + '</td>' +
                                    '<td>' + list[i].manger_no + '</td>' +
                                    '<td>' + list[i].manger_name + '</td>' +
                                    '<td>' + list[i].phone + '</td>';
                                '</tr>'
                            }
                        } else {
                            html = '<tr>' + '<td colspan="4" style="text-align: center">暂无数据</td>' + '</tr>'
                        }
                        $('.show').html(html);
                    } else {
                        msg('错误', '获取列表信息失败！');
                    }
                }
            });
        });
        // 添加角色
        $('#roleAdd').click(function (e) {
            e.preventDefault();
            var depart_name = $('#department').val();
            var name = $('#name').val();
            var desc = $('#desc').val();
            if (name.length <= 0) {
                msg('填写错误', '角色名称必填！');
            }
            if (depart_name == '请选择') {
                msg('错误','归属部门必选！');
                return;
            }
            var roleData = {
                department: depart_name,
                name: name,
                desc: desc
            };
            $.ajax({
                type: "post",
                url: "<?php echo url('index/index/roleAdd'); ?>",
                data: roleData,
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
                        msg('填写错误', data.msg);
                    }
                }
            });
        });
    });
</script>
 </div>
<script src="../static/js/menuItem.js"></script>
</body>
</html>