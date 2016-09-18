<?php
/**
 * Created by PhpStorm.
 * User: Art
 * Date: 18.09.2016
 * Time: 10:33
 */

require __DIR__ .'/news/News.php';

$items = News::getAll();

require __DIR__.'/views/index.php';


