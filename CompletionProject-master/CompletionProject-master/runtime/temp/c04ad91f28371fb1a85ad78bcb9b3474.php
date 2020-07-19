<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:60:"C:\wamp64\www\tp1\public/../ems/adduser\view\user\login.html";i:1539234302;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>管理员登陆</title>
    <link rel="stylesheet" href="/static/css/bootstrap.min.css">
    <link rel="stylesheet" href="/static/css/font-awesome.min.css">

    <script type="text/javascript" src="/static/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="/static/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/static/js/script.js"></script>
</head>

<body>
    <div class="py-5">
        <div class="container ">
            <div class="row">
                <div class="col-md-3"> </div>
                <div class="col-md-6">
                    <div class="card text-white p-5 bg-primary">
                        <div class="card-body">
                            <h2 class="mb-4">管理员登陆</h2>
                            <form>
                                <div class="form-group row">
                                    <label class="col-sm-3">用户名</label>
                                    <div class="col-sm-8">
                                        <input type="email" name="username" id="username" class="form-control" placeholder="用户名"> </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3">密码</label>
                                    <div class="col-sm-8">
                                        <input type="password" name="passwrod" id="password" class="form-control" placeholder="密码"> </div>
                                </div>
                                    <button type="button" id="loginBtn" class="btn btn-success">登录</button>
                                    <button type="reset" class="btn btn-warning">取消</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
