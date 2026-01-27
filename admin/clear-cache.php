<?php
/**
 * Script simple pour vider le cache rapidement
 * Usage : accéder à /debarenov/admin/clear-cache.php
 */

require_once __DIR__ . '/../includes/cache.php';

$cache = new Cache();
$count = $cache->clear();

header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cache vidé - DEBARENOV</title>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            margin: 0;
            background: #f5f5f5;
        }
        .message {
            background: white;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            text-align: center;
        }
        .success {
            color: #155724;
            font-size: 18px;
            margin-bottom: 1rem;
        }
        .count {
            color: #666;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="message">
        <div class="success">✓ Cache vidé avec succès !</div>
        <div class="count"><?= $count ?> fichier(s) supprimé(s)</div>
        <p style="margin-top: 1rem;">
            <a href="../" style="color: #3498db; text-decoration: none;">← Retour au site</a>
        </p>
    </div>
</body>
</html>
