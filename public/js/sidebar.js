const showMenu = (headerToggle, navbarId) => {
  const toggleBtn = document.getElementById(headerToggle);
  const nav = document.getElementById(navbarId);

  if (toggleBtn && nav) {
    toggleBtn.addEventListener('click', () => {
      nav.classList.toggle('show-menu');
      toggleBtn.classList.toggle('bx-x');
    });

    document.addEventListener('click', (event) => {
      const target = event.target;
      const isSideBarOpen = nav.classList.contains('show-menu');

      if (isSideBarOpen && !target.closest('#' + navbarId) && !target.closest('#' + headerToggle)) {
        nav.classList.remove('show-menu');
        toggleBtn.classList.remove('bx-x');
      }
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
