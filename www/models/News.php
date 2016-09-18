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

    public static function getAll()
    {
        #   $db = new DB();
        #   $ret = $db->query('SELECT * FROM models', 'News');
        $ret = array('models', 'news2', 'news3', 'news4');
        return $ret;
    }
    public static function getOne($id){
        #   $db = new DB();
        #   return $db->queryOne('SELECT * FROM news WHERE id='. $id, 'News');
        return array(0 => 'one array');
    }
}