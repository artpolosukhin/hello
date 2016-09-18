<?php

/**
 * Created by PhpStorm.
 * User: Art
 * Date: 18.09.2016
 * Time: 11:04
 */

require_once __DIR__ . '/../classes/DB.php';

class News extends AbstractModel
{

    public $id;
    public $title;
    public $text;
    protected static $table = 'news';
    protected static $class = 'news';



}