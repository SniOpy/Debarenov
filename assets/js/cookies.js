/**
 * Système de gestion des cookies conforme RGPD
 * Gère le consentement et le stockage des préférences utilisateur
 */

class CookieManager {
  constructor() {
    this.cookieName = 'debarenov_cookie_consent';
    this.cookieExpiry = 365; // jours
    this.consent = this.getConsent();
  }

  /**
   * Récupère le consentement stocké
   */
  getConsent() {
    const consentCookie = this.getCookie(this.cookieName);
    if (!consentCookie) {
      return null;
    }
    try {
      return JSON.parse(consentCookie);
    } catch (e) {
      return null;
    }
  }

  /**
   * Vérifie si le consentement a été donné
   */
  hasConsent() {
    return this.consent !== null;
  }

  /**
   * Vérifie si une catégorie de cookies est acceptée
   */
  isCategoryAccepted(category) {
    if (!this.hasConsent()) {
      return false;
    }
    return this.consent[category] === true;
  }

  /**
   * Sauvegarde le consentement
   */
  saveConsent(preferences) {
    const consentData = {
      essential: true, // Toujours true
      analytics: preferences.analytics || false,
      marketing: preferences.marketing || false,
      date: new Date().toISOString()
    };

    this.setCookie(this.cookieName, JSON.stringify(consentData), this.cookieExpiry);
    this.consent = consentData;

    // Déclencher les scripts selon le consentement
    this.loadScripts(consentData);

    // Masquer le bandeau
    this.hideBanner();
  }

  /**
   * Charge les scripts selon le consentement
   */
  loadScripts(consent) {
    // Google Analytics - seulement si analytics accepté
    if (consent.analytics) {
      this.loadGoogleAnalytics();
    } else {
      this.removeGoogleAnalytics();
    }

    // Scripts marketing - seulement si marketing accepté
    if (consent.marketing) {
      this.loadMarketingScripts();
    } else {
      this.removeMarketingScripts();
    }
  }

  /**
   * Charge Google Analytics
   */
  loadGoogleAnalytics() {
    // Vérifier si déjà chargé
    if (window.gtag || document.querySelector('script[src*="gtag"]')) {
      return;
    }

    // Charger gtag.js
    const script1 = document.createElement('script');
    script1.async = true;
    script1.src = 'https://www.googletagmanager.com/gtag/js?id=AW-17870538050';
    document.head.appendChild(script1);

    // Initialiser gtag
    window.dataLayer = window.dataLayer || [];
    function gtag() {
      window.dataLayer.push(arguments);
    }
    window.gtag = gtag;
    gtag('js', new Date());
    gtag('config', 'AW-17870538050');
  }

  /**
   * Supprime Google Analytics
   */
  removeGoogleAnalytics() {
    // Supprimer les scripts
    document.querySelectorAll('script[src*="gtag"], script[src*="googletagmanager"]').forEach(script => {
      script.remove();
    });

    // Désactiver gtag si présent
    if (window.gtag) {
      window.gtag = function() {};
    }
    if (window.dataLayer) {
      window.dataLayer = [];
    }
  }

  /**
   * Charge les scripts marketing (à personnaliser selon besoins)
   */
  loadMarketingScripts() {
    // Placeholder pour scripts marketing futurs
    // Exemple : Facebook Pixel, LinkedIn Insight Tag, etc.
  }

  /**
   * Supprime les scripts marketing
   */
  removeMarketingScripts() {
    // Placeholder pour suppression scripts marketing
  }

  /**
   * Affiche le bandeau de consentement
   */
  showBanner() {
    const banner = document.getElementById('cookie-banner');
    if (banner) {
      banner.style.display = 'block';
      setTimeout(() => {
        banner.classList.add('show');
      }, 100);
    }
  }

  /**
   * Masque le bandeau de consentement
   */
  hideBanner() {
    const banner = document.getElementById('cookie-banner');
    if (banner) {
      banner.classList.remove('show');
      setTimeout(() => {
        banner.style.display = 'none';
      }, 300);
    }
  }

  /**
   * Obtient une valeur de cookie
   */
  getCookie(name) {
    const nameEQ = name + '=';
    const ca = document.cookie.split(';');
    for (let i = 0; i < ca.length; i++) {
      let c = ca[i];
      while (c.charAt(0) === ' ') c = c.substring(1, c.length);
      if (c.indexOf(nameEQ) === 0) {
        return decodeURIComponent(c.substring(nameEQ.length, c.length));
      }
    }
    return null;
  }

  /**
   * Définit un cookie
   */
  setCookie(name, value, days) {
    const date = new Date();
    date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
    const expires = 'expires=' + date.toUTCString();
    document.cookie = name + '=' + encodeURIComponent(value) + ';' + expires + ';path=/;SameSite=Lax';
  }

  /**
   * Supprime un cookie
   */
  deleteCookie(name) {
    document.cookie = name + '=;expires=Thu, 01 Jan 1970 00:00:00 UTC;path=/;';
  }
}

// Initialiser le gestionnaire de cookies
const cookieManager = new CookieManager();

// Gestion des boutons du bandeau
document.addEventListener('DOMContentLoaded', () => {
  const banner = document.getElementById('cookie-banner');
  
  if (!cookieManager.hasConsent() && banner) {
    cookieManager.showBanner();
  } else if (cookieManager.hasConsent()) {
    // Charger les scripts selon le consentement existant
    cookieManager.loadScripts(cookieManager.consent);
  }

  // Bouton "Tout accepter"
  const acceptAllBtn = document.getElementById('cookie-accept-all');
  if (acceptAllBtn) {
    acceptAllBtn.addEventListener('click', () => {
      cookieManager.saveConsent({
        analytics: true,
        marketing: true
      });
    });
  }

  // Bouton "Tout refuser"
  const rejectAllBtn = document.getElementById('cookie-reject-all');
  if (rejectAllBtn) {
    rejectAllBtn.addEventListener('click', () => {
      cookieManager.saveConsent({
        analytics: false,
        marketing: false
      });
    });
  }

  // Bouton "Personnaliser"
  const customizeBtn = document.getElementById('cookie-customize');
  if (customizeBtn) {
    customizeBtn.addEventListener('click', () => {
      // Récupérer BASE_URL depuis un lien existant ou utiliser le chemin relatif
      const sitemapLink = document.querySelector('a[href*="sitemap"]');
      if (sitemapLink) {
        const href = sitemapLink.getAttribute('href');
        const baseUrl = href.replace('sitemap', '');
        window.location.href = baseUrl + 'gestion-cookies';
      } else {
        window.location.href = './gestion-cookies';
      }
    });
  }
});

// Export pour utilisation dans d'autres scripts
if (typeof module !== 'undefined' && module.exports) {
  module.exports = CookieManager;
}
