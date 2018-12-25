<?php
/**
 * Created by PhpStorm.
 * User: yuanzi
 * Date: 2018/12/24
 * Time: 下午4:12
 */
    session_start();

    $name = $_SESSION["name"];
    $email = $_SESSION["email"];

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>page2</title>
</head>
<body>
    <div>你的名字是：<?php echo $name ?></div>
    <p>你的邮箱是：<?php echo $email ?></p>
    <a href="page3.php">Go to page3!~</a>

</body>
</html>
