<?php
if (!isset($_COOKIE['User'])) {
    echo '<p><a href="/register_user.php">Зарегистрируйтесь</a> или <a href="/login_user.php">войдите</a>, чтобы просматривать контент!</p>';
    exit();
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Сайт-визитка IT-специалиста</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="navbar">
        <button onclick="showPage('home')">Главная</button>
        <button onclick="showPage('projects')">Проекты</button>
        <button onclick="showPage('contacts')">Контакты</button>
    </div>

    <div id="home" class="page">
        <div class="content">
            <h1>Здравствуйте! Меня зовут </h1>
            <p>Я являюсь IT-специалистом с многолетним опытом работы в веб-разработке, сетевой безопасности и аналитике данных.</p>
            <img src="image/photo.jpeg" alt="Фотография специалиста">
        </div>
    </div>

    <div id="projects" class="page" style="display: none;">
        <div class="content">
            <h2>Проекты</h2>
            <ul>
                <li><h3>Проект 1: Разработка корпоративного веб-приложения</h3><p>С созданием интуитивно понятной платформы.</p></li>
                <li><h3>Проект 2: Система мониторинга сетевой безопасности</h3><p>Мониторинг и реагирование на угрозы.</p></li>
                <li><h3>Проект 3: Аналитическая платформа</h3><p>Обработка больших данных.</p></li>
            </ul>
            <img src="image/projects.jpeg" alt="Изображение проектов">
        </div>
    </div>

    <div id="contacts" class="page" style="display: none;">
        <div class="content">
            <h2>Контакты</h2>
            <p>Email: e-mail@mail.ru</p>
            <p>LinkedIn: <a href="https://linkedin.com/in/example">linkedin.com/in/exampleov</a></p>
            <img src="image/contacts.jpeg" alt="Изображение контактов">
        </div>
    </div>

    </script>
    <script src="script.js"></script>
</body>
</html>

