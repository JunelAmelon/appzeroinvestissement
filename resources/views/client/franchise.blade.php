@extends('layouts.app')

@section('title', 'Ma Franchise')
@section('page-title', 'Questionnaire Franchise')
@section('page-subtitle', 'Transformez votre entreprise en franchise à succès')

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
        <x-card title="Ma Franchise" icon="store">
            <form method="POST" action="{{ route('franchise.save') }}" id="multiStepForm" class="needs-validation" novalidate>
                @csrf

                <!-- Étape 1: Votre Entreprise Actuelle -->
                <x-form-step step="1" title="Votre Entreprise Actuelle - Montrez-nous ce que vous avez !" icon="building">
                    <x-form-field name="business_name" label="Nom de votre entreprise" required placeholder="Le nom de votre entreprise..." />
                    <x-form-field name="name_reason" label="Pourquoi ce nom ?" type="textarea" rows="2" placeholder="Expliquez le choix de ce nom..." />
                    
                    <x-form-field name="character_comparison" label="Si votre entreprise était un personnage de film, lequel serait-ce ?" required placeholder="Ex: Iron Man, Wonder Woman..." />
                    <x-form-field name="movie_character" label="Et pourquoi ?" type="textarea" rows="2" placeholder="Expliquez cette comparaison..." />
                    
                    <x-form-field name="activity_description" label="Décrivez votre activité en une phrase, comme si vous deviez l'expliquer à un enfant de 5 ans" type="textarea" rows="2" required placeholder="Une explication simple et claire..." />
                    
                    <label class="form-label">Depuis combien de temps votre entreprise existe-t-elle ? <span class="text-danger">*</span></label>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="business_age" value="Moins d'un an" id="age1" required>
                            <label class="form-check-label" for="age1">Moins d'un an</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="business_age" value="1 à 3 ans" id="age2">
                            <label class="form-check-label" for="age2">1 à 3 ans</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="business_age" value="Plus de 3 ans" id="age3">
                            <label class="form-check-label" for="age3">Plus de 3 ans</label>
                        </div>
                    </div>
                    
                    <x-form-field name="sector" label="Quel est votre secteur d'activité ?" required placeholder="Ex : restauration, beauté, services, retail, etc." />
                    
                    <x-form-field name="key_products" label="Quels sont les 3 produits/services phares de votre entreprise qui la rendent unique ?" type="textarea" rows="3" required placeholder="Listez les 3 produits/services principaux..." />
                </x-form-step>

                <!-- Étape 2: Le Succès -->
                <x-form-step step="2" title="Le Succès - Racontez-nous votre aventure !" icon="trophy">
                    <x-form-field name="proudest_achievement" label="Votre entreprise cartonne, mais quelle est la plus grande réussite dont vous êtes fier ?" type="textarea" rows="3" required placeholder="Prix, gros contrat, super croissance... Impressionnez-nous !" />
                    
                    <label class="form-label">Combien de clients avez-vous servi jusqu'à aujourd'hui ? <span class="text-danger">*</span></label>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="customer_count" value="Moins de 100" id="cust1" required>
                            <label class="form-check-label" for="cust1">Moins de 100</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="customer_count" value="100 à 500" id="cust2">
                            <label class="form-check-label" for="cust2">100 à 500</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="customer_count" value="Plus de 500" id="cust3">
                            <label class="form-check-label" for="cust3">Plus de 500</label>
                        </div>
                    </div>
                    
                    <label class="form-label">Quel est votre chiffre d'affaires actuel ? <span class="text-danger">*</span></label>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="current_revenue" value="Moins de 100 000 €" id="rev1" required>
                            <label class="form-check-label" for="rev1">Moins de 100 000 €</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="current_revenue" value="Entre 100 000 € et 500 000 €" id="rev2">
                            <label class="form-check-label" for="rev2">Entre 100 000 € et 500 000 €</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="current_revenue" value="Plus de 500 000 €" id="rev3">
                            <label class="form-check-label" for="rev3">Plus de 500 000 €</label>
                        </div>
                    </div>
                    
                    <label class="form-label">Sur une échelle de 1 à 10, comment évaluez-vous la scalabilité de votre modèle ? <span class="text-danger">*</span></label>
                    <p class="text-muted small">(Indice : Scalabilité = possibilité de reproduire facilement votre concept ailleurs)</p>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="scalability_score" value="1" id="scale1" required>
                            <label class="form-check-label" for="scale1">1 : Pas encore prêt à se déployer</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="scalability_score" value="5" id="scale5">
                            <label class="form-check-label" for="scale5">5 : Ça pourrait marcher ailleurs</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="scalability_score" value="10" id="scale10">
                            <label class="form-check-label" for="scale10">10 : Mon modèle est prêt à conquérir le monde !</label>
                        </div>
                    </div>
                </x-form-step>

                <!-- Étape 3: Le Grand Saut -->
                <x-form-step step="3" title="Le Grand Saut - Pourquoi franchiser votre entreprise ?" icon="rocket">
                    <label class="form-label">Pourquoi souhaitez-vous transformer votre entreprise en franchise ? <span class="text-danger">*</span></label>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="franchise_motivation" value="Accroître ma visibilité" id="mot1" required>
                            <label class="form-check-label" for="mot1">Accroître ma visibilité</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="franchise_motivation" value="Augmenter mon chiffre d'affaires" id="mot2">
                            <label class="form-check-label" for="mot2">Augmenter mon chiffre d'affaires</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="franchise_motivation" value="Partager mon succès avec d'autres entrepreneurs" id="mot3">
                            <label class="form-check-label" for="mot3">Partager mon succès avec d'autres entrepreneurs</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="franchise_motivation" value="Autre" id="mot4">
                            <label class="form-check-label" for="mot4">Autre</label>
                        </div>
                    </div>
                    
                    <x-form-field name="excitement_reason" label="Qu'est-ce qui vous excite le plus à l'idée de voir votre marque à plusieurs endroits ?" type="textarea" rows="2" required placeholder="Partagez votre enthousiasme..." />
                    
                    <label class="form-label">Votre entreprise est-elle déjà implantée dans plusieurs villes/régions ? <span class="text-danger">*</span></label>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="current_locations" value="Oui" id="loc1" required>
                            <label class="form-check-label" for="loc1">Oui</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="current_locations" value="Non, mais c'est le rêve !" id="loc2">
                            <label class="form-check-label" for="loc2">Non, mais c'est le rêve !</label>
                        </div>
                    </div>
                    
                    <label class="form-label">Avez-vous déjà une idée du nombre de franchises que vous souhaitez lancer dans les 3 prochaines années ? <span class="text-danger">*</span></label>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="franchise_target" value="1" id="targ1" required>
                            <label class="form-check-label" for="targ1">1 à 5 franchises</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="franchise_target" value="5" id="targ5">
                            <label class="form-check-label" for="targ5">5 à 10 franchises</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="franchise_target" value="10" id="targ10">
                            <label class="form-check-label" for="targ10">Plus de 10 franchises, je vise grand !</label>
                        </div>
                    </div>
                </x-form-step>

                <!-- Étape 4: Les Détails qui Comptent -->
                <x-form-step step="4" title="Les Détails qui Comptent - Scalabilité et Potentiel" icon="chart-line">
                    <x-form-field name="franchise_reproducibility" label="Comment votre entreprise peut-elle être reproduite facilement dans d'autres villes ou pays ?" type="textarea" rows="3" required placeholder="Décrivez-nous en quoi votre modèle est adaptable et duplicable..." />
                    
                    <x-form-field name="key_resources" label="Quelles sont les ressources clés nécessaires pour lancer une franchise de votre entreprise ?" type="textarea" rows="3" required placeholder="Ex : Personnel, matériel spécifique, formation..." />
                    
                    <x-form-field name="sector_growth" label="Votre secteur est-il en pleine croissance ?" type="textarea" rows="2" required placeholder="Expliquez-nous pourquoi c'est le bon moment de franchiser dans votre domaine..." />
                    
                    <x-form-field name="market_study" label="Avez-vous déjà envisagé des données géographiques ou des études de marché pour vos futures implantations ?" type="textarea" rows="2" required placeholder="Ex : population cible, concurrence locale..." />
                </x-form-step>

                <!-- Étape 5: Valeurs et Vision -->
                <x-form-step step="5" title="Valeurs et Vision - C'est là qu'on connecte !" icon="heart">
                    <x-form-field name="company_values" label="Quelles sont les valeurs clés de votre entreprise ?" type="textarea" rows="2" required placeholder="Innovation, respect, qualité, service client... dites-nous ce qui vous fait vibrer" />
                    
                    <x-form-field name="company_motto" label="Si votre entreprise était une devise inspirante, ce serait..." placeholder="Votre devise inspirante..." />
                    
                    <x-form-field name="values_importance" label="En quoi ces valeurs seront-elles essentielles pour vos futurs franchisés ?" type="textarea" rows="2" placeholder="Pourquoi est-ce important qu'ils partagent ces valeurs ?" />
                    
                    <x-form-field name="franchisee_requirements" label="Que recherchez-vous chez un futur franchisé ?" type="textarea" rows="3" required placeholder="Engagement, passion, vision d'ensemble... on veut savoir !" />
                </x-form-step>

                <!-- Étape 6: Data et Stratégie -->
                <x-form-step step="6" title="Data et Stratégie - La partie sérieuse mais essentielle" icon="database">
                    <label class="form-label">Connaissez-vous les principaux concurrents dans les zones où vous souhaitez vous implanter ? <span class="text-danger">*</span></label>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="competitors" value="Oui, je les ai bien identifiés" id="comp1" required>
                            <label class="form-check-label" for="comp1">Oui, je les ai bien identifiés</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="competitors" value="Non, pas encore" id="comp2">
                            <label class="form-check-label" for="comp2">Non, pas encore</label>
                        </div>
                    </div>
                    
                    <x-form-field name="location_data" label="Disposez-vous déjà de données d'analyse pour identifier les meilleures zones d'implantation ?" type="textarea" rows="2" required placeholder="Population, revenu moyen, etc." />
                    
                    <label class="form-label">Si non, aimeriez-vous que ZeroInvestissement.com vous aide à analyser ces données pour trouver les meilleurs emplacements ? <span class="text-danger">*</span></label>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="market_study" value="Oui, j'ai besoin d'aide !" id="help1" required>
                            <label class="form-check-label" for="help1">Oui, j'ai besoin d'aide !</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="market_study" value="Non, j'ai déjà tout ce qu'il me faut" id="help2">
                            <label class="form-check-label" for="help2">Non, j'ai déjà tout ce qu'il me faut</label>
                        </div>
                    </div>
                </x-form-step>

                <!-- Étape 7: La Gestion et l'Accompagnement -->
                <x-form-step step="7" title="La Gestion et l'Accompagnement - Allons-nous bien bosser ensemble ?" icon="handshake">
                    <label class="form-label">Quel rôle souhaitez-vous jouer dans le développement de votre franchise ? <span class="text-danger">*</span></label>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="franchise_motivation" value="Gérer tous les aspects avec nos conseils" id="role1" required>
                            <label class="form-check-label" for="role1">Gérer tous les aspects avec nos conseils</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="franchise_motivation" value="Déléguer une partie à nos experts" id="role2">
                            <label class="form-check-label" for="role2">Déléguer une partie à nos experts, tout en gardant un œil sur les opérations</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="franchise_motivation" value="Laisser ZeroInvestissement.com gérer entièrement" id="role3">
                            <label class="form-check-label" for="role3">Laisser ZeroInvestissement.com gérer entièrement le développement et l'accompagnement</label>
                        </div>
                    </div>
                    
                    <x-form-field name="franchisee_training" label="Comment imaginez-vous la formation de vos futurs franchisés ?" type="textarea" rows="3" required placeholder="Structure, contenu, durée... partagez-nous votre vision" />
                    
                    <x-form-field name="tools" label="Quels sont les outils essentiels que vous pensez devoir fournir à vos franchisés ?" type="textarea" rows="3" required placeholder="Ex : Manuels d'opération, outils marketing, formations..." />
                </x-form-step>

                <!-- Étape 8: L'aventure commence ! -->
                <x-form-step step="8" title="L'aventure commence ! - On s'amuse un peu" icon="smile">
                    <x-form-field name="business_song" label="Si votre entreprise était une chanson, laquelle serait-ce et pourquoi ?" type="textarea" rows="2" placeholder="La chanson et pourquoi..." />
                    
                    <x-form-field name="success_plan" label="Imaginez que votre entreprise devienne la franchise la plus célèbre du pays, quelle serait la première chose que vous feriez ?" type="textarea" rows="2" required placeholder="Votre première action en cas de succès..." />
                    
                    <x-form-field name="famous_franchise_lunch" label="Si vous deviez déjeuner avec une autre grande marque franchisée pour obtenir des conseils, laquelle choisiriez-vous et pourquoi ?" type="textarea" rows="3" placeholder="La marque et pourquoi..." />
                    
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
                <h5 style="color: var(--primary-color); font-weight: 600;">🎉 Merci d'avoir partagé votre vision !</h5>
                <p style="margin-bottom: 0;">
                    Notre équipe d'experts analysera votre projet avec attention et vous recevrez une réponse sous <strong>15 jours ouvrés</strong>. 
                    Si votre modèle est validé, ZeroInvestissement.com vous accompagnera pour faire de votre entreprise la prochaine grande franchise, sans investissement de votre part. 
                    <strong>On est prêts à vous propulser vers le succès, et vous ?</strong>
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
    const totalSteps = 8;
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
