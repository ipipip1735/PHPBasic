<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/8/6
 * Time: 9:29
 */

/**
 * 注册加载器
 */
//方式一：使用默认实现
//spl_autoload_register();


//方式二：自定义实现
function loaderOne($class_name) {
    echo '~~loaderOne~~'."\n";
//    require_once $class_name . '.php';
}

function loaderTwo($class_name) {
    echo '~~loaderTwo~~'."\n";
//    require_once $class_name . '.php';
}

function loaderThree($class_name) {
    echo '~~loaderThree~~'."\n";
    require_once $class_name . '.php';
}

spl_autoload_register("loaderOne", false);
spl_autoload_register("loaderTwo", false);
spl_autoload_register("loaderThree", false);




/**
 * 默认加载器
 */
//include_once "Person.php";
//spl_autoload_call("Person");
$person = new Person();




