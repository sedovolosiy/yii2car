<?php

namespace app\models;

use yii\db\ActiveRecord;
use \yii\db\Query;

class Categories extends ActiveRecord
{
    public static function tableName()
    {
        return '{{%categories_table}}';
    }

    public function getCategories()
    {
        return (new Query())
            ->from(Categories::tableName())
            ->all();
    }
}