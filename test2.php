<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/30/030
 * Time: 2:45
 */
$x = 100;
$y = "100";
var_dump($x == $y); //bool(true)
var_dump($x === $y); //bool(false)
var_dump($x <> $y); //bool(false)
var_dump($x !== $y); //bool(true)
var_dump($x <=> $y); //int(0)
$a = "hello";
$b = "world";
$c = $a.$b;
echo $c;