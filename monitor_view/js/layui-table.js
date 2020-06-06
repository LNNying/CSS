layui.use('table', function(){
    let table = layui.table;

    table.render({
        elem: '#equip-table'
        ,url:'/demo/table/user/'
        ,height: 260
        ,cols: [[
            {field:'id', title: '设备编号'}
            ,{field:'username', title: '设备类型'} //width 支持：数字、百分比和不填写。你还可以通过 minWidth 参数局部定义当前单元格的最小宽度，layui 2.2.1 新增
            ,{field:'sex', title: '设备状态'}
        ]]
    });
});
layui.use('table', function(){
    let table = layui.table;

    table.render({
        elem: '#task'
        ,url:'/demo/table/user/'
        ,height: 260
        ,cols: [[
            {field:'id', title: '任务编号'}
            ,{field:'username', title: '设备编号'} //width 支持：数字、百分比和不填写。你还可以通过 minWidth 参数局部定义当前单元格的最小宽度，layui 2.2.1 新增
            ,{field:'sex', title: '任务状态'}
            ,{field:'sex', title: '任务起点'}
            ,{field:'sex', title: '任务终点'}
        ]]
    });
});
