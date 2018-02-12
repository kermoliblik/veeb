<?php
/**
 * Created by PhpStorm.
 * User: dante
 * Date: 24-Jan-18
 * Time: 08:35
 */
// loome menüü ehitamiseks vajalikud objektid
$menuTmpl = new template('menu.menu'); // menüü mall
$itemTmpl = new template('menu.item'); // menüü elemendi mall
//koostame men[[ ja sisu loomis p2ringu
$sql = 'SELECT content_id, content, title'.' FROM content WHERE parent_id='.fixDB(0).' AND show_in_menu='.fixDB(1);
$result = $db->getData($sql);

// kui andmed on DB olemas siis loome menu

if ($result != false){
    foreach ($result as $page){
        $itemTmpl->set('name', $page['title']);
        $link = $http->getLink(array('page_id'=>$page['content_id']));
        $itemTmpl->set('link', $link);
        $menuTmpl->add('menu_items', $itemTmpl->parse());
    }
}
//sisse logimine
define('USER_ID', 0);
//n'itan antud kasutajale logi sisse menyyd
$itemTmpl->set('name', 'Logi Sisse');
$link = $http->getLink(array('control'=>'login'));
$itemTmpl->set('link', $link);
$menuTmpl->add('menu_items', $itemTmpl->parse());

$mainTmpl->set('menu', $menuTmpl->parse());