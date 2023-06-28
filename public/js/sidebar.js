const showMenu = (headerToggle, navbarId, contentId) => {
    const toggleBtn = document.getElementById(headerToggle);
    const nav = document.getElementById(navbarId);
    const content = document.querySelector('.main-page');


    if (toggleBtn && nav) {
        toggleBtn.addEventListener('click', () => {
            nav.classList.toggle('show-menu');
            toggleBtn.classList.toggle('bx-x');
            content.classList.toggle('blur');
        });

        document.addEventListener('click', (event) => {
            const target = event.target;
            const isSideBarOpen = nav.classList.contains('show-menu');

            if (isSideBarOpen && !target.closest('#' + navbarId) && !target.closest('#' + headerToggle)) {
                nav.classList.remove('show-menu');
                toggleBtn.classList.remove('bx-x');
                content.classList.remove('blur');
            }
        });

        nav.addEventListener('mouseover', () => {
            content.classList.add('blur');
        });

        nav.addEventListener('mouseout', () => {
            content.classList.remove('blur');
        });
    }
};

showMenu('header-toggle', 'navbar');

/*==================== LINK ACTIVE ====================*/
const linkColor = document.querySelectorAll('.nav-link')

function colorLink() {
    linkColor.forEach(l => l.classList.remove('active'))
    this.classList.add('active')
}

linkColor.forEach(l => l.addEventListener('click', colorLink))
