<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/1/001
 * Time: 1:13
 */
function test(...$num){
    foreach ($num as $value){
        echo $value." ";
    }
}
test(1,2,3,4);
echo "\n";
//function sum($a,$b): int {
//    return a+b;
//}
//var_dump(sum(1,2));
function foo(){
    echo "this is foo";
}
$f = "foo";
$f();