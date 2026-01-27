<?php
/**
 * Page d'administration pour gérer le cache
 * Accès : /debarenov/admin/cache.php?action=clear&token=VOTRE_TOKEN
 * 
 * Pour sécuriser, changez le token ci-dessous
 */

require_once __DIR__ . '/../config.php';
require_once __DIR__ . '/../includes/cache.php';

// Token de sécurité (changez-le pour votre propre token)
define('CACHE_ADMIN_TOKEN', 'debarenov_cache_2025_secure');

$cache = new Cache();
$message = '';
$messageType = '';

// Vérifier le token
$token = $_GET['token'] ?? '';

if ($token !== CACHE_ADMIN_TOKEN) {
    http_response_code(403);
    die('Accès refusé. Token invalide.');
}

// Traiter les actions
$action = $_GET['action'] ?? '';

if ($action === 'clear') {
    $count = $cache->clear();
    $message = "Cache vidé avec succès ! $count fichier(s) supprimé(s).";
    $messageType = 'success';
} elseif ($action === 'stats') {
    // Les stats seront affichées ci-dessous
} elseif ($action === 'clear-page') {
    $page = $_GET['page'] ?? '';
    if ($page) {
        if ($cache->clearPage($page)) {
            $message = "Cache de la page '$page' vidé avec succès !";
            $messageType = 'success';
        } else {
            $message = "Aucun cache trouvé pour la page '$page'.";
            $messageType = 'info';
        }
    }
}

// Obtenir les statistiques
$stats = $cache->getStats();

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion du Cache - DEBARENOV</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            background: #f5f5f5;
            padding: 20px;
            color: #333;
        }
        .container {
            max-width: 900px;
            margin: 0 auto;
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            padding: 30px;
        }
        h1 {
            color: #2c3e50;
            margin-bottom: 10px;
            font-size: 28px;
        }
        .subtitle {
            color: #7f8c8d;
            margin-bottom: 30px;
            font-size: 14px;
        }
        .alert {
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        .alert-success {
            background: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }
        .alert-info {
            background: #d1ecf1;
            color: #0c5460;
            border: 1px solid #bee5eb;
        }
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }
        .stat-card {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 5px;
            border-left: 4px solid #3498db;
        }
        .stat-label {
            font-size: 12px;
            color: #7f8c8d;
            text-transform: uppercase;
            margin-bottom: 5px;
        }
        .stat-value {
            font-size: 24px;
            font-weight: bold;
            color: #2c3e50;
        }
        .actions {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
            margin-bottom: 30px;
        }
        .btn {
            padding: 12px 24px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s;
        }
        .btn-primary {
            background: #3498db;
            color: white;
        }
        .btn-primary:hover {
            background: #2980b9;
        }
        .btn-danger {
            background: #e74c3c;
            color: white;
        }
        .btn-danger:hover {
            background: #c0392b;
        }
        .btn-secondary {
            background: #95a5a6;
            color: white;
        }
        .btn-secondary:hover {
            background: #7f8c8d;
        }
        .info-box {
            background: #fff3cd;
            border: 1px solid #ffc107;
            border-radius: 5px;
            padding: 15px;
            margin-top: 20px;
        }
        .info-box h3 {
            margin-bottom: 10px;
            color: #856404;
        }
        .info-box p {
            color: #856404;
            font-size: 14px;
            line-height: 1.6;
        }
        .info-box code {
            background: #fff;
            padding: 2px 6px;
            border-radius: 3px;
            font-family: 'Courier New', monospace;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>🗄️ Gestion du Cache</h1>
        <p class="subtitle">Système de cache DEBARENOV - Administration</p>

        <?php if ($message): ?>
            <div class="alert alert-<?= $messageType ?>">
                <?= htmlspecialchars($message) ?>
            </div>
        <?php endif; ?>

        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-label">Fichiers en cache</div>
                <div class="stat-value"><?= $stats['files'] ?></div>
            </div>
            <div class="stat-card">
                <div class="stat-label">Taille totale</div>
                <div class="stat-value"><?= number_format($stats['size'] / 1024, 2) ?> KB</div>
            </div>
            <div class="stat-card">
                <div class="stat-label">Plus ancien</div>
                <div class="stat-value">
                    <?= $stats['oldest'] ? date('H:i', $stats['oldest']) : 'N/A' ?>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-label">Plus récent</div>
                <div class="stat-value">
                    <?= $stats['newest'] ? date('H:i', $stats['newest']) : 'N/A' ?>
                </div>
            </div>
        </div>

        <div class="actions">
            <a href="?action=clear&token=<?= CACHE_ADMIN_TOKEN ?>" class="btn btn-danger" 
               onclick="return confirm('Êtes-vous sûr de vouloir vider tout le cache ?');">
                🗑️ Vider tout le cache
            </a>
            <a href="?action=stats&token=<?= CACHE_ADMIN_TOKEN ?>" class="btn btn-secondary">
                🔄 Actualiser les statistiques
            </a>
        </div>

        <div class="info-box">
            <h3>ℹ️ Informations</h3>
            <p>
                <strong>Durée de vie du cache :</strong> 1 heure (3600 secondes)<br>
                <strong>Pages mises en cache :</strong> Toutes sauf devis, articles, 404, 500<br>
                <strong>Dossier cache :</strong> <code>/cache/</code><br>
                <strong>URL de cette page :</strong> <code>admin/cache.php?token=VOTRE_TOKEN</code>
            </p>
            <p style="margin-top: 10px;">
                <strong>⚠️ Sécurité :</strong> Changez le token dans le fichier <code>admin/cache.php</code> 
                pour sécuriser l'accès à cette page.
            </p>
        </div>
    </div>
</body>
</html>
