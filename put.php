<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/12/14
 * Time: 05:08
 */

require "info.php";
//require "info.php";
echo "Request Head|";
var_dump(getallheaders());
echo "----------\n";


$method = $_SERVER["REQUEST_METHOD"];
if ($method != 'PUT') die("method is $method, not is PUT");


//导出PUT数据
//方法一：一次获取全部数据
$putdata = file_get_contents('php://input', 'r');

$prefix = "resources\\upload\\";
//解析文件类型
switch ($_SERVER["CONTENT_TYPE"]) {
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

file_put_contents($prefix . time() . $suffix, $putdata);
echo "completion!";




//
////方法二，大文件上传，每次读取1KB
//$putdata = fopen("php://input", "r");
//
////每次读取1KB
//$CHUNK = 1024;
//$prefix = "resources\\upload\\";
////解析文件类型
//switch ($_SERVER["CONTENT_TYPE"]) {
//    case 'image/jpeg':
//        $suffix = '.jpg';
//        break;
//    case 'image/gif':
//        $suffix = '.gif';
//        break;
//    case 'image/png':
//        $suffix = '.png';
//        break;
//    default:
//        $suffix = '.txt';
//}
//
////创建或打开临时文件
//$fp = fopen($prefix . time() . $suffix, "w");
//
////每次读取1KB写入到文件
//while ($data = fread($putdata, $CHUNK)) fwrite($fp, $data);
//
////关闭流，释放资源
//fclose($fp);
//fclose($putdata);
//echo "completion!";