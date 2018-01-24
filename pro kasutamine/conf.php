<?php
/**
 * Created by PhpStorm.
 * User: dante
 * Date: 18-Jan-18
 * Time: 09:35
 */
//config

// konfiguratsiooni fail
// loome vajalikud abikonstandid
define('MODEL_DIR', 'model/');
define('VIEWS_DIR', 'views/');
define('CONTROL_DIR', 'controllers/');
define('LIB_DIR', '/lib');
//nouame abifunktsioonide olemasolu
require_once LIB_DIR.'utils.php';
// nõuame vajalikke failide olemasolu
require_once MODEL_DIR.'template.php'; // html vaade failide töötlus
require_once MODEL_DIR.'http.php'; // HTTP töötlus klass
require_once MODEL_DIR.'linkobject.php';//lingi tootlus klass
// loome vajalikud objektid, mis on pidevalt tööl
$http = new linkobject();