document.getElementById('toggleButton').addEventListener('click', function() {
    const hiddenImage = document.getElementById('hiddenImage');
    if (hiddenImage.classList.contains('hidden')) {
        hiddenImage.classList.remove('hidden');
        this.textContent = 'Скрыть изображение';
    } else {
        hiddenImage.classList.add('hidden');
        this.textContent = 'Показать изображение';
    }
});