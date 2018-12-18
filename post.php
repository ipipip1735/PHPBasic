<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/12/14
 * Time: 06:14
 */

require "info.php";
//打印请求头
echo "\n-----Request Header------\n";
var_dump(getallheaders());

$putdata = file_get_contents('php://input', 'r');
var_dump($putdata);

var_dump($_POST);

