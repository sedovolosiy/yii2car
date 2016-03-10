<?php

namespace app\modules\frontend\controllers;

use Yii;
use yii\web\Controller;
use app\modules\frontend\models\Articles;
use app\modules\frontend\models\Categories;
use app\modules\frontend\models\Menu;

class ArticlesController extends Controller
{
    public function actionGetArticle($id)
    {
        return $this->render('article', [
            'article' => Articles::find()
                ->where(['id' => $id])
                ->one()
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