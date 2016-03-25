<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\ArticlesTable */

$this->title = 'Create Articles Table';
$this->params['breadcrumbs'][] = ['label' => 'Articles Tables', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="articles-table-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
