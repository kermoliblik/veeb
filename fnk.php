<?php
/**
 * Created by PhpStorm.
 * User: dante
 * Date: 10-Jan-18
 * Time: 15:02
 */

function vorm()
{

    echo '
        <form action="salvestus.php" method="post">
            Eesnimi:<br />
            <input type="text" name="eesnimi">
            Perenimi:<br />
            <input type="text" name="perenimi">
            <br />
            <input type="submit" value="salvesta">
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
                echo '<a href="sisend.php">Sisesta andmed</a><br />';
                exit;
            }
        }
        $kontroll =  true;
    }
    return $kontroll;
}
function salvestaFaili($failinimi)
{
    if (andmeteKontroll()) {
        if (file_exists($failinimi) and is_file($failinimi) and is_writable($failinimi)) {
            echo 'Salvestus on võimalik<br />';
            $fail = fopen($failinimi, 'a');
            foreach ($_POST as $vaartus){
                fwrite($fail, $vaartus." ");
            }
            fwrite($fail, "\n");
            echo 'Andmed on salvestatud<br />';
            echo '<a href="valjund.php">Vaata faili sisu</a>';
            fclose($fail);
        } else {
            echo 'Probleem ' . $failinimi . ' failiga<br />';
        }
    }
}

function loeFailist($failinimi)
{
    if (file_exists($failinimi) and is_file($failinimi) and is_readable($failinimi)) {
        echo 'Loeme andmed failist<br />';
        $fail = fopen($failinimi, 'r');
        while(!feof($fail)){
            $rida = fgets($fail);
            echo $rida.'<br />';
        }
        echo '<a href="sisend.php">Lisa andmed juurde</a>';
        fclose($fail);
    } else {
        echo 'Probleem ' . $failinimi . ' failiga<br />';
    }
}