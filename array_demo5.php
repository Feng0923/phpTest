<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/28/028
 * Time: 14:56
 */
$array = array("orange","banana");
array_unshift($array,"apple","pear");//在头部插入两个.
array_shift($array);//将头部单元移除.
array_push($array,"apple");//将"apple"压入数组末尾.
//print_r($array);
//print_r(array_slice($array,1,-1));
//print_r(array_slice($array,1,-1,true));
$a = "30";
//var_dump(is_array($array));
//var_dump(is_array($a));
$a = ['b','2',3,4,'a'];
echo array_sum($a);