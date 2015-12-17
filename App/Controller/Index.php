<?php
/**
 * User: Hufeng
 * Date: 2015/12/15 17:51
 * Desc: 首页
 */
namespace App\Controller;

class Index {

    public function index(){
        $arr['error'] = 0;
        $arr['msg'] = 'nmb';
        jecho($arr);
    }

    public function category(){
        $arr['error'] = 1;
        $arr['msg'] = 'nmb';
        jecho($arr);
    }
}
