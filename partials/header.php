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
        .has-submenu{position:relative}
        .main-nav>ul>.has-submenu::before{content:'';position:absolute;top:100%;left:0;right:0;height:0.5rem;background:transparent;z-index:1099}
        .submenu{position:absolute;top:100%;left:0;display:none!important;flex-direction:column;background:var(--white);min-width:220px;padding:.5rem 0;border-radius:8px;box-shadow:0 10px 25px rgba(0,0,0,.1);list-style:none;z-index:1100;margin-top:0.5rem}
        @media (min-width:1025px){.has-submenu:hover>.submenu,.has-submenu .submenu:hover,.submenu:hover{display:block!important}}
        .submenu-level-2{position:absolute;left:100%;top:0;margin-left:.5rem;z-index:1200}
        @media (min-width:1025px){.submenu .has-submenu:hover>.submenu-level-2,.submenu .has-submenu .submenu-level-2:hover,.submenu-level-2:hover{display:block!important}}
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
              <li class="has-submenu">
                <a href="#" class="submenu-toggle">Débarras ></a>
                <ul class="submenu submenu-level-2">
                  <li><a href="<?= $BASE_URL ?>debarras-garage">Garage</a></li>
                  <li><a href="<?= $BASE_URL ?>debarras-grenier-cave">Cave et Grenier</a></li>
                  <li><a href="<?= $BASE_URL ?>debarras-encombrant">Encombrants</a></li>
                  <li><a href="<?= $BASE_URL ?>debarras-diogenes">Diogènes</a></li>
                  <li><a href="<?= $BASE_URL ?>debarras-gravat">Gravats</a></li>
                  <li><a href="<?= $BASE_URL ?>debarras">Maisons et appartements</a></li>
                  <li><a href="<?= $BASE_URL ?>debarras-succession">Succession</a></li>
                  <li><a href="<?= $BASE_URL ?>vider-maison-apres-deces">Videz maison après décès</a></li>
                </ul>
              </li>
              <li class="has-submenu">
                <a href="#" class="submenu-toggle">Nettoyage ></a>
                <ul class="submenu submenu-level-2">
                  <li><a href="<?= $BASE_URL ?>nettoyage-maison">Maison</a></li>
                  <li><a href="<?= $BASE_URL ?>nettoyage">Professionnel</a></li>
                  <li><a href="<?= $BASE_URL ?>nettoyage-appartement">Appartements</a></li>
                  <li><a href="<?= $BASE_URL ?>syndic-et-copro">Syndic & copropriétés</a></li>
                </ul>
              </li>
              <li><a href="<?= $BASE_URL ?>renovation">Rénovation</a></li>
            </ul>
          </li>

          <!-- ancres internes → OK -->
          <li><a href="<?= $BASE_URL ?>syndic-et-copro">Syndic & Copro</a></li>
          <li><a href="<?= $BASE_URL ?>blog">Blog</a></li>
          <li><a href="<?= $BASE_URL ?>#contact-form">Contact</a></li>
        </ul>
      </nav>

    </div>
  </header>