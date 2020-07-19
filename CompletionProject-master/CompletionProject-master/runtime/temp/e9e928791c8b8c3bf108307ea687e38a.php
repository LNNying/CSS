<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:65:"C:\wamp64\www\phone\public/../ems/index\view\index\add_order.html";i:1555986753;s:53:"C:\wamp64\www\phone\ems\index\view\public\__head.html";i:1556941205;s:55:"C:\wamp64\www\phone\ems\index\view\public\__footer.html";i:1555944734;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>智能手机管理系统</title>
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
<nav class="breadcrumb">
    <a class="breadcrumb-item" href="<?php echo url('index/index/index'); ?>">
        <i class="fa fa-home"></i>首页
    </a>
    <a class="breadcrumb-item" href="<?php echo url('index/index/orderList'); ?>">
        订单列表
    </a>
</nav>
<div class="content" style="height: auto;margin-bottom: 10px;padding-bottom: 20px;">
    <div class="role_title">
        <div class="icon_role"></div>
        <div class="role_word">
            生成订单
        </div>
    </div>
    <form id="addForm" class="addForm" style="margin-top: 5px;margin-left: 11px">
        <div class="row">
            <div class="col-sm-12">
                <table>
                    <tr>
                        <td><label for="manger_no">订单编号:</label></td>
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
        </div>
        <div class="row">
            <div class="col-sm-12">
                <table>
                    <tr>
                        <td><label for="product">产品名称:</label></td>
                        <td class="pl-10">
                            <div class="input-group-sm" style="float:left;width: 228px;">
                                <select class="form-control" id="product">
                                    <option value="0">请选择</option>
                                    <?php if(is_array($product) || $product instanceof \think\Collection || $product instanceof \think\Paginator): $i = 0; $__LIST__ = $product;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                    <option value="<?php echo $vo['id']; ?>"><?php echo $vo['pro_name']; ?></option>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </select>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <table>
                    <tr>
                        <td><label for="client">订单客户:</label></td>
                        <td class="pl-10">
                            <div class="input-group-sm" style="float:left;width: 228px;">
                                <select class="form-control" id="client">
                                    <option value="0">请选择</option>
                                    <?php if(is_array($client) || $client instanceof \think\Collection || $client instanceof \think\Paginator): $i = 0; $__LIST__ = $client;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                    <option value="<?php echo $vo['id']; ?>"><?php echo $vo['client_name']; ?></option>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </select>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <table>
                    <tr>
                        <td><label for="num">库存数量:</label></td>
                        <td class="pl-10">
                            <div class="input-group-sm" style="float:left;width: 228px;">
                                <input type="email" class="form-control" id="num" name="" value="" disabled placeholder="库存数量">
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <table>
                    <tr>
                        <td><label for="price">销售价格:</label></td>
                        <td class="pl-10">
                            <div class="input-group-sm" style="float:left;width: 228px;">
                                <input type="email" class="form-control" id="price" name="" value="" disabled placeholder="销售价格">
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <table>
                    <tr>
                        <td><label for="wantNum">预定数量:</label></td>
                        <td class="pl-10">
                            <div class="input-group-sm" style="float:left;width: 228px;">
                                <input type="email" class="form-control" id="wantNum" name="" value="" placeholder="预定数量">
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <table>
                    <tr>
                        <td><label for="wantPrice">预定价格:</label></td>
                        <td class="pl-10">
                            <div class="input-group-sm" style="float:left; width: 228px;">
                                <input type="email" class="form-control" id="wantPrice" name="" value="" disabled placeholder="预定价格">
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="row" style="margin-top: 20px;">
            <div class="col-sm-12">
                <button class="btn btn-sm btn-success" id="save">提交</button>
                <button type="reset" class="btn btn-sm btn-warning" id="reset">重置</button>
            </div>
        </div>
    </form>
</div>
<script>
    $(function () {
        var surplusNum = null;
        var price = null;
        var wantNum = null;
        var wantPrice = null;
        $('#getNo').click(function (e) {
            e.preventDefault();
            var number = '';
            var no = [0,1,2,3,4,5,6,7,8,9];
            for (var i = 0; i < 6; i++) {
                var index = Math.round(Math.random()*9);
                number += no[index];
            }
            var mangerNo = "ORN" + number;
            $('#manger_no').val(mangerNo);
        });
        $('#product').change(function (e) {
            e.preventDefault();
            var pro = {
                id: $(this).val()
            };
            $.ajax({
                type: "post",
                url: "<?php echo url('index/index/getProductInfo'); ?>",
                data: pro,
                dataType: "json",
                success: function (data) {
                    if (data.id) {
                        $('#num').val(data.quantity - data.salenumber + '件');
                        $('#price').val(data.price + '元');
                        surplusNum = data.quantity - data.salenumber;
                        price = data.price;
                    } else {
                        msg('错误','数据获取异常');
                    }
                }
            });
        });
        // 预定数量
        $('#wantNum').change(function (e) {
            e.preventDefault();
            wantNum = $(this).val();
            $('#wantPrice').val(wantNum * price + '元');
            wantPrice = wantNum * price;
            $(this).val(wantNum + '件');
        });
        // 提交订单
        $('#save').click(function (e) {
            e.preventDefault();
            if (wantNum > surplusNum) {
                msg('警告','预定数量大于库存数量，请重新选择！');
                return;
            }
            var orderInfo = {
              no: $('#manger_no').val(),
              client: $('#client').val(),
              product: $('#product').val(),
              num: wantNum,
              price: wantPrice
            };
            $.ajax({
                type: "post",
                url: "<?php echo url('index/index/saveOrderInfo'); ?>",
                data: orderInfo,
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
<script src="../static/js/menuItem.js"></script>
</body>
</html>