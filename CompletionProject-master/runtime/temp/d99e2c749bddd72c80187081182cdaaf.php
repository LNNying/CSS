<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:63:"C:\wamp64\www\tp1\public/../ems/mangeuser\view\index\reset.html";i:1539523615;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>管理员登陆--忘记密码</title>
    <link rel="stylesheet" href="/static/css/bootstrap.min.css">
    <link rel="stylesheet" href="/static/css/font-awesome.min.css">
    <link rel="stylesheet" href="/static/css/layer.css">
    <script type="text/javascript" src="/static/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="/static/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/static/js/script.js"></script>
    <script type="text/javascript" src="/static/js/layer.js"></script>
    <style>
        .login{
            padding-left:60px;
        }
        h3{
            padding-left:60px;
        }
        .warn{
            font-size: 14px;
        }
    </style>
</head>

<body>
<div class="py-5">
    <div class="container ">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="card text-white p-5 bg-info">
                    <div class="card-body">
                        <h3 class="mb-4 mx-3 text-warning">重置密码</h3>
                        <form class="reset login">
                            <div class="form-group mx-1 row">
                                <div class="col-sm-9">
                                    <input type="username" name="username" id="username" class="form-control"
                                           placeholder="管理员账号">
                                </div>

                            </div>
                            <div class="form-group mx-1 row">
                                <div class="col-sm-9">
                                    <input type="password" name="password" id="password" class="form-control"
                                           placeholder="确认密码">
                                </div>

                            </div>

                            <div class="">
                                <div class="col-sm-9">
                                    <button type="button" id="login" class="btn btn-success btn-block reBtn">重置密码</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(function () {
        //重置密码
        $(".reBtn").click(function (e) {
            e.preventDefault();
            $.ajax({
                url: "<?php echo url('mangeuser/index/reseted'); ?>",
                type: "post",
                data: $(".reset").serialize(),
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
                            title: '重置密码失败',
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