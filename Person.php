<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/30/030
 * Time: 2:29
 */

class Person
{
    var $name;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }
}
?>