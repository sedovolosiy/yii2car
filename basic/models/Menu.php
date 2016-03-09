<?php

namespace app\models;

use yii\db\ActiveRecord;
use \yii\db\Query;

class Menu extends ActiveRecord
{
    public static function tableName()
    {
        return '{{%menu_table}}';
    }

    public function getMenu()
    {
        return (new Query())
            ->from(Menu::tableName())
            ->all();
    }
}