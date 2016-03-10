<?php

namespace app\modules\frontend\controllers;

use Yii;
use app\modules\frontend\controllers\CustomController;
use app\modules\frontend\models\Menu;

class MenuController extends CustomController
{
    public function actionGetMenu($id)
    {
        return $this->render('menu', [
            'menu' => Menu::find()
                ->where(['id' => $id])
                ->one()
        ]);
    }

}