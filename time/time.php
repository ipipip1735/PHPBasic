<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/8/4
 * Time: 5:47
 */


/**
 * 设置时区
 */
date_default_timezone_set("Asia/Shanghai");


/**
 * 获取当前时区和时间
 */
$zone = date_default_timezone_get();
$time = date("Y-m-d H:i:s");

echo $zone."|".$time;
