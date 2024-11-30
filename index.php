<?php
if (!isset($_COOKIE['User'])) {
    // Если куки нет, предложим пользователю авторизоваться или зарегистрироваться
    echo '<p> <a href="/registration.php">Зарегистрируйтесь</a> или <a href="/login.php">войдите</a>, чтобы просматривать контент!</p>';
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
            <h1>Здравствуйте! Меня зовут Печень И.И.</h1>
            <p>Я являюсь IT-специалистом с многолетним опытом работы в веб-разработке, сетевой безопасности и аналитике данных. Стремлюсь внедрять инновационные решения в различных проектах.</p>
            <img src="image/photo.jpeg" alt="Фотография специалиста">
        </div>
    </div>

    <div id="projects" class="page" style="display: none;">
        <div class="content">
            <h2>Проекты</h2>
            <ul>
                <li>
                    <h3>Проект 1: Разработка корпоративного веб-приложения</h3>
                    <p>Целью этого проекта была разработка полноценного корпоративного веб-приложения с использованием современных технологий, таких как React и Node.js. В результате была создана интуитивно понятная и высокопроизводительная платформа для внутреннего использования компании.</p>
                </li>
                <li>
                    <h3>Проект 2: Система мониторинга сетевой безопасности</h3>
                    <p>Проект включал в себя создание системы мониторинга и реагирования на угрозы в реальном времени. Основное внимание уделено автоматизации процессов обнаружения угроз с помощью машинного обучения и интеграции с существующими IT-ресурсами компании.</p>
                </li>
                <li>
                    <h3>Проект 3: Аналитическая платформа для обработки больших данных</h3>
                    <p>Разработана платформа для анализа больших данных в облаке, позволяющая агрегировать и обрабатывать данные из различных источников. Платформа использует технологии Apache Hadoop и Spark для выполнения распределенных вычислений и анализа.</p>
                </li>
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

    <script src="script.js"></script>
</body>
</html>