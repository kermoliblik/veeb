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

