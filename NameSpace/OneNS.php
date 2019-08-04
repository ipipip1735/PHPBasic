<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/8/4
 * Time: 16:04
 */
namespace one;
class XX
{
    function f()
    {
        echo "XX.f()";
    }
}


class SXX extends XX
{
    public function __construct()
    {
        parent::f();
        XX::f();
    }
}
