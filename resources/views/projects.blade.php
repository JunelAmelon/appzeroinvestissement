@extends('layouts.app')

@section('title', 'Soumettre un Projet')
@section('page-title', 'Soumettre un Projet')
@section('page-subtitle', 'Sélectionnez le type de projet que vous souhaitez proposer')

@section('content')
<style>
    .project-card {
        background: white;
        border-radius: 12px;
        padding: 2rem;
        box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        transition: all 0.3s ease;
        text-decoration: none;
        color: inherit;
        border: 2px solid transparent;
        display: flex;
        flex-direction: column;
        height: 100%;
    }

    .project-card:hover {
        box-shadow: 0 8px 24px rgba(0,0,0,0.15);
        border-color: var(--primary-color);
        transform: translateY(-5px);
    }

    .project-icon {
        font-size: 3.5rem;
        width: 80px;
        height: 80px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 12px;
        margin-bottom: 1.5rem;
        color: white;
    }

    .project-card-site .project-icon {
        background: #6A00B8;
    }

    .project-card-franchise .project-icon {
        background: #FF6B6B;
    }

    .project-card-marketplace .project-icon {
        background: #4ECDC4;
    }

    .project-card-achat .project-icon {
        background: #FFA500;
    }

    .project-card-incubateur .project-icon {
        background: #00d4ff;
    }

    .project-title {
        font-size: 1.4rem;
        font-weight: 700;
        margin-bottom: 0.8rem;
        color: #333;
    }

    .project-description {
        color: #666;
        font-size: 0.95rem;
        margin-bottom: 1.5rem;
        flex-grow: 1;
    }

    .project-features {
        background: #f9f9f9;
        border-radius: 8px;
        padding: 1rem;
        margin-bottom: 1.5rem;
        font-size: 0.9rem;
    }

    .project-features ul {
        margin: 0;
        padding-left: 1.2rem;
        list-style: none;
    }

    .project-features li {
        padding: 0.3rem 0;
        color: #555;
    }

    .project-features li:before {
        content: "✓ ";
        color: var(--primary-color);
        font-weight: bold;
        margin-right: 0.5rem;
    }

    .project-card-franchise .project-features li:before {
        color: #FF6B6B;
    }

    .project-card-marketplace .project-features li:before {
        color: #4ECDC4;
    }

    .project-card-achat .project-features li:before {
        color: #FFA500;
    }

    .project-card-incubateur .project-features li:before {
        color: #00C9FF;
    }

    .project-btn {
        background: var(--primary-color);
        color: white;
        padding: 0.75rem 1.5rem;
        border: none;
        border-radius: 6px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        text-decoration: none;
        display: inline-block;
        text-align: center;
    }

    .project-card-franchise .project-btn {
        background: #FF6B6B;
    }

    .project-card-marketplace .project-btn {
        background: #4ECDC4;
    }

    .project-card-achat .project-btn {
        background: #FFA500;
    }

    .project-card-incubateur .project-btn {
        background: #00d4ff;
    }

    .project-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(106, 0, 184, 0.3);
        color: white;
        text-decoration: none;
    }

    .project-card-franchise .project-btn:hover {
        box-shadow: 0 4px 12px rgba(255, 107, 107, 0.3);
    }

    .project-card-marketplace .project-btn:hover {
        box-shadow: 0 4px 12px rgba(78, 205, 196, 0.3);
    }

    .project-card-achat .project-btn:hover {
        box-shadow: 0 4px 12px rgba(255, 165, 0, 0.3);
    }

    .project-card-incubateur .project-btn:hover {
        box-shadow: 0 4px 12px rgba(0, 201, 255, 0.3);
    }

    @media (max-width: 1200px) {
        .project-card {
            padding: 2rem;
        }
    }

    @media (max-width: 992px) {
        .project-icon {
            font-size: 2.8rem;
            width: 70px;
            height: 70px;
        }

        .project-title {
            font-size: 1.4rem;
        }

        .project-description {
            font-size: 0.95rem;
        }
    }

    @media (max-width: 768px) {
        .project-card {
            padding: 1.5rem;
        }

        .project-icon {
            font-size: 2.5rem;
            width: 60px;
            height: 60px;
        }

        .project-title {
            font-size: 1.2rem;
        }

        .project-description {
            font-size: 0.9rem;
        }

        .project-features ul {
            font-size: 0.85rem;
        }

        .project-btn {
            padding: 0.7rem 1.5rem;
            font-size: 0.9rem;
        }
    }

    @media (max-width: 576px) {
        .project-card {
            padding: 1.25rem;
        }

        .project-icon {
            font-size: 2rem;
            width: 50px;
            height: 50px;
        }

        .project-title {
            font-size: 1.1rem;
        }

        .project-description {
            font-size: 0.85rem;
        }

        .project-features ul {
            font-size: 0.8rem;
        }

        .project-btn {
            padding: 0.6rem 1.2rem;
            font-size: 0.85rem;
        }
    }
</style>

<div class="row g-4 mb-5">
    <!-- Site Web / Application -->
    <div class="col-lg-4 col-md-6">
        <a href="/siteapp" class="project-card project-card-site">
            <div class="project-icon">
                <i class="fas fa-globe"></i>
            </div>
            <h2 class="project-title">Mon Site/Application</h2>
            <p class="project-description">
                Lancez votre site web ou application mobile révolutionnaire. Décrivez votre vision et nous vous aiderons à la concrétiser.
            </p>
            <div class="project-features">
                <ul>
                    <li>Sites web responsifs</li>
                    <li>Applications mobiles</li>
                    <li>Progressive Web Apps</li>
                    <li>Stratégie de lancement</li>
                </ul>
            </div>
            <button class="project-btn">
                <i class="fas fa-arrow-right me-2"></i>Créer un Projet Web
            </button>
        </a>
    </div>

    <!-- Franchise -->
    <div class="col-lg-4 col-md-6">
        <a href="/franchise" class="project-card project-card-franchise">
            <div class="project-icon">
                <i class="fas fa-store"></i>
            </div>
            <h2 class="project-title">Ma Franchise</h2>
            <p class="project-description">
                Développez votre réseau de franchise. Proposez un modèle d'affaires scalable avec des partenaires engagés.
            </p>
            <div class="project-features">
                <ul>
                    <li>Modèle de franchise</li>
                    <li>Plan de développement</li>
                    <li>Support opérationnel</li>
                    <li>Réseau de partenaires</li>
                </ul>
            </div>
            <button class="project-btn">
                <i class="fas fa-arrow-right me-2"></i>Créer une Franchise
            </button>
        </a>
    </div>

    <!-- Marketplace Dépôt -->
    <div class="col-lg-4 col-md-6">
        <a href="/marketplace-depot" class="project-card project-card-marketplace">
            <div class="project-icon">
                <i class="fas fa-handshake"></i>
            </div>
            <h2 class="project-title">Vendre Mon Entreprise</h2>
            <p class="project-description">
                Vendez votre entreprise ou projet à un acheteur qualifié. Trouvez le bon repreneur pour votre activité.
            </p>
            <div class="project-features">
                <ul>
                    <li>Évaluation de votre business</li>
                    <li>Matching avec acheteurs</li>
                    <li>Accompagnement transaction</li>
                    <li>Due diligence complète</li>
                </ul>
            </div>
            <button class="project-btn">
                <i class="fas fa-arrow-right me-2"></i>Vendre Mon Business
            </button>
        </a>
    </div>

    <!-- Marketplace Achat -->
    <div class="col-lg-4 col-md-6">
        <a href="/marketplace-achat" class="project-card project-card-achat">
            <div class="project-icon">
                <i class="fas fa-shopping-cart"></i>
            </div>
            <h2 class="project-title">Acheter un Business</h2>
            <p class="project-description">
                Achetez une entreprise clé en main et démarrez avec une base solide. Explorez des opportunités uniques.
            </p>
            <div class="project-features">
                <ul>
                    <li>Opportunités exclusives</li>
                    <li>Business clé en main</li>
                    <li>Accompagnement reprise</li>
                    <li>Financement et support</li>
                </ul>
            </div>
            <button class="project-btn">
                <i class="fas fa-arrow-right me-2"></i>Acheter un Business
            </button>
        </a>
    </div>

    <!-- Incubateur Zéro -->
    <div class="col-lg-4 col-md-6">
        <a href="/incubateur-zero" class="project-card project-card-incubateur">
            <div class="project-icon">
                <i class="fas fa-rocket"></i>
            </div>
            <h2 class="project-title">Incubateur Zéro</h2>
            <p class="project-description">
                Faites décoller votre nouveau concept innovant sans contrainte financière. Accélération et accompagnement total.
            </p>
            <div class="project-features">
                <ul>
                    <li>Accompagnement 360°</li>
                    <li>Zéro investissement initial</li>
                    <li>Mentorat et formation</li>
                    <li>Mise en relation réseau</li>
                </ul>
            </div>
            <button class="project-btn">
                <i class="fas fa-arrow-right me-2"></i>Rejoindre l'Incubateur
            </button>
        </a>
    </div>
</div>

<!-- Info Section -->
<div class="row">
    <div class="col-lg-8 mx-auto">
        <div class="card">
            <div class="card-header">
                <i class="fas fa-info-circle me-2"></i>Besoin d'aide pour choisir ?
            </div>
            <div class="card-body">
                <p class="mb-3">
                    Chaque option est conçue pour répondre à différents besoins entrepreneuriaux :
                </p>
                <ul class="mb-0">
                    <li class="mb-2"><strong>Site Web / Application :</strong> Idéale pour les entrepreneurs souhaitant lancer une startup web ou mobile avec une vision d'innovation.</li>
                    <li class="mb-2"><strong>Franchise :</strong> Parfaite pour les entrepreneurs établis cherchant à étendre leur modèle commercial à travers un réseau de franchisés.</li>
                    <li class="mb-2"><strong>Vendre Mon Entreprise :</strong> Pour les entrepreneurs souhaitant céder leur activité à un repreneur qualifié et accompagné.</li>
                    <li class="mb-2"><strong>Acheter un Business :</strong> Pour les investisseurs et entrepreneurs cherchant à acquérir une entreprise clé en main et rentable.</li>
                    <li><strong>Incubateur Zéro :</strong> Pour les porteurs de projets innovants cherchant un accompagnement complet sans apport financier initial.</li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
