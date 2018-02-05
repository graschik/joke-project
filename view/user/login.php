<?php include ROOT.'/view/layouts/header.php';?>


<div class="container log-in">
    <div class="row">
        <div class="col-xs-1 col-lg-4 col-md-4 col-sm-4">
        </div>
        <div class="col-xs-10 col-lg-5 col-md-5 col-sm-5">
            <?php if(isset($errors)):?>
                <p>
                    <?php foreach ($errors as $error)
                    {
                        echo $error.'<br>';
                    };?>
                </p>
            <?php endif;?>
            <p class="p-log-in">Вход на сайт</p>
            <form action="" method="post">
                <div class="input-group email">
                    <span class="input-group-addon input-group-lg"><i class="fa fa-envelope-o fa-fw"></i></span>
                    <input class="form-control" type="email" placeholder="Email address" name="email" value="<?php echo $email;?>">
                </div>
                <div class="input-group pass">
                    <span class="input-group-addon input-group-lg"><i class="fa fa-key fa-fw"></i></span>
                    <input class="form-control" type="password" placeholder="Password" name="password" value="<?php echo $password?>">
                </div>
                <div class="input-group btn-login">
                    <button type="submit" class="btn btn-primary btn-lg" name="submit">
                        <i class="fa fa-sign-in"></i> Войти
                    </button>
                </div>
            </form>
        </div>
        <div class="col-xs-1 col-lg-4 col-md-4 col-sm-4"></div>
    </div>
</div>


<?php include ROOT.'/view/layouts/footer.php';?>