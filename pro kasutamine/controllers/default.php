<?php
/**
 * Created by PhpStorm.
 * User: dante
 * Date: 31-Jan-18
 * Time: 11:11
 */
$page_id = (int)$http->get('page_id');
$sql = 'SELECT * FROM content '.'WHERE content_id='.fixDB($page_id);
$result = $db->getData($sql);

if ($result == false){
    $sql = 'SELECT content FROM content'.' WHERE is_first_page='.fixDB(1);
    $result = $db->getData($sql);
}



if ($result != false){
    $page = $result[0];
    $http->set('page_id',$page['content_id']);// setib page_id content idga
    $mainTmpl->set('content', $page['content']);// sisu v'ljastus
}


