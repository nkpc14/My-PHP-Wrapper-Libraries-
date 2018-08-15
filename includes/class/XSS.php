<?php
/**
 * Created by PhpStorm.
 * User: Nitish Kumar
 * Date: 8/15/2018
 * Time: 11:25 AM
 */

class XSS
{

     //xss mitigation functions
    public function xssafe($data,$encoding='UTF-8')
    {
        return htmlspecialchars($data,ENT_QUOTES | ENT_HTML401,$encoding);
    }
    public function xecho($data)
    {
        echo $this->xssafe($data);
    }
}