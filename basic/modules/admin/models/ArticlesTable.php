<?php

namespace app\modules\admin\models;

use Yii;
use yii\web\UploadedFile;

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
    public $file;

    const STATUS_INACTIVE = 0;
    const STATUS_ACTIVE = 1;

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
    public function behaviors()
    {
        return [
            'image' => [
                'class' => 'rico\yii2images\behaviors\ImageBehave',
            ]
        ];
    }

    public function rules()
    {
        return [
            [['articles_title'], 'required'],
            [['articles_date'], 'safe'],
            [['articles_short_description', 'articles_description'], 'string'],
            [['articles_category_id', 'status'], 'integer'],
            [['articles_title'], 'string', 'max' => 255],
            [['file'], 'file'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'articles_title' => 'Заголовок статьи',
            'articles_date' => 'Дата публикации',
            'articles_img' => 'Картинка',
            'articles_short_description' => 'Краткое описание',
            'articles_description' => 'Полное описание',
            'articles_category_id' => 'Articles Category ID',
        ];
    }

}
