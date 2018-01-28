<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/6/006
 * Time: 0:50
 */
$page = "page1,page2,page3";
$pages = explode(",",$page);
print_r($pages);
echo str_shuffle("abcdefg");
echo str_repeat("&",9);
$e = "i don't like you";
$ee = addslashes($e);
echo $ee;
echo stripslashes($ee);
$a = 22;
echo '$a don\'t ';
//echo "\t";
echo "$a";
$b = "i love you";
echo ucfirst($b).ucwords($b).strtoupper($b);
var_dump(stripos($b,"d"));
var_dump(stripos($b,"l"));
$c = "aaddccdddsadfasdfas";
var_dump(strripos($c,"a"));
$d = "A a";
var_dump(stripos($d,"a",-1));
echo str_ireplace("i","he",$b);
echo substr($b,1);
echo substr($b,1,3);