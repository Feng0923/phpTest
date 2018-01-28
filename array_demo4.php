<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/25/025
 * Time: 15:58
 */
$fruits = array("lemon","orange","banana","apple");
//sort($fruits);
//print_r($fruits);
//$fruits = array("l"=>"lemon","o"=>"orange","b"=>"banana","a"=>"apple");
//asort($fruits);
//arsort($fruits);
//rsort($fruits);
//shuffle($fruits);
//print_r($fruits);
for ($i = 0;$i<count($fruits);$i++){
    echo $fruits[$i]." ";
}
foreach ($fruits as $val){
    echo $val." ";
}
while (list($key,$val)=each($fruits)){
    echo $key."=>".$val." ";
}
$array = array("coffee","brown","caffeine");
list($drink,$color,$power)= $array;
echo $drink." ".$color." ".$power." ";
echo "\n";
$info = array("a","b","c","d");
print_r(array_chunk($info,2));