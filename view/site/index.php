<?php include ROOT.'/view/layouts/header.php';?>

<div class="container">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-1">
        </div>
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-11">
            <form action="/addition">
                <button class="btn btn-success btn-lg"><i class="fa fa-plus-circle" aria-hidden="true" ></i>  Добавить анекдот/историю</button>
            </form>
        </div>
    </div>
</div>


<div class="container main">
    <p class="main-name">ТОП-15 Анекдотов:</p>
    <?php foreach ($topJokes as $topJoke):?>
        <div class="panel panel-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-11 col-lg-11 col-xs-11 col-sm-11">
                        <p class="joke-name"><?php echo $topJoke['name'];?></p>
                        <P class="joke-date">Добавлен: <?php echo $topJoke['date'];?></P>
                        <p class="joke-body">
                            <?php echo $topJoke['body'];?>
                        </p>
                        <button class="btn btn-default btn-like"><i class="fa fa-heart"></i> <?php echo $topJoke['likes'];?></button>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach;?>
</div>

<?php include ROOT.'/view/layouts/footer.php';?>