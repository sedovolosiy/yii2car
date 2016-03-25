<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "menu_table".
 *
 * @property integer $id
 * @property string $menu_name
 * @property string $menu_text
 */
class MenuTable extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'menu_table';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['menu_name'], 'required'],
            [['menu_text'], 'string'],
            [['menu_name'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'menu_name' => 'Menu Name',
            'menu_text' => 'Menu Text',
        ];
    }
}
