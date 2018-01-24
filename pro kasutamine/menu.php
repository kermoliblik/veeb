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
// loome üks menüü element nimega esimene
$itemTmpl->set('name', 'esimene');
// lisame antud element menüüsse
$menuItem = $itemTmpl->parse(); // string, mis sisaldab ühe nimekirja elemendi lingiga
$menuTmpl->add('menu_items', $menuItem); // nüüd olemas paar 'menu_items'=>'<li>...</li>
// loome veel üks menüü element nimega teine
$itemTmpl->set('name', 'teine');
// lisame antud element menüüsse
$menuItem = $itemTmpl->parse(); // string, mis sisaldab ühe nimekirja elemendi lingiga
$menuTmpl->add('menu_items', $menuItem); // nüüd olemas paar 'menu_items'=>'<li>...</li>
// ehitame valmis menüü
$menu = $menuTmpl->parse();
// lisame valmis menüü lehele
$mainTmpl->set('menu', $menu);