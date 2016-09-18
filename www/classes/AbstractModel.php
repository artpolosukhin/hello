<?php

/**
 * Created by PhpStorm.
 * User: Art
 * Date: 18.09.2016
 * Time: 14:32
 */
abstract class AbstractModel
{

    protected static $table;
    protected static $class;
    public static function getAll()
    {
        #   $db = new DB();
        #   $ret = $db->query('SELECT * FROM static::table', 'static::$class');
        $ret = array('models', 'news2', 'news3', 'news4');
        return $ret;
    }
    public static function getOne($id){
        #   $db = new DB();
        #   return $db->queryOne('SELECT * FROM 'static::$table' WHERE id='. $id, static::$class);
        return array(0 => 'one array');
    }
}