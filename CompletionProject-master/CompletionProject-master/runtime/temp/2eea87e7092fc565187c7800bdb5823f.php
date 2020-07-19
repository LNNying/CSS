<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:69:"C:\wamp64\www\phone\public/../ems/index\view\index\sale_analysis.html";i:1557477267;s:53:"C:\wamp64\www\phone\ems\index\view\public\__head.html";i:1557393599;s:55:"C:\wamp64\www\phone\ems\index\view\public\__footer.html";i:1555944734;}*/ ?>
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
            销售分析
        </div>
    </div>
    <div class="row" style="margin-top: 10px;">
        <div class="col-sm-6">
            <div id="throughput3" style="width:98%; height: 300px; border: 1px solid red; border-radius: 5px 5px"></div>
        </div>
        <div class="col-sm-6">
            <div id="throughput1" style="width:98%; height: 300px; border: 1px solid red; border-radius: 5px 5px"></div>
        </div>
    </div>
    <div class="role_title"></div>
    <div class="row" style="margin-top: 10px;">
        <div class="col-sm-6">
            <div id="throughput2" style="width:98%; height: 300px; border: 1px solid red; border-radius: 5px 5px"></div>
        </div>
        <div class="col-sm-6">
            <div id="throughput4" style="width:98%; height: 300px; border: 1px solid red; border-radius: 5px 5px"></div>
        </div>
    </div>
</div>
<script>
    orderTrend();
    productTrend();
    costTrend();
    incidental();
    setInterval(function () {
        var myDate = new Date();
        var date = myDate.getDate();
        if(date == 1){ // 一个月更新一次
            orderTrend();
            productTrend();
            costTrend();
            incidental();
            console.log('等于');
        } else {
            console.log('不等于');
        }
    },1000*60*60*24);
    // 杂费
    function incidental() {
        $.ajax({
            url: "<?php echo url('index/index/incidental'); ?>",
            type: 'post',
            dataType: 'json',
            success: function (data) {
                var inDate = [];
                var inCbm = [];
                var water = [];
                var rent = [];
                // 电费
                for (var o = 0; o < data.electricity.length; o++) {
                    var date = data.electricity[o].month + '月';
                    var num = data.electricity[o].num;
                    inDate.push(date);
                    inCbm.push(num);
                }
                // 水费
                for (var p = 0; p < data.water.length; p++) {
                    water.push(data.water[p].num);
                }
                // 房租
                for (var m = 0; m < data.rent.length; m++) {
                    rent.push(data.rent[m].num);
                }
                var option = {
                    title : {
                        text: '每月杂费走势',
                        subtext: ''
                    },
                    tooltip : {
                        trigger: 'axis',
                        axisPointer : {
                            type : 'shadow'
                        }
                    },
                    toolbox: {
                        show : true,
                        feature : {
                        }
                    },
                    legend: {
                        data:['电费', '水费','房租']
                    },
                    calculable : true,
                    xAxis : [
                        {
                            type : 'value',
                            name: '金额(￥)'
                        }
                    ],
                    yAxis : [
                        {
                            type : 'category',
                            name: '月份',
                            data : inDate
                        }
                    ],
                    series : [
                        {
                            name:'电费',
                            type:'bar',
                            stack: '总量',
                            itemStyle : { normal: {label : {show: true, position: 'insideRight'}}},
                            data:inCbm
                        },
                        {
                            name:'水费',
                            type:'bar',
                            stack: '总量',
                            itemStyle : { normal: {label : {show: true, position: 'insideRight'}}},
                            data:water
                        },
                        {
                            name:'房租',
                            type:'bar',
                            stack: '总量',
                            itemStyle : { normal: {label : {show: true, position: 'insideRight'}}},
                            data:rent
                        },
                    ]
                };
                var myChart = echarts.init(document.getElementById('throughput4'));
                myChart.setOption(option);
            }
        });
    }
    // 成本与销售额对比
    function costTrend() {
        $.ajax({
            url: "<?php echo url('index/index/costTrend'); ?>",
            type: 'post',
            dataType: 'json',
            success: function (data) {
                var costDate = [];
                var costCbm = [];
                var sale = [];
                for (var i = 0; i < data.cost.length; i++) {
                    var date = data.cost[i].month + '月';
                    var num = data.cost[i].num;
                    costDate.push(date);
                    costCbm.push(num);
                }
                for (var j = 0; j < data.sale.length; j++) {
                    sale.push(data.sale[j].num);
                }
                var option = {
                    title : {
                        text: '成本&销售额',
                        subtext: ''
                    },
                    tooltip : {
                        trigger: 'axis'
                    },
                    legend: {
                        data:['成本总额','销售总额']
                    },
                    toolbox: {
                        show : true,
                        feature : {
                            mark : {show: true},
                            dataView : {show: true, readOnly: false},
                            magicType : {show: true, type: ['line', 'bar']},
                            restore : {show: true},
                            saveAsImage : {show: true}
                        }
                    },
                    calculable : true,
                    xAxis : [
                        {
                            type : 'category',
                            name: '月份',
                            data : costDate
                        }
                    ],
                    yAxis : [
                        {
                            type : 'value',
                            name: '金额(￥)'
                        }
                    ],
                    series : [
                        {
                            name:'成本总额',
                            type:'bar',
                            data:costCbm,
                            markPoint : {
                                data : [
                                    {type : 'max', name: '最大值'},
                                    {type : 'min', name: '最小值'}
                                ]
                            },
                            markLine : {
                                data : [
                                    {type : 'average', name: '平均值'}
                                ]
                            }
                        },
                        {
                            name:'销售总额',
                            type:'bar',
                            data:sale,
                            markPoint : {
                                data : [
                                    {name : '年最高', value : 182.2, xAxis: 7, yAxis: 183, symbolSize:18},
                                    {name : '年最低', value : 2.3, xAxis: 11, yAxis: 3}
                                ]
                            },
                            markLine : {
                                data : [
                                    {type : 'average', name : '平均值'}
                                ]
                            }
                        }
                    ]
                };
                var myChart = echarts.init(document.getElementById('throughput2'));
                myChart.setOption(option);
            }
        });
    }
    // 进货数量
    function productTrend() {
        $.ajax({
            url: "<?php echo url('index/index/productTrend'); ?>",
            type: 'post',
            dataType: 'json',
            success: function (data) {
                var proDate = [];
                var proCbm = [];
                for (var i = 0; i < data.length; i++) {
                    var date = data[i].month + '月';
                    var num = data[i].num;
                    proDate.push(date);
                    proCbm.push(num);

                }
                var option = {
                    title : {
                        text: '每月进货数量',
                        subtext: ''
                    },
                    tooltip : {
                        trigger: 'axis'
                    },
                    toolbox: {
                        show : true,
                        feature : {
                        }
                    },
                    calculable : true,
                    xAxis : [
                        {
                            type : 'category',
                            name: '月份',
                            data : proDate
                        }
                    ],
                    yAxis : [
                        {
                            type : 'value',
                            name: '进货数量(件)'
                        }
                    ],
                    series : [
                        {
                            name:'进货数量(件)',
                            type:'bar',
                            data: proCbm,
                            markPoint : {
                                data : [
                                    {type : 'max', name: '最大值'},
                                    {type : 'min', name: '最小值'}
                                ]
                            },
                            markLine : {
                                data : [
                                    {type : 'average', name: '平均值'}
                                ]
                            }
                        }
                    ]
                };
                var myChart = echarts.init(document.getElementById('throughput1'));
                myChart.setOption(option);
            }
        });
    }
    // 订单走势
    function orderTrend() {
        $.ajax({
            url: "<?php echo url('index/index/orderTrend'); ?>",
            type: 'post',
            dataType: 'json',
            success: function (data) {
                var cateDate = [];
                var cateCbm = [];
                for (var i = 0; i < data.length; i++) {
                    var date = data[i].month + '月';
                    var num = data[i].num;
                    cateDate.push(date);
                    cateCbm.push(num);

                }
                option = {
                    title : {
                        text: '每月订单走势',
                        subtext: ''
                    },
                    tooltip : {
                        trigger: 'axis'
                    },
                    toolbox: {
                        show : true,
                        feature : {

                        }
                    },
                    calculable : true,
                    xAxis : [
                        {
                            type : 'category',
                            name: '月份',
                            boundaryGap : false,
                            data :cateDate
                        }
                    ],
                    yAxis : [
                        {
                            type : 'value',
                            name: '订单数量(单)'
                        }
                    ],
                    series : [
                        {
                            name:'订单数量(单)',
                            type:'line',
                            stack: '单数',
                            data:cateCbm
                        }
                    ]
                };
                var myChart = echarts.init(document.getElementById('throughput3'));
                myChart.setOption(option);
            }
        });
    }
</script>
 </div>
<script src="../static/js/menuItem.js"></script>
</body>
</html>