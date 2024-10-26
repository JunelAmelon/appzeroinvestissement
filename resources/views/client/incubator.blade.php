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

                        <h2 class="text-center mb-0 card-header p-3" style="background-color: #6A00B8; color: white;">Incubateur</h2>
                        <form method="POST" action="{{ route('incubator.save') }}" class="bg-white p-6 rounded-lg shadow-lg mb-6">
                            @csrf
                            <h2 class="text-xl font-bold mb-4">Bienvenue dans l’univers de l’Accélérateur Zéro !</h2>
                            <p class="mb-4">Répondez aux questions ci-dessous pour nous aider à comprendre votre projet.</p>

                            <h3 class="text-lg font-semibold mb-2">🚀 Votre Projet : Parlons du cœur de votre idée</h3>
                            <div class="mb-4">
                                <label for="project_name" class="form-label">Nom de votre projet ou entreprise</label>
                                <input type="text" class="form-control" id="project_name" name="project_name" required>
                                <small class="text-gray-500">Pourquoi ce nom est parfait ?</small>
                                @error('project_name')
                                <div class="text-red-500">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="project_description" class="form-label">Décrivez votre idée ou entreprise</label>
                                <textarea class="form-control" id="project_description" name="project_description" required></textarea>
                                <small class="text-gray-500">En une phrase qui nous fera tomber sous le charme.</small>
                                @error('project_description')
                                <div class="text-red-500">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="project_stage" class="form-label">À quel stade en êtes-vous avec ce projet ?</label>
                                <select class="form-control" id="project_stage" name="project_stage" required>
                                    <option value="simple_idea">Simple idée</option>
                                    <option value="development">En développement</option>
                                    <option value="existing_business">Entreprise déjà existante</option>
                                </select>
                                @error('project_stage')
                                <div class="text-red-500">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="project_mission" class="form-label">Quelle est la mission principale de votre projet ?</label>
                                <input type="text" id="project_mission" name="project_mission" class="form-control" required>
                            </div>

                            <h3 class="text-lg font-semibold mb-2">🎯Origine et Motivation : Pourquoi cette idée vous passionne-t-elle ?</h3>

                            <div class="mb-4">
                                <label for="origin_motivation" class="form-label">Comment l'idée de ce projet vous est-elle venue ?</label>
                                <input type="text" id="origin_motivation" name="origin_motivation" class="form-control" required>
                            </div>

                            <div class="mb-4">
                                <label for="passion_aspect" class="form-label">Qu’est-ce qui vous passionne le plus dans ce projet ?</label>
                                <input type="text" id="passion_aspect" name="passion_aspect" class="form-control" required>
                            </div>

                            <div class="mb-4">
                                <label for="strength" class="form-label">Si vous deviez décrire la plus grande force de votre projet en une phrase, quelle serait-elle ?</label>
                                <input type="text" id="strength" name="strength" class="form-control" required>
                            </div>

                            <div class="mb-4">
                                <label for="obstacle" class="form-label">Quel est le plus grand obstacle auquel vous avez fait face jusqu'à présent dans ce projet ?</label>
                                <input type="text" id="obstacle" name="obstacle" class="form-control" required>
                            </div>

                            <h3 class="text-lg font-semibold mb-2">🛠️L’Avenir : Quels sont vos rêves pour ce projet ?</h3>

                            <div class="mb-4">
                                <label for="objective" class="form-label">Quel est votre objectif principal avec ce projet sur les 5 prochaines années ?</label>
                                <input type="text" id="objective" name="objective" class="form-control" required>
                            </div>

                            <div class="mb-4">
                                <label for="time_to_profit" class="form-label">Dans combien de temps pensez-vous que votre projet pourrait être rentable ? (en mois)</label>
                                <input type="number" id="time_to_profit" name="time_to_profit" class="form-control" min="1" max="60" required>
                            </div>

                            <div class="mb-4">
                                <label for="strategy" class="form-label">Quelle est votre stratégie pour atteindre cet objectif ?</label>
                                <input type="text" id="strategy" name="strategy" class="form-control" required>
                            </div>

                            <div class="mb-4">
                                <label for="target_amount" class="form-label">Si vous deviez lever des fonds pour ce projet, quel serait votre montant cible ?</label>
                                <input type="number" id="target_amount" name="target_amount" class="form-control" min="0" step="0.01">
                            </div>

                            <div class="mb-4">
                                <label for="growth_vision" class="form-label">Comment voyez-vous la croissance de votre projet sur les 12 prochains mois ?</label>
                                <input type="text" id="growth_vision" name="growth_vision" class="form-control" required>
                            </div>

                            <h3 class="text-lg font-semibold mb-2">🎨Potentiel et Scalabilité</h3>

                            <div class="mb-4">
                                <label for="sector" class="form-label">Dans quel secteur opère votre projet et en quoi est-il innovant ?</label>
                                <input type="text" id="sector" name="sector" class="form-control" required>
                            </div>

                            <div class="mb-4">
                                <label for="market_target" class="form-label">Quel est le marché cible de votre projet ?</label>
                                <input type="text" id="market_target" name="market_target" class="form-control" required>
                            </div>

                            <div class="mb-4">
                                <label for="unique_features" class="form-label">Quelles sont les trois principales caractéristiques qui rendent votre projet unique et compétitif ?</label>
                                <input type="text" id="unique_features" name="unique_features" class="form-control" required>
                            </div>

                            <div class="mb-4">
                                <label for="growth_limitations" class="form-label">Qu’est-ce qui pourrait limiter la croissance de votre projet ?</label>
                                <input type="text" id="growth_limitations" name="growth_limitations" class="form-control" required>
                            </div>

                            <h3 class="text-lg font-semibold mb-2">💻 Analyse du Marché et Concurrence</h3>

                            <div class="mb-4">
                                <label for="market_analysis" class="form-label">Avez-vous déjà réalisé une analyse de marché pour ce projet ?</label>
                                <select id="market_analysis" name="market_analysis" class="form-select border border-gray-300 p-2 rounded" required>
                                    <option value="1">Oui</option>
                                    <option value="0">Non</option>
                                </select>
                            </div>

                            <div class="mb-4">
                                <label for="competitors" class="form-label">Qui sont vos principaux concurrents, et qu’est-ce qui vous différencie d’eux ?</label>
                                <input type="text" id="competitors" name="competitors" class="form-control" required>
                            </div>

                            <div class="mb-4">
                                <label for="clients" class="form-label">Votre projet a-t-il déjà eu des clients ou utilisateurs ?</label>
                                <select id="clients" name="clients" class="form-select border border-gray-300 p-2 rounded" required>
                                    <option value="1">Oui</option>
                                    <option value="0">Non</option>
                                </select>
                            </div>

                            <div class="mb-4">
                                <label for="market_strategy" class="form-label">Comment comptez-vous conquérir votre marché cible ?</label>
                                <input type="text" id="market_strategy" name="market_strategy" class="form-control" required>
                            </div>

                            <h3 class="text-lg font-semibold mb-2">📈Financement et Croissance : Parlons des chiffres !</h3>

                            <div class="mb-4">
                                <label for="funds_raised" class="form-label">Avez-vous déjà levé des fonds pour ce projet ?</label>
                                <select id="funds_raised" name="funds_raised" class="form-select border border-gray-300 p-2 rounded" required>
                                    <option value="1">Oui</option>
                                    <option value="0">Non</option>
                                </select>
                            </div>

                            <div class="mb-4">
                                <label for="initial_budget" class="form-label">Quel budget initial avez-vous prévu pour ce projet ?</label>
                                <input type="number" id="initial_budget" name="initial_budget" class="form-control" min="0" step="0.01">
                            </div>

                            <div class="mb-4">
                                <label for="first_step_with_unlimited_funds" class="form-label">Si vous aviez accès à un financement illimité, quelle serait la première chose que vous feriez pour faire grandir votre projet ?</label>
                                <input type="text" id="first_step_with_unlimited_funds" name="first_step_with_unlimited_funds" class="form-control" required>
                            </div>

                            <div class="mb-4">
                                <label for="growth_needs" class="form-label">De quoi avez-vous le plus besoin pour accélérer la croissance de votre projet ?</label>
                                <input type="text" id="growth_needs" name="growth_needs" class="form-control" required>
                            </div>

                            <h3 class="text-lg font-semibold mb-2">🔧Soutien Stratégique et Partenariats</h3>

                            <div class="mb-4">
                                <label for="strategic_support" class="form-label">Dans quel domaine avez-vous le plus besoin de notre soutien stratégique ?</label>
                                <input type="text" id="strategic_support" name="strategic_support" class="form-control" required>
                            </div>

                            <div class="mb-4">
                                <label for="co_management" class="form-label">Êtes-vous ouvert(e) à la co-gestion de votre projet avec notre équipe d’experts pour maximiser son potentiel ?</label>
                                <select id="co_management" name="co_management" class="form-select border border-gray-300 p-2 rounded" required>
                                    <option value="1">Oui</option>
                                    <option value="0">Non</option>
                                </select>
                            </div>

                            <div class="mb-4">
                                <label for="desired_connections" class="form-label">Quelles connexions ou partenaires aimeriez-vous avoir dans votre réseau ?</label>
                                <input type="text" id="desired_connections" name="desired_connections" class="form-control" required>
                            </div>

                            <h3 class="text-lg font-semibold mb-2">🔧Impact et Valeurs</h3>

                            <div class="mb-4">
                                <label for="impact" class="form-label">En quoi votre projet a-t-il un impact positif (social, environnemental, économique) ?
                                </label>
                                <input type="text" id="impact" name="impact" class="form-control" required>
                            </div>

                            <div class="mb-4">
                                <label for="core_values" class="form-label">Quelles sont les valeurs fondamentales de votre projet ou entreprise ?</label>
                                <input type="text" id="core_values" name="core_values" class="form-control" required>
                            </div>

                            <div class="mb-4">
                                <label for="value_translation" class="form-label">Comment ces valeurs se traduisent-elles dans votre quotidien professionnel ?</label>
                                <input type="text" id="value_translation" name="value_translation" class="form-control" required>
                            </div>

                            <div class="mb-4">
                                <label for="global_impact" class="form-label">Si votre projet devenait une référence mondiale, quel impact aimeriez-vous qu'il ait sur la société ?</label>
                                <input type="text" id="global_impact" name="global_impact" class="form-control" required>
                            </div>

                            <h3 class="text-lg font-semibold mb-2">🔧Petites dernières pour le Fun</h3>

                            <div class="mb-4">
                                <label for="cartoon_character" class="form-label">Si votre projet était un personnage de dessin animé, qui serait-il et pourquoi ?
                                </label>
                                <input type="text" id="cartoon_character" name="cartoon_character" class="form-control" required>
                            </div>

                            <div class="mb-4">
                                <label for="tv_synopsis" class="form-label">Imaginez que votre projet soit transformé en série TV. Quel en serait le synopsis ?</label>
                                <input type="text" id="tv_synopsis" name="tv_synopsis" class="form-control" required>
                            </div>

                            <div class="mb-4">
                                <label for="documentary_title" class="form-label">Quel serait le titre du documentaire Netflix sur la réussite de votre projet ?</label>
                                <input type="text" id="documentary_title" name="documentary_title" class="form-control" required>
                            </div>

                            <div class="mb-4">
                                <label for="celebration_details" class="form-label">Si vous pouviez organiser une fête pour célébrer le succès de votre projet, où et comment se déroulerait-elle ?
                                </label>
                                <input type="text" id="celebration_details" name="celebration_details" class="form-control" required>
                            </div>

                            <div class="mb-4">
                                <label for="client_slogan" class="form-label">Si votre projet pouvait parler, que dirait-il à ses futurs clients en un seul slogan ?</label>
                                <input type="text" id="client_slogan" name="client_slogan" class="form-control" required>
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
