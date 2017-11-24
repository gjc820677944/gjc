<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017\11\20 0020
 * Time: 19:45
 */
//魔术方法
class teacher{
    private $name='';
    private $sex='';

    function __set($name, $value)
    {
        // TODO: Implement __set() method.
        echo "Setting $name to $value \r\n";
        $this->$name=$value;
    }

    function __get($name)
    {
        if (!isset($this->name)){
            echo "未设置";
            $this->name="正在为你设置默认值";
        }
        return $this->name;
    }
}

$t=new teacher();
//echo $t->name="zhangsan";
//echo $t->sex;
echo $t->aa;