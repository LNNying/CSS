<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:66:"C:\wamp64\www\phone\public/../ems/index\view\index\serve_list.html";i:1556943334;s:53:"C:\wamp64\www\phone\ems\index\view\public\__head.html";i:1557393599;s:55:"C:\wamp64\www\phone\ems\index\view\public\__footer.html";i:1555944734;}*/ ?>
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
<div class="content" style="height: auto;margin-bottom: 10px;padding-bottom: 20px;">
    <div class="role_title">
        <div class="icon_role"></div>
        <div class="role_word">
            维修订单
        </div>
    </div>
    <div style="margin-top: 5px;">
        <button type="button" class="btn btn-sm btn-success"
                style="margin-top: 5px;margin-left: 2px;margin-bottom: 5px;"
                data-toggle="modal"
                data-target="#addModal">添加
        </button>
    </div>
    <div style="width: 100%;height: auto; margin-top: 5px;">
        <table class="table table-bordered table-striped table-sm table-hover table-responsive-sm"
               style="text-align: center;">
            <thead>
            <tr>
                <th>序号</th>
                <th>编号</th>
                <th>客户名称</th>
                <th>产品名称</th>
                <th>维修原因</th>
                <th>维修天数</th>
                <th>维修人员</th>
                <th>创建时间</th>
                <td>操作</td>
            </tr>
            </thead>
            <tbody>
            <?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <tr>
                <td><?php echo $i + ($pageinit-1)*2; ?></td>
                <td><?php echo $vo['ser_no']; ?></td>
                <td><?php echo $vo['client_ser']['client_name']; ?></td>
                <td><?php echo $vo['product_ser']['pro_name']; ?></td>
                <td><?php echo $vo['ser_desc']; ?></td>
                <td><?php echo $vo['ser_day']; ?></td>
                <td><?php echo $vo['manger_ser']['manger_name']; ?></td>
                <td><?php echo $vo['creat_date']; ?></td>
                <td>
                    <button type="button" class="btn btn-sm btn-success edit"
                            style="margin-top: 5px;margin-left: 2px;margin-bottom: 5px;"
                            data-toggle="modal"
                            data-target="#editModal" data-id="<?php echo $vo['id']; ?>">编辑
                    </button>
                    <button type="button" class="btn btn-danger btn-sm delManger" id="delManger" data-id="<?php echo $vo['id']; ?>">删除
                    </button>
                </td>
            </tr>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            </tbody>
        </table>
    </div>
    <div class="page" style="margin-top: 10px;"><?php if($page): ?><?php echo $page; else: ?>&nbsp;<?php endif; ?></div>
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
                    <table style="text-align: right">
                        <tr>
                            <td><label for="manger_no">维修单编号:</label></td>
                            <td class="pl-10">
                                <div class="input-group-sm" style="float:left;">
                                    <input type="text" class="form-control" id="manger_no" name="" value="" disabled
                                           style="width: 180px;" placeholder="编号">
                                </div>
                                <div style="float:left;margin-left: 2px;">
                                    <button type="button" class="btn btn-sm btn-success" id="getNo" style="float:left;">
                                        获取
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="name">客户名称:</label></td>
                            <td class="pl-10">
                                <div class="input-group-sm">
                                    <div class="input-group-sm">
                                        <select class="form-control" id="name">
                                            <option value="0">请选择</option>
                                            <?php if(is_array($client) || $client instanceof \think\Collection || $client instanceof \think\Paginator): $i = 0; $__LIST__ = $client;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                            <option value="<?php echo $vo['id']; ?>"><?php echo $vo['client_name']; ?></option>
                                            <?php endforeach; endif; else: echo "" ;endif; ?>
                                        </select>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="proName">产品名称:</label></td>
                            <td class="pl-10">
                                <div class="input-group-sm">
                                    <select class="form-control" id="proName">
                                        <option value="0">请选择</option>
                                        <?php if(is_array($product) || $product instanceof \think\Collection || $product instanceof \think\Paginator): $i = 0; $__LIST__ = $product;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                        <option value="<?php echo $vo['id']; ?>"><?php echo $vo['pro_name']; ?></option>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </select>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="desc">维修原因:</label></td>
                            <td class="pl-10">
                                <div class="input-group-sm">
                                    <textarea class="form-control" cols="3" rows="2" placeholder="维修原因" id="desc" name="" value=""></textarea>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="manger">维修人员:</label></td>
                            <td class="pl-10">
                                <div class="input-group-sm">
                                    <select class="form-control" id="manger">
                                        <option value="0">请选择</option>
                                        <?php if(is_array($manger) || $manger instanceof \think\Collection || $manger instanceof \think\Paginator): $i = 0; $__LIST__ = $manger;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                        <option value="<?php echo $vo['id']; ?>"><?php echo $vo['manger_name']; ?></option>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </select>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="desc">维修天数:</label></td>
                            <td class="pl-10">
                                <div class="input-group-sm">
                                    <input type="text" class="form-control" id="day" name="" value=""
                                           placeholder="维修天数">
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
<div class="modal fade" id="editModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title">编辑</h6>
                <button type="button" class="close btn btn-sm" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form id="FormAdd">
                    <table style="text-align: right">
                        <tr>
                            <td><label for="manger_no">维修单编号:</label></td>
                            <td class="pl-10">
                                <div class="input-group-sm" style="float:left;">
                                    <input id="id" hidden type="text">
                                    <input type="text" class="form-control" id="no" name="" value="" disabled
                                           style="width: 230px;" placeholder="编号">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="nameS">客户名称:</label></td>
                            <td class="pl-10">
                                <div class="input-group-sm">
                                    <input type="text" class="form-control" id="nameS" name="" value=""
                                           placeholder="名称" disabled>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="pro">产品名称:</label></td>
                            <td class="pl-10">
                                <div class="input-group-sm">
                                    <input type="text" class="form-control" id="pro" name="" value=""
                                           placeholder="产品名称" disabled>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="reason">维修原因:</label></td>
                            <td class="pl-10">
                                <div class="input-group-sm">
                                    <textarea class="form-control" cols="3" rows="2" placeholder="维修原因" id="reason" name="" value=""></textarea>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="mangers">维修人员:</label></td>
                            <td class="pl-10">
                                <div class="input-group-sm">
                                    <input type="text" class="form-control" id="mangers" name="" value=""
                                           placeholder="维修人员" disabled>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="days">维修天数:</label></td>
                            <td class="pl-10">
                                <div class="input-group-sm">
                                    <input type="text" class="form-control" id="days" name="" value=""
                                           placeholder="维修天数">
                                </div>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success btn-sm" data-dismiss="modal" id="update">保存</button>
                <button type="button" class="btn btn-warning btn-sm" data-dismiss="modal">取消</button>
            </div>
        </div>
    </div>
</div>
<script>
    $(function () {
        $('.delManger').click(function (e) {
            e.preventDefault();
            var delId =  {
                id: $(this).attr('data-id')
            };
            $.ajax({
                type: "post",
                url: "<?php echo url('index/index/deleteServeInfo'); ?>",
                data: delId,
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
        $('#update').click(function (e) {
            e.preventDefault();
            var update = {
                id: $('#id').val(),
                reason: $('#reason').val(),
                day: $('#days').val()
            };
            $.ajax({
                type: "post",
                url: "<?php echo url('index/index/updateServeInfo'); ?>",
                data: update,
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
        $('.edit').click(function (e) {
            e.preventDefault();
            var id = {
                id: $(this).attr('data-id')
            };
            $.ajax({
                type: "post",
                url: "<?php echo url('index/index/getServeInfo'); ?>",
                data: id,
                dataType: "json",
                success: function (data) {
                    if (data.serve.id) {
                        $('#id').val(data.serve.id);
                        $('#no').val(data.serve.ser_no);
                        $('#nameS').val(data.client.client_name);
                        $('#pro').val(data.product.pro_name);
                        $('#reason').val(data.serve.ser_desc);
                        $('#mangers').val(data.manger.manger_name);
                        $('#days').val(data.serve.ser_day)
                    } else {
                        msg('错误', '数据获取异常！');
                    }
                }
            })
        });
        $('#save').click(function (e) {
            e.preventDefault();
            var info = {
                no: $('#manger_no').val(),
                name: $('#name').val(),
                proName: $('#proName').val(),
                desc: $('#desc').val(),
                manger: $('#manger').val(),
                day: $('#day').val()
            };
            $.ajax({
                type: "post",
                url: "<?php echo url('index/index/saveServeInfo'); ?>",
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
                        layer.open({
                            title: '操作失败',
                            icon: 2,
                            content: data.msg,
                        });
                    }
                }
            })
        });
        $('#getNo').click(function (e) {
            e.preventDefault();
            var number = '';
            var no = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
            for (var i = 0; i < 6; i++) {
                var index = Math.round(Math.random() * 9);
                number += no[index];
            }
            var mangerNo = "SERN" + number;
            $('#manger_no').val(mangerNo);
        });
    })
</script>
 </div>
<script src="../static/js/menuItem.js"></script>
</body>
</html>