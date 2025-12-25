<?php
$articles = json_decode(
  file_get_contents(__DIR__ . '/../data/blog.json'),
  true
);
?>

<section id="blog-listing" class="blog-section">
  <div class="container blog-grid">

    <?php foreach ($articles as $article): ?>
      <article class="blog-card">

        <div class="blog-img">
          <img src="<?= $article['image'] ?>" alt="<?= htmlspecialchars($article['title']) ?>">
        </div>

        <div class="blog-content">
          <span class="tag"><?= $article['category'] ?></span>

          <h3><?= $article['title'] ?></h3>

          <p class="blog-meta">
            Écrit par <strong><?= $article['author'] ?></strong>
          </p>

          <p><?= $article['excerpt'] ?></p>

          <a href="/articles?post=<?= $article['slug'] ?>" class="blog-btn">
            En savoir plus →
          </a>
        </div>

      </article>
    <?php endforeach; ?>

  </div>
</section>
