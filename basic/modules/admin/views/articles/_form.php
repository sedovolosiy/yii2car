<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\ArticlesTable */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="articles-table-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype'=>'multipart/form-data']]); ?>

    <?= $form->field($model, 'articles_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'articles_date')->textInput() ?>

    <?= $form->field($model, 'file')->fileInput() ?>

    <div class="form-group">

        <div class="'col-md-3">
            <img style='margin-right:5px' width='150px' src="<?=$model->articles_img ?>" alt="'/">
        </div>
    </div>

    <?= $form->field($model, 'articles_short_description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'articles_description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'articles_category_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
