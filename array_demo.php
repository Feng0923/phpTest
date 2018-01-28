<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/7/007
 * Time: 1:14
 */
$a = range(0,6,2);
$b = range("a","g");
//print_r($a);
//print_r($b);
$person = array("jack"=>array("age"=>20,"weight"=>"50kg"),
                "Tom"=>array("age"=>19,"weight"=>"45kg")
);
//print_r($person);
$arr = array("安徽"=>array("宿州"=>array("埇桥区","灵璧县"),
                            "合肥"=>array("蜀山区","肥东")),
    "河南"=>array(",,"=>array(",,",",,"),
        ",,"=>array(",,",",,"))
);
//print_r($arr);
//var_dump(in_array("合肥",$arr));
$arr2 = ["red","green","blue"];
//var_dump(in_array('green',$arr2));
$string = implode("-",$arr2);
//echo $string;
echo count($person)." ";
echo count($person,1);
