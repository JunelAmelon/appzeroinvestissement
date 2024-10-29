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
                <div class="panel-header " style="background-color: none; ">
                    <div class="page-inner py-5">
                        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                            <div>
                                <h1 class=" pb-2 fw-bold" style=" color:#6A00B8;">Politique de confidentialité</h1>

                            </div>

                        </div>
                    </div>
                </div>

                <div class="max-w-3xl mx-auto p-6 bg-white shadow-md rounded-lg mt-2 mb-4">
                    <h1 class="text-2xl font-bold mb-4 text-[#ee8d0e]">Pourquoi une politique de protection des données ?</h1>
                    <p class="mb-4">
                        Cette Politique de protection des données a pour but de vous informer – en tant que client ou utilisateur – de manière concise, transparente et compréhensible sur la façon dont ZEROINVESTISSEMENT recueille et gère vos données personnelles. En complément des différents supports contractuels ou de collecte de données, elle a vocation à centraliser ces informations pour que vous puissiez en prendre connaissance plus facilement. ZEROINVESTISSEMENT, ci-après nommé « le site » les informations suivantes : sera amenée à la modifier, par exemple en vue de tenir compte d’éventuelles évolutions organisationnelles, techniques ou règlementaires. Il est donc conseillé de la consulter régulièrement.
                    </p>

                    <h2 class="text-xl font-semibold mt-6 mb-2">Quelles sont les données personnelles que nous utilisons et comment nous les collectons ?</h2>
                    <h3 class="font-medium mt-4">Formulaire de contact</h3>
                    <p>
                        Afin de vous fournir des réponses adaptées à vos besoins, nous sommes amenés à vous demander vos informations d’identification et de contact.
                    </p>

                    <h3 class="font-medium mt-4">Cookies</h3>
                    <p>
                        Un cookie est un fichier texte susceptible d’être enregistré dans un terminal lors de la consultation d’un Service avec un navigateur. Un Cookie permet à son émetteur, pendant sa durée de validité, de reconnaître le terminal concerné à chaque fois que ce terminal accède à un contenu numérique comportant des Cookies du même émetteur. Vous êtes informé que, lors de vos connexions sur ce Site, des Cookies sont installés sur votre terminal de réception (ordinateur, tablette, smartphone, etc.) pour le bon fonctionnement des Services, ou sur votre navigateur en fonction du choix que vous avez paramétré, ce choix pouvant être modifié à tout moment. Vous trouverez la liste des cookies installés sur ce site dans le gestionnaire accessible en bas à droite de votre écran.
                    </p>

                    <h2 class="text-xl font-semibold mt-6 mb-2">Dans quels cas vos données personnelles sont-elles utilisées ?</h2>
                    <p>
                        Toutes les données personnelles que nous collectons sont utilisées dans le strict but de respecter nos engagements envers vous et de vous fournir le service que vous attendez dans le cadre de notre relation : Réponse aux questions et autres sollicitations provenant du formulaire de contact. Statistiques de fréquentation du site. En aucun cas vos données personnelles ne seront utilisées à d’autres fins.
                    </p>

                    <h2 class="text-xl font-semibold mt-6 mb-2">Qui sont les destinataires de vos données personnelles ?</h2>
                    <p>
                        Vos données personnelles sont strictement destinées au personnel de l’organisation S.A ZEROINVESTISSEMENT habilité à les traiter de manière à assurer le service que vous avez demandé. En aucun cas vos données personnelles ne seront vendues ou divulguées à des tiers.
                    </p>

                    <h2 class="text-xl font-semibold mt-6 mb-2">Vos données personnelles sont-elles en sécurité ?</h2>
                    <p>
                        ZEROINVESTISSEMENT veille à sensibiliser ses agents à la protection des données et à prendre toutes les mesures techniques et organisationnelles de nature à assurer la sécurité de vos données personnelles.
                    </p>

                    <h2 class="text-xl font-semibold mt-6 mb-2">Quelle est la durée de conservation de vos données personnelles ?</h2>
                    <p>
                        Nous ne conserverons vos données que le temps nécessaire à accomplir nos services ou dans les limites prescrites par la loi. À l’issue de ce délai, vos données personnelles seront supprimées. Nous ne pouvons supprimer vos données en cas d’obligation de conservation légale, par exemple si elle est prescrite par le droit comptable ou lorsqu’il existe un motif juridique pour conserver les données, une relation contractuelle en cours par exemple.
                    </p>

                    <h2 class="text-xl font-semibold mt-6 mb-2">Quels droits avez-vous sur vos données personnelles ?</h2>
                    <p>
                        La réglementation vous donne le droit de demander à ZEROINVESTISSEMENT : l’accès à vos données ; la rectification ou l’effacement de celles-ci ; la limitation du traitement vous concernant ; de vous opposer au traitement ; la portabilité de vos données. Pour plus d’informations sur le contenu et les conditions d’application de ces droits, n’hésitez pas à consulter le site de la CNIL.
                    </p>

                    <h2 class="text-xl font-semibold mt-6 mb-2">Qui contacter pour exercer vos droits sur vos données personnelles ?</h2>
                    <p>
                        La personne référente sur le sujet de la protection des données personnelles à contacter à ZEROINVESTISSEMENT est Mr Sam Mune. Cette personne est joignable par mail à <a href="mailto:ccprconseil@gmail.com" class="text-blue-600 underline">ccprconseil@gmail.com</a>, ou par courrier au siège de ZEROINVESTISSEMENT. ZEROINVESTISSEMENT peut rejeter les demandes déraisonnables ou dont l’acceptation n’est pas exigée par la loi, notamment celles qui seraient difficiles à mettre en place, qui exigeraient un effort technique disproportionné ou qui pourraient occasionner des fraudes. Si vous estimez que vos droits ne sont pas respectés, vous avez le droit d’introduire une réclamation auprès de la CNIL – 3 Place de Fontenoy TSA 80715 75334 PARIS CEDEX 07 (<a href="https://www.cnil.fr" class="text-blue-600 underline">https://www.cnil.fr</a>).
                    </p>
                </div>























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
