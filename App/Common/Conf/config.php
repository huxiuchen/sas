<?php
/**
 * User: Hufeng
 * Date: 2015/12/15 17:45
 * Desc: 配置文件
 */
return array(
    'FILE_CACHE_EXPIRE' => 86400,

    'DB_MASTER' => array(
        'db_type' => 'mysql', // 数据库类型
        'db_host' => 'localhost', // 服务器地址
        'db_name' => 'book', // 数据库名
        'db_user' => 'root', // 用户名
        'db_pwd' => '', // 密码
        'db_port' => 3306, // 端口
        'db_charset'=> 'utf8', // 字符集
    )
);