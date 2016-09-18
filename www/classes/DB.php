<?php

/**
 * Created by PhpStorm.
 * User: Art
 * Date: 18.09.2016
 * Time: 10:27
 */
class db
{

    public function __construct()
    {
        #   $dbc = mysqli_connect('localhost','root','','testdb');
        #   mysqli_set_charset($dbc, 'utf-8');
        #   return $dbc;
    }
    public function query($sql, $class='stdClass')
    {

        #   $res = mysqli_query($sql);
        #   if(!$res == 0){return false;}
        #   $ret = [];
        #   while ($row = mysqli_fetch_object($res , $class)) {$ret[] = $row;}
        #   return $ret;
        return $sql;
    }
}