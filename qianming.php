<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017\11\21 0021
 * Time: 9:31
 */
interface ren{
    public function working();

}

class teacher implements ren{
    public function working()
    {
        // TODO: Implement working() method.
        echo "我是教师的\r\n";
    }

}

class student implements ren{
    public $a='321';
    public function working()
    {
        // TODO: Implement working() method.
        echo "我是学生\r\n";
    }

     function a(){
        echo 1;
    }
}

function doprint(ren $i){
    $i->working();
}
$a=new teacher();
$b=new student();

$b->a();
//var_dump(get_object_vars($b));exit;

//$reflext=new ReflectionClass($b);
//$props=$reflext->getProperties();
//foreach ($props as $prop){
//    var_dump($prop->getName()."\n");
//}

//$m=$reflext->getMethods();
//foreach ($m as $prop){
//    var_dump($prop->getName()."\n");
//}