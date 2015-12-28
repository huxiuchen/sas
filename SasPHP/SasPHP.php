<?php
/**
 * User: Hufeng
 * Date: 2015/12/15 17:36
 * Desc: 核心文件
 */
namespace SasPHP;

class SasPHP{
    static public function start() {
        // 注册AUTOLOAD方法
        spl_autoload_register('SasPHP\SasPHP::autoload');
        register_shutdown_function('SasPHP\SasPHP::handleFatal');
        return self::dispatch();
    }

    static public function handleFatal(){
        global $globalRes;
        $errorMsg = error_get_last();
        $globalRes->end($errorMsg['message']);
    }

    static public function autoload($class) {
        require_once BASEDIR.'/'.str_replace('\\', '/', $class).'.php';
    }

    static public function dispatch(){
        $uri = $_SERVER['request_uri'];
        $index = stripos($uri,'?');
        if($index){
            $uri = substr($uri,0,$index);
        }
        list($c, $v) = explode('/', trim($uri, '/'));
        $c = ucwords($c);
        return self::exec($c,$v);
    }

    static public function exec($c,$v){
        $class = '\\App\\Controller\\'.$c;
        $obj = new $class();
        return $obj->$v();
    }
}

