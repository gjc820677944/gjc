<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017\11\22 0022
 * Time: 11:47
 */

interface jk{
    function hello();
}

class f{
    public $name="张三";
}

class z extends f implements jk{
    function hello()
    {
        echo 1;
        // TODO: Implement hello() method.
    }
}
$z=new z();
$z->hello();