@extends('layouts.app')

@section('title', 'Marketplace')
@section('page-title', 'Soumettre un Projet')
@section('page-subtitle', 'Partagez votre opportunité commerciale')

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
        <x-card title="Marketplace" icon="shopping-cart">
            
            <!-- Message d'introduction -->
            <div class="alert alert-info mb-4" style="background: var(--primary-color); border: none; border-radius: 12px; box-shadow: 0 4px 12px rgba(106, 0, 184, 0.3);">
                <h5 style="color: white; font-weight: 600;">🚀 Partagez votre opportunité commerciale</h5>
                <p style="margin-bottom: 0; color: rgba(255, 255, 255, 0.95);">
                    Chez <strong style="color: white;">ZeroInvestissement.com</strong>, nous accompagnons les entrepreneurs dans leurs projets de marketplace. 
                    Répondez à ces questions pour nous aider à comprendre votre vision et vos objectifs.
                    <strong>Prenez le temps de détailler votre projet, nous sommes là pour vous aider !</strong>
                </p>
            </div>
            
            <form method="POST" action="{{ route('marketplace.save') }}" id="multiStepForm" class="needs-validation" novalidate>
                @csrf

                <!-- Étape 1: Informations Entreprise -->
                <div class="form-step active" data-step="1">
                    <div class="form-section-title">
                        <i class="fas fa-building me-2"></i>Informations de l'Entreprise
                    </div>
                    <div class="divider"></div>

                    <div class="row row-cols-1 row-cols-md-2 g-3">
                        <div>
                            <x-form-field name="business_name" label="Nom de l'Entreprise" required />
                        </div>
                        <div>
                            <x-form-field name="business_animal" label="Animal Représentatif" required />
                        </div>
                    </div>

                    <x-form-field name="attraction_reason" label="Raison d'Attraction pour cette Entreprise" type="textarea" rows="3" required />
                </div>

                <!-- Étape 2: Conviction & Motivation -->
                <div class="form-step" data-step="2">
                    <div class="form-section-title">
                        <i class="fas fa-fire me-2"></i>Conviction & Motivation
                    </div>
                    <div class="divider"></div>

                    <x-form-field name="conviction_score" label="Score de Conviction (0-100)" type="number" required />
                    <x-form-field name="business_motivation" label="Motivation Professionnelle" type="textarea" rows="3" required />
                    <x-form-field name="entrepreneurial_approach" label="Approche Entrepreneuriale" type="textarea" rows="3" required />
                    <x-form-field name="personal_strengths" label="Forces Personnelles" type="textarea" rows="3" required />
                </div>

                <!-- Étape 3: Financement & Budget -->
                <div class="form-step" data-step="3">
                    <div class="form-section-title">
                        <i class="fas fa-dollar-sign me-2"></i>Financement & Budget
                    </div>
                    <div class="divider"></div>

                    <x-form-field name="financing_plan" label="Plan de Financement" type="textarea" rows="3" required />

                    <div class="row row-cols-1 row-cols-md-2 g-3">
                        <div>
                            <x-form-field name="budget" label="Budget Disponible" type="number" step="0.01" required />
                        </div>
                        <div>
                            <x-form-field 
                                name="financing_help" 
                                label="Avez-vous besoin d'aide au financement ?" 
                                type="select"
                                :options="['1' => 'Oui', '0' => 'Non']"
                                required 
                            />
                        </div>
                    </div>
                </div>

                <!-- Étape 4: Stratégie & Actions -->
                <div class="form-step" data-step="4">
                    <div class="form-section-title">
                        <i class="fas fa-chess me-2"></i>Stratégie & Actions
                    </div>
                    <div class="divider"></div>

                    <x-form-field name="post_acquisition_action" label="Actions Post-Acquisition" type="textarea" rows="3" required />
                    <x-form-field name="business_strategy" label="Stratégie d'Entreprise" type="textarea" rows="3" required />
                    <x-form-field name="status" label="Statut Actuel" required />
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
                        <button type="submit" class="btn btn-success" id="submitBtn" style="display: none;">
                            <i class="fas fa-save me-2"></i>Enregistrer le Projet
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
    const totalSteps = 4;
    const form = document.getElementById('multiStepForm');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    const submitBtn = document.getElementById('submitBtn');

    function showStep(step) {
        document.querySelectorAll('.form-step').forEach(s => s.classList.remove('active'));
        
        document.querySelector(`.form-step[data-step="${step}"]`).classList.add('active');

        const backToProjectsBtn = document.getElementById('backToProjectsBtn');
        backToProjectsBtn.style.display = step === 1 ? 'inline-block' : 'none';
        prevBtn.style.display = step === 1 ? 'none' : 'inline-block';
        nextBtn.style.display = step === totalSteps ? 'none' : 'inline-block';
        submitBtn.style.display = step === totalSteps ? 'inline-block' : 'none';
        
        window.scrollTo({ top: 0, behavior: 'smooth' });
    }

    function validateStep(step) {
        const currentStepElement = document.querySelector(`.form-step[data-step="${step}"]`);
        const inputs = currentStepElement.querySelectorAll('input[required], textarea[required], select[required]');
        let isValid = true;

        inputs.forEach(input => {
            if (!input.value.trim()) {
                input.classList.add('is-invalid');
                isValid = false;
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
        }
    });

    prevBtn.addEventListener('click', function() {
        currentStep--;
        showStep(currentStep);
    });

    showStep(1);
});
</script>
@endsection

