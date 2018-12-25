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
// class MyDreamGirl{
//     var $name = "A";
//     var $age = 18;
//     var $edu = "大学";  
//     function xiyi($n1){
//         echo "<p>" . $n1 . "正在洗衣服。";
//     }  
//     public function howold($n,$a)
//     {
//         echo "<p>" . $n . "今年" . $a . "岁了。";
//     }
// }

// // $girl1 = new MyDearmGirl();
// // $v1 = $girl1->name; //获得该对象的属性
// // $girl1 -> xiyi($v1);

// $girl2 = new MyDreamGirl();
// $girl2 -> name = "小红";
// $girl2 -> age = 22;
// $girl2 -> howold($girl2 -> name,$girl2 -> age);


//对象的传值问题
//以变量形式出现
//1.变量之间默认使用“值传递”；
//2.使用“&”才能实现变量之间的“引用传递”；
class A{
    var $p1 =1;
    var $p2 =2;
}
$a1 = new A();
$a2 = $a1; //值传递
echo "<br />a1中的p1: " . $a1->p1;
echo "<br />a2中的p1: " . $a2->p1 . "<br>";
var_dump($a1);
//然后修改a1中的p1
$a1->p1 = 20;
echo "<br>修改a1中的p1为20后： ";
echo "<br>a1中的p1: " . $a1->p1;
echo "<br>a2中的p1: " . $a2->p1;
var_dump($a1);

//修改a2中的p1
$a2->p1 = 22;
echo "<br>修改a2中的p1为22后： ";
echo "<br>a1中的p1: " . $a1->p1;
echo "<br>a2中的p1: " . $a2->p1;

echo "<br>对象a1的编号可显示为： ";
var_dump($a1);

?>
</body>
</html>