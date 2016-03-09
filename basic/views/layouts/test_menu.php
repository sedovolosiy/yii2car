<div class="heading">
    <div class="toplinks" style="padding-left:30px;">
        <a href="?option=main">Главная</a>
    </div>
    <div class="sap2">::</div>
    <?php $i = 1;?>
    <?php foreach($menu_top as $item) :?>
        <div class='toplinks'>
            <a href='?option=menu&id_menu=<?php echo $item['id_menu']?>'><?php echo $item['name_menu']?></a>
        </div>
        <?php if($i != count($menu_top)) :?>
            <div class='sap2'>::</div>
        <?php endif;?>
        <?php $i++;?>
    <?php endforeach; ?>
</div>



<ul>
    <?php foreach ($menus as $menu) { ?>
    <div class='toplinks'>
    <a href='=<?php echo ?>'><?php echo $menu['menu_name']; ?></a>
    </div>
    <?php } ?>
</ul>

<div class="heading">
    <div class="toplinks" style="padding-left:30px;">
        <a href="/">Главная</a>
    </div>
    <div class="sap2">::</div>
    <?php $i = 1;?>
    <?php foreach ($menus as $menu) { ?>
        <div class='toplinks'>
            <a href='=<?php echo ?>'><?php echo $menu['menu_name']; ?></a>
        </div>
        <?php if($i != count($memus)) :?>
            <div class='sap2'>::</div>
        <?php endif;?>
        <?php $i++;?>
    <?php } ?>
</div>