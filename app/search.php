<?php

    include 'db.php';

    

    if (isset($_GET['key'])) {
        $key = $_GET['key'];
        $key = '%'.trim($key).'%';
        // $query = $connection->query('SELECT * FROM `news` WHERE `title` LIKE "%'.$key.'%"');
        // $data = $query->fetchAll();

        $query = $connection->prepare("SELECT * FROM `news` 
                            WHERE `title` LIKE :key 
                            OR `short` LIKE :key 
                            OR `content` LIKE :key 
                            ORDER BY `id` DESC
                            LIMIT 5");

        $query->execute([':key' => $key]);
                
        $items = $query->fetchAll();
    }

    
