<?php
// ===============================
// Récupération du slug
// ===============================
$slug = $_GET['post'] ?? null;

if (!$slug) {
  http_response_code(404);
  echo "<h1>Article introuvable</h1>";
  return;
}

// ===============================
// Chargement des articles
// ===============================
$dataPath = __DIR__ . '/../data/blog.json';

if (!file_exists($dataPath)) {
  throw new Exception('Fichier blog.json introuvable');
}

$articles = json_decode(file_get_contents($dataPath), true);

if (!$articles || !is_array($articles)) {
  throw new Exception('Erreur JSON blog.json');
}

// ===============================
// Recherche de l’article
// ===============================
$article = null;

foreach ($articles as $item) {
  if ($item['slug'] === $slug) {
    $article = $item;
    break;
  }
}

if (!$article) {
  http_response_code(404);
  echo "<h1>Article introuvable</h1>";
  return;
}
?>

<!-- ===========================
   HERO ARTICLE
=========================== -->
<section
  class="hero-article"
  style="background-image:url('<?= htmlspecialchars($article['image']) ?>');"
>
  <div class="hero-overlay"></div>

  <div class="container">
    <span class="tag"><?= htmlspecialchars($article['category']) ?></span>

    <h1 class="article-title">
      <?= htmlspecialchars($article['title']) ?>
    </h1>

    <p class="article-meta">
      Écrit par <strong><?= htmlspecialchars($article['author']) ?></strong>
    </p>
  </div>
</section>

<!-- ===========================
   CONTENU + SIDEBAR
=========================== -->
<section class="article-layout">
  <div class="container article-grid">

    <!-- CONTENU PRINCIPAL -->
    <article class="article-main">

      <!-- RETOUR BLOG -->
      <a href="blog" class="back-to-blog">
        ← Retour vers les articles de blog
      </a>

      <!-- CONTENU ARTICLE -->
      <?= $article['content'] ?>

      <!-- CTA FINAL -->
      <div class="article-cta">
        <h3>Besoin d’un devis pour votre projet ?</h3>
        <p>Intervention rapide • Devis gratuit • Sans engagement</p>
        <a href="devis" class="btn-primary">
          Demander un devis
        </a>
      </div>

    </article><br/>

    <!-- SIDEBAR -->
    <aside class="article-sidebar">
      <div class="sidebar-box">
        <h4>Un projet similaire ?</h4>
        <p>
          DEBARENOV intervient pour la rénovation, le débarras
          et la remise en état complète.
        </p>
        <a href="tel:+33148933946" class="btn-outline">
          📞 Appeler maintenant
        </a>
      </div>
    </aside>

  </div>
</section>
