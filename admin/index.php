<?php
    include 'core/check.php';
    include 'core/news.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
    <a href="logout.php">Chiqish</a> <?php echo $_SESSION['user_data']['full_name']; ?>
    <h3>Yangiliklar ro`yxati</h3>
    <table>
        <thead>
            <th>Sarlavha</th>
            <th>Sanasi</th>
            <th>Ko`rilgan</th>
            <th>Amallar</th>
        </thead>
        <tbody>
        <?php foreach ($items as $item): ?>
            <tr>
                <td><?= $item['title'] ?></td>
                <td><?= $item['created_at'] ?></td>
                <td><?= $item['view'] ?></td>
                <td>
                    <a href="update.php?id=<?=$item['id']?>">O`zgartirish</a>
                    <a href="delete.php?id=<?=$item['id']?>">O`chirish</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?php for($index = 1; $index <= $pages; $index++): ?>
        <a href="index.php?page=<?=$index?>"><?=$index?> |</a>
    <?php endfor; ?>
</body>
</html>