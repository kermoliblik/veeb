<?php
/**
 * Created by PhpStorm.
 * User: dante
 * Date: 02-Feb-18
 * Time: 08:57
 */

class mysql
{
    //class fields
    var $conn = false;
    var $host = false;
    var $user = false;
    var $pass = false;
    var $dbname = false;

    /**
     * mysql constructor.
     * @param bool $host
     * @param bool $user
     * @param bool $pass
     * @param bool $dbname
     */
    //constructor
    public function __construct($host, $user, $pass, $dbname)
    {
        $this->host = $host;
        $this->user = $user;
        $this->pass = $pass;
        $this->dbname = $dbname;
        $this->connect();
    }

    //function to connect with database
    function connect(){
        $this->conn = mysqli_connect($this->host, $this->user, $this->pass, $this->dbname);
        if(!$this->conn){
            echo 'Problem connecting to DataBase<br />';
            exit;
        }
    }
    //p'ringusaatmis function
    function query($sql){
        $result = mysqli_query($this->conn, $sql);
        if (!$result){
            echo 'probleem paringuga'.$sql.'<br />';
            return false;
        }
        return $result;
    }
}