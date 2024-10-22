<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Zeroinvestissement</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('build/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('build/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('build/assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('build/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('build/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
  <link href="{{ asset('build/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">  
  <!-- Template Main CSS File -->
  <link href="{{ asset('build/assets/css/main.css') }}" rel="stylesheet">
  <!-- =======================================================
  * Template Name: Nova
  * Updated: Aug 30 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/nova-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="page-index">

 <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <img src="{{ asset('build/assets/img/logo.png')}}" alt="" style="width: 90px;">
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="/login" class="active">Se connecter</a></li>
          <li><a href="/register" class="active">S'inscrire</a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-xl-4">
          <h2 data-aos="fade-up">Transformez vos ambitions en réussites avec nous.</h2>
          <blockquote data-aos="fade-up" data-aos-delay="100">
            <p>Nous sommes une entreprise dédiée à accompagner nos clients vers le succès. Grâce à notre expertise, nous transformons vos idées les plus audacieuses en projets concrets et aboutis. Ensemble, faisons de vos ambitions une réalité.</p>
          </blockquote>
          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
            <a href="/login" class="btn-get-started">Rejoignez-nous !</a>
            <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Découvrez notre vision</span></a>
          </div>
        </div>
      </div>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= Why Choose Us Section ======= -->
    <section id="why-us" class="why-us mb-3">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Pourquoi nous choisir ?</h2>
        </div>

        <div class="row g-0" data-aos="fade-up" data-aos-delay="200">
          <div class="col-xl-5 img-bg"></div>
          <div class="col-xl-7 slides  position-relative">
            <div class="slides-1 swiper">
              <div class="swiper-wrapper">

                <div class="swiper-slide">
                  <div class="item">
                    <h3 class="mb-3">Votre réussite, notre priorité</h3>
                    <h4 class="mb-3">Nous croyons en une approche sur-mesure qui met vos besoins au centre de notre démarche.</h4>
                    <p>Que vous soyez une petite entreprise ou un grand groupe, notre mission est de vous apporter des solutions efficaces et personnalisées, adaptées à vos objectifs et défis.</p>
                  </div>
                </div><!-- End slide item -->

                <div class="swiper-slide">
                  <div class="item">
                    <h3 class="mb-3">Une expertise reconnue</h3>
                    <h4 class="mb-3">Nous mettons à votre disposition notre savoir-faire pour vous aider à atteindre vos ambitions.</h4>
                    <p>Notre équipe d'experts est à votre écoute pour analyser vos besoins et vous proposer des stratégies innovantes, qui vous permettront de vous démarquer dans un marché compétitif.</p>
                  </div>
                </div><!-- End slide item -->

                <div class="swiper-slide">
                  <div class="item">
                    <h3 class="mb-3">Un engagement sans faille</h3>
                    <h4 class="mb-3">Nous sommes engagés à vos côtés tout au long de votre projet, jusqu’à l'atteinte de vos objectifs.</h4>
                    <p>Grâce à notre méthode basée sur la collaboration et l'innovation, nous construisons ensemble les fondations solides de votre réussite.</p>
                  </div>
                </div><!-- End slide item -->

              </div>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          </div>
        </div>

      </div>
    </section><!-- End Why Choose Us Section -->
<!-- ======= Our Services Section ======= -->
<section id="services-list" class="services-list">
  <div class="container" data-aos="fade-up">

    <div class="section-header">
      <h2>Nos Services</h2>
      <p>Nous offrons une gamme de services conçus pour répondre à vos besoins professionnels et personnels, garantissant un accompagnement de qualité pour votre transformation digitale.</p>
    </div>

    <div class="row gy-5">

      <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
        <div class="icon flex-shrink-0"><i class="bi bi-globe" style="color: #f57813;"></i></div>
        <div>
          <h4 class="title"><a href="#" class="stretched-link">Développement Web sur Mesure</a></h4>
          <p class="description">Nous créons des sites web personnalisés, allant de simples pages vitrines à des applications web complexes, adaptées à vos besoins spécifiques.</p>
        </div>
      </div>
      <!-- End Service Item -->

      <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
        <div class="icon flex-shrink-0"><i class="bi bi-card-checklist" style="color: #15a04a;"></i></div>
        <div>
          <h4 class="title"><a href="#" class="stretched-link">Consultation en Transformation Digitale</a></h4>
          <p class="description">Nous vous aidons à identifier et à implémenter des solutions numériques pour améliorer vos processus d'entreprise et votre efficacité.</p>
        </div>
      </div><!-- End Service Item -->

      <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="300">
        <div class="icon flex-shrink-0"><i class="bi bi-bar-chart" style="color: #d90769;"></i></div>
        <div>
          <h4 class="title"><a href="#" class="stretched-link">Gestion de Données et Analyses</a></h4>
          <p class="description">Optimisez vos prises de décision grâce à une gestion efficace de vos données et des analyses poussées pour orienter votre stratégie.</p>
        </div>
      </div><!-- End Service Item -->

      <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="400">
        <div class="icon flex-shrink-0"><i class="bi bi-binoculars" style="color: #15bfbc;"></i></div>
        <div>
          <h4 class="title"><a href="#" class="stretched-link">Solutions e-Commerce</a></h4>
          <p class="description">Boostez vos ventes avec notre expertise dans la création et l'optimisation de plateformes e-commerce performantes et ergonomiques.</p>
        </div>
      </div><!-- End Service Item -->

      <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="500">
        <div class="icon flex-shrink-0"><i class="bi bi-brightness-high" style="color: #f5cf13;"></i></div>
        <div>
          <h4 class="title"><a href="#" class="stretched-link">Marketing Digital et SEO</a></h4>
          <p class="description">Améliorez la visibilité de votre entreprise en ligne grâce à nos stratégies de marketing digital et d'optimisation pour les moteurs de recherche.</p>
        </div>
      </div><!-- End Service Item -->

      <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="600">
        <div class="icon flex-shrink-0"><i class="bi bi-calendar4-week" style="color: #1335f5;"></i></div>
        <div>
          <h4 class="title"><a href="#" class="stretched-link">Formation et Support Technique</a></h4>
          <p class="description">Nous proposons des formations adaptées à vos équipes pour maximiser l'utilisation de vos outils numériques et offrons un support technique dédié.</p>
        </div>
      </div><!-- End Service Item -->

    </div>

  </div>
</section><!-- End Our Services Section -->

    <!-- ======= Call To Action Section ======= -->
    <section id="call-to-action" class="call-to-action mt-4">
      <div class="container" data-aos="fade-up">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <h3>Rejoignez notre communauté de clients satisfaits</h3>
            <p>Faites confiance à notre expertise pour transformer vos idées en succès. Prenez contact avec nous dès aujourd'hui pour démarrer votre projet.</p>
            <a class="cta-btn" href="/login">Rejoignez-nous</a>
          </div>
        </div>
      </div>
    </section><!-- End Call To Action Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Ce que disent nos clients</h2>
        </div>

        <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Grâce à leur expertise et leur accompagnement, nous avons pu transformer nos projets en succès. Une équipe toujours à l'écoute et engagée.
                </p>
                <div class="profile mt-auto">
                  <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                  <h3>Saul Goodman</h3>
                  <h4>CEO &amp; Fondateur</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Une approche personnalisée et des résultats concrets. Nous recommandons fortement cette entreprise à tous ceux qui souhaitent se développer.
                </p>
                <div class="profile mt-auto">
                  <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                  <h3>Sara Wilsson</h3>
                  <h4>Designer</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
        </div>
      </div>
    </section><!-- End Testimonials Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
<footer id="footer" class="footer">

  <div class="footer-content">
    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-info">
          <a href="index.html" class="logo d-flex align-items-center">
            <img src="{{ asset('build/assets/img/logo.png')}}" alt="" style="width: 90px;">
          </a>
          <p>Nous accompagnons nos clients dans leur transformation numérique, offrant des solutions innovantes et sur-mesure pour garantir leur succès.</p>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Navigation</h4>
          <ul>
            <li><i class="bi bi-dash"></i> <a href="/">Page d'accueil</a></li>
            <li><i class="bi bi-dash"></i> <a href="/login">Se connecter</a></li>
            <li><i class="bi bi-dash"></i> <a href="/register">S'inscrire</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Contactez-nous</h4>
          <p>
            A108 Rue Adam <br>
            Cotonou, Bénin<br><br>
            <strong>Téléphone:</strong> +229 91 23 45 67<br>
            <strong>Email:</strong> info@zeroinvestissement.com<br>
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="footer-legal">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Zeroinvestissement</span></strong>. Tous droits réservés.
      </div>
    </div>
  </div>

</footer><!-- End Footer -->


  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!--<div id="preloader"></div>-->

  <!-- Vendor JS Files -->
  <script src="{{ asset('build/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('build/assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('build/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('build/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('build/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('build/assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('build/assets/js/main.js') }}"></script>

</body>

</html>