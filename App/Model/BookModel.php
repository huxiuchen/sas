<?php
/**
 * User: Hufeng
 * Date: 2015/12/28 10:48
 * Desc: 图书model
 */
namespace App\Model;
use SasPHP\Model;

class BookModel extends Model{

    function findData(){
        $query = 'SELECT * FROM dc_book LIMIT 2';
        $results = $this->dbConn->fetchRowMany($query);
        return json_encode($results);
    }
}
