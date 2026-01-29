<section class="hero-section" style="height: 60vh; background: var(--anthracite); color: var(--white); display: flex; align-items: center;">
  <div class="container" data-anim="fade-bottom">
    <h1 style="color: var(--white);">Tarifs nettoyage</h1>
    <p style="color: var(--gris-clair); font-size: var(--text-medium);">Tarifs indicatifs pour nos services de nettoyage professionnel. Devis gratuit et personnalisé.</p>
  </div>
</section>

<!-- ===========================
  INTRO TARIFS NETTOYAGE
=========================== -->
<section class="about-debarenov" data-anim="fade-left">
  <div class="container about-wrapper">
    <div class="about-text">
      <span class="tag">Tarifs</span>
      <h2 class="about-title">
        Des tarifs transparents<br />
        adaptés à chaque besoin
      </h2>
      <p class="about-description">
        Nos tarifs de nettoyage sont calculés en fonction de plusieurs critères : la superficie des locaux,
        le type de nettoyage requis (simple, approfondi, après travaux), la difficulté d'accès et
        l'état initial des lieux. Chaque situation est unique, c'est pourquoi nous proposons un devis
        gratuit et personnalisé pour chaque prestation.
      </p>
      <ul class="about-features">
        <li>✔️ Devis gratuit et sans engagement</li>
        <li>✔️ Tarifs transparents et détaillés</li>
        <li>✔️ Intervention rapide sous 24-48h</li>
        <li>✔️ Produits professionnels inclus</li>
      </ul>
    </div>
    <div class="about-image">
      <img src="<?= $BASE_URL ?>assets/img/nettoyage/nettoyage.png" alt="Tarifs nettoyage" loading="lazy" decoding="async" />
    </div>
  </div>
</section>

<!-- ===========================
  TABLEAUX DE TARIFS NETTOYAGE
=========================== -->
<section class="tarifs-section" data-anim="fade-right">
  <div class="container tarifs-container">
    
    <div class="tarifs-header">
      <span class="tag">Nos tarifs</span>
      <h2>Tarifs indicatifs par type de nettoyage</h2>
      <p class="tarifs-intro">
        Les prix indiqués sont des fourchettes indicatives. Un devis personnalisé sera établi après évaluation de vos besoins.
      </p>
    </div>

    <!-- Tableau Nettoyage Maison -->
    <div class="tarif-table-wrapper">
      <table class="tarif-table">
        <thead>
          <tr>
            <th>Prestation</th>
            <th>Superficie</th>
            <th>Difficulté</th>
            <th>Tarif indicatif</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Nettoyage maison</td>
            <td>Petit (< 50 m²)</td>
            <td><span class="difficulty-simple">Simple</span></td>
            <td class="tarif-price">150 - 250 €</td>
          </tr>
          <tr>
            <td>Nettoyage maison</td>
            <td>Moyen (50-100 m²)</td>
            <td><span class="difficulty-moyen">Moyen</span></td>
            <td class="tarif-price">250 - 400 €</td>
          </tr>
          <tr>
            <td>Nettoyage maison</td>
            <td>Grand (> 100 m²)</td>
            <td><span class="difficulty-complexe">Complexe</span></td>
            <td class="tarif-price">400 - 650 €</td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- Tableau Nettoyage Appartement -->
    <div class="tarif-table-wrapper">
      <table class="tarif-table">
        <thead>
          <tr>
            <th>Prestation</th>
            <th>Superficie</th>
            <th>Difficulté</th>
            <th>Tarif indicatif</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Nettoyage appartement</td>
            <td>Petit (< 30 m²)</td>
            <td><span class="difficulty-simple">Simple</span></td>
            <td class="tarif-price">120 - 200 €</td>
          </tr>
          <tr>
            <td>Nettoyage appartement</td>
            <td>Moyen (30-70 m²)</td>
            <td><span class="difficulty-moyen">Moyen</span></td>
            <td class="tarif-price">200 - 350 €</td>
          </tr>
          <tr>
            <td>Nettoyage appartement</td>
            <td>Grand (> 70 m²)</td>
            <td><span class="difficulty-complexe">Complexe</span></td>
            <td class="tarif-price">350 - 550 €</td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- Tableau Nettoyage Fin de Chantier -->
    <div class="tarif-table-wrapper">
      <table class="tarif-table">
        <thead>
          <tr>
            <th>Prestation</th>
            <th>Superficie</th>
            <th>Difficulté</th>
            <th>Tarif indicatif</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Nettoyage fin de chantier</td>
            <td>Petit (< 30 m²)</td>
            <td><span class="difficulty-moyen">Moyen</span></td>
            <td class="tarif-price">200 - 350 €</td>
          </tr>
          <tr>
            <td>Nettoyage fin de chantier</td>
            <td>Moyen (30-70 m²)</td>
            <td><span class="difficulty-complexe">Complexe</span></td>
            <td class="tarif-price">300 - 500 €</td>
          </tr>
          <tr>
            <td>Nettoyage fin de chantier</td>
            <td>Grand (> 70 m²)</td>
            <td><span class="difficulty-complexe">Complexe</span></td>
            <td class="tarif-price">500 - 800 €</td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- Tableau Entrée / Sortie Locataire -->
    <div class="tarif-table-wrapper">
      <table class="tarif-table">
        <thead>
          <tr>
            <th>Prestation</th>
            <th>Superficie</th>
            <th>Difficulté</th>
            <th>Tarif indicatif</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Entrée / Sortie locataire</td>
            <td>Petit (< 30 m²)</td>
            <td><span class="difficulty-simple">Simple</span></td>
            <td class="tarif-price">150 - 250 €</td>
          </tr>
          <tr>
            <td>Entrée / Sortie locataire</td>
            <td>Moyen (30-70 m²)</td>
            <td><span class="difficulty-moyen">Moyen</span></td>
            <td class="tarif-price">250 - 400 €</td>
          </tr>
          <tr>
            <td>Entrée / Sortie locataire</td>
            <td>Grand (> 70 m²)</td>
            <td><span class="difficulty-complexe">Complexe</span></td>
            <td class="tarif-price">400 - 600 €</td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- Tableau Nettoyage après Déménagement -->
    <div class="tarif-table-wrapper">
      <table class="tarif-table">
        <thead>
          <tr>
            <th>Prestation</th>
            <th>Superficie</th>
            <th>Difficulté</th>
            <th>Tarif indicatif</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Nettoyage après déménagement</td>
            <td>Petit (< 30 m²)</td>
            <td><span class="difficulty-simple">Simple</span></td>
            <td class="tarif-price">130 - 220 €</td>
          </tr>
          <tr>
            <td>Nettoyage après déménagement</td>
            <td>Moyen (30-70 m²)</td>
            <td><span class="difficulty-moyen">Moyen</span></td>
            <td class="tarif-price">220 - 380 €</td>
          </tr>
          <tr>
            <td>Nettoyage après déménagement</td>
            <td>Grand (> 70 m²)</td>
            <td><span class="difficulty-complexe">Complexe</span></td>
            <td class="tarif-price">380 - 600 €</td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- Tableau Nettoyage Locaux Professionnels -->
    <div class="tarif-table-wrapper">
      <table class="tarif-table">
        <thead>
          <tr>
            <th>Prestation</th>
            <th>Superficie</th>
            <th>Difficulté</th>
            <th>Tarif indicatif</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Nettoyage locaux professionnels</td>
            <td>Petit (< 50 m²)</td>
            <td><span class="difficulty-simple">Simple</span></td>
            <td class="tarif-price">180 - 300 €</td>
          </tr>
          <tr>
            <td>Nettoyage locaux professionnels</td>
            <td>Moyen (50-150 m²)</td>
            <td><span class="difficulty-moyen">Moyen</span></td>
            <td class="tarif-price">300 - 550 €</td>
          </tr>
          <tr>
            <td>Nettoyage locaux professionnels</td>
            <td>Grand (> 150 m²)</td>
            <td><span class="difficulty-complexe">Complexe</span></td>
            <td class="tarif-price">550 - 900 €</td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- Tableau Nettoyage Parties Communes (Syndic) -->
    <div class="tarif-table-wrapper">
      <table class="tarif-table">
        <thead>
          <tr>
            <th>Prestation</th>
            <th>Superficie</th>
            <th>Difficulté</th>
            <th>Tarif indicatif</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Nettoyage parties communes</td>
            <td>Petit (< 100 m²)</td>
            <td><span class="difficulty-simple">Simple</span></td>
            <td class="tarif-price">200 - 350 €</td>
          </tr>
          <tr>
            <td>Nettoyage parties communes</td>
            <td>Moyen (100-300 m²)</td>
            <td><span class="difficulty-moyen">Moyen</span></td>
            <td class="tarif-price">350 - 600 €</td>
          </tr>
          <tr>
            <td>Nettoyage parties communes</td>
            <td>Grand (> 300 m²)</td>
            <td><span class="difficulty-complexe">Complexe</span></td>
            <td class="tarif-price">600 - 1000 €</td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- Tableau Nettoyage après Sinistre -->
    <div class="tarif-table-wrapper">
      <table class="tarif-table">
        <thead>
          <tr>
            <th>Prestation</th>
            <th>Superficie</th>
            <th>Difficulté</th>
            <th>Tarif indicatif</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Nettoyage après sinistre</td>
            <td>Petit (< 30 m²)</td>
            <td><span class="difficulty-complexe">Complexe</span></td>
            <td class="tarif-price">400 - 650 €</td>
          </tr>
          <tr>
            <td>Nettoyage après sinistre</td>
            <td>Moyen (30-70 m²)</td>
            <td><span class="difficulty-complexe">Complexe</span></td>
            <td class="tarif-price">650 - 1000 €</td>
          </tr>
          <tr>
            <td>Nettoyage après sinistre</td>
            <td>Grand (> 70 m²)</td>
            <td><span class="difficulty-complexe">Complexe</span></td>
            <td class="tarif-price">1000 - 1500 €</td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- Tableau Nettoyage Ponctuel ou Régulier -->
    <div class="tarif-table-wrapper">
      <table class="tarif-table">
        <thead>
          <tr>
            <th>Prestation</th>
            <th>Superficie</th>
            <th>Fréquence</th>
            <th>Tarif indicatif</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Nettoyage ponctuel</td>
            <td>Petit (< 50 m²)</td>
            <td>Ponctuel</td>
            <td class="tarif-price">150 - 250 €</td>
          </tr>
          <tr>
            <td>Nettoyage ponctuel</td>
            <td>Moyen (50-150 m²)</td>
            <td>Ponctuel</td>
            <td class="tarif-price">250 - 450 €</td>
          </tr>
          <tr>
            <td>Nettoyage régulier</td>
            <td>Petit (< 50 m²)</td>
            <td>Hebdomadaire</td>
            <td class="tarif-price">80 - 150 € / mois</td>
          </tr>
          <tr>
            <td>Nettoyage régulier</td>
            <td>Moyen (50-150 m²)</td>
            <td>Hebdomadaire</td>
            <td class="tarif-price">150 - 300 € / mois</td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- Notes importantes -->
    <div class="tarifs-notes">
      <h3>Informations importantes</h3>
      <ul>
        <li>Les tarifs indiqués sont des fourchettes indicatives. Un devis gratuit et personnalisé sera établi après évaluation de vos besoins.</li>
        <li>Les prix peuvent varier selon la localisation, l'accessibilité, l'état initial des lieux et les spécificités du nettoyage requis.</li>
        <li>Les produits de nettoyage professionnels et le matériel sont inclus dans nos tarifs.</li>
        <li>Intervention possible sous 24-48h selon disponibilité.</li>
        <li>Devis gratuit sans engagement, valable 30 jours.</li>
        <li>Nos équipes sont formées aux techniques de nettoyage professionnel et assurées.</li>
        <li>Pour les nettoyages réguliers, des tarifs préférentiels peuvent être appliqués selon la fréquence et le volume.</li>
      </ul>
    </div>

  </div>
</section>

<!-- ===========================
  CTA TARIFS NETTOYAGE
=========================== -->
<section class="cta-contact-section" data-anim="fade-up">
  <div class="container cta-contact-grid">
    <div class="cta-box">
      <span class="cta-badge">🧽 Devis gratuit et personnalisé</span>
      <h2>
        Besoin d'un devis précis pour votre nettoyage ?
      </h2>
      <p class="cta-text">
        Contactez-nous pour une estimation gratuite et personnalisée selon vos besoins.
        Nous intervenons rapidement avec des produits professionnels.
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
