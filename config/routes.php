<?php
    return [

        'cabinet/edit'=>'cabinet/edit',
        'cabinet'=>'cabinet/index',
        'user/logout'=>'user/logout',
        'user/login'=>'user/login',
        'user/register'=>'user/register',

        'admin/joke-delete/([0-9]+)'=>'adminJoke/delete/$1',
        'admin/jokes-show/page-([0-9]+)'=>'adminJoke/index/$1',
        'admin/jokes-show'=>'adminJoke/index',
        'admin/accept-offer/([0-9]+)'=>'adminOffers/accept/$1',
        'admin/change-offer/([0-9]+)'=>'adminOffers/change/$1',
        'admin/cancel-offer/([0-9]+)'=>'adminOffers/cancel/$1',
        'admin/show-offers/page-([0-9]+)'=>'adminOffers/index/$1',
        'admin/show-offers'=>'adminOffers/index',



        'admin'=>'admin/index',
        'category/([0-9]+)/page-([0-9]+)'=>'category/view/$1/$2',
        'category/([0-9]+)'=>'category/view/$1',

        'top-jokes'=>'site/index',

        'addition'=>'addition/index',

        ''=>'site/index',           
    ];