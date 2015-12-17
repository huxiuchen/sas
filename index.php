<?php
error_reporting(0);
//启动http server
$http = new swoole_http_server("0.0.0.0", 9502);

$http->set(array(
    'worker_num' => 5,   //工作进程数量
    'daemonize' => true, //是否作为守护进程
));

$http->on('request', function ($request, $response) {
    // 阻止google浏览器的ico请求
    if($request->server['request_uri'] == '/favicon.ico'){
        $response->end();exit;}

    define('BASEDIR','./App');
    //引入composer 自动加载文件
    require 'vendor/autoload.php';

    //引入SasPHP.php 核心文件
    require './SasPHP/SasPHP.php';
    SasPHP\SasPHP::start();
});

$http->start();