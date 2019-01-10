<?php
/**
 * Created by PhpStorm.
 * User: yuanzi
 * Date: 2019/1/3
 * Time: 上午10:48
 */

$date = "2018-08-09";
echo date('Y-m-d',strtotime("$date+9 month"));
//
//$mysql_server_name = 'localhost'; //改成自己的mysql数据库服务器
//$mysql_username = 'root'; //改成自己的mysql数据库用户名
//$mysql_password = '12345678'; //改成自己的mysql数据库密码
//$mysql_database = 'zy01'; //改成自己的mysql数据库名
//$conn=mysqli_connect($mysql_server_name,$mysql_username,$mysql_password,$mysql_database); //连接数据库
////连接数据库错误提示
//if (mysqli_connect_errno($conn)) {
//    die("连接 MySQL 失败: " . mysqli_connect_error() . mysqli_connect_errno());
//}
//mysqli_query($conn,"set names utf8"); //数据库编码格式

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script>
        var x = 30;
        function test() {
            alert(x);
            var x = 10;
            alert(x);
            x = 20;
            function x() {};
                alert(x)

        }
        test();
    </script>
</head>
<body>

</body>
</html>
