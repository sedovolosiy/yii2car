<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use app\assets\AppAsset;
use yii\bootstrap\NavBar;
use yii\bootstrap\Nav;
use yii\bootstrap\ButtonDropdown;
use app\components\AlertWidget;
use yii\bootstrap\Button;



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
<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'Admin Panel',
        'brandUrl' => Yii::$app->urlManager->createUrl(["admin"]),
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => [
            'class' => 'navbar-nav navbar-right'
        ],
        'items' => [
            [
                'label' => 'Регистрация',
                'url' => ['default/reg']

            ],
            [
                'label' => 'Войти',
                'url' => ['default/login']
            ],
        ]
    ]);

    echo ButtonDropdown::widget([
        'label' => 'Menu',
        'options' => [
            'class' => 'btn-lg btn-default',
            'style' => 'margin:5px'
        ],
        'dropdown' => [
            'items' => [
                [
                    'label' => Html::encode('List Menu'),

                    'url' => Yii::$app->urlManager->createUrl(["/admin/menu/index"]),
                ],
                [
                    'label' => '',
                    'options' => [
                        'role' => 'presentation',
                        'class' => 'divider'
                    ]
                ],
                [
                    'label' => 'Add menu',

                    'url' => Yii::$app->urlManager->createUrl(["/admin/menu/create"]),
                ],


            ]
        ]
    ]);
    echo ButtonDropdown::widget([
        'label' => 'Articles',
        'options' => [
            'class' => 'btn-lg btn-default',
            'style' => 'margin:5px'
        ],
        'dropdown' => [
            'items' => [
                [
                    'label' => 'List Articles',
                    'url' => Yii::$app->urlManager->createUrl(["/admin/articles/index"]),
                ],
                [
                    'label' => '',
                    'options' => [
                        'role' => 'presentation',
                        'class' => 'divider'
                    ]
                ],
                [
                    'label' => 'Add articles',

                    'url' => Yii::$app->urlManager->createUrl(["/admin/articles/create"]),
                ],


            ]
        ]
    ]);
    echo ButtonDropdown::widget([
        'label' => 'Categories',
        'options' => [
            'class' => 'btn-lg btn-default',
            'style' => 'margin:5px'
        ],
        'dropdown' => [
            'items' => [
                [
                    'label' => 'List Categories',
                    'url' => Yii::$app->urlManager->createUrl(["/admin/categories/index"]),
                ],
                [
                    'label' => '',
                    'options' => [
                        'role' => 'presentation',
                        'class' => 'divider'
                    ]
                ],
                [
                    'label' => 'Add categories',
                    'url' => Yii::$app->urlManager->createUrl(["/admin/categories/create"]),
                ],

            ]
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
