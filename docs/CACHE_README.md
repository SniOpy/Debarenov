# Système de Cache - DEBARENOV

## 📋 Description

Système de cache pour améliorer les performances du site web en réduisant la charge serveur et les temps de chargement.

## 🚀 Fonctionnement

Le système de cache :
- **Cache automatiquement** les pages statiques (home, debarras, nettoyage, etc.)
- **Durée de vie** : 1 heure (3600 secondes)
- **Pages exclues** : devis, articles, 404, 500 (pages dynamiques avec formulaires)
- **Stockage** : Fichiers HTML dans le dossier `/cache/`

## 📁 Structure

```
/debarenov/
├── includes/
│   └── cache.php          # Classe Cache
├── cache/                 # Dossier de stockage (créé automatiquement)
│   ├── .htaccess          # Protection du dossier
│   ├── .gitignore         # Ignore les fichiers de cache
│   └── index.php          # Empêche le listing
├── admin/
│   └── cache.php          # Page d'administration
└── index.php              # Intégration du cache
```

## 🔧 Utilisation

### Vider le cache via l'interface web

1. Accédez à : `http://votre-site.com/debarenov/admin/cache.php?token=debarenov_cache_2025_secure`
2. Cliquez sur "Vider tout le cache"
3. Les statistiques s'affichent automatiquement

### Vider le cache via code PHP

```php
require_once __DIR__ . '/includes/cache.php';
$cache = new Cache();
$count = $cache->clear(); // Vide tout le cache
echo "$count fichiers supprimés";
```

### Vider le cache d'une page spécifique

```php
$cache = new Cache();
$cache->clearPage('home'); // Vide uniquement la page "home"
```

### Modifier la durée de vie du cache

Dans `index.php`, modifiez la ligne :
```php
$cache = new Cache(3600); // 3600 secondes = 1 heure
```

Exemples :
- `3600` = 1 heure
- `7200` = 2 heures
- `86400` = 24 heures

## 🔒 Sécurité

### Changer le token d'administration

Dans `admin/cache.php`, modifiez la ligne :
```php
define('CACHE_ADMIN_TOKEN', 'votre_token_secret_ici');
```

### Protéger le dossier cache

Le dossier `/cache/` est protégé par `.htaccess` pour empêcher l'accès direct aux fichiers.

## 📊 Statistiques

La page d'administration affiche :
- Nombre de fichiers en cache
- Taille totale du cache
- Date du plus ancien fichier
- Date du plus récent fichier

## ⚙️ Configuration avancée

### Exclure une page du cache

Dans `includes/cache.php`, modifiez la méthode `shouldCache()` :

```php
public function shouldCache($page) {
    $noCachePages = [
        'devis',
        'articles',
        '404',
        '500',
        'votre-page' // Ajoutez votre page ici
    ];
    // ...
}
```

### Désactiver le cache temporairement

Dans `index.php`, commentez les lignes de cache :
```php
// require_once __DIR__ . '/includes/cache.php';
// $cache = new Cache(3600);
```

## 🐛 Dépannage

### Le cache ne fonctionne pas

1. Vérifiez que le dossier `/cache/` existe et est accessible en écriture
2. Vérifiez les permissions : `chmod 755 cache/`
3. Vérifiez les logs d'erreur PHP

### Le cache ne se vide pas

1. Vérifiez que le token dans l'URL est correct
2. Vérifiez les permissions d'écriture sur le dossier cache
3. Videz manuellement en supprimant les fichiers dans `/cache/`

## 📝 Notes

- Le cache est automatiquement invalidé après la durée de vie définie
- Les requêtes POST ne sont jamais mises en cache
- Le cache est régénéré automatiquement lors de la première visite après expiration
