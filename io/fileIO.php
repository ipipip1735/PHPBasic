<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/12/14
 * Time: 05:08
 */

//$rsc = "res/temp/resource";
//$dst = "res/temp/destination";
//$CHUNK = 1; //每次读取1KB写入到文件

/**
 * 方法一
 * 使用fopen()
 */
//
////只读文件
////$fsrc = fopen($rsc, "r");
////while ($data = fread($fsrc, $CHUNK)) {
////    echo $data;
////}
////fclose($fsrc);//关闭流，释放资源
//
//
////文件复制
//$fsrc = fopen($rsc, "r");
//$fdst = fopen($dst, "a");//追加写入
//while ($data = fread($fsrc, $CHUNK)) {
//    echo $data;
//    fwrite($fdst, $data);
//}
////关闭流，释放资源
//fclose($fsrc);
//fclose($fdst);





/**
 * 方法二
 * 使用file_get_contents()/file_put_contents()
 */
//$rsc = "res/temp/resource";
//$dst = "res/temp/destination";
////$data = file_get_contents($rsc);//读取文件
//$data = file_get_contents($rsc, false, null, 2, 1);//读取文件指定字节
//echo $data;
//file_put_contents($dst, $data);//写入文件
////file_put_contents($dst, $data, FILE_APPEND);//追加写入文件



/**
 * 使用buffer
 */
function cb($buffer, $flag) //回调函数可以放文件末尾
{
    echo $buffer;
    echo $flag;
    return "[cb]".$buffer;
}
ob_start();//启动buffer
//ob_start("cb", 0, PHP_OUTPUT_HANDLER_STDFLAGS);//启动buffer，并设置回调函数和处理标记
echo "ddd";

//ob_clean();//清除buffer
//$data = ob_​get_​clean();//前面输入到buffer中的内容被清除了，所以获取的内容为null
