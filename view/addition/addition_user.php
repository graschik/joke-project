<?php include ROOT.'/view/layouts/header.php';?>


    <div class="container log-in">
        <div class="row">
            <div class="col-xs-1 col-lg-1 col-md-1 col-sm-1">
            </div>
            <div class="col-xs-10 col-lg-10 col-md-10 col-sm-10">
                <p class="p-log-in">Здесь вы можете предложить свой анекдот или историю</p>

                <?php if(isset($errors)):?>
                    <p class="error">
                        <?php foreach ($errors as $error)
                        {
                            echo $error.'<br>';
                        };?>
                    </p>
                <?php endif;?>
                <br>
                <form action="" method="post">
                    <div class="input-group email">
                        <span class="input-group-addon input-group-lg">Название</span>
                        <textarea class="form-control" type="text" rows="1" placeholder="Название" name="name" value=""><?php echo $name;?></textarea>
                    </div>

                    <p class="p-category">Выберите категорию: </p>

                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-md-4 col-sm-5 col-xs-10">
                                <select class="form-control" name="category" >
                                    <optgroup label="Анекдоты">
                                        <option value="1">Русские анекдоты</option>
                                        <option value="2">Не русские анекдоты</option>
                                        <option value="3">Анекдоты про чукчу</option>
                                        <option value="4">Анекдоты для детей</option>
                                        <option value="5">Анекдоты 18+</option>
                                    </optgroup>

                                    <optgroup label="Истории">
                                        <option value="6">Страшные истории</option>
                                        <option value="7">Смешные истории</option>
                                    </optgroup>
                                </select>
                            </div>
                            <div class="col-lg-10"></div>
                        </div>
                    </div>

                    <div class="input-group pass">
                        <span class="input-group-addon input-group-lg">Анекдот/<br>История</span>
                        <textarea class="form-control text-area" rows="6" type="text" placeholder="Анекдот/история" name="body" value=""><?php echo $body;?></textarea>
                    </div>
                                <div class="input-group btn-share">
                                    <button type="submit" class="btn btn-success btn-lg " name="submit">
                                        <i class="fa fa-share"></i> Предложить анекдот/историю
                                    </button>
                                </div>
                </form>


            </div>
            <div class="col-xs-1 col-lg-4 col-md-4 col-sm-4"></div>
        </div>
    </div>


<?php include ROOT.'/view/layouts/footer.php';?>