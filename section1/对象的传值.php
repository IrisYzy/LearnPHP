<?php
/**
 * Created by PhpStorm.
 * User: yuanzi
 * Date: 2018/12/18
 * Time: 上午11:23
 */

$v1 = 1;
$v2 = $v1;
echo '<b>变量初始状态(值传递)</b>';
echo '$v1的值：'.$v1.',$v2的值是：'.$v2;
echo "<br />";

$v2 = 2;
echo '<b>$v2赋值为2后的状态</b>';
echo '$v1的值：'.$v1.',$v2的值是：'.$v2;
echo "<br />";

$v1 = 3;
echo '<b>$v1赋值为3后的状态</b>';
echo '$v1的值：'.$v1.',$v2的值是：'.$v2;
echo "<br />";

unset($v1);
echo '<b>$v1销毁后的状态</b>';
echo '$v2的值是：'.$v2;
echo "<br />";

echo "<hr />";

$v3 = 1;
$v4 = &$v3;
echo '<b>变量初始状态(引用传递)</b>';
echo '$v3的值：'.$v3.',$v4的值是：'.$v4;
echo "<br />";

$v3 = 2;
echo '<b>$v3赋值为2后的状态</b>';
echo '$v3的值：'.$v3.',$v4的值是：'.$v4;
echo "<br />";

unset($v3);
echo '<b>$v3销毁后的状态</b>';
echo '$v4的值是：'.$v4;
echo "<br />";

echo "<hr />";


class test {
    public $v1 = 1;
    public $v2 = 2;
}

$t1 = new test();

$t2 = $t1;

echo '<b>对象初始状态(值传递)</b>';
echo "<br />";
echo '对象$t1：  $t1->v1的值：'.$t1->v1.',$t1->v2的值是：'.$t1->v2;
echo "<br />";
echo '对象$t2：  $t2->v1的值：'.$t2->v1.',$t2->v2的值是：'.$t2->v2;
echo "<br />";

$t1->v1 = 2;
$t1->v2 = 3;
echo '<b>$t1对象改变属性值后</b>';
echo "<br />";
echo '对象$t1：  $t1->v1的值：'.$t1->v1.',$t1->v2的值是：'.$t1->v2;
echo "<br />";
echo '对象$t2：  $t2->v1的值：'.$t2->v1.',$t2->v2的值是：'.$t2->v2;
echo "<br />";

$t1 = 123;
echo '<b>$t1改变值类型后</b>';
echo "<br />";
echo '对象$t2：  $t2->v1的值：'.$t2->v1.',$t2->v2的值是：'.$t2->v2;
echo "<hr />";

$t3 = new test();
$t4 = &$t3;

echo '<b>对象初始状态(引用传递)</b>';
echo "<br />";
echo '对象$t3：  $t3->v1的值：'.$t3->v1.',$t3->v2的值是：'.$t3->v2;
echo "<br />";
echo '对象$t4：  $t4->v1的值：'.$t4->v1.',$t4->v2的值是：'.$t4->v2;
echo "<br />";

$t3->v1 = 2;
$t3->v2 = 3;
echo '<b>$t1对象改变属性值后</b>';
echo "<br />";
echo '对象$t3：  $t3->v1的值：'.$t3->v1.',$t3->v2的值是：'.$t3->v2;
echo "<br />";
echo '对象$t4：  $t4->v1的值：'.$t4->v1.',$t4->v2的值是：'.$t4->v2;
echo "<br />";


$t3 = 123;
echo '<b>$t1对象改变属性值后</b>';
echo "<br />";
echo '对象$t4：  $t4->v1的值：'.$t4->v1.',$t4->v2的值是：'.$t4->v2;
echo "<br />";
