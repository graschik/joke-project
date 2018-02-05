<?php
/**
 * Created by PhpStorm.
 * User: allse
 * Date: 26.01.2018
 * Time: 1:01
 */

class Offer
{
    public static function getOfferInfoById($id)
    {
        $db=Db::getConnection();

        $sql='SELECT * FROM offers WHERE id='.$id;

        $result=$db->query($sql);

        $result->setFetchMode(PDO::FETCH_ASSOC);

        $row=$result->fetch();

        return $row;
    }

    public static function getListOffersPublications($page=1)
    {

        $publications=array();

        $db=Db::getConnection();

        $sql='SELECT * FROM offers WHERE id>0 ORDER BY id DESC LIMIT '.Joke::SHOW_BY_DEFAULT.' OFFSET '.($page-1)*Joke::SHOW_BY_DEFAULT;

        $result=$db->query($sql);

        for($i=0;$row=$result->fetch();$i++){
            $publications[$i]['id']=$row['id'];
            $publications[$i]['name']=$row['name'];
            $publications[$i]['body']=$row['body'];
            $publications[$i]['genre']=$row['genre'];
        }

        return $publications;
    }

    public static function getTotalOffersPublications()
    {

        $db=Db::getConnection();

        $sql='SELECT COUNT(id) AS count FROM offers WHERE id>0';

        $result=$db->query($sql);

        $result->setFetchMode(PDO::FETCH_ASSOC);

        $row=$result->fetch();

        return $row['count'];

    }

    public static function deleteOfferById($id)
    {
        $db=Db::getConnection();

        $sql='DELETE FROM offers WHERE id='.$id;

        $result=$db->query($sql);

        $result->setFetchMode(PDO::FETCH_ASSOC);

        $row=$result->fetch();

    }
}