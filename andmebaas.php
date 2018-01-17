<?php
/**
 * Created by PhpStorm.
 * User: dante
 * Date: 11-Jan-18
 * Time: 10:18
 */
function yhendus()
{
    $yhendus = mysqli_connect('localhost', 'kermolib_user', 'qwerty123456789', 'kermolib_foorum');

    if (!$yhendus) {
        echo 'Pole yhendust <br />';
        echo mysqli_connect_errno() . '<br />';
        echo mysqli_connect_error() . '<br />';
    } else {
        echo 'K6ik toimib 2ra higista <br />';
    }
    return $yhendus;
}
function sisesta($eesnimi, $perenimi, $synnikuupaev, $yhendus){
    $sql = 'INSERT INTO kasutaja (eesnimi, perenimi, synnikuupaev)'.'VALUES(\''.$eesnimi.'\', \''.$perenimi.'\', \''.$synnikuupaev.'\')';
    $tulemus = mysqli_query($yhendus, $sql);
    if (!$yhendus) {
        echo 'Pole yhendust <br />';
        echo mysqli_connect_errno($yhendus) . '<br />';
        echo mysqli_connect_error($yhendus) . '<br />';
    } else {
        echo 'K6ik toimib 2ra higista <br />';
    }
}

include 'date.php';

$yhendus = yhendus();
$eesnimi = $_POST['eesnimi'];
$perenimi = $_POST['perenimi'];
$synnikuupaev = ajaTootlus($_POST['paev'], $_POST['kuu'], $_POST['aasta']);
sisesta($eesnimi, $perenimi, $synnikuupaev, $yhendus);