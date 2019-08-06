<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/12/14
 * Time: 06:14
 */

// require "header.php";

for ($i=0; $i < 2; $i++) { 
	for ($j=0; $j < 100; $j++) { 
		echo $i.'-'.$j.", ";
	}
	echo "\n";
}
