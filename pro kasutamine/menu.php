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
$itemTmpl->set('name', 'avaleht');
$link = $http->getLink();
$itemTmpl->set('link', $link);
$menuTmpl->add('menu_items', $itemTmpl->parse());
$itemTmpl->set('name', 'esimene');
$link = $http->getLink(array('control'=>'esimene'));
$itemTmpl->set('link', $link);
$menuItem = $itemTmpl->parse(); // string, mis sisaldab ühe nimekirja elemendi lingiga
$menuTmpl->add('menu_items', $menuItem); // nüüd olemas paar 'menu_items'=>'<li>...</li>
$itemTmpl->set('name', 'teine');
$link = $http->getLink(array('control'=>'teine'));
$itemTmpl->set('link', $link);
$menuItem = $itemTmpl->parse(); // string, mis sisaldab ühe nimekirja elemendi lingiga
$menuTmpl->add('menu_items', $menuItem); // nüüd olemas paar 'menu_items'=>'<li>...</li>

// ehitame valmis menüü
$menu = $menuTmpl->parse();
// lisame valmis menüü lehele
$mainTmpl->set('menu', $menu);