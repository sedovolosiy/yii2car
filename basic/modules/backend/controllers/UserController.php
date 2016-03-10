<?php

namespace app\modules\backend\controllers;

use Yii;
use app\modules\backend\models\LoginForm;
use app\modules\frontend\controllers\CustomController;

class UserController extends CustomController
{
        public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
//            return $this->goHome();
            return $this->render('cp');
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->render('cp');
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

}