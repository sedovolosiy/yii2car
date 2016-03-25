<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\CategoriesTable */

$this->title = 'Create Categories Table';
$this->params['breadcrumbs'][] = ['label' => 'Categories Tables', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="categories-table-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
