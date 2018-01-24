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

    //moodustame paari kujul nimi=vaartus
    function addToLink(&$link, $name, $value){
        if($link != ''){
            $link = $link.$this->delim;
        }
        $link = $link.$name.$this->eq.$value;
    }



}