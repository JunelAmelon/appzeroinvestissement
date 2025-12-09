@extends('layouts.app')

@section('title', 'Marketplace Achat')
@section('page-title', 'Acheter un Business Clé en Main')
@section('page-subtitle', 'Trouvez le business parfait pour vous')

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
        <x-card title="Marketplace Achat" icon="shopping-bag">
            <form method="POST" action="{{ route('marketplace.achat.save') }}" id="multiStepForm" class="needs-validation" novalidate>
                @csrf

                <!-- Étape 1: Pourquoi avoir choisi ce Business -->
                <x-form-step step="1" title="Pourquoi avoir choisi ce Business Clé en Main ?" icon="star">
                    <x-form-field name="chosen_business" label="Quel business avez-vous choisi sur la marketplace ?" required placeholder="Nom du business..." />
                    <x-form-field name="business_description" label="Description rapide du business" type="textarea" rows="2" placeholder="Décrivez brièvement le business choisi..." />
                    
                    <label class="form-label">Qu'est-ce qui vous a attiré dans ce business en particulier ? <span class="text-danger">*</span></label>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="attraction_reason" value="Le secteur d'activité" id="attr1" required>
                            <label class="form-check-label" for="attr1">Le secteur d'activité</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="attraction_reason" value="Le modèle d'affaires" id="attr2">
                            <label class="form-check-label" for="attr2">Le modèle d'affaires</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="attraction_reason" value="Le potentiel de rentabilité" id="attr3">
                            <label class="form-check-label" for="attr3">Le potentiel de rentabilité</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="attraction_reason" value="Autre" id="attr4">
                            <label class="form-check-label" for="attr4">Autre</label>
                        </div>
                    </div>
                    
                    <x-form-field name="business_animal" label="Si ce business clé en main était un animal, lequel serait-il ?" placeholder="Ex: Un aigle, un lion..." />
                    <x-form-field name="animal_reason" label="Et pourquoi ?" type="textarea" rows="2" placeholder="Expliquez cette comparaison..." />
                    
                    <label class="form-label">Sur une échelle de 1 à 10, à quel point êtes-vous convaincu que ce business est fait pour vous ? <span class="text-danger">*</span></label>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="conviction_score" value="1" id="conv1" required>
                            <label class="form-check-label" for="conv1">1 : Juste curieux</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="conviction_score" value="5" id="conv5">
                            <label class="form-check-label" for="conv5">5 : Ça pourrait marcher</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="conviction_score" value="10" id="conv10">
                            <label class="form-check-label" for="conv10">10 : C'est exactement ce que je cherchais !</label>
                        </div>
                    </div>
                    
                    <label class="form-label">Qu'est-ce qui vous enthousiasme le plus à l'idée de prendre en main ce business ? <span class="text-danger">*</span></label>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="enthusiasm_reason" value="Sa capacité à générer des revenus rapidement" id="enth1" required>
                            <label class="form-check-label" for="enth1">Sa capacité à générer des revenus rapidement</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="enthusiasm_reason" value="Le défi entrepreneurial" id="enth2">
                            <label class="form-check-label" for="enth2">Le défi entrepreneurial</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="enthusiasm_reason" value="La possibilité d'innover dans ce secteur" id="enth3">
                            <label class="form-check-label" for="enth3">La possibilité d'innover dans ce secteur</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="enthusiasm_reason" value="Autre" id="enth4">
                            <label class="form-check-label" for="enth4">Autre</label>
                        </div>
                    </div>
                </x-form-step>

                <!-- Étape 2: Motivation et Ambitions -->
                <x-form-step step="2" title="Votre Motivation et Ambitions" icon="rocket">
                    <label class="form-label">Pourquoi avez-vous décidé de vous lancer dans l'entrepreneuriat ? <span class="text-danger">*</span></label>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="entrepreneurship_reason" value="Devenir mon propre patron" id="entre1" required>
                            <label class="form-check-label" for="entre1">Devenir mon propre patron</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="entrepreneurship_reason" value="Diversifier mes sources de revenus" id="entre2">
                            <label class="form-check-label" for="entre2">Diversifier mes sources de revenus</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="entrepreneurship_reason" value="Lancer un projet que je contrôle entièrement" id="entre3">
                            <label class="form-check-label" for="entre3">Lancer un projet que je contrôle entièrement</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="entrepreneurship_reason" value="Autre" id="entre4">
                            <label class="form-check-label" for="entre4">Autre</label>
                        </div>
                    </div>
                    
                    <label class="form-label">Qu'est-ce qui vous motive le plus dans ce business clé en main spécifique ? <span class="text-danger">*</span></label>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="business_motivation" value="Le potentiel de croissance" id="motiv1" required>
                            <label class="form-check-label" for="motiv1">Le potentiel de croissance</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="business_motivation" value="L'absence de risque de démarrage" id="motiv2">
                            <label class="form-check-label" for="motiv2">L'absence de risque de démarrage</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="business_motivation" value="La possibilité de m'y investir pleinement" id="motiv3">
                            <label class="form-check-label" for="motiv3">La possibilité de m'y investir pleinement</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="business_motivation" value="Autre" id="motiv4">
                            <label class="form-check-label" for="motiv4">Autre</label>
                        </div>
                    </div>
                    
                    <x-form-field name="entrepreneurial_approach_3words" label="Si vous deviez décrire votre approche entrepreneuriale en 3 mots, ce serait..." placeholder="Mot 1, Mot 2, Mot 3" />
                    
                    <x-form-field name="success_factors" label="Qu'est-ce qui, selon vous, va vous permettre de réussir avec ce business ?" type="textarea" rows="3" required placeholder="Vos forces, votre expérience, vos compétences spécifiques..." />
                </x-form-step>

                <!-- Étape 3: Financement -->
                <x-form-step step="3" title="Financement - Parlons Argent !" icon="dollar-sign">
                    <label class="form-label">Avez-vous déjà planifié comment financer l'achat de ce business clé en main ? <span class="text-danger">*</span></label>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="financing_planned" value="Oui, j'ai déjà les fonds disponibles" id="fin1" required>
                            <label class="form-check-label" for="fin1">Oui, j'ai déjà les fonds disponibles</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="financing_planned" value="Oui, j'ai prévu un financement partiel" id="fin2">
                            <label class="form-check-label" for="fin2">Oui, j'ai prévu un financement partiel</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="financing_planned" value="Non, je cherche des solutions de financement" id="fin3">
                            <label class="form-check-label" for="fin3">Non, je cherche des solutions de financement</label>
                        </div>
                    </div>
                    
                    <label class="form-label">Si vous avez besoin de financement, comment pensez-vous y accéder ?</label>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="financing_access" value="Prêt bancaire" id="access1">
                            <label class="form-check-label" for="access1">Prêt bancaire</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="financing_access" value="Investissement personnel" id="access2">
                            <label class="form-check-label" for="access2">Investissement personnel</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="financing_access" value="Partenaires ou investisseurs externes" id="access3">
                            <label class="form-check-label" for="access3">Partenaires ou investisseurs externes</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="financing_access" value="Je cherche des options, pouvez-vous m'aider ?" id="access4">
                            <label class="form-check-label" for="access4">Je cherche des options, pouvez-vous m'aider ?</label>
                        </div>
                    </div>
                    
                    <label class="form-label">Quel est votre budget maximum pour l'achat de ce business ? <span class="text-danger">*</span></label>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="max_budget" value="Moins de 10 000 €" id="budg1" required>
                            <label class="form-check-label" for="budg1">Moins de 10 000 €</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="max_budget" value="Entre 10 000 € et 50 000 €" id="budg2">
                            <label class="form-check-label" for="budg2">Entre 10 000 € et 50 000 €</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="max_budget" value="Plus de 50 000 €" id="budg3">
                            <label class="form-check-label" for="budg3">Plus de 50 000 €</label>
                        </div>
                    </div>
                    
                    <label class="form-label">Seriez-vous intéressé par une option de financement proposée par ZeroInvestissement.com ? <span class="text-danger">*</span></label>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="zero_financing_interest" value="Oui, je suis ouvert à cette idée" id="zero1" required>
                            <label class="form-check-label" for="zero1">Oui, je suis ouvert à cette idée</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="zero_financing_interest" value="Non, je préfère trouver une solution de mon côté" id="zero2">
                            <label class="form-check-label" for="zero2">Non, je préfère trouver une solution de mon côté</label>
                        </div>
                    </div>
                </x-form-step>

                <!-- Étape 4: Stratégie et Gestion -->
                <x-form-step step="4" title="Stratégie et Gestion" icon="chess">
                    <label class="form-label">Quelle est la première action que vous allez entreprendre une fois le business acquis ? <span class="text-danger">*</span></label>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="first_action" value="Lancer une campagne de promotion" id="act1" required>
                            <label class="form-check-label" for="act1">Lancer une campagne de promotion</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="first_action" value="Revoir la stratégie marketing" id="act2">
                            <label class="form-check-label" for="act2">Revoir la stratégie marketing</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="first_action" value="Optimiser les opérations internes" id="act3">
                            <label class="form-check-label" for="act3">Optimiser les opérations internes</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="first_action" value="Autre" id="act4">
                            <label class="form-check-label" for="act4">Autre</label>
                        </div>
                    </div>
                    
                    <label class="form-label">Comment comptez-vous faire connaître ce business à vos futurs clients ? <span class="text-danger">*</span></label>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="marketing_strategy" value="Publicité digitale (Google, Facebook, etc.)" id="mark1" required>
                            <label class="form-check-label" for="mark1">Publicité digitale (Google, Facebook, etc.)</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="marketing_strategy" value="Réseaux sociaux (Instagram, TikTok, LinkedIn)" id="mark2">
                            <label class="form-check-label" for="mark2">Réseaux sociaux (Instagram, TikTok, LinkedIn)</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="marketing_strategy" value="Bouche-à-oreille" id="mark3">
                            <label class="form-check-label" for="mark3">Bouche-à-oreille</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="marketing_strategy" value="Autre" id="mark4">
                            <label class="form-check-label" for="mark4">Autre</label>
                        </div>
                    </div>
                    
                    <x-form-field name="main_objective" label="Quel est votre objectif principal avec ce business clé en main dans les 12 prochains mois ?" type="textarea" rows="2" placeholder="Ex: Générer un CA de X €, fidéliser des clients..." />
                    
                    <label class="form-label">Quel budget publicitaire initial prévoyez-vous pour ce business ? <span class="text-danger">*</span></label>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="advertising_budget" value="Moins de 500 €" id="adv1" required>
                            <label class="form-check-label" for="adv1">Moins de 500 €</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="advertising_budget" value="500 € à 2000 €" id="adv2">
                            <label class="form-check-label" for="adv2">500 € à 2000 €</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="advertising_budget" value="Plus de 2000 €" id="adv3">
                            <label class="form-check-label" for="adv3">Plus de 2000 €</label>
                        </div>
                    </div>
                    
                    <label class="form-label">Si vous pouviez donner un coup de boost immédiat à une partie du business, laquelle serait-ce ? <span class="text-danger">*</span></label>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="priority_boost" value="Les ventes" id="boost1" required>
                            <label class="form-check-label" for="boost1">Les ventes</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="priority_boost" value="La notoriété" id="boost2">
                            <label class="form-check-label" for="boost2">La notoriété</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="priority_boost" value="Le service client" id="boost3">
                            <label class="form-check-label" for="boost3">Le service client</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="priority_boost" value="Autre" id="boost4">
                            <label class="form-check-label" for="boost4">Autre</label>
                        </div>
                    </div>
                </x-form-step>

                <!-- Étape 5: Formation et Support -->
                <x-form-step step="5" title="Formation et Support" icon="graduation-cap">
                    <label class="form-label">Avez-vous besoin d'une formation pour mieux comprendre le secteur du business que vous avez choisi ? <span class="text-danger">*</span></label>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="training_needed" value="Oui, je suis prêt à me former à 100 %" id="train1" required>
                            <label class="form-check-label" for="train1">Oui, je suis prêt à me former à 100 %</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="training_needed" value="Oui, mais seulement sur certains aspects" id="train2">
                            <label class="form-check-label" for="train2">Oui, mais seulement sur certains aspects</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="training_needed" value="Non, je maîtrise déjà bien ce secteur" id="train3">
                            <label class="form-check-label" for="train3">Non, je maîtrise déjà bien ce secteur</label>
                        </div>
                    </div>
                    
                    <label class="form-label">Comment préférez-vous suivre la formation associée à ce business ? <span class="text-danger">*</span></label>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="preferred_training_method" value="Modules en ligne à mon rythme" id="method1" required>
                            <label class="form-check-label" for="method1">Modules en ligne à mon rythme</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="preferred_training_method" value="Webinaires et ateliers pratiques" id="method2">
                            <label class="form-check-label" for="method2">Webinaires et ateliers pratiques</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="preferred_training_method" value="Sessions de coaching en direct" id="method3">
                            <label class="form-check-label" for="method3">Sessions de coaching en direct</label>
                        </div>
                    </div>
                    
                    <label class="form-label">Quelles compétences spécifiques aimeriez-vous développer avant de vous lancer ? <span class="text-danger">*</span></label>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="skills_to_develop" value="Marketing digital" id="skill1" required>
                            <label class="form-check-label" for="skill1">Marketing digital</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="skills_to_develop" value="Gestion des opérations" id="skill2">
                            <label class="form-check-label" for="skill2">Gestion des opérations</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="skills_to_develop" value="Relation client" id="skill3">
                            <label class="form-check-label" for="skill3">Relation client</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="skills_to_develop" value="Autre" id="skill4">
                            <label class="form-check-label" for="skill4">Autre</label>
                        </div>
                    </div>
                    
                    <label class="form-label">Quel type de suivi attendez-vous de ZeroInvestissement.com après le lancement ? <span class="text-danger">*</span></label>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="expected_support" value="Suivi hebdomadaire pour des conseils stratégiques" id="supp1" required>
                            <label class="form-check-label" for="supp1">Suivi hebdomadaire pour des conseils stratégiques</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="expected_support" value="Suivi mensuel pour évaluer les performances" id="supp2">
                            <label class="form-check-label" for="supp2">Suivi mensuel pour évaluer les performances</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="expected_support" value="Suivi selon mes besoins spécifiques" id="supp3">
                            <label class="form-check-label" for="supp3">Suivi selon mes besoins spécifiques</label>
                        </div>
                    </div>
                </x-form-step>

                <!-- Étape 6: Engagement et Croissance -->
                <x-form-step step="6" title="Engagement et Croissance" icon="chart-line">
                    <label class="form-label">Combien de temps par semaine êtes-vous prêt à consacrer au développement de ce business ? <span class="text-danger">*</span></label>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="weekly_time_commitment" value="Temps plein (40h+)" id="time1" required>
                            <label class="form-check-label" for="time1">Temps plein (40h+)</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="weekly_time_commitment" value="Temps partiel (20-30h)" id="time2">
                            <label class="form-check-label" for="time2">Temps partiel (20-30h)</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="weekly_time_commitment" value="Soirées et week-ends" id="time3">
                            <label class="form-check-label" for="time3">Soirées et week-ends</label>
                        </div>
                    </div>
                    
                    <label class="form-label">Combien de temps vous donnez-vous pour rendre ce business rentable ? <span class="text-danger">*</span></label>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="profitability_timeline" value="3 mois ou moins" id="prof1" required>
                            <label class="form-check-label" for="prof1">3 mois ou moins</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="profitability_timeline" value="6 à 12 mois" id="prof2">
                            <label class="form-check-label" for="prof2">6 à 12 mois</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="profitability_timeline" value="Je suis prêt à attendre plus si nécessaire" id="prof3">
                            <label class="form-check-label" for="prof3">Je suis prêt à attendre plus si nécessaire</label>
                        </div>
                    </div>
                    
                    <label class="form-label">Avez-vous un plan de croissance pour ce business une fois lancé ? <span class="text-danger">*</span></label>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="growth_plan" value="Oui, je compte l'étendre rapidement" id="grow1" required>
                            <label class="form-check-label" for="grow1">Oui, je compte l'étendre rapidement</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="growth_plan" value="Non, je préfère d'abord stabiliser les opérations" id="grow2">
                            <label class="form-check-label" for="grow2">Non, je préfère d'abord stabiliser les opérations</label>
                        </div>
                    </div>
                    
                    <x-form-field name="mentor_question" label="Si vous aviez accès à un mentor entrepreneur, que lui demanderiez-vous en priorité ?" type="textarea" rows="2" placeholder="Votre question prioritaire..." />
                </x-form-step>

                <!-- Étape 7: Fun -->
                <x-form-step step="7" title="Et pour finir, amusons-nous un peu !" icon="smile">
                    <x-form-field name="business_superpower" label="Si votre business clé en main avait un superpouvoir, lequel serait-il et pourquoi ?" type="textarea" rows="2" placeholder="Décrivez le superpouvoir de votre business..." />
                    
                    <x-form-field name="book_title" label="Quel serait le titre d'un livre sur votre aventure entrepreneuriale avec ce business ?" placeholder="Le titre de votre livre..." />
                    
                    <label class="form-label">Imaginez que dans 5 ans, votre business est un énorme succès. Quelle serait la première chose que vous feriez ?</label>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="success_celebration" value="Un voyage autour du monde" id="celeb1">
                            <label class="form-check-label" for="celeb1">Un voyage autour du monde</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="success_celebration" value="Réinvestir dans d'autres projets" id="celeb2">
                            <label class="form-check-label" for="celeb2">Réinvestir dans d'autres projets</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="success_celebration" value="Organiser une fête incroyable pour célébrer" id="celeb3">
                            <label class="form-check-label" for="celeb3">Organiser une fête incroyable pour célébrer</label>
                        </div>
                    </div>
                    
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
                <h5 style="color: var(--primary-color); font-weight: 600;">🎉 Merci pour vos réponses !</h5>
                <p style="margin-bottom: 0;">
                    Notre équipe analysera vos réponses, notamment en ce qui concerne le financement, et nous vous contacterons sous <strong>10 jours ouvrés</strong> pour valider votre acquisition du business clé en main. 
                    Ensemble, nous allons transformer ce projet en un succès entrepreneurial ! 
                    <strong>ZeroInvestissement.com est prêt à vous accompagner de la première étape jusqu'au sommet.</strong>
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
    const totalSteps = 7;
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
