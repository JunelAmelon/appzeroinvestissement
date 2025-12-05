@extends('layouts.app')

@section('title', 'Mon Profil')
@section('page-title', 'Mon Profil')
@section('page-subtitle', 'Gérez vos informations personnelles et vos paramètres de sécurité')

@section('content')
<style>
    .profile-header {
        background: var(--primary-color);
        color: white;
        border-radius: 12px;
        padding: 2rem;
        margin-bottom: 2rem;
        box-shadow: 0 4px 15px rgba(106, 0, 184, 0.2);
        display: flex;
        align-items: center;
    }

    .profile-avatar {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.2);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 2.5rem;
        margin-right: 2rem;
        border: 3px solid white;
    }

    .profile-info h3 {
        margin: 0;
        font-size: 1.8rem;
        font-weight: 700;
    }

    .profile-info p {
        margin: 0.25rem 0 0 0;
        opacity: 0.9;
    }

    .form-section {
        background: white;
        border-radius: 12px;
        padding: 2rem;
        margin-bottom: 2rem;
        box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        transition: all 0.3s ease;
    }

    .form-section:hover {
        box-shadow: 0 4px 16px rgba(0,0,0,0.12);
    }

    .form-section header {
        margin-bottom: 2rem;
        padding-bottom: 1.5rem;
        border-bottom: 2px solid #f0f0f0;
    }

    .form-section h2 {
        color: var(--primary-color);
        font-size: 1.5rem;
        font-weight: 700;
        margin: 0 0 0.5rem 0;
    }

    .form-section.danger h2 {
        color: var(--danger-color);
    }

    .form-section header p {
        color: #888;
        font-size: 0.95rem;
        margin: 0;
    }

    .form-group {
        margin-bottom: 1.5rem;
    }

    .form-group:last-child {
        margin-bottom: 0;
    }

    .form-label {
        display: block;
        margin-bottom: 0.5rem;
        font-weight: 500;
        color: #333;
    }

    .form-control {
        width: 100%;
        padding: 0.75rem;
        border: 1px solid #ddd;
        border-radius: 6px;
        font-size: 0.95rem;
        transition: all 0.3s ease;
    }

    .form-control:focus {
        outline: none;
        border-color: var(--primary-color);
        box-shadow: 0 0 0 0.2rem rgba(106, 0, 184, 0.15);
    }

    .btn-save {
        background: var(--primary-color);
        color: white;
        padding: 0.75rem 2rem;
        border: none;
        border-radius: 6px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .btn-save:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(106, 0, 184, 0.3);
    }

    .btn-danger {
        background: var(--danger-color);
        color: white;
        padding: 0.75rem 2rem;
        border: none;
        border-radius: 6px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .btn-danger:hover {
        background: #b71c1c;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(211, 47, 47, 0.3);
    }

    .success-message {
        background-color: #e8f5e9;
        color: #1b5e20;
        padding: 1rem;
        border-radius: 6px;
        margin-top: 1rem;
    }

    .error-message {
        background-color: #ffebee;
        color: #b71c1c;
        padding: 0.75rem;
        border-radius: 6px;
        margin-top: 0.5rem;
        font-size: 0.9rem;
    }

    .info-box {
        background: #f0f8ff;
        padding: 1rem;
        border-radius: 6px;
        margin: 1rem 0;
        font-size: 0.95rem;
        color: #0066cc;
    }

    .verification-link {
        color: var(--primary-color);
        text-decoration: underline;
        cursor: pointer;
        font-weight: 500;
    }

    .verification-link:hover {
        color: #5a0099;
    }

    .form-actions {
        display: flex;
        gap: 1rem;
        align-items: center;
        margin-top: 2rem;
    }

    .tabs-nav {
        display: flex;
        gap: 1rem;
        margin-bottom: 2rem;
        border-bottom: 2px solid #f0f0f0;
    }

    .tabs-nav button {
        background: none;
        border: none;
        padding: 1rem 1.5rem;
        font-size: 0.95rem;
        font-weight: 600;
        color: #888;
        cursor: pointer;
        border-bottom: 3px solid transparent;
        transition: all 0.3s ease;
    }

    .tabs-nav button.active {
        color: var(--primary-color);
        border-bottom-color: var(--primary-color);
    }

    .tab-content {
        display: none;
    }

    .tab-content.active {
        display: block;
    }
</style>

<!-- Profile Header -->
<div class="profile-header">
    <div class="profile-avatar">
        <img src="https://img.freepik.com/free-vector/mans-face-flat-style_90220-2877.jpg" alt="User Avatar" style="width: 80px; height: 80px; border-radius: 50%; object-fit: cover;">
    </div>
    <div class="profile-info">
        <h3>{{ Auth::user()->name }}</h3>
        <p><i class="fas fa-envelope me-2"></i>{{ Auth::user()->email }}</p>
    </div>
</div>

<!-- Tabs Navigation -->
<div class="tabs-nav">
    <button class="active" data-tab="personal">
        <i class="fas fa-user me-2"></i>Informations Personnelles
    </button>
    <button data-tab="security">
        <i class="fas fa-lock me-2"></i>Sécurité
    </button>
    <button data-tab="danger">
        <i class="fas fa-exclamation-triangle me-2"></i>Zone de Danger
    </button>
</div>

<div class="row">
    <div class="col-lg-8 mx-auto">
        <!-- TAB 1: Personal Information -->
        <div class="tab-content active" id="personal">
            <div class="form-section">
                <header>
                    <h2><i class="fas fa-edit me-2"></i>Informations Personnelles</h2>
                    <p>Mettez à jour vos informations de profil et votre adresse email</p>
                </header>

                <form method="post" action="{{ route('profile.update') }}">
                    @csrf
                    @method('patch')

                    <div class="form-group">
                        <label class="form-label">Nom Complet</label>
                        <input type="text" name="name" class="form-control" value="{{ old('name', Auth::user()->name) }}" required>
                        @if ($errors->has('name'))
                            <div class="error-message">{{ $errors->first('name') }}</div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label class="form-label">Adresse Email</label>
                        <input type="email" name="email" class="form-control" value="{{ old('email', Auth::user()->email) }}" required>
                        @if ($errors->has('email'))
                            <div class="error-message">{{ $errors->first('email') }}</div>
                        @endif
                    </div>

                    @if (Auth::user() instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !Auth::user()->hasVerifiedEmail())
                        <div class="info-box">
                            <i class="fas fa-info-circle me-2"></i>
                            Votre adresse email n'a pas été vérifiée.
                            <form method="post" action="{{ route('verification.send') }}" style="display: inline;">
                                @csrf
                                <button type="submit" class="verification-link">Cliquez ici pour renvoyer l'email de vérification.</button>
                            </form>
                        </div>

                        @if (session('status') === 'verification-link-sent')
                            <div class="success-message">
                                <i class="fas fa-check-circle me-2"></i>
                                Un nouveau lien de vérification a été envoyé à votre adresse email.
                            </div>
                        @endif
                    @endif

                    <div class="form-actions">
                        <button type="submit" class="btn-save">
                            <i class="fas fa-save me-2"></i>Enregistrer les modifications
                        </button>

                        @if (session('status') === 'profile-updated')
                            <p class="success-message" style="margin: 0; flex: 1;">
                                <i class="fas fa-check-circle me-2"></i>Profil mis à jour avec succès !
                            </p>
                        @endif
                    </div>
                </form>
            </div>
        </div>

        <!-- TAB 2: Security -->
        <div class="tab-content" id="security">
            <div class="form-section">
                <header>
                    <h2><i class="fas fa-shield-alt me-2"></i>Changer le Mot de Passe</h2>
                    <p>Assurez-vous que votre compte utilise un mot de passe long et aléatoire pour rester sécurisé</p>
                </header>

                <form method="post" action="{{ route('password.update') }}">
                    @csrf
                    @method('put')

                    <div class="form-group">
                        <label class="form-label">Mot de Passe Actuel</label>
                        <input type="password" name="current_password" class="form-control" required>
                        @if ($errors->updatePassword->has('current_password'))
                            <div class="error-message">{{ $errors->updatePassword->first('current_password') }}</div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label class="form-label">Nouveau Mot de Passe</label>
                        <input type="password" name="password" class="form-control" required>
                        @if ($errors->updatePassword->has('password'))
                            <div class="error-message">{{ $errors->updatePassword->first('password') }}</div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label class="form-label">Confirmer le Mot de Passe</label>
                        <input type="password" name="password_confirmation" class="form-control" required>
                        @if ($errors->updatePassword->has('password_confirmation'))
                            <div class="error-message">{{ $errors->updatePassword->first('password_confirmation') }}</div>
                        @endif
                    </div>

                    <div class="form-actions">
                        <button type="submit" class="btn-save">
                            <i class="fas fa-save me-2"></i>Mettre à Jour le Mot de Passe
                        </button>

                        @if (session('status') === 'password-updated')
                            <p class="success-message" style="margin: 0; flex: 1;">
                                <i class="fas fa-check-circle me-2"></i>Mot de passe mis à jour avec succès !
                            </p>
                        @endif
                    </div>
                </form>
            </div>
        </div>

        <!-- TAB 3: Danger Zone -->
        <div class="tab-content" id="danger">
            <div class="form-section danger">
                <header>
                    <h2><i class="fas fa-exclamation-circle me-2"></i>Zone de Danger</h2>
                    <p>Actions irréversibles concernant votre compte</p>
                </header>

                <p style="color: #666; margin-bottom: 1.5rem;">
                    Une fois votre compte supprimé, toutes ses ressources et données seront supprimées définitivement. 
                    Avant de supprimer votre compte, téléchargez toute donnée ou information que vous souhaitez conserver.
                </p>

                <button type="button" class="btn-danger" onclick="document.getElementById('deleteModal').style.display='block'">
                    <i class="fas fa-trash me-2"></i>Supprimer le Compte
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Delete Account Modal -->
<div id="deleteModal" style="display:none; position: fixed; z-index: 2000; left: 0; top: 0; width: 100%; height: 100%; background-color: rgba(0,0,0,0.5);">
    <div style="background-color: white; margin: 5% auto; padding: 2rem; border-radius: 12px; width: 90%; max-width: 500px; box-shadow: 0 10px 40px rgba(0,0,0,0.3);">
        <h2 style="color: var(--danger-color); margin-bottom: 1rem;">
            <i class="fas fa-exclamation-triangle me-2"></i>Êtes-vous sûr de vouloir supprimer votre compte ?
        </h2>

        <p style="color: #666; margin-bottom: 1.5rem;">
            Une fois votre compte supprimé, toutes ses ressources et données seront supprimées définitivement. 
            Veuillez entrer votre mot de passe pour confirmer que vous souhaitez supprimer définitivement votre compte.
        </p>

        <form method="post" action="{{ route('profile.destroy') }}">
            @csrf
            @method('delete')

            <div class="form-group">
                <label class="form-label">Mot de Passe</label>
                <input type="password" name="password" class="form-control" placeholder="Entrez votre mot de passe" required>
                @if ($errors->userDeletion->has('password'))
                    <div class="error-message">{{ $errors->userDeletion->first('password') }}</div>
                @endif
            </div>

            <div style="display: flex; gap: 1rem; justify-content: flex-end; margin-top: 2rem;">
                <button type="button" class="btn-save" style="background: #6c757d;" onclick="document.getElementById('deleteModal').style.display='none'">
                    Annuler
                </button>
                <button type="submit" class="btn-danger">
                    <i class="fas fa-trash me-2"></i>Supprimer Définitivement
                </button>
            </div>
        </form>
    </div>
</div>

<script>
    document.querySelectorAll('.tabs-nav button').forEach(button => {
        button.addEventListener('click', function() {
            const tabId = this.getAttribute('data-tab');

            // Remove active class from all buttons and contents
            document.querySelectorAll('.tabs-nav button').forEach(b => b.classList.remove('active'));
            document.querySelectorAll('.tab-content').forEach(content => content.classList.remove('active'));

            // Add active class to clicked button and corresponding content
            this.classList.add('active');
            document.getElementById(tabId).classList.add('active');
        });
    });

    // Close modal when clicking outside
    window.addEventListener('click', function(event) {
        const modal = document.getElementById('deleteModal');
        if (event.target === modal) {
            modal.style.display = 'none';
        }
    });
</script>
@endsection
