<?php
/**
 * Created by PhpStorm.
 * User: allse
 * Date: 20.01.2018
 * Time: 15:48
 */

class AdminBase
{

    public static function checkAdmin()
    {

        if(User::isGuest())
            header("Location: /user/login");

        $user=User::getUserInfoById($_SESSION['user']);

        if($user['status']=='admin'){
            return true;
        }

        die('Access denied');
    }

}