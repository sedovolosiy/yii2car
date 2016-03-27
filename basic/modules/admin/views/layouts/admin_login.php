<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use app\assets\AppAsset;
use yii\bootstrap\NavBar;
use yii\bootstrap\Nav;
use app\components\AlertWidget;


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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'Admin Panel',
        'brandUrl' => Yii::$app->urlManager->createUrl(["admin/login"]),
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);


//    if (Yii::$app->user->isGuest):
//        $menuItems[] = [
//            'label' => 'Регистрация',
//            'url' => ['/admin/login/reg']
//        ];
//        $menuItems[] = [
//            'label' => 'Войти',
//            'url' => ['/admin/login/login']
//        ];
//    else:
//        $menuItems[] = [
//            'label' => 'Выйти (' . Yii::$app->user->identity['username'] . ')',
//            'url' => ['/admin/login/logout'],
//            'linkOptions' =>['data-method'=>'post']
//
//        ];
//    endif;


//    echo Nav::widget([
//        'items' => $menuItems,
//        'activateParents' => true,
//        'encodeLabels' => false,
//        'options' => [
//            'class' => 'navbar-nav navbar-right'
//        ]
//    ]);

    NavBar::end();
    ?>

    <div class="container">
        <?= AlertWidget::widget() ?>
        <?= $content ?>
    </div>
</div>
<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; Admin Panel <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>