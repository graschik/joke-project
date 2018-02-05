<?php
/**
 * Created by PhpStorm.
 * User: allse
 * Date: 23.01.2018
 * Time: 15:53
 */

class SiteController
{

    public function actionIndex()
    {
        $topJokes=array();

        $topJokes=Joke::getTopJokes();

        require_once (ROOT.'/view/site/index.php');
        return true;
    }

}