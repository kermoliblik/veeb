<?php
/**
 * Created by PhpStorm.
 * User: dante
 * Date: 24-Jan-18
 * Time: 08:39
 */

class http
{
    var $vars = array(); //http andmete massiiv
    var $server = array();

    /**
     * http constructor.
     */
    public function __construct()
    {
        $this->init();
    }
    //serveri andmete massiivid

    /* http constructor */
    function init(){
        $this->vars = array_merge($_get, $_post);
        this->server = $_server;
    }

}