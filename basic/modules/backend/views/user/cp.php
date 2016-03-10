<?php
use yii\helpers\Html;
?>
<h1>Админка</h1>
<li>
    <?php echo Html::beginForm(['/backend/user/logout'], 'post') ?>
    <?php
    echo Html::submitButton(
        'Logout (' . Yii::$app->user->identity->username . ')',
        ['class' => 'btn btn-link']
    );
    ?>
    <?php Html::endForm()?>
</li>