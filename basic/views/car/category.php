<?php foreach ($articles as $article) { ?>
    <div style='margin:10px;border-bottom:2px solid #c2c2c2'>
    <p style='font-size:18px'><?php echo $article['articles_title'];?></p>
    <p><?php echo $article['articles_date']?></p>
    <p><img style='margin-right:5px' width='150px' align='left' src='<?php echo $article['articles_img']?>'>
        <?php echo $article['articles_short_description']?></p>
    <p><a href="<?=Yii::$app->urlManager->createUrl(['car/article', 'id'=>$article['id']])?>">Читать далее...</a></p>
<?php } ?>