<?php
/**
 * Created by PhpStorm.
 * User: allse
 * Date: 23.01.2018
 * Time: 18:10
 */

class UserController
{

    public function actionLogin()
    {
        $email="";
        $password="";

        if(isset($_POST['submit'])){
            $email=$_POST['email'];
            $password=$_POST['password'];

            $errors=false;

            if(!User::checkPassword($password)){
                $errors[]="- Пароль должен содержать не меньше 6 символов";
            }

            if(!User::checkEmail($email)){
                $errors[]="- Неверный формат e-mail";
            }

            if($errors==false) {
                $userId = User::checkUserData($email, $password);

                if($userId==false){
                    $errors[]="- Неверный логин или пароль";
                }else{
                    User::auth($userId);
                    header("Location: /top-jokes");
                }
            }


        }

        require_once (ROOT.'/view/user/login.php');

        return true;
    }

    public function actionLogout()
    {
        unset($_SESSION['user']);
        header("Location: /");
    }

}