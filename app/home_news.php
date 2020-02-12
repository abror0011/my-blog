<?php
    include 'db.php';

    $query = $connection
             ->query('SELECT `id`, `title`, `img`, `short`, `created_at`,`view` FROM `news` ORDER BY `id` DESC LIMIT 4');

    $news_items = $query->fetchAll();