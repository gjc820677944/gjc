<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017\11\21 0021
 * Time: 14:15
 */

//try{
//$a=5/0;
//echo $a.PHP_EOL;
//}catch (exception $e){
//    $e->getMessage();
//    $a-1;
//}catch (error $r){
//    $r->getFile();
//}
//echo $a;

//function error()
//{
//    echo "嗨";
//}
//
//set_error_handler(error());

class a{
    public function hello(){
        echo 1;
    }
}

class b{
    public function hello(){
        var_dump(mt_rand(11111,999999));
    }
}

class gc{
    public static $ob='';
    public $sj;
    protected function __construct()
    {
        $this->sj=mt_rand(11111,999999);
        echo $this->sj;
    }

     static function object(){
        if (self::$ob==''){
            self::$ob=new self;
        }
    return self::$ob;
    }

    private function __clone()
    {
        // TODO: Implement __clone() method.
    }
}




$s=gc::object();
$s1=gc::object();

var_dump($s1);
var_dump($s);