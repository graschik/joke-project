<?php
/**
 * Created by PhpStorm.
 * User: allse
 * Date: 24.01.2018
 * Time: 21:18
 */

class CategoryController
{
    public function actionView($category,$page=1)
    {
        $jokes=array();

        $jokes=Joke::getListJokesByCategory($category,$page);


        $total=Joke::getTotalJokesByCategory($category);

        $pagination=new Pagination($total,$page,Joke::SHOW_BY_DEFAULT,'page-');

        require_once (ROOT.'/view/category/category.php');

        return true;

    }
}