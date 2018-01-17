<?php
/**
 * Created by PhpStorm.
 * User: dante
 * Date: 11-Jan-18
 * Time: 10:04
 */
function vorm(){
    echo '
        <form action="'.$_SERVER['PHP_SELF'].'" method="post">
        Eesnimi: <input type="text" name="eesnimi"><br />
        Perenimi: <input type="text" name="perenimi"><br />
        Sünnikuupäev: <br />
        Päev: <input type="text" name="paev"><br />
        Kuu: <input type="text" name="kuu"><br />
        Aasta: <input type="text" name="aasta"><br />
        <input type="submit" value="Saada">
        </form>
    ';
}
function andmeteKontroll()
{
    $kontroll = false;
    if (!empty($_POST)) {
        foreach ($_POST as $voti => $vaartus) {
            if (empty($_POST[$voti])) {
                echo 'Andmed peavad olema sisestatud!<br />';
                exit;
            }
        }
        $kontroll =  true;
    }
    return $kontroll;
}
function ajaTootlus($paev, $kuu, $aasta){
    if(andmeteKontroll()){
        $aegUnixTimestamp = mktime(0, 0, 0, $kuu, $paev, $aasta);
        $aeg = date('Y-m-d', $aegUnixTimestamp);
    }
    return $aeg;
}
vorm();
if(andmeteKontroll()){
    echo $_POST['eesnimi'].' '.$_POST['perenimi'].
        ', sinu sünnikuupäev on '.ajaTootlus($_POST['paev'], $_POST['kuu'], $_POST['aasta']);
}