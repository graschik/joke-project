<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap Template</title>

    <!-- Bootstrap -->
    <link href="/template/css/bootstrap.css" rel="stylesheet">
    <link href="/template/css/style.css" rel="stylesheet">
    <link href="/template/css/font-awesome.css" rel="stylesheet">
    <link href="/template/fonts/font-awesome.css" rel="stylesheet">

</head>
<body>

<div class="navbar navbar-inverse navbar-fixed-static-top">
    <div class="container">
        <div class="row">
        <div class="navbar-header col-lg-3 col-md-3">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#responsive-menu">
                <span class="sr-only">Открыть навигацию</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">All-JOKES.BY</a>
        </div>
        <div class="collapse navbar-collapse" id="responsive-menu">
            <ul class="nav navbar-nav">
                <li><a href="/top-jokes">ТОП-15 Анекдотов</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Анекдоты<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="/category/1">Русские</a></li>
                        <li><a href="/category/2">Не русские</a></li>
                        <!--<li class="divider"></li>-->
                        <li><a href="/category/3">Про чукчу</a></li>
                        <li><a href="/category/4">Для детей</a></li>
                        <li><a href="/category/5">Анекдоты 18+</a></li>
                    </ul>
                </li>
                <li><a href="/funny-stories">Смешные истории</a></li>
                <li><a href="/horror-stories">Страшные истории</a></li>
            </ul>
            <?php if(User::isGuest()):?>
                <form action="/user/login" class="navbar-form navbar-right">
                    <button type="submit" class="btn btn-primary" href="">
                        <i class="fa fa-sign-in"></i> Войти
                    </button>
                </form>
            <?php else:?>

            <ul class="nav navbar-nav">
                <div class="btn-group navbar-form  navbar-right ">
                    <a class="btn btn-primary" href="#" ><i class="fa fa-user fa-fw" ></i> <?php $user=User::getUserInfoById($_SESSION['user']); echo $user['name'];?>  </a>
                    <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"">
                        <span class="fa fa-caret-down" title="Toggle dropdown menu"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><i class="fa fa-pencil fa-fw"></i> Изменить</a></li>
                        <li><a href="#"><i class="fa fa-info-circle fa-fw" ></i> Информация</a></li>
                        <li class="divider"></li>
                        <?php
                            if($user['status']=='admin')
                            {
                                echo '<li><a href="/admin"><i class="fa fa-star-half-full fa-fw" aria-hidden="true"></i> Админка</a></li>';
                            }
                        ?>
                        <li><a href="/user/logout"><i class="fa fa-sign-out fa-fw" aria-hidden="true"></i> Выйти</a></li>
                    </ul>
                </div>
            </ul>
            <?php endif;?>
        </div>
    </div>
    </div>
</div>
