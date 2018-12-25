<?php
/**
 * Created by PhpStorm.
 * User: yuanzi
 * Date: 2018/12/20
 * Time: 上午10:41
 */

//echo '<h1>Hello World!</h1>';   //比print速度快，没有返回值

print "Hello Everybody!";       //返回值是bool类型，返回值为1

# 变量
$output = " It's my variable!";
echo $output;


# 数据类型
/**
 * 数据类型
 *
 * - String
 * - Interger   整数
 * - Float
 * - Boolean
 * - Array
 * - Object
 * - Null
 * - Resource
 */

$number = 5;
$float = 5.5;
$bool = false;


/**
 * 数值相加
 *
 */

$num1 = 7;
$num2 = 12;
$sum = $num1 + $num2;
echo "<p>$sum</p>";


/**
 * 字符串拼接
 */
$string1 = 'Hello';
$string2 = 'mix';
$greeting = $string1 . ' ' . $string2;

/**
 * 单引号 双引号
 */
echo '<p>$greeting</p>';
echo "<p>$greeting</p>";


/**
 * 转义字符
 */

$string3 = 'They\'re Here';
$string4 = "They're Here";

echo $string3;
echo $string4;

/**
 * 常量
 */
define('GREETING','Hello Everyone!',true);
echo "<p> </p>".GREETING;











