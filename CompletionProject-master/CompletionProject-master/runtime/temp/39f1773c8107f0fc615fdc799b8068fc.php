<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:68:"C:\wamp64\www\phone\public/../ems/index\view\index\product_role.html";i:1555945762;s:53:"C:\wamp64\www\phone\ems\index\view\public\__head.html";i:1557393599;s:55:"C:\wamp64\www\phone\ems\index\view\public\__footer.html";i:1555944734;}*/ ?>
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
    <a class="breadcrumb-item" href="<?php echo url('index/index/productList'); ?>">
        产品列表
    </a>
</nav>
<div class="content" style="height: auto;margin-bottom: 10px;padding-bottom: 20px;">
    <div class="role_title">
        <div class="icon_role"></div>
        <div class="role_word">
            产品分类
        </div>
    </div>
    <div class="row">
        <div class="col-sm-5 role_left_table">
            <button type="button" class="btn btn-sm btn-success"
                    style="margin-top: 5px;margin-left: 2px;margin-bottom: 5px;"
                    data-toggle="modal"
                    data-target="#addModal">添加
            </button>
            <table class="table table-sm table-hover table-bordered table-striped table-responsive-sm"
                   style="text-align: center">
                <thead>
                <tr>
                    <td>序号</td>
                    <td>名称</td>
                    <td>创建人</td>
                    <td>创建时间</td>
                    <td>操作</td>
                </tr>
                </thead>
                <tbody>
                <?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $vo['role_name']; ?></td>
                    <td><?php echo $vo['addManger']['manger_name']; ?></td>
                    <td><?php echo $vo['add_time']; ?></td>
                    <td style="text-align: center">
                        <button type="button" class="btn btn-info btn-sm showInfo" data-id="<?php echo $vo['id']; ?>">详情</button>
                        <button type="button" class="btn btn-success btn-sm changeRolePro" data-toggle="modal"
                                data-target="#roleModal" data-id="<?php echo $vo['id']; ?>">修改
                        </button>
                        <button type="button" class="btn btn-danger btn-sm delete" data-id="<?php echo $vo['id']; ?>">删除</button>
                    </td>
                </tr>
                <?php endforeach; endif; else: echo "" ;endif; ?>
                </tbody>
            </table>
        </div>
        <div class="col-sm-7">
            <div class="" style="margin-top: 10px;">
                <table class="table table-striped table-bordered table-responsive-sm table-sm table-hover"
                       style="text-align: center">
                    <thead>
                    <tr>
                        <th>序号</th>
                        <th>产品编号</th>
                        <th>产品名称</th>
                        <th>供应商</th>
                        <th>售价</th>
                        <th>剩余数量</th>
                    </tr>
                    </thead>
                    <tbody class="show">
                    <tr>
                        <td colspan="6" style="text-align: center">暂无数据</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="addModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title">添加</h6>
                <button type="button" class="close btn btn-sm" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form id="roleFormAdd">
                    <table>
                        <tr>
                            <td><label for="roleProName">名称:</label></td>
                            <td class="pl-10">
                                <div class="input-group-sm">
                                    <input type="text" class="form-control" name="name" id="name"/>
                                </div>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success btn-sm" data-dismiss="modal" id="save">保存</button>
                <button type="button" class="btn btn-warning btn-sm" data-dismiss="modal">取消</button>
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
                            <td><label for="roleProName">名称:</label></td>
                            <td class="pl-10">
                                <div class="input-group-sm">
                                    <input type="text" hidden id="id"/>
                                    <input type="text" class="form-control" name="roleProName" id="roleProName"/>
                                </div>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success btn-sm" data-dismiss="modal" id="roleProSubmit">保存</button>
                <button type="button" class="btn btn-warning btn-sm" data-dismiss="modal">取消</button>
            </div>
        </div>
    </div>
</div>
<script>
    $(function () {
        // 显示详情
        $('.showInfo').click(function (e) {
            e.preventDefault();
            var infoId = {
                id: $(this).attr('data-id')
            };
            var html = '';
            $.ajax({
                type: "post",
                url: "<?php echo url('index/index/showInfo'); ?>",
                data: infoId,
                dataType: "json",
                success: function (data) {
                    if (data) {
                        if (data.length > 0) {
                            for (var i = 0; i < data.length; i++) {
                                var price = '';
                                price = data[i].quantity - data[i].salenumber;
                                html += '<tr><td>'+(i+1)+'</td><td>'+data[i].pro_no+'</td><td>'+data[i].pro_name+'</td><td>'+data[i].supplier.sup_name+'</td><td>'+data[i].price+'</td><td>'+price+'</td></tr>'
                            }
                        } else {
                            html = '<tr>' + '<td colspan="6" style="text-align: center">暂无数据</td>' + '</tr>'
                        }
                        $('.show').html(html);
                    } else {
                        msg('错误', '获取列表信息失败！');
                    }
                }
            })
        });
        // 编辑
        $('#roleProSubmit').click(function (e) {
            e.preventDefault();
            var edit = {
                id: $('#id').val(),
                name: $('#roleProName').val()
            };
            $.ajax({
                type: "post",
                url: "<?php echo url('index/index/productRole'); ?>",
                data: edit,
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
                            title: '操作失败',
                            icon: 2,
                            content: data.msg,
                        });
                    }
                }
            })
        });
        // 删除
        $('.delete').click(function (e) {
            e.preventDefault();
            var deleteId = {
                id: $(this).attr('data-id')
            };
            $.ajax({
                type: "post",
                url: "<?php echo url('index/index/deleteRolePro'); ?>",
                data: deleteId,
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
                            title: '操作失败',
                            icon: 2,
                            content: data.msg,
                        });
                    }
                }
            })
        });
        // 添加
        $('#save').click(function (e) {
            e.preventDefault();
            var name = {
                name: $('#name').val()
            };
            $.ajax({
                type: "post",
                url: "<?php echo url('index/index/addRolePro'); ?>",
                data: name,
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
        // 获取修改信息
        $('.changeRolePro').click(function (e) {
            e.preventDefault();
            var id = {
                id: $(this).attr('data-id')
            };
            $.ajax({
                type: "post",
                url: "<?php echo url('index/index/editRolePro'); ?>",
                data: id,
                dataType: "json",
                success: function (data) {
                    if (data) {
                        $('#id').val(data.id);
                        $('#roleProName').val(data.role_name);
                    } else {
                        msg('编辑失败', '系统运行错误，请检查后台数据！');
                    }
                }
            })
        });
    })
</script>
 </div>
<script src="../static/js/menuItem.js"></script>
</body>
</html>