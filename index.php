<?php
//启动http server
$http = new swoole_http_server("0.0.0.0", 9502);

$http->set(array(
    'worker_num' => 5,   //工作进程数量
    'daemonize' => true, //是否作为守护进程
));

$globalRes;
$http->on('request', function ($request, $response) {
    // 阻止google浏览器的ico请求
    if($request->server['request_uri'] == '/favicon.ico'){
        $response->end();exit;}

    global $globalRes;
    $globalRes = $response;
    $_SERVER = $request->server;
    define('BASEDIR','./');

    //引入composer 自动加载文件
    require 'vendor/autoload.php';

    //引入SasPHP.php 核心文件
    require './SasPHP/SasPHP.php';
    $res = SasPHP\SasPHP::start();
    $response->end($res);
});

$http->start();