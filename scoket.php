<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017\11\24 0024
 * Time: 14:20
 */
class scoket{
    function index(){
        $host="127.0.0.1";
        $port=8181;
        set_time_limit(0);
        //创建socket
        $soc=socket_create(AF_INET,SOCK_STREAM,0) or die("链接失败");

        //绑定socket到指定端口和地址
        $result=socket_bind($soc,$host,$port) or die("失败");

        //开始监听
        socket_listen($soc,10) or die("监听失败");

        //接收连接请求并调用另一个子socket处理客户端---服务器之间的信息
        $spawn=socket_accept($soc) or die('处理失败');

        //读取客户端输入
        $input=socket_read($spawn,1024) or die("读取失败");

        $input=trim($input);
        $output=strrev($input).'\n';
        socket_write($spawn,$output,strlen($output)) or die("写失败");

        socket_close($soc);
        socket_close($spawn);

        socket_set_block($soc);
        socket_write($soc,"nihao");
        socket_read($soc,10);
        pfsockopen('127.0.0.1','8181');
        socket_set_option($soc);
    }


}