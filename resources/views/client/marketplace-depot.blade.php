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
                        <h2 class="text-center mb-0 card-header p-3" style="background-color: #6A00B8; color: white;">Marketplace Dépôt</h2>

                        <form action="{{ route('marketplacebusiness.save') }}" method="POST" class="bg-white p-5 rounded shadow" enctype="multipart/form-data">
                            @csrf

                            <h2 class="text-center mb-4">Bienvenue dans notre questionnaire fun et interactif de l’espace Marketplace !! 🚀</h2>
                            <p class="text-center mb-4">Chez ZeroInvestissement.com, on adore transformer des idées en réalité, surtout quand elles sont brillantes comme la vôtre ! Vous avez une idée brillante ou un business prêt à décoller et que vous souhaitez vendre sur notre marketplace ? Pour qu’on puisse bien comprendre votre projet et votre motivation, répondez à ces quelques questions. C’est parti, amusez-vous et soyez créatif, on vous attend avec impatience !</p>

                            <h3 class="text-lg font-semibold mb-2">L’Essence de Votre Business</h3> <br>
                            <div class="mb-3">
                                <label class="form-label">Nom de votre projet ou entreprise (et pourquoi ce nom vous semble parfait ?) :</label>
                                <textarea name="project_name" class="form-control" required></textarea>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">En une phrase, vendez-nous votre business comme si vous parliez à quelqu'un dans l'ascenseur:</label>
                                <textarea name="elevator_pitch" class="form-control" required></textarea>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Si votre projet était un plat, lequel serait-il et pourquoi ?</label>
                                <input type="text" name="dish_comparison" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Quelle est la mission principale de votre business ?</label>
                                <div>
                                    <input type="radio" id="mission_unique_products" name="mission" value="Vendre des produits uniques" onclick="toggleOtherMissionInput(false)">
                                    <label for="mission_unique_products">Vendre des produits uniques</label>
                                </div>
                                <div>
                                    <input type="radio" id="mission_innovative_services" name="mission" value="Offrir des services innovants" onclick="toggleOtherMissionInput(false)">
                                    <label for="mission_innovative_services">Offrir des services innovants</label>
                                </div>
                                <div>
                                    <input type="radio" id="mission_change_world" name="mission" value="Changer le monde (ou au moins votre secteur !)" onclick="toggleOtherMissionInput(false)">
                                    <label for="mission_change_world">Changer le monde (ou au moins votre secteur !)</label>
                                </div>

                                <!-- Champ texte pour une réponse personnalisée -->
                                <div class="mt-2">
                                    <input type="radio" id="mission_other_radio" name="mission" value="" onclick="toggleOtherMissionInput(true)">
                                    <label for="mission_other_radio">Autre :</label>
                                    <input type="text" class="form-control mt-2" id="mission_other" placeholder="Entrez votre réponse" oninput="updateOtherMissionValue()" style="display: none;">
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Dans quel secteur d’activité opère votre business et pourquoi l’avez-vous choisi ?</label>
                                <input type="text" name="industry_sector" class="form-control" required>
                            </div>

                            <h3 class="text-lg font-semibold mb-2">Potentiel et Scalabilité (Rêvons en grand !)</h3> <br>
                            <div class="mb-3">
                                <label class="form-label">Qu’est-ce qui fait de votre business une machine à succès ?</label>
                                <textarea name="success_factors" class="form-control" required></textarea>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Sur une échelle de 1 à 10, à quel point pensez-vous que ce business est duplicable ailleurs ?</label>
                                <div>
                                    <input type="radio" id="scalability_score_1" name="scalability_score" value="1 : Très difficile">
                                    <label for="scalability_score_1">1 : Très difficile</label>
                                </div>
                                <div>
                                    <input type="radio" id="scalability_score_2" name="scalability_score" value="5 : Ça pourrait marcher">
                                    <label for="scalability_score_2">5 : Ça pourrait marcher</label>
                                </div>
                                <div>
                                    <input type="radio" id="scalability_score_3" name="scalability_score" value="10 : Facile à déployer n’importe où">
                                    <label for="scalability_score_3">10 : Facile à déployer n’importe où</label>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Combien de clients avez-vous actuellement ou espérez-vous toucher ?</label>
                                <div>
                                    <input type="radio" id="current_or_target_customers_1" name="current_or_target_customers" value="Moins de 500">
                                    <label for="current_or_target_customers_1">Moins de 500</label>
                                </div>
                                <div>
                                    <input type="radio" id="current_or_target_customers_2" name="current_or_target_customers" value="Entre 500 et 2000">
                                    <label for="current_or_target_customers_2">Entre 500 et 2000</label>
                                </div>
                                <div>
                                    <input type="radio" id="current_or_target_customers_3" name="current_or_target_customers" value="Plus de 2000">
                                    <label for="current_or_target_customers_3">Plus de 2000</label>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Quel chiffre d’affaires annuel ce projet a-t-il déjà généré (ou peut-il générer) ?</label>
                                <div>
                                    <input type="radio" id="annual_revenue_1" name="annual_revenue" value="Moins de 50 000 €">
                                    <label for="annual_revenue_1">Moins de 50 000 €</label>
                                </div>
                                <div>
                                    <input type="radio" id="annual_revenue_2" name="annual_revenue" value="Entre 50 000 € et 200 000 €">
                                    <label for="annual_revenue_2">Entre 50 000 € et 200 000 €</label>
                                </div>
                                <div>
                                    <input type="radio" id="annual_revenue_3" name="annual_revenue" value="Plus de 200 000 €">
                                    <label for="annual_revenue_3">Plus de 200 000 €</label>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Si votre business était une licorne, en quoi serait-elle magique ?</label>
                                <textarea name="unicorn_magic" class="form-control" required></textarea>
                            </div>

                            <h3 class="text-lg font-semibold mb-2">Opérations et Technique : Parlons Pratique !</h3> <br>
                            <div class="mb-3">
                                <label class="form-label">Quelles sont les 3 fonctionnalités clés de votre business qui le rendent irrésistible ?</label>
                                <textarea name="key_features" class="form-control" required></textarea>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Faut-il des compétences spécifiques pour gérer ce business, ou est-il prêt à être pris en main par n’importe qui ?</label>
                                <div>
                                    <input type="radio" id="requires_specific_skills_1" name="requires_specific_skills" value="Oui, des compétences techniques sont nécessaires">
                                    <label for="requires_specific_skills_1">Oui, des compétences techniques sont nécessaires</label>
                                </div>
                                <div>
                                    <input type="radio" id="requires_specific_skills_2" name="requires_specific_skills" value="Non, il est simple à gérer">
                                    <label for="requires_specific_skills_2">Non, il est simple à gérer</label>
                                </div>
                                <div>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Avez-vous déjà des outils ou technologies en place (site web, logiciels, plateformes) ?</label>
                                    <div>
                                        <input type="radio" id="tools_in_place_1" name="tools_in_place" value="Oui, tout est en place">
                                        <label for="tools_in_place_1">Oui, tout est en place</label>
                                    </div>
                                    <div>
                                        <input type="radio" id="tools_in_place_2" name="tools_in_place" value="Non, ça reste à développer">
                                        <label for="tools_in_place_2">Non, ça reste à développer</label>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Avez-vous une équipe qui fonctionne déjà ou tout est prêt à être repris par le futur propriétaire ?</label>
                                    <div>
                                        <input type="radio" id="has_existing_team_1" name="has_existing_team" value="Équipe en place">
                                        <label for="has_existing_team_1">Équipe en place</label>
                                    </div>
                                    <div>
                                        <input type="radio" id="has_existing_team_2" name="has_existing_team" value="Business prêt à être repris en solo">
                                        <label for="has_existing_team_2">Business prêt à être repris en solo</label>
                                    </div>
                                </div>

                                <h3 class="text-lg font-semibold mb-2">Proposition de Valeur : Pourquoi votre projet est un must-have ?</h3> <br>
                                <div class="mb-3">
                                    <label class="form-label">Qu’est-ce qui rend votre business unique et irrésistible pour un acheteur potentiel ?</label>
                                    <textarea name="unique_selling_points" class="form-control" required></textarea>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Quel est le prix que vous avez en tête pour vendre ce projet ?</label>
                                    <div>
                                        <input type="radio" id="selling_price_1" name="selling_price" value="Moins de 10 000 €">
                                        <label for="selling_price_1">Moins de 10 000 €</label>
                                    </div>
                                    <div>
                                        <input type="radio" id="selling_price_2" name="selling_price" value="Entre 10 000 € et 50 000 €">
                                        <label for="selling_price_2">Entre 10 000 € et 50 000 €</label>
                                    </div>
                                    <div>
                                        <input type="radio" id="selling_price_3" name="selling_price" value="Plus de 50 000 €">
                                        <label for="selling_price_3">Plus de 50 000 €</label>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Que comprend exactement l’achat ?</label>
                                    <textarea name="purchase_includes" class="form-control" required></textarea>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Si votre business devait apparaître dans une pub télé, quel serait le slogan ?</label>
                                    <input type="text" name="advertising_slogan" class="form-control" required>
                                </div>

                                <h3 class="text-lg font-semibold mb-2">Support et Suivi : Vous accompagnez l’acheteur ?</h3> <br>
                                <div class="mb-3">
                                    <label class="form-label">Seriez-vous prêt à accompagner l’acheteur avec une formation initiale ou des conseils ?</label>
                                    <div>
                                        <input type="radio" id="provides_training_1" name="provides_training" value="Oui, je suis ouvert à l'accompagnement initial">
                                        <label for="provides_training_1">Oui, je suis ouvert à l'accompagnement initial</label>
                                    </div>
                                    <div>
                                        <input type="radio" id="provides_training_2" name="provides_training" value="Non, je préfère tout céder d’un coup">
                                        <label for="provides_training_2">Non, je préfère tout céder d’un coup</label>
                                    </div>
                                    <div>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Avez-vous déjà des partenaires, fournisseurs, ou collaborateurs avec qui l'acheteur pourrait travailler ?</label>
                                        <div>
                                            <input type="radio" id="partners_and_suppliers_1" name="partners_and_suppliers" value="Oui, ils sont prêts à collaborer">
                                            <label for="partners_and_suppliers_1">Oui, ils sont prêts à collaborer</label>
                                        </div>
                                        <div>
                                            <input type="radio" id="partners_and_suppliers_2" name="partners_and_suppliers" value="Non, mais je peux fournir des contacts utiles">
                                            <label for="partners_and_suppliers_2">Non, mais je peux fournir des contacts utiles</label>
                                        </div>
                                    </div>

                                    <h3 class="text-lg font-semibold mb-2">Finalement, un peu de fun pour terminer !</h3> <br>
                                    <div class="mb-3">
                                        <label class="form-label">Si vous deviez résumer votre business en 3 mots, quels seraient-ils ?</label>
                                        <input type="text" name="business_summary" class="form-control" required>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Imaginez que vous deviez convaincre Elon Musk d’acheter votre business en 30 secondes, que lui diriez-vous ?</label>
                                        <textarea name="elon_pitch" class="form-control" required></textarea>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Quel serait votre prochain projet si vous vendiez celui-ci ? (Racontez-nous votre prochain rêve entrepreneurial)</label>
                                        <textarea name="next_project" class="form-control" required></textarea>
                                    </div>

                                    <div class="mb-3">
                                        <label for="file_input" class="form-label">Téléverser un fichier ( Dernier bilan )</label>
                                        <input class="form-control" type="file" id="file_input" name="files">
                                    </div>

                                    <button type="submit" class="btn" style="background-color: #6A00B8; color: white;">Enregistrer</button>
                                    <p style="padding-top:4%;">Merci de nous avoir soumis votre projet !
                                        Notre équipe analysera votre candidature et vous recevrez une réponse sous 10 jour ouvrée. Si votre business est sélectionné, il sera publié sur notre marketplace et mis en vente. ZeroInvestissement.com est prêt à vous accompagner pour que votre projet rencontre son futur propriétaire idéal !!!!!!!

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
        function toggleOtherMissionInput(show) {
            const otherInput = document.getElementById('mission_other');
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
        function updateOtherMissionValue() {
            const otherRadio = document.getElementById('mission_other_radio');
            const otherInput = document.getElementById('mission_other');
            otherRadio.value = otherInput.value;
        }

        // Réinitialise le champ texte lorsque d'autres options sont sélectionnées
        document.querySelectorAll('input[name="mission"]').forEach((input) => {
            input.addEventListener('change', (e) => {
                if (e.target.id !== 'mission_other_radio') {
                    toggleOtherMissionInput(false);
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
