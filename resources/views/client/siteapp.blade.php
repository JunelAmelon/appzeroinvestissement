<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>ZeroInvestissement Dashboard</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="icon" href="{{ asset('build/assets/img/icon.ico') }}" type="image/x-icon" />

    <!-- Fonts and icons -->
    <script src="{{ asset('build/assets/js/plugin/webfont/webfont.min.js') }}"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Lato:300,400,700,900"]
            },
            custom: {
                "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"],
                urls: ['../assets/css/fonts.min.css']
            },
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('build/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('build/assets/css/atlantis.min.css') }}">
    <link rel="stylesheet" href="{{ asset('build/assets/css/fonts.min.css') }}">
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="{{ asset('build/assets/css/demo.css') }}">
</head>

<body>
    <div class="wrapper">
        <div class="main-header">
            <!-- Logo Header -->
            <div class="logo-header" data-background-color="" style="background-color: white; color:white;">

                <a href="{{ url('/') }}" class="logo">
                    <img src="{{ asset('build/assets/img/logo.png') }}" style="width:100px;" alt="navbar brand" class="navbar-brand">
                </a>

                <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <i class="icon-menu" style="color:#6A00B8;"></i>
                    </span>
                </button>
                <button class="topbar-toggler more"><i class="icon-options-vertical" style="color:#6A00B8;"></i></button>
                <div class="nav-toggle">
                    <button class="btn btn-toggle toggle-sidebar">
                        <i class="icon-menu"></i>
                    </button>
                </div>
            </div>
            <!-- End Logo Header -->

            <!-- Navbar Header -->
            <nav class="navbar navbar-header navbar-expand-lg" data-background-color="" style="background-color: #6A00B8; color:white;">

                <div class="container-fluid">
                    <div class="collapse" id="search-nav">

                    </div>
                    <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">


                        <li class="nav-item dropdown hidden-caret">
                            <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false">
                                <i class="fas fa-layer-group"></i>
                            </a>
                            <div class="dropdown-menu quick-actions quick-actions-info animated fadeIn">
                                <div class="quick-actions-header" style="background-color: #6A00B8; color:white;">
                                    <span class="title mb-1">Actions rapide</span>
                                </div>
                                <div class="quick-actions-scroll scrollbar-outer">
                                    <div class="quick-actions-items">
                                        <div class="row m-0">
                                            <a class="col-6 col-md-4 p-0" href="/welcome">
                                                <div class="quick-actions-item">
                                                    <i class="flaticon-file-1"></i>
                                                    <span class="text">Dashboard</span>
                                                </div>
                                            </a>
                                            <a class="col-6 col-md-4 p-0" href="#">
                                                <div class="quick-actions-item">
                                                    <a href="{{ route('logout') }}">
                                                        <i class="icon-logout"></i>
                                                        <span class="text"> Deconnexion</span>
                                                    </a>


                                                </div>
                                            </a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown hidden-caret">
                            <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
                                <div class="avatar-sm">
                                    <img src="https://img.freepik.com/free-vector/mans-face-flat-style_90220-2877.jpg?uid=R143971211&ga=GA1.1.1911634789.1729294558
" alt="..." class="avatar-img rounded-circle">
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-user animated fadeIn">
                                <div class="dropdown-user-scroll scrollbar-outer">
                                    <li>
                                        <div class="user-box">
                                            <div class="avatar-lg"><img src="https://img.freepik.com/free-vector/mans-face-flat-style_90220-2877.jpg?uid=R143971211&ga=GA1.1.1911634789.1729294558
" alt="image profile" class="avatar-img rounded"></div>
                                            <div class="u-text">
                                                <h4>{{ Auth::user()->name }}</h4>
                                                <p class="text-muted">{{ Auth::user()->email }}</p><a href="{{ route('logout') }}" class="btn btn-xs btn-secondary btn-sm">Se deconnecter</a>
                                            </div>
                                        </div>
                                    </li>

                                </div>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- End Navbar -->
        </div>

        <!-- Sidebar -->
        <div class="sidebar sidebar-style-2" style="background-color: none ;">
            <div class="sidebar-wrapper scrollbar scrollbar-inner">
                <div class="sidebar-content">
                    <div class="user">
                        <div class="avatar-sm float-left mr-2">
                            <img src="https://img.freepik.com/free-vector/mans-face-flat-style_90220-2877.jpg?uid=R143971211&ga=GA1.1.1911634789.1729294558
" alt="..." class="avatar-img rounded-circle">
                        </div>
                        <div class="info">
                            <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                                <span>
                                    {{ Auth::user()->name }}
                                    <span class="user-level">Espace client</span>
                                    <!--<span class="caret"></span>-->
                                </span>
                            </a>
                            <div class="clearfix"></div>

                            <div class="collapse in" id="collapseExample">
                                <ul class="nav">
                                    <li>
                                        <a href="#profile">
                                            <!--<span class="link-collapse">My Profile</span>-->
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <ul class="nav" style="color:white;">
                        <li class="nav-item active">
                            <a href="/welcome" class="collapsed" aria-expanded="false" style="background-color: bone;  color:white;">
                                <i class="fas fa-home"></i>
                                <p>Dashboard</p>

                            </a>

                        </li>
                        <li class="nav-section">
                            <span class="sidebar-mini-icon">
                                <i class="fa fa-ellipsis-h"></i>
                            </span>
                            <h4 class="text-section">Options</h4>
                        </li>
                        <li class="nav-item">
                            <a data-toggle="collapse" href="#sidebarLayouts">
                                <i class="fas flaticon-envelope-3"></i>
                                <p>Soumettre un projet</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="sidebarLayouts">
                                <ul class="nav nav-collapse">
                                    <li>
                                        <a href="/siteapp">
                                            <span class="sub-item">Mon site/Appli</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/franchise">
                                            <span class="sub-item">Ma franchise</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/marketplace">
                                            <span class="sub-item">Marketplace</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/incubator">
                                            <span class="sub-item">Incubateur</span>
                                        </a>
                                    </li>
                               

                                </ul>
                            </div>
                        </li>
                              <li class="nav-item ">
                            <a href="/faq">
                                <i class="fas icon-question"></i>
                                <p>Faq</p>

                            </a>

                        </li>
                        <li class="nav-item">
                            <a href="{{ route('logout') }}">
                                <i class="fas icon-logout"></i>
                                <p>Se deconnecter</p>

                            </a>

                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <!-- End Sidebar -->

        <div class="main-panel">
            <div class="content">
                <div class="panel-header " style="background-color: none; ">
                    <div class="page-inner py-5">
                        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                            <div>
                                <h2 class=" pb-2 fw-bold" style=" color:#6A00B8;">Soumettre un projet</h2>
                                <h5 class=" op-7 mb-2" style=" color:#6A00B8;">Veuillez remplir ces champs de formulaire {{ Auth::user()->name }} !</h5>
                            </div>

                        </div>
                    </div>
                </div>


                <section class="bg-gray-100 mb-4">
                    <div class="container mx-auto mt-2 ">
                        @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                        @endif

                        @if(session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                        @endif
                        <!-- En-tête modifiée ici -->
                        <h2 class="text-center mb-0  card-header" style="background-color: #6A00B8; color: white;">Site/app</h2>


                        <form method="POST" action="{{ route('siteapp.save') }}" class="bg-white p-5 rounded shadow">
                            @csrf

                            <h2 class="text-center mb-4">Bienvenue dans notre questionnaire interactif ! 🚀</h2>
                            <p class="text-center mb-4">Pour que nous puissions bien comprendre votre projet et votre motivation, répondez à ces quelques questions. Amusez-vous et soyez créatif, nous vous attendons avec impatience !</p>

                            <h3 class="text-lg font-semibold mb-2">L’Idée qui va tout changer</h3> <br>

                            <div class="mb-3">
                                <label for="name" class="form-label">Nom de votre projet (soyez créatif !)</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>

                            <div class="mb-3">
                                <label for="description" class="form-label">En une phrase, décrivez votre idée comme si vous la pitchiez à un alien (oui, un alien) :</label>
                                <textarea class="form-control" id="description" name="description" required></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="animal" class="form-label">Si votre projet était un animal, lequel serait-il et pourquoi ?</label>
                                <input type="text" class="form-control" id="animal" name="animal" required>
                            </div>

                            <div class="mb-3">
                                <label for="problem" class="form-label">Quel est le problème majeur que votre idée va résoudre ?</label>
                                <textarea class="form-control" id="problem" name="problem" required></textarea>
                                <small class="text-gray-500">(On adore les solutions aux problèmes)</small>
                            </div>

                            <div class="mb-3">
                                <label for="main_feature" class="form-label">Fonctionnalité phare : Quelle est la fonctionnalité qui rendra votre site ou appli indispensable ?</label>
                                <div>
                                    <input type="radio" id="vente_en_ligne" name="main_feature" value="Vente en ligne">
                                    <label for="vente_en_ligne">Vente en ligne</label>
                                </div>
                                <div>
                                    <input type="radio" id="reservation" name="main_feature" value="Reservation">
                                    <label for="reservation">Reservation</label>
                                </div>
                                <div>
                                    <input type="radio" id="service_innovant" name="main_feature" value="Service innovant">
                                    <label for="service_innovant">Service innovant</label>
                                </div>
                                <div class="mt-2">
                                    <label for="main_feature_other" class="form-label">Autre (expliquez-nous!) :</label>
                                    <input type="text" class="form-control" id="main_feature_other" name="main_feature">
                                    <small class="text-gray-500">(Autre fonctionnalité)</small>
                                </div>
                            </div>

                            <br>
                            <h3 class="text-lg font-semibold mb-2">Pourquoi cette idée est-elle la bonne ?</h3><br>

                            <div class="mb-3">
                                <label for="idea_origin" class="form-label">Comment vous est venue cette idée ?</label>
                                <textarea class="form-control" id="idea_origin" name="idea_origin" required></textarea>
                                <small class="text-gray-500">(Coup de génie en pleine nuit, inpiration de la vie quotidienne ou conversation avec votre chat)</small>
                            </div>

                            <div class="mb-3">
                                <label for="why_good" class="form-label">En une phrase, pourquoi pensez-vous que votre idée est meilleure que ce qui existe déjà ?</label>
                                <textarea class="form-control" id="why_good" name="why_good" required></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="excitement" class="form-label">Qu’est-ce qui vous rend super excité à l’idée de lancer ce projet ?</label>
                                <textarea class="form-control" id="excitement" name="excitement" required></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="fallback_plan" class="form-label">Quel est votre plan B si tout ne se passe pas comme prévu ?</label>
                                <textarea class="form-control" id="fallback_plan" name="fallback_plan" required></textarea>
                            </div>

                            <br>
                            <h3 class="text-lg font-semibold mb-2">Votre vision du futur : la rentabilité</h3><br>

                            <div class="mb-3">
                                <label for="revenue_model" class="form-label">Comment votre projet va-t-il rapporter des sous ?</label>
                                <textarea class="form-control" id="revenue_model" name="revenue_model" required></textarea>
                                <small class="text-gray-500">(Ex: Vente en ligne, abonnements, publicité...soyez clair!)</small>
                            </div>

                            <div class="mb-3">
                                <label for="target_customers" class="form-label">Combien de personnes pensez-vous que votre projet touchera dans sa première année ? (Soyez ambitieux, mais réaliste.)</label>
                                <div>
                                    <input type="radio" id="customer_1" name="target_customers" value="Moins de 1 000">
                                    <label for="customer_1">Moins de 1 000</label>
                                </div>
                                <div>
                                    <input type="radio" id="customer_2" name="target_customers" value="Entre 1 000 et 10 000">
                                    <label for="customer_2">Entre 1 000 et 10 000</label>
                                </div>
                                <div>
                                    <input type="radio" id="customer_3" name="target_customers" value="Plus de 10 000">
                                    <label for="customer_3">Plus de 10 000</label>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="target_incomes" class="form-label">D’ici 2 ans, votre projet aura généré… (une estimation amusante mais réaliste !)</label>
                                <div>
                                    <input type="radio" id="income_1" name="target_incomes" value="10 000 €">
                                    <label for="income_1">10 000 €</label>
                                </div>
                                <div>
                                    <input type="radio" id="income_2" name="target_incomes" value="50 000 €">
                                    <label for="income_2">50 000 €</label>
                                </div>
                                <div>
                                    <input type="radio" id="income_3" name="target_incomes" value="Plus de 100 000 €">
                                    <label for="income_3">Plus de 100 000 €</label>
                                </div>
                                <div>
                                    <input type="radio" id="income_3" name="target_incomes" value="Ça va exploser tous les compteurs, vous allez voir !">
                                    <label for="income_3">Ça va exploser tous les compteurs, vous allez voir !</label>
                                </div>
                            </div>

                            <br>
                            <h3 class="text-lg font-semibold mb-2">Public cible et stratégie marketing (on ne rigole plus)</h3><br>

                            <div class="mb-3">
                                <label for="target_customers_ideal" class="form-label">Votre cible idéale : Décrivez votre client idéal comme si c'était votre meilleur ami:</label>
                                <textarea class="form-control" id="target_customers_ideal" name="target_customers_ideal" required></textarea>
                                <small class="text-gray-500">(Age, centre d'intérêt, comportements)</small>
                            </div>

                            <div class="mb-3">
                                <label for="competition" class="form-label">Avez-vous déjà pensé à une stratégie pour atteindre vos clients cibles ? Si oui, laquelle ?</label>
                                <textarea class="form-control" id="competition" name="competition" required></textarea>
                                <small class="text-gray-500">(Campagne publitaire, réseaux sociaux, influenceurs ?)</small>
                            </div>

                            <div class="mb-3">
                                <label for="social_platform" class="form-label">Si vous deviez choisir une plateforme de réseaux sociaux pour promouvoir votre projet, laquelle serait-elle ?</label>
                                <div>
                                    <input type="radio" id="Instagram" name="social_platform" value="Instagram" onclick="toggleOtherPlatformInput(false)" required>
                                    <label for="Instagram">Instagram</label>
                                </div>
                                <div>
                                    <input type="radio" id="TikTok" name="social_platform" value="TikTok" onclick="toggleOtherPlatformInput(false)">
                                    <label for="TikTok">TikTok</label>
                                </div>
                                <div>
                                    <input type="radio" id="LinkedIn" name="social_platform" value="LinkedIn" onclick="toggleOtherPlatformInput(false)">
                                    <label for="LinkedIn">LinkedIn</label>
                                </div>
                                <div>
                                    <input type="radio" id="Facebook" name="social_platform" value="Facebook" onclick="toggleOtherPlatformInput(false)">
                                    <label for="Facebook">Facebook</label>
                                </div>

                                <!-- Option "Autre" avec champ texte -->
                                <div>
                                    <input type="radio" id="social_platform_other_radio" name="social_platform" value="" onclick="toggleOtherPlatformInput(true)">
                                    <label for="social_platform_other_radio">Autre</label>
                                    <input type="text" class="form-control mt-2" id="social_platform_other" placeholder="Précisez une autre plateforme" oninput="updateOtherPlatformValue()" style="display: none;">
                                </div>
                            </div>

                            <br>
                            <h3 class="text-lg font-semibold mb-2">Rentabilité et Engagement</h3><br>

                            <div class="mb-3">
                                <label for="motivation" class="form-label">Êtes-vous prêt à vous engager à 100% pour faire grandir ce projet ?</label>
                                <div>
                                    <input type="radio" id="motivation_1" name="motivation" value="Oui, je suis à fond !">
                                    <label for="motivation_1">Oui, je suis à fond !</label>
                                </div>
                                <div>
                                    <input type="radio" id="motivation_2" name="motivation" value="Oui, mais je continue d'autres projets en parallèle.">
                                    <label for="motivation_2">Oui, mais je continue d'autres projets en parallèle.</label>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="availability" class="form-label">Quelles sont vos disponibilités ?</label>
                                <div>
                                    <input type="radio" id="Temps_plein" name="availability" value="Temps plein">
                                    <label for="Temps_plein">Temps plein</label>
                                </div>
                                <div>
                                    <input type="radio" id="Temps_partiel" name="availability" value="Temps partiel">
                                    <label for="Temps_partiel">Temps partiel</label>
                                </div>
                                <div>
                                    <input type="radio" id="soiree" name="availability" value="Pendant mes soirées/week-ends">
                                    <label for="soiree">Pendant mes soirées/week-ends</label>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="funding_status" class="form-label">Avez-vous des fonds, investisseurs ou partenaires prêts à vous soutenir ?</label>
                                <div>
                                    <input type="radio" id="investisseurs_oui" name="funding_status" value="Oui, j’ai déjà des investisseurs" required>
                                    <label for="investisseurs_oui">Oui, j’ai déjà des investisseurs</label>
                                </div>
                                <div>
                                    <input type="radio" id="investisseurs_prets" name="funding_status" value="Pas encore, mais je suis prêt à en chercher">
                                    <label for="investisseurs_prets">Pas encore, mais je suis prêt à en chercher</label>
                                </div>
                                <div>
                                    <input type="radio" id="zero_investissement" name="funding_status" value="Non, je compte sur ZeroInvestissement.com !">
                                    <label for="zero_investissement">Non, je compte sur ZeroInvestissement.com !</label>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="project_pitch" class="form-label">Si vous deviez vendre votre idée à un investisseur en une phrase, que diriez-vous ?</label>
                                <textarea class="form-control" id="project_pitch" name="project_pitch" required></textarea>
                            </div>

                            <br>
                            <h3 class="text-lg font-semibold mb-2">Laissez votre créativité parler : le design</h3><br>

                            <div class="mb-3">
                                <label for="dominant_color" class="form-label">Si votre site/appli avait une couleur dominante, ce serait…</label>
                                <div>
                                    <input type="radio" id="Rouge" name="dominant_color" value="Rouge (énergique, passionné)" onclick="toggleOtherColorInput(false)" required>
                                    <label for="Rouge">Rouge (énergique, passionné)</label>
                                </div>
                                <div>
                                    <input type="radio" id="Bleu" name="dominant_color" value="Bleu (calme, fiable)" onclick="toggleOtherColorInput(false)">
                                    <label for="Bleu">Bleu (calme, fiable)</label>
                                </div>
                                <div>
                                    <input type="radio" id="Vert" name="dominant_color" value="Vert (naturel, apaisant)" onclick="toggleOtherColorInput(false)">
                                    <label for="Vert">Vert (naturel, apaisant)</label>
                                </div>
                                <div>
                                    <input type="radio" id="Noir" name="dominant_color" value="Noir (élégant, sophistiqué)" onclick="toggleOtherColorInput(false)">
                                    <label for="Noir">Noir (élégant, sophistiqué)</label>
                                </div>

                                <!-- Option "Autre" avec champ texte associé -->
                                <div>
                                    <input type="radio" id="color_other" name="dominant_color" value="" onclick="toggleOtherColorInput(true)">
                                    <label for="color_other">Autre (surprenez-nous!)</label>
                                    <input type="text" class="form-control mt-2" id="dominant_color_other" placeholder="Entrez votre couleur" oninput="updateOtherColorValue()" style="display: none;">
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="design_style" class="form-label">Quel est le style de design qui vous attire le plus ?</label>
                                <textarea class="form-control" id="design_style" name="design_style" required></textarea>
                                <small class="text-gray-500">(Simple et épurée, funky et moderne ou autre chose... décrivez-nous ça!)</small>
                            </div>

                            <div class="mb-3">
                                <label for="example_style" class="form-label">Avez-vous des exemples de sites/applis qui vous inspirent ? Si oui, lesquels ?</label>
                                <textarea class="form-control" id="example_style" name="example_style" required></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="graphic_elements" class="form-label">Avez-vous déjà des éléments graphiques comme un logo ou une charte graphique ?</label>
                                <div>
                                    <input type="radio" id="graphic_elements_yes" name="graphic_elements" value="1" required>
                                    <label for="graphic_elements_yes">Oui, tout est prêt !</label>
                                </div>
                                <div>
                                    <input type="radio" id="graphic_elements_no" name="graphic_elements" value="0">
                                    <label for="graphic_elements_no">Non, j’aurais besoin d’aide sur ce point.
                                    </label>
                                </div>
                            </div>

                            <br>
                            <h3 class="text-lg font-semibold mb-2">Technique et plateformes</h3><br>

                            <div class="mb-3">
                                <label for="support_type" class="form-label">Pour quel support souhaitez-vous développer votre projet ?</label>
                                <div>
                                    <input type="radio" id="support_web" name="support_type" value="Site web" required>
                                    <label for="support_web">Site web</label>
                                </div>
                                <div>
                                    <input type="radio" id="support_mobile" name="support_type" value="Application mobile">
                                    <label for="support_mobile">Application mobile</label>
                                </div>
                                <div>
                                    <input type="radio" id="support_both" name="support_type" value="Site web & Application mobile">
                                    <label for="support_both">Les deux</label>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="platforms" class="form-label">Sur quelle(s) plateforme(s) souhaitez-vous que votre appli soit disponible ?</label>
                                <div>
                                    <input type="radio" id="platform_ios" name="platforms" value="iOS" required>
                                    <label for="platform_ios">iOS</label>
                                </div>
                                <div>
                                    <input type="radio" id="platform_android" name="platforms" value="Android">
                                    <label for="platform_android">Android</label>
                                </div>
                                <div>
                                    <input type="radio" id="platform_both" name="platforms" value="iOS & Android">
                                    <label for="platform_both">Les deux</label>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="tech_requirements" class="form-label">Avez-vous des exigences spécifiques en termes de technologie ou d’hébergement ?</label>
                                <textarea class="form-control" id="tech_requirements" name="tech_requirements" required></textarea>
                            </div>

                            <br>
                            <h3 class="text-lg font-semibold mb-2">Un peu plus sur vous (on aime bien en savoir plus)</h3><br>

                            <div class="mb-3">
                                <label for="contractor_power" class="form-label">Quel est votre superpouvoir en tant qu’entrepreneur ?</label>
                                <textarea class="form-control" id="contractor_power" name="contractor_power" required></textarea>
                                <small class="text-gray-500">(Ex: Je suis une machine à idées, je gère nien le stress, je suis ultra-organisé)</small>
                            </div>

                            <div class="mb-3">
                                <label for="leisure" class="form-label">Que faites-vous quand vous ne travaillez pas sur votre projet ?</label>
                                <textarea class="form-control" id="leisure" name="leisure" required></textarea>
                                <small class="text-gray-500">(On parle de loisir bien sûr... ou même de siestes!)</small>
                            </div>

                            <div class="mb-3">
                                <label for="famous_entrepreneur" class="form-label">Si vous pouviez déjeuner avec un entrepreneur célèbre, qui serait-ce et pourquoi ?</label>
                                <textarea class="form-control" id="famous_entrepreneur" name="famous_entrepreneur" required></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="worldwide_success" class="form-label">Quelle serait la première chose que vous ferez une fois que votre projet sera un succès mondial ?</label>
                                <textarea class="form-control" id="worldwide_success" name="worldwide_success" required></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="file_input" class="form-label">Téléverser un fichier ( Dernier bilan )</label>
                                <input class="form-control" type="file" id="file_input" name="file_input">
                            </div>

                            <button type="submit" class="btn" style="background-color: #6A00B8; color: white;">Enregistrer</button>
                        </form>

                </section>



            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <nav class="pull-left">

                    </nav>
                   <div class="copyright ml-auto">
                      <a href="/politique-de-confidentialite">Politique de confidentialité </a> &copy; Copyright <strong><span>Zeroinvestissement</span></strong>. All Rights Reserved
                    </div>
                </div>
            </footer>
        </div>


    </div>
    <script>
        // Affiche ou masque le champ de saisie pour l'option "Autre"
        function toggleOtherPlatformInput(show) {
            const otherInput = document.getElementById('social_platform_other');
            if (show) {
                otherInput.style.display = 'block';
                otherInput.required = true;
            } else {
                otherInput.style.display = 'none';
                otherInput.required = false;
                otherInput.value = ''; // Réinitialise la valeur si non utilisée
            }
        }

        // Met à jour la valeur de l'option "Autre" dans le bouton radio
        function updateOtherPlatformValue() {
            const otherRadio = document.getElementById('social_platform_other_radio');
            const otherInput = document.getElementById('social_platform_other');
            otherRadio.value = otherInput.value;
        }

        // Assure que le champ texte est masqué si une option prédéfinie est sélectionnée
        document.querySelectorAll('input[name="social_platform"]').forEach((input) => {
            input.addEventListener('change', (e) => {
                if (e.target.id !== 'social_platform_other_radio') {
                    toggleOtherPlatformInput(false);
                }
            });
        });
    </script>
    <script>
        // Fonction pour afficher ou masquer le champ de saisie pour l'option "Autre"
        function toggleOtherColorInput(show) {
            const otherInput = document.getElementById('dominant_color_other');
            if (show) {
                otherInput.style.display = 'block';
                otherInput.required = true;
            } else {
                otherInput.style.display = 'none';
                otherInput.required = false;
                otherInput.value = ''; // Réinitialise la valeur si non utilisée
            }
        }

        // Met à jour la valeur de l'option "Autre" dans le bouton radio
        function updateOtherColorValue() {
            const otherRadio = document.getElementById('color_other');
            const otherInput = document.getElementById('dominant_color_other');
            otherRadio.value = otherInput.value;
        }

        // Assure que le champ texte est masqué si une option prédéfinie est sélectionnée
        document.querySelectorAll('input[name="dominant_color"]').forEach((input) => {
            input.addEventListener('change', (e) => {
                if (e.target.id !== 'color_other') {
                    toggleOtherColorInput(false);
                }
            });
        });
    </script>
    <!--   Core JS Files   -->
    <script src="{{ asset('build/assets/js/core/jquery.3.2.1.min.js') }}"></script>
    <script src="{{ asset('build/assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('build/assets/js/core/bootstrap.min.js') }}"></script>

    <!-- jQuery UI -->
    <script src="{{ asset('build/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('build/assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js') }}"></script>

    <!-- jQuery Scrollbar -->
    <script src="{{ asset('build/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>

    <!-- Chart JS -->
    <script src="{{ asset('build/assets/js/plugin/chart.js/chart.min.js') }}"></script>

    <!-- jQuery Sparkline -->
    <script src="{{ asset('build/assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js') }}"></script>

    <!-- Chart Circle -->
    <script src="{{ asset('build/assets/js/plugin/chart-circle/circles.min.js') }}"></script>

    <!-- Datatables -->
    <script src="{{ asset('build/assets/js/plugin/datatables/datatables.min.js') }}"></script>

    <!-- Bootstrap Notify -->
    <!-- <script src="{{ asset('build/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js') }}"></script> -->

    <!-- jQuery Vector Maps -->
    <script src="{{ asset('build/assets/js/plugin/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('build/assets/js/plugin/jqvmap/maps/jquery.vmap.world.js') }}"></script>

    <!-- Sweet Alert -->
    <script src="{{ asset('build/assets/js/plugin/sweetalert/sweetalert.min.js') }}"></script>

    <!-- Atlantis JS -->
    <script src="{{ asset('build/assets/js/atlantis.min.js') }}"></script>

    <!-- Atlantis DEMO methods, don't include it in your project! -->
    <script src="{{ asset('build/assets/js/setting-demo.js') }}"></script>
    <script src="{{ asset('build/assets/js/demo.js') }}"></script>
</body>

</html>
