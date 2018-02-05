<?php
/**
 * Created by PhpStorm.
 * User: allse
 * Date: 27.01.2018
 * Time: 16:07
 */

class AdminJokeController extends AdminBase
{

    public function actionIndex($page=1)
    {
        self::checkAdmin();

        $page=intval($page);

        $jokes=array();

        $jokes=Joke::getListJokes($page);

        $total=Joke::getTotalJokes();

        if($page>$total/Joke::SHOW_BY_DEFAULT)
            header('Location: /admin/jokes-show/page-'.$page=intval($total/Joke::SHOW_BY_DEFAULT));

        $pagination=new Pagination($total,$page,Joke::SHOW_BY_DEFAULT,'page-');

        require_once (ROOT.'/view/admin/jokes-show.php');

        return true;
    }

    public function actionDelete($id)
    {
        self::checkAdmin();

        if(!isset($_POST['btn-delete'])){
            die('Access denied');
        }


        $id=intval($id);

        Joke::deletePublicationById($id);

        header("Location: ".$_SERVER['HTTP_REFERER']);
        exit();
    }
}