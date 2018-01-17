<?php
/**
 * Created by PhpStorm.
 * User: dante
 * Date: 17-Jan-18
 * Time: 10:24
 */

require_once 'tabel.php';
// loome tabeli objekti
$minuTabel = new tabel(array('a', 'b', 'c', 'd'));
// lisame read juurde
$minuTabel->lisaRida(array(1, 2, 3, 4));
$minuTabel->lisaRidaPealkirjadega(array('d'=>1, 'c'=>2, 'b'=>3, 'a'=>4));
$minuTabel->lisaRida(array(5, 6, 7, 8));
// väljastame tabeli objekti test kujul
echo '<pre>';
print_r($minuTabel);
echo '</pre>';
// v2ljastame tekst kujul
$minuTabel->prindiTabel();

require_once 'tabelHtml.php';
$minuTabel = new html(array('a', 'b', 'c', 'd'),"#ff0066");
// lisame read juurde
$minuTabel->lisaRida(array(1, 2, 3, 4));
$minuTabel->lisaRidaPealkirjadega(array('d'=>1, 'c'=>2, 'b'=>3, 'a'=>4));
$minuTabel->lisaRida(array(5, 6, 7, 8));
// väljastame tabeli objekti test kujul
echo '<pre>';
print_r($minuTabel);
echo '</pre>';
// v2ljastame tekst kujul
$minuTabel->prindiTabel();
//toimib
