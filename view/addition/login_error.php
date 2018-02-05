<?php include ROOT.'/view/layouts/header.php';?>


    <div class="container log-in">
        <div class="row">
            <div class="col-xs-1 col-lg-1 col-md-1 col-sm-1">
            </div>
            <div class="col-xs-10 col-lg-10 col-md-10 col-sm-10">
                <p class="p-login-error">Для того, чтобы предлагать свои анекдоты, вы должны авторизироваться</p>
                <form action="/user/login" method="post">
                    <div class="input-group btn-login" >
                        <button type="submit" class="btn btn-primary btn-lg" name="go">
                            <i class="fa fa-sign-in"></i> Войти
                        </button>
                    </div>
                </form>
            </div>
            <div class="col-xs-1 col-lg-4 col-md-4 col-sm-4"></div>
        </div>
    </div>


<?php include ROOT.'/view/layouts/footer.php';?>