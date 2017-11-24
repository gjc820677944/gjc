<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017\11\22 0022
 * Time: 10:06
 */
//工厂模式

interface DB{
    //链接数据库
    function content();
    //执行sql
    function query();
}

class mysql_DB implements DB{
    function content()
    {
        echo "链接成功";
        // TODO: Implement content() method.
    }
    function query()
    {
        echo "执行成功";
        // TODO: Implement query() method.
    }
}

class oracle_DB implements DB{
    function content()
    {
        echo "链接成功";
        // TODO: Implement content() method.
    }

    function query()
    {
        echo "执行成功";
        // TODO: Implement query() method.
    }
}

//
class gc{
   static function gc1($type){
        return new $type;
   }
}

$a=gc::gc1('oracle_DB');
var_dump($a);