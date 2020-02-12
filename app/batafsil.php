<?php
    include 'db.php';

    $id = $_GET['id'];
    
    $query1 = $connection
              ->query('UPDATE `news` SET `view`=`view`+1 WHERE `id`='.$id);
    
    $query = $connection
        ->query("SELECT `id`,`title`,`img`,`created_at`,`content` FROM `news` WHERE `id`=".$id);
    $news = $query->fetch();
    
?>
        