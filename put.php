<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/12/14
 * Time: 05:08
 */

require "header.php";

$method = $_SERVER["REQUEST_METHOD"];

if ($method != 'PUT') die("method is $method, not is PUT");


//导出PUT数据
//方法一
$putdata = fopen("php://input", "r");
//方法二
// $putdata = file_get_contents('php://input', 'r');


//每次读取1KB
$CHUNK = 1024;
echo header("Content-Type")."------------";
$prefix = "resources\\upload\\";
//解析文件类型
switch (header("Content-Type")) {
    case 'image/jpeg':
        $suffix = '.jpg';
        break;
    case 'image/gif':
        $suffix = '.gif';
        break;
    case 'image/png':
        $suffix = '.png';
        break;
    default:
        $suffix = '.txt';
}

//创建或打开临时文件
$fp = fopen($prefix . time() . $suffix, "w");

//每次读取1KB写入到文件
while ($data = fread($putdata, $CHUNK)) fwrite($fp, $data);

//关闭流，释放资源
fclose($fp);
fclose($putdata);