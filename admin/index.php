<?php
    include 'core/check.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
    <a href="logout.php">Chiqish</a>
    Admin qismi
    <?php echo $_SESSION['user_data']['full_name']; ?>
</body>
</html>