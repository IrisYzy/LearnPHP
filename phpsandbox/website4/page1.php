<?php
/**
 * Created by PhpStorm.
 * User: yuanzi
 * Date: 2018/12/24
 * Time: 下午4:01
 */
    if (isset($_POST["submit"])) {
        $name = $_POST["name"];
        $email = $_POST["email"];

        #存储到session中
        session_start(); #如果不执行此方法，不能使用session

        $_SESSION["name"] = $name;
        $_SESSION["email"] = $email;

        header("Location:page2.php");
    }

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP SESSION</title>
</head>
<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input type="text" name="name" placeholder="Enter Name">
        <input type="text" name="email" placeholder="Enter Email">
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>
