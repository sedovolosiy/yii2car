<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body>
<?php $this->beginBody() ?>
<center>
<div id="border">

<!--    /* header block */  -->
    <?php echo $this->render('header'); ?>
<!--    end header block-->

<!--    left_bar block-->
    <?= $this->render('left_bar', ['categories' =>$this->context->getAllCategories()]); ?>
<!--    end left_bar block-->

    <div id="mainarea">
<!--        menu block-->
        <?= $this->render('menu', ['menus' =>$this->context->getAllMenu()]); ?>
<!--        end menu block-->
        <div id="main">
<!--            Content block     -->
            <?= $content ?>
<!--            end content block-->
        </div>
    </div>
    <div id='bottom'>
        <?php echo $this->render('footer'); ?>
    </div>
    <div class="copy"><span class="style1"> Copyright 2010 Название сайта </span>
    </div>
</div>
</center>
<?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>