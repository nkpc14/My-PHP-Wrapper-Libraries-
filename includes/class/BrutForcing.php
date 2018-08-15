<?php

class BruteForce{


protected $bruteLimit = 5;
protected $lockdownTIme = 600;

protected $firstFailedLogin;
protected $totalFailedLoginCount;

public function firstFLC(){
    $this->$firstFailedLoginCount = time();
}

public function totalFLC(){
    $this->$totalFailedLoginCount = result;
}

public function protect(){
    if(($this->$totalFailedLoginCount >= $this->$bruteLimit) 
    && (time() - $this->$firstFailedLoginCount < $this->$lockdownTIme )){
        echo "LOCKED DOWN";
        exit; //do something
    }
    elseif(/*login is invalid*/){
        if(time()-$this->$firstFailedLogin > $this->$lockdownTIme){
            //first unsucessful login since $lockdownTIme on the last one expired
            $this->$firstFailedLogin = time();//commit to database
            $this->$totalFailedLoginCount;//commit to database
        }
        else{
            $this->$totalFailedLoginCount++;//commit to database
        }
        exit;
    }
    else{
        //user is not currently locked out , and the login  is valid.
        //do stuff
    }
}


}