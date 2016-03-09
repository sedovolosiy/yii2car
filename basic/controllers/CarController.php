<?php

namespace app\controllers;

use app\models\Articles;
use app\models\MenuRecord;
use Yii;
use yii\web\Controller;
use app\models\Categories;
use app\models\Menu;



class CarController extends Controller
{
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
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

    public function actionArticle($id)
    {
        return $this->render('article', [
            'article' => Articles::find()
                ->where(['id' => $id])
                ->one()
        ]);
    }

    public function actionMenu($id)
    {
        return $this->render('menu', [
            'menu' => Menu::find()
                ->where(['id' => $id])
                ->one()
        ]);
    }

    public function actionCategory($id)
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
