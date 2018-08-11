<?php
/**
 * Created by PhpStorm.
 * User: Nitish Kumar
 * Date: 8/5/2018
 * Time: 9:34 AM
 */

class Security
{

    public function clean($data){

        $cleaned = trim($data);
        $cleaned = strip_tags($data);
        $cleaned = $this->escape_string($data);
    }

    public function escape_string($data){
        return mysqli_real_escape_string($data);
    }

    public function clean_post($POST){
        filter_var_array($POST,FILTER_SANITIZE_STRING);
    }

    public function filter_email($data){
        return filter_var($data,FILTER_SANITIZE_EMAIL);
    }

    public function filter_url($data){
        return filter_var($data,FILTER_SANITIZE_URL);
    }

    public function trim_data($data){
        return trim($data);
    }

    public function valid_int($data){
        return filter_var($data,FILTER_VALIDATE_INT);
    }

    public function valid_email($data){
        return filter_var($data,FILTER_VALIDATE_EMAIL);
    }

    public function valid_url($data){
        return filter_var($data,FILTER_VALIDATE_URL);
    }

    public function valid_ip($data){
        return filter_var($data,FILTER_VALIDATE_IP);
    }

    //CHECK IF THE INTEGER IS IN THE RANGE
    public function filter_range($data,$min,$max){
        return filter_var($data,FILTER_VALIDATE_INT,array(
            "options" => array(
                "min_range" =>$min,
                "min_range"=>$max)
        ));
    }

    public function valid_ip6($data){
        return filter_var($data,FILTER_VALIDATE_IP,FILTER_FLAG_IPV6);
    }

    public function valid_ip4($data){
        return filter_var($data,FILTER_VALIDATE_IP,FILTER_FLAG_IPV4);
    }

    //Removes characters > 127
    public function filter_string_high($data){
        return filter_var($data,FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_HIGH);
    }

    //Removes characters < 127
    public function filter_string_low($data){
        return filter_var($data,FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_HIGH);
    }


}

$security = new Security();