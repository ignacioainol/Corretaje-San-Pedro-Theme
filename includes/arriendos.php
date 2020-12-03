<?php

global $post;
$args = array( 'numberposts' => 10, 'category_name' => 'arriendo' );
$posts = get_posts( $args );

 ?>

<main id="main" style="margin-top:7em;">
        <section id="viviendas-ventas" class="portfolio">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h3>Propiedades <span>En Arriendo</span></h3>
                </div>

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                <?php foreach ($posts as $post) : setup_postdata($post); ?>
                <?php $urlImage = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
                <?php $categoryArray = get_the_category(); ?>
                <?php $category =  esc_html( $categoryArray[0]->name); ?>
                <?php $tipoinmueble = get_post_meta($post->ID,'tipo_inmueble',true); ?>
                <?php $dormitorios = get_post_meta($post->ID,'dormitorios',true); ?>
                <?php $banios = get_post_meta($post->ID,'banios',true); ?>
                <?php $comuna = get_post_meta($post->ID,'comuna',true); ?>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="<?php echo $urlImage ?>"
                            class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4><?php the_title(); ?></h4>
                            <p><i class="fas fa-bed"></i> <?= $dormitorios ?> dorm - <i class="fas fa-shower"></i> <?= $banios ?> Baño<?= $banios > 1 ? 's': ''; ?> - <i
                        class="fas fa-map-marker-alt"></i> <?= $comuna ?> </p>
                        </div>
                    </div>
                <?php endforeach ?>

                </div>

            </div>
        </section><!-- End Portfolio Section -->
    </main>