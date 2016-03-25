<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
?>

<div class="quick-bg">
    <div id="spacer" style="margin-bottom:15px;">
        <div id="rc-bg">Menu</div>
    </div>
    <?php foreach ($categories as $category) { ?>
        <div class='quick-links'>»<a href='<?=Yii::$app->urlManager->createUrl(['frontend/categories/get-category', 'id'=>$category['id']])?>'><?php echo $category['category_name']; ?></a></div>
    <?php } ?>
</div>



