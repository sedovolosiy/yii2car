<?php

namespace app\models;

use yii\db\ActiveRecord;
use \yii\db\Query;

class Articles extends ActiveRecord
{
    public static function tableName()
    {
        return '{{%articles_table}}';
    }

    public static function getArticles()
    {
        // SELECT id, name FROM articles WHERE id = 4
        return (new Query())
            ->from(Articles::tableName())
            ->all();
    }
}