<?php
/**
 * Created by PhpStorm.
 * User: yuanzi
 * Date: 2018/12/19
 * Time: 下午6:32
 */

session_start();
//存储session数据
$_SESSION['views'] = 1;
?>



<html>
<head>
    <meta charset="utf-8">
    <title>学习session</title>
</head>
<body>
<?php

//检索session数据
echo "浏览量：" . $_SESSION['views'];
?>
</body>
</html>





