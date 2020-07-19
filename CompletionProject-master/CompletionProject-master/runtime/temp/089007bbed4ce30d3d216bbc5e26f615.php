<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:64:"C:\wamp64\www\phone\public/../ems/index\view\index\sup_list.html";i:1556942546;s:53:"C:\wamp64\www\phone\ems\index\view\public\__head.html";i:1557393599;s:55:"C:\wamp64\www\phone\ems\index\view\public\__footer.html";i:1555944734;}*/ ?>
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
            供应商
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
                <th>名称</th>
                <th>联系地址</th>
                <th>联系方式</th>
                <th>创建人</th>
                <th>创建时间</th>
                <td>操作</td>
            </tr>
            </thead>
            <tbody>
            <?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <tr>
                <td><?php echo $i + ($pageinit-1)*2; ?></td>
                <td><?php echo $vo['sup_no']; ?></td>
                <td><?php echo $vo['sup_name']; ?></td>
                <td><?php echo $vo['sup_add']; ?></td>
                <td><?php echo $vo['sup_phone']; ?></td>
                <td><?php echo $vo['manger_s']['manger_name']; ?></td>
                <td><?php echo $vo['create_date']; ?></td>
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
                            <td><label for="manger_no">编号:</label></td>
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
                            <td><label for="name">名称:</label></td>
                            <td class="pl-10">
                                <div class="input-group-sm">
                                    <input type="text" class="form-control" id="name" name="" value="" placeholder="名称">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="address">联系地址:</label></td>
                            <td class="pl-10">
                                <div class="input-group-sm">
                                    <input type="text" class="form-control" id="address" name="" value=""
                                           placeholder="联系地址">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="phone">联系电话:</label></td>
                            <td class="pl-10">
                                <div class="input-group-sm">
                                    <input type="text" class="form-control" id="phone" name="" value=""
                                           placeholder="联系电话">
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
                            <td><label for="manger_no">编号:</label></td>
                            <td class="pl-10">
                                <div class="input-group-sm" style="float:left;">
                                    <input id="id" hidden type="text">
                                    <input type="text" class="form-control" id="no" name="" value="" disabled
                                           style="width: 230px;" placeholder="编号">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="nameS">名称:</label></td>
                            <td class="pl-10">
                                <div class="input-group-sm">
                                    <input type="text" class="form-control" id="nameS" name="" value=""
                                           placeholder="名称">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="addS">联系地址:</label></td>
                            <td class="pl-10">
                                <div class="input-group-sm">
                                    <input type="text" class="form-control" id="addS" name="" value=""
                                           placeholder="联系地址">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="phoneS">联系电话:</label></td>
                            <td class="pl-10">
                                <div class="input-group-sm">
                                    <input type="text" class="form-control" id="phoneS" name="" value=""
                                           placeholder="联系电话">
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
                url: "<?php echo url('index/index/deleteSupInfo'); ?>",
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
                name: $('#nameS').val(),
                phone: $('#phoneS').val(),
                address: $('#addS').val()
            };
            $.ajax({
                type: "post",
                url: "<?php echo url('index/index/updateSupInfo'); ?>",
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
                url: "<?php echo url('index/index/getInfo'); ?>",
                data: id,
                dataType: "json",
                success: function (data) {
                    console.log(data);
                    if (data.id) {
                        $('#id').val(data.id);
                        $('#no').val(data.sup_no);
                        $('#nameS').val(data.sup_name);
                        $('#phoneS').val(data.sup_phone);
                        $('#addS').val(data.sup_add);
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
                address: $('#address').val(),
                phone: $('#phone').val(),
            };
            $.ajax({
                type: "post",
                url: "<?php echo url('index/index/saveSupInfo'); ?>",
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
            var mangerNo = "SN" + number;
            $('#manger_no').val(mangerNo);
        });
    })
</script>
 </div>
<script src="../static/js/menuItem.js"></script>
</body>
</html>