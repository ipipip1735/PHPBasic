<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/12/14
 * Time: 06:14
 */

if (!isset($_COOKIE["one"])) {
    setcookie("one", 111, time() + 3600);
    echo "cookies has added";
};
var_dump($_COOKIE);
