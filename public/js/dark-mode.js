var darkModeIcon = document.getElementById('darkModeIcon');
var darkModeToggle = document.getElementById('darkModeToggle');
var darkModeName = document.getElementById('darkModeName');

// Verifica se o modo dark está ativado no armazenamento local (localStorage)
var isDarkMode = localStorage.getItem('darkMode') === 'true';

// Aplica o estado inicial do ícone do modo dark
darkModeIcon.classList.toggle('bx-sun', isDarkMode);
darkModeIcon.classList.toggle('bx-moon', !isDarkMode);
darkModeName.textContent = isDarkMode ? 'Modo Claro' : 'Modo Escuro';

darkModeToggle.addEventListener('click', toggleDarkMode);

function toggleDarkMode() {
    var body = document.body;
    var isDarkMode = body.classList.toggle('dark-mode');

    // Define o modo atual no armazenamento local (localStorage)
    localStorage.setItem('darkMode', isDarkMode);

    // Atualiza o ícone do modo dark
    darkModeIcon.classList.toggle('bx-sun', isDarkMode);
    darkModeIcon.classList.toggle('bx-moon', !isDarkMode);
    darkModeName.textContent = isDarkMode ? 'Modo Claro' : 'Modo Escuro';

}

// Verifica se o modo dark está ativado no carregamento da página
if (isDarkMode) {
    document.body.classList.add('dark-mode');
}
