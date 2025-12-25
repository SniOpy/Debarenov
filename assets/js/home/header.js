// =============================
// HEADER MOBILE SYSTEM — VERSION CLEAN
// =============================

(function () {
  function initHeader() {
    const navToggle = document.getElementById('nav-toggle');
    const mainNav = document.getElementById('main-nav');

    if (!navToggle || !mainNav) return;

    // 👉 Toggle menu principal
    navToggle.addEventListener('click', function (e) {
      e.stopPropagation();
      mainNav.classList.toggle('open');
    });

    // 👉 Fermer si clic hors menu
    document.addEventListener('click', function (e) {
      if (!mainNav.contains(e.target) && !navToggle.contains(e.target)) {
        mainNav.classList.remove('open');
      }
    });

    // 👉 Sous-menu mobile uniquement
    const submenuLinks = document.querySelectorAll('.submenu-toggle');

    submenuLinks.forEach((link) => {
      link.addEventListener('click', function (e) {
        if (window.innerWidth <= 1024) {
          e.preventDefault();

          const submenu = link.nextElementSibling;

          // Fermer les autres sous-menus pour éviter les overlaps
          document.querySelectorAll('.submenu.open').forEach((openMenu) => {
            if (openMenu !== submenu) openMenu.classList.remove('open');
          });

          submenu.classList.toggle('open');
        }
      });
    });
  }

  // Lancer à la fin du chargement du DOM
  document.addEventListener('DOMContentLoaded', initHeader);
})();
