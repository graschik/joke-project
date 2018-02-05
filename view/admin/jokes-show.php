<?php include ROOT.'/view/layouts/header_admin.php';?>

    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-1">
            </div>
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-11">
                <a class="btn btn-success btn-lg"><i class="fa fa-plus-circle" aria-hidden="true" href=""></i>  Добавить анекдот</a>
            </div>
        </div>
    </div>


    <div class="container main">
        <p class="main-name">
            Анекдоты:
        </p>
        <?php foreach ($jokes as $joke):?>
            <div class="panel panel-1">
                <div class="container">
                    <div class="row">
                        <div class="col-md-11 col-lg-11 col-xs-11 col-sm-11">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                        <div class="col-xs-12">
                                            <nobr class="offer-name"><?php echo $joke['name'];?></nobr>
                                        </div>
                                    </div>
                                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-2">
                                        <form action="/admin/accept-offer/<?php echo $joke['id'];?>" method="post">
                                            <button class="btn btn-default btn-lg btn-offer" name="btn-accept">
                                                <i class="fa fa-pencil" style="color: #0a09cf"></i>
                                            </button>
                                        </form>
                                    </div>
                                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-2">
                                        <form action="/admin/joke-delete/<?php echo $joke['id'];?>" method="post">
                                            <button class="btn btn-default btn-lg btn-offer" name="btn-delete">
                                                <i class="fa fa-close" style="color: #cf1300;"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <P class="joke-date" style="margin-left: 30px;">Добавлен: <?php echo $joke['date'];?></P>
                            <p class="offer-genre">Жанр: <?php echo Genre::getGenreByNumber($joke['genre']);?></p>
                            <p class="offer-body">
                                <?php echo $joke['body'];?>
                            </p>
                            <p style="margin-left: 30px;">
                                Колество лайков: <?php echo $joke['likes'];?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach;?>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-1">

            </div>
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-11 pull-right">

                <?php echo $pagination->get();?>
            </div>
        </div>
    </div>

<?php include ROOT.'/view/layouts/footer_admin.php';?>