<?php include ROOT.'/view/layouts/header_admin.php';?>


    <div class="container main">
        <p class="main-name">Предложенные анекдоты/истории:</p>
        <?php
            if($total==0):{
                echo "<p class='main-menu'>Список предложений пуст...</p>";
            }
            ?>

        <?php else: foreach ($offers as $offer):?>
            <div class="panel panel-1">
                <div class="container">
                    <div class="row">
                        <div class="col-md-11 col-lg-11 col-xs-11 col-sm-11">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                        <div class="col-xs-12">
                                            <nobr class="offer-name"><?php echo $offer['name'];?></nobr>
                                        </div>
                                    </div>
                                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-2">
                                    <form action="/admin/accept-offer/<?php echo $offer['id'];?>" method="post">
                                        <button class="btn btn-default btn-lg btn-offer" name="btn-accept">
                                            <i class="fa fa-check" style="color: #3fcf11;"></i>
                                        </button>
                                    </form>
                                    </div>
                                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-2">
                                    <form action="/admin/cancel-offer/<?php echo $offer['id'];?>" method="post">
                                        <button class="btn btn-default btn-lg btn-offer" name="btn-cancel">
                                            <i class="fa fa-close" style="color: #cf1300;"></i>
                                        </button>
                                    </form>
                                    </div>
                                </div>
                            </div>

                            <p class="offer-genre">Жанр: <?php echo Genre::getGenreByNumber($offer['genre']);?></p>
                            <p class="offer-body">
                                <?php echo $offer['body'];?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach;?>
        <?php endif;?>
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