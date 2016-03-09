<div class="quick-bg">
    <div id="spacer" style="margin-bottom:15px;">
        <div id="rc-bg">Menu</div>
    </div>
    <?php foreach ($categories as $category) { ?>
        <div class='quick-links'>»<a href='<?=Yii::$app->urlManager->createUrl(['car/category', 'id'=>$category['id']])?>'><?php echo $category['category_name']; ?></a></div>
    <?php } ?>
</div>
