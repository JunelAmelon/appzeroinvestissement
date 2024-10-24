<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'Inscription</title>
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

        <!-- Section Droite (Formulaire d'inscription) -->
        <div class="right-section">
            <h2>Inscription</h2>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <!-- Nom -->
                <div class="form-group">
                    <label for="name">Nom</label>
                    <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus>
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Nom -->
                <div class="form-group">
                    <label for="firstname">Nom</label>
                    <input id="firstname" type="text" name="firstname" value="{{ old('name') }}" required autofocus>
                    <x-input-error :messages="$errors->get('firstname')" class="mt-2" />
                </div>

                <!-- Adresse Email -->
                <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required>
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Téléphone -->
                <div class="form-group">
                    <label for="phone">Téléphone (Indicatif + Numéro)</label>
                    <input id="phone" type="text" name="phone" value="{{ old('phone') }}" pattern="\d{1,3} \d{1,15}" required placeholder="ex: 33 789898989">
                    <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                </div>

                <!-- Pays -->
                <div class="form-group">
                    <label for="country">Pays</label>
                    <select id="country" name="country" required>
                        <option value="">Sélectionnez votre pays</option>
                        <option value="FR">France</option>
                        <option value="US">États-Unis</option>
                        <option value="BJ">Bénin</option>
                        <option value="CI">Côte d'ivoire</option>
                        <option value="UK">Angletterre</option>
                        <!-- Juju faut ajouter d'autres pays ici -->
                    </select>
                    <x-input-error :messages="$errors->get('country')" class="mt-2" />
                </div>

                <!-- Code Postal -->
                <div class="form-group">
                    <label for="postal_code">Code Postal</label>
                    <input id="postal_code" type="text" name="postal_code" value="{{ old('postal_code') }}" required>
                    <x-input-error :messages="$errors->get('postal_code')" class="mt-2" />
                </div>

                <!-- Ville -->
                <div class="form-group">
                    <label for="city">Ville</label>
                    <input id="city" type="text" name="city" value="{{ old('city') }}" required>
                    <x-input-error :messages="$errors->get('city')" class="mt-2" />
                </div>

                <!-- Mot de passe -->
                <div class="form-group password-group">
                    <label for="password">Mot de passe</label>
                    <input id="password" type="password" name="password" required>
                    <button type="button" id="togglePassword">👁️</button>
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirmation du mot de passe -->
                <div class="form-group password-group">
                    <label for="password_confirmation">Confirmer le mot de passe</label>
                    <input id="password_confirmation" type="password" name="password_confirmation" required>
                    <button type="button" id="togglePasswordConfirm">👁️</button>
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <!-- Bouton d'inscription -->
                <div class="form-group">
                    <button type="submit" class="submit-btn">S'inscrire</button>
                </div>

                <div class="links">
                    <a href="{{ route('login') }}">Déjà inscrit ?</a>
                </div>
            </form>
        </div>
    </div>

    <script>
        // JavaScript pour afficher/masquer le mot de passe
        const togglePassword = document.querySelector("#togglePassword");
        const password = document.querySelector("#password");

        togglePassword.addEventListener("click", function() {
            const type = password.getAttribute("type") === "password" ? "text" : "password";
            password.setAttribute("type", type);
        });

        const togglePasswordConfirm = document.querySelector("#togglePasswordConfirm");
        const passwordConfirm = document.querySelector("#password_confirmation");

        togglePasswordConfirm.addEventListener("click", function() {
            const type = passwordConfirm.getAttribute("type") === "password" ? "text" : "password";
            passwordConfirm.setAttribute("type", type);
        });
    </script>
</body>

</html>
