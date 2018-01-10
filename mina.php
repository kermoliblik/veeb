<?php
/*
$varv = '';
for($arv = 1; $arv <= 10; $arv++){
    if($arv % 2 == 0){
        $varv = 'red';
    }else {
        $varv = 'blue';
    }
    echo '<p style="color: '.$varv.';">'.$arv.'<br />';
}

$kord = 1;
while($kord <= 5){
    echo '<i>'.$kord.'</i>';
    $kord++;
}
*/
/*
header('Refresh: 0.2');
for ($rida = 1; $rida <= 5; $rida++) {
    $varv = "#";
    for ($kord = 1; $kord <= 6; $kord++) {
        $JT = rand(0, 15);
        $JH = dechex($JT);
        $varv = $varv.$JH;
    }
    echo '<font color="'.$varv.'">Varviline tekst</font><br />';
}
*/
/*
function ValjastaTabel ($ridadeArv, $veergudeArv){
    echo '<table border="1">';
    for ($reaNumber = 1; $reaNumber <= $ridadeArv; $reaNumber++){
        echo '<tr>';
        for ($veeruNumber = 1; $veeruNumber <= $veergudeArv; $veeruNumber++) {
            echo '<td>';
            echo rand(10, 99);
            echo '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
}
ValjastaTabel( 5,7 );
*/
/*
function arvuSumma ($number){
$summa = 0;
while ($number != 0){
$arv = $number % 10;
$summa = $summa + $arv;
$number = $number / 10;
settype($number, 'integer');

}
return $summa;
}
$number = 123;
echo 'numbri ' .$number.' arvude summa on '.arvuSumma($number).'<br />';
 */
/*
function arvuSumma ($number){
    $summa = 0;
    while ($number != 0){
        $arv = $number % 10;
        $summa = $summa + $arv;
        $number = $number / 10;
        settype($number, 'integer');

    }
    return $summa;
}
for ($kord = 1; $kord <= 5; $kord++){
    $number = rand(1,9999);
    echo 'numbri ' .$number.' arvude summa on '.arvuSumma($number).'<br />';

}
*/
/*
function otsiNumber ($number, $loendaja){
    $esinebArv = 0;
    while ($number != 0) {
        $arv = $number % 10;
            if ($arv == $loendaja) {
            $esinebArv++;
        }
        $number = $number / 10;
        settype($number, 'integer');
    }
    echo 'arv esineb  ' .$esinebArv. '<br />';
}
otsiNumber(144545454,5);
*/
/*Massiivid*/
/*
function looMassiiv($elementideArv){
    $massiiv = array();
    for ($i = 0; $i < $elementideArv; $i++){
        $juhuarv = rand(0,99);
        $massiiv[] = $juhuarv;
    }
    return $massiiv;
}
$arvudeMassiiv = looMassiiv(8);
echo '<pre>';
print_r($arvudeMassiiv);
echo '</pre>';

function vahetaMinMax(&$massiiv){
    $min = min($massiiv);
    $max = max($massiiv);
    for($i = 0; $i < count($massiiv); $i++){
        if ($massiiv[$i]== $min){
            $massiiv[$i] = $max;
        } else if ($massiiv[$i] == $max){
            $massiiv[$i] = $min;
        }
        echo $massiiv[$i];
    }

}
vahetaMinMax($looMassiiv);
*/
/*
function elementideKorrutis($massiiv){
    $korr = 0;
    for($i = 0; $i < count($massiiv); $i++){
        if($massiiv[$i] > 0 and ($i % 2) == 0){
            $tulemus = $tulemus * $massiiv[$i];
            if($korr != 0){
                echo ' * '.$massiiv[$i];
            }else {
                echo $massiiv[$i];
                $korr = 1;
            }
        }
    }
}
$massiiv = array(1,0,6,0,0,3,5);
elementideKorrutis($massiiv);
*/
/*
$opilane = array(
    'eesnimi' => 'Mart',
    'perenimi' => 'Traktor',
    'Vanus' => 15,
    'klass' => 6
);
echo '<pre>';
 print_r($opilane);
 echo '<br />';
 echo $opilane['eesnimi'];

 foreach ($opilane as $voti=>$vaartus){
     echo $voti.' - '.$vaartus.'<br />';
 }
*/
/* */

/*
function raamatuteTabel($raamatud){
    echo '<table border="1">';
    $pealkiriValjstatud = false;
    foreach ($raamatud as $raamat){
        echo '<tr>';
        if(!$pealkiriValjstatud) {
            $peakiri = array_keys($raamat);
            foreach ($peakiri as $nimetus) {
                echo '<th>';
                echo $nimetus;
                echo '</th>';
            }
            echo '</tr>';
            $pealkiriValjstatud = true;
        }
        foreach ($raamat as $element => $vaartus){
            echo '<td>';
            echo $vaartus;
            echo '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
}

function otsiRaamat($raamatud, $status){
    $leitudRaamatud = array();
    foreach ($raamatud as $raamat){
        if($raamat['status'] == $status){
            $leitudRaamatud[] = $raamat;
        }
    }
    return $leitudRaamatud;
}

otsiRaamat($raamatud,'sees');
raamatuteTabel($raamatud);

$raamatud = array(
    array(
        'title' => 'Peppa Goes To London',
        'author' => 'Ladybird',
        'print' => 'Penguin',
        'status' => 'valjas'
    ),
    array(
        'title' => 'Toto, Joonas ja püha Mimoos',
        'author' => 'Kristiina K.',
        'print' => 'Heli Kirjastus OÜ',
        'status' => 'sees'
    ),
    array(
        'title' => 'Lugusid loomadest',
        'author' => 'Ernest Thompson Seton',
        'print' => 'Ernest Thompson Seton',
        'status' => 'sees'
    ),
    array(
        'title' => 'Miljon miksi ja miljon vastust',
        'author' => '',
        'print' => 'TEA Kirjastus',
        'status' => 'sees'
    ),
    array(
        'title' => 'Teadmiste Puu: Maailma Loodus',
        'author' => 'AJ Wood, Mike Jolley',
        'print' => 'Pikoprint',
        'status' => 'valjas'
    )
);

*/
/* vormid */
/*
function valjastaVorm(){
    echo '
        <form action="'.$_SERVER['PHP_SELF'].'" method="post">
            Kasutaja: <input type="text" name="kasutaja">
            <br />
            parool: <input type="password" name="parool">
            <br />
            <input type="submit" value="saada">
        </form>
    ';
}


function vormiAndmed(){
//    $kasutaja = $_POST['kasutaja'];
//    $parool = $_POST['parool'];
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';
    if(!empty($_POST)){
        extract($_POST);
        foreach ($_POST as $voti=>$vaartus){
            if(empty($_POST[$voti])){
                echo 'Andmed peavad olema sisestatud!<br />';
                exit;
            }
        }
        echo 'Tere, '.$kasutaja.'<br />';
        echo 'Sinu parooliks on '.$parool.'<br />';
    }
}
valjastaVorm();
vormiAndmed();
*/
/*
function manguVorm(){
    $katseteArv = $_POST['katseteArv'];
    $katseteArv = isset($katseteArv) ? ++$katseteArv : 0;
    echo '
        <form action="'.$_SERVER['PHP_SELF'].'" method="post">
            Arva ära arv 1-50:<br />
            <input type="text" name="kasutajaArv">
            <input type="hidden" name="katseteArv" value="'.$katseteArv.'">
            <br />
            <input type="submit" value="Kontrolli">
        </form>
    ';
}
function kontrolliArv(){
    $serveriArv = 12;
    if(!empty($_POST)){
        $kasutajaArv = $_POST['kasutajaArv'];
        foreach ($_POST as $voti=>$vaartus){
            if(empty($_POST[$voti])){
                echo 'Arv peab olema sisestatud!<br />';
                exit;
            }
        }
        if($kasutajaArv < $serveriArv){
            echo 'Sinu arv on väiksem kui serveri oma<br />';
        }
        if($kasutajaArv > $serveriArv){
            echo 'Sinu arv on suurem kui serveri oma<br />';
        }
        if(abs($kasutajaArv - $serveriArv) <= 5){
            if($kasutajaArv == $serveriArv){
                echo 'Palju õnne! Arvasid ära!<br />';
                echo 'Arvasid ära '.++$_POST['katseteArv'].' katsega';
                exit;
            }
            echo 'Sinu arv on juba väga lähedal<br />';
        }
    }
}
manguVorm();
kontrolliArv();
*/

