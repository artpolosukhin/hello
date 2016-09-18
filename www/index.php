<?php
/**
 * Created by PhpStorm.
 * User: Art
 * Date: 18.09.2016
 * Time: 10:33
 */

require_once __DIR__ . '/autoload.php';

$ctrl = isset($_GET['ctrl']) ? $_GET['ctrl'] : 'News';
$act = isset($_GET['act']) ? $_GET['act'] : 'All    ';
require_once __DIR__.'/controllers/NewsController.php';
$controllerClassName = $ctrl . 'Controller';
$controller = new $controllerClassName;
$method = 'action' . $act;
$controller->$method();






