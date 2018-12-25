<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <title>网页标题</title>
    <meta name="keywords" content="关键字列表"/>
    <meta name="description" content="网页描述"/>
    <link rel="stylesheet" type="text/css"  href="" />
    <style type="text/css"></style>
    <script src="text/javascript"></script>
</head>
<body>
<?php
class dog{
    var $color = "";    //颜色
    function speak($n){
        for($i = 0;$i < $n;++$i){
           echo "汪～"; 
        }
        echo "<br />";
    }
}
$dog1 = new dog();
$dog1 -> color = "黄色";
$dog1 -> speak(2);

$dog2 = new dog();
$dog2 -> color = "黑色";
$dog1 -> speak(3);

?>
</body>
</html>