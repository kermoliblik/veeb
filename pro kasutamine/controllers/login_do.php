<?php
/**
 * Created by PhpStorm.
 * User: dante
 * Date: 12-Feb-18
 * Time: 11:22
 */
//k[sime vormi poolt tulnud andmed
$username = $http->get('username');
$password = $http->get('password');
// koostame sql päringu  kontrollimaks useri olemasolust

$sql = 'SELECT * FROM user WHERE username='.fixDB($username).' AND password='.fixDB(md5($password));
$result = $db->getData($sql);
if($result != false){
    //logime kasutaja sisse ja avama sessiooni

}else{
    //probleem sisse logimisega ja suuname tagasi sisselogimis vormile
    $link = $http->getLink(array('control'=>'login'));
    $http->redirect($link);
}