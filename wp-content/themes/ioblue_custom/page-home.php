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
      <div class="swiper-slide slide-1">
        <div class="slider-boxes">
          <div class="slider-box-rosa">
            YOUR HEALTHCARE PARTNER
          </div>
          <div class="slider-box-bianco">
            <p><strong>IOBLUE</strong> è il cuore delle connessioni nel settore healthcare: da un nodo, infinite
              opportunità di crescita e d'innovazione.</p>
          </div>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="swiper-slide slide-2">
        <div class="slider-boxes">
          <div class="slider-box-rosa">
            I NOSTRI PRODOTTI
          </div>
          <div class="slider-box-bianco">
            <p><strong>IOBLUE</strong> porta l'innovazione tecnologica nel settore healthcare con soluzioni
              all'avanguardia.</p>
          </div>
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="swiper-slide slide-3">
        <div class="slider-boxes">
          <div class="slider-box-blu">
            R&amp;D
          </div>
          <div class="slider-box-bianco">
            <p> Agiamo con il partner per favorire un processo<br>
              di <strong>continua innovazione scientifica e/o tecnologica</strong></p>
          </div>
        </div>
      </div>

      <!-- Slide 4 -->
      <div class="swiper-slide slide-4">
        <div class="slider-boxes">
          <div class="slider-box-blu">
            PARTNERING
          </div>
          <div class="slider-box-bianco">
            <p>Per <strong>IOBLUE</strong> sono <strong>tre</strong> i <strong>pilastri</strong>
              della <strong>collaborazione strategica</strong>:</p>
          </div>
          <div class="slider-pilastri-row">
            <div class="slider-box-pilastro1">
              <strong>1.</strong> Fiducia reciproca
            </div>
            <div class="slider-box-pilastro2">
              <strong>2.</strong> Impegni condivisi
            </div>
            <div class="slider-box-pilastro3">
              <strong>3.</strong> Obiettivi comuni
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Paginazione e frecce -->
    <div class="swiper-pagination"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
  </div>

  <!-- SEZIONE HERO TEXT - SOLO BOOTSTRAP -->
  <section class="bg-home-background col">
    <div class="bg-home-background-inner position-relative">
      <!-- Hero Text con solo Bootstrap -->
     
      <!-- Desktop version -->
      <div class="home-hero-text text-center ">
        Siamo presenti sul <strong class="fw-medium">mercato farmaceutico dal 2016</strong><br>
        con l'<strong class="fw-medium">obiettivo</strong> di essere un partner forte per lo <strong class="fw-medium">sviluppo del business</strong><br>
        delle piccole e delle medie imprese nel <strong class="fw-medium">settore healthcare</strong>.<br><br>
        <strong class="fw-medium">Connettiamo aziende nazionali ed internazionali</strong><br>
        offrendo soluzioni per favorire collaborazioni strategiche.
      </div>
      <!-- COSA FACCIAMO dentro il background -->
      <div class="row cosa-facciamo-row cosa-facciamo" style="
background: linear-gradient(
  to bottom,
  transparent 0,
  transparent 16px,
  rgba(0, 103, 152, 0.1) 16px,
  rgba(0, 103, 152, 0.1) calc(100% - 16px),
  transparent calc(100% - 16px),
  transparent 100%
);
">
        <div class="col-5 col-md-4 col-lg-4 cosa-facciamo-img">
          <img src=" <?php echo get_template_directory_uri(); ?>/assets/images/team-meeting.png" class="img-fluid"
          alt="Team meeting">
        </div>
        <div class="col-7 col-md-6">
          <h2 class="cosa-facciamo-titolo">COSA FACCIAMO</h2>
          <ul class="cosa-facciamo-lista list-unstyled">
            <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/numero-1.png" alt="Numero 1"
                class="cosa-facciamo-numero"><span class="cosa-facciamo-testo"> Individuiamo e selezioniamo nuovi
                partners </span></li>
            <li> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/numero-2.png" alt="Numero 2"
                class="cosa-facciamo-numero"> <span class="cosa-facciamo-testo dflex"> Espandiamo e diversifichiamo le
                linee di prodotto</span></li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/numero-3.png" alt="Numero 3"
                class="cosa-facciamo-numero"> <span class="cosa-facciamo-testo"> Ottimizziamo l'import-export</span>
            </li>
          </ul>
        </div>
      </div>




      <div class="row  rd d-flex justify-content-center" style="
background: linear-gradient(
  to bottom,
  transparent 0,
  transparent 16px,
  rgba(0, 103, 152, 0.1) 16px,
  rgba(0, 103, 152, 0.1) calc(100% - 16px),
  transparent calc(100% - 16px),
  transparent 100%
);
">
       
        <div class="col-6 col-md-7 col-lg-8 rd-col">
          <h2 class="rd-titolo">R&D</h2>
          <p class="rd-testo"> Grazie alla nostra <strong>rete di esperti</strong> e alle collaborazioni  con impianti produttivi all'avanguardia, possiamo supportarvi nello <strong> sviluppo di prodotti personalizzati</strong>, 
          <strong>specificamente pensati</strong> per il <strong>settore della dermocosmesi e della nutraceutica</strong>.</p>
        </div> 
        <div class="col-6 col-md-5 col-lg-4 rd-img" >
          <img src=" <?php echo get_template_directory_uri(); ?>/assets/images/r&d-home.png" class="img-fluid"
          alt="Team meeting">
        </div>
      </div>
      <div class="row  rd d-flex justify-content-center" style="
background: linear-gradient(
  to bottom,
  transparent 0,
  transparent 16px,
  rgba(0, 103, 152, 0.1) 16px,
  rgba(0, 103, 152, 0.1) calc(100% - 16px),
  transparent calc(100% - 16px),
  transparent 100%
);
">
       
        <div class="col-6 col-md-7 col-lg-8 rd-col">
          <h2 class="cl-titolo">COME LAVORIAMO</h2>
          <p class="cl-testo"><strong>IOBLUE</strong> è un'azienda di servizi che, grazie a <strong> di fiducia consolidati nel tempo</strong>, con i suoi partners, <strong>guida le aziende verso accordi di valore</strong>, eliminando rischi e <strong>garantendo qualità e supporto continuo</strong>. 
          <strong><br> <br>Il costante follow-up fa parte del nostro impegno.</strong></p>
        </div> 
       
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>

<script>
document.addEventListener('DOMContentLoaded', function() {
  // Seleziona tutte le box animate
  const boxes = document.querySelectorAll('.slider-box-rosa, .slider-box-bianco, .slider-box-blu');
  // Seleziona tutti i titoli da animare
  const titles = document.querySelectorAll('.cosa-facciamo-titolo, .rd-titolo, .cl-titolo');
  const animations = ['fade-in-up', 'fade-in-down', 'fade-in-left', 'fade-in-right'];

  const observer = new IntersectionObserver((entries, obs) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const anim = animations[Math.floor(Math.random() * animations.length)];
        entry.target.classList.add(anim);
        obs.unobserve(entry.target);
      }
    });
  }, { threshold: 0.2 });

  boxes.forEach(box => observer.observe(box));
  titles.forEach(title => observer.observe(title));
});
</script>