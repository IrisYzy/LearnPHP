<?php
/**
 * 学习链接：
 * http://www.w3school.com.cn/tags/html_ref_httpmethods.asp
 * $_GET、$_POST
 *
 * GET - 从指定的资源请求数据。
 * POST - 向指定的资源提交要被处理的数据
 *
 *
 * 有关 GET 请求的其他一些注释：

GET 请求可被缓存
GET 请求保留在浏览器历史记录中
GET 请求可被收藏为书签
GET 请求不应在处理敏感数据时使用
GET 请求有长度限制
GET 请求只应当用于取回数据
 *
 *
 *
 *
 * 有关 POST 请求的其他一些注释：

POST 请求不会被缓存
POST 请求不会保留在浏览器历史记录中
POST 不能被收藏为书签
POST 请求对数据长度没有要求
 */




/**
 * $_GET的信息会显示在url里
 * 刷新不用重新提交表单
 */
    if (isset($_GET["name"])){
        $name = $_GET["name"];
    }


/**
 * $_POST保密性比较好
 * 刷新需要重新提交表单
 */
//    if (isset($_POST["name"])) {
////        print_r($_POST);
//        $name = $_POST["name"];
////        echo $name;
//    }

//    if (isset($_REQUEST["name"])) {
//        print_r($_REQUEST);
//        $name = $_REQUEST["name"];
//        echo $name;
//    }

//    echo $_SERVER["QUERY_STRING"];

/**
 *
 */
?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>My Website</title>
</head>
<body>
<form method="get" action="get_post.php">
    <div>
        <label>名字</label>
        <input type="text" name="name">
    </div>
    <div>
        <label>邮箱</label>
        <input type="text" name="email">
    </div>
    <input type="submit" value="确认">
</form>
    <ul>
        <li><a href="get_post.php?name=Iris">Iris</a></li>
        <li><a href="get_post.php?name=Henry">Henry</a></li>
    </ul>

    <h1>
        <?php echo "My name is: {$name}";?>
    </h1>
</body>
</html>

