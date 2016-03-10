<?php

namespace app\modules\frontend\controllers;

use Yii;
use yii\web\Controller;
use app\modules\frontend\models\Articles;
use app\modules\frontend\models\Categories;
use app\modules\frontend\models\Menu;

class CategoriesController extends Controller
{
    public function actionGetCategory($id)
    {
        return $this->render('category', [
            'articles' => Articles::find()
                ->where(['articles_category_id' => $id])
                ->all()
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