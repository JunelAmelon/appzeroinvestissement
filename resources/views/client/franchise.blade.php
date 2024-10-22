<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Atlantis Lite - Bootstrap 4 Admin Dashboard</title>
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
                                    <span class="title mb-1">Quick Actions</span>
                                    <span class="subtitle op-8">Shortcuts</span>
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
                                        <a href="static-sidebar.html">
                                            <span class="sub-item">Incubateur</span>
                                        </a>
                                    </li>

                                </ul>
                            </div>
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
        <h2 class="text-center mb-4 p-3" style="background-color: #6A00B8; color: white;">Franchise</h2>
       <form method="POST" action="{{ route('franchise.save') }}" class="bg-white p-6 rounded-lg shadow-lg mb-6">
    @csrf
    <h2 class="text-xl font-bold mb-4">Bienvenue dans notre questionnaire franchise !</h2>
    <p class="mb-4">Répondez aux questions ci-dessous pour nous aider à comprendre votre entreprise.</p>
    
    <h3 class="text-lg font-semibold mb-2">🚀 Votre Entreprise Actuelle :</h3>
    <div class="mb-4">
        <label for="business_name" class="form-label">Nom de l'Entreprise</label>
        <input type="text" class="form-control" id="business_name" name="business_name" required>
        <small class="text-gray-500">Pourquoi ce nom ?</small>
    </div>
    <div class="mb-4">
        <label for="character_comparison" class="form-label">Comparaison de Caractère</label>
        <input type="text" class="form-control" id="character_comparison" name="character_comparison" required>
        <small class="text-gray-500">Si votre entreprise était un personnage de film, lequel serait-ce ?</small>
    </div>
    <div class="mb-4">
        <label for="activity_description" class="form-label">Description de l'Activité</label>
        <textarea class="form-control" id="activity_description" name="activity_description" required></textarea>
        <small class="text-gray-500">Décrivez votre activité en une phrase, comme si vous deviez l'expliquer à un enfant de 5 ans.</small>
    </div>
    <div class="mb-4">
        <label for="business_age" class="form-label">Âge de l'Entreprise</label>
        <input type="text" class="form-control" id="business_age" name="business_age" required>
        <small class="text-gray-500">Depuis combien de temps votre entreprise existe-t-elle ?</small>
    </div>
    <div class="mb-4">
        <label for="sector" class="form-label">Secteur</label>
        <input type="text" class="form-control" id="sector" name="sector" required>
        <small class="text-gray-500">Ex : restauration, beauté, services, retail, etc.</small>
    </div>

    <h3 class="text-lg font-semibold mb-2">🎯 Le Succès :</h3>
    <div class="mb-4">
        <label for="proudest_achievement" class="form-label">Plus Grande Fierté</label>
        <textarea class="form-control" id="proudest_achievement" name="proudest_achievement" required></textarea>
        <small class="text-gray-500">Racontez-nous votre plus grande réussite (prix, gros contrat, etc.).</small>
    </div>
    <div class="mb-4">
        <label for="customer_count" class="form-label">Nombre de Clients</label>
        <input type="text" class="form-control" id="customer_count" name="customer_count" required>
        <small class="text-gray-500">Combien de clients avez-vous servi jusqu’à aujourd’hui ?</small>
    </div>
    <div class="mb-4">
        <label for="current_revenue" class="form-label">Revenu Actuel</label>
        <input type="text" class="form-control" id="current_revenue" name="current_revenue" required>
        <small class="text-gray-500">Quel est votre chiffre d’affaires actuel ?</small>
    </div>
    <div class="mb-4">
        <label for="scalability_score" class="form-label">Score de Scalabilité</label>
        <input type="number" class="form-control" id="scalability_score" name="scalability_score" required>
        <small class="text-gray-500">Sur une échelle de 1 à 10, comment évaluez-vous la scalabilité de votre modèle ?</small>
    </div>

    <h3 class="text-lg font-semibold mb-2">🛠️ Le Grand Saut :</h3>
    <div class="mb-4">
        <label for="franchise_motivation" class="form-label">Motivation pour la Franchise</label>
        <textarea class="form-control" id="franchise_motivation" name="franchise_motivation" required></textarea>
        <small class="text-gray-500">Pourquoi souhaitez-vous transformer votre entreprise en franchise ?</small>
    </div>
    <div class="mb-4">
        <label for="franchise_target" class="form-label">Cible de Franchise</label>
        <input type="number" class="form-control" id="franchise_target" name="franchise_target" required>
        <small class="text-gray-500">Avez-vous déjà une idée du nombre de franchises que vous souhaitez lancer ?</small>
    </div>

    <button type="submit" class="py-2 px-4 rounded bg-[#6A00B8] text-white">Enregistrer</button>
</form>



    </section>
























            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <nav class="pull-left">

                    </nav>
                    <div class="copyright ml-auto">
                        &copy; Copyright <strong><span>Zeroinvestissement</span></strong>. All Rights Reserved
                    </div>
                </div>
            </footer>
        </div>

        <!-- Custom template | don't include it in your project! -->
        <div class="custom-template">
            <div class="title">Settings</div>
            <div class="custom-content">
                <div class="switcher">
                    <div class="switch-block">
                        <h4>Logo Header</h4>
                        <div class="btnSwitch">
                            <button type="button" class="changeLogoHeaderColor" data-color="dark"></button>
                            <button type="button" class="selected changeLogoHeaderColor" data-color="blue"></button>
                            <button type="button" class="changeLogoHeaderColor" data-color="purple"></button>
                            <button type="button" class="changeLogoHeaderColor" data-color="light-blue"></button>
                            <button type="button" class="changeLogoHeaderColor" data-color="green"></button>
                            <button type="button" class="changeLogoHeaderColor" data-color="orange"></button>
                            <button type="button" class="changeLogoHeaderColor" data-color="red"></button>
                            <button type="button" class="changeLogoHeaderColor" data-color="white"></button>
                            <br />
                            <button type="button" class="changeLogoHeaderColor" data-color="dark2"></button>
                            <button type="button" class="changeLogoHeaderColor" data-color="blue2"></button>
                            <button type="button" class="changeLogoHeaderColor" data-color="purple2"></button>
                            <button type="button" class="changeLogoHeaderColor" data-color="light-blue2"></button>
                            <button type="button" class="changeLogoHeaderColor" data-color="green2"></button>
                            <button type="button" class="changeLogoHeaderColor" data-color="orange2"></button>
                            <button type="button" class="changeLogoHeaderColor" data-color="red2"></button>
                        </div>
                    </div>
                    <div class="switch-block">
                        <h4>Navbar Header</h4>
                        <div class="btnSwitch">
                            <button type="button" class="changeTopBarColor" data-color="dark"></button>
                            <button type="button" class="changeTopBarColor" data-color="blue"></button>
                            <button type="button" class="changeTopBarColor" data-color="purple"></button>
                            <button type="button" class="changeTopBarColor" data-color="light-blue"></button>
                            <button type="button" class="changeTopBarColor" data-color="green"></button>
                            <button type="button" class="changeTopBarColor" data-color="orange"></button>
                            <button type="button" class="changeTopBarColor" data-color="red"></button>
                            <button type="button" class="changeTopBarColor" data-color="white"></button>
                            <br />
                            <button type="button" class="changeTopBarColor" data-color="dark2"></button>
                            <button type="button" class="selected changeTopBarColor" data-color="blue2"></button>
                            <button type="button" class="changeTopBarColor" data-color="purple2"></button>
                            <button type="button" class="changeTopBarColor" data-color="light-blue2"></button>
                            <button type="button" class="changeTopBarColor" data-color="green2"></button>
                            <button type="button" class="changeTopBarColor" data-color="orange2"></button>
                            <button type="button" class="changeTopBarColor" data-color="red2"></button>
                        </div>
                    </div>
                    <div class="switch-block">
                        <h4>Sidebar</h4>
                        <div class="btnSwitch">
                            <button type="button" class="selected changeSideBarColor" data-color="white"></button>
                            <button type="button" class="changeSideBarColor" data-color="dark"></button>
                            <button type="button" class="changeSideBarColor" data-color="dark2"></button>
                        </div>
                    </div>
                    <div class="switch-block">
                        <h4>Background</h4>
                        <div class="btnSwitch">
                            <button type="button" class="changeBackgroundColor" data-color="bg2"></button>
                            <button type="button" class="changeBackgroundColor selected" data-color="bg1"></button>
                            <button type="button" class="changeBackgroundColor" data-color="bg3"></button>
                            <button type="button" class="changeBackgroundColor" data-color="dark"></button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- End Custom template -->
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
    <script src="{{ asset('build/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js') }}"></script>

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

    <script>
        Circles.create({
            id: 'circles-1',
            radius: 45,
            value: 60,
            maxValue: 100,
            width: 7,
            text: 5,
            colors: ['#f1f1f1', '#FF9E27'],
            duration: 400,
            wrpClass: 'circles-wrp',
            textClass: 'circles-text',
            styleWrapper: true,
            styleText: true
        })

        Circles.create({
            id: 'circles-2',
            radius: 45,
            value: 70,
            maxValue: 100,
            width: 7,
            text: 36,
            colors: ['#f1f1f1', '#2BB930'],
            duration: 400,
            wrpClass: 'circles-wrp',
            textClass: 'circles-text',
            styleWrapper: true,
            styleText: true
        })

        Circles.create({
            id: 'circles-3',
            radius: 45,
            value: 40,
            maxValue: 100,
            width: 7,
            text: 12,
            colors: ['#f1f1f1', '#F25961'],
            duration: 400,
            wrpClass: 'circles-wrp',
            textClass: 'circles-text',
            styleWrapper: true,
            styleText: true
        })

        var totalIncomeChart = document.getElementById('totalIncomeChart').getContext('2d');

        var mytotalIncomeChart = new Chart(totalIncomeChart, {
            type: 'bar',
            data: {
                labels: ["S", "M", "T", "W", "T", "F", "S", "S", "M", "T"],
                datasets: [{
                    label: "Total Income",
                    backgroundColor: '#ff9e27',
                    borderColor: 'rgb(23, 125, 255)',
                    data: [6, 4, 9, 5, 4, 6, 4, 3, 8, 10],
                }],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                legend: {
                    display: false,
                },
                scales: {
                    yAxes: [{
                        ticks: {
                            display: false //this will remove only the label
                        },
                        gridLines: {
                            drawBorder: false,
                            display: false
                        }
                    }],
                    xAxes: [{
                        gridLines: {
                            drawBorder: false,
                            display: false
                        }
                    }]
                },
            }
        });

        $('#lineChart').sparkline([105, 103, 123, 100, 95, 105, 115], {
            type: 'line',
            height: '70',
            width: '100%',
            lineWidth: '2',
            lineColor: '#ffa534',
            fillColor: 'rgba(255, 165, 52, .14)'
        });
    </script>
</body>

</html>

