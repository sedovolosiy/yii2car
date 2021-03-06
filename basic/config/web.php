<?php

$params = require(__DIR__ . '/params.php');

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'language' => 'ru-RU',


    'components' => [

        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'F-MeyHLqlQ3aHnSREM6n2w1Ibp4L0-UX',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
            'loginUrl' => ['login']
        ],
        'errorHandler' => [
            'errorAction' => 'frontend/default/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => require(__DIR__ . '/db.php'),

        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'enableStrictParsing'=>false,


            'rules' => [
                ''=>'frontend/default/index',
                'article/<id:\d+>' => 'frontend/articles/get-article',
                'category/<id:\d+>' => 'frontend/categories/get-category',
                'menu/<id:\d+>' => 'frontend/menu/get-menu',
                'login' => 'admin/login/login',
//                'admin' => 'backend/user/login',
//                'admin/list_menu' => 'backend/menu/get-list',
//                'admin/list_articles' => 'backend/articles/get-list',
//                'admin/list_categories' => 'backend/categories/get-list',
//                'admin/add_menu' => 'backend/menu/add-menu',

//                'article/<id:\d+>' => 'car/get-article',
//                'menu/<id:\d+>' => 'car/get-menu',
//                'category/<id:\d+>' => 'car/get-category',
//                'login'=> 'car/login',

            ],
        ],


    ],
    'modules' => [
        'frontend' => [
            'class' => 'app\modules\frontend\Module',
        ],
//        'backend' => [
//            'class' => 'app\modules\backend\Module',
//        ],
        'admin' => [
            'class' => 'app\modules\admin\Module',
        ],
        'yii2images' => [
            'class' => 'rico\yii2images\Module',
            //be sure, that permissions ok
            //if you cant avoid permission errors you have to create "images" folder in web root manually and set 777 permissions
            'imagesStorePath' => 'static/images', //path to origin images
            'imagesCachePath' => 'static/cache', //path to resized copies
            'graphicsLibrary' => 'GD', //but really its better to use 'Imagick'
            'placeHolderPath' => '@webroot/static/placeHolder.png', // if you want to get placeholder when image not exists, string will be processed by Yii::getAlias
        ],
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
    ];
}

return $config;
