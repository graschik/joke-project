<?php
/**
 * Created by PhpStorm.
 * User: allse
 * Date: 25.01.2018
 * Time: 0:03
 */

class AdditionController
{

    public function actionIndex()
    {

        if(User::isGuest()) {
            require_once(ROOT.'/view/addition/login_error.php');
            return true;
        }

        $name="";
        $body="";

        $publication=array();

        if(isset($_POST['submit']))
        {
            $errors=false;

            $name=$_POST['name'];
            $body=$_POST['body'];
            $genre=$_POST['category'];


            if(!Joke::checkName($name)) {
                $errors[] = '- Заполните поле с названием';
            }

            if(!Joke::checkBody($body)) {
                $errors[] = '- Слишком короткий анекдот/история';
            }



            if($errors==false){
                if(AdminBase::checkAdmin())
                {
                    $publication['name']=$name;
                    $publication['body']=$body;
                    $publication['genre']=$genre;
                    Joke::addPublication($publication);
                    require_once (ROOT.'/view/addition/addition_admin_ok.php');
                    return true;
                }
                if(Joke::sentToTheProposed($name,$body,$genre)){
                    require_once (ROOT.'/view/addition/addition_ok.php');
                    return true;
                }else{
                    $errors[]='- Ошибка предложения';
                }
            }
        }
        require_once (ROOT.'/view/addition/addition_user.php');

        return true;
    }
}