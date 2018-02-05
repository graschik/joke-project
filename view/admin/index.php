<?php include ROOT.'/view/layouts/header_admin.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-lg-1 col-md-1 col-xs-1 col-sm-1">

        </div>
        <div class="col-lg-11 col-md-11 col-xs-11 col-sm-11">
            <p class="menu-admin">Добро пожаловать в меню администратора, <?php $user=User::getUserInfoById($_SESSION['user']); echo $user['name'];?></p>
        </div>
        <div class="col-lg-1 col-md-1 col-xs-1 col-sm-1">

        </div>
        <div class="col-lg-11 col-md-11 col-xs-11 col-sm-11">
            <form class="form-group" action="/">
                <button class="btn btn-default">Вернуться на сайт</button>
            </form>
        </div>
    </div>
</div>

<?php include ROOT.'/view/layouts/footer_admin.php';?>
