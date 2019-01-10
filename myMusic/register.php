<?php
/**
 * Created by PhpStorm.
 * User: yuanzi
 * Date: 2019/1/7
 * Time: 下午3:16
 */


    function sanitizeFormUsername($inputText) {
        $inputText = strip_tags($inputText);
        $username = str_replace(" ","",$inputText);
        return $inputText;
    }

    function sanitizeFormString($inputText) {
        $inputText = strip_tags($inputText);
        $inputText = str_replace(" ","",$inputText);
        $inputText = ucfirst(strtolower($inputText));
        return $inputText;
    }

    if (isset($_POST["loginButton"])){
        echo "Hello!~";
    }

    if (isset($_POST['registerButton'])){
//        $username = sanitizeFormUsername($_POST["username"]);
//
//        $username = $_POST['username'];
//        $username = strip_tags($username);
//        $username = str_replace(" ","",$username);
////        echo "$username";
//        $name = $_POST["name"];
//        $name = strip_tags($name);
//        $name = str_replace(" ","*",$name);
//        $name = ucfirst(strtolower($name));
//        echo $name;

        $username = sanitizeFormUsername($_POST["username"]);
        $name = sanitizeFormString($_POST["name"]);
        $email = sanitizeFormString($_POST["email"]);
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>个人音乐平台</title>
</head>
<body>
    <div id="inputContainer">
        <form action="register.php" id="loginForm" method="post">
            <h2>登录您的账户</h2>
            <p>
            <label for="loginUsername">用户</label>
            <input
                type="text"
                id="loginUsername"
                name="loginUsername"
                placeholder="请输入您的用户名"
            >
            </p>

            <p>
            <label for="loginUsername">密码</label>
            <input
                    type="text"
                    id="loginUsername"
                    name="loginUsername"
                    placeholder="请输入您密码"
                    >
            </p>

            <button type="submit" name="loginButton">
                登录
            </button>
        </form>

        <form action="register.php" id="registerForm" method="post">
            <h2>注册新的账户</h2>
            <p>
                <label for="username">用户</label>
                <input
                        type="text"
                        id="username"
                        name="username"
                        placeholder="请输入您的用户名"
                        required
                >
            </p>

            <p>
                <label for="name">名字</label>
                <input
                        type="text"
                        id="name"
                        name="name"
                        placeholder="请输入您的真实姓名"
                        required
                >
            </p>

            <label for="email">邮箱</label>
            <input
                    type="text"
                    id="email"
                    name="email"
                    placeholder="请输入您邮箱地址"
                    required
            >
            </p>

            <label for="password">密码</label>
            <input
                    type="text"
                    id="password"
                    name="password"
                    placeholder="请输入您的密码"
                    required
            >
            </p>

            </p>
            <label for="password2">确认密码</label>
            <input
                    type="text"
                    id="password2"
                    name="password2"
                    placeholder="请输入您的密码"
                    required
            >
            </p>

            <button type="submit" name="registerButton">注册</button>
        </form>

    </div>
</body>
</html>
