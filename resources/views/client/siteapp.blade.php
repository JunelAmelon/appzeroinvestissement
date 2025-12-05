@extends('layouts.app')

@section('title', 'Mon Site/Application')
@section('page-title', 'Questionnaire Mon Site/Appli')
@section('page-subtitle', 'Transformons votre idée en réalité !')

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
        <x-card title="Mon Site/Application" icon="globe">
            
            <!-- Message d'introduction -->
            <div class="alert alert-info mb-4" style="background: var(--primary-color); border: none; border-radius: 12px; box-shadow: 0 4px 12px rgba(106, 0, 184, 0.3);">
                <h5 style="color: white; font-weight: 600;">🎉 Bienvenue dans notre questionnaire interactif !</h5>
                <p style="margin-bottom: 0; color: rgba(255, 255, 255, 0.95);">
                    Chez <strong style="color: white;">ZeroInvestissement.com</strong>, on adore transformer des idées en réalité, surtout quand elles sont brillantes comme la vôtre ! 
                    Pour qu'on puisse bien comprendre votre projet et votre motivation, répondez à ces quelques questions. 
                    <strong>C'est parti, amusez-vous et soyez créatif, on vous attend avec impatience !</strong>
                </p>
            </div>
            
            <form method="POST" action="{{ route('siteapp.save') }}" id="multiStepForm" class="needs-validation" novalidate>
                @csrf

                <!-- Étape 1: L'Idée qui va tout changer -->
                <div class="form-step active" data-step="1">
                    <div class="form-section-title">
                        <i class="fas fa-lightbulb me-2"></i>L'Idée qui va tout changer
                    </div>
                    <div class="divider"></div>

                    <x-form-field name="name" label="Nom de votre projet (soyez créatif !)" required />
                    
                    <x-form-field name="description" label="En une phrase, décrivez votre idée comme si vous la pitchiez à un alien" type="textarea" rows="3" required placeholder="Imaginez expliquer votre projet à quelqu'un qui vient d'une autre planète..." />
                    
                    <x-form-field name="animal" label="Si votre projet était un animal, lequel serait-il et pourquoi ?" type="textarea" rows="2" required placeholder="Ex: Un guépard, parce que mon projet est rapide et efficace !" />
                    
                    <x-form-field name="problem" label="Quel est le problème majeur que votre idée va résoudre ?" type="textarea" rows="3" required placeholder="On adore les solutions aux problèmes !" />
                    
                    <label class="form-label">Fonctionnalité phare : Quelle est LA fonctionnalité qui rendra votre site ou appli indispensable ? <span class="text-danger">*</span></label>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="features[]" value="Vente en ligne" id="feat1">
                            <label class="form-check-label" for="feat1">Vente en ligne</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="features[]" value="Réservation" id="feat2">
                            <label class="form-check-label" for="feat2">Réservation</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="features[]" value="Service innovant" id="feat3">
                            <label class="form-check-label" for="feat3">Service innovant</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="features[]" value="Autre" id="feat4">
                            <label class="form-check-label" for="feat4">Autre</label>
                        </div>
                    </div>
                    
                    <x-form-field name="main_feature" label="Décrivez votre fonctionnalité principale" type="textarea" rows="2" required placeholder="Si vous avez des idées n'hésitez pas à rajouter des choses" />
                </div>

                <!-- Étape 2: Pourquoi cette idée est LA bonne -->
                <div class="form-step" data-step="2">
                    <div class="form-section-title">
                        <i class="fas fa-star me-2"></i>Pourquoi cette idée est-elle LA bonne ?
                    </div>
                    <div class="divider"></div>

                    <x-form-field name="idea_origin" label="Comment vous est venue cette idée ?" type="textarea" rows="3" required placeholder="Coup de génie en pleine nuit, inspiration de la vie quotidienne, ou conversation avec votre chat ?" />
                    
                    <x-form-field name="why_good" label="En une phrase, pourquoi pensez-vous que votre idée est meilleure que ce qui existe déjà ?" type="textarea" rows="2" required />
                    
                    <x-form-field name="excitement" label="Qu'est-ce qui vous rend super excité à l'idée de lancer ce projet ?" type="textarea" rows="3" required placeholder="On veut sentir votre passion à travers l'écran !" />
                    
                    <x-form-field name="fallback_plan" label="Quel est votre plan B si tout ne se passe pas comme prévu ?" type="textarea" rows="3" required placeholder="Ne vous inquiétez pas, c'est juste pour être prêt à tout !" />
                </div>

                <!-- Étape 3: Vision du futur - Rentabilité -->
                <div class="form-step" data-step="3">
                    <div class="form-section-title">
                        <i class="fas fa-chart-line me-2"></i>Votre vision du futur : la rentabilité
                    </div>
                    <div class="divider"></div>

                    <x-form-field name="revenue_model" label="Comment votre projet va-t-il rapporter des sous ?" type="textarea" rows="3" required placeholder="ex : Vente directe, abonnements, publicité... soyez clair !" />
                    
                    <label class="form-label">Combien de personnes pensez-vous que votre projet touchera dans sa première année ? <span class="text-danger">*</span></label>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="target_audience_size" value="Moins de 1 000" id="aud1" required>
                            <label class="form-check-label" for="aud1">Moins de 1 000</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="target_audience_size" value="Entre 1 000 et 10 000" id="aud2">
                            <label class="form-check-label" for="aud2">Entre 1 000 et 10 000</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="target_audience_size" value="Plus de 10 000" id="aud3">
                            <label class="form-check-label" for="aud3">Plus de 10 000</label>
                        </div>
                    </div>
                    
                    <label class="form-label">D'ici 2 ans, votre projet aura généré... <span class="text-danger">*</span></label>
                    <p class="text-muted small">(une estimation amusante mais réaliste !)</p>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="revenue_2years" value="10 000 €" id="rev1" required>
                            <label class="form-check-label" for="rev1">10 000 €</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="revenue_2years" value="50 000 €" id="rev2">
                            <label class="form-check-label" for="rev2">50 000 €</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="revenue_2years" value="Plus de 100 000 €" id="rev3">
                            <label class="form-check-label" for="rev3">Plus de 100 000 €</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="revenue_2years" value="Ça va exploser tous les compteurs !" id="rev4">
                            <label class="form-check-label" for="rev4">Ça va exploser tous les compteurs, vous allez voir !</label>
                        </div>
                    </div>
                </div>

                <!-- Étape 4: Public cible et stratégie marketing -->
                <div class="form-step" data-step="4">
                    <div class="form-section-title">
                        <i class="fas fa-users me-2"></i>Public cible et stratégie marketing
                    </div>
                    <div class="divider"></div>

                    <x-form-field name="target_customers" label="Votre cible idéale : Décrivez votre client idéal comme si c'était votre meilleur ami" type="textarea" rows="3" required placeholder="âge, centres d'intérêt, comportements..." />
                    
                    <x-form-field name="competition" label="Avez-vous déjà pensé à une stratégie pour atteindre ces personnes ? Si oui, laquelle ?" type="textarea" rows="3" required placeholder="Campagne publicitaire, réseaux sociaux, influenceurs ?" />
                    
                    <label class="form-label">Si vous deviez choisir une plateforme de réseaux sociaux pour promouvoir votre projet, laquelle serait-elle ? <span class="text-danger">*</span></label>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="social_platform" value="Instagram" id="soc1" required>
                            <label class="form-check-label" for="soc1">Instagram</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="social_platform" value="TikTok" id="soc2">
                            <label class="form-check-label" for="soc2">TikTok</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="social_platform" value="LinkedIn" id="soc3">
                            <label class="form-check-label" for="soc3">LinkedIn</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="social_platform" value="Facebook" id="soc4">
                            <label class="form-check-label" for="soc4">Facebook</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="social_platform" value="Autre" id="soc5">
                            <label class="form-check-label" for="soc5">Autre</label>
                        </div>
                    </div>
                </div>

                <!-- Étape 5: Rentabilité et Engagement -->
                <div class="form-step" data-step="5">
                    <div class="form-section-title">
                        <i class="fas fa-handshake me-2"></i>Rentabilité et Engagement
                    </div>
                    <div class="divider"></div>

                    <label class="form-label">Êtes-vous prêt à vous engager à 100% pour faire grandir ce projet ? <span class="text-danger">*</span></label>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="full_engagement" value="Oui, je suis à fond !" id="eng1" required>
                            <label class="form-check-label" for="eng1">Oui, je suis à fond !</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="full_engagement" value="Oui, mais je continue d'autres projets en parallèle" id="eng2">
                            <label class="form-check-label" for="eng2">Oui, mais je continue d'autres projets en parallèle</label>
                        </div>
                    </div>
                    
                    <label class="form-label">Quelles sont vos disponibilités ? <span class="text-danger">*</span></label>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="availability" value="Temps plein" id="avail1" required>
                            <label class="form-check-label" for="avail1">Temps plein</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="availability" value="Temps partiel" id="avail2">
                            <label class="form-check-label" for="avail2">Temps partiel</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="availability" value="Pendant mes soirées/week-ends" id="avail3">
                            <label class="form-check-label" for="avail3">Pendant mes soirées/week-ends</label>
                        </div>
                    </div>
                    
                    <label class="form-label">Avez-vous des fonds, investisseurs ou partenaires prêts à vous soutenir ? <span class="text-danger">*</span></label>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="funding_status" value="Oui, j'ai déjà des investisseurs" id="fund1" required>
                            <label class="form-check-label" for="fund1">Oui, j'ai déjà des investisseurs</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="funding_status" value="Pas encore, mais je suis prêt à en chercher" id="fund2">
                            <label class="form-check-label" for="fund2">Pas encore, mais je suis prêt à en chercher</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="funding_status" value="Non, je compte sur ZeroInvestissement.com !" id="fund3">
                            <label class="form-check-label" for="fund3">Non, je compte sur ZeroInvestissement.com !</label>
                        </div>
                    </div>
                    
                    <x-form-field name="project_pitch" label="Si vous deviez vendre votre idée à un investisseur en une phrase, que diriez-vous ?" type="textarea" rows="3" required />
                </div>

                <!-- Étape 6: Laissez votre créativité parler - Le design -->
                <div class="form-step" data-step="6">
                    <div class="form-section-title">
                        <i class="fas fa-palette me-2"></i>Laissez votre créativité parler : le design
                    </div>
                    <div class="divider"></div>

                    <label class="form-label">Quelle couleur dominante verriez-vous pour votre projet ? <span class="text-danger">*</span></label>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="dominant_color" value="Rouge" id="col1" required>
                            <label class="form-check-label" for="col1">Rouge (passion, énergie)</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="dominant_color" value="Bleu" id="col2">
                            <label class="form-check-label" for="col2">Bleu (confiance, calme)</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="dominant_color" value="Vert" id="col3">
                            <label class="form-check-label" for="col3">Vert (nature, fraîcheur)</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="dominant_color" value="Noir" id="col4">
                            <label class="form-check-label" for="col4">Noir (élégance, sophistication)</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="dominant_color" value="Autre" id="col5">
                            <label class="form-check-label" for="col5">Autre</label>
                        </div>
                    </div>
                    
                    <x-form-field name="design_style" label="Quel type de design vous attire le plus ?" type="text" required placeholder="ex : minimaliste, coloré, vintage, moderne..." />
                    
                    <x-form-field name="tech_requirements" label="Quels sont les sites ou applications qui vous inspirent au niveau du design ?" type="textarea" rows="3" required placeholder="Listez quelques exemples pour nous donner une idée de votre vision" />
                    
                    <label class="form-label">Avez-vous déjà des éléments graphiques (logo, charte graphique) prêts ? <span class="text-danger">*</span></label>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="graphic_elements" value="Oui, tout est prêt !" id="gfx1" required>
                            <label class="form-check-label" for="gfx1">Oui, tout est prêt !</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="graphic_elements" value="Non, j'aurais besoin d'aide pour ça" id="gfx2">
                            <label class="form-check-label" for="gfx2">Non, j'aurais besoin d'aide pour ça</label>
                        </div>
                    </div>
                </div>

                <!-- Étape 7: Technique et plateformes -->
                <div class="form-step" data-step="7">
                    <div class="form-section-title">
                        <i class="fas fa-cogs me-2"></i>Technique et plateformes
                    </div>
                    <div class="divider"></div>

                    <label class="form-label">Vous souhaitez développer... <span class="text-danger">*</span></label>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="support_type" value="Un site web" id="sup1" required>
                            <label class="form-check-label" for="sup1">Un site web</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="support_type" value="Une application mobile" id="sup2">
                            <label class="form-check-label" for="sup2">Une application mobile</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="support_type" value="Les deux" id="sup3">
                            <label class="form-check-label" for="sup3">Les deux (site + application)</label>
                        </div>
                    </div>
                    
                    <label class="form-label">Sur quelles plateformes souhaitez-vous que votre application soit disponible ?</label>
                    <p class="text-muted small">(Si vous avez choisi "application mobile" ci-dessus)</p>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="platforms[]" value="Android" id="plt1">
                            <label class="form-check-label" for="plt1">Android</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="platforms[]" value="iOS" id="plt2">
                            <label class="form-check-label" for="plt2">iOS</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="platforms[]" value="Les deux" id="plt3">
                            <label class="form-check-label" for="plt3">Les deux</label>
                        </div>
                    </div>
                    
                    <x-form-field name="secondary_feature" label="Avez-vous des exigences spécifiques concernant la technologie ou l'hébergement de votre projet ?" type="textarea" rows="3" placeholder="ex : hébergement sécurisé, performance, compatibilité mobile..." />
                </div>

                <!-- Étape 8: Un peu plus sur vous -->
                <div class="form-step" data-step="8">
                    <div class="form-section-title">
                        <i class="fas fa-user-astronaut me-2"></i>Un peu plus sur vous
                    </div>
                    <div class="divider"></div>

                    <x-form-field name="entrepreneur_superpower" label="Si vous aviez un superpouvoir en tant qu'entrepreneur, ce serait quoi ?" type="text" required placeholder="ex : la persévérance, la créativité, le réseautage..." />
                    
                    <x-form-field name="hobbies" label="Quels sont vos hobbies ou passions en dehors de votre projet ?" type="text" required placeholder="Nous aimons connaître nos porteurs de projet !" />
                    
                    <x-form-field name="role_model" label="Qui est votre modèle en termes d'entrepreneuriat ou de réussite ?" type="text" required placeholder="ex : Steve Jobs, Oprah Winfrey, votre grand-mère..." />
                    
                    <x-form-field name="success_celebration" label="Si votre projet atteint ses objectifs, comment célèbrerez-vous ce succès ?" type="textarea" rows="3" required placeholder="On veut tous savoir !" />
                    
                    <div class="alert" style="background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%); color: white; border: none; margin-top: 20px;">
                        <i class="fas fa-heart me-2"></i>
                        <strong>Merci d'avoir joué le jeu !</strong><br>
                        Nous allons analyser votre projet avec attention et vous recevrez une réponse sous <strong>10 jours ouvrés</strong>.<br>
                        Votre idée mérite d'être portée, et nous sommes là pour vous accompagner. Prêt à passer à l'action ? Cliquez sur Soumettre !
                    </div>
                </div>

                <!-- Navigation Buttons -->
                <div class="mt-4 pt-3 d-flex justify-content-between">
                    <div>
                        <a href="/projects" class="btn btn-outline-secondary" id="backToProjectsBtn">
                            <i class="fas fa-arrow-left me-2"></i>Retour à la sélection
                        </a>
                        <button type="button" class="btn btn-secondary" id="prevBtn" style="display: none;">
                            <i class="fas fa-arrow-left me-2"></i>Précédent
                        </button>
                    </div>
                    <div class="ms-auto">
                        <button type="button" class="btn" id="nextBtn" style="background: var(--primary-color); color: white;">
                            Suivant<i class="fas fa-arrow-right ms-2"></i>
                        </button>
                        <button type="submit" class="btn" id="submitBtn" style="background: var(--primary-color); color: white; display: none;">
                            <i class="fas fa-paper-plane me-2"></i>Soumettre le Projet
                        </button>
                    </div>
                </div>
            </form>
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

<script>
document.addEventListener('DOMContentLoaded', function() {
    let currentStep = 1;
    const totalSteps = 8;
    const form = document.getElementById('multiStepForm');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    const submitBtn = document.getElementById('submitBtn');

    function showStep(step) {
        // Hide all steps
        document.querySelectorAll('.form-step').forEach(s => s.classList.remove('active'));
        
        // Show current step
        document.querySelector(`.form-step[data-step="${step}"]`).classList.add('active');
        
        // Update buttons
        const backToProjectsBtn = document.getElementById('backToProjectsBtn');
        backToProjectsBtn.style.display = step === 1 ? 'inline-block' : 'none';
        prevBtn.style.display = step === 1 ? 'none' : 'inline-block';
        nextBtn.style.display = step === totalSteps ? 'none' : 'inline-block';
        submitBtn.style.display = step === totalSteps ? 'inline-block' : 'none';
        
        // Scroll to top
        window.scrollTo({ top: 0, behavior: 'smooth' });
    }

    function validateStep(step) {
        const currentStepElement = document.querySelector(`.form-step[data-step="${step}"]`);
        const inputs = currentStepElement.querySelectorAll('input[required], textarea[required], select[required]');
        let isValid = true;

        inputs.forEach(input => {
            // Check for radio buttons
            if (input.type === 'radio') {
                const radioName = input.name;
                const radioGroup = currentStepElement.querySelectorAll(`input[name="${radioName}"]`);
                const isChecked = Array.from(radioGroup).some(r => r.checked);
                if (!isChecked) {
                    radioGroup.forEach(r => r.classList.add('is-invalid'));
                    isValid = false;
                } else {
                    radioGroup.forEach(r => r.classList.remove('is-invalid'));
                }
            } 
            // Check for checkboxes with required attribute
            else if (input.type === 'checkbox' && input.hasAttribute('required')) {
                if (!input.checked) {
                    input.classList.add('is-invalid');
                    isValid = false;
                } else {
                    input.classList.remove('is-invalid');
                }
            }
            // Check other inputs
            else if (input.type !== 'checkbox' && input.type !== 'radio') {
                if (!input.value.trim()) {
                    input.classList.add('is-invalid');
                    isValid = false;
                } else {
                    input.classList.remove('is-invalid');
                }
            }
        });

        return isValid;
    }

    nextBtn.addEventListener('click', function() {
        if (validateStep(currentStep)) {
            currentStep++;
            showStep(currentStep);
        } else {
            // Show error message
            alert('Veuillez remplir tous les champs obligatoires avant de continuer.');
        }
    });

    prevBtn.addEventListener('click', function() {
        currentStep--;
        showStep(currentStep);
    });

    // Initialize
    showStep(1);
});
</script>
@endsection

