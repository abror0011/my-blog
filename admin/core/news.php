<?php
    
    include '../app/db.php';

    $sql = 'SELECT COUNT(*) AS `count_news` FROM `news`';

    $limit = 5;
    $count = $connection->query($sql)->fetch();
    // echo $count['count_news']; exit;
    $pages = ceil($count['count_news']/$limit);
    
    $offset = 0;
    if(isset($_GET['page']))
    {
        $offset = ($_GET['page'] - 1) * $limit;
    }

    $query = $connection
    ->query('SELECT * FROM `news` ORDER BY `id` DESC LIMIT '.$limit.' OFFSET '.$offset);

    $items = $query->fetchAll();
