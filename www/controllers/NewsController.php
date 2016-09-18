<?php

/**
 * Created by PhpStorm.
 * User: Art
 * Date: 18.09.2016
 * Time: 12:49
 */

require __DIR__ .'/../models/News.php';


class NewsController
{

    public function actionAll(){
        $items = News::getAll();
        include __DIR__.'/../views/news/all.php';
    }

    public function actionOne(){

        $id = $_GET['id'];
        $item = News::getOne($id);
        include __DIR__.'/../views/news/one.php';
    }

}