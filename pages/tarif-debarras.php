<section class="hero-section" style="height: 60vh; background: var(--anthracite); color: var(--white); display: flex; align-items: center;">
  <div class="container" data-anim="fade-bottom">
    <h1 style="color: var(--white);">Tarifs débarras</h1>
    <p style="color: var(--gris-clair); font-size: var(--text-medium);">Tarifs indicatifs pour nos services de débarras professionnel. Devis gratuit et personnalisé.</p>
  </div>
</section>

<!-- ===========================
  INTRO TARIFS DÉBARRAS
=========================== -->
<section class="about-debarenov" data-anim="fade-left">
  <div class="container about-wrapper">
    <div class="about-text">
      <span class="tag">Tarifs</span>
      <h2 class="about-title">
        Des tarifs transparents<br />
        adaptés à chaque situation
      </h2>
      <p class="about-description">
        Nos tarifs sont calculés en fonction de plusieurs critères : la superficie ou le volume à débarrasser,
        la difficulté d'accès, le type de biens à évacuer et la complexité de l'intervention.
        Chaque situation est unique, c'est pourquoi nous proposons un devis gratuit et personnalisé
        pour chaque prestation.
      </p>
      <ul class="about-features">
        <li>✔️ Devis gratuit et sans engagement</li>
        <li>✔️ Tarifs transparents et détaillés</li>
        <li>✔️ Intervention sous 24-48h</li>
        <li>✔️ Tri et recyclage inclus</li>
      </ul>
    </div>
    <div class="about-image">
      <img src="<?= $BASE_URL ?>assets/img/about/debarras-appartement.jpg" alt="Tarifs débarras" loading="lazy" decoding="async" />
    </div>
  </div>
</section>

<!-- ===========================
  TABLEAUX DE TARIFS DÉBARRAS
=========================== -->
<section class="tarifs-section" data-anim="fade-right">
  <div class="container tarifs-container">
    
    <div class="tarifs-header">
      <span class="tag">Nos tarifs</span>
      <h2>Tarifs indicatifs par type de débarras</h2>
      <p class="tarifs-intro">
        Les prix indiqués sont des fourchettes indicatives. Un devis personnalisé sera établi après visite sur site.
      </p>
    </div>

    <!-- Tableau Débarras Garage -->
    <div class="tarif-table-wrapper">
      <table class="tarif-table">
        <thead>
          <tr>
            <th>Prestation</th>
            <th>Superficie / Volume</th>
            <th>Difficulté</th>
            <th>Tarif indicatif</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Débarras garage</td>
            <td>Petit (< 20 m³)</td>
            <td><span class="difficulty-simple">Simple</span></td>
            <td class="tarif-price">250 - 400 €</td>
          </tr>
          <tr>
            <td>Débarras garage</td>
            <td>Moyen (20-50 m³)</td>
            <td><span class="difficulty-moyen">Moyen</span></td>
            <td class="tarif-price">400 - 650 €</td>
          </tr>
          <tr>
            <td>Débarras garage</td>
            <td>Grand (> 50 m³)</td>
            <td><span class="difficulty-complexe">Complexe</span></td>
            <td class="tarif-price">650 - 1000 €</td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- Tableau Débarras Grenier et Cave -->
    <div class="tarif-table-wrapper">
      <table class="tarif-table">
        <thead>
          <tr>
            <th>Prestation</th>
            <th>Superficie / Volume</th>
            <th>Difficulté</th>
            <th>Tarif indicatif</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Débarras grenier / cave</td>
            <td>Petit (< 20 m³)</td>
            <td><span class="difficulty-simple">Simple</span></td>
            <td class="tarif-price">200 - 350 €</td>
          </tr>
          <tr>
            <td>Débarras grenier / cave</td>
            <td>Moyen (20-50 m³)</td>
            <td><span class="difficulty-moyen">Moyen</span></td>
            <td class="tarif-price">350 - 550 €</td>
          </tr>
          <tr>
            <td>Débarras grenier / cave</td>
            <td>Grand (> 50 m³)</td>
            <td><span class="difficulty-complexe">Complexe</span></td>
            <td class="tarif-price">550 - 900 €</td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- Tableau Débarras Encombrants -->
    <div class="tarif-table-wrapper">
      <table class="tarif-table">
        <thead>
          <tr>
            <th>Prestation</th>
            <th>Superficie / Volume</th>
            <th>Difficulté</th>
            <th>Tarif indicatif</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Évacuation encombrants</td>
            <td>Petit (< 5 m³)</td>
            <td><span class="difficulty-simple">Simple</span></td>
            <td class="tarif-price">80 - 150 €</td>
          </tr>
          <tr>
            <td>Évacuation encombrants</td>
            <td>Moyen (5-15 m³)</td>
            <td><span class="difficulty-moyen">Moyen</span></td>
            <td class="tarif-price">150 - 300 €</td>
          </tr>
          <tr>
            <td>Évacuation encombrants</td>
            <td>Grand (> 15 m³)</td>
            <td><span class="difficulty-complexe">Complexe</span></td>
            <td class="tarif-price">300 - 500 €</td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- Tableau Débarras Gravats -->
    <div class="tarif-table-wrapper">
      <table class="tarif-table">
        <thead>
          <tr>
            <th>Prestation</th>
            <th>Superficie / Volume</th>
            <th>Difficulté</th>
            <th>Tarif indicatif</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Évacuation gravats</td>
            <td>Petit (< 5 m³)</td>
            <td><span class="difficulty-simple">Simple</span></td>
            <td class="tarif-price">100 - 200 €</td>
          </tr>
          <tr>
            <td>Évacuation gravats</td>
            <td>Moyen (5-15 m³)</td>
            <td><span class="difficulty-moyen">Moyen</span></td>
            <td class="tarif-price">200 - 400 €</td>
          </tr>
          <tr>
            <td>Évacuation gravats</td>
            <td>Grand (> 15 m³)</td>
            <td><span class="difficulty-complexe">Complexe</span></td>
            <td class="tarif-price">400 - 700 €</td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- Tableau Débarras Maison / Appartement -->
    <div class="tarif-table-wrapper">
      <table class="tarif-table">
        <thead>
          <tr>
            <th>Prestation</th>
            <th>Superficie / Volume</th>
            <th>Difficulté</th>
            <th>Tarif indicatif</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Débarras maison / appartement</td>
            <td>Petit (< 30 m²)</td>
            <td><span class="difficulty-simple">Simple</span></td>
            <td class="tarif-price">300 - 500 €</td>
          </tr>
          <tr>
            <td>Débarras maison / appartement</td>
            <td>Moyen (30-70 m²)</td>
            <td><span class="difficulty-moyen">Moyen</span></td>
            <td class="tarif-price">500 - 800 €</td>
          </tr>
          <tr>
            <td>Débarras maison / appartement</td>
            <td>Grand (> 70 m²)</td>
            <td><span class="difficulty-complexe">Complexe</span></td>
            <td class="tarif-price">800 - 1300 €</td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- Tableau Débarras Succession -->
    <div class="tarif-table-wrapper">
      <table class="tarif-table">
        <thead>
          <tr>
            <th>Prestation</th>
            <th>Superficie / Volume</th>
            <th>Difficulté</th>
            <th>Tarif indicatif</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Débarras succession</td>
            <td>Petit (< 30 m²)</td>
            <td><span class="difficulty-moyen">Moyen</span></td>
            <td class="tarif-price">400 - 600 €</td>
          </tr>
          <tr>
            <td>Débarras succession</td>
            <td>Moyen (30-70 m²)</td>
            <td><span class="difficulty-complexe">Complexe</span></td>
            <td class="tarif-price">600 - 950 €</td>
          </tr>
          <tr>
            <td>Débarras succession</td>
            <td>Grand (> 70 m²)</td>
            <td><span class="difficulty-complexe">Complexe</span></td>
            <td class="tarif-price">950 - 1500 €</td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- Tableau Vider maison après décès -->
    <div class="tarif-table-wrapper">
      <table class="tarif-table">
        <thead>
          <tr>
            <th>Prestation</th>
            <th>Superficie / Volume</th>
            <th>Difficulté</th>
            <th>Tarif indicatif</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Vider maison après décès</td>
            <td>Petit (< 30 m²)</td>
            <td><span class="difficulty-moyen">Moyen</span></td>
            <td class="tarif-price">450 - 650 €</td>
          </tr>
          <tr>
            <td>Vider maison après décès</td>
            <td>Moyen (30-70 m²)</td>
            <td><span class="difficulty-complexe">Complexe</span></td>
            <td class="tarif-price">650 - 1000 €</td>
          </tr>
          <tr>
            <td>Vider maison après décès</td>
            <td>Grand (> 70 m²)</td>
            <td><span class="difficulty-complexe">Complexe</span></td>
            <td class="tarif-price">1000 - 1600 €</td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- Tableau Débarras Diogènes -->
    <div class="tarif-table-wrapper">
      <table class="tarif-table">
        <thead>
          <tr>
            <th>Prestation</th>
            <th>Superficie / Volume</th>
            <th>Difficulté</th>
            <th>Tarif indicatif</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Débarras Diogènes</td>
            <td>Petit (< 30 m²)</td>
            <td><span class="difficulty-complexe">Complexe</span></td>
            <td class="tarif-price">800 - 1200 €</td>
          </tr>
          <tr>
            <td>Débarras Diogènes</td>
            <td>Moyen (30-70 m²)</td>
            <td><span class="difficulty-complexe">Complexe</span></td>
            <td class="tarif-price">1200 - 1800 €</td>
          </tr>
          <tr>
            <td>Débarras Diogènes</td>
            <td>Grand (> 70 m²)</td>
            <td><span class="difficulty-complexe">Complexe</span></td>
            <td class="tarif-price">1800 - 2500 €</td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- Notes importantes -->
    <div class="tarifs-notes">
      <h3>Informations importantes</h3>
      <ul>
        <li>Les tarifs indiqués sont des fourchettes indicatives. Un devis gratuit et personnalisé sera établi après visite sur site.</li>
        <li>Les prix peuvent varier selon la localisation, l'accessibilité, l'étage et les spécificités du chantier.</li>
        <li>Le tri, le recyclage et l'évacuation vers les déchetteries agréées sont inclus dans nos tarifs.</li>
        <li>Intervention possible sous 24-48h selon disponibilité.</li>
        <li>Devis gratuit sans engagement, valable 30 jours.</li>
        <li>Nos équipes sont formées, assurées et équipées pour tous types d'interventions.</li>
      </ul>
    </div>

  </div>
</section>

<!-- ===========================
  CTA TARIFS DÉBARRAS
=========================== -->
<section class="cta-contact-section" data-anim="fade-up">
  <div class="container cta-contact-grid">
    <div class="cta-box">
      <span class="cta-badge">✅ Devis gratuit et personnalisé</span>
      <h2>
        Besoin d'un devis précis pour votre débarras ?
      </h2>
      <p class="cta-text">
        Contactez-nous pour une estimation gratuite et personnalisée selon votre situation.
        Nous intervenons rapidement et en toute transparence.
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
