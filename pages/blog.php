<?php
// ===============================
// Chargement des articles
// ===============================
$dataPath = __DIR__ . '/../data/blog.json';

if (!file_exists($dataPath)) {
  echo '<p>Articles indisponibles.</p>';
  return;
}

$articles = json_decode(file_get_contents($dataPath), true);

if (!$articles || !is_array($articles)) {
  echo '<p>Articles indisponibles.</p>';
  return;
}
?>

<!-- ===========================
  HERO BLOG
=========================== -->
<section class="hero-blog" id="hero-blog">
  <div class="container" data-anim="fade-bottom">
    <span class="tag">Blog</span>

    <h1>
      Conseils & expertise<br />
      rénovation haut de gamme
    </h1>

    <p class="hero-description">
      Débarras, nettoyage, rénovation et remise en état :
      profitez de l’expertise DEBARENOV pour réussir vos projets.
    </p>
  </div>
</section>

<!-- ===========================
  BLOG LISTING
=========================== -->
<section class="blog-section" data-anim="fade-up">
  <div class="container">

    <div class="blog-grid">

      <?php foreach ($articles as $article): ?>

        <article class="blog-card" data-anim="fade-up">
          <div class="blog-img">
            <img
              src="<?= htmlspecialchars($article['image']) ?>"
              alt="<?= htmlspecialchars($article['title']) ?>"
            />
          </div>

          <div class="blog-content">
            <span class="tag"><?= htmlspecialchars($article['category']) ?></span>

            <h3>
              <?= htmlspecialchars($article['title']) ?>
            </h3>

            <p class="blog-meta">
              Écrit par <strong><?= htmlspecialchars($article['author']) ?></strong>
            </p>

            <p>
              <?= htmlspecialchars($article['excerpt'] ?? '') ?>
            </p>

            <a
              href="/articles?post=<?= urlencode($article['slug']) ?>"
              class="blog-link"
            >
              En savoir plus →
            </a>
          </div>
        </article>

      <?php endforeach; ?>

    </div>

  </div>
</section>

<!-- ===========================
  CTA BLOG
=========================== -->
<section class="cta-contact-section" data-anim="fade-up">
  <div class="container cta-contact-grid">

    <div class="cta-box">
      <span class="cta-badge">✅ Expertise certifiée</span>

      <h2>
        Besoin d’un professionnel pour votre projet ?
      </h2>

      <p class="cta-text">
        Débarras, rénovation, nettoyage ou remise en état —
        bénéficiez d’une estimation claire et rapide.
      </p>

      <a href="devis" class="cta-btn">
        Demander un devis
      </a>

      <a href="tel:+33148933946" class="cta-btn-secondary">
        📞 Appeler maintenant
      </a>
    </div>

  </div>
</section>
