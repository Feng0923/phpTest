<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/30/030
 * Time: 3:04
 */
define("A","A");
const B = "B";
$x = 5;
function test()
{
    $y = 10;
    echo A;
    global $x;
    echo $GLOBALS['x'];
    echo "<p>inside function<p/>";
    echo "x is $x <br>";
    echo "y is $y <br>";
}
test();
echo "<p>outside function<p/>";
echo "x is $x <br>";
echo "y is $y <br>";
function add()
{
    static $x = 0;
    echo $x;
    $x++;
}
add();
add();
add();
$a = "aa";
$aa = "bb";
echo $$a;