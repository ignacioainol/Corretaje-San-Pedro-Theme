<?php get_header(); ?>

<style>
	.pgwSlideshow ul {
	padding-left: 0 !important;
	}
</style>

<main id="main" data-aos="fade-up">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2><?php echo  the_title(); ?></h2>
          <!-- <ol>
            <li><a href="index.html">Home</a></li>
            <li><a href="portfolio.html">Portfolio</a></li>
            <li>Portfolio Details</li>
          </ol> -->
        </div>

      </div>
    </section><!-- Breadcrumbs Section -->

    <!-- ======= Portfolio Details Section ======= -->
    <section class="portfolio-details">
      <div class="container">

        <div class="portfolio-details-container">

        <?php while ( have_posts() ) : the_post(); ?>
        <?php $tipoinmueble = ucfirst(get_post_meta($post->ID,'tipo_inmueble',true)); ?>
        <?php $dormitorios = get_post_meta($post->ID,'dormitorios',true); ?>
        <?php $banios = get_post_meta($post->ID,'banios',true); ?>
        <?php $mts = get_post_meta($post->ID,'mts',true); ?>
        <?php $ciudad = get_post_meta($post->ID,'ciudad',true); ?>

        <div class="row">
          <div class="col-md-6 col-sm-12">
            <ul class="pgwSlideshow">
              <?php for($i = 1; $i <= 12; $i++): ?>
                <li><img src="<?php bloginfo('template_url') ?>/img/depa_andalue/<?php echo $i ?>.jpg" alt=""></li>
              <?php endfor;?>
            </ul>
          </div>

          <div class="col-md-6 col-sm-12">
            <div class="portfolio-info">
                <h3>Información</h3>
                <ul>
                <li><strong>Ciudad</strong>: <?php echo $ciudad ?> </li>
                  <li><strong>Comuna</strong>: San Pedro de la Paz</li>
                  <li><strong>Tipo</strong>: <?php echo $tipoinmueble ?></li>
                  <li><strong>Dormitorios</strong>: <?php echo $dormitorios ?> Dormitorio<?php echo  $dormitorios > 1 ? 's': '' ?></li>
                  <li><strong>Baños</strong>: <?php echo $banios;?> Baño<?php echo  $banios > 1 ? 's': '' ?></li>
                  <li><strong>Tamaño</strong>: <?php echo $mts ?> mts2</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <?php endwhile; ?>

        <div class="portfolio-description">
          <h2>Descripción</h2>
          <p>
            <?php echo $content; ?>
          </p>
        </div>
      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->
<?php get_footer(); ?>