<?php
    $Page = "Home";
    $JS = "home";
    $CSS = $JS;
    if(is_null($root)){
        include_once('../config.php');
    }
    include_once($root."/src/php/pages/comic.php");
    include_once($root."/pages/templates/top.php");
?>
    <section>
        <div class="comic">
            <img src="<?=$img1?>" style="max-width: 150px;">
            <span><?=$txt1?></span>
        </div>
    </section>
<?php 
    include_once($root."/pages/templates/bottom.php");
?>