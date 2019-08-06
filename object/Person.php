<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/8/6
 * Time: 9:58
 */

class Person{
    public $age;
    public $name;

    /**
     * Person constructor.
     * @param $age
     * @param $name
     */
    public function __construct($age=25, $name='bob')
    {
        $this->age = $age;
        $this->name = $name;
    }
}