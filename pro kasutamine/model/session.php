<?php
/**
 * Created by PhpStorm.
 * User: dante
 * Date: 12-Feb-18
 * Time: 12:20
 */

class session
{
//sessiooni klassi muutujad
    var $sid = false; //sessiooni id
    var $vars = array(); //sessiooni ajal tekinud andmed
    var $http = false; //otse[hendus http objectiga
    var $db = false;

    var $timeout = 1800; //timeout timer
    var $anonymous = true; //kas on lubatud anon kasutajad

    /**
     * session constructor.
     * @param bool $http
     * @param bool $db
     */
    public function __construct(&$http, &$db)
    {
        $this->http = &$http;
        $this->db = &$db;
    }

    // sessiooni

    function creatSession($user = false){
        if($user = false){
            // loome kasutaja andmestiku
            $user = array(
                'user_id' = 0,
                'role_id' = 0,
                'username' = 'Anon'
            );
        }
        //loome  sessiooni id
        $sid = md5(uniqid(time().mt_rand(1, 1000)));
        //p'ring sessiooni andmete sisestamiseks
        $sql = 'INSERT INTO session SET sid='.fixDB($sid).', user_id='.fixDB($user['user_id']).', user_data='.fixDB(serialize($user)).
            ', login_ip='.fixDB(REMOTE_ADDR).', created=NOW()';
        //saadame p'ringu andmebaasi
        $this->db->query($sql);
        $this->sid = $sid;
        $this->http->set('sid', $sid);
    }

    function clearSessions(){
        $sql = 'DELETE FROM session WHERE '.time().'- UNIX_TIMESTAMP(changed) > '.$this->timeout;
        $this->db->query($sql);
    }

    function checkSession(){
        $this->clearSessions();
        if($this->sid === false and $this->anonymous){
            $this->creatSession();
        }
        kui sessioni id pole false
        if($this->sid !== false){
            $sql = 'SELECT * FROM session WHERE sid='.fixDB($this->sid);
            $result = $this->db->getData($sql);
            if($result == false){
                if($this->anonymous){
                    $this->creatSession();
                }else{
                    $this->sid = false;
                    //on vaja ka veebis maha vota aga veel ei ole seda
                }
                //defineerin kaks konstanti
                define('ROLE_ID', 0);
                define('USER_ID', 0);
            } else {
                // kasutame andmed andmebaasist
                $vars = unserialize($result[0]['user_data']);
                $this->vars = $vars;
                $user_data = unserialize($result[0]['user_data']);
                define('ROLE_ID', $user_data['role_id']);
                define('USER_ID', $user_data['user_id']);
                $this->user_data = $user_data;
            }

        }else {
            define('ROLE_ID', $user_data['role_id']);
            define('USER_ID', $user_data['user_id']);
        }
    }
}