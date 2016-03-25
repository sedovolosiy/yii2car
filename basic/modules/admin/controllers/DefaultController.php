<?php

namespace app\modules\admin\controllers;

use yii\web\Controller;
use app\models\LoginForm;
use Yii;
use app\models\RegForm;


class DefaultController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    /**
     * Logs in a user.
     *
     * @return mixed
     */

    public function actionLogin()
    {
        $model = new LoginForm();

        if ($model->load(Yii::$app->request->post()) && $model->login()):
            return $this->goBack();

        endif;

        return $this->render(
            'login',
            ['model' => $model]
        );
    }

    public function actionReg()
    {
        $model = new RegForm();

        if ($model->load(Yii::$app->request->post()) && $model->validate()):
            if($model->reg()):
                return $this->goHome();
            else:
                Yii::$app->session->setFlash('error', 'Возникла ошибка при регистрации.');
                Yii::error('Ошибка при регистрации');
                return $this->refresh();
            endif;

        endif;

        return $this->render(
            'reg',
            ['model' => $model]
        );
    }

}
