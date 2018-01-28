<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/1/001
 * Time: 1:30
 */
$greet = function ($name){
    echo "hello ".$name;
};
$greet("PHP");
$message = "Hello World";
$example = function () use ($message){
    echo $message;
};
echo $example();