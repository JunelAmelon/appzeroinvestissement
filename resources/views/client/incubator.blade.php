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

                <section class="bg-gray-100">
                    <div class="container mx-auto mt-2">
                                            @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if(session('success'))
    <div class="alert alert-success">
      {!! session('success') !!}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

         

                        <h2 class="text-center mb-0 card-header p-3" style="background-color: #6A00B8; color: white;">Incubateur</h2>
                        <form method="POST" action="{{ route('incubator.save') }}" class="bg-white p-6 rounded-lg shadow-lg mb-6">
                            @csrf
                            <h2 class="text-center mb-4">Bienvenue dans l’univers de l’Accélérateur Zéro !</h2>
                            <p class="text-center mb-4">Que vous soyez au début d’une idée innovante ou à la tête d’une entreprise existante, nous sommes là pour vous accompagner à chaque étape!<br> Répondez aux questions ci-dessous pour nous aider à comprendre votre projet.</p>

                            <h3 class="text-lg font-semibold mb-2">🚀 Votre Projet : Parlons du cœur de votre idée</h3>
                            <div class="mb-4">
                                <label for="project_name" class="form-label">Nom de votre projet ou entreprise (et pourquoi ce nom est parfait) :</label>
                                <textarea class="form-control" id="project_name" name="project_name" required></textarea>
                                @error('project_name')
                                <div class="text-red-500">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="project_description" class="form-label">Décrivez votre idée ou entreprise en une phrase qui nous fera tomber sous le charme:</label>
                                <textarea class="form-control" id="project_description" name="project_description" required></textarea>
                                @error('project_description')
                                <div class="text-red-500">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="project_stage" class="form-label">À quel stade en êtes-vous avec ce projet ?</label>
                                <div>
                                    <div>
                                        <input type="radio" name="project_stage" id="simple_idea" value="simple_idea">
                                        <label for="simple_idea">
                                            Simple idée
                                        </label>
                                    </div>
                                    <div>
                                        <input type="radio" name="project_stage" id="development" value="development">
                                        <label for="development">
                                            En développement
                                        </label>
                                    </div>
                                    <div>
                                        <input type="radio" name="project_stage" id="existing_business" value="existing_business">
                                        <label for="existing_business">
                                            Entreprise déjà existante
                                        </label>
                                    </div>
                                </div>
                                @error('project_stage')
                                <div class="text-red-500">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="project_movie" class="form-label">Si votre projet était un film, quel en serait le titre et pourquoi ?</label>
                                <input type="text" id="project_movie" name="project_movie" class="form-control" required>
                            </div>

                            <div class="mb-4">
                                <label for="project_mission" class="form-label">Quelle est la mission principale de votre projet ?</label>
                                <textarea id="project_mission" name="project_mission" class="form-control" required></textarea>
                                <small class="text-gray-500">(Changer une industrie, résoudre un problème, proposer un produit/Un service)</small>
                            </div>

                            <h3 class="text-lg font-semibold mb-2">🎯Origine et Motivation : Pourquoi cette idée vous passionne-t-elle ?</h3>

                            <div class="mb-4">
                                <label for="origin_motivation" class="form-label">Comment l'idée de ce projet vous est-elle venue ?</label>
                                <textarea id="origin_motivation" name="origin_motivation" class="form-control" required></textarea>
                                <small class="text-gray-500">(Un moment eureka, une discussion avec un ami, unbesoin non satisfait ?)</small>
                            </div>

                           <div class="mb-4">
    <label for="passion_aspect" class="form-label">Qu’est-ce qui vous passionne le plus dans ce projet ?</label>
    <div>
        <input type="radio" name="passion_aspect" id="entrepreneurial_challenge" value="Le défi entrepreneurial" onclick="toggleOtherObjectiveInput9(false)">
        <label for="entrepreneurial_challenge">Le défi entrepreneurial</label>
    </div>
    <div>
        <input type="radio" name="passion_aspect" id="impact" value="L'impact que ce projet peut avoir" onclick="toggleOtherObjectiveInput9(false)">
        <label for="impact">L'impact que ce projet peut avoir</label>
    </div>
    <div>
        <input type="radio" name="passion_aspect" id="growth_potential" value="Le potentiel de croissance" onclick="toggleOtherObjectiveInput9(false)">
        <label for="growth_potential">Le potentiel de croissance</label>
    </div>
    <div class="mt-2">
        <input type="radio" name="passion_aspect" id="other_passion_aspect" value="" onclick="toggleOtherObjectiveInput9(true)">
        <label for="custom_passion">Autre :</label>
        <input type="text" id="passion_aspect_custom" class="form-control mt-2" placeholder="Veuillez spécifier" oninput="updateOtherObjectiveValue9()" style="display: none;">
    </div>
</div>


                            <div class="mb-4">
                                <label for="strength" class="form-label">Si vous deviez décrire la plus grande force de votre projet en une phrase, quelle serait-elle ?</label>
                                <textarea id="strength" name="strength" class="form-control" required></textarea>
                            </div>

                            <div class="mb-4">
                                <label for="obstacle" class="form-label">Quel est le plus grand obstacle auquel vous avez fait face jusqu'à présent dans ce projet ?</label>
                                <textarea id="obstacle" name="obstacle" class="form-control" required></textarea>
                            </div>

                            <h3 class="text-lg font-semibold mb-2">🛠️L’Avenir : Quels sont vos rêves pour ce projet ?</h3>

                            <div class="mb-4">
                                <label for="objective" class="form-label">Quel est votre objectif principal avec ce projet sur les 5 prochaines années ?</label>
                                <div>
                                    <input type="radio" name="objective" id="new_market" value="Conquérir un nouveau marché" onclick="toggleOtherObjectiveInput8(false)" required>
                                    <label for="new_market">Conquérir un nouveau marché</label>
                                </div>

                                <div>
                                    <input type="radio" name="objective" id="create_brand" value="Créer une marque incontournable" onclick="toggleOtherObjectiveInput8(false)">
                                    <label for="create_brand">Créer une marque incontournable</label>
                                </div>

                                <div>
                                    <input type="radio" name="objective" id="innovate_industry" value="Innover dans une industrie" onclick="toggleOtherObjectiveInput8(false)">
                                    <label for="innovate_industry">Innover dans une industrie</label>
                                </div>

                                <div>
                                    <input type="radio" name="objective" id="other_objective" value="" onclick="toggleOtherObjectiveInput8(true)">
                                    <label for="other_objective">Autre :</label>
                                    <input type="text" id="objective_other" class="form-control mt-2" placeholder="Veuillez spécifier" oninput="updateOtherObjectiveValue8()" style="display: none;">
                                </div>
                            </div>

                            <div class="mb-4">
                                <label for="time_to_profit" class="form-label">Dans combien de temps pensez-vous que votre projet pourrait être rentable ? (en mois)</label>
                                <div>
                                    <input type="radio" name="time_to_profit" id="less_than_6" value="Moins de 6 mois">
                                    <label for="less_than_6">
                                        Moins de 6 mois
                                    </label>
                                </div>
                                <div>
                                    <input type="radio" name="time_to_profit" id="between_6_and_12" value="Entre 6 et 12 mois">
                                    <label for="between_6_and_12">
                                        Entre 6 et 12 mois
                                    </label>
                                </div>
                                <div>
                                    <input type="radio" name="time_to_profit" id="more_than_1_year" value="Plus d’un an">
                                    <label for="more_than_1_year">
                                        Plus d’un an
                                    </label>
                                </div>
                            </div>

                            <div class="mb-4">
                                <label for="strategy" class="form-label">Quelle est votre stratégie pour atteindre cet objectif ?</label>
                                <textarea id="strategy" name="strategy" class="form-control" required></textarea>
                                <small class="text-gray-500">(Développer un produit/service unique, accroître la notériété etc)</small>
                            </div>

                            <div class="mb-4">
                                <label for="target_amount" class="form-label">Si vous deviez lever des fonds pour ce projet, quel serait votre montant cible ?</label>
                                <div>
                                    <input type="radio" name="target_amount" id="less_than_100k" value="Moins de 100 000 €">
                                    <label for="less_than_100k">
                                        Moins de 100 000 €
                                    </label>
                                </div>
                                <div>
                                    <input type="radio" name="target_amount" id="between_100k_and_500k" value="Entre 100 000 € et 500 000 €">
                                    <label for="between_100k_and_500k">
                                        Entre 100 000 € et 500 000 €
                                    </label>
                                </div>
                                <div>
                                    <input type="radio" name="target_amount" id="more_than_500k" value="Plus de 500 000 €">
                                    <label for="more_than_500k">
                                        Plus de 500 000 €
                                    </label>
                                </div>
                            </div>

                            <div class="mb-4">
                                <label for="growth_vision" class="form-label">Comment voyez-vous la croissance de votre projet sur les 12 prochains mois ?</label>
                                <div>
                                    <input type="radio" name="growth_vision" id="stable_growth" value="Stable, avec une croissance continue">
                                    <label for="stable_growth">
                                        Stable, avec une croissance continue
                                    </label>
                                </div>
                                <div>
                                    <input type="radio" name="growth_vision" id="accelerated_growth" value="Accélérée, en atteignant de nouveaux marchés">
                                    <label for="accelerated_growth">
                                        Accélérée, en atteignant de nouveaux marchés
                                    </label>
                                </div>
                                <div>
                                    <input type="radio" name="growth_vision" id="explosive_growth" value="Explosive, avec une expansion rapide">
                                    <label for="explosive_growth">
                                        Explosive, avec une expansion rapide
                                    </label>
                                </div>
                            </div>

                            <h3 class="text-lg font-semibold mb-2">🎨Potentiel et Scalabilité</h3>

                            <div class="mb-4">
                                <label for="why" class="form-label">Pourquoi pensez-vous que votre projet peut se développer à grande échelle ?</label>
                                <textarea id="why" name="why" class="form-control" required></textarea>
                            </div>

                            <div class="mb-4">
                                <label for="sector" class="form-label">Dans quel secteur opère votre projet et en quoi est-il innovant ?</label>
                                <div>
                                    <input type="radio" name="sector" id="ecommerce" value="E-commerce" onclick="toggleOtherSectorInput7(false)" required>
                                    <label for="ecommerce">E-commerce</label>
                                </div>

                                <div>
                                    <input type="radio" name="sector" id="technology" value="Technologie" onclick="toggleOtherSectorInput7(false)">
                                    <label for="technology">Technologie</label>
                                </div>

                                <div>
                                    <input type="radio" name="sector" id="health" value="Santé" onclick="toggleOtherSectorInput7(false)">
                                    <label for="health">Santé</label>
                                </div>

                                <div>
                                    <input type="radio" name="sector" id="other_sector" value="" onclick="toggleOtherSectorInput7(true)">
                                    <label for="other_sector">Autre :</label>
                                    <input type="text" id="sector_other" class="form-control mt-2" placeholder="Veuillez spécifier" oninput="updateOtherSectorValue7()" style="display: none;">
                                </div>
                            </div>

                            <div class="mb-4">
                                <label for="market_target" class="form-label">Quel est le marché cible de votre projet ?</label>
                                <textarea id="market_target" name="market_target" class="form-control" required></textarea>
                                <small class="text-gray-500">(Ex: Enfants, entreprises, consommateurs, etc)</small>
                            </div>

                            <div class="mb-4">
                                <label for="unique_features" class="form-label">Quelles sont les trois principales caractéristiques qui rendent votre projet unique et compétitif ?</label>
                                <textarea id="unique_features" name="unique_features" class="form-control" required></textarea>
                            </div>

                            <div class="mb-4">
                                <label for="growth_limitations" class="form-label">Qu’est-ce qui pourrait limiter la croissance de votre projet ?</label>
                                <textarea id="growth_limitations" name="growth_limitations" class="form-control" required></textarea>
                            </div>

                            <h3 class="text-lg font-semibold mb-2">💻 Analyse du Marché et Concurrence</h3>

                            <div class="mb-4">
                                <label for="market_analysis" class="form-label">Avez-vous déjà réalisé une analyse de marché pour ce projet ?</label>
                                <div>
                                    <input type="radio" name="market_analysis" id="analysis_complete" value="Oui, une analyse complète">
                                    <label for="analysis_complete">
                                        Oui, une analyse complète
                                    </label>
                                </div>

                                <div>
                                    <input type="radio" name="market_analysis" id="analysis_support_needed" value="Non, je compte sur votre soutien">
                                    <label for="analysis_support_needed">
                                        Non, je compte sur votre soutien
                                    </label>
                                </div>

                                <div>
                                    <input type="radio" name="market_analysis" id="analysis_partial" value="Partiellement, je travaille encore dessus">
                                    <label for="analysis_partial">
                                        Partiellement, je travaille encore dessus
                                    </label>
                                </div>
                            </div>

                            <div class="mb-4">
                                <label for="competitors" class="form-label">Qui sont vos principaux concurrents, et qu’est-ce qui vous différencie d’eux ?</label>
                                <textarea id="competitors" name="competitors" class="form-control" required></textarea>
                            </div>

                            <div class="mb-4">
                                <label for="clients" class="form-label">Votre projet a-t-il déjà eu des clients ou utilisateurs ?</label>
                                <div>
                                    <input type="radio" name="clients" id="clients_excellent_feedback" value="Oui, et les retours sont excellents">
                                    <label for="clients_excellent_feedback">
                                        Oui, et les retours sont excellents
                                    </label>
                                </div>
                                <div>
                                    <input type="radio" name="clients" id="clients_needs_improvement" value="Oui, mais je dois encore l'améliorer">
                                    <label for="clients_needs_improvement">
                                        Oui, mais je dois encore l'améliorer
                                    </label>
                                </div>
                                <div>
                                    <input type="radio" name="clients" id="clients_not_yet" value="Non, pas encore">
                                    <label for="clients_not_yet">
                                        Non, pas encore
                                    </label>
                                </div>
                            </div>

                            <div class="mb-4">
                                <label for="market_strategy" class="form-label">Comment comptez-vous conquérir votre marché cible ?</label>
                                <div>
                                    <input type="radio" name="market_strategy" id="market_strategy_digital_ads" value="Publicité digitale" onclick="toggleOtherInput6(false)" required>
                                    <label for="market_strategy_digital_ads">Publicité digitale</label>
                                </div>

                                <div>
                                    <input type="radio" name="market_strategy" id="market_strategy_social_media" value="Réseaux sociaux" onclick="toggleOtherInput6(false)">
                                    <label for="market_strategy_social_media">Réseaux sociaux</label>
                                </div>

                                <div>
                                    <input type="radio" name="market_strategy" id="market_strategy_word_of_mouth" value="Bouche-à-oreille" onclick="toggleOtherInput6(false)">
                                    <label for="market_strategy_word_of_mouth">Bouche-à-oreille</label>
                                </div>

                                <div>
                                    <input type="radio" name="market_strategy" id="other_market_strategy" value="" onclick="toggleOtherInput6(true)">
                                    <label for="other_market_strategy">Autre :</label>
                                    <input type="text" id="market_strategy_other" class="form-control mt-2" placeholder="Veuillez spécifier" oninput="updateOtherValue6()" style="display: none;">
                                </div>
                            </div>

                            <h3 class="text-lg font-semibold mb-2">📈Financement et Croissance : Parlons des chiffres !</h3>

                            <div class="mb-4">
                                <label for="funds_raised" class="form-label">Avez-vous déjà levé des fonds pour ce projet ?</label>
                                <div>
                                    <input type="radio" name="funds_raised" id="funds_raised_success" value="Oui, avec succès">
                                    <label for="funds_raised_success">
                                        Oui, avec succès
                                    </label>
                                </div>

                                <div>
                                    <input type="radio" name="funds_raised" id="funds_raised_not_yet" value="Non, pas encore">
                                    <label for="funds_raised_not_yet">
                                        Non, pas encore
                                    </label>
                                </div>

                                <div>
                                    <input type="radio" name="funds_raised" id="funds_raised_leads" value="Non, mais j’ai des pistes">
                                    <label for="funds_raised_leads">
                                        Non, mais j’ai des pistes
                                    </label>
                                </div>
                            </div>

                            <div class="mb-4">
                                <label for="initial_budget" class="form-label">Quel budget initial avez-vous prévu pour ce projet ?</label>
                                <div>
                                    <input type="radio" name="initial_budget" id="budget_less_50k" value="Moins de 50 000 €">
                                    <label for="budget_less_50k">
                                        Moins de 50 000 €
                                    </label>
                                </div>

                                <div>
                                    <input type="radio" name="initial_budget" id="budget_50k_200k" value="Entre 50 000 € et 200 000 €">
                                    <label for="budget_50k_200k">
                                        Entre 50 000 € et 200 000 €
                                    </label>
                                </div>

                                <div>
                                    <input type="radio" name="initial_budget" id="budget_above_200k" value="Plus de 200 000 €">
                                    <label for="budget_above_200k">
                                        Plus de 200 000 €
                                    </label>
                                </div>
                            </div>

                            <div class="mb-4">
                                <label for="first_step_with_unlimited_funds" class="form-label">Si vous aviez accès à un financement illimité, quelle serait la première chose que vous feriez pour faire grandir votre projet ?</label>
                                <textarea id="first_step_with_unlimited_funds" name="first_step_with_unlimited_funds" class="form-control" required></textarea>
                            </div>

                            <div class="mb-4">
                                <label for="growth_needs" class="form-label">De quoi avez-vous le plus besoin pour accélérer la croissance de votre projet ?</label>
                                <div>
                                    <input type="radio" name="growth_needs" id="needs_funds" value="Plus de fonds" onclick="toggleOtherInput5(false)" required>
                                    <label for="needs_funds">Plus de fonds</label>
                                </div>

                                <div>
                                    <input type="radio" name="growth_needs" id="needs_technology" value="Développer une technologie ou un produit" onclick="toggleOtherInput5(false)">
                                    <label for="needs_technology">Développer une technologie ou un produit</label>
                                </div>

                                <div>
                                    <input type="radio" name="growth_needs" id="needs_marketing" value="Améliorer le marketing" onclick="toggleOtherInput5(false)">
                                    <label for="needs_marketing">Améliorer le marketing</label>
                                </div>

                                <div>
                                    <input type="radio" name="growth_needs" id="other_growth_needs" value="" onclick="toggleOtherInput5(true)">
                                    <label for="other_growth_needs">Autre :</label>
                                    <input type="text" id="growth_needs_other" class="form-control mt-2" placeholder="Veuillez spécifier" oninput="updateOtherValue5()" style="display: none;">
                                </div>
                            </div>

                            <h3 class="text-lg font-semibold mb-2">🔧Soutien Stratégique et Partenariats</h3>

                            <div class="mb-4">
                                <div>
                                    <input type="radio" id="business_development" name="strategic_support" value="Développement commercial" onclick="toggleOtherInput2(false)" required>
                                    <label for="business_development">Développement commercial</label>
                                </div>
                                <div>
                                    <input type="radio" id="funding" name="strategic_support" value="Financement et levée de fonds" onclick="toggleOtherInput2(false)">
                                    <label for="funding">Financement et levée de fonds</label>
                                </div>
                                <div>
                                    <input type="radio" id="marketing_strategy" name="strategic_support" value="Stratégie marketing" onclick="toggleOtherInput2(false)">
                                    <label for="marketing_strategy">Stratégie marketing</label>
                                </div>
                                <div>
                                    <input type="radio" id="tech_expertise" name="strategic_support" value="Expertise technologique" onclick="toggleOtherInput2(false)">
                                    <label for="tech_expertise">Expertise technologique</label>
                                </div>

                                <!-- Option "Autre" avec champ texte associé -->
                                <div>
                                    <input type="radio" id="other" name="strategic_support" value="" onclick="toggleOtherInput2(true)">
                                    <label for="other">Autre :</label>
                                    <input type="text" id="strategic_support_other" class="form-control mt-2" placeholder="Veuillez spécifier" oninput="updateOtherValue2()" style="display: none;">
                                </div>
                            </div>

                            <div class="mb-4">
                                <label for="co_management" class="form-label">Êtes-vous ouvert(e) à la co-gestion de votre projet avec notre équipe d’experts pour maximiser son potentiel ?</label>
                                <div>
                                    <input type="radio" id="yes_collaboration" name="co_management" value="Oui, je suis prêt(e) à travailler en étroite collaboration" onclick="toggleOtherInput1(false)" required>
                                    <label for="yes_collaboration">Oui, je suis prêt(e) à travailler en étroite collaboration</label>
                                </div>
                                <div>
                                    <input type="radio" id="no_self_management" name="co_management" value="Non, je préfère gérer seul(e)" onclick="toggleOtherInput1(false)">
                                    <label for="no_self_management">Non, je préfère gérer seul(e)</label>
                                </div>
                                <div>
                                    <input type="radio" id="depends" name="co_management" value="Je ne sais pas encore, cela dépend du projet" onclick="toggleOtherInput1(false)">
                                    <label for="depends">Je ne sais pas encore, cela dépend du projet</label>
                                </div>
                                <div>
                                    <input type="radio" id="other_option" name="co_management" value="" onclick="toggleOtherInput1(true)">
                                    <label for="other_option">Autre :</label>
                                    <input type="text" id="co_management_other" class="form-control mt-2" placeholder="Veuillez spécifier" oninput="updateOtherValue1()" style="display: none;">
                                </div>
                            </div>

                            <div class="mb-4">
                                <label for="desired_connections" class="form-label">Quelles connexions ou partenaires aimeriez-vous avoir dans votre réseau ?</label>
                                <div>
                                    <input type="radio" id="investors" name="desired_connections" value="Investisseurs" onclick="toggleOtherInput3(false)" required>
                                    <label for="investors">Investisseurs</label>
                                </div>
                                <div>
                                    <input type="radio" id="industry_experts" name="desired_connections" value="Experts du secteur" onclick="toggleOtherInput3(false)">
                                    <label for="industry_experts">Experts du secteur</label>
                                </div>
                                <div>
                                    <input type="radio" id="suppliers" name="desired_connections" value="Fournisseurs ou distributeurs" onclick="toggleOtherInput3(false)">
                                    <label for="suppliers">Fournisseurs ou distributeurs</label>
                                </div>

                                <div>
                                    <input type="radio" id="others_option" name="desired_connections" value="" onclick="toggleOtherInput3(true)">
                                    <label for="others_option">Autre :</label>
                                    <input type="text" id="desired_connections_other" class="form-control mt-2" placeholder="Veuillez spécifier" oninput="updateOtherValue3()" style="display: none;">
                                </div>
                            </div>

                            <h3 class="text-lg font-semibold mb-2">🔧Impact et Valeurs</h3>

                            <div class="mb-4">
                                <label for="impact" class="form-label">En quoi votre projet a-t-il un impact positif (social, environnemental, économique) ?
                                </label>
                                <textarea id="impact" name="impact" class="form-control" required></textarea>
                            </div>

                            <div class="mb-4">
                                <label for="core_values" class="form-label">Quelles sont les valeurs fondamentales de votre projet ou entreprise ?</label>
                                <div>
                                    <input type="radio" id="innovation" name="core_values" value="Innovation" onclick="toggleOtherInput4(false)" required>
                                    <label for="innovation">Innovation</label>
                                </div>
                                <div>
                                    <input type="radio" id="sustainability" name="core_values" value="Durabilité" onclick="toggleOtherInput4(false)">
                                    <label for="sustainability">Durabilité</label>
                                </div>
                                <div>
                                    <input type="radio" id="customer_service" name="core_values" value="Service client exceptionnel" onclick="toggleOtherInput4(false)">
                                    <label for="customer_service">Service client exceptionnel</label>
                                </div>

                                <div>
                                    <input type="radio" id="other_value" name="core_values" value="" onclick="toggleOtherInput4(true)">
                                    <label for="other_value">Autre :</label>
                                    <input type="text" id="core_values_other" class="form-control mt-2" placeholder="Veuillez spécifier" oninput="updateOtherValue4()" style="display: none;">
                                </div>
                            </div>

                            <div class="mb-4">
                                <label for="value_translation" class="form-label">Comment ces valeurs se traduisent-elles dans votre quotidien professionnel ?</label>
                                <textarea id="value_translation" name="value_translation" class="form-control" required></textarea>
                            </div>

                            <div class="mb-4">
                                <label for="global_impact" class="form-label">Si votre projet devenait une référence mondiale, quel impact aimeriez-vous qu'il ait sur la société ?</label>
                                <textarea id="global_impact" name="global_impact" class="form-control" required></textarea>
                            </div>

                            <h3 class="text-lg font-semibold mb-2">🔧Petites dernières pour le Fun</h3>

                            <div class="mb-4">
                                <label for="cartoon_character" class="form-label">Si votre projet était un personnage de dessin animé, qui serait-il et pourquoi ?
                                </label>
                                <textarea id="cartoon_character" name="cartoon_character" class="form-control" required></textarea>
                            </div>

                            <div class="mb-4">
                                <label for="tv_synopsis" class="form-label">Imaginez que votre projet soit transformé en série TV. Quel en serait le synopsis ?</label>
                                <textarea id="tv_synopsis" name="tv_synopsis" class="form-control" required></textarea>
                            </div>

                            <div class="mb-4">
                                <label for="documentary_title" class="form-label">Quel serait le titre du documentaire Netflix sur la réussite de votre projet ?</label>
                                <textarea id="documentary_title" name="documentary_title" class="form-control" required></textarea>
                            </div>

                            <div class="mb-4">
                                <label for="celebration_details" class="form-label">Si vous pouviez organiser une fête pour célébrer le succès de votre projet, où et comment se déroulerait-elle ?
                                </label>
                                <textarea id="celebration_details" name="celebration_details" class="form-control" required></textarea>
                            </div>

                            <div class="mb-4">
                                <label for="client_slogan" class="form-label">Si votre projet pouvait parler, que dirait-il à ses futurs clients en un seul slogan ?</label>
                                <textarea id="client_slogan" name="client_slogan" class="form-control" required></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="file_input" class="form-label">Téléverser un fichier ( Dernier bilan )</label>
                                <input class="form-control" type="file" id="file_input" name="file_input">
                            </div>

                            <div>
                                <button type="submit" class="btn" style="background-color: #6A00B8; color: white;">Soumettre le projet</button>
                            </div>
                        </form>
                    </div>
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
       
       function toggleOtherObjectiveInput9(show) {
    const customInput = document.getElementById("passion_aspect_custom");
    const otherRadio = document.getElementById("other_passion_aspect");

    customInput.style.display = show ? "block" : "none";
    customInput.disabled = !show; // Désactive le champ texte s'il n'est pas visible
    
    if (!show) {
        customInput.value = ""; // Réinitialise le champ si "Autre" est désélectionné
        otherRadio.value = ""; // Réinitialise la valeur du bouton radio "Autre"
    }
}

function updateOtherObjectiveValue9() {
    const customInput = document.getElementById("passion_aspect_custom");
    const otherRadio = document.getElementById("other_passion_aspect");
    
    otherRadio.value = customInput.value; // Met à jour la valeur de l'option radio "Autre"
}

    </script>
    <script>
        // Fonction pour afficher ou masquer le champ de saisie pour l'option "Autre"
        function toggleOtherObjectiveInput8(show) {
            const otherInput = document.getElementById('objective_other');
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
        function updateOtherObjectiveValue8() {
            const otherRadio = document.getElementById('other_objective');
            const otherInput = document.getElementById('objective_other');
            otherRadio.value = otherInput.value;
        }

        // Assure que le champ texte est masqué si une option prédéfinie est sélectionnée
        document.querySelectorAll('input[name="objective"]').forEach((input) => {
            input.addEventListener('change', (e) => {
                if (e.target.id !== 'other_objective') {
                    toggleOtherObjectiveInput8(false);
                }
            });
        });
    </script>
    <script>
        // Fonction pour afficher ou masquer le champ de saisie pour l'option "Autre"
        function toggleOtherSectorInput7(show) {
            const otherInput = document.getElementById('sector_other');
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
        function updateOtherSectorValue7() {
            const otherRadio = document.getElementById('other_sector');
            const otherInput = document.getElementById('sector_other');
            otherRadio.value = otherInput.value;
        }

        // Assure que le champ texte est masqué si une option prédéfinie est sélectionnée
        document.querySelectorAll('input[name="sector"]').forEach((input) => {
            input.addEventListener('change', (e) => {
                if (e.target.id !== 'other_sector') {
                    toggleOtherSectorInput7(false);
                }
            });
        });
    </script>
    <script>
        // Fonction pour afficher ou masquer le champ de saisie pour l'option "Autre"
        function toggleOtherInput6(show) {
            const otherInput = document.getElementById('market_strategy_other');
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
        function updateOtherValue6() {
            const otherRadio = document.getElementById('other_market_strategy');
            const otherInput = document.getElementById('market_strategy_other');
            otherRadio.value = otherInput.value;
        }

        // Assure que le champ texte est masqué si une option prédéfinie est sélectionnée
        document.querySelectorAll('input[name="market_strategy"]').forEach((input) => {
            input.addEventListener('change', (e) => {
                if (e.target.id !== 'other_market_strategy') {
                    toggleOtherInput6(false);
                }
            });
        });
    </script>
    <script>
        // Affiche ou masque le champ de saisie personnalisée en fonction de l'option sélectionnée
        function toggleOtherInput5(show) {
            const otherInput = document.getElementById('growth_needs_other');
            if (show) {
                otherInput.style.display = 'block';
                otherInput.required = true;
            } else {
                otherInput.style.display = 'none';
                otherInput.required = false;
                otherInput.value = ''; // Réinitialise la valeur si non utilisée
            }
        }

        // Met à jour la valeur de l'option "Autre" dans le champ radio
        function updateOtherValue5() {
            const otherRadio = document.getElementById('other_growth_needs');
            const otherInput = document.getElementById('growth_needs_other');
            otherRadio.value = otherInput.value;
        }

        // Assure que le champ texte est masqué si une option prédéfinie est sélectionnée
        document.querySelectorAll('input[name="growth_needs"]').forEach((input) => {
            input.addEventListener('change', (e) => {
                if (e.target.id !== 'other_growth_needs') {
                    toggleOtherInput5(false);
                }
            });
        });
    </script>
    <script>
        // Affiche ou masque le champ de saisie personnalisée en fonction de l'option sélectionnée
        function toggleOtherInput4(show) {
            const otherInput = document.getElementById('core_values_other');
            if (show) {
                otherInput.style.display = 'block';
                otherInput.required = true;
            } else {
                otherInput.style.display = 'none';
                otherInput.required = false;
                otherInput.value = ''; // Réinitialise la valeur si non utilisée
            }
        }

        // Met à jour la valeur de l'option "Autre" dans le champ radio
        function updateOtherValue4() {
            const otherRadio = document.getElementById('other_value');
            const otherInput = document.getElementById('core_values_other');
            otherRadio.value = otherInput.value;
        }

        // Assure que le champ texte est masqué si une option prédéfinie est sélectionnée
        document.querySelectorAll('input[name="core_values"]').forEach((input) => {
            input.addEventListener('change', (e) => {
                if (e.target.id !== 'other_value') {
                    toggleOtherInput4(false);
                }
            });
        });
    </script>
    <script>
        // Affiche ou masque le champ de saisie personnalisée en fonction de l'option sélectionnée
        function toggleOtherInput3(show) {
            const otherInput = document.getElementById('desired_connections_other');
            if (show) {
                otherInput.style.display = 'block';
                otherInput.required = true;
            } else {
                otherInput.style.display = 'none';
                otherInput.required = false;
                otherInput.value = ''; // Réinitialise la valeur si non utilisée
            }
        }

        // Met à jour la valeur de l'option "Autre" dans le champ radio
        function updateOtherValue3() {
            const otherRadio = document.getElementById('others_option');
            const otherInput = document.getElementById('desired_connections_other');
            otherRadio.value = otherInput.value;
        }

        // Assure que le champ texte est masqué si une option prédéfinie est sélectionnée
        document.querySelectorAll('input[name="desired_connections"]').forEach((input) => {
            input.addEventListener('change', (e) => {
                if (e.target.id !== 'others_option') {
                    toggleOtherInput3(false);
                }
            });
        });
    </script>
    <script>
        // Affiche ou masque le champ de saisie personnalisée en fonction de l'option sélectionnée
        function toggleOtherInput2(show) {
            const otherInput = document.getElementById('strategic_support_other');
            if (show) {
                otherInput.style.display = 'block';
                otherInput.required = true;
            } else {
                otherInput.style.display = 'none';
                otherInput.required = false;
                otherInput.value = ''; // Réinitialise la valeur si non utilisée
            }
        }

        // Met à jour la valeur de l'option "Autre" dans le champ radio
        function updateOtherValue2() {
            const otherRadio = document.getElementById('other');
            const otherInput = document.getElementById('strategic_support_other');
            otherRadio.value = otherInput.value;
        }

        // Ajoute un événement pour masquer le champ texte lorsque les options radio prédéfinies sont sélectionnées
        document.querySelectorAll('input[name="strategic_support"]').forEach((input) => {
            input.addEventListener('change', (e) => {
                if (e.target.id !== 'other') {
                    toggleOtherInput2(false);
                }
            });
        });
    </script>
    <script>
        // Affiche ou masque le champ de saisie personnalisée en fonction de l'option sélectionnée
        function toggleOtherInput1(show) {
            const otherInput = document.getElementById('co_management_other');
            if (show) {
                otherInput.style.display = 'block';
                otherInput.required = true;
            } else {
                otherInput.style.display = 'none';
                otherInput.required = false;
                otherInput.value = ''; // Réinitialise la valeur si non utilisée
            }
        }

        // Met à jour la valeur de l'option "Autre" dans le champ radio
        function updateOtherValue1() {
            const otherRadio = document.getElementById('other_option');
            const otherInput = document.getElementById('co_management_other');
            otherRadio.value = otherInput.value;
        }

        // Ajoute un événement pour masquer le champ texte lorsque les options radio prédéfinies sont sélectionnées
        document.querySelectorAll('input[name="co_management"]').forEach((input) => {
            input.addEventListener('change', (e) => {
                if (e.target.id !== 'other_option') {
                    toggleOtherInput1(false);
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
