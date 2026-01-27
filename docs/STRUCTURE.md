# Structure du Projet DEBARENOV

## 📁 Organisation des fichiers

```
/debarenov/
│
├── 📄 index.php              # Point d'entrée principal (routing)
├── 📄 config.php             # Configuration globale
├── 📄 sitemap.php            # Génération du sitemap XML
├── 📄 robots.txt             # Configuration robots.txt
├── 📄 styles.css             # CSS principal
│
├── 📁 admin/                 # Administration
│   ├── cache.php             # Gestion du cache
│   └── .htaccess             # Protection du dossier
│
├── 📁 api/                   # Endpoints API
│   ├── send.php              # Envoi d'emails (contact/devis)
│   ├── comments.php          # Sauvegarde des commentaires
│   └── .htaccess             # Protection du dossier
│
├── 📁 assets/                 # Ressources statiques
│   ├── css/                  # Feuilles de style
│   ├── js/                   # Scripts JavaScript
│   ├── img/                  # Images
│   └── fonts/                # Polices
│
├── 📁 cache/                  # Cache des pages (généré automatiquement)
│   ├── .htaccess             # Protection du dossier
│   ├── .gitignore            # Ignore les fichiers de cache
│   └── index.php             # Empêche le listing
│
├── 📁 data/                   # Données JSON
│   ├── blog.json             # Articles de blog
│   └── comments_*.json       # Commentaires (générés)
│
├── 📁 docs/                   # Documentation
│   ├── README.md             # Documentation principale
│   ├── CACHE.md              # Documentation du cache
│   └── STRUCTURE.md          # Ce fichier
│
├── 📁 includes/               # Classes et utilitaires PHP
│   └── cache.php             # Classe Cache
│
├── 📁 pages/                  # Pages du site
│   ├── home.php              # Page d'accueil
│   ├── debarras.php          # Page débarras
│   ├── nettoyage.php         # Page nettoyage
│   ├── renovation.php        # Page rénovation
│   ├── devis.php             # Formulaire de devis
│   ├── blog.php              # Liste des articles
│   ├── articles.php          # Article individuel
│   ├── 404.php               # Page 404
│   └── 500.php               # Page 500
│
├── 📁 partials/               # Partials réutilisables
│   ├── header.php            # En-tête du site
│   └── footer.php            # Pied de page
│
└── 📁 phpmailer/              # Bibliothèque PHPMailer
    └── src/
```

## 🔗 Chemins importants

### Administration
- **Cache** : `/debarenov/admin/cache.php?token=VOTRE_TOKEN`

### API
- **Contact/Devis** : `/debarenov/api/send.php` (POST)
- **Commentaires** : `/debarenov/api/comments.php` (POST)

### Pages publiques
- **Accueil** : `/debarenov/` ou `/debarenov/home`
- **Débarras** : `/debarenov/debarras`
- **Nettoyage** : `/debarenov/nettoyage`
- **Rénovation** : `/debarenov/renovation`
- **Devis** : `/debarenov/devis`
- **Blog** : `/debarenov/blog`

## 🔒 Sécurité

### Dossiers protégés
- `/admin/` - Protégé par token dans cache.php
- `/api/` - Protégé par .htaccess et vérifications PHP
- `/cache/` - Protégé par .htaccess
- `/includes/` - Protégé par robots.txt
- `/data/` - Protégé par robots.txt et .htaccess

### Fichiers sensibles
- `.env` - Configuration SMTP (non versionné)
- `config.php` - Configuration globale
- `admin/cache.php` - Nécessite un token

## 📝 Notes

- Les fichiers à la racine sont minimisés pour une meilleure organisation
- Les endpoints API sont regroupés dans `/api/`
- L'administration est centralisée dans `/admin/`
- La documentation est dans `/docs/`
- Le cache est automatiquement généré dans `/cache/`
