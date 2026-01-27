<!DOCTYPE html>
  <html lang="fr">
    <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />

      <title><?= isset($metaTitle) ? htmlspecialchars($metaTitle) : 'DEBARENOV – Rénovation, Débarras & Remise en état' ?></title>
      <meta name="description" content="<?= isset($metaDesc) ? htmlspecialchars($metaDesc) : 'Rénovation intérieure, débarras et nettoyage en Île-de-France.' ?>" />

      <!-- Google Analytics sera chargé dynamiquement après consentement (voir cookies.js) -->

      <!-- Polices -->
      <link rel="preconnect" href="https://fonts.googleapis.com" />
      <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;800&family=Poppins:wght@300;400;500;600&display=swap"
        rel="stylesheet"
      />

      <!-- Font Awesome -->
      <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" />

      <!-- ICONS -->
      <link rel="icon" href="./assets/img/logo.ico">

      <!-- CSS GLOBAL -->
      <link rel="stylesheet" href="./styles.css" />
    </head>

    <body>

      <!-- ===========================
      HEADER
  ============================ -->
  <header id="header-debarenov" class="header-debarenov">
    <div class="container header-inner">

      <!-- LOGO -->
      <a href="<?= $BASE_URL ?>" class="header-logo">
        <img src="./assets/img/asset-2.svg" alt="DEBARENOV Logo" />
      </a>

      <button id="nav-toggle" class="nav-toggle" aria-label="Ouvrir le menu">
        <span></span><span></span><span></span>
      </button>

      <nav id="main-nav" class="main-nav">
        <ul>
          <li><a href="<?= $BASE_URL ?>">Accueil</a></li>

          <li class="has-submenu">
            <a href="#services" class="submenu-toggle">Services ></a>

            <ul class="submenu">
              <li><a href="<?= $BASE_URL ?>debarras">Débarras</a></li>
              <li><a href="<?= $BASE_URL ?>renovation">Rénovation</a></li>
              <li><a href="<?= $BASE_URL ?>nettoyage">Nettoyage</a></li>
              <li><a href="<?= $BASE_URL ?>vider-maison-apres-deces">Vider maison après décès</a></li>
              <li><a href="<?= $BASE_URL ?>debarras-succession">Débarras succession</a></li>
            </ul>
          </li>

          <!-- ancres internes → OK -->
          <li><a href="<?= $BASE_URL ?>#copro-debarenov">Syndic & Copro</a></li>
          <li><a href="<?= $BASE_URL ?>blog">Blog</a></li>
          <li><a href="<?= $BASE_URL ?>#contact-form">Contact</a></li>
        </ul>
      </nav>

    </div>
  </header>