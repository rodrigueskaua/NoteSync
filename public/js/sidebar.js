const showMenu = (headerToggle, navbarId) => {
    const toggleBtn = document.getElementById(headerToggle);
    const nav = document.getElementById(navbarId);
    const content = document.querySelector('.main-page');

    if (toggleBtn && nav) {
        toggleBtn.addEventListener('click', () => {
            nav.classList.toggle('show-menu');
            toggleBtn.classList.toggle('bx-x');
            content.classList.toggle('blur');
        });

        const closeMenu = () => {
            nav.classList.remove('show-menu');
            toggleBtn.classList.remove('bx-x');
            content.classList.remove('blur');
        };

        document.addEventListener('click', (event) => {
            const target = event.target;
            const isSideBarOpen = nav.classList.contains('show-menu');

            if (isSideBarOpen && !target.closest('#' + navbarId) && !target.closest('#' + headerToggle)) {
                closeMenu();
            }
        });

        window.addEventListener('resize', () => {
            const isSideBarOpen = nav.classList.contains('show-menu');
            const blurActive = content.classList.contains('blur');
            if (isSideBarOpen || blurActive) {
                closeMenu();
            }
        });
        nav.addEventListener('mouseenter', () => {
            if (window.innerWidth > 768) {
                content.classList.add('blur');
            }
        });

        nav.addEventListener('mouseleave', () => {
            if (window.innerWidth > 768) {
                closeMenu();
            }
        });
    }
};

showMenu('header-toggle', 'navbar');

