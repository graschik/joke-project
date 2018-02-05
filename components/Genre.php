<?php
/**
 * Created by PhpStorm.
 * User: allse
 * Date: 25.01.2018
 * Time: 22:47
 */

class Genre
{
    public static function getGenreByNumber($number)
    {
        switch ($number) {
            case'1':
                return 'Русские анекдоты';
            case'2':
                return 'Не русские анекдоты';
            case'3':
                return 'Анекдоты про чукчу';
            case'4':
                return 'Анекдоты для детей анекдоты';
            case'5':
                return 'Анекдоты 18+';
            case'6':
                return 'Смешные истории';
            case'7':
                return 'Страшные истории';
        }
    }
}