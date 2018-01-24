<?php
/**
 * Created by PhpStorm.
 * User: dante
 * Date: 24-Jan-18
 * Time: 09:15
 */

class linkobject extends http
{
    //klassi muutujad
    var $baseLink = false; //pohi link
    var $protocol = 'http://'; // HTTP protocol
    var $eq = '='; //see on vordusmark
    var $delim = '&amp'; // &

    /**
     * linkobject constructor.
     */
    public function __construct(){
        parent::__construct(); //ei kirjuta yle http constructorit
        $this->baseLink = $this->protocol.HTTP_HOST.SCRIPT_NAME;
    }

    // moodustame paarid kujul nimi=väärtus
    // ja ühendame paarid omavahel kujul:
    // nimi1=vaartus1&nimi2=vaartus2 jne
    function addToLink(&$link, $name, $value){
        if($link != ''){
            $link = $link.$this->delim;
        }
        $link = $link.fixUrl($name).$this->eq.fixUrl($value);
    }
    // moodustame valmislink kasutades põhilingi ja
    // $this->addToLink funktisiooni abil valmistatud paarid
    // $pairs = array('control'=>'login', 'user'=>'test');
    // getLink($pairs);
    function getLink($add = array()){
        $link = '';
        foreach ($add as $name=>$value){
            $this->addToLink($link, $name, $value);
        }
        if($link != ''){
            $this->baseLink = $this->baseLink.'?'.$link;
        }
        return $this->baseLink;
    }


}