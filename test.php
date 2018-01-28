<!---->
<!--/**-->
<!-- * Created by PhpStorm.-->
<!-- * User: Administrator-->
<!-- * Date: 2017/10/16/016-->
<!-- * Time: 21:10-->
<!-- */-->
<?php
//include ()

$x = "Hello";
echo $x;
echo "<br>";

$y = 333;
var_dump($y);
$person = new Person();
$person->setName("梁胜峰");
echo "<br>";
echo $person->getName();

class Person
{
    var $name;
    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
}
?>
