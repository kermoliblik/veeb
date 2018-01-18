<?php
/**
 * Created by PhpStorm.
 * User: dante
 * Date: 18-Jan-18
 * Time: 10:22
 */

class template
{
    // template object properties
    var $file = ''; // html view file name
    var $content = false; //content for HTML file
    var $vars = array(); // values for HTML view template

    // class tmplate methods
    //  Reading contents from HTML view file

    function readFile(){
        /*$fp = fopen($f,'rb');
        $this->content = fread($fp, filesize($f));
        fclose($fp);*/
        $this->content = file_get_contents($f);
    }

}