<?php
/**
 * User: Hufeng
 * Date: 2015/12/15 17:36
 * Desc: 
 */
namespace SasPHP;

class SasPHP{
    static public function start() {
        // 注册AUTOLOAD方法
        spl_autoload_register('SasPHP\SasPHP::autoload');
    }

    static public function autoload($class) {
        echo $class;exit;
        require BASEDIR.'/Controller/'.str_replace('\\', '/', $class).'.php';
    }
}

