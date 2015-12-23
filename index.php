<?php
//启动http server
$http = new swoole_http_server("0.0.0.0", 9502);

$http->set(array(
    'worker_num' => 5,   //工作进程数量
    'daemonize' => true //是否作为守护进程
));

$globalRes;
define('BASEDIR',__DIR__);
require 'vendor/autoload.php';
require './SasPHP/SasPHP.php';

$http->on('request', function ($request, $response) {
    // 阻止google浏览器的ico请求
    if($request->server['request_uri'] == '/favicon.ico'){
        $response->end();exit;}

    global $globalRes;
    $globalRes = $response;
    $_SERVER = $request->server;
    $res = SasPHP\SasPHP::start();
    $response->end($res);
});

$http->start();