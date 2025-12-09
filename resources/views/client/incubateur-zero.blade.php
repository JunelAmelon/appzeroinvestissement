@extends('layouts.app')

@section('title', 'Incubateur Zéro')
@section('page-title', 'Accélérateur Zéro')
@section('page-subtitle', 'Faites décoller votre projet sans contrainte financière')

@section('content')
<style>
    @media (max-width: 768px) {
        .form-section-title {
            font-size: 1.1rem !important;
        }
        
        .form-label {
            font-size: 0.9rem !important;
        }
        
        .form-control, .form-select {
            font-size: 0.9rem !important;
        }
        
        .btn {
            padding: 0.6rem 1.2rem !important;
            font-size: 0.9rem !important;
        }
        
        .alert h5 {
            font-size: 1rem !important;
        }
        
        .alert p {
            font-size: 0.85rem !important;
        }
    }
    
    @media (max-width: 576px) {
        .form-section-title {
            font-size: 1rem !important;
            padding: 0.75rem 0 !important;
        }
        
        .navigation-buttons {
            flex-direction: column !important;
            gap: 0.5rem !important;
        }
        
        .navigation-buttons .btn {
            width: 100% !important;
        }
    }
</style>
<div class="row">
    <div class="col-lg-10 mx-auto">
        <x-card title="Incubateur Zéro" icon="rocket">
            <form method="POST" action="{{ route('incubateur.zero.save') }}" id="multiStepForm" class="needs-validation" novalidate>
                @csrf

                <!-- Étape 1: Votre Projet -->
                <x-form-step step="1" title="Votre Projet - Parlons du cœur de votre idée" icon="lightbulb">
                    <x-form-field name="project_name" label="Nom de votre projet ou entreprise" required placeholder="Le nom de votre projet..." />
                    <x-form-field name="name_reason" label="Pourquoi ce nom est parfait ?" type="textarea" rows="2" placeholder="Expliquez le choix du nom..." />
                    
                    <x-form-field name="project_description" label="Décrivez votre idée ou entreprise en une phrase qui nous fera tomber sous le charme" type="textarea" rows="2" required placeholder="Votre pitch en une phrase..." />
                    
                    <label class="form-label">À quel stade en êtes-vous avec ce projet ? <span class="text-danger">*</span></label>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="project_stage" value="Simple idée" id="stage1" required>
                            <label class="form-check-label" for="stage1">Simple idée</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="project_stage" value="En développement" id="stage2">
                            <label class="form-check-label" for="stage2">En développement</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="project_stage" value="Entreprise déjà existante" id="stage3">
                            <label class="form-check-label" for="stage3">Entreprise déjà existante</label>
                        </div>
                    </div>
                    
                    <x-form-field name="movie_title" label="Si votre projet était un film, quel en serait le titre ?" placeholder="Le titre du film..." />
                    <x-form-field name="movie_reason" label="Et pourquoi ?" type="textarea" rows="2" placeholder="Expliquez ce titre..." />
                    
                    <x-form-field name="main_mission" label="Quelle est la mission principale de votre projet ?" type="textarea" rows="2" required placeholder="Changer une industrie, résoudre un problème, proposer un produit/service unique..." />
                </x-form-step>

                <!-- Étape 2: Origine et Motivation -->
                <x-form-step step="2" title="Origine et Motivation - Pourquoi cette idée vous passionne ?" icon="heart">
                    <x-form-field name="idea_origin" label="Comment l'idée de ce projet vous est-elle venue ?" type="textarea" rows="3" required placeholder="Un moment eureka, une discussion avec un ami, un besoin non satisfait ?" />
                    
                    <label class="form-label">Qu'est-ce qui vous passionne le plus dans ce projet ? <span class="text-danger">*</span></label>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="passion_reason" value="Le défi entrepreneurial" id="pass1" required>
                            <label class="form-check-label" for="pass1">Le défi entrepreneurial</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="passion_reason" value="L'impact que ce projet peut avoir" id="pass2">
                            <label class="form-check-label" for="pass2">L'impact que ce projet peut avoir</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="passion_reason" value="Le potentiel de croissance" id="pass3">
                            <label class="form-check-label" for="pass3">Le potentiel de croissance</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="passion_reason" value="Autre" id="pass4">
                            <label class="form-check-label" for="pass4">Autre</label>
                        </div>
                    </div>
                    
                    <x-form-field name="project_strength" label="Si vous deviez décrire la plus grande force de votre projet en une phrase, quelle serait-elle ?" type="textarea" rows="2" required placeholder="La force principale de votre projet..." />
                    
                    <x-form-field name="biggest_obstacle" label="Quel est le plus grand obstacle auquel vous avez fait face jusqu'à présent dans ce projet ?" type="textarea" rows="2" placeholder="Décrivez l'obstacle principal..." />
                </x-form-step>

                <!-- Étape 3: L'Avenir -->
                <x-form-step step="3" title="L'Avenir - Quels sont vos rêves pour ce projet ?" icon="star">
                    <label class="form-label">Quel est votre objectif principal avec ce projet sur les 5 prochaines années ? <span class="text-danger">*</span></label>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="main_objective_5years" value="Conquérir un nouveau marché" id="obj1" required>
                            <label class="form-check-label" for="obj1">Conquérir un nouveau marché</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="main_objective_5years" value="Créer une marque incontournable" id="obj2">
                            <label class="form-check-label" for="obj2">Créer une marque incontournable</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="main_objective_5years" value="Innover dans une industrie" id="obj3">
                            <label class="form-check-label" for="obj3">Innover dans une industrie</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="main_objective_5years" value="Autre" id="obj4">
                            <label class="form-check-label" for="obj4">Autre</label>
                        </div>
                    </div>
                    
                    <label class="form-label">Dans combien de temps pensez-vous que votre projet pourrait être rentable ? <span class="text-danger">*</span></label>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="profitability_timeline" value="Moins de 6 mois" id="rent1" required>
                            <label class="form-check-label" for="rent1">Moins de 6 mois</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="profitability_timeline" value="Entre 6 et 12 mois" id="rent2">
                            <label class="form-check-label" for="rent2">Entre 6 et 12 mois</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="profitability_timeline" value="Plus d'un an" id="rent3">
                            <label class="form-check-label" for="rent3">Plus d'un an</label>
                        </div>
                    </div>
                    
                    <x-form-field name="strategy" label="Quelle est votre stratégie pour atteindre cet objectif ?" type="textarea" rows="3" required placeholder="Développer un produit/service unique, accroître la notoriété, etc." />
                    
                    <label class="form-label">Si vous deviez lever des fonds pour ce projet, quel serait votre montant cible ?</label>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="funding_target" value="Moins de 100 000 €" id="fund1">
                            <label class="form-check-label" for="fund1">Moins de 100 000 €</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="funding_target" value="Entre 100 000 € et 500 000 €" id="fund2">
                            <label class="form-check-label" for="fund2">Entre 100 000 € et 500 000 €</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="funding_target" value="Plus de 500 000 €" id="fund3">
                            <label class="form-check-label" for="fund3">Plus de 500 000 €</label>
                        </div>
                    </div>
                    
                    <label class="form-label">Comment voyez-vous la croissance de votre projet sur les 12 prochains mois ? <span class="text-danger">*</span></label>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="growth_vision_12months" value="Stable, avec une croissance continue" id="growth1" required>
                            <label class="form-check-label" for="growth1">Stable, avec une croissance continue</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="growth_vision_12months" value="Accélérée, en atteignant de nouveaux marchés" id="growth2">
                            <label class="form-check-label" for="growth2">Accélérée, en atteignant de nouveaux marchés</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="growth_vision_12months" value="Explosive, avec une expansion rapide" id="growth3">
                            <label class="form-check-label" for="growth3">Explosive, avec une expansion rapide</label>
                        </div>
                    </div>
                </x-form-step>

                <!-- Étape 4: Potentiel et Scalabilité -->
                <x-form-step step="4" title="Potentiel et Scalabilité" icon="chart-line">
                    <x-form-field name="scalability_reason" label="Pourquoi pensez-vous que votre projet peut se développer à grande échelle ?" type="textarea" rows="3" required placeholder="Modèle d'affaires flexible, demande élevée du marché, innovation unique..." />
                    
                    <label class="form-label">Dans quel secteur opère votre projet ? <span class="text-danger">*</span></label>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="project_sector" value="E-commerce" id="sect1" required>
                            <label class="form-check-label" for="sect1">E-commerce</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="project_sector" value="Technologie" id="sect2">
                            <label class="form-check-label" for="sect2">Technologie</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="project_sector" value="Santé" id="sect3">
                            <label class="form-check-label" for="sect3">Santé</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="project_sector" value="Autre" id="sect4">
                            <label class="form-check-label" for="sect4">Autre</label>
                        </div>
                    </div>
                    
                    <x-form-field name="sector_innovation" label="En quoi est-il innovant ?" type="textarea" rows="2" placeholder="Décrivez l'innovation de votre projet..." />
                    
                    <x-form-field name="target_market" label="Quel est le marché cible de votre projet ?" type="textarea" rows="2" required placeholder="Ex : Enfants, entreprises, consommateurs, etc." />
                    
                    <x-form-field name="unique_characteristics" label="Quelles sont les trois principales caractéristiques qui rendent votre projet unique et compétitif ?" type="textarea" rows="3" required placeholder="Listez les 3 caractéristiques principales..." />
                    
                    <x-form-field name="growth_limitations" label="Qu'est-ce qui pourrait limiter la croissance de votre projet ?" type="textarea" rows="2" placeholder="Concurrence, manque de financement, obstacles techniques..." />
                </x-form-step>

                <!-- Étape 5: Analyse du Marché et Concurrence -->
                <x-form-step step="5" title="Analyse du Marché et Concurrence" icon="users">
                    <label class="form-label">Avez-vous déjà réalisé une analyse de marché pour ce projet ? <span class="text-danger">*</span></label>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="market_analysis_done" value="Oui, une analyse complète" id="ana1" required>
                            <label class="form-check-label" for="ana1">Oui, une analyse complète</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="market_analysis_done" value="Non, je compte sur votre soutien" id="ana2">
                            <label class="form-check-label" for="ana2">Non, je compte sur votre soutien</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="market_analysis_done" value="Partiellement, je travaille encore dessus" id="ana3">
                            <label class="form-check-label" for="ana3">Partiellement, je travaille encore dessus</label>
                        </div>
                    </div>
                    
                    <x-form-field name="main_competitors" label="Qui sont vos principaux concurrents, et qu'est-ce qui vous différencie d'eux ?" type="textarea" rows="3" placeholder="Listez vos concurrents et vos avantages..." />
                    
                    <label class="form-label">Votre projet a-t-il déjà eu des clients ou utilisateurs ? <span class="text-danger">*</span></label>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="has_customers" value="Oui, et les retours sont excellents" id="cust1" required>
                            <label class="form-check-label" for="cust1">Oui, et les retours sont excellents</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="has_customers" value="Oui, mais je dois encore l'améliorer" id="cust2">
                            <label class="form-check-label" for="cust2">Oui, mais je dois encore l'améliorer</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="has_customers" value="Non, pas encore de clients" id="cust3">
                            <label class="form-check-label" for="cust3">Non, pas encore de clients</label>
                        </div>
                    </div>
                    
                    <label class="form-label">Comment comptez-vous conquérir votre marché cible ? <span class="text-danger">*</span></label>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="market_conquest_strategy" value="Publicité digitale" id="conq1" required>
                            <label class="form-check-label" for="conq1">Publicité digitale</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="market_conquest_strategy" value="Réseaux sociaux" id="conq2">
                            <label class="form-check-label" for="conq2">Réseaux sociaux</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="market_conquest_strategy" value="Partenariats" id="conq3">
                            <label class="form-check-label" for="conq3">Partenariats</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="market_conquest_strategy" value="Bouche-à-oreille" id="conq4">
                            <label class="form-check-label" for="conq4">Bouche-à-oreille</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="market_conquest_strategy" value="Autre" id="conq5">
                            <label class="form-check-label" for="conq5">Autre</label>
                        </div>
                    </div>
                </x-form-step>

                <!-- Étape 6: Financement et Croissance -->
                <x-form-step step="6" title="Financement et Croissance - Parlons des chiffres !" icon="dollar-sign">
                    <label class="form-label">Avez-vous déjà levé des fonds pour ce projet ? <span class="text-danger">*</span></label>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="funds_raised" value="Oui, avec succès" id="raise1" required>
                            <label class="form-check-label" for="raise1">Oui, avec succès</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="funds_raised" value="Non, pas encore" id="raise2">
                            <label class="form-check-label" for="raise2">Non, pas encore</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="funds_raised" value="Non, mais j'ai des pistes" id="raise3">
                            <label class="form-check-label" for="raise3">Non, mais j'ai des pistes</label>
                        </div>
                    </div>
                    
                    <label class="form-label">Quel budget initial avez-vous prévu pour ce projet ? <span class="text-danger">*</span></label>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="initial_budget" value="Moins de 50 000 €" id="budg1" required>
                            <label class="form-check-label" for="budg1">Moins de 50 000 €</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="initial_budget" value="Entre 50 000 € et 200 000 €" id="budg2">
                            <label class="form-check-label" for="budg2">Entre 50 000 € et 200 000 €</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="initial_budget" value="Plus de 200 000 €" id="budg3">
                            <label class="form-check-label" for="budg3">Plus de 200 000 €</label>
                        </div>
                    </div>
                    
                    <x-form-field name="unlimited_funding_use" label="Si vous aviez accès à un financement illimité, quelle serait la première chose que vous feriez pour faire grandir votre projet ?" type="textarea" rows="2" placeholder="Votre priorité avec un budget illimité..." />
                    
                    <label class="form-label">De quoi avez-vous le plus besoin pour accélérer la croissance de votre projet ? <span class="text-danger">*</span></label>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="growth_needs" value="Plus de fonds" id="need1" required>
                            <label class="form-check-label" for="need1">Plus de fonds</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="growth_needs" value="Développer une technologie ou un produit" id="need2">
                            <label class="form-check-label" for="need2">Développer une technologie ou un produit</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="growth_needs" value="Améliorer le marketing" id="need3">
                            <label class="form-check-label" for="need3">Améliorer le marketing</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="growth_needs" value="Autre" id="need4">
                            <label class="form-check-label" for="need4">Autre</label>
                        </div>
                    </div>
                </x-form-step>

                <!-- Étape 7: Soutien Stratégique et Partenariats -->
                <x-form-step step="7" title="Soutien Stratégique et Partenariats" icon="handshake">
                    <label class="form-label">Dans quel domaine avez-vous le plus besoin de notre soutien stratégique ? <span class="text-danger">*</span></label>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="strategic_support_needed" value="Développement commercial" id="strat1" required>
                            <label class="form-check-label" for="strat1">Développement commercial</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="strategic_support_needed" value="Financement et levée de fonds" id="strat2">
                            <label class="form-check-label" for="strat2">Financement et levée de fonds</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="strategic_support_needed" value="Stratégie marketing" id="strat3">
                            <label class="form-check-label" for="strat3">Stratégie marketing</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="strategic_support_needed" value="Expertise technologique" id="strat4">
                            <label class="form-check-label" for="strat4">Expertise technologique</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="strategic_support_needed" value="Autre" id="strat5">
                            <label class="form-check-label" for="strat5">Autre</label>
                        </div>
                    </div>
                    
                    <label class="form-label">Êtes-vous ouvert(e) à la co-gestion de votre projet avec notre équipe d'experts pour maximiser son potentiel ? <span class="text-danger">*</span></label>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="co_management_open" value="Oui, je suis prêt(e) à travailler en étroite collaboration" id="coman1" required>
                            <label class="form-check-label" for="coman1">Oui, je suis prêt(e) à travailler en étroite collaboration</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="co_management_open" value="Non, je préfère gérer seul(e)" id="coman2">
                            <label class="form-check-label" for="coman2">Non, je préfère gérer seul(e)</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="co_management_open" value="Je ne sais pas encore, cela dépend du projet" id="coman3">
                            <label class="form-check-label" for="coman3">Je ne sais pas encore, cela dépend du projet</label>
                        </div>
                    </div>
                    
                    <label class="form-label">Quelles connexions ou partenaires aimeriez-vous avoir dans votre réseau ? <span class="text-danger">*</span></label>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="desired_connections" value="Investisseurs" id="conn1" required>
                            <label class="form-check-label" for="conn1">Investisseurs</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="desired_connections" value="Experts du secteur" id="conn2">
                            <label class="form-check-label" for="conn2">Experts du secteur</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="desired_connections" value="Fournisseurs ou distributeurs" id="conn3">
                            <label class="form-check-label" for="conn3">Fournisseurs ou distributeurs</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="desired_connections" value="Autre" id="conn4">
                            <label class="form-check-label" for="conn4">Autre</label>
                        </div>
                    </div>
                </x-form-step>

                <!-- Étape 8: Impact et Valeurs -->
                <x-form-step step="8" title="Impact et Valeurs" icon="globe">
                    <x-form-field name="positive_impact" label="En quoi votre projet a-t-il un impact positif (social, environnemental, économique) ?" type="textarea" rows="3" required placeholder="Décrivez l'impact positif de votre projet..." />
                    
                    <label class="form-label">Quelles sont les valeurs fondamentales de votre projet ou entreprise ? <span class="text-danger">*</span></label>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="core_values" value="Innovation" id="val1" required>
                            <label class="form-check-label" for="val1">Innovation</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="core_values" value="Durabilité" id="val2">
                            <label class="form-check-label" for="val2">Durabilité</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="core_values" value="Service client exceptionnel" id="val3">
                            <label class="form-check-label" for="val3">Service client exceptionnel</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="core_values" value="Autre" id="val4">
                            <label class="form-check-label" for="val4">Autre</label>
                        </div>
                    </div>
                    
                    <x-form-field name="values_in_practice" label="Comment ces valeurs se traduisent-elles dans votre quotidien professionnel ?" type="textarea" rows="2" placeholder="Exemples concrets..." />
                    
                    <x-form-field name="global_impact_vision" label="Si votre projet devenait une référence mondiale, quel impact aimeriez-vous qu'il ait sur la société ?" type="textarea" rows="3" placeholder="Votre vision d'impact global..." />
                </x-form-step>

                <!-- Étape 9: Fun -->
                <x-form-step step="9" title="Petites dernières pour le Fun !" icon="smile">
                    <x-form-field name="cartoon_character" label="Si votre projet était un personnage de dessin animé, qui serait-il et pourquoi ?" type="textarea" rows="2" placeholder="Le personnage et pourquoi..." />
                    
                    <x-form-field name="tv_series_synopsis" label="Imaginez que votre projet soit transformé en série TV. Quel en serait le synopsis ?" type="textarea" rows="3" placeholder="Le synopsis de la série..." />
                    
                    <x-form-field name="netflix_doc_title" label="Quel serait le titre du documentaire Netflix sur la réussite de votre projet ?" placeholder="Le titre du documentaire..." />
                    
                    <x-form-field name="success_party" label="Si vous pouviez organiser une fête pour célébrer le succès de votre projet, où et comment se déroulerait-elle ?" type="textarea" rows="2" placeholder="Décrivez la fête de célébration..." />
                    
                    <x-form-field name="project_slogan" label="Si votre projet pouvait parler, que dirait-il à ses futurs clients en un seul slogan ?" placeholder="Le slogan de votre projet..." />
                    
                    <input type="hidden" name="status" value="en_attente">
                </x-form-step>

                <!-- Boutons de navigation -->
                <div class="d-flex justify-content-between mt-4">
                    <div>
                        <a href="/projects" class="btn btn-outline-secondary" id="backToProjectsBtn">
                            <i class="fas fa-arrow-left me-2"></i>Retour à la sélection
                        </a>
                        <button type="button" class="btn btn-secondary" id="prevBtn" style="display: none;">
                            <i class="fas fa-arrow-left me-2"></i>Précédent
                        </button>
                    </div>
                    <div>
                        <button type="button" class="btn btn-primary" id="nextBtn" style="background: var(--primary-color); border: none;">
                            Suivant<i class="fas fa-arrow-right ms-2"></i>
                        </button>
                        <button type="submit" class="btn btn-success" id="submitBtn" style="display: none; background: var(--primary-color); border: none;">
                            <i class="fas fa-check me-2"></i>Soumettre
                        </button>
                    </div>
                </div>
            </form>
            
            <!-- Message de fin -->
            <div class="alert alert-success mt-4" style="display: none;" id="thankYouMessage">
                <h5 style="color: var(--primary-color); font-weight: 600;">🎉 Merci d'avoir partagé votre projet avec nous !</h5>
                <p style="margin-bottom: 0;">
                    Nous allons analyser votre dossier et vous recevrez un retour sous <strong>7 jours ouvrés</strong>. 
                    Si votre projet est sélectionné, nous organiserons un entretien pour discuter en détail de vos besoins spécifiques et de la manière dont ZeroInvestissement.com peut vous accompagner dans cette aventure. 
                    <strong>Préparez-vous à atteindre de nouveaux sommets !</strong>
                </p>
            </div>
        </x-card>
    </div>
</div>

<style>
.progress-container {
    margin-bottom: 2rem;
}

.form-section-title {
    background: var(--primary-color);
    color: white;
    padding: 12px 20px;
    border-radius: 8px;
    margin-top: 25px;
    margin-bottom: 15px;
    font-weight: 600;
}

.step-indicators {
    position: relative;
}

.step-indicator {
    text-align: center;
    flex: 1;
    position: relative;
}

.step-number {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background: #e9ecef;
    color: #6c757d;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 8px;
    font-weight: 600;
    transition: all 0.3s;
}

.step-indicator.active .step-number {
    background: var(--primary-color);
    color: white;
    box-shadow: 0 0 0 4px rgba(106, 0, 184, 0.2);
}

.step-indicator.completed .step-number {
    background: var(--success-color);
    color: white;
}

.step-indicator.completed .step-number::before {
    content: '✓';
}

.step-label {
    font-size: 0.85rem;
    color: #6c757d;
    font-weight: 500;
}

.step-indicator.active .step-label {
    color: var(--primary-color);
    font-weight: 600;
}

.form-step {
    display: none;
    animation: fadeIn 0.3s;
}

.form-step.active {
    display: block;
}

@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateX(20px);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}
</style>

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    let currentStep = 1;
    const totalSteps = 9;
    const formSteps = document.querySelectorAll('.form-step');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    const submitBtn = document.getElementById('submitBtn');
    const form = document.getElementById('multiStepForm');

    function showStep(step) {
        formSteps.forEach((formStep, index) => {
            formStep.classList.toggle('active', index + 1 === step);
        });

        const backToProjectsBtn = document.getElementById('backToProjectsBtn');
        backToProjectsBtn.style.display = step === 1 ? 'inline-block' : 'none';
        prevBtn.style.display = step === 1 ? 'none' : 'inline-block';
        nextBtn.style.display = step === totalSteps ? 'none' : 'inline-block';
        submitBtn.style.display = step === totalSteps ? 'inline-block' : 'none';

        window.scrollTo({ top: 0, behavior: 'smooth' });
    }

    function validateStep(step) {
        const currentFormStep = formSteps[step - 1];
        const inputs = currentFormStep.querySelectorAll('input[required], select[required], textarea[required]');
        let isValid = true;

        inputs.forEach(input => {
            if (input.type === 'radio') {
                const radioGroup = currentFormStep.querySelectorAll(`input[name="${input.name}"]`);
                const isChecked = Array.from(radioGroup).some(radio => radio.checked);
                if (!isChecked) {
                    isValid = false;
                    radioGroup[0].classList.add('is-invalid');
                }
            } else if (!input.value.trim()) {
                isValid = false;
                input.classList.add('is-invalid');
            } else {
                input.classList.remove('is-invalid');
            }
        });

        return isValid;
    }

    nextBtn.addEventListener('click', function() {
        if (validateStep(currentStep)) {
            currentStep++;
            showStep(currentStep);
        } else {
            toastr.error('Veuillez remplir tous les champs obligatoires');
        }
    });

    prevBtn.addEventListener('click', function() {
        currentStep--;
        showStep(currentStep);
    });

    form.addEventListener('submit', function(e) {
        if (!validateStep(currentStep)) {
            e.preventDefault();
            toastr.error('Veuillez remplir tous les champs obligatoires');
        }
    });

    // Remove invalid class on input
    form.querySelectorAll('input, select, textarea').forEach(input => {
        input.addEventListener('input', function() {
            this.classList.remove('is-invalid');
        });
        input.addEventListener('change', function() {
            this.classList.remove('is-invalid');
        });
    });

    showStep(currentStep);
});
</script>
@endpush
@endsection
