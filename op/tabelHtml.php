<?php
/**
 * Created by PhpStorm.
 * User: dante
 * Date: 17-Jan-18
 * Time: 12:36
 */
require_once "tabel.php";

class html extends tabel
{
    // klassi omadus
    var $taustaVarv = "";

    public function __construct($pealkirjad, $varv = "")
    {
        parent::__construct($pealkirjad);
        $this->maaraVarv($varv);
    }

    function maaraVarv($varv){
        $this->taustaVarv=$varv;
    }


    function prindiTabel()
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
                foreach ($reaElemendid as $reaElement) {
                    echo "<td>".$reaElement."</td>";
                }
                echo "</tr>";

            }
            echo "</table>";
        }
    }

}