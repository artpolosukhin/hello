<?php
/**
 * Created by PhpStorm.
 * User: Art
 * Date: 18.09.2016
 * Time: 14:15
 */

function __autoload($class){
    if(file_exists(__DIR__ .    '/controllers/' . $class . '.php')){
        require __DIR__ .    '/controllers/' . $class . '.php';
    }elseif (file_exists(__DIR__ .    '/models/' . $class . '.php'))
    {require __DIR__ .    '/models/' . $class . '.php';}
    elseif (file_exists(__DIR__ .    '/models/' . $class . '.php'))
    {require __DIR__ .    '/views/' . $class . '.php';}
}