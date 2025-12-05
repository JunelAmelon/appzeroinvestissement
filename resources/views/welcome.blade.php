<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>ZeroInvestissement - Transformez votre vision en réalité</title>
  <meta content="Accompagnement gratuit pour vos projets ambitieux" name="description">
  <meta content="investissement, projet, startup, franchise" name="keywords">

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

  <style>
    :root {
      --primary-color: #6A00B8;
      --secondary-color: #00d4ff;
      --success-color: #00c853;
      --danger-color: #d32f2f;
      --warning-color: #ffc107;
      --light-bg: #f8f5ff;
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Inter', sans-serif;
    }

    body {
      background: linear-gradient(135deg, var(--light-bg) 0%, #ffffff 100%);
      min-height: 100vh;
    }

    /* Navbar */
    .navbar {
      background: linear-gradient(90deg, #B57EFF 0%, var(--primary-color) 100%);
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
      padding: 1rem 2rem;
    }

    .navbar-brand {
      font-weight: 700;
      font-size: 1.5rem;
      color: white !important;
      display: flex;
      align-items: center;
    }

    .navbar-brand img {
      width: 120px;
      height: auto;
    }

    .nav-link {
      color: white !important;
      font-weight: 500;
      padding: 0.6rem 1.5rem !important;
      border-radius: 6px;
      transition: all 0.3s ease;
      text-decoration: none;
      display: inline-block;
    }

    .nav-link:hover {
      background: rgba(255, 255, 255, 0.15);
      transform: translateY(-2px);
    }

    .navbar-nav {
      gap: 0.5rem;
      align-items: center;
    }

    .btn-login {
      background: transparent;
      color: white;
      border: 2px solid rgba(255, 255, 255, 0.3);
      font-weight: 600;
      padding: 0.6rem 1.5rem;
      border-radius: 6px;
      transition: all 0.3s ease;
      text-decoration: none;
      display: inline-block;
    }

    .btn-login:hover {
      background: rgba(255, 255, 255, 0.15);
      border-color: white;
      color: white;
      transform: translateY(-2px);
    }

    .btn-register {
      background: white;
      color: var(--primary-color);
      border: 2px solid white;
      font-weight: 600;
      padding: 0.6rem 1.8rem;
      border-radius: 6px;
      transition: all 0.3s ease;
      text-decoration: none;
      display: inline-block;
    }

    .btn-register:hover {
      background: rgba(255, 255, 255, 0.9);
      color: var(--primary-color);
      transform: translateY(-2px);
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
    }

    /* Hero Section */
    .hero-section {
      padding: 100px 0;
      min-height: 90vh;
      display: flex;
      align-items: center;
    }

    .hero-section h1 {
      font-size: 3rem;
      font-weight: 700;
      color: var(--primary-color);
      margin-bottom: 1.5rem;
      line-height: 1.2;
    }

    .hero-section p {
      font-size: 1.2rem;
      color: #666;
      margin-bottom: 2rem;
      line-height: 1.8;
    }

    .hero-buttons {
      display: flex;
      gap: 1rem;
      flex-wrap: wrap;
    }

    .btn-hero {
      padding: 1rem 2.5rem;
      font-size: 1.1rem;
      font-weight: 600;
      border-radius: 8px;
      border: none;
      transition: all 0.3s ease;
      text-decoration: none;
      display: inline-block;
    }

    .btn-hero-primary {
      background: linear-gradient(90deg, var(--primary-color) 0%, #8B00D4 100%);
      color: white;
    }

    .btn-hero-primary:hover {
      transform: translateY(-3px);
      box-shadow: 0 8px 20px rgba(106, 0, 184, 0.3);
      color: white;
    }

    .btn-hero-secondary {
      background: transparent;
      color: var(--primary-color);
      border: 2px solid var(--primary-color);
    }

    .btn-hero-secondary:hover {
      background: var(--primary-color);
      color: white;
      transform: translateY(-3px);
    }

    /* Section Header */
    .section-header {
      text-align: center;
      margin-bottom: 3rem;
    }

    .section-header h2 {
      font-size: 2.5rem;
      font-weight: 700;
      color: var(--primary-color);
      margin-bottom: 1rem;
    }

    .section-header p {
      font-size: 1.1rem;
      color: #666;
    }

    /* Feature Cards */
    .feature-card {
      background: white;
      border-radius: 12px;
      padding: 2rem;
      box-shadow: 0 2px 8px rgba(0,0,0,0.08);
      transition: all 0.3s ease;
      height: 100%;
      border: 2px solid transparent;
    }

    .feature-card:hover {
      box-shadow: 0 8px 24px rgba(0,0,0,0.15);
      border-color: var(--primary-color);
      transform: translateY(-5px);
    }

    .feature-icon {
      width: 70px;
      height: 70px;
      border-radius: 12px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 2rem;
      color: white;
      margin-bottom: 1.5rem;
    }

    .feature-card h4 {
      font-size: 1.3rem;
      font-weight: 700;
      color: #333;
      margin-bottom: 1rem;
    }

    .feature-card p {
      color: #666;
      margin-bottom: 0;
    }

    /* Services Section */
    .services-section {
      padding: 80px 0;
      background: white;
    }

    /* Testimonials */
    .testimonial-card {
      background: white;
      border-radius: 12px;
      padding: 2rem;
      box-shadow: 0 2px 8px rgba(0,0,0,0.08);
      margin-bottom: 2rem;
    }

    .testimonial-card .stars {
      color: #ffc107;
      margin-bottom: 1rem;
    }

    .testimonial-card .profile {
      display: flex;
      align-items: center;
      margin-top: 1.5rem;
    }

    .testimonial-card .profile img {
      width: 50px;
      height: 50px;
      border-radius: 50%;
      margin-right: 1rem;
    }

    /* Footer */
    .footer {
      background: linear-gradient(90deg, var(--primary-color) 0%, #8B00D4 100%);
      color: white;
      padding: 3rem 0 1.5rem;
    }

    .footer h4 {
      color: white;
      margin-bottom: 1.5rem;
      font-weight: 700;
    }

    .footer a {
      color: rgba(255, 255, 255, 0.8);
      text-decoration: none;
      transition: all 0.3s ease;
    }

    .footer a:hover {
      color: white;
      padding-left: 5px;
    }

    .footer .social-links a {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 40px;
      height: 40px;
      background: rgba(255, 255, 255, 0.2);
      border-radius: 50%;
      margin-right: 0.5rem;
      transition: all 0.3s ease;
    }

    .footer .social-links a:hover {
      background: white;
      color: var(--primary-color);
      transform: translateY(-3px);
    }

    @media (max-width: 1200px) {
      .hero-section h1 {
        font-size: 2.5rem;
      }

      .hero-section p {
        font-size: 1.1rem;
      }

      .section-header h2 {
        font-size: 2rem;
      }
    }

    @media (max-width: 992px) {
      .hero-section {
        padding: 80px 0;
      }

      .hero-section h1 {
        font-size: 2.2rem;
      }

      .stats-card h3 {
        font-size: 2rem;
      }

      .feature-card,
      .how-it-works-card {
        padding: 1.5rem;
      }
    }

    @media (max-width: 768px) {
      .hero-section {
        padding: 60px 0;
      }

      .hero-section h1 {
        font-size: 2rem;
      }

      .hero-section p {
        font-size: 1rem;
      }

      .section-header h2 {
        font-size: 1.8rem;
      }

      .stats-card {
        padding: 1.5rem;
      }

      .stats-card h3 {
        font-size: 1.8rem;
      }

      .feature-card,
      .how-it-works-card {
        padding: 1.25rem;
      }

      .feature-card h3,
      .how-it-works-card h4 {
        font-size: 1.2rem;
      }

      .btn-cta,
      .btn-login {
        padding: 0.7rem 1.5rem;
        font-size: 0.95rem;
      }
    }

    @media (max-width: 576px) {
      .hero-section h1 {
        font-size: 1.75rem;
      }

      .hero-section p {
        font-size: 0.95rem;
      }

      .section-header h2 {
        font-size: 1.5rem;
      }

      .section-header p {
        font-size: 0.9rem;
      }

      .stats-card {
        padding: 1.25rem;
      }

      .stats-card h3 {
        font-size: 1.5rem;
      }

      .stats-card p {
        font-size: 0.85rem;
      }

      .feature-card,
      .how-it-works-card {
        padding: 1rem;
      }

      .feature-icon,
      .step-number {
        font-size: 2rem;
        width: 60px;
        height: 60px;
      }

      .btn-cta,
      .btn-login {
        padding: 0.6rem 1.2rem;
        font-size: 0.9rem;
      }
    }
  </style>
</head>

<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
    <div class="container">
      <a class="navbar-brand" href="/">
        <img src="{{ asset('build/assets/img/logo.png') }}" alt="ZeroInvestissement">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="btn-login" href="/login">
              <i class="fas fa-sign-in-alt me-2"></i>Se connecter
            </a>
          </li>
          <li class="nav-item">
            <a class="btn-register" href="/register">
              <i class="fas fa-user-plus me-2"></i>S'inscrire
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <section class="hero-section">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <h1>Transformez votre vision en réalité.</h1>
          <p>Nous vous accompagnons gratuitement sur vos projets les plus ambitieux, avec une rémunération basée uniquement sur les résultats. Ensemble, faisons de votre succès notre priorité et relevons chaque défi avec détermination !</p>
          <div class="hero-buttons">
            <a href="/register" class="btn-hero btn-hero-primary">
              <i class="fas fa-rocket me-2"></i>Commencer Maintenant
            </a>
            <a href="/login" class="btn-hero btn-hero-secondary">
              <i class="fas fa-sign-in-alt me-2"></i>Se Connecter
            </a>
          </div>
        </div>
        <div class="col-lg-6">
          <!-- Espace pour une image hero si nécessaire -->
        </div>
      </div>
    </div>
  </section>

  <!-- Services Section -->
  <section class="services-section">
    <div class="container">
      <div class="section-header">
        <h2>Nos Services</h2>
        <p>Des solutions complètes pour tous vos projets entrepreneuriaux</p>
      </div>

      <div class="row g-4">
        <div class="col-lg-4 col-md-6">
          <div class="feature-card">
            <div class="feature-icon" style="background: linear-gradient(135deg, #6A00B8 0%, #8B00D4 100%);">
              <i class="fas fa-globe"></i>
            </div>
            <h4>Sites Web & Applications</h4>
            <p>Développement complet de sites web et applications mobiles avec une stratégie de lancement optimale.</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="feature-card">
            <div class="feature-icon" style="background: linear-gradient(135deg, #FF6B6B 0%, #FF8E8E 100%);">
              <i class="fas fa-store"></i>
            </div>
            <h4>Développement de Franchise</h4>
            <p>Modèles d'affaires scalables avec support opérationnel et réseau de partenaires engagés.</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="feature-card">
            <div class="feature-icon" style="background: linear-gradient(135deg, #4ECDC4 0%, #44A08D 100%);">
              <i class="fas fa-chart-line"></i>
            </div>
            <h4>Opportunités d'Investissement</h4>
            <p>Connexion avec des projets uniques et des investisseurs pour maximiser votre potentiel.</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="feature-card">
            <div class="feature-icon" style="background: linear-gradient(135deg, #f57813 0%, #ff9f4a 100%);">
              <i class="fas fa-briefcase"></i>
            </div>
            <h4>Gestion de Projets</h4>
            <p>Accompagnement complet de la conception à la réalisation de vos projets ambitieux.</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="feature-card">
            <div class="feature-icon" style="background: linear-gradient(135deg, #15a04a 0%, #2ecc71 100%);">
              <i class="fas fa-lightbulb"></i>
            </div>
            <h4>Stratégie & Conseil</h4>
            <p>Expertise stratégique pour optimiser vos chances de succès et maximiser votre croissance.</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="feature-card">
            <div class="feature-icon" style="background: linear-gradient(135deg, #d90769 0%, #ff1a8c 100%);">
              <i class="fas fa-handshake"></i>
            </div>
            <h4>Support Dédié 24/7</h4>
            <p>Une équipe disponible pour vous accompagner à chaque étape de votre parcours entrepreneurial.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Why Choose Us Section -->
  <section class="py-5">
    <div class="container">
      <div class="section-header">
        <h2>Pourquoi Nous Choisir ?</h2>
        <p>Développons ensemble votre entreprise</p>
      </div>

      <div class="row g-4 align-items-center">
        <div class="col-lg-6">
          <h3 style="color: var(--primary-color); font-weight: 700; margin-bottom: 1.5rem;">Notre Engagement</h3>
          <p style="font-size: 1.1rem; line-height: 1.8; color: #666;">
            Nous croyons en votre vision et nous nous engageons à vos côtés sans frais initiaux. Notre rémunération est directement liée à votre succès, créant ainsi un partenariat authentique où vos objectifs deviennent les nôtres.
          </p>
          <ul style="list-style: none; padding: 0; margin-top: 2rem;">
            <li style="padding: 0.8rem 0; border-bottom: 1px solid #e0e0e0;">
              <i class="fas fa-check-circle" style="color: var(--success-color); margin-right: 1rem;"></i>
              <strong>Aucun frais initial</strong> - Rémunération basée sur les résultats
            </li>
            <li style="padding: 0.8rem 0; border-bottom: 1px solid #e0e0e0;">
              <i class="fas fa-check-circle" style="color: var(--success-color); margin-right: 1rem;"></i>
              <strong>Accompagnement complet</strong> - De l'idée à la réalisation
            </li>
            <li style="padding: 0.8rem 0; border-bottom: 1px solid #e0e0e0;">
              <i class="fas fa-check-circle" style="color: var(--success-color); margin-right: 1rem;"></i>
              <strong>Expertise variée</strong> - Web, franchise, investissement
            </li>
            <li style="padding: 0.8rem 0;">
              <i class="fas fa-check-circle" style="color: var(--success-color); margin-right: 1rem;"></i>
              <strong>Support continu</strong> - Équipe disponible 24/7
            </li>
          </ul>
        </div>
        <div class="col-lg-6">
          <!-- Espace pour image si nécessaire -->
        </div>
      </div>
    </div>
  </section>

  <!-- Testimonials Section -->
  <section class="services-section">
    <div class="container">
      <div class="section-header">
        <h2>Découvrez les avis de nos clients</h2>
        <p>Ils nous font confiance</p>
      </div>

      <div class="row g-4">
        <div class="col-lg-4 col-md-6">
          <div class="testimonial-card">
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <p>Excellente expérience ! L'équipe m'a accompagné du début à la fin dans le lancement de mon application mobile. Résultats au-delà de mes attentes.</p>
            <div class="profile">
              <div style="width: 50px; height: 50px; background: linear-gradient(135deg, var(--primary-color) 0%, #8B00D4 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-weight: 700; margin-right: 1rem;">SG</div>
              <div>
                <h5 style="margin: 0; font-size: 1rem; font-weight: 700;">Saul Goodman</h5>
                <p style="margin: 0; font-size: 0.85rem; color: #888;">CEO & Fondateur</p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="testimonial-card">
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <p>Un partenariat gagnant-gagnant ! Pas de frais initiaux et une rémunération basée sur les résultats. C'est exactement ce dont j'avais besoin.</p>
            <div class="profile">
              <div style="width: 50px; height: 50px; background: linear-gradient(135deg, #FF6B6B 0%, #FF8E8E 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-weight: 700; margin-right: 1rem;">SW</div>
              <div>
                <h5 style="margin: 0; font-size: 1rem; font-weight: 700;">Sara Wilsson</h5>
                <p style="margin: 0; font-size: 0.85rem; color: #888;">Designer</p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="testimonial-card">
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <p>Professionnalisme et expertise. Mon réseau de franchise a été développé avec succès grâce à leur accompagnement stratégique.</p>
            <div class="profile">
              <div style="width: 50px; height: 50px; background: linear-gradient(135deg, #4ECDC4 0%, #44A08D 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-weight: 700; margin-right: 1rem;">JK</div>
              <div>
                <h5 style="margin: 0; font-size: 1rem; font-weight: 700;">Jena Karlis</h5>
                <p style="margin: 0; font-size: 0.85rem; color: #888;">Propriétaire</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Call to Action -->
  <section class="py-5" style="background: linear-gradient(135deg, var(--light-bg) 0%, #ffffff 100%);">
    <div class="container text-center">
      <h2 style="color: var(--primary-color); font-weight: 700; margin-bottom: 1.5rem;">Prêt à transformer votre vision en réalité ?</h2>
      <p style="font-size: 1.2rem; color: #666; margin-bottom: 2rem;">Rejoignez-nous dès aujourd'hui et commencez votre parcours entrepreneurial sans risque.</p>
      <a href="/register" class="btn-hero btn-hero-primary">
        <i class="fas fa-rocket me-2"></i>Créer un Compte Gratuitement
      </a>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <div class="row g-4">
        <div class="col-lg-4 col-md-12">
          <img src="{{ asset('build/assets/img/logo.png') }}" alt="ZeroInvestissement" style="width: 120px; margin-bottom: 1rem;">
          <p style="color: rgba(255, 255, 255, 0.8); margin-top: 1rem;">
            Nous transformons vos visions en réalité avec un accompagnement gratuit et une rémunération basée uniquement sur les résultats.
          </p>
          <div class="social-links mt-3">
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-6">
          <h4>Liens Utiles</h4>
          <ul style="list-style: none; padding: 0;">
            <li style="margin-bottom: 0.5rem;"><a href="/">Accueil</a></li>
            <li style="margin-bottom: 0.5rem;"><a href="/login">Se connecter</a></li>
            <li style="margin-bottom: 0.5rem;"><a href="/register">S'inscrire</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-6">
          <h4>Nos Services</h4>
          <ul style="list-style: none; padding: 0;">
            <li style="margin-bottom: 0.5rem;"><a href="#">Sites Web & Apps</a></li>
            <li style="margin-bottom: 0.5rem;"><a href="#">Franchises</a></li>
            <li style="margin-bottom: 0.5rem;"><a href="#">Marketplace</a></li>
            <li style="margin-bottom: 0.5rem;"><a href="#">Accompagnement</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-12">
          <h4>Contact</h4>
          <p style="color: rgba(255, 255, 255, 0.8);">
            <i class="fas fa-envelope me-2"></i>contact@zeroinvestissement.com<br>
            <i class="fas fa-phone me-2"></i>+33 1 23 45 67 89
          </p>
        </div>
      </div>

      <hr style="border-color: rgba(255, 255, 255, 0.2); margin: 2rem 0 1rem;">
      
      <div class="text-center">
        <p style="color: rgba(255, 255, 255, 0.8); margin: 0;">
          &copy; {{ date('Y') }} <strong>ZeroInvestissement</strong>. Tous droits réservés.
        </p>
      </div>
    </div>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>