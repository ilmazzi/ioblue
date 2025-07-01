<?php
/**
 * Template Name: Home Page IobLue
 */
get_header(); ?>

<main>
  <!-- Swiper Slider Full Width -->
  <div class="swiper slider-fullwidth">
    <div class="swiper-wrapper">
      <!-- Slide 1 -->
      <div class="swiper-slide slide-1" style="background-image: url('http://ioblue.local/wp-content/uploads/slider2/istockphoto-1478952690-1024x1024_2.png')">
        <div class="slider-boxes">
          <div class="slider-box-rosa">
            YOUR HEALTHCARE PARTNER
          </div>
          <div class="slider-box-bianco">
            <strong>IOBLUE</strong> è il cuore delle connessioni nel settore healthcare: da un nodo, infinite opportunità di crescita e d'innovazione.
          </div>
        </div>
      </div>
      <!-- Slide 2 -->
      <div class="swiper-slide" style="background-image: url('http://ioblue.local/wp-content/uploads/slider2/Gruppodimaschere5.png')">
        <div class="slider-box">
          <h2 class="slider-titolo-rosa animate-fadein">ALTRA SLIDE</h2>
          <p class="slider-testo animate-up">Testo descrittivo della slide 2</p>
        </div>
      </div>
    </div>
    <!-- Paginazione e frecce -->
    <div class="swiper-pagination"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
  </div>
</main>

<?php get_footer(); ?>
