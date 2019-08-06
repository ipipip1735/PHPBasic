<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/8/6
 * Time: 9:17
 */

//声明全局变量
$a = 1;
$b = 2;

//方式一
function sum()
{
    global $a, $b;//引入全局变量

    $b = $a + $b;
    unset($b); //删除变量，但对全局变量无效，全局变量b依然存在
}

total();
echo $b;


//方式二
function total()
{
    $GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b'];
//    unset($GLOBALS['b']);//对全局变量有效果，全局变量b被删除
}

total();
echo $b;