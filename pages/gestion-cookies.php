<section class="hero-section" style="height: 60vh; background: var(--anthracite); color: var(--white); display: flex; align-items: center;">
  <div class="container" data-anim="fade-bottom">
    <h1 style="color: var(--white);">GESTION DES COOKIES</h1>
    <p style="color: var(--gris-clair); font-size: var(--text-medium);">Gérez vos préférences de cookies et de confidentialité.</p>
  </div>
</section>

<section class="cookie-management-section">
  <div class="container" style="max-width: 900px;">
    
    <p style="margin-bottom: 2rem;">
      Vous pouvez à tout moment modifier vos préférences concernant les cookies utilisés sur ce site. 
      Les cookies essentiels sont nécessaires au fonctionnement du site et ne peuvent pas être désactivés.
    </p>

    <!-- Cookies essentiels -->
    <div class="cookie-category">
      <h3>Cookies essentiels</h3>
      <p>
        Ces cookies sont strictement nécessaires au fonctionnement du site web. Ils permettent de naviguer 
        sur le site et d'utiliser ses fonctionnalités de base. Sans ces cookies, certains services ne peuvent 
        pas être fournis.
      </p>
      <div class="cookie-toggle">
        <div class="cookie-toggle-switch active" style="opacity: 0.6; cursor: not-allowed;" title="Toujours activé"></div>
        <span class="cookie-toggle-label">Toujours activé (obligatoire)</span>
      </div>
      <p style="margin-top: 1rem; font-size: var(--text-small); color: var(--gris);">
        Exemples : cookies de session, préférences de langue, consentement aux cookies.
      </p>
    </div>

    <!-- Cookies analytiques -->
    <div class="cookie-category">
      <h3>Cookies analytiques</h3>
      <p>
        Ces cookies nous permettent de comprendre comment les visiteurs interagissent avec notre site web 
        en collectant et rapportant des informations de manière anonyme. Ces données nous aident à améliorer 
        le fonctionnement du site.
      </p>
      <div class="cookie-toggle">
        <div class="cookie-toggle-switch" id="toggle-analytics"></div>
        <span class="cookie-toggle-label" id="label-analytics">Désactivé</span>
      </div>
      <p style="margin-top: 1rem; font-size: var(--text-small); color: var(--gris);">
        Utilisé pour : Google Analytics (mesure d'audience, statistiques de visite).
      </p>
    </div>

    <!-- Cookies marketing -->
    <div class="cookie-category">
      <h3>Cookies marketing</h3>
      <p>
        Ces cookies sont utilisés pour suivre les visiteurs sur différents sites web dans le but d'afficher 
        des publicités pertinentes et engageantes pour chaque utilisateur. Ces cookies peuvent également être 
        utilisés pour mesurer l'efficacité des campagnes publicitaires.
      </p>
      <div class="cookie-toggle">
        <div class="cookie-toggle-switch" id="toggle-marketing"></div>
        <span class="cookie-toggle-label" id="label-marketing">Désactivé</span>
      </div>
      <p style="margin-top: 1rem; font-size: var(--text-small); color: var(--gris);">
        Actuellement non utilisé sur ce site.
      </p>
    </div>

    <button id="save-cookie-preferences" class="cookie-save-btn">
      Enregistrer mes préférences
    </button>

    <div id="cookie-save-message" style="margin-top: 1rem; padding: 1rem; border-radius: 6px; display: none;"></div>

    <div style="margin-top: 3rem; padding-top: 2rem; border-top: 1px solid var(--gris-clair);">
      <h3>Informations complémentaires</h3>
      <p>
        Pour plus d'informations sur l'utilisation des cookies et la protection de vos données personnelles, 
        consultez notre <a href="<?= isset($BASE_URL) ? $BASE_URL : '/debarenov/' ?>politique-confidentialite">politique de confidentialité</a>.
      </p>
      <p style="margin-top: 1rem;">
        Vous pouvez également supprimer les cookies déjà stockés sur votre ordinateur en modifiant les 
        paramètres de votre navigateur. Notez que cela peut affecter certaines fonctionnalités du site.
      </p>
    </div>

  </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', () => {
  // Récupérer le consentement actuel
  function getCookieConsent() {
    const consentCookie = document.cookie.split(';').find(c => c.trim().startsWith('debarenov_cookie_consent='));
    if (!consentCookie) return null;
    try {
      return JSON.parse(decodeURIComponent(consentCookie.split('=')[1]));
    } catch (e) {
      return null;
    }
  }

  const consent = getCookieConsent();
  const analyticsToggle = document.getElementById('toggle-analytics');
  const marketingToggle = document.getElementById('toggle-marketing');
  const labelAnalytics = document.getElementById('label-analytics');
  const labelMarketing = document.getElementById('label-marketing');
  const saveBtn = document.getElementById('save-cookie-preferences');
  const messageDiv = document.getElementById('cookie-save-message');

  // Initialiser les toggles selon le consentement actuel
  if (consent) {
    if (consent.analytics) {
      analyticsToggle.classList.add('active');
      labelAnalytics.textContent = 'Activé';
    }
    if (consent.marketing) {
      marketingToggle.classList.add('active');
      labelMarketing.textContent = 'Activé';
    }
  }

  // Gestion du toggle analytics
  analyticsToggle.addEventListener('click', () => {
    analyticsToggle.classList.toggle('active');
    labelAnalytics.textContent = analyticsToggle.classList.contains('active') ? 'Activé' : 'Désactivé';
  });

  // Gestion du toggle marketing
  marketingToggle.addEventListener('click', () => {
    marketingToggle.classList.toggle('active');
    labelMarketing.textContent = marketingToggle.classList.contains('active') ? 'Activé' : 'Désactivé';
  });

  // Sauvegarder les préférences
  saveBtn.addEventListener('click', () => {
    const preferences = {
      analytics: analyticsToggle.classList.contains('active'),
      marketing: marketingToggle.classList.contains('active')
    };

    // Sauvegarder dans un cookie
    const consentData = {
      essential: true,
      analytics: preferences.analytics,
      marketing: preferences.marketing,
      date: new Date().toISOString()
    };

    const date = new Date();
    date.setTime(date.getTime() + (365 * 24 * 60 * 60 * 1000));
    const expires = 'expires=' + date.toUTCString();
    document.cookie = 'debarenov_cookie_consent=' + encodeURIComponent(JSON.stringify(consentData)) + ';' + expires + ';path=/;SameSite=Lax';

    // Recharger les scripts selon les nouvelles préférences
    // Le cookieManager sera chargé via script.js, donc on recharge la page pour appliquer les changements
    setTimeout(() => {
      window.location.reload();
    }, 1000);

    // Afficher le message de confirmation
    messageDiv.style.display = 'block';
    messageDiv.style.background = '#d4edda';
    messageDiv.style.color = '#155724';
    messageDiv.style.border = '1px solid #c3e6cb';
    messageDiv.textContent = '✓ Vos préférences ont été enregistrées avec succès.';
    
    setTimeout(() => {
      messageDiv.style.display = 'none';
    }, 5000);
  });
});
</script>
