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
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
      <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;800&family=Poppins:wght@300;400;500;600&display=swap"
        rel="stylesheet"
      />
      <!-- Preload polices critiques -->
      <link rel="preload" href="<?= $BASE_URL ?>assets/fonts/Ranade-Regular.woff2" as="font" type="font/woff2" crossorigin />
      <link rel="preload" href="<?= $BASE_URL ?>assets/fonts/Ranade-Bold.woff2" as="font" type="font/woff2" crossorigin />

      <!-- Font Awesome -->
      <link rel="preconnect" href="https://cdnjs.cloudflare.com" />
      <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
            media="print"
            onload="this.media='all'" />
      <noscript><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"></noscript>

      <!-- ICONS -->
      <link rel="icon" href="/assets/img/logo.ico">

      <!-- CSS CRITIQUE INLINE (above-the-fold) -->
      <style>
        :root{--white:#fff;--anthracite:#1f2933;--noir:#000;--gris-clair:#f5f5f5;--container-width:1200px}
        *,*::before,*::after{box-sizing:border-box;margin:0;padding:0}
        .container{max-width:var(--container-width);margin:0 auto;padding:0 1.5rem}
        .header-debarenov{background:var(--white);padding:.9rem 0;position:sticky;top:0;z-index:1000;box-shadow:0 5px 20px rgba(0,0,0,.05);border-bottom:1px solid #dfdfdf}
        .header-inner{display:flex;align-items:center;justify-content:space-between}
        .header-logo img{height:48px;width:auto}
        .nav-toggle{display:none;background:none;border:none;cursor:pointer;flex-direction:column;gap:5px;padding:8px}
        .nav-toggle span{width:25px;height:2px;background:#000;transition:all .3s}
        .main-nav ul{display:flex;list-style:none;gap:2rem;align-items:center}
        .main-nav a{text-decoration:none;color:#000;font-weight:500;transition:color .3s}
        .main-nav a:hover{color:var(--anthracite)}
        .hero-debarenov{position:relative;width:100vw;height:95vh;left:50%;margin-left:-50vw;background:url('./assets/img/hero/salon-lumineux-noir.jpg') top/cover no-repeat;display:flex;align-items:center;overflow:hidden}
        @media (max-width:768px){.nav-toggle{display:flex}.main-nav{display:none}.main-nav.open{display:block}}
      </style>

      <!-- CSS GLOBAL (chargé de manière asynchrone) -->
      <link rel="preload" href="<?= $BASE_URL ?>styles.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
      <noscript><link rel="stylesheet" href="<?= $BASE_URL ?>styles.css"></noscript>
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