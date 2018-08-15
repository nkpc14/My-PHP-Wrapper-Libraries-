<?php
/**
 * Created by PhpStorm.
 * User: Nitish Kumar
 * Date: 8/12/2018
 * Time: 12:26 PM
 */

class SessionHijack
{
    protected $ip;
    protected $name;
    protected $value;
    protected $expire;
    protected $path;
    protected $domain;
    protected $secure;
    protected $httponly;


    public function __construct()
    {
        ini_set('session.use_only_cookies',TRUE);
        ini_set('session.use_trans_sid',FALSE);
        ini_set('session.cookie_lifetime',1200);
    }


    public function regenerate($_POST,$password){

        if (!empty($_POST['password'] && $_POST['password'] === $password)){

            session_regenerate_id();

            $_SESSION['auth'] = TRUE;

            header('Location: '.$_SERVER['SCRIPT_NAME']);
        }
    }


    public function setCookie(){
        setcookie('','','','','','','');
    }

    public function setIp(){
       $this->ip = getenv("REMOTE_ADDR");
    }

    public function unsetCookie($name){
        setcookie($name,"",1);
        setcookie($name,FALSE);
        unset($_COOKIE[$name]);
    }
}