<div class="heading">
    <div class="toplinks" style="padding-left:30px;">
        <a href="<?= Yii::$app->homeUrl?>">Главная</a></div>
    <div class="sap2">::</div>
    <div class="toplinks" style="padding-left:30px;">
    </div>
    <?php $i = 1;?>
    <?php foreach ($menus as $menu) { ?>
        <div class='toplinks'>
            <a href="<?=Yii::$app->urlManager->createUrl(['car/menu', 'id'=>$menu->id])?>">
                <?php echo $menu['menu_name']; ?></a>
        </div>
        <?php if($i != count($menus)) { ?>
            <div class='sap2'>::</div>
        <?php }?>
        <?php $i++;?>
    <?php } ?>
</div>
