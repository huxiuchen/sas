<?php
/**
 * User: Hufeng
 * Date: 2015/12/28 10:47
 * Desc: 
 */

namespace App\Controller;
use App\Model\BookModel;

class SqlTest {

    public function index(){
        $bookModel = new BookModel();
        return $bookModel->findData();
    }
}
