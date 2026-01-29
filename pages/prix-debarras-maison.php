<section class="hero-section" style="height: 60vh; background: var(--anthracite); color: var(--white); display: flex; align-items: center;">
  <div class="container" data-anim="fade-bottom">
    <h1 style="color: var(--white);">Prix débarras maison et appartement</h1>
    <p style="color: var(--gris-clair); font-size: var(--text-medium);">Tarifs indicatifs pour le débarras de votre logement. Devis gratuit et personnalisé.</p>
  </div>
</section>

<!-- ===========================
  INTRO PRIX DÉBARRAS MAISON
=========================== -->
<section class="about-debarenov" data-anim="fade-left">
  <div class="container about-wrapper">
    <div class="about-text">
      <span class="tag">Tarifs</span>
      <h2 class="about-title">
        Des tarifs transparents<br />
        pour votre logement
      </h2>
      <p class="about-description">
        Le prix d'un débarras de maison ou d'appartement dépend de plusieurs facteurs : la superficie du logement,
        le niveau d'encombrement, l'étage et l'accessibilité, le type de mobilier et d'objets à évacuer, ainsi que
        la situation spécifique (succession, déménagement, avant vente, etc.). Chaque logement est unique,
        c'est pourquoi nous proposons un devis gratuit et personnalisé après visite sur site.
      </p>
      <ul class="about-features">
        <li>✔️ Devis gratuit après visite sur site</li>
        <li>✔️ Tarifs transparents et détaillés</li>
        <li>✔️ Intervention sous 24-48h</li>
        <li>✔️ Tri et recyclage inclus</li>
      </ul>
    </div>
    <div class="about-image">
      <img src="<?= $BASE_URL ?>assets/img/about/debarras-appartement.jpg" alt="Prix débarras maison et appartement" loading="lazy" decoding="async" />
    </div>
  </div>
</section>

<!-- ===========================
  TABLEAUX DE TARIFS DÉBARRAS MAISON
=========================== -->
<section class="tarifs-section" data-anim="fade-right">
  <div class="container tarifs-container">
    
    <div class="tarifs-header">
      <span class="tag">Nos tarifs</span>
      <h2>Tarifs indicatifs par type de logement</h2>
      <p class="tarifs-intro">
        Les prix indiqués sont des fourchettes indicatives. Un devis personnalisé sera établi après visite sur site.
      </p>
    </div>

    <!-- Tableau Débarras Appartement -->
    <div class="tarif-table-wrapper">
      <table class="tarif-table">
        <thead>
          <tr>
            <th>Type de logement</th>
            <th>Superficie</th>
            <th>Difficulté</th>
            <th>Tarif indicatif</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Studio</td>
            <td>< 30 m²</td>
            <td><span class="difficulty-simple">Simple</span></td>
            <td class="tarif-price">300 - 500 €</td>
          </tr>
          <tr>
            <td>Studio</td>
            <td>< 30 m²</td>
            <td><span class="difficulty-complexe">Complexe</span></td>
            <td class="tarif-price">500 - 750 €</td>
          </tr>
          <tr>
            <td>2-3 pièces</td>
            <td>30-70 m²</td>
            <td><span class="difficulty-moyen">Moyen</span></td>
            <td class="tarif-price">500 - 800 €</td>
          </tr>
          <tr>
            <td>2-3 pièces</td>
            <td>30-70 m²</td>
            <td><span class="difficulty-complexe">Complexe</span></td>
            <td class="tarif-price">800 - 1200 €</td>
          </tr>
          <tr>
            <td>4+ pièces</td>
            <td>> 70 m²</td>
            <td><span class="difficulty-moyen">Moyen</span></td>
            <td class="tarif-price">800 - 1300 €</td>
          </tr>
          <tr>
            <td>4+ pièces</td>
            <td>> 70 m²</td>
            <td><span class="difficulty-complexe">Complexe</span></td>
            <td class="tarif-price">1300 - 2000 €</td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- Tableau Débarras Maison -->
    <div class="tarif-table-wrapper">
      <table class="tarif-table">
        <thead>
          <tr>
            <th>Type de logement</th>
            <th>Superficie</th>
            <th>Difficulté</th>
            <th>Tarif indicatif</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Petite maison</td>
            <td>< 70 m²</td>
            <td><span class="difficulty-moyen">Moyen</span></td>
            <td class="tarif-price">600 - 950 €</td>
          </tr>
          <tr>
            <td>Petite maison</td>
            <td>< 70 m²</td>
            <td><span class="difficulty-complexe">Complexe</span></td>
            <td class="tarif-price">950 - 1400 €</td>
          </tr>
          <tr>
            <td>Maison moyenne</td>
            <td>70-120 m²</td>
            <td><span class="difficulty-moyen">Moyen</span></td>
            <td class="tarif-price">800 - 1300 €</td>
          </tr>
          <tr>
            <td>Maison moyenne</td>
            <td>70-120 m²</td>
            <td><span class="difficulty-complexe">Complexe</span></td>
            <td class="tarif-price">1300 - 2000 €</td>
          </tr>
          <tr>
            <td>Grande maison</td>
            <td>> 120 m²</td>
            <td><span class="difficulty-moyen">Moyen</span></td>
            <td class="tarif-price">1200 - 1800 €</td>
          </tr>
          <tr>
            <td>Grande maison</td>
            <td>> 120 m²</td>
            <td><span class="difficulty-complexe">Complexe</span></td>
            <td class="tarif-price">1500 - 2500 €</td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- Tableau Débarras après Succession -->
    <div class="tarif-table-wrapper">
      <table class="tarif-table">
        <thead>
          <tr>
            <th>Situation</th>
            <th>Superficie</th>
            <th>Difficulté</th>
            <th>Tarif indicatif</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Débarras après succession</td>
            <td>< 50 m²</td>
            <td><span class="difficulty-moyen">Moyen</span></td>
            <td class="tarif-price">600 - 900 €</td>
          </tr>
          <tr>
            <td>Débarras après succession</td>
            <td>50-100 m²</td>
            <td><span class="difficulty-complexe">Complexe</span></td>
            <td class="tarif-price">900 - 1400 €</td>
          </tr>
          <tr>
            <td>Débarras après succession</td>
            <td>> 100 m²</td>
            <td><span class="difficulty-complexe">Complexe</span></td>
            <td class="tarif-price">1400 - 2200 €</td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- Tableau Débarras avant Vente -->
    <div class="tarif-table-wrapper">
      <table class="tarif-table">
        <thead>
          <tr>
            <th>Situation</th>
            <th>Superficie</th>
            <th>Difficulté</th>
            <th>Tarif indicatif</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Débarras avant vente</td>
            <td>< 50 m²</td>
            <td><span class="difficulty-simple">Simple</span></td>
            <td class="tarif-price">400 - 600 €</td>
          </tr>
          <tr>
            <td>Débarras avant vente</td>
            <td>50-100 m²</td>
            <td><span class="difficulty-moyen">Moyen</span></td>
            <td class="tarif-price">600 - 1000 €</td>
          </tr>
          <tr>
            <td>Débarras avant vente</td>
            <td>> 100 m²</td>
            <td><span class="difficulty-moyen">Moyen</span></td>
            <td class="tarif-price">1000 - 1600 €</td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- Tableau Débarras après Déménagement -->
    <div class="tarif-table-wrapper">
      <table class="tarif-table">
        <thead>
          <tr>
            <th>Situation</th>
            <th>Superficie</th>
            <th>Difficulté</th>
            <th>Tarif indicatif</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Débarras après déménagement</td>
            <td>< 50 m²</td>
            <td><span class="difficulty-simple">Simple</span></td>
            <td class="tarif-price">350 - 550 €</td>
          </tr>
          <tr>
            <td>Débarras après déménagement</td>
            <td>50-100 m²</td>
            <td><span class="difficulty-moyen">Moyen</span></td>
            <td class="tarif-price">550 - 900 €</td>
          </tr>
          <tr>
            <td>Débarras après déménagement</td>
            <td>> 100 m²</td>
            <td><span class="difficulty-moyen">Moyen</span></td>
            <td class="tarif-price">900 - 1400 €</td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- Tableau Débarras après Sinistre -->
    <div class="tarif-table-wrapper">
      <table class="tarif-table">
        <thead>
          <tr>
            <th>Situation</th>
            <th>Superficie</th>
            <th>Difficulté</th>
            <th>Tarif indicatif</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Débarras après sinistre</td>
            <td>< 50 m²</td>
            <td><span class="difficulty-complexe">Complexe</span></td>
            <td class="tarif-price">800 - 1200 €</td>
          </tr>
          <tr>
            <td>Débarras après sinistre</td>
            <td>50-100 m²</td>
            <td><span class="difficulty-complexe">Complexe</span></td>
            <td class="tarif-price">1200 - 1800 €</td>
          </tr>
          <tr>
            <td>Débarras après sinistre</td>
            <td>> 100 m²</td>
            <td><span class="difficulty-complexe">Complexe</span></td>
            <td class="tarif-price">1800 - 2800 €</td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- Tableau Débarras Partiel (par pièce) -->
    <div class="tarif-table-wrapper">
      <table class="tarif-table">
        <thead>
          <tr>
            <th>Type de débarras</th>
            <th>Pièce</th>
            <th>Difficulté</th>
            <th>Tarif indicatif</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Débarras partiel</td>
            <td>Chambre</td>
            <td><span class="difficulty-simple">Simple</span></td>
            <td class="tarif-price">150 - 250 €</td>
          </tr>
          <tr>
            <td>Débarras partiel</td>
            <td>Salon</td>
            <td><span class="difficulty-moyen">Moyen</span></td>
            <td class="tarif-price">200 - 350 €</td>
          </tr>
          <tr>
            <td>Débarras partiel</td>
            <td>Cuisine</td>
            <td><span class="difficulty-moyen">Moyen</span></td>
            <td class="tarif-price">250 - 400 €</td>
          </tr>
          <tr>
            <td>Débarras partiel</td>
            <td>Cave / Grenier</td>
            <td><span class="difficulty-complexe">Complexe</span></td>
            <td class="tarif-price">300 - 500 €</td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- Notes importantes -->
    <div class="tarifs-notes">
      <h3>Informations importantes</h3>
      <ul>
        <li>Les tarifs indiqués sont des fourchettes indicatives pour le débarras de maison et appartement. Un devis gratuit et personnalisé sera établi après visite sur site.</li>
        <li>Les prix peuvent varier selon l'étage, l'accessibilité (ascenseur, escaliers), le type de mobilier et d'objets à évacuer, ainsi que l'état général du logement.</li>
        <li>Le tri, le recyclage et l'évacuation vers les déchetteries agréées sont inclus dans nos tarifs.</li>
        <li>Intervention possible sous 24-48h selon disponibilité.</li>
        <li>Devis gratuit sans engagement, valable 30 jours.</li>
        <li>Nos équipes sont formées, assurées et équipées pour tous types d'interventions dans les logements.</li>
        <li>Remise en état possible après débarras : nettoyage approfondi, peinture, petits travaux de rénovation (sur devis séparé).</li>
        <li>Pour les débarras après succession, nous intervenons avec respect et discrétion, en veillant au tri des biens de valeur.</li>
      </ul>
    </div>

  </div>
</section>

<!-- ===========================
  CTA PRIX DÉBARRAS MAISON
=========================== -->
<section class="cta-contact-section" data-anim="fade-up">
  <div class="container cta-contact-grid">
    <div class="cta-box">
      <span class="cta-badge">✅ Devis gratuit après visite</span>
      <h2>
        Besoin d'un devis précis pour votre logement ?
      </h2>
      <p class="cta-text">
        Contactez-nous pour une visite gratuite et un devis personnalisé adapté à votre situation.
        Nous intervenons rapidement et en toute transparence pour le débarras de votre maison ou appartement.
      </p>
      <a href="<?= $BASE_URL ?>devis" class="cta-btn">
        Demander un devis
      </a>
      <a href="tel:+33749074276" class="cta-btn-secondary">
        📞 Appeler maintenant
      </a>
    </div>
  </div>
</section>
