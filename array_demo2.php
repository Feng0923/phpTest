<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/9/009
 * Time: 0:43
 */
$food = ["orange","banana","apple"];
echo current($food)." ";//指针指向当前单元
echo next($food)." ";//指针向下移
echo prev($food)." ";//指针向前移
echo end($food)." ";//指针指向最后一位
echo reset($food);//重置指针,指向第一位

