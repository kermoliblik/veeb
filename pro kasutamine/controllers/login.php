<?php
/**
 * Created by PhpStorm.
 * User: dante
 * Date: 12-Feb-18
 * Time: 11:08
 */
$loginForm = new template('login');
//kasutaja andmete t;;tlus faili link
$link = $http->getLink(array('control'=>'login_do'));
//lisame vajalikud andmed
$loginForm->set('link', $link);
$loginForm->set('kasutaja', 'Sisesta kasutajanimi');
$loginForm->set('parool', 'Sisesta parool');
$loginForm->set('nupp', 'Logi sisse!');
$mainTmpl->set('content', $loginForm->parse());