<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription - Zéro Investissement</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: #ffffff;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 2rem;
        }

        .register-container {
            display: flex;
            max-width: 900px;
            width: 100%;
            min-height: 500px;
            background-color: #fff;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.15);
            border-radius: 16px;
            overflow: hidden;
        }

        .left-section {
            background: #FFE8D6;
            padding: 3rem;
            width: 45%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: #333;
            order: 2;
        }

        .left-section img {
            width: 100%;
            max-width: 350x;
            margin-bottom: 2rem;
        }

        .left-section h1 {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 1rem;
            line-height: 1.2;
            color: #333;
            display: none;
        }

        .left-section p {
            font-size: 1.1rem;
            font-weight: 400;
            color: #333;
            line-height: 1.6;
        }

        .right-section {
            padding: 2rem 2.5rem;
            width: 55%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            order: 1;
        }

        .right-section h2 {
            color: #333;
            font-size: 1.75rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
        }

        .right-section .subtitle {
            color: #666;
            font-size: 0.95rem;
            margin-bottom: 1.5rem;
        }

        .form-group {
            margin-bottom: 1rem;
        }

        .form-group label {
            display: block;
            color: #333;
            font-weight: 600;
            margin-bottom: 0.5rem;
            font-size: 0.95rem;
        }

        .input-wrapper {
            position: relative;
            display: flex;
            align-items: center;
        }

        .input-wrapper i {
            position: absolute;
            left: 1rem;
            top: 50%;
            transform: translateY(-50%);
            color: #6A00B8;
            font-size: 1rem;
        }

        .form-group input {
            width: 100%;
            padding: 0.875rem 1rem 0.875rem 2.75rem;
            font-size: 0.95rem;
            border: 1.5px solid #ddd;
            border-radius: 8px;
            transition: all 0.3s ease;
            font-family: 'Inter', sans-serif;
        }

        .form-group input:focus {
            border-color: #6A00B8;
            outline: none;
            box-shadow: 0 0 0 3px rgba(106, 0, 184, 0.1);
        }

        .password-wrapper {
            position: relative;
        }

        .password-wrapper .toggle-password {
            position: absolute;
            right: 2.75rem;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            cursor: pointer;
            color: #666;
            font-size: 1.1rem;
            padding: 0.25rem;
            transition: color 0.3s ease;
            z-index: 10;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .password-wrapper .toggle-password:hover {
            color: #6A00B8;
        }

        .submit-btn {
            background: linear-gradient(90deg, #6A00B8 0%, #8B00D4 100%);
            color: white;
            padding: 1rem;
            font-size: 1rem;
            font-weight: 600;
            border: none;
            width: 100%;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 12px rgba(106, 0, 184, 0.25);
            margin-top: 1rem;
        }

        .submit-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(106, 0, 184, 0.35);
        }

        .submit-btn:active {
            transform: translateY(0);
        }

        .login-link {
            text-align: center;
            margin-top: 1.5rem;
            color: #666;
            font-size: 0.95rem;
        }

        .login-link a {
            color: #6A00B8;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .login-link a:hover {
            text-decoration: underline;
            color: #8B00D4;
        }

        .error-message {
            color: #d32f2f;
            font-size: 0.85rem;
            margin-top: 0.5rem;
            display: block;
        }
        @media (max-width: 768px) {
            .register-container {
                flex-direction: column;
            }

            .left-section,
            .right-section {
                width: 100%;
                order: initial;
            }   width: 100%;
            }

            .left-section {
                padding: 2rem;
            }

            .left-section h1 {
                font-size: 1.5rem;
            }

            .left-section p {
                font-size: 1rem;
            }

            .left-section .features {
                display: none;
            }

            .right-section {
                padding: 2rem;
            }

            .right-section h2 {
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <div class="register-container">
        <!-- Section Gauche (Formulaire d'inscription) -->
        <div class="right-section">
            <h2>Créer un compte</h2>
            <p class="subtitle">Remplissez le formulaire pour commencer votre aventure</p>
            
            <form method="POST" action="{{ route('register') }}">
                @csrf
                
                <!-- Nom -->
                <div class="form-group">
                    <label for="name">Nom complet</label>
                    <div class="input-wrapper">
                        <i class="fas fa-user"></i>
                        <input id="name" 
                               type="text" 
                               name="name" 
                               value="{{ old('name') }}" 
                               required 
                               autofocus
                               placeholder="Votre nom complet">
                    </div>
                    @error('name')
                        <span class="error-message">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Adresse Email -->
                <div class="form-group">
                    <label for="email">Adresse Email</label>
                    <div class="input-wrapper">
                        <i class="fas fa-envelope"></i>
                        <input id="email" 
                               type="email" 
                               name="email" 
                               value="{{ old('email') }}" 
                               required
                               placeholder="exemple@email.com">
                    </div>
                    @error('email')
                        <span class="error-message">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Mot de passe -->
                <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <div class="input-wrapper password-wrapper">
                        <i class="fas fa-lock"></i>
                        <input id="password" 
                               type="password" 
                               name="password" 
                               required
                               placeholder="••••••••">
                        <button type="button" class="toggle-password" id="togglePassword">
                            <i class="far fa-eye"></i>
                        </button>
                    </div>
                    @error('password')
                        <span class="error-message">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Confirmation du mot de passe -->
                <div class="form-group">
                    <label for="password_confirmation">Confirmer le mot de passe</label>
                    <div class="input-wrapper password-wrapper">
                        <i class="fas fa-lock"></i>
                        <input id="password_confirmation" 
                               type="password" 
                               name="password_confirmation" 
                               required
                               placeholder="••••••••">
                        <button type="button" class="toggle-password" id="togglePasswordConfirm">
                            <i class="far fa-eye"></i>
                        </button>
                    </div>
                    @error('password_confirmation')
                        <span class="error-message">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Bouton d'inscription -->
                <button type="submit" class="submit-btn">
                    <i class="fas fa-user-plus"></i> Créer mon compte
                </button>

                <div class="login-link">
                    Vous avez déjà un compte ? <a href="{{ route('login') }}">Se connecter</a>
                </div>
            </form>
        </div>

        <!-- Section Droite (Logo + Texte) -->
        <div class="left-section">
            <a href="/" style="display: block; text-decoration: none;">
                <img src="{{ asset('build/assets/img/logo.png') }}" alt="Zéro Investissement">
            </a>
            <p>Transformez vos idées en réalités.</p>
        </div>
    </div>

    <script>
        const togglePassword = document.querySelector("#togglePassword");
        const password = document.querySelector("#password");

        togglePassword.addEventListener("click", function () {
            const type = password.getAttribute("type") === "password" ? "text" : "password";
            password.setAttribute("type", type);
            
            const icon = this.querySelector("i");
            icon.classList.toggle("fa-eye");
            icon.classList.toggle("fa-eye-slash");
        });

        const togglePasswordConfirm = document.querySelector("#togglePasswordConfirm");
        const passwordConfirm = document.querySelector("#password_confirmation");

        togglePasswordConfirm.addEventListener("click", function () {
            const type = passwordConfirm.getAttribute("type") === "password" ? "text" : "password";
            passwordConfirm.setAttribute("type", type);
            
            const icon = this.querySelector("i");
            icon.classList.toggle("fa-eye");
            icon.classList.toggle("fa-eye-slash");
        });
    </script>
</body>
</html>
