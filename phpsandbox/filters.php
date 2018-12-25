<?php
/**
 * 过滤器函数
 * Created by PhpStorm.
 * User: yuanzi
 * Date: 2018/12/21
 * Time: 下午4:04
 */

//    if (filter_has_var(INPUT_POST,'data')){
//        echo "data found";
//    } else {
//        echo "No data";
//    }

    //验证内容是否是邮箱
//    if (isset($_POST["data"])) {
//        #验证是否是邮箱
//        if (filter_input(INPUT_POST,'data',FILTER_VALIDATE_EMAIL)){
//            echo "邮箱合法";
//        } else {
//            echo "邮箱不合法";
//        }
//    }

    //验证内容是否是邮箱
//    if (isset($_POST["data"])) {
//        $email = $_POST["data"];
//
//        #干掉不合法字符
//        $email = filter_var($email,FILTER_SANITIZE_EMAIL);
//
//        echo $email;
//
//        if (filter_var($email,FILTER_VALIDATE_EMAIL)){
//            echo "邮箱合法";
//        } else {
//            echo "邮箱不合法";
//        }
//
////        #验证是否是邮箱
////        if (filter_input(INPUT_POST,'data',FILTER_VALIDATE_EMAIL)){
////            echo "邮箱合法";
////        } else {
////            echo "邮箱不合法";
////        }
//    }

    $var =23;
    if (filter_var($var,FILTER_VALIDATE_INT)){
        echo "YES";
    } else {
        echo "NO";
    }



?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>过滤器函数</title>
</head>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
    <input type="text" name="data">
    <button type="submit">submit</button>
</form>

</body>
</html>
