<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "articles_table".
 *
 * @property integer $id
 * @property string $articles_title
 * @property string $articles_date
 * @property string $articles_img
 * @property string $articles_short_description
 * @property string $articles_description
 * @property integer $articles_category_id
 */
class ArticlesTable extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'articles_table';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['articles_title', 'articles_img'], 'required'],
            [['articles_date'], 'safe'],
            [['articles_short_description', 'articles_description'], 'string'],
            [['articles_category_id'], 'integer'],
            [['articles_title', 'articles_img'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'articles_title' => 'Articles Title',
            'articles_date' => 'Articles Date',
            'articles_img' => 'Articles Img',
            'articles_short_description' => 'Articles Short Description',
            'articles_description' => 'Articles Description',
            'articles_category_id' => 'Articles Category ID',
        ];
    }
}
