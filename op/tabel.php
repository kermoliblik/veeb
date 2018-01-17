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
}
