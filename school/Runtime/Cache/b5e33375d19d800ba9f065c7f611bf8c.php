<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
echo "<pre>"; echo '</pre>'; echo "当前版本: ".$_SERVER['SERVER_SOFTWARE']."。"; echo "</br>"; echo "服务器IP: ".$_SERVER['SERVER_ADDR']."。"; echo "</br>"; echo "当前时间: ".date('Y-m-d H:i:s')."。"; ?>
</body>
</html>