    <!-- ============================
      SECTION FOOTER
  ============================ -->
    <footer class="debarenov-footer">
    <div class="container footer-grid">

      <!-- COLONNE 1 : NAVIGATION + LIENS UTILES -->
      <div class="footer-column">
        <h4>Navigation</h4>
        <ul>
          <li><a href="<?= $BASE_URL ?>#services-debarenov">Services</a></li>
          <li><a href="<?= $BASE_URL ?>#about-debarenov">À propos</a></li>
          <li><a href="<?= $BASE_URL ?>#contact-debarenov">Contact</a></li>
        </ul>

        <h4>Liens utiles</h4>
        <ul>
          <li><a href="<?= $BASE_URL ?>#copro-debarenov">Syndics & Copropriétés</a></li>
          <li><a href="<?= $BASE_URL ?>#reviews">Avis clients</a></li>
        </ul>
      </div>

      <!-- COLONNE 2 : LOGO + PHRASE -->
      <div class="footer-column footer-center">
        <img src="/assets/img/asset-2.svg" alt="Debarenov logo" class="footer-logo" />
        <p class="footer-tagline">
          Débarras • Nettoyage  • Rénovation • Remise en état
          
        </p>
      </div>

      <!-- COLONNE 3 : CONTACT -->
      <div class="footer-column">
        <h4>Contact</h4>
        <p>📞 <a href="tel:+33148933946">Nous appeler en un clic</a></p>
        <p>✉️ <a href="mailto:contact@debarenov.com">Envoyer un email</a></p>
        <p>📍 Île-de-France & alentours</p>
      </div>

    </div>

    <div class="footer-bottom">
      <p>© 2025 Debarenov – Tous droits réservés.</p>
      <div class="footer-legal-links">
        <a href="<?= $BASE_URL ?>sitemap">Plan du site</a>
        <a href="<?= $BASE_URL ?>conditions-generales">Conditions générales de service</a>
        <a href="<?= $BASE_URL ?>mentions-legales">Mentions légales</a>
        <a href="<?= $BASE_URL ?>politique-confidentialite">Politique de confidentialité</a>
        <a href="<?= $BASE_URL ?>gestion-cookies">Gestion des cookies</a>
      </div>
    </div>
  </footer>

  <!-- ============================
      BOUTON SCROLL TO TOP
  ============================ -->
  <button id="scroll-to-top" class="scroll-to-top-btn" aria-label="Remonter en haut de la page">
    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M10 5L5 10L6.41 11.41L10 7.83L13.59 11.41L15 10L10 5Z" fill="currentColor"/>
    </svg>
  </button>

  <!-- ============================
      BANDEAU CONSENTEMENT COOKIES
  ============================ -->
  <div id="cookie-banner" style="display: none;">
    <div class="cookie-banner-content">
      <div class="cookie-banner-text">
        <p>
          Ce site utilise des cookies pour améliorer votre expérience de navigation et analyser le trafic. 
          En cliquant sur "Tout accepter", vous acceptez l'utilisation de tous les cookies. 
          Vous pouvez également <a href="<?= $BASE_URL ?>gestion-cookies">personnaliser vos préférences</a> 
          ou consulter notre <a href="<?= $BASE_URL ?>politique-confidentialite">politique de confidentialité</a>.
        </p>
      </div>
      <div class="cookie-banner-actions">
        <button id="cookie-accept-all" class="cookie-btn cookie-btn-primary">
          Tout accepter
        </button>
        <button id="cookie-reject-all" class="cookie-btn cookie-btn-secondary">
          Tout refuser
        </button>
        <button id="cookie-customize" class="cookie-btn cookie-btn-outline">
          Personnaliser
        </button>
      </div>
    </div>
  </div>

   <!-- SCRIPTS -->
    <script src="<?= $BASE_URL ?>assets/js/script.js" type="module" defer></script>
</body>
</html>
