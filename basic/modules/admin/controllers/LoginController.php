<?php

namespace app\modules\admin\controllers;

use app\models\User;
use app\modules\admin\controllers\BehaviorsController;
use yii\web\Controller;
use app\models\LoginForm;
use Yii;
use app\models\RegForm;


class LoginController extends Controller
{
    public $layout = 'admin_login';

    public function actionIndex()
    {
        return $this->render('index');
    }
    /**
     * Logs in a user.
     *
     * @return mixed
     */

    public function actionLogout()
    {
        Yii::$app->user->logout();
        return $this->redirect(['/admin/login/index']);
    }

    public function actionLogin()
    {
        if(!Yii::$app->user->isGuest):
            return $this->goHome();
        endif;

        $model = new LoginForm();

        if ($model->load(Yii::$app->request->post()) && $model->login()):
//            return $this->goBack();
            return $this->redirect(['/admin/default/index']);

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
            if($user = $model->reg()):
                if($user->status === User::STATUS_ACTIVE):
                    if(Yii::$app->getUser()->login($user)):
                        return $this->goHome();
                    endif;
                endif;
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
