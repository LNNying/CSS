<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:67:"C:\wamp64\www\tp1\public/../ems/mangeuser\view\shop\memberlist.html";i:1539590315;s:54:"C:\wamp64\www\tp1\ems\mangeuser\view\public\_head.html";i:1539589474;}*/ ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>博客后台管理系统</title>
    <link rel="stylesheet" href="/static/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
          type="text/css">
    <link rel="stylesheet" href="/static/css/layer.css">
    <link rel="stylesheet" href="/static/css/script.css">
    <script type="text/javascript" src="/static/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="/static/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/static/js/layer.js"></script>
</head>

<body>
<!-- 顶部导航 -->
<nav class="navbar navbar-expand-md bg-primary navbar-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <i class="fa d-inline fa-lg fa-cloud"></i>
            <b>博客后台管理系统</b>
        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbar2SupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo url('mangeuser/shop/person'); ?>">
                        <i class="fa d-inline fa-lg fa-address-card-o"></i> <?php echo session('nickname'); ?></a>
                </li>

            </ul>
            <a class="btn navbar-btn ml-2 text-dark btn-light " id="outlogin">
                <i class="fa d-inline fa-lg fa-user-circle-o"></i>退出</a>
        </div>
    </div>
</nav>
<!-- 顶部导航 -->
<!-- 左侧导航栏 -->
<div class="leftBar">
    <div id="accordion">
        <div class="card">
            <div class="card-header">
                <a class="card-link text-dark home" data-toggle="collapse" id="homepage" href="">
                    <i class="fa fa-lg fa-home"></i> 后台管理
                </a>
            </div>
            <!--<div id="home" class="collapse" data-parent="#accordion">-->
            <!--<div>-->
            <!--<a class="px-5 text-dark" href="<?php echo url('index'); ?>"><i class="fa fa-circle"></i> 后台管理</a>-->
            <!--</div>-->
            <!--</div>-->
        </div>
        <div class="card">
            <div class="card-header">
                <a class="collapsed card-link text-dark" data-toggle="collapse" href="#collapseFour">
                    <i class="fa fa-user"></i> 会员管理
                </a>
            </div>
            <div id="collapseFour" class="collapse" data-parent="#accordion">
                <div>
                    <a class="px-5 text-dark" href="<?php echo url('mangeuser/shop/memberadd'); ?>"><i class="fa fa-circle"></i>
                        会员添加</a>
                </div>
                <div>
                    <a class="px-5 text-dark" href="<?php echo url('mangeuser/shop/memberlist'); ?>"><i class="fa fa-circle"></i>
                        会员列表</a>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <a class="collapsed card-link text-dark" data-toggle="collapse" href="" id="user">
                    <i class="fa fa-user-circle"></i> 管理员管理
                </a>
            </div>
            <!--<div id="collapseSix" class="collapse" data-parent="#accordion">-->
            <!--<div>-->
            <!--<a class="px-5 text-dark" href="<?php echo url('mangeuser/shop/userlist'); ?>"><i class="fa fa-circle"></i>-->
            <!--管理员列表</a>-->
            <!--</div>-->
            <!--</div>-->
        </div>
        <div class="card">
            <div class="card-header">
                <a class="collapsed card-link text-dark" data-toggle="collapse" href="#collapseTwo">
                    <i class="fa fa-barcode"></i> 栏目管理
                </a>
            </div>
            <div id="collapseTwo" class="collapse" data-parent="#accordion">
                <div>
                    <a class="px-5 text-dark" href="<?php echo url('addcate'); ?>"><i class="fa fa-circle"></i> 栏目添加</a>
                </div>
                <div>
                    <a class="px-5 text-dark" href="<?php echo url('editcate'); ?>"><i class="fa fa-circle"></i> 栏目编辑</a>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <a class="collapsed card-link text-dark" data-toggle="collapse" href="#collapseThree">
                    <i class="fa fa-book"></i> 文章管理
                </a>
            </div>
            <div id="collapseThree" class="collapse" data-parent="#accordion">
                <div>
                    <a class="px-5 text-dark" href="<?php echo url('addartical'); ?>"><i class="fa fa-circle"></i> 文章添加</a>
                </div>
                <div>
                    <a class="px-5 text-dark" href="<?php echo url('listartical'); ?>"><i class="fa fa-circle"></i> 文章列表</a>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <a class="collapsed card-link text-dark" data-toggle="collapse" href="" id="comment">
                    <i class="fa fa-mouse-pointer"></i> 评论管理
                </a>
            </div>
            <!--<div id="collapseFive" class="collapse" data-parent="#accordion">-->

            <!--<div>-->
            <!--<a class="px-5 text-dark" href="<?php echo url('mangeuser/shop/comment'); ?>"><i class="fa fa-circle"></i>-->
            <!--评论列表</a>-->
            <!--&nbsp;-->
            <!--</div>-->

            <!--</div>-->
        </div>

        <div class="card">
            <div class="card-header">
                <a class="collapsed card-link text-dark" data-toggle="collapse" href="#system">
                    <i class="fa fa-cog"></i> 系统管理
                </a>
            </div>
            <div id="system" class="collapse" data-parent="#accordion">
                <div>
                    <a class="px-5 text-dark" href="<?php echo url('mangeuser/shop/system'); ?>"><i class="fa fa-circle"></i>
                        系统设置</a>
                </div>
                <div>
                    <a class="px-5 text-dark" href="<?php echo url('mangeuser/shop/person'); ?>"><i class="fa fa-circle"></i>
                        改变皮肤</a>
                </div>
                <div>
                    <a class="px-5 text-dark" href="<?php echo url('mangeuser/shop/person'); ?>"><i class="fa fa-circle"></i>
                        个人信息列表</a>
                </div>

            </div>
        </div>
    </div>
</div>
<script>
    $(function () {
        $("#homepage").click(function () {
            location.href = "<?php echo url('mangeuser/shop/index'); ?>"
        });
        $("#comment").click(function () {
            location.href = "<?php echo url('mangeuser/shop/comment'); ?>"
        });
        $("#user").click(function () {
            location.href = "<?php echo url('mangeuser/shop/userlist'); ?>"
        });
        $('#outlogin').click(function () {
            $.ajax({
                type: "post",
                url: "<?php echo url('mangeuser/index/outlogin'); ?>",
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
                            title: '退出失败',
                            icon: 2,
                            content: data.msg,
                        });
                    }

                }
            });
        });
    })
</script>
    <!-- 左侧导航栏 -->
    <!-- 右侧显示区域 -->
    <div class="rightArtical rightContent">
        <div class="rightTitel">
            <nav class="breadcrumb">
                <span><i class="fa fa-book"></i> 文章管理&nbsp;<b>/</b>&nbsp;文章列表</span>
            </nav>
        </div>
        <div class="content my-3 mx-3">
            <div class="title">
                <span>&nbsp;文章列表</span>
            </div>
            <div class="page"><?php if($page): ?><?php echo $page; else: ?>&nbsp;<?php endif; ?></div>
            <div class="cate my-3">
                <table class="table">
                    <thead>
                        <tr>
                            <td>序号</td>
                            <td>会员名称</td>
                            <td>昵称</td>
                            <td>状态</td>
                            <td>邮箱</td>
                            <td>操作</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <tr>
                            <td><?php echo $i + ($pageinit-1)*4; ?></td>
                            <td><?php echo $vo['username']; ?></td>
                            <td><?php echo $vo['nickname']; ?></td>
                            <td><?php if($vo['status'] == 1): ?>
                                <span class="text-success">活跃</span>
                                <?php else: ?>
                                <span class="text-danger">禁用</span>
                                <?php endif; ?>
                            </td>
                            <td><?php echo $vo['email']; ?></td>
                            <td>
                                    <?php if($vo['status'] == 1): ?>
                                    <button id="<?php echo $vo['status']; ?>" dataid="<?php echo $vo['id']; ?>" class="btn btn-secondary status">禁用</button>
                                    <?php else: ?>
                                    <button id="<?php echo $vo['status']; ?>" dataid="<?php echo $vo['id']; ?>" class="btn btn-success status">开放</button>
                                    <?php endif; ?>
                                <a href="<?php echo url('mangeuser/shop/memberedit'); ?>?id=<?php echo $vo['id']; ?>" class="btn btn-success editMem">编辑</a>
                                <button id="<?php echo $vo['id']; ?>" class="btn btn-danger deleteMem">删除</button>
                            </td>
                        </tr>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- 右侧显示区域 -->

    <script>
        $(function () {
            $('.pagination li').addClass('page-item');
            $('.pagination li a').addClass('page-link');
            $('.pagination li span').addClass('page-link');
          
            //删除会员
            $('.deleteMem').click(function (e) {
                e.preventDefault();
                var id = $(this).attr("id");
                var data = { "id": id }
                layer.confirm('您确定要删除吗?', { icon: 3, title: '删除会员' }, function (index) {
                    $.ajax({
                        type: "post",
                        url: "<?php echo url('mangeuser/shop/memberdel'); ?>",
                        data: data,
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
                    layer.close(index);
                });


            });

            //会员状态
            $('.status').click(function (e) {
                e.preventDefault();
                var statue = $(this).attr("id");
                var id = $(this).attr("dataid");
                var data = { "status": statue, "id": id };
                var msg;
                if (statue == 1) {
                    msg = '已禁用！';
                } else {
                    msg = '已开放！';
                }
                $.ajax({
                    type: "post",
                    url: "<?php echo url('mangeuser/shop/memberlist'); ?>",
                    data: data,
                    dataType: "json",
                    success: function (data) {
                        if (data.code == 1) {
                            layer.msg(msg, {
                                icon: 6,
                                time: 2000,
                            }, function () {
                                location.href = data.url;
                            });
                        } else {
                            layer.open({
                                title: '禁用失败',
                                icon: 2,
                                content: data.msg,
                            });
                        }
                    },
                    
                });
            });
        });
    </script>
</body>

</html>