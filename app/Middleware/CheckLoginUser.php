<?php 

namespace App\Middleware;

class CheckLoginUser {

    public static function execute()
    {
        if(!session()->has('logged_user') && !session()->has('logged_user_role')) {
            return true;
        }else{
            return false;
        }
    }
 
}