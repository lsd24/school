<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>登录</title>
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/basic.css" />
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/Home/login.css" />
    <script type="text/javascript" src="__PUBLIC__/Js/jquery.js"></script>
    <script src="//cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<?php
echo "<pre>"; echo '</pre>'; ?>
    <form action="__URL__/doLogin" method="post">
        用户名: <input type="text" name="username"></br>
        密码: <input type="password" name="pwd"></br>
        <input type="submit" value="登录">
    </form>
   <!-- <form action='__URL__/doLogin' method='post' name='myForm'>
        用户名：<input type='text' name='username'/><br/>
        密　码：<input type='password' name='password'/><br/>
        验证码：<input type='text' name='code'/>

        <br/>
        <img src='__PUBLIC__/Images/login.gif' title='login' class='submit'/>
        <img src='__PUBLIC__/Images/register.gif' class='register'/>
    </form>-->
</body>
</html>