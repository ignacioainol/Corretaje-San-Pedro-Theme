<?php query_posts( array(
   'posts_per_page' => 12,
)); ?>

<?php get_header(); ?>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <h1>Hola!</spa>
      </h1>
      <h2>Bienvenido a las mejores publicaciones de vivienda para comprar o alquilar</h2>
      <div class="d-flex">
        <a href="#about" class="btn-get-started scrollto">Comencemos</a>
        <!-- <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox btn-watch-video" data-vbtype="video"
          data-autoplay="true"> Watch Video <i class="icofont-play-alt-2"></i></a> -->
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-md-6 col-lg-6 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="fas fa-american-sign-language-interpreting fa-3x"></i></div>
              <h4 class="title"><a href="">Rapidez, en la búsqueda de solicitudes</a></h4>
              <p class="description">Profesionalismo trabajamos entregando un servicio de calidad y de satisfacción
                garantizada</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-6 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">Colaboración entre corredores de la zona</a></h4>
              <p class="description">Gestión integral, asesoría en venta y compra de propiedad es así como también la
                logística en la entrga del inmueble</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Featured Services Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h3>¿ Quienes somos ? </h3>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="zoom-out" data-aos-delay="100">
            <!-- <img src="assets/img/about.jpg" class="img-fluid" alt=""> -->
            <img src="https://www.bizneo.com/blog/wp-content/uploads/2020/03/home-office.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up"
            data-aos-delay="100">
            <h3>Nuestra definición</h3>
            <p>
              Profesionales del área de la ingeniería en administración relaciones públicas especializados en la gestión
              de venta y arriendo de bienes raíces. Entregando un servicio personalizado y garantizado , teniendo como
              objetivo la satisfacción de nuestros clientes.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Publicaciones Section ======= -->
    <section id="publicaciones" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Ventas y Arriendos</h2>
          <h3>Últimas <span>Publicaciones</span></h3>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">Todas</li>
              <li data-filter=".filter-app">Arriendos</li>
              <li data-filter=".filter-web">Ventas</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

         <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
              <?php $urlImage = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
              <?php $categoryArray = get_the_category(); ?>
              <?php $category =  esc_html( $categoryArray[0]->name); ?>
              <?php $tipoinmueble = get_post_meta($post->ID,'tipo_inmueble',true); ?>
              <?php $dormitorios = get_post_meta($post->ID,'dormitorios',true); ?>
              <?php $banios = get_post_meta($post->ID,'banios',true); ?>
              <?php $comuna = get_post_meta($post->ID,'comuna',true); ?>

              <?php if($category === 'Arriendo'): ?>
                <?php $filter = 'filter-app'; ?>
              <?php else: ?>
                <?php $filter = 'filter-web'; ?>
              <?php endif; ?>

              <a href="<?= the_permalink() ?>">
                <div class="col-lg-4 col-md-6 portfolio-item <?= $filter ?>">
                  <img src="<?= $urlImage ?>"
                    class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4><?= get_the_title(); ?></h4>
                    <p><i class="fas fa-bed"></i> <?= $dormitorios ?> dorm - <i class="fas fa-shower"></i> <?= $banios ?> Baño<?= $banios > 1 ? 's': ''; ?> - <i
                        class="fas fa-map-marker-alt"></i> <?= $comuna ?> </p>
                  </div>
                </div>
              </a>

              <?php endwhile; ?>
         <?php endif;  ?>


        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contacto</h2>
          <h3><span>Contáctanos</span></h3>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <!-- <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Nuestra Dirección</h3>
              <p>Las Margaritas 1301 4030000 San Pedro de La Paz, Chile</p>
            </div>
          </div> -->

          <div class="col-lg-6 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email</h3>
              <p>corretajessanpedro@gmail.com </p>
            </div>
          </div>

          <div class="col-lg-6 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Llámanos</h3>
              <p>+56 9 5424 4030</p>
            </div>
          </div>

        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-6 ">
            <iframe class="mb-4 mb-lg-0"
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3193.250007977538!2d-73.11501268470906!3d-36.83648807994109!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9669ca2260c97001%3A0x15a2e1361270f358!2sAv.%20las%20Margaritas%201301%2C%20San%20Pedro%20de%20la%20Paz%2C%20Regi%C3%B3n%20Metropolitana!5e0!3m2!1ses!2scl!4v1606699551775!5m2!1ses!2scl"
              frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
          </div>

          <div class="col-lg-6">
            <form action="<?= bloginfo('template_directory')?>/forms/sendmail.php" id="formContact" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="col form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Tu Nombre"
                    data-rule="minlen:4" data-msg="Ingresa minimo 4 carácteres" />
                  <div class="validate"></div>
                </div>
                <div class="col form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Tu Email"
                    data-rule="email" data-msg="Por Favor ingresa un email válido" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto"
                  data-rule="minlen:4" data-msg="Por favor ingresa mínimo 8 carácteres para el asunto" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required"
                  data-msg="Escribe algo para nosotros" placeholder="Mensaje"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Cargando</div>
                <div class="error-message"></div>
                <div class="sent-message">Tu mensaje ha sido enviado. Gracias!!</div>
              </div>
              <div class="text-center"><button type="submit">Enviar Mensaje</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <?php get_footer(); ?>