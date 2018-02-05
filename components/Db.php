<?php
/**
 * Created by PhpStorm.
 * User: allse
 * Date: 17.01.2018
 * Time: 18:19
 */

class Db
{
    public static function getConnection()
    {
        $paramsPath=ROOT.'/config/db_params.php';
        $params = include($paramsPath);

        $dsn="mysql:host={$params['host']};dbname={$params['dbname']}";
        $db=new PDO($dsn,$params['user'],$params['password']);

        return $db;
    }
}