<?php

namespace app\modules\frontend\controllers;

use Yii;
use app\modules\frontend\controllers\CustomController;
use app\modules\frontend\models\Articles;

class ArticlesController extends CustomController
{
    public function actionGetArticle($id)
    {
        return $this->render('article', [
            'article' => Articles::find()
                ->where(['id' => $id])
                ->one()
        ]);
    }
}