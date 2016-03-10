<?php

namespace app\modules\frontend\controllers;

use app\modules\frontend\models\Articles;
use app\modules\frontend\models\Categories;
use app\modules\frontend\models\Menu;
use Yii;
use yii\web\Controller;

class DefaultController extends Controller
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
    public function getAllMenu()
    {
        return Menu::find()->all();
    }
    public function getAllCategories()
    {
        return Categories::find()->all();
    }
    public function getAllArticles()
    {
        return Articles::find()->all();
    }
}