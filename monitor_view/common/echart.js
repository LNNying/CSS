
// 每一层库存
function stock () {
    $.ajax({
        type: 'post',
        url: ip + '/api/wms_stock/getAllCountAndLayerCodeNum',
        async: false,
        dataType: 'json',
        success: function (data) {
            if (data.returnCode === 200) {
                let dataList = []
                if (data.returnData.data.length !== 0) {
                    for (let i = 0, len = data.returnData.data.length; i < len; i++) {
                        let floor = ''
                        if (data.returnData.data[i].layerCode === 1) {
                            floor = '一楼库存'
                        } else if (data.returnData.data[i].layerCode === 2) {
                            floor = '二楼库存'
                        } else if (data.returnData.data[i].layerCode === 3) {
                            floor = '三楼库存'
                        }
                        dataList.push({
                            name: floor,
                            value: data.returnData.data[i].stockNum
                        })
                    }
                    let stock = echarts.init(document.getElementById('stock'));
                    let option = {
                        title : {
                            x:'center'
                        },
                        tooltip : {
                            trigger: 'item',
                            formatter: "{a} <br/>{b} : {c} ({d}%)",
                            position: 'right'
                        },
                        legend: {
                            orient : 'horizontal',  // vertical
                            x : 'left',
                            data:['一楼库存','二楼库存','三楼库存'],
                            textStyle: {
                                fontSize: 12,
                                color: '#f3f2e7'
                            }
                        },
                        toolbox: {
                            show : true
                        },
                        calculable : true,
                        series : [
                            {
                                name:'库存数',
                                type:'pie',
                                radius : '55%',
                                center: ['50%', '60%'],
                                data: dataList
                            }
                        ]
                    };
                    console.log('库存饼图加载完毕');
                    stock.setOption(option);
                }
            } else {
                console.log(data.returnMsg);
            }
        },
        error: function (err) {
            console.log(err);
        }
    });
}

// 每一层库位信息
function stockNum (floor) {
    let body = {
        statDemension: floor
    }
    $.ajax({
        type: 'post',
        url: ip + '/api/wms_stock_statistics/getStatisticDataByStatDemension',
        async: false,
        data: floor,
        contentType: "application/json;charset=utf-8",
        dataType: 'json',
        success: function (data) {
            if (data.returnCode === 200) {
                let dataList = []
                if (data.returnData !== null) {
                    dataList.push({
                        name: '已用数量',
                        value: data.returnData.inventoryNum
                    });
                    dataList.push({
                        name: '剩余数量',
                        value: data.returnData.surplusLocNum
                    });
                    dataList.push({
                        name: '锁定数量',
                        value: data.returnData.lockLocNum
                    })
                    let stock_num = echarts.init(document.getElementById('stock_num'));
                    let option1 = {
                        title : {
                            x:'center'
                        },
                        tooltip : {
                            trigger: 'item',
                            formatter: "{a} <br/>{b} : {c} ({d}%)",
                            position: 'right'
                        },
                        legend: {
                            orient : 'horizontal',  // vertical
                            x : 'left',
                            data:['已用数量','剩余数量','锁定数量'],
                            textStyle: {
                                fontSize: 12,
                                color: '#f3f2e7'
                            }
                        },
                        toolbox: {
                            show : true,
                            // feature : {
                            //     mark : {show: true},
                            //     dataView : {show: true, readOnly: false},
                            //     magicType : {
                            //         show: true,
                            //         type: ['pie', 'funnel'],
                            //         option: {
                            //             funnel: {
                            //                 x: '25%',
                            //                 width: '50%',
                            //                 funnelAlign: 'left',
                            //                 max: 1548
                            //             }
                            //         }
                            //     },
                            //     restore : {show: true},
                            //     saveAsImage : {show: true}
                            // }
                        },
                        calculable : true,
                        series : [
                            {
                                name:'库存数',
                                type:'pie',
                                radius : '55%',
                                center: ['50%', '60%'],
                                data: dataList
                            }
                        ]
                    };
                    console.log('加载库存数量饼图完毕');
                    stock_num.setOption(option1);
                }
            } else {
                console.log(data.returnMsg);
            }
        },
        error: function (err) {
            console.log(err);
        }
    });

}
