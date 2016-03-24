<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use app\assets\AppAsset;
use yii\bootstrap\NavBar;
use yii\bootstrap\Nav;
use yii\bootstrap\ButtonDropdown;



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
<div class="container">
    <?php
    NavBar::begin([
        'brandLabel' => 'Admin Panel',
        'brandUrl' => Yii::$app->urlManager->createUrl(["admin"]),
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
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
    if (Yii::$app->user->isGuest) {
//        $menuItems[] = ['label' => 'Signup', 'url' => ['backend/site/signup']];
//        $menuItems[] = ['label' => 'Login', 'url' => ['backend/user/login']];
    } else {
        $menuItems[] = '<li>'
            . Html::beginForm(['/backend/user/logout'], 'post')
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link']
            )
            . Html::endForm()
            . '</li>';
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>
</div>
<div class="wrap">
    <div class="container">
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
