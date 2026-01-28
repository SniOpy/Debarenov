<?php

require_once __DIR__ . '/config.php';
require_once __DIR__ . '/includes/cache.php';

// Initialiser le cache (durée de vie : 1 heure = 3600 secondes)
$cache = new Cache(3600);

try {

    // -------- Router --------
    $uri  = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $path = trim($uri, '/');

    // Debug mode développement
    if (ini_get('display_errors')) {
        echo "<!-- DEBUG: URI = " . htmlspecialchars($uri) . " -->\n";
        echo "<!-- DEBUG: Path = " . htmlspecialchars($path) . " -->\n";
    }

    // Local (WAMP) → retirer /debarenov du path
    $base = 'debarenov';
    if (strpos($path, $base) === 0) {
        $path = trim(substr($path, strlen($base)), '/');
        if (ini_get('display_errors')) {
            echo "<!-- DEBUG: Path après retrait de /debarenov = " . htmlspecialchars($path) . " -->\n";
        }
    }

    $page = $path === '' ? 'home' : $path;

    // -------- Pages autorisées --------
    $pages = [
        'home' => [
            'title' => 'DEBARENOV – Rénovation, Débarras & Remise en état',
            'desc'  => 'Rénovation intérieure, débarras et nettoyage en Île-de-France.'
        ],
        'vider-maison-apres-deces' => [
            'title' => 'DEBARENOV – Rénovation, Débarras & Remise en état',
            'desc'  => 'Débarras succession après décès en Île-de-France.'
        ],
        'debarras-succession' => [
            'title' => 'DEBARENOV – Rénovation, Débarras & Remise en état',
            'desc'  => 'Débarras maison, appartement, cave, grenier… après décès.'
        ],
        'debarras' => [
            'title' => 'Débarras professionnel | DEBARENOV',
            'desc'  => 'Débarras maison, appartement, cave, grenier…'
        ],
        'debarras-grenier-cave' => [
            'title' => 'Débarras grenier et cave | DEBARENOV',
            'desc'  => 'Débarras de greniers et caves avec accès difficiles. Intervention spécialisée et sécurisée.'
        ],
        'debarras-garage' => [
            'title' => 'Débarras garage | DEBARENOV',
            'desc'  => 'Débarras complet de garage. Libérez votre espace de stockage rapidement et efficacement.'
        ],
        'debarras-encombrant' => [
            'title' => 'Débarras encombrants | DEBARENOV',
            'desc'  => 'Évacuation légale et responsable de vos encombrants. Intervention rapide sous 48h.'
        ],
        'debarras-diogenes' => [
            'title' => 'Débarras Diogènes | DEBARENOV',
            'desc'  => 'Intervention spécialisée et bienveillante pour débarras de logements encombrés de manière compulsive.'
        ],
        'debarras-gravat' => [
            'title' => 'Débarras gravats | DEBARENOV',
            'desc'  => 'Évacuation rapide et conforme de vos gravats et déchets de chantier. Intervention sous 48h.'
        ],
        'renovation' => [
            'title' => 'Rénovation intérieure | DEBARENOV',
            'desc'  => 'Travaux de rénovation : sols, peinture, cuisine, salle de bain.'
        ],
        'nettoyage' => [
            'title' => 'Nettoyage professionnel | DEBARENOV',
            'desc'  => 'Nettoyage fin de chantier et remise en propreté.'
        ],
        'nettoyage-maison' => [
            'title' => 'Nettoyage maison | DEBARENOV',
            'desc'  => 'Nettoyage complet et approfondi de votre maison. Remise en propre professionnelle.'
        ],
        'nettoyage-appartement' => [
            'title' => 'Nettoyage appartement | DEBARENOV',
            'desc'  => 'Nettoyage complet et professionnel de votre appartement. Idéal avant emménagement ou après travaux.'
        ],
        'syndic-et-copro' => [
            'title' => 'Syndic & Copropriétés | DEBARENOV',
            'desc'  => 'Services professionnels pour syndics et copropriétés : débarras, nettoyage, rénovation et remise en état.'
        ],
        'remise-en-etat' => [
            'title' => 'Remise en état après sinistre | DEBARENOV',
            'desc'  => 'Intervention suite à sinistre, squat ou dégât des eaux.'
        ],
        'devis' => [
            'title' => 'Demande de devis | DEBARENOV',
            'desc'  => 'Devis gratuit pour rénovation, nettoyage et débarras.'
        ],
        'blog' => [
            'title' => 'Blog | DEBARENOV',
            'desc'  => 'Conseils sur la rénovation, le débarras et le nettoyage.'
        ],
        'articles' => [
            'title' => 'Articles de blog | DEBARENOV',
            'desc'  => 'Contenus experts du bâtiment et de l’entretien.'
        ],
        'sitemap' => [
            'title' => 'Plan du site | DEBARENOV',
            'desc'  => 'Plan du site DEBARENOV.'
        ],
        'conditions-generales' => [
            'title' => 'Conditions générales de service | DEBARENOV',
            'desc'  => 'Conditions générales de service DEBARENOV.'
        ],
        'mentions-legales' => [
            'title' => 'Mentions légales | DEBARENOV',
            'desc'  => 'Mentions légales DEBARENOV.'
        ],
        'politique-confidentialite' => [
            'title' => 'Politique de confidentialité | DEBARENOV',
            'desc'  => 'Politique de confidentialité DEBARENOV.'
        ],
        'gestion-cookies' => [
            'title' => 'Gestion des cookies | DEBARENOV',
            'desc'  => 'Gérez vos préférences de cookies et de confidentialité.'
        ],
    ];

    // Debug mode développement (après définition de $pages)
    if (ini_get('display_errors')) {
        echo "<!-- DEBUG: Page finale = " . htmlspecialchars($page) . " -->\n";
        echo "<!-- DEBUG: Page existe ? " . (array_key_exists($page, $pages) ? 'OUI' : 'NON') . " -->\n";
    }

    // -------- Détection 404 --------
    $is404 = !array_key_exists($page, $pages);
    if ($is404) {
        http_response_code(404);
        $metaTitle = 'Page introuvable | DEBARENOV';
        $metaDesc  = 'Cette page n’existe pas.';
    } else {
        $metaTitle = $pages[$page]['title'];
        $metaDesc  = $pages[$page]['desc'];
    }

    // -------- Cache --------
    // Vérifier si la page doit être mise en cache et si elle existe déjà
    if ($cache->shouldCache($page) && !$is404) {
        $cachedContent = $cache->get($page);
        if ($cachedContent !== false) {
            // Afficher le contenu en cache
            echo $cachedContent;
            exit;
        }
    }

    // Démarrer la capture de sortie pour le cache
    if ($cache->shouldCache($page) && !$is404) {
        ob_start();
    }

    // -------- Layout --------
    require __DIR__ . '/partials/header.php';

    if ($is404) {
        require __DIR__ . '/pages/404.php';
    } else {
        require __DIR__ . '/pages/' . $page . '.php';
    }

    require __DIR__ . '/partials/footer.php';

    // Sauvegarder dans le cache si nécessaire
    if ($cache->shouldCache($page) && !$is404) {
        $content = ob_get_clean();
        $cache->set($page, $content);
        echo $content;
    }


} catch (Throwable $e) {

    // IMPORTANT : log pour toi (pas pour l’utilisateur)
    error_log("ERREUR FATALE : " . $e->getMessage());

    http_response_code(500);
    require __DIR__ . '/pages/500.php';
    exit;
}
