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
                                <i class="fas icon-question "></i>
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

                <!-- HTML -->
                <div class="faq-section">
                    <h2>Questions Fréquemment Posées (FAQ)</h2>
                    <div class="accordion-container">
                        <div class="accordion-item">
                            <div class="accordion-header">Qu'est-ce que ZeroInvestissement.com ?</div>
                            <div class="accordion-content">
                                <p>ZeroInvestissement.com est une plateforme dédiée à l'accompagnement des entrepreneurs dans l'acquisition de business clé en main, en leur offrant des solutions adaptées à leurs besoins.</p>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header">Comment puis-je financer l'achat ?</div>
                            <div class="accordion-content">
                                <p>Nous proposons plusieurs options de financement et de soutien pour vous aider à acquérir votre business clé en main. N'hésitez pas à nous contacter pour plus d'informations.</p>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header">Quels types de projets soutenez-vous ?</div>
                            <div class="accordion-content">
                                <p>Nous soutenons une variété de projets, allant des startups aux entreprises établies, en fonction de leur potentiel de succès et de leur modèle commercial.</p>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header">Quel est le processus d'acquisition ?</div>
                            <div class="accordion-content">
                                <p>Le processus d'acquisition comprend une évaluation de vos besoins, la validation de votre capacité de financement, et un accompagnement personnalisé tout au long de votre parcours entrepreneurial.</p>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header">Quelle est la durée du soutien offert ?</div>
                            <div class="accordion-content">
                                <p>Nous offrons un soutien continu depuis la première étape de votre projet jusqu'à votre succès entrepreneurial, avec des évaluations régulières de vos progrès.</p>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header">Comment puis-je vous contacter ?</div>
                            <div class="accordion-content">
                                <p>Vous pouvez nous contacter via notre site web, par email ou par téléphone. Nous sommes là pour répondre à toutes vos questions.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- CSS -->
                <style>
                    .faq-section {
                        max-width: 800px;
                        margin: 0 auto;
                        padding: 20px;
                        font-family: 'Arial', sans-serif;
                    }

                    .accordion-container {
                        display: flex;
                        flex-wrap: wrap;
                        gap: 20px;
                    }

                    .accordion-item {
                        flex: 1 1 calc(50% - 20px);
                        border: 1px solid #eee;
                        border-radius: 8px;
                        overflow: hidden;
                        background: #ffffff;
                        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
                        transition: box-shadow 0.3s;
                    }

                    .accordion-item {
                        flex: 1 1 calc(50% - 20px);
                        /* Deux accordéons par ligne */
                        border: 1px solid #eee;
                        border-radius: 8px;
                        overflow: hidden;
                        background: #ffffff;
                        /* Fond blanc */
                        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
                        transition: box-shadow 0.3s;
                    }


                    .accordion-item:hover {
                        box-shadow: 0 4px 16px rgba(0, 0, 0, 0.2);
                    }

                    .accordion-header {
                        padding: 15px;
                        background: #6A00B8;
                        color: white;
                        cursor: pointer;
                        font-weight: bold;
                        transition: background 0.3s, color 0.3s;
                    }

                    .accordion-header:hover {
                        background: #5e00a5;
                    }

                    .accordion-content {
                        padding: 15px;
                        display: block;
                        background: #f9f9f9;
                        border-top: 1px solid #eee;
                    }

                    /* Responsive style for mobile */
                    @media (max-width: 768px) {
                        .accordion-item {
                            flex: 1 1 100%;
                            /* Full width for each accordion item on mobile */
                        }
                    }


                    .accordion-content {
                        padding: 15px;
                        display: block;
                        /* Ouvert par défaut */
                        background: #f9f9f9;
                        /* Fond légèrement gris pour le contenu */
                        border-top: 1px solid #eee;
                    }
                </style>

                <!-- JavaScript -->
                <script>
                    document.querySelectorAll('.accordion-header').forEach(header => {
                        header.addEventListener('click', () => {
                            const content = header.nextElementSibling;

                            // Basculer l'affichage sans affecter les autres accordéons
                            if (content.style.display === 'block') {
                                content.style.display = 'none';
                            } else {
                                content.style.display = 'block';
                            }
                        });
                    });
                </script>


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
