<?php include ROOT.'/view/layouts/header.php';?>

    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-1">
            </div>
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-11">
                <button class="btn btn-success btn-lg"><i class="fa fa-plus-circle" aria-hidden="true"></i>  Добавить анекдот/историю</button>
            </div>
        </div>
    </div>


    <div class="container main">
        <p class="main-name">
            <?php
                if($category==1)
                    echo "Русские:";
                if($category==2)
                    echo "Не русские:";
                if($category==3)
                    echo "Про чукчу:";
                if($category==4)
                    echo "Для детей:";
                if($category==5)
                    echo "Анекдоты 18+:";
            ?>
        </p>
        <?php foreach ($jokes as $joke):?>
            <div class="panel panel-1">
                <div class="container">
                    <div class="row">
                        <div class="col-md-11 col-lg-11 col-xs-11 col-sm-11">
                            <p class="joke-name"><?php echo $joke['name'];?></p>
                            <P class="joke-date">Добавлен: <?php echo $joke['date'];?></P>
                            <p class="joke-body">
                                <?php echo $joke['body'];?>
                            </p>
                            <button class="btn btn-default btn-like"><i class="fa fa-heart"></i> <?php echo $joke['likes'];?></button>
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

<?php include ROOT.'/view/layouts/footer.php';?>