const darkModeIcon = document.getElementById('darkModeIcon');
const darkModeToggle = document.getElementById('darkModeToggle');
const darkModeName = document.getElementById('darkModeName');
const body = document.body;
const darkModeKey = 'darkMode';

let isDarkMode = localStorage.getItem(darkModeKey) === 'true';

darkModeIcon.classList.toggle('bx-sun', isDarkMode);
darkModeIcon.classList.toggle('bx-moon', !isDarkMode);
darkModeName.textContent = isDarkMode ? 'Modo Claro' : 'Modo Escuro';

darkModeToggle.addEventListener('click', toggleDarkMode);
function toggleDarkMode() {
    isDarkMode = !isDarkMode;
    body.classList.toggle('dark-mode', isDarkMode);
    localStorage.setItem(darkModeKey, isDarkMode);
    darkModeIcon.classList.toggle('bx-sun', isDarkMode);
    darkModeIcon.classList.toggle('bx-moon', !isDarkMode);
    darkModeName.textContent = isDarkMode ? 'Modo Claro' : 'Modo Escuro';
}

if (isDarkMode) {
    body.classList.add('dark-mode');
}
