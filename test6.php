<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/31/031
 * Time: 23:54
    */
function test1(&$a){
        $a = $a+1;
    return $a;
}
$a = 1;
echo test1($a);
echo $a;
function test2($name="I",$fruit){
    echo $name." like ".$fruit;
}
test2("you");
