<?php

namespace app\modules\frontend\controllers;

use Yii;
use yii\web\Controller;
use app\modules\frontend\models\Articles;
use app\modules\frontend\models\Categories;
use app\modules\frontend\models\Menu;
use app\modules\frontend\models\LoginForm;
//use yii\filters\AccessControl;
//use yii\helpers\Html;
//use yii\filters\VerbFilter;


class UserController extends Controller
{
        public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
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