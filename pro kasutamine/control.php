<?php
/**
 * Created by PhpStorm.
 * User: dante
 * Date: 31-Jan-18
 * Time: 10:49
 */
$control = $http->get('control'); // kontroller file nimi
$file = CONTROL_DIR.$control.'.php';
if (file_exists($file) and is_file($file) and is_readable($file)){
    require_once  $file;
}