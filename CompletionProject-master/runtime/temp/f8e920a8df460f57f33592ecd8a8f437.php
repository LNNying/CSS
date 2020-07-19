<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:67:"C:\wamp64\www\phone\public/../ems/index\view\index\wage_manger.html";i:1557476278;s:53:"C:\wamp64\www\phone\ems\index\view\public\__head.html";i:1557393599;s:55:"C:\wamp64\www\phone\ems\index\view\public\__footer.html";i:1555944734;}*/ ?>
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
<nav class="breadcrumb" xmlns="http://www.w3.org/1999/html">
    <a class="breadcrumb-item" href="<?php echo url('index/index/index'); ?>">
        <i class="fa fa-home"></i>首页
    </a>
</nav>
<div class="content" style="height: auto;margin-bottom: 10px;padding-bottom: 20px;">
    <div class="role_title">
        <div class="icon_role"></div>
        <div class="role_word">
            工资管理
        </div>
    </div>
    <div style="margin-top: 5px;">
        <button type="button" class="btn btn-sm btn-success"
                style="margin-top: 5px;margin-left: 2px;margin-bottom: 5px;"
                data-toggle="modal"
                data-target="#updateModal">税率维护
        </button>
        <button type="button" class="btn btn-sm btn-success"
                style="margin-top: 5px;margin-left: 2px;margin-bottom: 5px;"
                data-toggle="modal"
                data-target="#addModal">工资维护
        </button>
    </div>
    <div style="width: 100%;height: auto; margin-top: 5px;">
        <table class="table table-bordered table-striped table-sm table-hover table-responsive-sm"
               style="text-align: center;">
            <thead>
            <tr>
                <th>序号</th>
                <th>员工姓名</th>
                <th>所属部门</th>
                <th>销售提成(元)</th>
                <th>个人所得税(元)</th>
                <th>所得工资(元)</th>
                <th>状态</th>
                <th>创建时间</th>
                <td>操作</td>
            </tr>
            </thead>
            <tbody>
            <?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <tr>
                <td><?php echo $i + ($pageinit-1)*2; ?></td>
                <td><?php echo $vo['manger_w']['manger_name']; ?></td>
                <td><?php echo $vo['department_w']['department_name']; ?></td>
                <td><?php echo $vo['bonus']; ?></td>
                <td><?php echo $vo['surplusWage']; ?></td>
                <td><?php echo $vo['allWage']; ?></td>
                <?php if($vo['state'] == 0): ?>
                <td class="bg-danger"><span>未审批</span></td>
                <?php elseif($vo['state'] == 1): ?>
                <td class="bg-success"><span>已审批</span></td>
                <?php endif; ?>
                <td><?php echo $vo['create_date']; ?></td>
                <td>
                    <!--<button type="button" class="btn btn-sm btn-success edit"-->
                            <!--style="margin-top: 5px;margin-left: 2px;margin-bottom: 5px;"-->
                            <!--data-toggle="modal"-->
                            <!--data-target="#editModal" data-id="<?php echo $vo['id']; ?>">编辑-->
                    <!--</button>-->
                    <button type="button" class="btn btn-success btn-sm approve" id="approve" data-id="<?php echo $vo['id']; ?>" <?php if($vo['state'] == 1): ?>disabled<?php endif; ?>>审批</button>
                    <button type="button" class="btn btn-danger btn-sm delManger" id="delManger" data-approve="<?php echo $vo['state']; ?>" data-id="<?php echo $vo['id']; ?>">删除
                    </button>
                </td>
            </tr>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            </tbody>
        </table>
    </div>
    <div class="page" style="margin-top: 10px;"><?php if($page): ?><?php echo $page; else: ?>&nbsp;<?php endif; ?></div>
</div>
<div class="modal fade" id="updateModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title">税率维护</h6>
                <button type="button" class="close btn btn-sm" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form id="roleFormAdd">
                    <table style="text-align: right">
                        <tr>
                            <td><label for="tax5">5001-8000:</label></td>
                            <td class="pl-10">
                                <div class="input-group-sm">
                                    <input type="text" hidden value="<?php echo $tax['id']; ?>" id="id">
                                    <input type="text" class="form-control changeNum" id="tax5" name="" value="<?php echo $tax['tax5']; ?>">
                                </div>
                            </td>
                            <td>%</td>
                        </tr>
                        <tr>
                            <td><label for="tax8">8001-17000:</label></td>
                            <td class="pl-10">
                                <div class="input-group-sm">
                                    <input type="text" class="form-control changeNum" id="tax8" name="" value="<?php echo $tax['tax8']; ?>"
                                           placeholder="">
                                </div>
                            </td>
                            <td>%</td>
                        </tr>
                        <tr>
                            <td><label for="sale">销售提成:</label></td>
                            <td class="pl-10">
                                <div class="input-group-sm">
                                    <input type="text" class="form-control changeNum" id="sale" name="" value="<?php echo $tax['royalty']; ?>"
                                           placeholder="">
                                </div>
                            </td>
                            <td>元</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>
                                <div style="float: left;margin-left: 10px;">
                                    <span>每订单提成为<?php echo $tax['royalty']; ?>元</span>
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
<!--工资维护-->
<div class="modal fade" id="addModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title">工资维护</h6>
                <button type="button" class="close btn btn-sm" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form id="FormAdd">
                    <table style="text-align: right">
                        <tr>
                            <td><label for="name">员工姓名</label></td>
                            <td class="pl-10">
                                <div class="input-group-sm">
                                    <select class="form-control" id="name">
                                        <option value="0">请选择</option>
                                        <?php if(is_array($manger) || $manger instanceof \think\Collection || $manger instanceof \think\Paginator): $i = 0; $__LIST__ = $manger;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                        <option value="<?php echo $vo['id']; ?>"><?php echo $vo['manger_name']; ?></option>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </select>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="department">所属部门</label></td>
                            <td class="pl-10">
                                <div class="input-group-sm">
                                    <select class="form-control" id="department">
                                        <option value="0">请选择</option>
                                        <?php if(is_array($department) || $department instanceof \think\Collection || $department instanceof \think\Paginator): $i = 0; $__LIST__ = $department;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                        <option value="<?php echo $vo['id']; ?>"><?php echo $vo['department_name']; ?></option>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </select>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="all">本月工资:</label></td>
                            <td class="pl-10">
                                <div class="input-group-sm">
                                    <input type="text" class="form-control" id="all" name="" value=""
                                           placeholder="本月工资">
                                </div>
                            </td>
                            <td>（元）</td>
                        </tr>
                        <tr>
                            <td><label for="surplusWage">税款金额:</label></td>
                            <td class="pl-10">
                                <div class="input-group-sm">
                                    <input type="text" class="form-control" id="surplusWage" name="" value="" disabled
                                           placeholder="税款金额">
                                </div>
                            </td>
                            <td>（元）</td>
                        </tr>
                        <tr>
                            <td><label for="saleNum">所售单数:</label></td>
                            <td class="pl-10">
                                <div class="input-group-sm">
                                    <input type="text" class="form-control" id="saleNum" name="" value="" disabled
                                           placeholder="所售单数">
                                </div>
                            </td>
                            <td>（单）</td>
                        </tr>
                        <tr>
                            <td><label for="shouldGet">应得提成:</label></td>
                            <td class="pl-10">
                                <div class="input-group-sm">
                                    <input type="text" class="form-control" id="shouldGet" name="" value="" disabled
                                           placeholder="应得提成">
                                </div>
                            </td>
                            <td>（元）</td>
                        </tr>
                        <tr>
                            <td><label for="allWage">所得工资:</label></td>
                            <td class="pl-10">
                                <div class="input-group-sm">
                                    <input type="text" class="form-control" id="allWage" name="" value="" disabled
                                           placeholder="所得工资">
                                </div>
                            </td>
                            <td>（元）</td>
                        </tr>
                    </table>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success btn-sm" data-dismiss="modal" id="submit">提交</button>
                <button type="button" class="btn btn-warning btn-sm" data-dismiss="modal">取消</button>
            </div>
        </div>
    </div>
</div>
<script>
    $(function () {
        var depart = '';
        var tax1 = '';
        var tax2 = '';
        var sale = '';
        var allWage = null; // 所得工资
        var shouldGet = null; // 应得提成
        var surplusWage = null; //税款
        var saleNum = null;
        $('.delManger').click(function (e) {
            e.preventDefault();
            var delId = {
                id: $(this).attr('data-id'),
                approve: $(this).attr('data-approve')
            };
            var state = $(this).attr('data-approve');
            var message = '';
            if (state == 0) {
                message = '该工资单为未审批状态，是否删除？';
            } else if (state == 1) {
                message = '该工资单为已审批状态，确定删除？';
            }
            layer.confirm(message, { icon: 3, title: '删除' }, function (index) {
                $.ajax({
                    type: "post",
                    url: "<?php echo url('index/index/deleteWage'); ?>",
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
                });
                layer.close(index);
            });
        });
        // 审批
        $('.approve').click(function (e) {
            e.preventDefault();
            var approve = {
                id: $(this).attr('data-id')
            };
            $.ajax({
                type: "post",
                url: "<?php echo url('index/index/approveWage'); ?>",
                data: approve,
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
        // 形成工资单
        $('#submit').click(function (e) {
            e.preventDefault();
            var myDate = new Date();
            var date = myDate.getDate();
            if (date != 1) {
                msg("错误","未到结算日，不能形成上月工资账单");
                return;
            }
            if ($('#name').val() == 0 || $('#name').val() == '') {
                msg('错误','请选择员工');
                return;
            }
            if ($('#department').val() == 0 || $('#department').val() == '') {
                msg('错误','请选择员工所属部门!');
                return;
            }
            if ($('#department').val() != depart) {
                msg("错误","员工所属部门与所选部门不符，请重新选择！");
                return;
            }
            var wageInfo = {
                manger_id: $('#name').val(),
                department: $('#department').val(),
                allWage: allWage,
                surplusWage: surplusWage,
                bonus: shouldGet
            };
            $.ajax({
                type: "post",
                url: "<?php echo url('index/index/saveWage'); ?>",
                data: wageInfo,
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
        // 添加工资
        $('#all').change(function (e) {
            e.preventDefault();
            var all = $('#all').val();
            $(this).val(all + '元');
            if (all <= 5000) {
                surplusWage = 0;
            } else if (5000 < all <= 8000) {
                surplusWage = (all - 5000) * (tax1 / 100);
            } else if (8000 < all <= 17000) {
                surplusWage = 3000 * (tax1 / 100) + (all - 8000) * (tax2 / 100);
            }
            $('#surplusWage').val(surplusWage);
            allWage = all - surplusWage + shouldGet;
            $('#allWage').val(allWage);
        });
        // 维护工资
        $('#name').change(function (e) {
            e.preventDefault();
            if ($(this).val() == 0) {
                return;
            }
            var name = {
                id: $(this).val()
            };
            $.ajax({
                type: "post",
                url: "<?php echo url('index/index/getMangerInfo'); ?>",
                data: name,
                dataType: "json",
                success: function (data) {
                    console.log(data);
                    if (data) {
                        depart = data.department.id;
                        tax1 = data.tax.tax5;
                        tax2 = data.tax.tax8;
                        sale = data.tax.royalty;
                        $('#saleNum').val(data.order);
                        $('#shouldGet').val(data.order * sale);
                        saleNum = data.order;
                        shouldGet = data.order * sale;
                    } else {
                        msg("错误","获取数据错误，请联系管理员");
                    }
                }
            })
        });
        // 维护税率
        $('#save').click(function (e) {
            e.preventDefault();
            var tax5 = $('#tax5').val();
            var tax8 = $('#tax8').val();
            var royalty = $('#sale').val();
            if (tax5 == '' || tax8 == '') {
                msg("错误","请填写正确的税率");
                return;
            }
            if (royalty == '') {
                msg("错误","请填写每单相应的提成");
                return;
            }
            var info = {
                id: $('#id').val(),
                tax5: tax5,
                tax8: tax8,
                royalty: royalty
            };
            $.ajax({
                type: "post",
                url: "<?php echo url('index/index/updateTaxRate'); ?>",
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
    })
</script>
 </div>
<script src="../static/js/menuItem.js"></script>
</body>
</html>