<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/31/031
 * Time: 1:13
 */
$array = [0,1,2];
foreach ($array as $value){
    echo "value is ".$value."<br/>";
}
$array2 = ["a"=>1,"b"=>2,"c"=>3];
foreach ($array2 as $item=>$value){
    echo "键是: ".$item."值是: ".$value."<br/>";
}
goto a;
echo "FOO";
a:
echo "BAR<br/>";
for ($i = 0;$i<10;$i++){
    if($i > 2){
        goto b;
    }
    echo $i;
}
b:
echo "跳出循环";