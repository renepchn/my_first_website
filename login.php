<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Авторизация</title>
</head>
<body>
    <h1>Авторизация</h1>
    <form action="login_user.php" method="POST">
        <label>Имя пользователя:</label>
        <input type="text" name="username" required>
        <br>
        <label>Пароль:</label>
        <input type="password" name="password" required>
        <br>
        <button type="submit">Войти</button>
    </form>
</body>
</html>