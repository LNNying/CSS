<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:63:"C:\wamp64\www\tp1\public/../ems/adduser\view\user\register.html";i:1539240588;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>管理员注册</title>
    <link rel="stylesheet" href="/static/css/bootstrap.min.css">
    <link rel="stylesheet" href="/static/css/font-awesome.min.css">

    <script type="text/javascript" src="/static/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="/static/js/bootstrap.min.js"></script>

</head>

<body>
    <div class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-3"> </div>
                <div class="col-md-6">
                    <div class="card text-white p-5 bg-primary">
                        <div class="card-body">
                            <h2 class="mb-4">管理员注册</h2>
                            <form class="register" role="form">
                                <div class="form-group row">
                                    <div class="col-sm-8">
                                        <input type="text" name="username" id="username" class="form-control"
                                            placeholder="用户名">
                                    </div>
                                    <div class="col-sm-4">
                                        <span class="help-block text-danger">长度大于4位</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-8">
                                        <input type="text" name="nickname" id="nickname" class="form-control"
                                            placeholder="昵称">
                                    </div>

                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-8">
                                        <input type="password" name="password" id="password" class="form-control"
                                            placeholder="密码">
                                    </div>
                                    <div class="col-sm-4">
                                        <span class="help-block text-danger">长度大于6位</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-8">
                                        <input type="password" name="repassword" id="repassword" class="form-control"
                                            placeholder="确认密码">
                                    </div>
                                    <!-- <div class="col-sm-4"></div> -->
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-8">
                                        <input type="email" name="email" id="email" class="form-control" placeholder="邮箱">
                                    </div>
                                    <!-- <div class="col-sm-4"></div> -->
                                </div>

                                <button type="button" id="register" class="btn btn-success">注册</button>
                                <button type="reset" class="btn btn-warning">取消</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <script type="text/javascript" src="/static/js/script.js"></script> -->
    <script>
        $(function () {

            //注册管理员
            $("#register").click(function (e) {
                e.preventDefault();
                $.ajax({
                        url:"<?php echo url('addUser/user/register'); ?>",
                        type:'post',
                        data: $("form").serialize(),
                        dataType:'json',
                        success: function (data) {
                        console.log(data);
                    },
                })
            });
        });
    </script>
</body>

</html>