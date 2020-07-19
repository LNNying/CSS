<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:68:"C:\wamp64\www\phone\public/../ems/index\view\index\edit_product.html";i:1554631989;s:53:"C:\wamp64\www\phone\ems\index\view\public\__head.html";i:1557393599;s:55:"C:\wamp64\www\phone\ems\index\view\public\__footer.html";i:1555944734;}*/ ?>
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
            产品编辑
        </div>
    </div>
    <br/>
    <form id="editPro" class="addPro" style="margin-top: 5px;margin-left: 11px">
        <div class="row">
            <div class="col-sm-4">
                <table>
                    <tr>
                        <td><label for="pro_no">产品编号:</label></td>
                        <td class="pl-10">
                            <div class="input-group-sm" style="float:left;">
                                <input hidden type="text" value="<?php echo $data['id']; ?>" id="id">
                                <input type="text" class="form-control" id="pro_no" name="" value="<?php echo $data['pro_no']; ?>" disabled
                                       style="width: 180px;" placeholder="编号">
                            </div>
                            <div style="float:left;margin-left: 2px;">
                                <button type="button" class="btn btn-sm btn-success" id="getNo" style="float:left;" disabled>获取
                                </button>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="col-sm-4">
                <table>
                    <tr>
                        <td><label for="name">产品名称:</label></td>
                        <td class="pl-10">
                            <div class="input-group-sm">
                                <input type="text" class="form-control" id="name" name="" value="<?php echo $data['pro_name']; ?>" placeholder="名称">
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="col-sm-4">
                <table>
                    <tr>
                        <td><label for="model">型号:</label></td>
                        <td class="pl-10">
                            <div class="input-group-sm">
                                <input type="text" class="form-control" id="model" name="" value="<?php echo $data['model']; ?>" placeholder="型号">
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <br/>
        <div class="row">
            <div class="col-sm-4">
                <table>
                    <tr>
                        <td style="padding-left: 16px;"><label for="supplier">供应商:</label></td>
                        <td class="pl-10">
                            <div class="input-group-sm">
                                <select class="form-control" id="supplier">
                                    <option>请选择</option>
                                    <?php if(is_array($supplier) || $supplier instanceof \think\Collection || $supplier instanceof \think\Paginator): $i = 0; $__LIST__ = $supplier;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                    <option value="<?php echo $vo['id']; ?>" <?php if($data['sup_id'] == $vo['id']): ?>selected<?php endif; ?>><?php echo $vo['sup_name']; ?></option>
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
                        <td style="padding-left: 16px;"><label for="costPrice">成本价:</label></td>
                        <td class="pl-10">
                            <div class="input-group-sm">
                                <input type="text" class="form-control" id="costPrice" name="" value="<?php echo $data['costprice']; ?>"
                                       placeholder="成本价">
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="col-sm-4">
                <table>
                    <tr>
                        <td><label for="price">售价:</label></td>
                        <td class="pl-10">
                            <div class="input-group-sm">
                                <input type="text" class="form-control" id="price" name="" value="<?php echo $data['price']; ?>" placeholder="售价">
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <br/>
        <div class="row">
            <div class="col-sm-4">
                <table>
                    <tr>
                        <td><label for="number">产品类别:</label></td>
                        <td class="pl-10">
                            <div class="input-group-sm">
                                <input type="text" class="form-control" id="role" name="<?php echo $data['role_id']; ?>" value="<?php echo $data['Role']['role_name']; ?>" placeholder="产品类别" disabled>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="col-sm-4">
                <table>
                    <tr>
                        <td><label for="number">进货数量:</label></td>
                        <td class="pl-10">
                            <div class="input-group-sm">
                                <input type="text" class="form-control" id="number" name="" value="<?php echo $data['quantity']; ?>" placeholder="进货数量">
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </form>
    <div class="role_title"></div>
    <div style="margin-top: 20px;">
        <button type="button" class="btn btn-sm btn-success" id="savePro">保存</button>
    </div>
</div>
<script>
    $(function () {
        $('#getNo').click(function (e) {
            e.preventDefault();
            var number1 = '';
            var number2 = '';
            var no = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
            for (var i = 0; i < 4; i++) {
                var index = Math.round(Math.random() * 9);
                number1 += no[index];
            }
            for (var i = 0; i < 4; i++) {
                var index = Math.round(Math.random() * 9);
                number2 += no[index];
            }
            var mangerNo = "EN" + number1 + number2;
            $('#pro_no').val(mangerNo);
        });
        $('#supplier').change(function (e) {
            e.preventDefault();
            var sup_id = {
                id : $('#supplier').val()
            };
            console.log(sup_id);
            var roleHtml = '';
            $.ajax({
                type: "post",
                url: "<?php echo url('index/index/changeProRole'); ?>",
                data: sup_id,
                dataType: "json",
                success: function (data) {
                    console.log(data);
                    $('#role').val(data.role_name);
                }
            })
        });
        $('#savePro').click(function (e) {
            e.preventDefault();
            if ($('#costPrice').val() > $('#price').val()) {
                msg('错误','成本价大于售价，请重新填写！');
                return;
            }
            var data = {
                id: Number($('#id').val()),
                no: $('#pro_no').val(),
                name: $('#name').val(),
                model: $('#model').val(),
                supplier: $('#supplier').val(),
                costPrice: $('#costPrice').val(),
                price: $('#price').val(),
                role: $('#role').attr('name'),
                number: $('#number').val()
            };
            console.log(data);
            $.ajax({
                type: "post",
                url: "<?php echo url('index/index/editProduct'); ?>",
                data: data,
                dataType: "json",
                success: function (data) {
                    // console.log(data);
                    // return;
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
        });
    })
</script>
 </div>
<script src="../static/js/menuItem.js"></script>
</body>
</html>