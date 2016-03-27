<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\ArticlesTableSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Articles Tables';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="articles-table-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Articles Table', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?php Pjax::begin(); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
//        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'articles_title',
            'articles_date',
//            'articles_img:image',
            [
                'label' => 'Картинка',
                'format' => 'raw',
                'value' => function($data){
                    return Html::img(Url::toRoute($data->articles_img),[
                        'alt'=>'yii2 - картинка в gridview',
                        'style' => 'width:150px;'
                    ]);
                },
            ],
//            'articles_img',
            'articles_short_description:ntext',
            // 'articles_description:ntext',
            // 'articles_category_id',

            [
                'class' => 'yii\grid\ActionColumn',

            ],
        ],
    ]); ?>
    <?php Pjax::end(); ?>

</div>
