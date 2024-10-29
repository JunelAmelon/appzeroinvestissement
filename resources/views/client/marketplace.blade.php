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
                                            <a class="col-6 col-md-4 p-0" href="#">
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
                                            <span class="sub-item">Marketplace Business</span>
                                        </a>
                                        <a href="/marketplace-business">
                                            <span class="sub-item">Marketplace Dépôt</span>
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
                        <!-- En-tête modifiée ici -->
                        <h2 class="text-center mb-0 card-header p-3" style="background-color: #6A00B8; color: white;">Marketplace Business</h2>

                        <form action="{{ route('marketplace.save') }}" method="POST" class="bg-white p-5 rounded shadow" enctype="multipart/form-data">
                            @csrf

                            <h2 class="text-center mb-4">Bienvenue dans l’univers Marketplace !! 🚀</h2>
                            <p class="text-center mb-4">Chez ZeroInvestissement.com, on adore transformer des idées en réalité, surtout quand elles sont brillantes comme la vôtre ! Vous êtes à deux doigts de trouver le business clé en main qui vous correspond parfaitement sur notre marketplace. Pour qu’on puisse bien comprendre votre projet et votre motivation, répondez à ces quelques questions. C’est parti, amusez-vous et soyez créatif, on vous attend avec impatience !</p>

                            <h3 class="text-lg font-semibold mb-2">Pourquoi avoir choisi ce Business Clé en Main ?</h3> <br>
                            <div class="mb-3">
                                <label class="form-label">Quel business avez-vous choisi sur la marketplace ? (Nom et description rapide)</label>
                                <textarea class="form-control" name="business_name" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Qu’est-ce qui vous a attiré dans ce business en particulier ? </label>
                                <div>
                                    <input type="radio" id="attraction_sector" name="business_attraction" value="Le secteur d’activité" onclick="toggleOtherAttractionInput(false)">
                                    <label for="attraction_sector">Le secteur d’activité</label>
                                </div>
                                <div>
                                    <input type="radio" id="attraction_business_model" name="business_attraction" value="Le modèle d’affaires" onclick="toggleOtherAttractionInput(false)">
                                    <label for="attraction_business_model">Le modèle d’affaires</label>
                                </div>
                                <div>
                                    <input type="radio" id="attraction_profitability" name="business_attraction" value="Le potentiel de rentabilité" onclick="toggleOtherAttractionInput(false)">
                                    <label for="attraction_profitability">Le potentiel de rentabilité</label>
                                </div>

                                <!-- Champ texte pour une réponse personnalisée -->
                                <div class="mt-2">
                                    <input type="radio" id="attraction_other_radio" name="business_attraction" value="" onclick="toggleOtherAttractionInput(true)">
                                    <label for="attraction_other_radio">Autre :</label>
                                    <input type="text" class="form-control mt-2" id="attraction_other" placeholder="Entrez votre réponse" oninput="updateOtherAttractionValue()" style="display: none;">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Si ce business clé en main était un animal, lequel serait-il et pourquoi ?</label>
                                <input type="text" class="form-control" name="animal_comparison" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Sur une échelle de 1 à 10, à quel point êtes-vous convaincu que ce business est fait pour vous ?</label>
                                <div>
                                    <input type="radio" id="conviction_level_1" name="conviction_level" value="1 : Juste curieux">
                                    <label for="conviction_level_1">1 : Juste curieux</label>
                                </div>
                                <div>
                                    <input type="radio" id="conviction_level_5" name="conviction_level" value="5 : Ça pourrait marcher">
                                    <label for="conviction_level_5">5 : Ça pourrait marcher</label>
                                </div>
                                <div>
                                    <input type="radio" id="conviction_level_10" name="conviction_level" value="10 : Facile à déployer n’importe où">
                                    <label for="conviction_level_10">10 : C’est exactement ce que je cherchais !</label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Qu’est-ce qui vous enthousiasme le plus à l’idée de prendre en main ce business ?</label>
                                <div>
                                    <input type="radio" id="enthusiasm_reason_1" name="enthusiasm_reason" value="Sa capacité à générer des revenus rapidement">
                                    <label for="enthusiasm_reason_1">Sa capacité à générer des revenus rapidement</label>
                                </div>
                                <div>
                                    <input type="radio" id="enthusiasm_reason_2" name="enthusiasm_reason" value="Le défi entrepreneurial">
                                    <label for="enthusiasm_reason_2">Le défi entrepreneurial</label>
                                </div>
                                <div>
                                    <input type="radio" id="enthusiasm_reason_3" name="enthusiasm_reason" value="La possibilité d’innover dans ce secteur">
                                    <label for="enthusiasm_reason_3">La possibilité d’innover dans ce secteur</label>
                                </div>
                            </div>

                            <h3 class="text-lg font-semibold mb-2">Votre Motivation et Ambitions</h3>
                            <div class="mb-3">
                                <label class="form-label">Pourquoi avez-vous décidé de vous lancer dans l'entrepreneuriat ?</label>
                                <div>
                                    <input type="radio" id="entrepreneur_reason_1" name="entrepreneur_reason" value="Devenir mon propre patron" onclick="toggleOtherEntrepreneurInput(false)">
                                    <label for="entrepreneur_reason_1">Devenir mon propre patron</label>
                                </div>
                                <div>
                                    <input type="radio" id="entrepreneur_reason_2" name="entrepreneur_reason" value="Diversifier mes sources de revenus" onclick="toggleOtherEntrepreneurInput(false)">
                                    <label for="entrepreneur_reason_2">Diversifier mes sources de revenus</label>
                                </div>
                                <div>
                                    <input type="radio" id="entrepreneur_reason_3" name="entrepreneur_reason" value="Lancer un projet que je contrôle entièrement" onclick="toggleOtherEntrepreneurInput(false)">
                                    <label for="entrepreneur_reason_3">Lancer un projet que je contrôle entièrement</label>
                                </div>

                                <!-- Champ texte pour une raison personnalisée -->
                                <div class="mt-2">
                                    <input type="radio" id="entrepreneur_reason_other_radio" name="entrepreneur_reason" value="" onclick="toggleOtherEntrepreneurInput(true)">
                                    <label for="entrepreneur_reason_other_radio">Autre :</label>
                                    <textarea class="form-control mt-2" id="entrepreneur_reason_other" placeholder="Entrez une autre raison" oninput="updateOtherEntrepreneurValue()" style="display: none;"></textarea>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Qu’est-ce qui vous motive le plus dans ce business clé en main spécifique ?</label>
                                <div>
                                    <input type="radio" id="specific_motivation_1" name="specific_motivation" value="Le potentiel de croissance" onclick="toggleOtherMotivationInput(false)">
                                    <label for="specific_motivation_1">Le potentiel de croissance</label>
                                </div>
                                <div>
                                    <input type="radio" id="specific_motivation_2" name="specific_motivation" value="L’absence de risque de démarrage" onclick="toggleOtherMotivationInput(false)">
                                    <label for="specific_motivation_2">L’absence de risque de démarrage</label>
                                </div>
                                <div>
                                    <input type="radio" id="specific_motivation_3" name="specific_motivation" value="La possibilité de m’y investir pleinement" onclick="toggleOtherMotivationInput(false)">
                                    <label for="specific_motivation_3">La possibilité de m’y investir pleinement</label>
                                </div>

                                <!-- Champ texte pour une motivation personnalisée -->
                                <div class="mt-2">
                                    <input type="radio" id="specific_motivation_other_radio" name="specific_motivation" value="" onclick="toggleOtherMotivationInput(true)">
                                    <label for="specific_motivation_other_radio">Autre :</label>
                                    <textarea class="form-control mt-2" id="specific_motivation_other" placeholder="Entrez une autre motivation" oninput="updateOtherMotivationValue()" style="display: none;"></textarea>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Si vous deviez décrire votre approche entrepreneuriale en 3 mots, ce serait…</label>
                                <input type="text" class="form-control" name="approach_keywords" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Qu’est-ce qui, selon vous, va vous permettre de réussir avec ce business ?</label>
                                <textarea class="form-control" name="success_factors" required></textarea>
                            </div>

                            <h3 class="text-lg font-semibold mb-2">Financement : Parlons Argent !</h3>
                            <div class="mb-3">
                                <label class="form-label">Avez-vous déjà planifié comment financer l’achat de ce business clé en main ?</label>
                                <div>
                                    <input type="radio" id="financing_option_1" name="financing_planned" value="Oui, j’ai déjà les fonds disponibles">
                                    <label for="financing_option_1">Oui, j’ai déjà les fonds disponibles</label>
                                </div>
                                <div>
                                    <input type="radio" id="financing_option_2" name="financing_planned" value="Oui, j’ai prévu un financement partiel">
                                    <label for="financing_option_2">Oui, j’ai prévu un financement partiel</label>
                                </div>
                                <div>
                                    <input type="radio" id="financing_option_3" name="financing_planned" value="Non, je cherche des solutions de financement">
                                    <label for="financing_option_3">Non, je cherche des solutions de financement</label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Si vous avez besoin de financement, comment pensez-vous y accéder ?</label>
                                <div>
                                    <input type="radio" id="financing_method_1" name="financing_method" value="Prêt bancaire">
                                    <label for="financing_method_1">Prêt bancaire</label>
                                </div>
                                <div>
                                    <input type="radio" id="financing_method_2" name="financing_method" value="Investissement personnel">
                                    <label for="financing_method_2">Investissement personnel</label>
                                </div>
                                <div>
                                    <input type="radio" id="financing_method_3" name="financing_method" value="Partenaires ou investisseurs externes">
                                    <label for="financing_method_3">Partenaires ou investisseurs externes</label>
                                </div>
                                <div>
                                    <input type="radio" id="financing_method_4" name="financing_method" value="Je cherche des options, pouvez-vous m’aider ?">
                                    <label for="financing_method_4">Je cherche des options, pouvez-vous m’aider ?</label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Quel est votre budget maximum pour l’achat de ce business ?</label>
                                <div>
                                    <input type="radio" id="budget_1" name="max_budget" value="Moins de 10 000 €" onclick="toggleOtherBudgetInput(false)">
                                    <label for="budget_1">Moins de 10 000 €</label>
                                </div>
                                <div>
                                    <input type="radio" id="budget_2" name="max_budget" value="Entre 10 000 € et 50 000 €" onclick="toggleOtherBudgetInput(false)">
                                    <label for="budget_2">Entre 10 000 € et 50 000 €</label>
                                </div>
                                <div>
                                    <input type="radio" id="budget_3" name="max_budget" value="Plus de 50 000 €" onclick="toggleOtherBudgetInput(false)">
                                    <label for="budget_3">Plus de 50 000 €</label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Seriez-vous intéressé par une option de financement proposée par ZeroInvestissement.com ?</label>
                                <div>
                                    <input type="radio" id="interested_financing_yes" name="interest_in_financing_option" value="Oui, je suis intéressé par l'option de financement de ZeroInvestissement.com">
                                    <label for="interested_financing_yes">Oui, je suis intéressé par l'option de financement de ZeroInvestissement.com</label>
                                </div>
                                <div>
                                    <input type="radio" id="interested_financing_no" name="interest_in_financing_option" value="Non, je préfère trouver une solution de mon côté">
                                    <label for="interested_financing_no">Non, je préfère trouver une solution de mon côté</label>
                                </div>
                            </div>

                            <h3 class="text-lg font-semibold mb-2">Stratégie et Gestion</h3>
                            <div class="mb-3">
                                <label class="form-label">Quelle est la première action que vous allez entreprendre une fois le business acquis ?</label>
                                <div>
                                    <input type="radio" id="action_promotion" name="first_action" value="Lancer une campagne de promotion" onclick="toggleOtherActionInput(false)">
                                    <label for="action_promotion">Lancer une campagne de promotion</label>
                                </div>
                                <div>
                                    <input type="radio" id="action_marketing_strategy" name="first_action" value="Revoir la stratégie marketing" onclick="toggleOtherActionInput(false)">
                                    <label for="action_marketing_strategy">Revoir la stratégie marketing</label>
                                </div>
                                <div>
                                    <input type="radio" id="action_optimize_operations" name="first_action" value="Optimiser les opérations internes" onclick="toggleOtherActionInput(false)">
                                    <label for="action_optimize_operations">Optimiser les opérations internes</label>
                                </div>

                                <!-- Champ texte pour une réponse personnalisée -->
                                <div class="mt-2">
                                    <input type="radio" id="action_other_radio" name="first_action" value="" onclick="toggleOtherActionInput(true)">
                                    <label for="action_other_radio">Autre :</label>
                                    <input type="text" class="form-control mt-2" id="action_other" placeholder="Entrez votre réponse" oninput="updateOtherActionValue()" style="display: none;">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Comment comptez-vous faire connaître ce business à vos futurs clients ?</label>
                                <div>
                                    <input type="radio" id="digital_ads" name="marketing_strategy" value="Publicité digitale (Google, Facebook, etc.)" onclick="toggleOtherMarketingInput(false)">
                                    <label for="digital_ads">Publicité digitale (Google, Facebook, etc.)</label>
                                </div>
                                <div>
                                    <input type="radio" id="social_media" name="marketing_strategy" value="Réseaux sociaux (Instagram, TikTok, LinkedIn)" onclick="toggleOtherMarketingInput(false)">
                                    <label for="social_media">Réseaux sociaux (Instagram, TikTok, LinkedIn)</label>
                                </div>
                                <div>
                                    <input type="radio" id="word_of_mouth" name="marketing_strategy" value="Bouche-à-oreille" onclick="toggleOtherMarketingInput(false)">
                                    <label for="word_of_mouth">Bouche-à-oreille</label>
                                </div>

                                <!-- Champ texte pour une réponse personnalisée -->
                                <div class="mt-2">
                                    <input type="radio" id="marketing_other_radio" name="marketing_strategy" value="" onclick="toggleOtherMarketingInput(true)">
                                    <label class="form-label" for="marketing_other_radio">Autre :</label>
                                    <input type="text" class="form-control mt-2" id="marketing_other" placeholder="Entrez votre réponse" oninput="updateOtherMarketingValue()" style="display: none;">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Quel est votre objectif principal avec ce business clé en main dans les 12 prochains mois ?</label>
                                <div>
                                    <input type="radio" id="revenue_goal" name="main_objective" value="Générer un chiffre d’affaires de X €" onclick="toggleOtherObjectiveInput(false)">
                                    <label for="revenue_goal">Générer un chiffre d’affaires de X €</label>
                                </div>
                                <div>
                                    <input type="radio" id="client_retention" name="main_objective" value="Fidéliser un grand nombre de clients" onclick="toggleOtherObjectiveInput(false)">
                                    <label for="client_retention">Fidéliser un grand nombre de clients</label>
                                </div>
                                <div>
                                    <input type="radio" id="expand_activity" name="main_objective" value="Étendre l’activité dans plusieurs régions" onclick="toggleOtherObjectiveInput(false)">
                                    <label for="expand_activity">Étendre l’activité dans plusieurs régions</label>
                                </div>

                                <!-- Champ texte pour une réponse personnalisée -->
                                <div class="mt-2">
                                    <input type="radio" id="objective_other_radio" name="main_objective" value="" onclick="toggleOtherObjectiveInput(true)">
                                    <label for="objective_other_radio">Autre :</label>
                                    <input type="text" class="form-control mt-2" id="objective_other" placeholder="Entrez votre réponse" oninput="updateOtherObjectiveValue()" style="display: none;">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Quel budget publicitaire initial prévoyez-vous pour ce business ?</label>
                                <div>
                                    <input type="radio" id="initial_ad_budget_1" name="initial_ad_budget" value="Moins de 500 €">
                                    <label for="initial_ad_budget_1">Moins de 500 €</label>
                                </div>
                                <div>
                                    <input type="radio" id="initial_ad_budget_2" name="initial_ad_budget" value="500 € à 2000 €">
                                    <label for="initial_ad_budget_2">500 € à 2000 €</label>
                                </div>
                                <div>
                                    <input type="radio" id="initial_ad_budget_3" name="initial_ad_budget" value="Plus de 2000 €">
                                    <label for="initial_ad_budget_3">Plus de 2000 €</label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Si vous pouviez donner un coup de boost immédiat à une partie du business, laquelle serait-ce ?</label>
                                <div>
                                    <input type="radio" id="boost_sales" name="business_boost_area" value="Les ventes" onclick="toggleOtherBoostAreaInput(false)">
                                    <label for="boost_sales">Les ventes</label>
                                </div>
                                <div>
                                    <input type="radio" id="boost_notoriety" name="business_boost_area" value="La notoriété" onclick="toggleOtherBoostAreaInput(false)">
                                    <label for="boost_notoriety">La notoriété</label>
                                </div>
                                <div>
                                    <input type="radio" id="boost_customer_service" name="business_boost_area" value="Le service client" onclick="toggleOtherBoostAreaInput(false)">
                                    <label for="boost_customer_service">Le service client</label>
                                </div>

                                <!-- Champ texte pour une réponse personnalisée -->
                                <div class="mt-2">
                                    <input type="radio" id="boost_other_radio" name="business_boost_area" value="" onclick="toggleOtherBoostAreaInput(true)">
                                    <label for="boost_other_radio">Autre :</label>
                                    <input type="text" class="form-control mt-2" id="boost_other" placeholder="Entrez votre réponse" oninput="updateOtherBoostAreaValue()" style="display: none;">
                                </div>
                            </div>

                            <h3 class="text-lg font-semibold mb-2">Formation et Support</h3>
                            <div class="mb-3">
                                <label class="form-label">Avez-vous besoin d'une formation pour mieux comprendre le secteur du business que vous avez choisi ?</label>
                                <div>
                                    <input type="radio" id="training_needed_1" name="training_needed" value="Oui, je suis prêt à me former à 100 %">
                                    <label for="training_needed_1">Oui, je suis prêt à me former à 100 %</label>
                                </div>
                                <div>
                                    <input type="radio" id="training_needed_2" name="training_needed" value="Oui, mais seulement sur certains aspects">
                                    <label for="training_needed_2">Oui, mais seulement sur certains aspects</label>
                                </div>
                                <div>
                                    <input type="radio" id="training_needed_3" name="training_needed" value="Non, je maîtrise déjà bien ce secteur">
                                    <label for="training_needed_3">Non, je maîtrise déjà bien ce secteur</label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Comment préférez-vous suivre la formation associée à ce business ?</label>
                                <div>
                                    <input type="radio" id="preferred_training_method_1" name="preferred_training_method" value="Modules en ligne à mon rythme">
                                    <label for="preferred_training_method_1">Modules en ligne à mon rythme</label>
                                </div>
                                <div>
                                    <input type="radio" id="preferred_training_method_2" name="preferred_training_method" value="Webinaires et ateliers pratiques">
                                    <label for="preferred_training_method_2">Webinaires et ateliers pratiques</label>
                                </div>
                                <div>
                                    <input type="radio" id="preferred_training_method_3" name="preferred_training_method" value="Sessions de coaching en direct">
                                    <label for="preferred_training_method_3">Sessions de coaching en direct</label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Quelles compétences spécifiques aimeriez-vous développer avant de vous lancer ?</label>
                                <div>
                                    <input type="radio" id="develop_digital_marketing" name="skills_to_develop" value="Marketing digital" onclick="toggleOtherSkillsInput(false)">
                                    <label for="develop_digital_marketing">Marketing digital</label>
                                </div>
                                <div>
                                    <input type="radio" id="develop_operations_management" name="skills_to_develop" value="Gestion des opérations" onclick="toggleOtherSkillsInput(false)">
                                    <label for="develop_operations_management">Gestion des opérations</label>
                                </div>
                                <div>
                                    <input type="radio" id="develop_customer_relations" name="skills_to_develop" value="Relation client" onclick="toggleOtherSkillsInput(false)">
                                    <label for="develop_customer_relations">Relation client</label>
                                </div>

                                <!-- Champ texte pour une réponse personnalisée -->
                                <div class="mt-2">
                                    <input type="radio" id="develop_other_radio" name="skills_to_develop" value="" onclick="toggleOtherSkillsInput(true)">
                                    <label for="develop_other_radio">Autre :</label>
                                    <input type="text" class="form-control mt-2" id="develop_other" placeholder="Entrez votre réponse" oninput="updateOtherSkillsValue()" style="display: none;">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Quel type de suivi attendez-vous de ZeroInvestissement.com après le lancement ?</label>
                                <div>
                                    <input type="radio" id="expected_support_1" name="expected_support" value="Suivi hebdomadaire pour des conseils stratégiques">
                                    <label for="expected_support_1">Suivi hebdomadaire pour des conseils stratégiques</label>
                                </div>
                                <div>
                                    <input type="radio" id="expected_support_2" name="expected_support" value="Suivi mensuel pour évaluer les performances">
                                    <label for="expected_support_2">Suivi mensuel pour évaluer les performances</label>
                                </div>
                                <div>
                                    <input type="radio" id="expected_support_3" name="expected_support" value="Suivi selon mes besoins spécifiques">
                                    <label for="expected_support_3">Suivi selon mes besoins spécifiquest</label>
                                </div>
                            </div>

                            <h3 class="text-lg font-semibold mb-2">Engagement et Croissance</h3>
                            <div class="mb-3">
                                <label class="form-label">Combien de temps par semaine êtes-vous prêt à consacrer au développement de ce business ?</label>
                                <div>
                                    <input type="radio" id="weekly_hours_1" name="weekly_hours" value="Temps plein (40h+)">
                                    <label for="weekly_hours_1">Temps plein (40h+)</label>
                                </div>
                                <div>
                                    <input type="radio" id="weekly_hours_2" name="weekly_hours" value="Temps partiel (20-30h)">
                                    <label for="weekly_hours_2">Temps partiel (20-30h)</label>
                                </div>
                                <div>
                                    <input type="radio" id="weekly_hours_3" name="weekly_hours" value="Soirées et week-ends">
                                    <label for="weekly_hours_3">Soirées et week-ends</label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Combien de temps vous donnez-vous pour rendre ce business rentable ?</label>
                                <div>
                                    <input type="radio" id="profit_timeline_1" name="profit_timeline" value="3 mois ou moins">
                                    <label for="profit_timeline_1">3 mois ou moins</label>
                                </div>
                                <div>
                                    <input type="radio" id="profit_timeline_2" name="profit_timeline" value="6 à 12 mois">
                                    <label for="profit_timeline_2">6 à 12 mois</label>
                                </div>
                                <div>
                                    <input type="radio" id="profit_timeline_3" name="profit_timeline" value="Je suis prêt à attendre plus si nécessaire">
                                    <label for="profit_timeline_3">Je suis prêt à attendre plus si nécessaire</label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Avez-vous un plan de croissance pour ce business une fois lancé ?</label>
                                <div>
                                    <input type="radio" id="growth_plan_1" name="growth_plan" value="Oui, je compte l’étendre rapidement">
                                    <label for="growth_plan_1">Oui, je compte l’étendre rapidement</label>
                                </div>
                                <div>
                                    <input type="radio" id="growth_plan_2" name="growth_plan" value="Non, je préfère d’abord stabiliser les opérations">
                                    <label for="growth_plan_2">Non, je préfère d’abord stabiliser les opérations</label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Si vous aviez accès à un mentor entrepreneur, que lui demanderiez-vous en priorité ?</label>
                                <textarea class="form-control" name="mentor_questions" required></textarea>
                            </div>

                            <h3 class="text-lg font-semibold mb-2">Et pour finir, amusons-nous un peu !</h3>
                            <div class="mb-3">
                                <label class="form-label">Si votre business clé en main avait un superpouvoir, lequel serait-il et pourquoi ?</label>
                                <input type="text" class="form-control" name="superpower" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Quel serait le titre d’un livre sur votre aventure entrepreneuriale avec ce business ?</label>
                                <input type="text" class="form-control" name="book_title" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Imaginez que dans 5 ans, votre business est un énorme succès. Quelle serait la première chose que vous feriez ?</label>
                                <div>
                                    <input type="radio" id="five_year_action_1" name="five_year_action" value="Un voyage autour du monde">
                                    <label for="five_year_action_1">Un voyage autour du monde</label>
                                </div>
                                <div>
                                    <input type="radio" id="five_year_action_2" name="five_year_action" value="Réinvestir dans d’autres projets">
                                    <label for="five_year_action_2">Réinvestir dans d’autres projets</label>
                                </div>
                                <div>
                                    <input type="radio" id="five_year_action_3" name="five_year_action" value="Organiser une fête incroyable pour célébrer">
                                    <label for="five_year_action_3">Organiser une fête incroyable pour célébrer</label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="file_input" class="form-label">Téléverser un fichier ( Dernier bilan )</label>
                                <input class="form-control" type="file" id="file_input" name="files">
                            </div>

                            <button type="submit" class="btn" style="background-color: #6A00B8; color: white;">Enregistrer</button>

                            <p style="padding-top:4%;">Merci pour vos réponses !
                                Notre équipe analysera vos réponses, notamment en ce qui concerne le financement, et nous vous contacterons sous 10 jours ouvrés pour valider votre acquisition du business clé en main. Ensemble, nous allons transformer ce projet en un succès entrepreneurial ! ZeroInvestissement.com est prêt à vous accompagner de la première étape jusqu’au sommet.

                            </p>
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
        // Affiche ou masque le champ de saisie pour une réponse personnalisée
        function toggleOtherAttractionInput(show) {
            const otherInput = document.getElementById('attraction_other');
            if (show) {
                otherInput.style.display = 'block';
                otherInput.required = true;
            } else {
                otherInput.style.display = 'none';
                otherInput.required = false;
                otherInput.value = ''; // Réinitialise la valeur si non utilisée
            }
        }

        // Met à jour la valeur du bouton radio "Autre" en fonction de la saisie
        function updateOtherAttractionValue() {
            const otherRadio = document.getElementById('attraction_other_radio');
            const otherInput = document.getElementById('attraction_other');
            otherRadio.value = otherInput.value;
        }

        // Réinitialise le champ texte lorsque d'autres options sont sélectionnées
        document.querySelectorAll('input[name="business_attraction"]').forEach((input) => {
            input.addEventListener('change', (e) => {
                if (e.target.id !== 'attraction_other_radio') {
                    toggleOtherAttractionInput(false);
                }
            });
        });
    </script>
    <script>
        // Affiche ou masque le champ de saisie pour une réponse personnalisée
        function toggleOtherSkillsInput(show) {
            const otherInput = document.getElementById('develop_other');
            if (show) {
                otherInput.style.display = 'block';
                otherInput.required = true;
            } else {
                otherInput.style.display = 'none';
                otherInput.required = false;
                otherInput.value = ''; // Réinitialise la valeur si non utilisée
            }
        }

        // Met à jour la valeur du bouton radio "Autre" en fonction de la saisie
        function updateOtherSkillsValue() {
            const otherRadio = document.getElementById('develop_other_radio');
            const otherInput = document.getElementById('develop_other');
            otherRadio.value = otherInput.value;
        }

        // Réinitialise le champ texte lorsque d'autres options sont sélectionnées
        document.querySelectorAll('input[name="skills_to_develop"]').forEach((input) => {
            input.addEventListener('change', (e) => {
                if (e.target.id !== 'develop_other_radio') {
                    toggleOtherSkillsInput(false);
                }
            });
        });
    </script>
    <script>
        // Affiche ou masque le champ de saisie pour une réponse personnalisée
        function toggleOtherBoostAreaInput(show) {
            const otherInput = document.getElementById('boost_other');
            if (show) {
                otherInput.style.display = 'block';
                otherInput.required = true;
            } else {
                otherInput.style.display = 'none';
                otherInput.required = false;
                otherInput.value = ''; // Réinitialise la valeur si non utilisée
            }
        }

        // Met à jour la valeur du bouton radio "Autre" en fonction de la saisie
        function updateOtherBoostAreaValue() {
            const otherRadio = document.getElementById('boost_other_radio');
            const otherInput = document.getElementById('boost_other');
            otherRadio.value = otherInput.value;
        }

        // Réinitialise le champ texte lorsque d'autres options sont sélectionnées
        document.querySelectorAll('input[name="business_boost_area"]').forEach((input) => {
            input.addEventListener('change', (e) => {
                if (e.target.id !== 'boost_other_radio') {
                    toggleOtherBoostAreaInput(false);
                }
            });
        });
    </script>
    <script>
        // Affiche ou masque le champ de saisie pour une réponse personnalisée
        function toggleOtherObjectiveInput(show) {
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

        // Met à jour la valeur du bouton radio "Autre" en fonction de la saisie
        function updateOtherObjectiveValue() {
            const otherRadio = document.getElementById('objective_other_radio');
            const otherInput = document.getElementById('objective_other');
            otherRadio.value = otherInput.value;
        }

        // Réinitialise le champ texte lorsque d'autres options sont sélectionnées
        document.querySelectorAll('input[name="main_objective"]').forEach((input) => {
            input.addEventListener('change', (e) => {
                if (e.target.id !== 'objective_other_radio') {
                    toggleOtherObjectiveInput(false);
                }
            });
        });
    </script>
    <script>
        // Affiche ou masque le champ de saisie pour une réponse personnalisée
        function toggleOtherMarketingInput(show) {
            const otherInput = document.getElementById('marketing_other');
            if (show) {
                otherInput.style.display = 'block';
                otherInput.required = true;
            } else {
                otherInput.style.display = 'none';
                otherInput.required = false;
                otherInput.value = ''; // Réinitialise la valeur si non utilisée
            }
        }

        // Met à jour la valeur du bouton radio "Autre" en fonction de la saisie
        function updateOtherMarketingValue() {
            const otherRadio = document.getElementById('marketing_other_radio');
            const otherInput = document.getElementById('marketing_other');
            otherRadio.value = otherInput.value;
        }

        // Réinitialise le champ texte lorsque d'autres options sont sélectionnées
        document.querySelectorAll('input[name="marketing_strategy"]').forEach((input) => {
            input.addEventListener('change', (e) => {
                if (e.target.id !== 'marketing_other_radio') {
                    toggleOtherMarketingInput(false);
                }
            });
        });
    </script>
    <script>
        // Affiche ou masque le champ de saisie pour une réponse personnalisée
        function toggleOtherActionInput(show) {
            const otherInput = document.getElementById('action_other');
            if (show) {
                otherInput.style.display = 'block';
                otherInput.required = true;
            } else {
                otherInput.style.display = 'none';
                otherInput.required = false;
                otherInput.value = ''; // Réinitialise la valeur si non utilisée
            }
        }

        // Met à jour la valeur du bouton radio "Autre" en fonction de la saisie
        function updateOtherActionValue() {
            const otherRadio = document.getElementById('action_other_radio');
            const otherInput = document.getElementById('action_other');
            otherRadio.value = otherInput.value;
        }

        // Réinitialise le champ texte lorsque d'autres options sont sélectionnées
        document.querySelectorAll('input[name="first_action"]').forEach((input) => {
            input.addEventListener('change', (e) => {
                if (e.target.id !== 'action_other_radio') {
                    toggleOtherActionInput(false);
                }
            });
        });
    </script>
    <script>
        // Affiche ou masque le champ de saisie pour une motivation personnalisée
        function toggleOtherMotivationInput(show) {
            const otherInput = document.getElementById('specific_motivation_other');
            if (show) {
                otherInput.style.display = 'block';
                otherInput.required = true;
            } else {
                otherInput.style.display = 'none';
                otherInput.required = false;
                otherInput.value = ''; // Réinitialise la valeur si non utilisée
            }
        }

        // Met à jour la valeur du bouton radio "Autre" en fonction de la saisie
        function updateOtherMotivationValue() {
            const otherRadio = document.getElementById('specific_motivation_other_radio');
            const otherInput = document.getElementById('specific_motivation_other');
            otherRadio.value = otherInput.value;
        }

        // Réinitialise le champ texte lorsque d'autres options sont sélectionnées
        document.querySelectorAll('input[name="specific_motivation"]').forEach((input) => {
            input.addEventListener('change', (e) => {
                if (e.target.id !== 'specific_motivation_other_radio') {
                    toggleOtherMotivationInput(false);
                }
            });
        });
    </script>
    <script>
        // Affiche ou masque le champ de saisie pour une raison personnalisée
        function toggleOtherEntrepreneurInput(show) {
            const otherInput = document.getElementById('entrepreneur_reason_other');
            if (show) {
                otherInput.style.display = 'block';
                otherInput.required = true;
            } else {
                otherInput.style.display = 'none';
                otherInput.required = false;
                otherInput.value = ''; // Réinitialise la valeur si non utilisée
            }
        }

        // Met à jour la valeur du bouton radio "Autre" en fonction de la saisie
        function updateOtherEntrepreneurValue() {
            const otherRadio = document.getElementById('entrepreneur_reason_other_radio');
            const otherInput = document.getElementById('entrepreneur_reason_other');
            otherRadio.value = otherInput.value;
        }

        // Réinitialise le champ texte lorsque d'autres options sont sélectionnées
        document.querySelectorAll('input[name="entrepreneur_reason"]').forEach((input) => {
            input.addEventListener('change', (e) => {
                if (e.target.id !== 'entrepreneur_reason_other_radio') {
                    toggleOtherEntrepreneurInput(false);
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
