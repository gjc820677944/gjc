<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017\11\22 0022
 * Time: 10:47
 */
class cs{
    function eat(){
        echo "吃";
    }
    function drink(){
        echo "喝";
    }
}

interface mingl{
    function ml();
}

class eat_fwy implements mingl{
    private $look;
    //接受命令
    function __construct(cs $cs)
    {
        $this->look=$cs;
    }

    //发送命令
    function ml()
    {
        $this->look->eat();//炒盘番茄炒蛋
        // TODO: Implement ml() method.
    }
}

class drink_fwy extends eat_fwy implements mingl{
    private $look;
    //绑定命令接受者
    function __construct(cs $cs)
    {
        $this->look=$cs;
    }

    function ml()
    {
        $this->look->drink();//来瓶雪碧
        // TODO: Implement ml() method.
    }
}

