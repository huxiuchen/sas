<?php
/**
 * User: Hufeng
 * Date: 2015/12/28 11:35
 * Desc: 数据Model基类
 */
namespace SasPHP;

class Model{
    public $dbConn;
    public function __construct(){
        if($this->dbConn){
            echo "hufeng\n";
           return $this->dbConn;
        }else{
            $confObj = new Config(BASEDIR.'/App/Common/Conf');
            $conf = $confObj->offsetGet('config');
            $config = $conf['DB_MASTER'];

            $this->dbConn = new \Simplon\Mysql\Mysql($config['server'],$config['username'],$config['password'],$config['database']);
            return $this->dbConn;
        }
    }
}
