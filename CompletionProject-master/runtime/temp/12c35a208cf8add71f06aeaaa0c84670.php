<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:59:"C:\wamp64\www\tp1\public/../ems/index\view\index\login.html";i:1542453772;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="/static/htmlcss/login-register.css"/>
    <link rel="stylesheet" type="text/css" href="http://unpkg.com/iview/dist/styles/iview.css">
    <!--<script type="text/javascript" src="/static/js/jquery-3.3.1.min.js"></script>-->
    <script type="text/javascript" src="http://vuejs.org/js/vue.min.js"></script>
    <script src="https://cdn.staticfile.org/vue-resource/1.5.1/vue-resource.min.js"></script>
    <script type="text/javascript" src="http://unpkg.com/iview/dist/iview.min.js"></script>
</head>
<body>
<div id="app">
    <Card id="card">
        <div slot="title">
            <h4>登录</h4>
        </div>
        <i-form ref="formInline" :model="formInline" >
                <FormItem prop="user">
                    <i-input type="text" v-model="formInline.user" placeholder="用户名" @on-blur="user">
                    <Icon type="ios-person-outline" slot="prepend"></Icon>
                    </i-input>
                </FormItem>
            <FormItem>
                <div style="height: 20px; color: red;"><span v-html="erroruser"></span></div>
            </FormItem>
            <FormItem prop="password">
                <i-input type="password" v-model="formInline.password" placeholder="密码" @on-blur="pass">
                    <Icon type="ios-lock-outline" slot="prepend"></Icon>
                </i-input>
            </FormItem>
            <FormItem>
                <div style="height: 20px;color: red;"><span v-html="errorpass"></span></div>
            </FormItem>
            <FormItem prop="validate">
                <span>
                <i-input type="text" v-model="formInline.validate" placeholder="验证码" style="width: 175px" @on-blur="vali"></i-input>
                <img src="<?php echo captcha_src(); ?>" alt="" style="width: 90px; height: 30px;position: absolute;" onclick="this.src=this.src+'?'">
                </span>
            </FormItem>
            <div style="height: 20px; color: red;"><span v-html="errorvali"></span></div>
            <FormItem>
                <a href="<?php echo url('index/index/register'); ?>">免费注册？</a>
                <a href="<?php echo url('index/index/register'); ?>" style="float: right;">忘记密码？</a>
            </FormItem>
            <div style="height: 20px; color: red;"></div>
            <FormItem>
            <i-button type="primary" @click="submit">登录</i-button>
            </FormItem>
        </i-form>
    </Card>
</div>
<canvas id="canvas"></canvas>
<script src="/static/js/script.js"></script>
<script src="/static/htmljs/login-register.js"></script>
</body>
</html>