<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/9/009
 * Time: 0:52
 */
$fruits = ['fruit1'=>'apple','fruit2'=>'orange ','fruit3'=>'grape','fruit4'=>'apple'];
for ($i=0;$i<count($fruits);$i++){
    echo key($fruits)."<br/>";
    next($fruits);//将数组指针向后移
}
if(array_key_exists("fruit1",$fruits)){//检测数组中是否存在键fruit1
    echo "exist";
}
print_r(array_keys($fruits));
print_r(array_keys($fruits,"apple"));//判断时,是使用严格的"==="
print_r(array_values($fruits));
$key=array_search("apple",$fruits);
echo $key."\n";
$result = array_pad($fruits,6,1);//从数组尾部开始用"1",填补数组到含6个元素.
print_r($result);
$result = array_pad($fruits,-6,1);//从数组首部开始用"1",填补数组到含6个元素.
print_r($result);
$a = array_fill(5,2,"banana");//用"banana"填充数组到2个元素,索引键从5开始
print_r($a);
$c = array_fill(-2,3,"pear");//如果是负数,则第二个元素从"0"开始
print_r($c);
$keys=array("foo",5,"bar");
$a = array_fill_keys($keys,"banana");//使用$keys数组的值作为键,banana作为值重新组件一个数组
print_r($a);
$rand_array = array_rand($fruits,2);//从该数组中随机取出两个单元,组成一个新的数组返回.
print_r($rand_array);
