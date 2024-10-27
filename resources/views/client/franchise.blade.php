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
                    <div class="container mx-auto mt-2 ">
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
                        <h2 class="text-center card-header mb-0 p-3" style="background-color: #6A00B8; color: white;">Franchise</h2>
                        <form method="POST" action="{{ route('franchise.save') }}" class="bg-white p-6 rounded-lg shadow-lg mb-6"  enctype="multipart/form-data">
                            @csrf
                            <h2 class="text-center mb-4">Bienvenue dans notre questionnaire hyper fun et essentiel pour faire de votre entreprise une franchise à succès sans dépenser un centime </h2>
                            <p class="text-center mb-4">Si vous avez une entreprise qui cartonne déjà et que vous voulez la voir grandir et conquérir de nouveaux territoires, vous êtes au bon endroit. Chez ZeroInvestissement.com, on adore les entreprises qui rêvent en grand, et on est là pour vous aider à franchiser sans stress !
Alors, prêt à transformer votre entreprise en la prochaine grande franchise ? Répondez à ces questions et voyons comment on peut faire décoller tout ça !
</p>

                            <h3 class="text-lg font-semibold mb-2">🚀 Votre Entreprise Actuelle : Montrez-nous ce que vous avez !</h3>
                            <div class="mb-4">
                                <label for="business_name" class="form-label">Nom de l'Entreprise</label>
                                <input type="text" class="form-control" id="business_name" name="business_name" required>
                                <small class="text-gray-500">Pourquoi ce nom ?</small>
                            </div>
                            <div class="mb-4">
                                <label for="character_comparison" class="form-label">Si votre entreprise était un personnage de film, lequel serait-ce ?</label>
                                <textarea class="form-control" id="character_comparison" name="character_comparison" required></textarea>
                            </div>
                            <div class="mb-4">
                                <label for="activity_description" class="form-label">Décrivez votre activité en une phrase, comme si vous deviez l'expliquer à un enfant de 5 ans.</label>
                                <textarea class="form-control" id="activity_description" name="activity_description" required></textarea>
                            </div>
                            <div class="mb-4">
                                <label for="business_age" class="form-label">Depuis combien de temps votre entreprise existe-t-elle ?</label>
                                <div>
                                    <input type="radio" id="un_an" name="business_age" value="Moins d’un an">
                                    <label for="un_an">Moins d’un an</label>
                                </div>

                                <div>
                                    <input type="radio" id="un_trois" name="business_age" value="1 à 3 ans">
                                    <label for="un_trois">1 à 3 ans</label>
                                </div>
                                <div>
                                    <input type="radio" id="plus_trois" name="business_age" value="Plus de 3 ans">
                                    <label for="plus_trois">Plus de 3 ans</label>
                                </div>
                            </div>

                            <div class="mb-4">
                                <label for="sector" class="form-label">Quel est votre secteur d’activité ?</label>
                                <input type="text" class="form-control" id="sector" name="sector" required>
                                <small class="text-gray-500">Ex : restauration, beauté, services, retail, etc.</small>
                            </div>

                            <div class="mb-4">
                                <label for="sucess_product" class="form-label">Quels sont les 3 produits/services phares de votre entreprise qui la rendent unique ?</label>
                                <input type="text" class="form-control" id="sucess_product" name="sucess_product" required>
                            </div>

                            <h3 class="text-lg font-semibold mb-2">🎯 Le Succès : Racontez-nous votre aventure !</h3>
                            <div class="mb-4">
                                <label for="proudest_achievement" class="form-label">Votre entreprise cartonne, mais quelle est la plus grande réussite dont vous êtes fier ?</label>
                                <textarea class="form-control" id="proudest_achievement" name="proudest_achievement" required></textarea>
                                <small class="text-gray-500">(Prix, gros contrat, etc.).</small>
                            </div>
                            <div class="mb-4">
                                <label for="customer_count" class="form-label">Combien de clients avez-vous servi jusqu’à aujourd’hui ?</label>
                                <div>
                                    <input type="radio" id="cent" name="customer_count" value="Moins de 100">
                                    <label for="cent">Moins de 100</label>
                                </div>
                                <div>
                                    <input type="radio" id="eun_trois" name="customer_count" value="100 à 500">
                                    <label for="cent_cinq">100 à 500</label>
                                </div>
                                <div>
                                    <input type="radio" id="cinq" name="customer_count" value="Plus de 500">
                                    <label for="cinq">Plus de 500</label>
                                </div>
                            </div>

                            <div class="mb-4">
                                <label for="current_revenue" class="form-label">Quel est votre chiffre d’affaires actuel ?</label>
                                <div>
                                    <input type="radio" id="centk" name="current_revenue" value="Moins de 100 000 €">
                                    <label for="centk">Moins de 100 000 €</label>
                                </div>
                                <div>
                                    <input type="radio" id="cent_cinqk" name="current_revenue" value="Entre 100 000 € et 500 000 €">
                                    <label for="cent_cinqk">Entre 100 000 € et 500 000 €</label>
                                </div>
                                <div>
                                    <input type="radio" id="cinqk" name="current_revenue" value="Plus de 500 000 €">
                                    <label for="cinqk">Plus de 500 000 €</label>
                                </div>
                            </div>
                            

                            <div class="mb-4">
                                <label for="scalability_score" class="form-label">Sur une échelle de 1 à 10, comment évaluez-vous la scalabilité de votre modèle ? (Indice : Scalabilité = possibilité de reproduire facilement votre concept ailleurs)
                                </label>
                                <div>
                                    <input type="radio" id="pas_encore" name="scalability_score" value="1">
                                    <label for="pas_encore">1 : Pas encore prêt à se déployer</label>
                                </div>
                                <div>
                                    <input type="radio" id="marcher_ailleurs" name="scalability_score" value="5">
                                    <label for="marcher_ailleurs">5 : Ça pourrait marcher ailleurs</label>
                                </div>
                                <div>
                                    <input type="radio" id="pret" name="scalability_score" value="10">
                                    <label for="pret">10 : Mon modèle est prêt à conquérir le monde !</label>
                                </div>

                               
                            </div>

                            <h3 class="text-lg font-semibold mb-2">🛠️ Le Grand Saut : Pourquoi franchiser votre entreprise ?</h3>
                            <div class="mb-4">
                                <label for="franchise_motivation" class="form-label">Pourquoi souhaitez-vous transformer votre entreprise en franchise ?</label>
                                <div>
                                    <input type="radio" id="franchise_motivation_1" name="franchise_motivation" value="Accroître ma visibilité" onclick="toggleOtherMotivationInput(false)">
                                    <label for="franchise_motivation_1">Accroître ma visibilité</label>
                                </div>
                                <div>
                                    <input type="radio" id="franchise_motivation_2" name="franchise_motivation" value="Augmenter mon chiffre d’affaires" onclick="toggleOtherMotivationInput(false)">
                                    <label for="franchise_motivation_2">Augmenter mon chiffre d’affaires</label>
                                </div>
                                <div>
                                    <input type="radio" id="franchise_motivation_3" name="franchise_motivation" value="Partager mon succès avec d’autres entrepreneurs" onclick="toggleOtherMotivationInput(false)">
                                    <label for="franchise_motivation_3">Partager mon succès avec d’autres entrepreneurs</label>
                                </div>

                                <!-- Option "Autre" avec champ texte -->
                                <div class="mt-2">
                                    <input type="radio" id="franchise_motivation_other_radio" name="franchise_motivation" value="" onclick="toggleOtherMotivationInput(true)">
                                    <label for="franchise_motivation_other_radio">Autre (précisez) :</label>
                                    <input type="text" class="form-control mt-2" id="franchise_motivation_other" placeholder="Précisez votre motivation" oninput="updateOtherMotivationValue()" style="display: none;">
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="excitement" class="form-label">Qu’est-ce qui vous excite le plus à l’idée de voir votre marque à plusieurs endroits ?</label>
                                <textarea class="form-control" id="excitement" name="excitement" required></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="current_locations" class="form-label">Votre entreprise est-elle déjà implantée dans plusieurs villes/régions ?</label>
                                <div>
                                    <input type="radio" id="current_locations_1" name="current_locations" value="Oui">
                                    <label for="current_locations_1">Oui</label>
                                </div>
                                <div>
                                    <input type="radio" id="current_locations_2" name="current_locations" value="Non, mais c’est le rêve !">
                                    <label for="current_locations_2">Non, mais c’est le rêve !</label>
                                </div>
                            </div>

                            <div class="mb-4">
                                <label for="franchise_target" class="form-label">Avez-vous déjà une idée du nombre de franchises que vous souhaitez lancer dans les 3 prochaines années ?</label>
                                <div>
                                    <input type="radio" id="franchise_target_1" name="franchise_target" value="1 à 5 franchises">
                                    <label for="franchise_target_1">1 à 5 franchises</label>
                                </div>
                                <div>
                                    <input type="radio" id="franchise_target_2" name="franchise_target" value="5 à 10 franchises">
                                    <label for="franchise_target_2">5 à 10 franchises</label>
                                </div>
                                <div>
                                    <input type="radio" id="franchise_target_3" name="franchise_target" value="Plus de 10 franchises, je vise grand !">
                                    <label for="franchise_target_3">Plus de 10 franchises, je vise grand !</label>
                                </div>
                            </div>

                            <h3 class="text-lg font-semibold mb-2">Les Détails qui Comptent : Scalabilité et Potentiel</h3>

                            <div class="mb-3">
                                <label for="franchise_reproducibility" class="form-label">Comment votre entreprise peut-elle être reproduite facilement dans d’autres villes ou pays ?</label>
                                <textarea class="form-control" id="franchise_reproducibility" name="franchise_reproducibility" required></textarea>
                                <small class="text-gray-500">(Décrivez-nous en quoi votre modèle est adaptable et duplicable)</small>
                            </div>

                            <div class="mb-3">
                                <label for="key_resources" class="form-label">Quelles sont les ressources clés nécessaires pour lancer une franchise de votre entreprise ?</label>
                                <textarea class="form-control" id="key_resources" name="key_resources" required></textarea>
                                <small class="text-gray-500">(Ex: Personnel, matériel spécifique, formation)</small>
                            </div>

                            <div class="mb-3">
                                <label for="sector_growth" class="form-label">Votre secteur est-il en pleine croissance ?</label>
                                <textarea class="form-control" id="sector_growth" name="sector_growth" required></textarea>
                                <small class="text-gray-500">(Expliquez-nous pourquoi c'est le bon moment de franchiser dans votre domaine)</small>
                            </div>

                            <div class="mb-3">
                                <label for="market_study" class="form-label">Avez-vous déjà envisagé des données géographiques ou des études de marché pour vos futures implantations ?</label>
                                <textarea class="form-control" id="market_study" name="market_study" required></textarea>
                                <small class="text-gray-500">(Population cible, concurrence local)</small>
                            </div>

                            <h3 class="text-lg font-semibold mb-2">Valeurs et Vision (C’est là qu’on connecte !)</h3>

                            <div class="mb-3">
                                <label for="company_values" class="form-label">Quelles sont les valeurs clés de votre entreprise ?</label>
                                <textarea class="form-control" id="company_values" name="company_values" required></textarea>
                                <small class="text-gray-500">(Innovation, respect, qualité, service client..)</small>
                            </div>

                            <div class="mb-3">
                                <label for="business_currency" class="form-label">Si votre entreprise était une devise inspirante, ce serait…</label>
                                <input type="text" class="form-control" id="business_currency" name="business_currency" required>
                            </div>

                            <div class="mb-3">
                                <label for="franchisee_requirements" class="form-label">En quoi ces valeurs seront-elles essentielles pour vos futurs franchisés ?</label>
                                <textarea class="form-control" id="franchisee_requirements" name="franchisee_requirements" required></textarea>
                                <small class="text-gray-500">(Pourquoi est-ce important qu'ils partagent ces valeurs ?)</small>
                            </div>

                            <div class="mb-3">
                                <label for="franchisee_search" class="form-label">Que recherchez-vous chez un futur franchisé ?</label>
                                <textarea class="form-control" id="franchisee_search" name="franchisee_search" required></textarea>
                                <small class="text-gray-500">(Pourquoi est-ce important qu'ils partagent ces valeurs ?)</small>
                            </div>

                            <h3 class="text-lg font-semibold mb-2">Data et Stratégie (La partie sérieuse mais essentielle)</h3>

                            <div class="mb-3">
                                <label for="competitors" class="form-label">Connaissez-vous les principaux concurrents dans les zones où vous souhaitez vous implanter ?</label>
                                <div>
                                    <input type="radio" id="competitors_1" name="competitors" value="Oui, je les ai bien identifiés">
                                    <label for="competitors_1">Oui, je les ai bien identifiés</label>
                                </div>
                                <div>
                                    <input type="radio" id="competitors_2" name="competitors" value="Non, pas encore">
                                    <label for="competitors_2">Non, pas encore</label>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="location_data" class="form-label">Disposez-vous déjà de données d’analyse pour identifier les meilleures zones d’implantation ?</label>
                                <textarea class="form-control" id="location_data" name="location_data" required></textarea>
                                <small class="text-gray-500">(Population, revenu moyen, etc)</small>
                            </div>

                            <div class="mb-3">
                                <label for="competitors" class="form-label">Si non, aimeriez-vous que ZeroInvestissement.com vous aide à analyser ces données pour trouver les meilleurs emplacements ?</label>
                                <div>
                                    <input type="radio" id="analyse_1" name="analyse" value="Oui, j’ai besoin d’aide !">
                                    <label for="analyse_1">Oui, j’ai besoin d’aide !</label>
                                </div>
                                <div>
                                    <input type="radio" id="analyse_2" name="analyse" value="Non, j’ai déjà tout ce qu’il me faut!">
                                    <label for="analyse_2">Non, j’ai déjà tout ce qu’il me faut!</label>
                                </div>
                            </div>

                            <h3 class="text-lg font-semibold mb-2">La Gestion et l’Accompagnement : Allons-nous bien bosser ensemble ?</h3>

                            <div class="mb-3">
                                <label for="competitors" class="form-label">Quel rôle souhaitez-vous jouer dans le développement de votre franchise ?</label>
                                <div>
                                    <input type="radio" id="role_1" name="role" value="Gérer tous les aspects avec nos conseils">
                                    <label for="role_1">Gérer tous les aspects avec nos conseils</label>
                                </div>
                                <div>
                                    <input type="radio" id="role_2" name="role" value="Gérer tous les aspects avec nos conseils">
                                    <label for="role_2">Gérer tous les aspects avec nos conseils</label>
                                </div>
                                <div>
                                    <input type="radio" id="role_2" name="role" value="eGérer tous les aspects avec nos conseils">
                                    <label for="role_3">Laisser ZeroInvestissement.com gérer entièrement le développement et l’accompagnement</label>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="franchisee_training" class="form-label">Comment imaginez-vous la formation de vos futurs franchisés ?</label>
                                <textarea class="form-control" id="franchisee_training" name="franchisee_training" required></textarea>
                                <small class="text-gray-500">(Structure, contenu, durée... partagez-nous votre vision)</small>
                            </div>

                            <div class="mb-3">
                                <label for="tools" class="form-label">Quels sont les outils essentiels que vous pensez devoir fournir à vos franchisés ?
                                </label>
                                <textarea class="form-control" id="tools" name="tools" required></textarea>
                                <small class="text-gray-500">(Ex: Manuels d'opération, outils marketing, formations)</small>
                            </div>

                            <h3 class="text-lg font-semibold mb-2">L’aventure commence ! (On s’amuse un peu)</h3>

                            <div class="mb-3">
                                <label for="business_song" class="form-label">Si votre entreprise était une chanson, laquelle serait-ce et pourquoi ?</label>
                                <input type="text" class="form-control" id="business_song" name="business_song" required>
                            </div>

                            <div class="mb-3">
                                <label for="imaginary" class="form-label">Imaginez que votre entreprise devienne la franchise la plus célèbre du pays, quelle serait la première chose que vous feriez ?</label>
                                <input type="text" class="form-control" id="imaginary" name="imaginary" required>
                            </div>

                            <div class="mb-3">
                                <label for="success_plan" class="form-label">Si vous deviez déjeuner avec une autre grande marque franchisée pour obtenir des conseils, laquelle choisiriez-vous et pourquoi ?</label>
                                <textarea class="form-control" id="success_plan" name="success_plan" required></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="file_input" class="form-label">Téléverser un fichier ( Dernier bilan )</label>
                                <input class="form-control" type="file" id="file_input" name="files">
                            </div>

                            <button type="submit" class="py-2 px-4 rounded text-white" style="background-color:#6A00B8; color:white;">Enregistrer</button>
                      <p style="padding-top:4%;">Merci d’avoir partagé votre vision !
Notre équipe d’experts analysera votre projet avec attention et vous recevrez une réponse sous 15 jour ouvrée . Si votre modèle est validé, ZeroInvestissement.com vous accompagnera pour faire de votre entreprise la prochaine grande franchise, sans investissement de votre part. On est prêts à vous propulser vers le succès, et vous ?
Pourquoi ce questionnaire ?
Nous voulons nous assurer que votre entreprise est prête à franchir un cap, que votre modèle est duplicable, et que vous partagez nos valeurs. Plus on en sait sur vous et votre vision, mieux on pourra vous accompagner pour transformer votre réussite locale en succès national… voire mondial !
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
        // Affiche ou masque le champ de saisie pour l'option "Autre"
        function toggleOtherMotivationInput(show) {
            const otherInput = document.getElementById('franchise_motivation_other');
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
        function updateOtherMotivationValue() {
            const otherRadio = document.getElementById('franchise_motivation_other_radio');
            const otherInput = document.getElementById('franchise_motivation_other');
            otherRadio.value = otherInput.value;
        }

        // Assure que le champ texte est masqué si une option prédéfinie est sélectionnée
        document.querySelectorAll('input[name="franchise_motivation"]').forEach((input) => {
            input.addEventListener('change', (e) => {
                if (e.target.id !== 'franchise_motivation_other_radio') {
                    toggleOtherMotivationInput(false);
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
