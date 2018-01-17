<?php
/**
 * Created by PhpStorm.
 * User: dante
 * Date: 17-Jan-18
 * Time: 10:23
 */

class tabel
{
    // klassi muutujad
    var $pealkirjad = array();
    var $tabeliSisu = array();
    var $veergudeArv;
    /**
     * tabel constructor.
     * @param array $pealkirjad
     */
    public function __construct(array $pealkirjad){
        $this->pealkirjad = $pealkirjad;
        $this->veergudeArv = count($pealkirjad);
    }
    function lisaRida($rida){
        if(count($rida) != $this->veergudeArv){
            return false;
        }
        array_push($this->tabeliSisu, $rida);
        return true;
    }
    function lisaRidaPealkirjadega($ridaPealkirjadega){
        $jarjestatudRida = array();
        foreach ($this -> pealkirjad as $pealkiri){
            $jarjestatudRida[] = $ridaPealkirjadega[$pealkiri];
        }
        array_push($this->tabeliSisu, $jarjestatudRida);
        return true;
    }
    function prindiTabel(){
        echo '<pre>';
        foreach ($this->pealkirjad as $pealkiri){
            echo '<b>'.$pealkiri.'</b>'.' ';
        }
        echo "\n";
        foreach ($this->tabeliSisu as $reaElemendid){
            foreach ($reaElemendid as $reaElement){
                echo $reaElement.' ';
            }
            echo "\n";
        }
        echo '</pre>';
    }

    function prindiTabelV2()
    {
        if($this->taustaVarv == "") {
            parent::prindiTabel();
        } else {
            echo "<table border=1>";
            echo "<tr bgcolor='".$this->taustaVarv."'>";
            foreach($this->pealkirjad as $pealkiri) {
                echo "<td><b>" . $pealkiri . "</b></td>", " ";
            }
            echo "</tr>";
            foreach ($this->tabeliSisu as $reaElemendid) {
                echo "<tr bgcolor='".$this->taustaVarv."'>";
                foreach ($reaelemendid as $reaElement) {
                    echo "<td>".$reaElement."</td>";
                }
                echo "</tr>";

            }
            echo "</table>";
        }
    }

}
