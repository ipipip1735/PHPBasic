<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/12/14
 * Time: 06:14
 */

var_dump($_COOKIE);
if (!isset($_COOKIE["one"])) {
    setcookie("one", 111, 3600);
    echo "cookies has added";
};