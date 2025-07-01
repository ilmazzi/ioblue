<?php
/**
 * Header del tema ioblue_custom
 * Layout: logo a sinistra, bandiere sopra menu a destra, entrambi allineati a destra
 * Box header con bordo blu e padding
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Adobe Fonts: Tenso -->
  <link rel="stylesheet" href="https://use.typekit.net/xdt6wwj.css">
  <!-- Font utility classes -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/fonts.css">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="header-box position-relative">
  <div class="container-fluid">
    <div class="header-flex d-flex flex-column flex-md-row align-items-center align-items-md-start justify-content-between w-100 position-relative">
      <!-- Sinistra: burger + logo + bandiere (burger solo mobile) -->
      <div class="header-left d-flex align-items-center justify-content-center justify-content-md-start w-100 w-md-auto mb-3 mb-md-0">
        <button class="navbar-toggler d-md-none me-2 order-1" type="button" data-bs-toggle="collapse" data-bs-target="#mobileMenu" aria-controls="mobileMenu" aria-expanded="false" aria-label="Toggle navigation">
          <span class="custom-burger">
            <span></span>
            <span></span>
            <span></span>
          </span>
        </button>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="ioblue logo" class="logo-desktop order-2">
        <!-- Bandiere accanto al logo SOLO su mobile/tablet -->
        <div class="header-lang d-flex align-items-center ms-3 d-md-flex d-lg-none order-3">
          <?php if(function_exists('pll_the_languages')) pll_the_languages([
            'show_flags'=>1,
            'show_names'=>0,
            'hide_if_no_translation'=>1,
            'display_names_as'=>'slug',
            'raw'=>0
          ]); ?>
        </div>
      </div>
      <!-- Destra: bandiere sopra, menu sotto (solo desktop) -->
      <div class="header-right d-flex flex-column align-items-end justify-content-start w-100 w-md-auto">
        <!-- Bandiere sopra il menu SOLO su desktop -->
        <div class="header-lang d-none d-lg-flex flex-column align-items-end mb-2">
          <?php if(function_exists('pll_the_languages')) pll_the_languages([
            'show_flags'=>1,
            'show_names'=>0,
            'hide_if_no_translation'=>1,
            'display_names_as'=>'slug',
            'raw'=>0
          ]); ?>
        </div>
        <!-- Menu orizzontale desktop, centrato mobile/tablet -->
        <nav class="header-menu d-none d-md-flex justify-content-center justify-content-lg-end w-100 mt-3 mt-lg-0">
          <?php
            wp_nav_menu([
              'theme_location' => 'main_menu',
              'menu_class' => 'menu nav',
              'container' => false,
              'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            ]);
          ?>
        </nav>
      </div>
    </div>
    <!-- Mobile: menu a tendina overlay -->
    <div class="collapse d-md-none position-absolute start-0 end-0 top-100 shadow bg-white z-3" id="mobileMenu">
      <nav class="header-menu-mobile mt-3">
        <?php
          wp_nav_menu([
            'theme_location' => 'main_menu',
            'menu_class' => 'menu nav flex-column',
            'container' => false,
            'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
          ]);
        ?>
      </nav>
    </div>
  </div>
</header>

<!-- Bootstrap 5 JS (opzionale) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
