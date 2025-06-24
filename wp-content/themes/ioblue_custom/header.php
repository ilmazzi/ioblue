<?php
/**
 * Header del tema ioblue_custom
 * Contiene logo centrato e hamburger menu solo su mobile
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="site-header">
  <div class="header-inner">

    <!-- Pulsante hamburger (solo mobile) -->
    <button class="hamburger" id="menu-toggle" aria-label="Apri menu mobile">
      <span></span>
      <span></span>
      <span></span>
    </button>

    <!-- Logo centrato -->
    <div class="site-logo">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="ioblue logo">
    </div>

  </div>
</header>
