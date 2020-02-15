<?php
    include 'core/access.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form method="POST">
        <label for="username1">
            Login
            <input id="username1" type="text" name="username">
        </label>
        <label for="password">
            Parol
            <input type="password" id="password" name="password">
        </label>
        <button type="submit">Kirish</button>
    </form>
</body>
</html>