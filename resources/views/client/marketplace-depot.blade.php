@extends('layouts.app')

@section('title', 'Marketplace Dépôt')
@section('page-title', 'Vendre votre Business')
@section('page-subtitle', 'Proposez votre projet sur notre marketplace')

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
        <x-card title="Marketplace Dépôt" icon="upload">
            <form method="POST" action="{{ route('marketplace.depot.save') }}" id="multiStepForm" class="needs-validation" novalidate>
                @csrf

                <!-- Étape 1: L'Essence de Votre Business -->
                <x-form-step step="1" title="L'Essence de Votre Business" icon="lightbulb">
                    <x-form-field name="business_name" label="Nom de votre projet ou entreprise" required />
                    <x-form-field name="name_reason" label="Pourquoi ce nom vous semble parfait ?" type="textarea" rows="2" placeholder="Expliquez le choix de ce nom..." />
                    
                    <x-form-field name="elevator_pitch" label="En une phrase, vendez-nous votre business comme si vous parliez à quelqu'un dans l'ascenseur" type="textarea" rows="2" required placeholder="Pitch rapide et percutant..." />
                    
                    <x-form-field name="business_dish" label="Si votre projet était un plat, lequel serait-il ?" />
                    <x-form-field name="dish_reason" label="Et pourquoi ?" type="textarea" rows="2" placeholder="Pourquoi cette comparaison ?" />
                    
                    <label class="form-label">Quelle est la mission principale de votre business ? <span class="text-danger">*</span></label>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="business_mission" value="Vendre des produits uniques" id="mission1" required>
                            <label class="form-check-label" for="mission1">Vendre des produits uniques</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="business_mission" value="Offrir des services innovants" id="mission2">
                            <label class="form-check-label" for="mission2">Offrir des services innovants</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="business_mission" value="Changer le monde" id="mission3">
                            <label class="form-check-label" for="mission3">Changer le monde (ou au moins votre secteur !)</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="business_mission" value="Autre" id="mission4">
                            <label class="form-check-label" for="mission4">Autre</label>
                        </div>
                    </div>
                    
                    <x-form-field name="activity_sector" label="Dans quel secteur d'activité opère votre business ?" required placeholder="Ex: E-commerce, Services, Tech..." />
                    <x-form-field name="sector_choice_reason" label="Pourquoi avez-vous choisi ce secteur ?" type="textarea" rows="2" />
                </x-form-step>

                <!-- Étape 2: Potentiel et Scalabilité -->
                <x-form-step step="2" title="Potentiel et Scalabilité - Rêvons en grand !" icon="rocket">
                    <x-form-field name="success_factors" label="Qu'est-ce qui fait de votre business une machine à succès ?" type="textarea" rows="3" required placeholder="Technologie, produit unique, modèle d'affaires...?" />
                    
                    <label class="form-label">Sur une échelle de 1 à 10, à quel point pensez-vous que ce business est duplicable ailleurs ? <span class="text-danger">*</span></label>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="scalability_score" value="1" id="scale1" required>
                            <label class="form-check-label" for="scale1">1 : Très difficile</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="scalability_score" value="5" id="scale5">
                            <label class="form-check-label" for="scale5">5 : Ça pourrait marcher</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="scalability_score" value="10" id="scale10">
                            <label class="form-check-label" for="scale10">10 : Facile à déployer n'importe où</label>
                        </div>
                    </div>
                    
                    <label class="form-label">Combien de clients avez-vous actuellement ou espérez-vous toucher ? <span class="text-danger">*</span></label>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="current_customers" value="Moins de 500" id="cust1" required>
                            <label class="form-check-label" for="cust1">Moins de 500</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="current_customers" value="Entre 500 et 2000" id="cust2">
                            <label class="form-check-label" for="cust2">Entre 500 et 2000</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="current_customers" value="Plus de 2000" id="cust3">
                            <label class="form-check-label" for="cust3">Plus de 2000</label>
                        </div>
                    </div>
                    
                    <label class="form-label">Quel chiffre d'affaires annuel ce projet a-t-il déjà généré (ou peut-il générer) ? <span class="text-danger">*</span></label>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="annual_revenue" value="Moins de 50 000 €" id="rev1" required>
                            <label class="form-check-label" for="rev1">Moins de 50 000 €</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="annual_revenue" value="Entre 50 000 € et 200 000 €" id="rev2">
                            <label class="form-check-label" for="rev2">Entre 50 000 € et 200 000 €</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="annual_revenue" value="Plus de 200 000 €" id="rev3">
                            <label class="form-check-label" for="rev3">Plus de 200 000 €</label>
                        </div>
                    </div>
                    
                    <x-form-field name="unique_characteristic" label="Si votre business était une licorne, en quoi serait-elle magique ?" type="textarea" rows="2" placeholder="Une caractéristique qui fait toute la différence !" />
                </x-form-step>

                <!-- Étape 3: Opérations et Technique -->
                <x-form-step step="3" title="Opérations et Technique - Parlons Pratique !" icon="cog">
                    <x-form-field name="key_features" label="Quelles sont les 3 fonctionnalités clés de votre business qui le rendent irrésistible ?" type="textarea" rows="3" required placeholder="Listez les 3 fonctionnalités principales..." />
                    
                    <label class="form-label">Faut-il des compétences spécifiques pour gérer ce business ? <span class="text-danger">*</span></label>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="required_skills" value="Oui, des compétences techniques sont nécessaires" id="skills1" required>
                            <label class="form-check-label" for="skills1">Oui, des compétences techniques sont nécessaires</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="required_skills" value="Non, il est simple à gérer" id="skills2">
                            <label class="form-check-label" for="skills2">Non, il est simple à gérer</label>
                        </div>
                    </div>
                    
                    <label class="form-label">Avez-vous déjà des outils ou technologies en place ? <span class="text-danger">*</span></label>
                    <p class="text-muted small">(site web, logiciels, plateformes)</p>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="tools_in_place" value="Oui, tout est en place" id="tools1" required>
                            <label class="form-check-label" for="tools1">Oui, tout est en place</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="tools_in_place" value="Non, ça reste à développer" id="tools2">
                            <label class="form-check-label" for="tools2">Non, ça reste à développer</label>
                        </div>
                    </div>
                    
                    <label class="form-label">Avez-vous une équipe qui fonctionne déjà ? <span class="text-danger">*</span></label>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="team_status" value="Équipe en place" id="team1" required>
                            <label class="form-check-label" for="team1">Équipe en place</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="team_status" value="Business prêt à être repris en solo" id="team2">
                            <label class="form-check-label" for="team2">Business prêt à être repris en solo</label>
                        </div>
                    </div>
                </x-form-step>

                <!-- Étape 4: Proposition de Valeur -->
                <x-form-step step="4" title="Proposition de Valeur - Pourquoi votre projet est un must-have ?" icon="gem">
                    <x-form-field name="unique_value" label="Qu'est-ce qui rend votre business unique et irrésistible pour un acheteur potentiel ?" type="textarea" rows="3" required placeholder="Détaillez ce qui fait la différence..." />
                    
                    <label class="form-label">Quel est le prix que vous avez en tête pour vendre ce projet ? <span class="text-danger">*</span></label>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="selling_price" value="Moins de 10 000 €" id="price1" required>
                            <label class="form-check-label" for="price1">Moins de 10 000 €</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="selling_price" value="Entre 10 000 € et 50 000 €" id="price2">
                            <label class="form-check-label" for="price2">Entre 10 000 € et 50 000 €</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="selling_price" value="Plus de 50 000 €" id="price3">
                            <label class="form-check-label" for="price3">Plus de 50 000 €</label>
                        </div>
                    </div>
                    
                    <x-form-field name="included_in_purchase" label="Que comprend exactement l'achat ?" type="textarea" rows="3" required placeholder="Ex : Clients existants, stock, manuel d'opération, support..." />
                    
                    <x-form-field name="tv_slogan" label="Si votre business devait apparaître dans une pub télé, quel serait le slogan ?" placeholder="Votre slogan percutant..." />
                </x-form-step>

                <!-- Étape 5: Support et Suivi -->
                <x-form-step step="5" title="Support et Suivi - Vous accompagnez l'acheteur ?" icon="hands-helping">
                    <label class="form-label">Seriez-vous prêt à accompagner l'acheteur avec une formation initiale ou des conseils ? <span class="text-danger">*</span></label>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="buyer_support" value="Oui, je suis ouvert à l'accompagnement initial" id="support1" required>
                            <label class="form-check-label" for="support1">Oui, je suis ouvert à l'accompagnement initial</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="buyer_support" value="Non, je préfère tout céder d'un coup" id="support2">
                            <label class="form-check-label" for="support2">Non, je préfère tout céder d'un coup</label>
                        </div>
                    </div>
                    
                    <label class="form-label">Avez-vous déjà des partenaires, fournisseurs, ou collaborateurs avec qui l'acheteur pourrait travailler ? <span class="text-danger">*</span></label>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="partners_available" value="Oui, ils sont prêts à collaborer" id="partners1" required>
                            <label class="form-check-label" for="partners1">Oui, ils sont prêts à collaborer</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="partners_available" value="Non, mais je peux fournir des contacts utiles" id="partners2">
                            <label class="form-check-label" for="partners2">Non, mais je peux fournir des contacts utiles</label>
                        </div>
                    </div>
                </x-form-step>

                <!-- Étape 6: Fun -->
                <x-form-step step="6" title="Un peu de fun pour terminer !" icon="smile">
                    <x-form-field name="business_in_3_words" label="Si vous deviez résumer votre business en 3 mots, quels seraient-ils ?" placeholder="Mot 1, Mot 2, Mot 3" />
                    
                    <x-form-field name="elon_musk_pitch" label="Imaginez que vous deviez convaincre Elon Musk d'acheter votre business en 30 secondes, que lui diriez-vous ?" type="textarea" rows="3" placeholder="Votre pitch à Elon Musk..." />
                    
                    <x-form-field name="next_project" label="Quel serait votre prochain projet si vous vendiez celui-ci ?" type="textarea" rows="2" placeholder="Racontez-nous votre prochain rêve entrepreneurial..." />
                    
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
                <h5 style="color: var(--primary-color); font-weight: 600;">🎉 Merci de nous avoir soumis votre projet !</h5>
                <p style="margin-bottom: 0;">
                    Notre équipe analysera votre candidature et vous recevrez une réponse sous <strong>10 jours ouvrés</strong>. 
                    Si votre business est sélectionné, il sera publié sur notre marketplace et mis en vente. 
                    ZeroInvestissement.com est prêt à vous accompagner pour que votre projet rencontre son futur propriétaire idéal !
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
    const totalSteps = 6;
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
    });

    showStep(currentStep);
});
</script>
@endpush
@endsection
