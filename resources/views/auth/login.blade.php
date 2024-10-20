<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Connexion</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f3f4f6;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            display: flex;
            max-width: 900px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
        }

        .left-section {
            background-color: #ffe5d0;
            padding: 40px;
            width: 50%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .left-section img {
            width: 100px;
        }

        .left-section h1 {
            color: #e91e63;
            font-size: 36px;
            margin-top: 20px;
        }

        .left-section p {
            color: #333;
            font-size: 16px;
            margin-top: 20px;
        }

        .right-section {
            padding: 40px;
            width: 50%;
        }

        .right-section h2 {
            color: #333;
            font-size: 24px;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            color: #555;
            font-weight: bold;
            margin-bottom: 8px;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .form-group input:focus {
            border-color: #3f51b5;
            outline: none;
        }

        .password-group {
            position: relative;
        }

        .password-group button {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            cursor: pointer;
            font-size: 16px;
        }

        .submit-btn {
            background-color: #6a1b9a;
            color: white;
            padding: 12px;
            font-size: 16px;
            border: none;
            width: 100%;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .submit-btn:hover {
            background-color: #4a148c;
        }

        .links {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
            font-size: 14px;
        }

        .links a {
            color: #3f51b5;
            text-decoration: none;
        }

        .links a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Section Gauche (Logo + Texte) -->
        <div class="left-section">
            <img src="{{ asset('build/assets/img/zero.png') }}" style="width: 70%;" alt="Zéro Investissement">
            
            <p>Transformez vos idées en réalités.</p>
        </div>

        <!-- Section Droite (Formulaire) -->
        <div class="right-section">
            <h2>Veuillez vous connecter à votre compte</h2>
           <form method="POST" action="{{ route('login') }}">
             @csrf
                <div class="form-group">
                    <label for="email">Login</label>
                    <input type="email" name="email" :value="old('email')" required autofocus autocomplete="username">
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
                <div class="form-group password-group">
                    <label for="password">Mot de passe</label>
                    <input type="password" id="password"
                            name="password"
                            required autocomplete="current-password" placeholder="********">
                    <button type="button" id="togglePassword">👁️</button>
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
                <div class="form-group">
                    <button type="submit" class="submit-btn">Connexion</button>
                </div>
                <div class="links">
                    <a href="/forgot-password">Mot de passe oublié ?</a>
                    <a href="/register">S'inscrire</a>
                </div>
            </form>
        </div>
    </div>

    <script>
        // JavaScript pour afficher/masquer le mot de passe
        const togglePassword = document.querySelector("#togglePassword");
        const password = document.querySelector("#password");

        togglePassword.addEventListener("click", function () {
            const type = password.getAttribute("type") === "password" ? "text" : "password";
            password.setAttribute("type", type);
        });
    </script>
</body>
</html>
