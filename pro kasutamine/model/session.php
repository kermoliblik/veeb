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

    var $timeout = 1800;

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
}