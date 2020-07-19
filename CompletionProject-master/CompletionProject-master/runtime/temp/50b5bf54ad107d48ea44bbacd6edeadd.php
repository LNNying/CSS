<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:62:"C:\wamp64\www\tp1\public/../ems/index\view\index\register.html";i:1542451828;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>用户注册</title>
    <link rel="stylesheet" type="text/css" href="/static/htmlcss/login-register.css"/>
    <link rel="stylesheet" type="text/css" href="http://unpkg.com/iview/dist/styles/iview.css">
    <script type="text/javascript" src="/static/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="http://vuejs.org/js/vue.min.js"></script>
    <script type="text/javascript" src="http://unpkg.com/iview/dist/iview.min.js"></script>
    <style type="text/css">
        body{
            background:url("/static/img/320585.jpg");
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>
<body>
<div id="register">
    <Card id="card">
        <div slot="title">
            <h4>注册</h4>
        </div>
        <i-form ref="formRegister" :model="formRegister">
            <FormItem prop="user">
                <i-input type="text" v-model="formRegister.user" placeholder="用户名" @on-blur="user">
                    <Icon type="ios-person-outline" slot="prepend"></Icon>
                </i-input>
            </FormItem>
            <FormItem>
                <div style="height: 20px; color: red;"><span v-html="errorUser"></span></div>
            </FormItem>
            <FormItem prop="nickName">
                <i-input type="text" v-model="formRegister.nickName" placeholder="昵称">
                    <Icon type="ios-person-outline" slot="prepend"></Icon>
                </i-input>
            </FormItem>
            <FormItem>
                <div style="height: 20px; color: red;"></div>
            </FormItem>
            <FormItem prop="password">
                <i-input type="password" v-model="formRegister.password" placeholder="密码" @on-blur="pass">
                    <Icon type="ios-lock-outline" slot="prepend"></Icon>
                </i-input>
            </FormItem>
            <FormItem>
                <div style="height: 20px;color: red;"><span v-html="errorpass"></span></div>
            </FormItem>
            <FormItem prop="rePassword">
                <i-input type="password" v-model="formRegister.rePassword" placeholder="确认密码" @on-blur="rePass">
                    <Icon type="ios-lock-outline" slot="prepend"></Icon>
                </i-input>
            </FormItem>
            <FormItem>
                <div style="height: 20px;color: red;"><span v-html="errorRePass"></span></div>
            </FormItem>
            <FormItem prop="email">
                <i-input type="email" v-model="formRegister.email" placeholder="邮箱" @on-blur="email">
                    <Icon type="md-mail" slot="prepend"></Icon>
                </i-input>
            </FormItem>
            <FormItem>
                <div style="height: 20px;color: red;"><span v-html="errorEmail"></span></div>
            </FormItem>
            <FormItem>
                <i-button type="primary" @click="register">注册</i-button>
                <i-button type="warning" @click="cancel">取消</i-button>
            </FormItem>
        </i-form>
    </Card>
</div>
<script>
    var register = new Vue({
        el:"#register",
        data:{
            errorUser:'',
            errorpass:'',
            errorRePass:'',
            errorEmail:'',
            errorNick:'',
            formRegister:{
                user:'',
                password:'',
                rePassword:'',
                nickName:'',
                email:'',
            }
        },
        methods:{
            user:function () {
                if(this.formRegister.user === '' || this.formRegister.user.trim().length == 0){
                    this.errorUser = '用户名不能为空';
                }else{
                    this.errorUser = '';
                }
            },
            pass:function () {
                if(this.formRegister.password === '' || this.formRegister.password.trim().length == 0){
                    this.errorpass = '密码不能为空';
                }else if (this.formRegister.password.length <6){
                    this.errorpass = '密码长度不能少于6位';
                }else{
                    this.errorpass = '';
                }
            },
            rePass:function () {
                if(this.formRegister.rePassword === '' || this.formRegister.rePassword.trim().length == 0){
                    this.errorRePass = '确认密码不能为空';
                }else if(this.formRegister.rePassword != this.formRegister.password){
                    this.errorRePass = '密码不符';
                }else{
                    this.errorRePass = '';
                }
            },
            email:function () {
                var myreg = /^([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/;
                if(this.formRegister.email === '' || this.formRegister.email.trim().length === 0){
                    this.errorEmail = '邮箱不能为空';
                }else if(!myreg.test(this.formRegister.email)){
                    this.errorEmail = '邮箱格式错误 ';
                }else{
                    this.errorEmail = '';
                }
            },
            register:function () {
                if(this.formRegister.user.trim().length === 0 || this.formRegister.password.trim().length === 0 || this.formRegister.email.trim().length === ''){
                    this.$Message.error('填写错误');
                }else{
                    this.$Message.success('成功');
                }
            },
            cancel:function () {
              var form = this.formRegister;
              form.user = '';
              form.password = '';
              form.rePassword = '';
              form.email = '';
              form.nickName = '';
            }
        }
    });
</script>

<!--<script src="/static/htmljs/login-register.js"></script>-->
</body>
</html>