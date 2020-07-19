<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:63:"C:\wamp64\www\tp1\public/../ems/mangeuser\view\index\login.html";i:1539842311;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>管理员登陆</title>
    <link rel="stylesheet" href="/static/css/bootstrap.min.css">
    <link rel="stylesheet" href="/static/css/font-awesome.min.css">
    <link rel="stylesheet" href="/static/css/layer.css">
    <script type="text/javascript" src="/static/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="/static/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/static/js/script.js"></script>
    <script type="text/javascript" src="/static/js/layer.js"></script>
    <style>
        #foreign {
            cursor: pointer;
        }

        .login {
            padding-left: 60px;
        }

        h3 {
            padding-left: 60px;
        }
    </style>
</head>

<body>
<div class="py-5">
    <div class="container ">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="card text-white p-5 bg-primary">
                    <div class="card-body">
                        <h3 class="mb-4 mx-3">管理员登陆</h3>
                        <form class="login">
                            <div class="form-group">
                                <label class="px-3">用户名</label>
                                <div class="col-sm-9">
                                    <input type="email" name="username" id="username" class="form-control"
                                           placeholder="用户名"></div>
                            </div>
                            <div class="form-group">
                                <label class="px-3">密码</label>
                                <div class="col-sm-9">
                                    <input type="password" name="password" id="password" class="form-control"
                                           placeholder="密码"></div>
                            </div>
                            <div class="row ">
                                <div class="col-sm-5">
                                    <a class="text-white mx-3" href="<?php echo url('mangeuser/index/foreign'); ?>">
                                        忘记密码?</a>
                                </div>
                                <div class="col-sm-5">
                                    <a class="text-white mx-4" href="<?php echo url('mangeuser/index/register'); ?>">
                                        免费注册</a>
                                </div>
                            </div>
                            <div class="">
                                <div class="col-sm-9">
                                    <button type="button" id="login" class="btn btn-success btn-block">登录</button>
                                </div>
                            </div>

                        </form>
                        <!--<a class="mx-3 text-white login" href="<?php echo url('mangeuser/index/foreign'); ?>">-->
                            <!--忘记密码?</a>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(function () {
        $("#login").click(function (e) {
            e.preventDefault();
            $.ajax({
                url: "<?php echo url('mangeuser/index/login'); ?>",
                type: "post",
                data: $(".login").serialize(),
                dataType: 'json',
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
                            title: '登录失败',
                            icon: 2,
                            content: data.msg,
                        });
                    }

                }
            });
        });
    })
</script>
</body>

</html>