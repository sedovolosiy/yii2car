<?php

namespace app\models;

use yii\db\ActiveRecord;

class MenuRecord extends ActiveRecord
{
    public static function tableName()
    {
        return 'menu_table';
    }
    public function rules()
    {
        return[
            ['menu_name', 'required', 'string', 'max'=> 32 ],
            [ 'menu_text', 'string'],
            ['id', 'number']
        ];
    }

}