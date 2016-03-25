<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\ArticlesTable */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Articles Tables', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="articles-table-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'articles_title',
            'articles_date',
            'articles_img',
            'articles_short_description:ntext',
            'articles_description:ntext',
            'articles_category_id',
        ],
    ]) ?>

</div>
