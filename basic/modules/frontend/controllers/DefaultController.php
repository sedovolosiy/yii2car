<?php

namespace app\modules\frontend\controllers;

use app\modules\frontend\models\Articles;
use app\modules\frontend\models\Categories;
use app\modules\frontend\models\Menu;
use Yii;
use app\modules\frontend\controllers\CustomController;

class DefaultController extends CustomController
{
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }
    public function actionIndex()
    {

        return $this->render('index', [
            'categories' => Categories::find()->all(),
            'articles' => Articles::getArticles(),
            'menus' => Menu::find()->all()
        ]);
    }
}