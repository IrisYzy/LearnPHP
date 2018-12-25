<?php
/**
 * Created by PhpStorm.
 * User: yuanzi
 * Date: 2018/12/24
 * Time: 下午4:31
 */


    session_start();

    $_SESSION["name"] = "Henry";
    $name3 = $_SESSION["name"];
    $email3 = $_SESSION["email"];

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>page3</title>
</head>
<body>
    <h1>Hello <?php echo $name3; ?></h1>
</body>
</html>
