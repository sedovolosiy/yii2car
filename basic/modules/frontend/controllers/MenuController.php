<?php

namespace app\modules\frontend\controllers;

use Yii;
use yii\web\Controller;
use app\modules\frontend\models\Articles;
use app\modules\frontend\models\Categories;
use app\modules\frontend\models\Menu;

class MenuController extends Controller
{
    public function actionGetMenu($id)
    {
        return $this->render('menu', [
            'menu' => Menu::find()
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