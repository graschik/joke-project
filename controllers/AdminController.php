<?php
/**
 * Created by PhpStorm.
 * User: allse
 * Date: 25.01.2018
 * Time: 16:50
 */

class AdminController extends AdminBase
{
    public function actionIndex()
    {

        self::checkAdmin();

        require_once (ROOT.'/view/admin/index.php');

        return true;
    }
}