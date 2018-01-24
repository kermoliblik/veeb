<?php
/**
 * Created by PhpStorm.
 * User: dante
 * Date: 18-Jan-18
 * Time: 09:35
 */
//config

//loome vajalikud abikonstantid
define('MODEL_DIR', 'model/');
define('VIEWS_DIR', 'views/');
define('CONTROL_DIR', 'controllers/');

require_once MODEL_DIR.'template.php';
require_once MODEL_DIR.'http.php';
//loome vajalikud objektid, mis on pidevalt tool
$http = new http();