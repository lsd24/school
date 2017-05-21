<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
logo
<p style="text-align: right;">欢迎你 <?php echo (session('username')); ?> <a href='__APP__/Login/doLogout' target='_top'>退出</a></p>
</body>
</html>