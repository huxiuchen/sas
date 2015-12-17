author : hufeng
stime : 2015-12-15
version : 1.0
简单高效php api server框架SasPHP  全拼 swoole api server
基于swoole扩展，composer开源的资源，组装的一个php api server
框架目录结构基于PSR-0规范。
简单易用，效率高，嗷嗷的，呵呵。

涉及相关知识点，请自行脑补：
    1 命名空间
    2 类自动加载
    3 swoole
    4 composer包管理工具

使用说明：
    1 安装依赖  composer install
    2 启动服务   php index.php
    3 浏览器访问 http://ip:端口/controller/action?p1=v1&p2=v2

ab压测：
    待测试...

迭代计划ing：
    1 mysql连接池
    2 mysql异步非阻塞
    3 ORM
    4 缓存
    5 常用功能封装
    6 日志