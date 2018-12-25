<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <title>1212_对象的传值</title>
    <meta name="keywords" content="关键字列表"/>
    <meta name="description" content="网页描述"/>
    <link rel="stylesheet" type="text/css"  href="" />
    <style type="text/css"></style>
    <script src="text/javascript"></script>
</head>
<body>
<?php
class A{
    var $p1 =1;
    var $p2 =2;
}
$a1 = new A();
$a2 = $a1; //值传递
echo $a1->p1;
echo "<br />".$a2->p1 . "<br>";
var_dump($a1);

$arr = array("a"=>"red","b"=>"green","c"=>"red");
print_r(array_unique($a));


?>
</body>
</html>
