<?php
require_once('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $conn = new mysqli($servername, $username, $password, $dbName);
    if ($conn->connect_error) {
        die("Ошибка подключения: " . $conn->connect_error);
    }

    $username = $conn->real_escape_string($username);

    $sql = "SELECT password FROM users WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            setcookie('User', $username, time() + (86400 * 30), "/");
            header("Location: index.php");
            exit();
        } else {
            echo "Неверный пароль!";
        }
    } else {
        echo "Пользователь не найден!";
    }

    $conn->close();
}
?>

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