<?php
if (!isset($_COOKIE['User'])) {
    header("Location: login_user.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Главная страница</title>
</head>
<body>
    <h1>Добро пожаловать, <?php echo htmlspecialchars($_COOKIE['User']); ?>!</h1>
    <nav>
        <a href="register_user.php">Регистрация</a>
        <a href="login_user.php">Авторизация</a>
        <a href="logout.php">Выйти</a>
    </nav>
    <div>
        <p>Это защищенная страница.</p>
        <p>Здесь вы можете размещать контент для авторизованных пользователей.</p>
    </div>
</body>
</html>

<?php

if (isset($_COOKIE['User'])) {
    setcookie('User', '', time() - 3600, "/");
    header("Location: login_user.php");
    exit();
}
?>