/**
 * Bouton scroll to top
 * Affiche/masque le bouton selon le scroll et gère le retour en haut de page
 */

// Fonction d'initialisation avec retry
function initScrollToTop() {
  const scrollToTopBtn = document.getElementById('scroll-to-top');
  
  if (!scrollToTopBtn) {
    console.warn('[Scroll-to-top] Bouton introuvable dans le DOM, nouvelle tentative dans 100ms...');
    setTimeout(initScrollToTop, 100);
    return;
  }

  console.log('[Scroll-to-top] Bouton trouvé et initialisé');
  console.log('[Scroll-to-top] Position:', scrollToTopBtn.getBoundingClientRect());
  console.log('[Scroll-to-top] Styles appliqués:', window.getComputedStyle(scrollToTopBtn).display);

  // Fonction pour afficher/masquer le bouton
  function toggleScrollButton() {
    const scrollY = window.scrollY || window.pageYOffset || document.documentElement.scrollTop;
    console.log('[Scroll-to-top] Scroll Y:', scrollY);
    
    // TEMPORAIRE : Le bouton est toujours visible pour test
    // Une fois confirmé que le bouton apparaît, on remettra la logique normale
    // Réduire le seuil à 100px pour faciliter les tests et rendre le bouton plus accessible
    if (scrollY > 100) {
      scrollToTopBtn.classList.add('show');
      console.log('[Scroll-to-top] Bouton affiché (scroll > 100px)');
    } else {
      scrollToTopBtn.classList.remove('show');
      console.log('[Scroll-to-top] Bouton masqué (scroll <= 100px)');
    }
  }

  // Fonction pour remonter en haut de la page avec animation douce
  function scrollToTop() {
    window.scrollTo({
      top: 0,
      behavior: 'smooth'
    });
  }

  // Écouter le scroll
  window.addEventListener('scroll', toggleScrollButton);
  
  // Initialiser l'état du bouton au chargement
  toggleScrollButton();

  // Gérer le clic sur le bouton
  scrollToTopBtn.addEventListener('click', () => {
    console.log('[Scroll-to-top] Clic détecté, scroll vers le haut');
    scrollToTop();
  });

  // Ajuster la position du bouton si le bandeau de cookies est visible
  function adjustButtonPosition() {
    const cookieBanner = document.getElementById('cookie-banner');
    if (cookieBanner && cookieBanner.classList.contains('show')) {
      const bannerHeight = cookieBanner.offsetHeight;
      document.documentElement.style.setProperty('--cookie-banner-height', `${bannerHeight}px`);
      scrollToTopBtn.classList.add('has-cookie-banner');
      console.log('[Scroll-to-top] Position ajustée pour le bandeau de cookies:', bannerHeight + 'px');
    } else {
      document.documentElement.style.setProperty('--cookie-banner-height', '0px');
      scrollToTopBtn.classList.remove('has-cookie-banner');
    }
  }

  // Observer les changements du bandeau de cookies
  const cookieBanner = document.getElementById('cookie-banner');
  if (cookieBanner) {
    const observer = new MutationObserver(() => {
      adjustButtonPosition();
    });

    observer.observe(cookieBanner, {
      attributes: true,
      attributeFilter: ['class', 'style']
    });

    // Observer aussi les changements de taille
    const resizeObserver = new ResizeObserver(() => {
      adjustButtonPosition();
    });
    resizeObserver.observe(cookieBanner);

    // Ajuster au chargement et après un court délai pour laisser le temps au bandeau de s'afficher
    adjustButtonPosition();
    setTimeout(adjustButtonPosition, 500);
  }
}

// Initialiser dès que le DOM est prêt
if (document.readyState === 'loading') {
  document.addEventListener('DOMContentLoaded', initScrollToTop);
} else {
  // DOM déjà chargé
  console.log('[Scroll-to-top] DOM déjà chargé, initialisation immédiate');
  initScrollToTop();
}

// Fallback : réessayer après un délai supplémentaire
setTimeout(() => {
  const btn = document.getElementById('scroll-to-top');
  if (btn) {
    console.log('[Scroll-to-top] Fallback : bouton vérifié après délai');
    const styles = window.getComputedStyle(btn);
    console.log('[Scroll-to-top] Styles finaux - Display:', styles.display, 'Opacity:', styles.opacity, 'Visibility:', styles.visibility);
  } else {
    console.error('[Scroll-to-top] Fallback : bouton toujours introuvable après délai');
  }
}, 1000);
