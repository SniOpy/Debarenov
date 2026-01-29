# Plan : Inverser footer-bottom et footer-grid et centrer

## Objectif

Inverser l'ordre des sections dans le footer pour que `footer-bottom` apparaisse avant `footer-grid` (qui contient les `footer-column`), et centrer ces deux sections.

## Structure actuelle

Actuellement dans `partials/footer.php` :
1. `footer-grid` (contenant les 3 colonnes : Navigation, Logo, Contact)
2. `footer-bottom` (copyright et liens légaux)

## Modifications à effectuer

### 1. Inverser l'ordre dans le HTML

Dans `partials/footer.php` :
- Déplacer la div `footer-bottom` (lignes 42-51) avant la div `footer-grid` (lignes 5-40)
- Le nouvel ordre sera :
  1. `footer-bottom` (copyright et liens légaux)
  2. `footer-grid` (colonnes Navigation, Logo, Contact)

### 2. Centrer les deux sections

Dans `assets/css/home/footer.css` :
- Modifier `.footer-grid` pour ajouter `justify-content: center` et `align-items: center`
- Modifier `.footer-bottom` pour centrer le contenu avec `justify-content: center` au lieu de `space-between`
- S'assurer que les deux sections sont centrées horizontalement dans le container

## Fichiers à modifier

- `partials/footer.php` : Inverser l'ordre des divs footer-bottom et footer-grid
- `assets/css/home/footer.css` : Centrer les sections footer-grid et footer-bottom
