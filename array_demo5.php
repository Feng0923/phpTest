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
print_r($array);