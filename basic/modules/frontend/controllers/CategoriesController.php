<?php

namespace app\modules\frontend\controllers;

use Yii;
use yii\web\Controller;
use app\modules\frontend\models\Articles;
use app\modules\frontend\controllers\CustomController;

class CategoriesController extends CustomController
{
    public function actionGetCategory($id)
    {
        return $this->render('category', [
            'articles' => Articles::find()
                ->where(['articles_category_id' => $id])
                ->all()
        ]);
    }
}