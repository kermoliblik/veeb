<?php
/**
 * Created by PhpStorm.
 * User: dante
 * Date: 15-Jan-18
 * Time: 14:27
 */

require_once 'tekst.php';
// loome teksti objekti
// määrame kindlas sõnad tekstis
$minuTekst = new tekst('Tere Maailm!');
// väljastame objekti sisu test kujul
echo '<pre>';
print_r($minuTekst);
echo '</pre>';
// väljastame objekti korralikult
$minuTekst->prindiTekst();