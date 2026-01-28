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

    // 👉 Sous-menu mobile avec hover et clic
    const submenuLinks = document.querySelectorAll('.submenu-toggle');
    const hasSubmenus = document.querySelectorAll('.has-submenu');
    let hoverTimeout = null;

    // Annuler le délai de fermeture si on survole n'importe quel élément du menu
    mainNav.addEventListener('mouseenter', function () {
      if (hoverTimeout) {
        clearTimeout(hoverTimeout);
        hoverTimeout = null;
      }
    });

    // Fermer le sous-menu seulement si on quitte complètement la zone du menu
    mainNav.addEventListener('mouseleave', function () {
      if (window.innerWidth <= 1024 && mainNav.classList.contains('open')) {
        hoverTimeout = setTimeout(() => {
          document.querySelectorAll('.submenu.open').forEach((openMenu) => {
            openMenu.classList.remove('open');
          });
        }, 200);
      }
    });

    // Gestion du hover pour un affichage immédiat (tous niveaux de sous-menus)
    hasSubmenus.forEach((submenuItem) => {
      const submenu = submenuItem.querySelector('.submenu');
      if (!submenu) return;

      // Ouvrir au hover
      submenuItem.addEventListener('mouseenter', function () {
        if (window.innerWidth <= 1024 && mainNav.classList.contains('open')) {
          // Annuler tout délai de fermeture en cours
          if (hoverTimeout) {
            clearTimeout(hoverTimeout);
            hoverTimeout = null;
          }

          // Fermer les autres sous-menus du même niveau pour éviter les overlaps
          const parentSubmenu = submenuItem.closest('.submenu');
          if (parentSubmenu) {
            // Si c'est un sous-menu de niveau 2, fermer les autres sous-menus de niveau 2 du même parent
            parentSubmenu.querySelectorAll('.has-submenu > .submenu.open').forEach((openMenu) => {
              if (openMenu !== submenu) openMenu.classList.remove('open');
            });
          } else {
            // Si c'est un sous-menu de niveau 1, fermer les autres sous-menus de niveau 1
            document.querySelectorAll('.main-nav > ul > .has-submenu > .submenu.open').forEach((openMenu) => {
              if (openMenu !== submenu) openMenu.classList.remove('open');
            });
          }

          // Ouvrir le sous-menu immédiatement
          submenu.classList.add('open');
        }
      });

      // Garder ouvert si on survole le sous-menu lui-même
      submenu.addEventListener('mouseenter', function () {
        if (hoverTimeout) {
          clearTimeout(hoverTimeout);
          hoverTimeout = null;
        }
      });
    });

    // Gestion du clic comme alternative (fallback)
    submenuLinks.forEach((link) => {
      link.addEventListener('click', function (e) {
        if (window.innerWidth <= 1024) {
          e.preventDefault();

          const submenu = link.nextElementSibling;
          if (!submenu) return;

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
