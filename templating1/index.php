<?php $name = "VYVA"?>
Hello templating, <?php echo $name?>!<br><br>

<?php

$animals_list = array("Lion","Wolf","Dog","Leopard","Tiger");

foreach($animals_list as $array_values){ ?>
    In the 🌲️, <?=$array_values?>s sleep tonight ...<br>

<?php }?>
