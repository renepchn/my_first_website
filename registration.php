<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Регистрация</title>
</head>
<body>
    <h1>Регистрация</h1>
    <form action="register_user.php" method="POST">
        <label>Имя пользователя:</label>
        <input type="text" name="username" required>
        <br>
        <label>Пароль:</label>
        <input type="password" name="password" required>
        <br>
        <button type="submit">Зарегистрироваться</button>
    </form>
</body>
</html>