<?php

/**
 * Created by PhpStorm.
 * User: Art
 * Date: 18.09.2016
 * Time: 11:04
 */

require_once __DIR__ . '/../classes/DB.php';

class News
{

    public $id;
    public $title;
    public $text;

    public static function getAll(){
        #   $db = new db;
        #   $ret = $db->query('SELECT * FROM news', 'News');
        $ret = array('news','news2','news3','news4');
        return $ret;

    }
}