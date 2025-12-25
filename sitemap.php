<?php
header('Content-Type: application/xml; charset=utf-8');

$baseUrl = 'https://debarenov.fr';

// ===============================
// Chargement des articles
// ===============================
$dataPath = $_SERVER['DOCUMENT_ROOT'] . '/data/blog.json';

$articles = [];
if (file_exists($dataPath)) {
  $json = file_get_contents($dataPath);
  $articles = json_decode($json, true);
}

// ===============================
// Début XML
// ===============================
echo '<?xml version="1.0" encoding="UTF-8"?>';
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

// Pages fixes
$pages = [
  '/'            => ['weekly', 1.0],
  '/debarras'    => ['monthly', 0.8],
  '/renovation'  => ['monthly', 0.8],
  '/nettoyage'   => ['monthly', 0.8],
  '/blog'        => ['weekly', 0.7],
];

foreach ($pages as $url => [$freq, $priority]) {
  echo '<url>';
  echo '<loc>' . $baseUrl . $url . '</loc>';
  echo '<changefreq>' . $freq . '</changefreq>';
  echo '<priority>' . $priority . '</priority>';
  echo '</url>';
}

// Articles dynamiques
if (is_array($articles)) {
  foreach ($articles as $article) {
    if (!empty($article['slug'])) {
      echo '<url>';
      echo '<loc>' . $baseUrl . '/articles?post=' . htmlspecialchars($article['slug'], ENT_QUOTES, 'UTF-8') . '</loc>';
      echo '<changefreq>monthly</changefreq>';
      echo '<priority>0.6</priority>';
      echo '</url>';
    }
  }
}

// Fin XML
echo '</urlset>';
