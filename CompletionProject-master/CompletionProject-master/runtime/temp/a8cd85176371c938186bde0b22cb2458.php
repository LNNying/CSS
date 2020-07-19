<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:61:"C:\wamp64\www\phone\public/../ems/index\view\login\login.html";i:1556517737;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>登陆</title>
    <link rel="stylesheet" href="../static/css/login.css" type="text/css"/>
    <link rel="stylesheet" href="../static/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../static/layer/css/layer.css"/>
    <script src="../static/bootstrap/jquery.min.js"></script>
    <script src="../static/layer/js/layer.js"></script>
    <script src="../static/bootstrap/popper.min.js"></script>
    <script src="../static/bootstrap/bootstrap.min.js"></script>
</head>
<body>
    <div class="logo">
        <span class="mainLogo"><?php echo $data['webname']; ?></span>
        <span class="version"><?php echo $data['edition']; ?></span>
    </div>
    <div class="user-login">
        <div class="user-title">
            <span><i class="fa fa-eercast"></i>用户登录</span>
        </div>
        <div class="login-user">
            <form class="form-user" id="user-form">
                <div class="input-group mb-3" style="margin-top: 10px;">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-user-o"></i></span>
                    </div>
                    <input type="text" class="form-control" placeholder="用户名" id="user" name="username">
                </div>
                <div class="input-group mb-3" style="margin-top: 30px;">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-key"></i></span>
                </div>
                <input type="password" class="form-control" placeholder="密码" id="pass" name="password">
            </div>
                <div class="input-group mb-3" style="margin-top: 40px;">
                    <button class="btn btn-primary btn-block" type="button" id="btn-submit">登录</button>
                </div>
            </form>
        </div>
    </div>
    <div class="circle-box">
        <img src="../static/images/tec-11.png" class="tec-img tec-rotate-1"/>
        <img src="../static/images/tec-21.png" class="tec-img tec-rotate-2"/>
    </div>
<script>
    function getBrowserInfo() {
        var Sys = {};
        var ua = navigator.userAgent.toLowerCase();
        var re = /(msie|firefox|chrome|opera|version).*?([\d.]+)/;
        var m = ua.match(re);
        Sys.browser = m[1].replace(/version/, "'safari");
        Sys.ver = m[2];
        return Sys;
    }
    system();
    function system() {
        var sys = getBrowserInfo();
        if (sys.browser != 'chrome') {
            layer.open({
                title: '警告',
                icon: 3,
                content: '建议使用谷歌浏览器',
            });
        } else {
            var version = sys.ver.substring(0,2);
            if (sys.ver < version) {
                layer.open({
                    title: '警告',
                    icon: 3,
                    content: '建议使用70版本以上的谷歌',
                });
            }
        }
    }
    $(function () {
        $('#btn-submit').click(function (e) {
            if ($('#user').val().trim().length  === 0) {
                layer.open({
                    title: '登陆错误',
                    icon: 2,
                    content: '用户名不能为空！'
                });
                return;
            } else if ($('#pass').val().trim().length === 0) {
                layer.open({
                    title: '登陆错误',
                    icon: 2,
                    content: '密码不能为空！'
                });
                return;
            }
            e.preventDefault();
            $.ajax({
                url: "<?php echo url('index/login/login'); ?>",
                type: "post",
                data: $(".form-user").serialize(),
                dataType: 'json',
                success: function (data) {
                    console.log(data);
                    if (data.code == 1) {
                        layer.msg(data.msg, {
                            icon: 6,
                            time: 2000,
                        }, function () {
                            location.href = data.url;
                        });
                    } else {
                        layer.open({
                            title: '登录失败!',
                            icon: 2,
                            content: data.msg,
                        });
                    }
                },
                error: function (res) {

                }
            });
        });
    })
</script>
</body>
</html>
