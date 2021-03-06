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
        'brandUrl' => Yii::$app->urlManager->createUrl(["admin"]),
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);

    $menuItems = [
        [
            'label' => 'Меню <i class="fa fa-bars"></i>',
            'items' => [
//                '<li class="dropdown-header">Расширения</li>',
//                '<li class="divider"></li>',
                [
                    'label' => 'Перейти к просмотру',
                    'url' => ['/admin/menu/index']
                ],
                '<li class="divider"></li>',
                [
                    'label' => '<i class="fa fa-plus"></i> Добавить меню',
                    'url' => ['/admin/menu/create']
                ],

            ]
        ],
        [
            'label' => 'Статьи <i class="fa fa-book"></i>',
            'items' => [
//                '<li class="dropdown-header">Расширения</li>',
//                '<li class="divider"></li>',
                [
                    'label' => 'Перейти к просмотру',
                    'url' => ['/admin/articles/index']
                ],
                '<li class="divider"></li>',
                [
                    'label' => '<i class="fa fa-plus"></i> Добавить статью',
                    'url' => ['/admin/articles/create']
                ],

            ]
        ],
        [
            'label' => 'Категории <i class="fa fa-th"></i>',
            'items' => [
//                '<li class="dropdown-header">Расширения</li>',
//                '<li class="divider"></li>',
                [
                    'label' => 'Перейти к просмотру',
                    'url' => ['/admin/categories/index']
                ],
                '<li class="divider"></li>',
                [
                    'label' => '<i class="fa fa-plus"></i> Добавить категорию',
                    'url' => ['/admin/categories/create']
                ],

            ]
        ],
    ];
    if (Yii::$app->user->isGuest):
        $menuItems[] = [
            'label' => 'Регистрация',
            'url' => ['/admin/default/reg']
        ];
        $menuItems[] = [
            'label' => 'Войти',
            'url' => ['/admin/default/login']
        ];
    else:
    $menuItems[] = [
        'label' => 'Выйти (' . Yii::$app->user->identity['username'] . ')',
        'url' => ['/admin/default/logout'],
        'linkOptions' =>['data-method'=>'post']

    ];
    endif;


    echo Nav::widget([
        'items' => $menuItems,
        'activateParents' => true,
        'encodeLabels' => false,
        'options' => [
            'class' => 'navbar-nav navbar-right'
        ]
    ]);

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
