<?php
/**
 * Created by PhpStorm.
 * User: allse
 * Date: 23.01.2018
 * Time: 18:26
 */

class User
{
    public static function checkEmail($email)
    {
        if(filter_var($email,FILTER_VALIDATE_EMAIL))
            return true;
        return false;
    }

    public static function checkPassword($password)
    {
        if(strlen($password)>=6)
            return true;
        return false;
    }

    public static function checkUserData($email,$password)
    {
        $db=Db::getConnection();

        $sql='SELECT * FROM users WHERE email=:email AND password=:password';

        $password=md5(md5($password));

        $result=$db->prepare($sql);
        $result->bindParam(':email',$email,PDO::PARAM_STR);
        $result->bindParam(':password',$password,PDO::PARAM_STR);

        $result->execute();

        $user=$result->fetch();

        if($user)
            return $user['id'];
        return false;
    }

    public static function auth($id)
    {
        $_SESSION['user']=$id;
    }

    public static function isGuest()
    {
        if(isset($_SESSION['user']))
            return false;
        return true;
    }

    public static function getUserInfoById($id)
    {
        $db=Db::getConnection();

        $sql='SELECT * FROM users WHERE id=:id';

        $result=$db->prepare($sql);
        $result->bindParam(':id',$id,PDO::PARAM_STR);

        $result->execute();

        $user=$result->fetch();

        return $user;
    }
}