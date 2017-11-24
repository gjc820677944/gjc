<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017\11\20 0020
 * Time: 19:44
 */
class student{
    public $name='';
    public $sex='';

    public function say(){
        echo "我叫".$this->name."我是 ".$this->sex."<br>";
    }
}

class teacher{
    public $name='';
    public $vocation='';

    public function say(){
        echo "我叫".$this->name."我是 ".$this->sex."老师";
    }
}

$s=new student();
$s->name="张三";
$s->sex="男";
$s->say();

$ss=serialize($s);
//echo $ss;exit;
$t=new teacher();
$t->name=$ss;
$t->sex="语文";
//$t->say();
$tt=serialize($t);
echo $tt;