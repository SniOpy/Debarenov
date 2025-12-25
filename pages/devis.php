<!-- ============================
     SECTION DEMANDE DE DEVIS
============================ -->
<section id="devis-debarenov" class="cta-contact-section">
  <div class="container cta-contact-grid">

    <!-- LEFT CONTENT -->
    <div class="cta-box" data-anim="fade-left">
      <span class="cta-badge">✅ Devis gratuit & rapide</span>

      <h2>Demande de devis personnalisé</h2>

      <p class="cta-text">
        Expliquez-nous votre besoin.  
        Nous vous répondons rapidement avec une estimation claire, gratuite et sans engagement.
      </p>

      <div class="cta-infos">
        <p>
          <i class="fa-solid fa-clock"></i>
          Réponse sous 24h
        </p>

        <p>
          <i class="fa-solid fa-shield"></i>
          Entreprise assurée
        </p>

        <p>
          <i class="fa-solid fa-location-dot"></i>
          Intervention en Île-de-France
        </p>
      </div>
    </div>

    <!-- FORM -->
    <div class="contact-box" data-anim="fade-right">
      <h3>Recevoir mon devis</h3>

      <form id="devis-form" class="contact-form" method="POST" action="" onsubmit="return false;">

        <div class="form-group">
          <label>Nom & prénom *</label>
          <input type="text" name="fullname" placeholder="Votre nom complet" required />
        </div>

        <div class="form-group">
          <label>Téléphone *</label>
          <input type="tel" name="telephone" placeholder="Votre numéro" required />
        </div>

        <div class="form-group">
          <label>Email *</label>
          <input type="email" name="email" placeholder="Votre email" required />
        </div>

        <div class="form-group">
          <label>Vous êtes *</label>
          <select name="client_type" required>
            <option value="">Sélectionner</option>
            <option value="particulier">Particulier</option>
            <option value="professionnel">Professionnel</option>
          </select>
        </div>

        <div class="form-group">
          <label>Nom de la société (si professionnel)</label>
          <input type="text" name="company" placeholder="Nom de votre société" />
        </div>

        <div class="form-group">
          <label>Type de prestation *</label>
          <select name="service" required>
            <option value="">Choisir une prestation</option>
            <option value="renovation">Rénovation</option>
            <option value="debarras">Débarras</option>
            <option value="nettoyage">Nettoyage</option>
            <option value="remise-en-etat">Remise en état</option>
            <option value="autre">Autres</option>
          </select>
        </div>

        <div class="form-group">
          <label>Décrivez votre besoin *</label>
          <textarea
            name="message"
            placeholder="Surface, urgence, contraintes, accès, localisation…"
            required
          ></textarea>
        </div>

        <button type="submit" class="contact-btn">
          Envoyer ma demande
        </button>

        <p id="form-response" style="margin-top:10px;"></p>
      </form>
    </div>

  </div>
</section>
