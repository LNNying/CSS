<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:61:"C:\wamp64\www\phone\public/../ems/index\view\index\index.html";i:1556788984;s:53:"C:\wamp64\www\phone\ems\index\view\public\__head.html";i:1557393599;s:55:"C:\wamp64\www\phone\ems\index\view\public\__footer.html";i:1555944734;}*/ ?>
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
<div class="content2">
    <div class="row">
        <div class="col-sm-4">
            <div class="info">
                <div class="username">
                    <div class="name">
                        <span><?php echo session('manger_name'); ?></span>
                    </div>
                </div>
                <div class="name_info">
                    <span>登陆部门：&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $result['department']['department_name']; ?></span> <br>
                    <span>登陆时间：&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $loginTime; ?></span>
                </div>
            </div>
        </div>
        <!--左边事务-->
        <div class="col-sm-8">
            <div class="thing">
                <div class="view-title">
                    <div style="line-height: 30px; margin-left:5px;">
                        <i class="fa fa-certificate"></i>
                        业务详情
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="order_class all_border" style="padding-left: 10px;">
                            <div class="order_title">
                                订单数量
                            </div>
                            <div class="order_number order_red">
                                <div class="buss-icon">
                                    <i class="fa fa-bolt"></i>
                                    <?php echo $order; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="order_class all_border">
                            <div class="order_title">
                                客户注册人数
                            </div>
                            <div class="order_number order_orange">
                                <div class="buss-icon">
                                    <i class="fa fa-bolt"></i>
                                    <?php echo $client; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="order_class all_border" style="padding-right: 10px">
                            <div class="order_title">
                                在职员工数量
                            </div>
                            <div class="order_number order_blue">
                                <div class="buss-icon">
                                    <i class="fa fa-bolt"></i>
                                    <?php echo $manger; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <div class="view1">
                <div class="view-title">
                    <div style="line-height: 30px; margin-left:5px;">
                        <i class="fa fa-wpexplorer"></i>
                        客户流量
                    </div>
                </div>
                <div id="sale" style="width:100%; height: 250px; margin-top: -15px;padding: 5px;"></div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="left-table">
                <div class="view-title">
                    <div style="line-height: 30px; margin-left:5px;">
                        <i class="fa fa-bullseye"></i>
                        事务详情
                    </div>
                </div>
                <div class="agency table-responsive table-bordered table-sm">
                    <table class="table agency-table table-striped table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>姓名</th>
                            <th>部门</th>
                            <th width="200px">事项</th>
                            <th>状态</th>
                            <th>日期</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if($data == null): ?>
                        <tr>
                            <td colspan="6">暂无数据</td>
                        </tr>
                        <?php else: if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $vo['manger_t']['manger_name']; ?></td>
                            <td><?php echo $vo['department_t']['department_name']; ?></td>
                            <td><?php echo $vo['th_name']; ?></td>
                            <td><?php echo $vo['state']; ?></td>
                            <td><?php echo $vo['create_date']; ?></td>
                        </tr>
                        <?php endforeach; endif; else: echo "" ;endif; endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="view1" style="height: 270px;">
                <div class="view-title">
                    <div style="line-height: 30px; margin-left:5px;">
                        <i class="fa fa-balance-scale"></i>
                        产品占比
                    </div>
                </div>
                <div id="proportion" style="width:100%; height: 250px;padding: 5px;"></div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="view1" style="height: 270px;">
                <div class="view-title">
                    <div style="line-height: 30px; margin-left:5px;">
                        <i class="fa fa-balance-scale"></i>
                        客户职业属性
                    </div>
                </div>
                <div id="clientProportion" style="width:100%; height: 250px;padding: 5px;"></div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="view2">
                <div class="view-title">
                    <div style="line-height: 30px; margin-left:5px;">
                        <i class="fa fa-home"></i>
                        周销售额
                    </div>
                </div>
                <div id="sale_order" style="width:100%; height: 300px;padding: 5px;"></div>
            </div>
        </div>
    </div>
</div>
<script>
	// if (window.sessionStorage['Proportion'] == 1) {
	// } else {
	// 	window.sessionStorage['Proportion'] = 1;
	// 	clientInfo();
	// }
    clientInfo();
    product();
    clientNum();
    setInterval(function () {
        var myDate = new Date();
        var date = myDate.getDate();
        if(date == 1){
            clientInfo();   // 一个月更新一次
            product();
            clientNum();
            console.log('等于');
        } else {
            console.log('不等于');
        }
    },1000*60*60*24);
    // 客户流量
    function clientNum() {
        $.ajax({
            type: "post",
            url: "<?php echo url('index/index/clientNum'); ?>",
            data: '',
            dataType: "json",
            success: function (data) {
                console.log(data);
                var date = [];
                var num = [];
                for (var o = 0; o < data.length; o++) {
                    date.push(data[o].month + '月');
                    num.push(data[o].num);
                }
                var option = {
                    tooltip: {},
                    legend: {},
                    xAxis: {
                        name: '人数'
                    },
                    yAxis: {
                        name: '月份',
                        data: date
                    },
                    series: [{
                        // name: '销量',
                        type: 'bar',
                        data: num,
                        itemStyle: {
                            normal: {
                                color: function (params) {   // 根据in 和 out 判断显示颜色
                                    return '#005ab5'
                                }
                            }
                        }
                    }]
                };
                var myChart = echarts.init(document.getElementById('sale'));
                myChart.setOption(option);
            }
        });
    }
    // 占比
    function product()
    {
        var column = [];
        var dataList = [];
        $.ajax({
            type: "post",
            url: "<?php echo url('index/index/productInfo'); ?>",
            data: '',
            dataType: "json",
            success: function (data) {
                for (var i = 0; i < data.length; i++) {
                    column.push(data[i].role_name)
                }
                for (var j = 0; j < data.length; j++) {
                    dataList.push({
                        value: data[j].product.length,
                        name: data[j].role_name
                    })
                }
                option = {
                    tooltip : {
                        trigger: 'item',
                        formatter: "{a} <br/>{b} : {c} ({d}%)"
                    },
                    legend: {
                        orient : 'vertical',
                        x : 'left',
                        data:column
                    },
                    toolbox: {
                        show : true,
                        feature : {
                            mark : {show: true},
                            dataView : {show: true, readOnly: false},
                            magicType : {
                                show: true,
                                type: ['pie', 'funnel'],
                                option: {
                                    funnel: {
                                        x: '25%',
                                        width: '50%',
                                        funnelAlign: 'left',
                                        max: 1548
                                    }
                                }
                            },
                            restore : {show: true},
                            saveAsImage : {show: true}
                        }
                    },
                    calculable : true,
                    series : [
                        {
                            name:'访问来源',
                            type:'pie',
                            radius : '55%',
                            center: ['50%', '60%'],
                            data: dataList
                        }
                    ]
                };
                var myChart = echarts.init(document.getElementById('proportion'));
                myChart.setOption(option);
            }
        })
    }
    // 客户职业
    function clientInfo() {
        $.ajax({
            type: "post",
            url: "<?php echo url('index/index/clientInfo'); ?>",
            data: '',
            dataType: "json",
            success: function (data) {
                option = {
                    tooltip : {
                        trigger: 'item',
                        formatter: "{a} <br/>{b} : {c} ({d}%)"
                    },
                    legend: {
                        orient : 'vertical',
                        x : 'left',
                        data:['学生','就业人士','待业人士','老年人','其他']
                    },
                    toolbox: {
                        show : true,
                        feature : {
                            mark : {show: true},
                            dataView : {show: true, readOnly: false},
                            magicType : {
                                show: true,
                                type: ['pie', 'funnel'],
                                option: {
                                    funnel: {
                                        x: '25%',
                                        width: '50%',
                                        funnelAlign: 'left',
                                        max: 1548
                                    }
                                }
                            },
                            restore : {show: true},
                            saveAsImage : {show: true}
                        }
                    },
                    calculable : true,
                    series : [
                        {
                            name:'访问来源',
                            type:'pie',
                            radius : '55%',
                            center: ['50%', '60%'],
                            data:[
                                {value:data.stu, name:'学生'},
                                {value:data.job, name:'就业人士'},
                                {value:data.noJob, name:'待业人士'},
                                {value:data.old, name:'老年人'},
                                {value:data.other, name:'其他'}
                            ]
                        }
                    ]
                };
                var myChart = echarts.init(document.getElementById('clientProportion'));
                myChart.setOption(option);
            }
        })
    }
    // 周销售额
    option = {
        tooltip : {
            trigger: 'axis'
        },
        legend: {
            data:['OPPO','VIVO','小米','华为','三星']
        },
        toolbox: {
            show : true,
            feature : {
                mark : {show: true},
                dataView : {show: true, readOnly: false},
                magicType : {show: true, type: ['line', 'bar', 'stack', 'tiled']},
                restore : {show: true},
                saveAsImage : {show: true}
            }
        },
        calculable : true,
        xAxis : [
            {
                type : 'category',
                boundaryGap : false,
                data : ['周一','周二','周三','周四','周五','周六','周日']
            }
        ],
        yAxis : [
            {
                type : 'value'
            }
        ],
        series : [
            {
                name:'OPPO',
                type:'line',
                stack: '总量',
                data:[120, 132, 101, 134, 90, 230, 210]
            },
            {
                name:'VIVO',
                type:'line',
                stack: '总量',
                data:[220, 182, 191, 234, 290, 330, 310]
            },
            {
                name:'小米',
                type:'line',
                stack: '总量',
                data:[150, 232, 201, 154, 190, 330, 410]
            },
            {
                name:'华为',
                type:'line',
                stack: '总量',
                data:[320, 332, 301, 334, 390, 330, 320]
            },
            {
                name:'三星',
                type:'line',
                stack: '总量',
                data:[310, 322, 341, 335, 320, 130, 320]
            }
        ]
    };
    var myChart = echarts.init(document.getElementById('sale_order'));
    myChart.setOption(option);
</script>
 </div>
<script src="../static/js/menuItem.js"></script>
</body>
</html>