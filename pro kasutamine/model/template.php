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

    /**
     * template constructor.
     * @param string $file
     */
    public function __construct($file)
    {
        $this->file = $file;
        $this->loadFile();
    }



    // class tmplate methods
    //  Reading contents from HTML view file

    function readFile(){
        /*$fp = fopen($f,'rb');
        $this->content = fread($fp, filesize($f));
        fclose($fp);*/
        $this->content = file_get_contents($f);
    }

    // HTML view file check
    function loadFile($file){
        // checking for HTML views excistence
        if (!is_dir(VIEWS_DIR)){
            echo 'There is no directory called '.VIEWS_DIR.' please check directory!<br />';
            exit;
        }
        // views/test.html
        $file = $this->file; // Replaces $this->file with $f
        if (file_exists($file) and is_file($file) and is_readable($file)){
            $this->readFile($file);
        }
        // test.html
        $file = VIEWS_DIR.$this->file;
        if (file_exists($file) and is_file($file) and is_readable($file)){
            $this->readFile($file);
        }
        // if file is given as test
        $file =VIEWS_DIR.$this->file.'.html';
        if (file_exists($file) and is_file($file) and is_readable($file)){
            $this->readFile($file);
        }
        //if file is given as directory.test
        $file = VIEWS_DIR.str_replace('.','/',$this->file).'.html';
        if (file_exists($file) and is_file($file) and is_readable($file)){
            $this->readFile($file);
        }
        if ($this->content === false){
            echo 'Unable to read content from file '.$this->file.'<br />';
        }
    }

}