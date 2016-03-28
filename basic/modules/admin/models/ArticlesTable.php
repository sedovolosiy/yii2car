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
    public $string;
    public $image;
    public $filename;

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
            [['articles_title'], 'required'],
            [['articles_date'], 'safe'],
            [['articles_short_description', 'articles_description'], 'string'],
            [['articles_category_id'], 'integer'],
            [['articles_title'], 'string', 'max' => 255],
            [['articles_img'], 'file'],
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

    public function beforeSave($insert){
        if ($this->isNewRecord) {
            //generate & upload
            $this->string = substr(uniqid('img'), 0, 12); //imgRandomString
            $this->image = UploadedFile::getInstance($this, 'articles_img');
            $this->filename = 'static/images/' . $this->string . '.' . $this->image->extension;
            $this->image->saveAs($this->filename);
            //save
            $this->img = '/' . $this->filename;
        }else{
            $this->image = UploadedFile::getInstance($this, 'articles_img');
            if($this->image){
                $this->image->saveAs(substr($this->img, 1));
            }
        }

        return parent::beforeSave($insert);
    }
}
