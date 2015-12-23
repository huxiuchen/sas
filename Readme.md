author : hufeng<br>
stime : 2015-12-15<br>
version : 1.0<br>
简单高效php api server框架SasPHP  全拼 swoole api server<br>
基于swoole扩展，composer开源的资源，组装的一个php api server<br>
框架目录结构基于PSR-0规范。<br>
简单易用，效率高，嗷嗷的，呵呵。<br>
涉及相关知识点，请自行脑补：<br>
    1 命名空间<br>
    2 类自动加载<br>
    3 swoole<br>
    4 composer包管理工具<br>

使用说明：<br>
    1 安装依赖  composer install<br>
    2 启动服务   php index.php<br>
    3 浏览器访问 http://ip:端口/controller/action?p1=v1&p2=v2<br>

ab压测：<br>
    通过使用apache bench工具进行压力测试，在 单核 + 1G内存的机器上，可以达到近1万QPS。性能几乎接近与Nginx的静态文件处理。<br>
    ab -c 200 -n 200000 -k http://127.0.0.1:9502/index/index<br>
    Concurrency Level:      200<br>
    Time taken for tests:   16.349 seconds<br>
    Complete requests:      200000<br>
    Failed requests:        0<br>
    Keep-Alive requests:    200000<br>
    Total transferred:      35200000 bytes<br>
    HTML transferred:       4600000 bytes<br>
    Requests per second:    12232.97 [#/sec] (mean)<br>
    Time per request:       16.349 [ms] (mean)<br>
    Time per request:       0.082 [ms] (mean, across all concurrent requests)<br>
    Transfer rate:          2102.54 [Kbytes/sec] received<br>


迭代计划ing：<br>
    1 mysql连接池<br>
    2 mysql异步非阻塞<br>
    3 ORM<br>
    4 缓存<br>
    5 常用功能封装<br>
    6 日志<br>
