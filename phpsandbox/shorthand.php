<?php
/**
 * Created by PhpStorm.
 * User: yuanzi
 * Date: 2018/12/20
 * Time: 下午2:31
 */

    $loggedIn = false;

    # 通过if进行判断是否登录成功
   /*
   if ($loggedIn) {
        echo "You r logged in";
    }else {
        echo "You r NOT logged in";
    }

   */


    # 三目运算符
//    echo ($loggedIn) ? "You r logged In" : "You r NOT logged IN";

    # 三目运算符嵌套使用
//    $age = 7;
//    $score = 12;
//
//    echo "你的分数是： " . ($score > 10 ? ($age > 10 ? "中等成绩" : "优等成绩")
//            : ($age > 10 ? "差等成绩" : "中等成绩"));

    $arr = ["Herry","Bucky","Iris","Emily"];


#http://learn.php.com/phpsandbox/shorthand.php
?>

<!--<div>-->
<!--    --><?php //if ($loggedIn) { ?>
<!--        <h1>Welcome to Lanou!</h1>-->
<!---->
<!--    --><?php //} else{ ?>
<!--        <h1>Hello~</h1>-->
<!--    --><?php //} ?>
<!---->
<!--</div>-->

<!--更美观的写法-->

<!--<div>-->
<!--    --><?php //if ($loggedIn) : ?>
<!--        <h1>He~</h1>-->
<!--    --><?php //else: ?>
<!--        <h1>Hello Everyone!</h1>-->
<!--    --><?php //endif; ?>
<!---->
<!--</div>-->


<!--for循环语法糖-->
<!--<div>-->
<!--    --><?php //for ($i = 0; $i < 10; $i++) : ?>
<!--        <li>--><?php //echo $i . "<br>"; ?><!--</li>-->
<!--    --><?php //endfor; ?>
<!--</div>-->



<!-- foreach循环语法糖 -->
<div>
    <?php foreach($arr as $value) : ?>
        <?php echo $value . "<br>"?>

    <?php endforeach; ?>

</div>













