<?php
/**
 * Created by PhpStorm.
 * User: dante
 * Date: 11-Jan-18
 * Time: 09:00
 */

function sisestaAndmed(){
    echo '<form action="'.$_SERVER['PHP_SELF'].'" method="post">';
    echo 'Päev: <input type="text" name="paev"><br />';
    echo 'Kuu: <input type="text" name="kuu"><br />';
    echo '<input type="submit" value="Arvuta!">';
    echo '</form>';
}
function aastaKontroll($paev, $kuu){
    $hetkeKuu = date('n');
    $hetkePaev = date('d');
    if($paev < $hetkePaev and $kuu == $hetkeKuu){
        $aasta = date('Y')+1;
    } else{
        $aasta = date('Y');
    }
    return $aasta;
}
function kauaOotan($paev, $kuu, $aasta){
    $aegHetkel = time();
    $synniAeg = mktime($kuu, $paev, $aasta);
    $tulemus = array();
    $vaheSekundites = $synniAeg - $aegHetkel;
    $sekundid = $vaheSekundites % 60;
    $tulemus['sekundid'] = $sekundid;
    $vaheMinutites = $vaheSekundites / 60;
    $minutid = $vaheMinutites % 60;
    $tulemus['minutid'] = $minutid;
    $vaheTundides = $vaheMinutites / 60;
    $tunnid = $vaheTundides % 24;
    $tulemus['tunnid'] = $tunnid;
    $vahePaevades = $vaheTundides / 24;
    $paevad = $vahePaevades % 30;
    $tulemus['paevad'] = $paevad;
    $kuud = $vahePaevades / 30;
    settype($kuud, 'int');
    $tulemus['kuud'] = $kuud;
    return $tulemus;
}
function valjastaTulemus($andmed){
    echo 'Sünnipäevani on: <br />';
    foreach ($andmed as $element => $vaartus){
        if($vaartus != 0){
            echo $vaartus.' '.$element.'<br />';
        }
    }
}
sisestaAndmed();
$tulemus = kauaOotan($_POST['paev'], $_POST['kuu'], aastaKontroll($_POST['paev'], $_POST['kuu']));
valjastaTulemus($tulemus);