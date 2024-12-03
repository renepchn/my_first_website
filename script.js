function showPage(pageId) {
    const pages = document.querySelectorAll('.page');
    
    pages.forEach(page => {
        page.style.display = 'none'; 
    });

document.getElementById(pageId).style.display = 'block'; 
}

document.addEventListener('DOMContentLoaded', (event) => {
    showPage('home'); 
});