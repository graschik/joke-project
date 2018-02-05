<?php
/**
 * Created by PhpStorm.
 * User: allse
 * Date: 23.01.2018
 * Time: 16:10
 */

class Joke
{

    const SHOW_BY_DEFAULT = 4;

    public static function addPublication($publication)
    {
        $date=date('Y-m-d');

        $name=$publication['name'];
        $body=$publication['body'];
        $genre=$publication['genre'];
        $likes=0;

        $db=Db::getConnection();

        $sql='INSERT INTO jokes (name, body, date, genre, likes) VALUE (:name, :body, :date, :genre, :likes)';

        $result=$db->prepare($sql);
        $result->bindParam(':name',$name,PDO::PARAM_STR);
        $result->bindParam(':body',$body,PDO::PARAM_STR);
        $result->bindParam(':date',$date,PDO::PARAM_STR);
        $result->bindParam(':genre',$genre,PDO::PARAM_INT);
        $result->bindParam(':likes',$likes,PDO::PARAM_INT);

        return $result->execute();

    }

    public static function getTopJokes()
    {
        $topJokes=array();

        $db=Db::getConnection();

        $sql='SELECT * FROM jokes ORDER BY likes DESC LIMIT 15';

        $result=$db->query($sql);

        for($i=0;$row=$result->fetch();$i++){
            $topJokes[$i]['name']=$row['name'];
            $topJokes[$i]['body']=$row['body'];
            $topJokes[$i]['date']=$row['date'];
            $topJokes[$i]['likes']=$row['likes'];
        }


        return $topJokes;
    }

    public static function getListJokesByCategory($genre,$page=1)
    {

        $jokes=array();

        $db=Db::getConnection();

        $sql='SELECT * FROM jokes WHERE genre='.$genre.' ORDER BY id DESC LIMIT '.self::SHOW_BY_DEFAULT.' OFFSET '.($page-1)*self::SHOW_BY_DEFAULT;

        $result=$db->query($sql);

        for($i=0;$row=$result->fetch();$i++){
            $jokes[$i]['name']=$row['name'];
            $jokes[$i]['body']=$row['body'];
            $jokes[$i]['date']=$row['date'];
            $jokes[$i]['likes']=$row['likes'];
        }

        return $jokes;
    }

    public static function getListJokes($page=1)
    {
        $jokes=array();

        $db=Db::getConnection();

        $sql='SELECT * FROM jokes ORDER BY id DESC LIMIT '.self::SHOW_BY_DEFAULT.' OFFSET '.($page-1)*self::SHOW_BY_DEFAULT;

        $result=$db->query($sql);

        for($i=0;$row=$result->fetch();$i++){
            $jokes[$i]['id']=$row['id'];
            $jokes[$i]['name']=$row['name'];
            $jokes[$i]['body']=$row['body'];
            $jokes[$i]['date']=$row['date'];
            $jokes[$i]['likes']=$row['likes'];
            $jokes[$i]['genre']=$row['genre'];
        }

        return $jokes;
    }

    public static function getTotalJokes()
    {
        $jokes=array();

        $db=Db::getConnection();

        $sql='SELECT COUNT(id) AS count FROM jokes WHERE genre IN(1,2,3,4,5)';

        $result=$db->query($sql);

        $result->setFetchMode(PDO::FETCH_ASSOC);

        $row=$result->fetch();

        return $row['count'];
    }

    public static function getTotalJokesByCategory($genre)
    {
        $jokes=array();

        $db=Db::getConnection();

        $sql='SELECT COUNT(id) AS count FROM jokes WHERE genre='.$genre;

        $result=$db->query($sql);

        $result->setFetchMode(PDO::FETCH_ASSOC);

        $row=$result->fetch();

        return $row['count'];

    }

    public static function sentToTheProposed($name,$body,$genre)
    {
        $db=Db::getConnection();

        $sql='INSERT INTO offers (name, genre, body) VALUE (:name, :genre, :body)';

        $result=$db->prepare($sql);
        $result->bindParam(':name',$name,PDO::PARAM_STR);
        $result->bindParam(':genre',$genre,PDO::PARAM_INT);
        $result->bindParam(':body',$body,PDO::PARAM_STR);

        return $result->execute();

    }

    public static function checkName($name)
    {
        if(strlen($name)>0)
            return true;
        else false;
    }

    public static function checkBody($body)
    {
        if(strlen($body)>10)
            return true;
        else false;
    }

    public static function deletePublicationById($id)
    {
        $id=intval($id);

        $db=Db::getConnection();

        $sql='DELETE FROM jokes WHERE id='.$id;

        $result=$db->query($sql);

        $result->setFetchMode(PDO::FETCH_ASSOC);

        $row=$result->fetch();
    }
}