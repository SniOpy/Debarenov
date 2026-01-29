<section class="hero-section" style="height: 60vh; background: var(--anthracite); color: var(--white); display: flex; align-items: center;">
  <div class="container" data-anim="fade-bottom">
    <h1 style="color: var(--white);">Tarifs débarras maison</h1>
    <p style="color: var(--gris-clair); font-size: var(--text-medium);">Tarifs indicatifs pour le débarras de votre maison. Devis gratuit et personnalisé.</p>
  </div>
</section>

<!-- ===========================
  INTRO TARIFS MAISON
=========================== -->
<section class="about-debarenov" data-anim="fade-left">
  <div class="container about-wrapper">
    <div class="about-text">
      <span class="tag">Tarifs</span>
      <h2 class="about-title">
        Des tarifs transparents<br />
        pour votre maison
      </h2>
      <p class="about-description">
        Le prix d'un débarras de maison dépend de plusieurs facteurs : la superficie, le nombre de pièces,
        le niveau d'encombrement, l'accessibilité (rez-de-chaussée, étage, jardin), le type de mobilier et d'objets
        à évacuer, ainsi que la situation spécifique (succession, déménagement, avant vente, etc.). Chaque maison
        est unique, c'est pourquoi nous proposons un devis gratuit et personnalisé après visite sur site.
      </p>
      <ul class="about-features">
        <li>✔️ Devis gratuit après visite sur site</li>
        <li>✔️ Tarifs transparents et détaillés</li>
        <li>✔️ Intervention sous 24-48h</li>
        <li>✔️ Tri et recyclage inclus</li>
      </ul>
    </div>
    <div class="about-image">
      <img src="<?= $BASE_URL ?>assets/img/about/debarras-appartement.jpg" alt="Tarifs débarras maison" loading="lazy" decoding="async" />
    </div>
  </div>
</section>

<!-- ===========================
  TABLEAUX DE TARIFS MAISON
=========================== -->
<section class="tarifs-section" data-anim="fade-right">
  <div class="container tarifs-container">
    
    <div class="tarifs-header">
      <span class="tag">Nos tarifs</span>
      <h2>Tarifs indicatifs par type de maison</h2>
      <p class="tarifs-intro">
        Les prix indiqués sont des fourchettes indicatives. Un devis personnalisé sera établi après visite sur site.
      </p>
    </div>

    <!-- Tableau Débarras Maison -->
    <div class="tarif-table-wrapper">
      <table class="tarif-table">
        <thead>
          <tr>
            <th>Type de maison</th>
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

    <!-- Tableau Débarras Maison après Succession -->
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
            <td>< 70 m²</td>
            <td><span class="difficulty-moyen">Moyen</span></td>
            <td class="tarif-price">700 - 1100 €</td>
          </tr>
          <tr>
            <td>Débarras après succession</td>
            <td>70-120 m²</td>
            <td><span class="difficulty-complexe">Complexe</span></td>
            <td class="tarif-price">1100 - 1700 €</td>
          </tr>
          <tr>
            <td>Débarras après succession</td>
            <td>> 120 m²</td>
            <td><span class="difficulty-complexe">Complexe</span></td>
            <td class="tarif-price">1700 - 2600 €</td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- Tableau Débarras Maison avant Vente -->
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
            <td>< 70 m²</td>
            <td><span class="difficulty-simple">Simple</span></td>
            <td class="tarif-price">500 - 750 €</td>
          </tr>
          <tr>
            <td>Débarras avant vente</td>
            <td>70-120 m²</td>
            <td><span class="difficulty-moyen">Moyen</span></td>
            <td class="tarif-price">750 - 1200 €</td>
          </tr>
          <tr>
            <td>Débarras avant vente</td>
            <td>> 120 m²</td>
            <td><span class="difficulty-moyen">Moyen</span></td>
            <td class="tarif-price">1200 - 1900 €</td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- Tableau Débarras Maison après Déménagement -->
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
            <td>< 70 m²</td>
            <td><span class="difficulty-simple">Simple</span></td>
            <td class="tarif-price">450 - 700 €</td>
          </tr>
          <tr>
            <td>Débarras après déménagement</td>
            <td>70-120 m²</td>
            <td><span class="difficulty-moyen">Moyen</span></td>
            <td class="tarif-price">700 - 1100 €</td>
          </tr>
          <tr>
            <td>Débarras après déménagement</td>
            <td>> 120 m²</td>
            <td><span class="difficulty-moyen">Moyen</span></td>
            <td class="tarif-price">1100 - 1700 €</td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- Tableau Débarras Maison après Sinistre -->
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
            <td>< 70 m²</td>
            <td><span class="difficulty-complexe">Complexe</span></td>
            <td class="tarif-price">1000 - 1500 €</td>
          </tr>
          <tr>
            <td>Débarras après sinistre</td>
            <td>70-120 m²</td>
            <td><span class="difficulty-complexe">Complexe</span></td>
            <td class="tarif-price">1500 - 2200 €</td>
          </tr>
          <tr>
            <td>Débarras après sinistre</td>
            <td>> 120 m²</td>
            <td><span class="difficulty-complexe">Complexe</span></td>
            <td class="tarif-price">2200 - 3200 €</td>
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
          <tr>
            <td>Débarras partiel</td>
            <td>Garage</td>
            <td><span class="difficulty-moyen">Moyen</span></td>
            <td class="tarif-price">250 - 450 €</td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- Notes importantes -->
    <div class="tarifs-notes">
      <h3>Informations importantes</h3>
      <ul>
        <li>Les tarifs indiqués sont des fourchettes indicatives pour le débarras de maison. Un devis gratuit et personnalisé sera établi après visite sur site.</li>
        <li>Les prix peuvent varier selon l'accessibilité (rez-de-chaussée, étage, jardin), le type de mobilier et d'objets à évacuer, ainsi que l'état général de la maison.</li>
        <li>Le tri, le recyclage et l'évacuation vers les déchetteries agréées sont inclus dans nos tarifs.</li>
        <li>Intervention possible sous 24-48h selon disponibilité.</li>
        <li>Devis gratuit sans engagement, valable 30 jours.</li>
        <li>Nos équipes sont formées, assurées et équipées pour tous types d'interventions dans les maisons.</li>
        <li>Remise en état possible après débarras : nettoyage approfondi, peinture, petits travaux de rénovation (sur devis séparé).</li>
        <li>Pour les débarras après succession, nous intervenons avec respect et discrétion, en veillant au tri des biens de valeur.</li>
        <li>Les maisons avec jardin, cave ou grenier peuvent nécessiter des interventions supplémentaires (sur devis).</li>
      </ul>
    </div>

  </div>
</section>

<!-- ===========================
  CTA TARIFS MAISON
=========================== -->
<section class="cta-contact-section" data-anim="fade-up">
  <div class="container cta-contact-grid">
    <div class="cta-box">
      <span class="cta-badge">✅ Devis gratuit après visite</span>
      <h2>
        Besoin d'un devis précis pour votre maison ?
      </h2>
      <p class="cta-text">
        Contactez-nous pour une visite gratuite et un devis personnalisé adapté à votre situation.
        Nous intervenons rapidement et en toute transparence pour le débarras de votre maison.
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
