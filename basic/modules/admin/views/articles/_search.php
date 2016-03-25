<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\ArticlesTableSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="articles-table-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'articles_title') ?>

    <?= $form->field($model, 'articles_date') ?>

    <?= $form->field($model, 'articles_img') ?>

    <?= $form->field($model, 'articles_short_description') ?>

    <?php // echo $form->field($model, 'articles_description') ?>

    <?php // echo $form->field($model, 'articles_category_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
