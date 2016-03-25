<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\MenuTable */

$this->title = 'Create Menu Table';
$this->params['breadcrumbs'][] = ['label' => 'Menu Tables', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="menu-table-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
