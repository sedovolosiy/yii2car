<?php

namespace app\modules\frontend\controllers;

use app\modules\frontend\models\Articles;
use app\modules\frontend\models\Categories;
use app\modules\frontend\models\Menu;
use Yii;
use yii\web\Controller;

class CustomController extends Controller
{
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