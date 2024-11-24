function showPage(pageId) {
    const pages = document.querySelectorAll('.page');
    pages.forEach(page => {
        page.style.display = 'none'; // Скрываем все страницы
    });

    document.getElementById(pageId).style.display = 'block'; // Показываем только нужную страницу
}