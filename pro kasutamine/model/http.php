<?php
/**
 * Created by PhpStorm.
 * User: dante
 * Date: 24-Jan-18
 * Time: 08:39
 */

class http
{
    // klassi muutujad
    var $vars = array(); // andmed mis jõuavad HTTP kaudu
    var $server = array(); // serveriga seotud andmed
    /**
     * http constructor.
     */
    public function __construct(){
        $this->init();
        $this->initConst();
    }
    // klassi muutujate väärtustega täitmine
    function init(){
        // nüüd on olemas kõik andmed, mis serverile
        // jõudunud
        $this->vars = array_merge($_GET, $_POST);
        // serveri andmed
        $this->server = $_SERVER;
    }
    // vajalike konstandite defineerimine
    function initConst(){
        $constNames = array('HTTP_HOST', 'SCRIPT_NAME');
        foreach ($constNames as $constName){
            if(!defined($constName) and isset($this->server[$constName])){
                define($constName, $this->server[$constName]);
            }
        }
    }

    //funktsioon mis uurib selle klassi vars massiivi, ja kui on olemas element nimega $name ss anna antud elemendi vaartuse
    function get($name){
        if (isset($this->vars[$name])){
            return $this->vars[$name];
        }else{
            return false;
        }
    }
    // funktsioon mis v]imaldab maarata $this->vars[$name] elemendi
    //ka kindla v''rtuse $value
    function set($name, $value){
        $this->vars[$name] = $value;
    }
}