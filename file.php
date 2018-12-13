<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/12/14
 * Time: 05:08
 */

//方法一
//$rsc = "resources/temp/resource";
//$dst = "resources/temp/destination";
//$data = file_get_contents($rsc, 'r');
//file_put_contents($dst, $data);


//方法二
$rsc = "resources/temp/resource";
$dst = "resources/temp/destination";
$CHUNK = 1024; //每次读取1KB写入到文件

$frsc = fopen($rsc, "r");
$fdst = fopen($dst, "w");
while ($data = fread($frsc, $CHUNK)) {
    echo $data;
    fwrite($fdst, $data);
}

//关闭流，释放资源
fclose($frsc);
fclose($fdst);

