<?php
/**
 * Created by PhpStorm.
 * User: dante
 * Date: 31-Jan-18
 * Time: 10:49
 */
$control = $http->get('control'); // kontrolleri faili nimi
$file = CONTROL_DIR.$control.'.php'; // kontrolleri faili tee
if(file_exists($file) and is_file($file) and is_readable($file)){
    require_once $file;
} else{
    //kui ei ole kontrolleri faili v]i ei ole midagi valitud
}