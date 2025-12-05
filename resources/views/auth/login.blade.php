<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - Zéro Investissement</title>
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

        .login-container {
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
        }

        .left-section img {
            width: 100%;
            max-width: 350px;
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

        .remember-forgot {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
            font-size: 0.9rem;
        }

        .remember-me {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .remember-me input[type="checkbox"] {
            width: 18px;
            height: 18px;
            cursor: pointer;
            accent-color: #6A00B8;
        }

        .remember-me label {
            margin: 0;
            color: #666;
            cursor: pointer;
            font-weight: 400;
        }

        .forgot-link {
            color: #6A00B8;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .forgot-link:hover {
            text-decoration: underline;
            color: #8B00D4;
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
        }

        .submit-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(106, 0, 184, 0.35);
        }

        .submit-btn:active {
            transform: translateY(0);
        }

        .register-link {
            text-align: center;
            margin-top: 1.5rem;
            color: #666;
            font-size: 0.95rem;
        }

        .register-link a {
            color: #6A00B8;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .register-link a:hover {
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
            .login-container {
                flex-direction: column;
            }

            .left-section,
            .right-section {
                width: 100%;
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
    <div class="login-container">
        <!-- Section Gauche (Logo + Texte) -->
        <div class="left-section">
            <a href="/" style="display: block; text-decoration: none;">
                <img src="{{ asset('build/assets/img/logo.png') }}" alt="Zéro Investissement">
            </a>
            <p>Transformez vos idées en réalités.</p>
        </div>

        <!-- Section Droite (Formulaire) -->
        <div class="right-section">
            <h2>Connexion</h2>
            <p class="subtitle">Connectez-vous à votre compte pour continuer</p>
            
            <form method="POST" action="{{ route('login') }}">
                @csrf
                
                <div class="form-group">
                    <label for="email">Adresse Email</label>
                    <div class="input-wrapper">
                        <i class="fas fa-envelope"></i>
                        <input type="email" 
                               id="email" 
                               name="email" 
                               value="{{ old('email') }}" 
                               required 
                               autofocus 
                               autocomplete="username"
                               placeholder="exemple@email.com">
                    </div>
                    @error('email')
                        <span class="error-message">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <div class="input-wrapper password-wrapper">
                        <i class="fas fa-lock"></i>
                        <input type="password" 
                               id="password"
                               name="password"
                               required 
                               autocomplete="current-password" 
                               placeholder="••••••••">
                        <button type="button" class="toggle-password" id="togglePassword">
                            <i class="far fa-eye"></i>
                        </button>
                    </div>
                    @error('password')
                        <span class="error-message">{{ $message }}</span>
                    @enderror
                </div>

                <div class="remember-forgot">
                    <div class="remember-me">
                        <input type="checkbox" id="remember_me" name="remember">
                        <label for="remember_me">Se souvenir de moi</label>
                    </div>
                    <a href="{{ route('password.request') }}" class="forgot-link">Mot de passe oublié ?</a>
                </div>

                <button type="submit" class="submit-btn">
                    <i class="fas fa-sign-in-alt"></i> Se connecter
                </button>

                <div class="register-link">
                    Vous n'avez pas de compte ? <a href="{{ route('register') }}">Créer un compte</a>
                </div>
            </form>
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
    </script>
</body>
</html>
