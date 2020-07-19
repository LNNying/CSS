<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:64:"C:\wamp64\www\phone\public/../ems/index\view\index\transfer.html";i:1552551982;s:53:"C:\wamp64\www\phone\ems\index\view\public\__head.html";i:1557393599;s:55:"C:\wamp64\www\phone\ems\index\view\public\__footer.html";i:1555944734;}*/ ?>
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
            员工调动
        </div>
    </div>
    <form id="transferForm" class="transferForm" style="margin-top: 10px;margin-left: 11px">
        <div class="row">
            <div class="col-sm-4">
                <table>
                    <tr>
                        <td><label for="name">员工姓名:</label></td>
                        <td class="pl-10">
                            <div class="input-group-sm">
                                <select class="form-control" id="name">
                                    <option>请选择</option>
                                    <?php if(is_array($manger) || $manger instanceof \think\Collection || $manger instanceof \think\Paginator): $i = 0; $__LIST__ = $manger;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                    <option value="<?php echo $vo['id']; ?>"><?php echo $vo['manger_name']; ?></option>
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
                        <td><label for="oldDepartment">原始部门:</label></td>
                        <td class="pl-10">
                            <div class="input-group-sm">
                                <input type="text" class="form-control" id="oldDepartment" name="" placeholder="原始部门"
                                       disabled>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="col-sm-4">
                <table>
                    <tr>
                        <td><label for="oldRole">原始角色:</label></td>
                        <td class="pl-10">
                            <div class="input-group-sm">
                                <input type="text" class="form-control" id="oldRole" name="" placeholder="原始角色"
                                       disabled>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="row" style="margin-top: 10px;">
            <div class="col-sm-4">
                <table>
                    <tr>
                        <td><label for="newDepartment">调到部门:</label></td>
                        <td class="pl-10">
                            <div class="input-group-sm">
                                <select class="form-control" id="newDepartment">
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
                        <td><label for="newRole">更改角色:</label></td>
                        <td class="pl-10">
                            <div class="input-group-sm">
                                <select class="form-control" id="newRole">
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
        </div>
        <div class="row" style="margin-top: 10px;">
            <div class="col-sm-4">
                <table>
                    <tr>
                        <td><label for="comment">调离原因:</label></td>
                        <td class="pl-10">
                            <div class="input-group-sm">
                                <textarea class="form-control" rows="5" id="comment" placeholder="调离原因"></textarea>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </form>
    <div style="margin-top: 10px;margin-left: 10px">
        <button type="button" class="btn btn-sm btn-success" id="submit">提交</button>
    </div>
    <div class="role_title"></div>
    <div class="table-responsive">
        <table class="table table-sm table-striped table-bordered" style="text-align: center;margin-top: 20px;">
            <thead>
            <tr>
                <th>序号</th>
                <th>编号</th>
                <th>员工名称</th>
                <th>调离原因</th>
                <th>审批状态</th>
                <th>操作</th>
            </tr>
            </thead>
            <tbody>
            <?php if(is_array($transferData) || $transferData instanceof \think\Collection || $transferData instanceof \think\Paginator): $i = 0; $__LIST__ = $transferData;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <tr>
                <td><?php echo $i + ($pageinit-1)*2; ?></td>
                <td><?php echo $vo['mangers']['manger_no']; ?></td>
                <td><?php echo $vo['mangers']['manger_name']; ?></td>
                <td><?php echo $vo['tr_desc']; ?></td>
                <td><?php if($vo['states'] == 0): ?><span class="badge badge-danger">未通过</span>
                    <?php else: ?><span class="badge badge-success">已通过</span>
                    <?php endif; ?>
                </td>
                <td>
                    <?php if(session('roleId') == 1 || session('roleId') == 4 || session('roleId') == 5): ?>
                    <button type="button" class="btn btn-sm btn-success goSuccess" data-id="<?php echo $vo['id']; ?>">通过</button>
                    <?php else: ?>
                    <button type="button" class="btn btn-sm btn-success" disabled></button>
                    <?php endif; ?>
                </td>
            </tr>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            </tbody>
        </table>
    </div>
    <div class="page"><?php if($page): ?><?php echo $page; else: ?>&nbsp;<?php endif; ?></div>
</div>
<script>
    $(function () {
        //通过
        $('.goSuccess').click(function (e) {
            e.preventDefault();
            var infoId = {
                id: $(this).attr("data-id")
            };
            $.ajax({
                type: "post",
                url: "<?php echo url('index/index/transfer'); ?>",
                data: infoId,
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
        //提交
        $('#submit').click(function (e) {
            e.preventDefault();
            var nameId = $('#name').val();
            var departmentId = $('#newDepartment').val();
            var roleId = $('#newRole').val();
            var desc = $('#comment').val();
            if (nameId == '请选择') {
                msg('错误', '员工必选！');
                return;
            }
            if (departmentId == '请选择') {
                msg('错误', '部门必选！');
                return;
            }
            if (roleId == '请选择') {
                msg('错误', '角色必选！');
                return;
            }
            if (desc.trim() == '') {
                msg('错误', '调离原因必填！');
                return;
            }
            if (departmentId == 1) {
                if (roleId == 2 || roleId == 4) {

                } else {
                    msg('错误', '部门与角色不匹配！');
                    return;
                }
            }
            if (departmentId == 2) {
                if (roleId == 3 || roleId == 5) {

                } else {
                    msg('错误', '部门与角色不匹配！');
                    return;
                }
            }
            var transferInfo = {
                id: nameId,
                department: departmentId,
                role: roleId,
                desc: desc
            };
            console.log(transferInfo);
            $.ajax({
                type: "post",
                url: "<?php echo url('index/index/editTran'); ?>",
                data: transferInfo,
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
        // 改变
        $('#name').change(function (e) {
            e.preventDefault();
            if ($('#name').val() == '请选择') {
                $('#oldDepartment').val('');
                $('#oldRole').val('');
                return;
            } else {
                var id = {id: $('#name').val()};
            }
            console.log($('#name').val());
            $.ajax({
                type: "post",
                url: "<?php echo url('index/index/getManger'); ?>",
                data: id,
                dataType: "json",
                success: function (data) {
                    console.log(data);
                    if (data) {
                        $('#oldDepartment').val(data.department.department_name);
                        $('#oldRole').val(data.role.role_name);
                    } else {
                        msg('错误', '获取信息失败！');
                    }
                }
            })
        });
    });
</script>
 </div>
<script src="../static/js/menuItem.js"></script>
</body>
</html>