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

    // HTML view file check
    function loadFile(){
        // checking for HTML views excistence
        if (!is_dir(VIEWS_DIR)){
            echo 'There is no directory called '.VIEWS_DIR.' please check directory!<br />';
            exit;
        }
        // views/test.html
        $f = $this->file; // Replaces $this->file with $f
        if (file_exists($f) and is_file($f) and is_readable($f)){
            $this->readFile($f);
        }
        // test.html
        $f = VIEWS_DIR.$this->file;
        if (file_exists($f) and is_file($f) and is_readable($f)){
            $this->readFile($f);
        }
        // if file is given as test
        $f =VIEWS_DIR.$this->file.'.html';
        if (file_exists($f) and is_file($f) and is_readable($f)){
            $this->readFile($f);
        }
        //if file is given as directory.test
        $f = VIEWS_DIR.str_replace('.','/',$this->file).'.html';
        if (file_exists($f) and is_file($f) and is_readable($f)){
            $this->readFile($f);
        }
        if ($this->content === false){
            echo 'Unable to read content from file '.$this->file.'<br />';
        }
    }

}