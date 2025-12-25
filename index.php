<?php

require_once __DIR__ . '/config.php';

try {

    // -------- Router --------
    $uri  = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $path = trim($uri, '/');

    // Local (WAMP) → on retire /debarenov
    $base = 'debarenov';
    if (strpos($path, $base) === 0) {
    $path = trim(substr($path, strlen($base)), '/');
}


    $page = $path === '' ? 'home' : $path;

    // -------- Pages autorisées --------
    $pages = [
        'home' => [
            'title' => 'DEBARENOV – Rénovation, Débarras & Remise en état',
            'desc'  => 'Rénovation intérieure, débarras et nettoyage en Île-de-France.'
        ],
        'debarras' => [
            'title' => 'Débarras professionnel | DEBARENOV',
            'desc'  => 'Débarras maison, appartement, cave, grenier…'
        ],
        'renovation' => [
            'title' => 'Rénovation intérieure | DEBARENOV',
            'desc'  => 'Travaux de rénovation : sols, peinture, cuisine, salle de bain.'
        ],
        'nettoyage' => [
            'title' => 'Nettoyage professionnel | DEBARENOV',
            'desc'  => 'Nettoyage fin de chantier et remise en propreté.'
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
    ];

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

    // -------- Layout --------
    require __DIR__ . '/partials/header.php';

    if ($is404) {
        require __DIR__ . '/pages/404.php';
    } else {
        require __DIR__ . '/pages/' . $page . '.php';
    }

    require __DIR__ . '/partials/footer.php';


} catch (Throwable $e) {

    // IMPORTANT : log pour toi (pas pour l’utilisateur)
    error_log("ERREUR FATALE : " . $e->getMessage());

    http_response_code(500);
    require __DIR__ . '/pages/500.php';
    exit;
}
