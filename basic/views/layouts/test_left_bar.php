<div class="quick-bg">
    <div id="spacer" style="margin-bottom:15px;">
        <div id="rc-bg">Menu</div>
    </div>
    <?php foreach($left_bar as $row) :?>
        <div class='quick-links'>
            » <a href='?option=category&id_cat=<?php echo $row['id_category']?>'><?php echo $row['name_category']?></a>
        </div>
    <?php endforeach;?>
</div>


<div class="quick-bg">
    <div id="spacer" style="margin-bottom:15px;">
        <div id="rc-bg">Menu</div>
    </div>
    <?php foreach ($categories as $category) { ?>
        <div class='quick-links'>
            »<a href=''><?php echo $category['category_name']; ?></a>
        </div>
    <?php } ?>
</div>