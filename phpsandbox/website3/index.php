<?php
/**
 * Created by PhpStorm.
 * User: yuanzi
 * Date: 2018/12/21
 * Time: 下午4:47
 */

    if (filter_has_var(INPUT_POST,'submit')){
//        echo "success";
        #获取表单内容
        $name = $_POST["name"];
        $email = $_POST["email"];
        $message = $_POST["message"];

        #验证内容是否为空
        if (!empty($email) && !empty($name) && !empty($message)){

        }else{
            #failed
            $msg = "内容不能为空！";
            $msgClass = 'alert-danger';
        }
    }
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>邮件发送</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/litera/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">邮件发送</a>
            </div>
        </div>
    </nav>
    <div class="container">
        <?php if ($msg != '') : ?>
            <div class="alert <?php echo $msgClass; ?>">
            <?php echo $msg; ?>
            </div>
        <?php endif;?>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>">
            <div>
                <label>名字</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="">邮箱</label>
                <input type="text" name="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="">消息</label>
                <textarea name="message" id="" cols="30" rows="10" class="form-control"></textarea>
            </div>
            <br>
            <button type="submit" name="submit" class="btn-primary">发送</button>
        </form>
    </div>

</body>
</html>