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
            padding: 10px; /* Réduit le padding */
            width: 50%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .left-section img {
            width: 60px; /* Réduit la taille de l'image */
        }

        .left-section h1 {
            color: #e91e63;
            font-size: 24px; /* Réduit la taille du titre */
            margin-top: 5px; /* Réduit la marge */
        }

        .left-section p {
            color: #333;
            font-size: 12px; /* Réduit la taille du texte */
            margin-top: 5px; /* Réduit la marge */
        }

        .right-section {
            padding: 10px; /* Réduit le padding */
            width: 50%;
        }

        .right-section h2 {
            color: #333;
            font-size: 16px; /* Réduit la taille du titre */
            margin-bottom: 10px; /* Réduit la marge */
        }

        .form-group {
            margin-bottom: 10px; /* Réduit la marge */
        }

        .form-group label {
            display: block;
            color: #555;
            font-weight: bold;
            margin-bottom: 4px; /* Réduit la marge */
        }

        .form-group input,
        .form-group select {
            width: 100%;
            padding: 6px; /* Réduit le padding */
            font-size: 12px; /* Réduit la taille de la police */
            border: 1px solid #ddd;
            border-radius: 4px;
            transition: border-color 0.3s;
        }

        .form-group input:focus,
        .form-group select:focus {
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
            font-size: 12px; /* Réduit la taille du bouton */
        }

        .submit-btn {
            background-color: #6a1b9a;
            color: white;
            padding: 8px; /* Réduit le padding */
            font-size: 12px; /* Réduit la taille de la police */
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
            margin-top: 10px; /* Réduit la marge */
            font-size: 10px; /* Réduit la taille de la police */
        }

        .links a {
            color: #3f51b5;
            text-decoration: none;
        }

        .links a:hover {
            text-decoration: underline;
        }

        /* Style amélioré pour le champ de sélection de pays */
        .form-group select {
            appearance: none; /* Supprime le style par défaut du select */
            background: #fff url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="%23333" d="M7 10l5 5 5-5H7z"/></svg>') no-repeat right 10px center;
            background-size: 12px; /* Taille de l'icône */
            padding-right: 30px; /* Espace pour l'icône */
            cursor: pointer; /* Change le curseur en pointeur */
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
                    <label for="firstname">Prenom</label>
                    <input id="firstname" type="text" name="firstname" value="{{ old('firstname') }}" required autofocus>
                    <x-input-error :messages="$errors->get('firstname')" class="mt-2" />
                </div>

                <!-- Adresse Email -->
                <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Téléphone -->
                <div class="form-group">
                    <label for="phone">Téléphone (Indicatif + Numéro)</label>

                    <input id="phone" type="text" name="phone" value="{{ old('phone') }}" pattern="\d{1,3} \d{1,15}" required autofocus placeholder="ex: 33 789898989">
                    <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                </div>

                <!-- Pays -->
                <div class="form-group">
                    <label for="country">Pays</label>

                  <select id="country" name="country" required>
                        <option value="">Sélectionnez votre pays</option>
                        <option value="AF">Afghanistan</option>
                        <option value="AL">Albanie</option>
                        <option value="DZ">Algérie</option>
                        <option value="AS">Samoa américaines</option>
                        <option value="AD">Andorre</option>
                        <option value="AO">Angola</option>
                        <option value="AI">Anguilla</option>
                        <option value="AQ">Antarctique</option>
                        <option value="AG">Antigua-et-Barbuda</option>
                        <option value="AR">Argentine</option>
                        <option value="AM">Arménie</option>
                        <option value="AW">Aruba</option>
                        <option value="AU">Australie</option>
                        <option value="AT">Autriche</option>
                        <option value="AZ">Azerbaïdjan</option>
                        <option value="BS">Bahamas</option>
                        <option value="BH">Bahreïn</option>
                        <option value="BD">Bangladesh</option>
                        <option value="BB">Barbade</option>
                        <option value="BY">Bélarus</option>
                        <option value="BE">Belgique</option>
                        <option value="BZ">Belize</option>
                        <option value="BJ">Bénin</option>
                        <option value="BM">Bermudes</option>
                        <option value="BT">Bhoutan</option>
                        <option value="BO">Bolivie</option>
                        <option value="BQ">Bonaire, Saint-Eustache et Saba</option>
                        <option value="BA">Bosnie-Herzégovine</option>
                        <option value="BW">Botswana</option>
                        <option value="BV">Bouvet, île</option>
                        <option value="BR">Brésil</option>
                        <option value="IO">Territoire britannique de l'océan Indien</option>
                        <option value="BN">Brunei</option>
                        <option value="BG">Bulgarie</option>
                        <option value="BF">Burkina Faso</option>
                        <option value="BI">Burundi</option>
                        <option value="CV">Cabo Verde</option>
                        <option value="KH">Cambodge</option>
                        <option value="CM">Cameroun</option>
                        <option value="CA">Canada</option>
                        <option value="KY">Îles Caïmans</option>
                        <option value="CF">République Centrafricaine</option>
                        <option value="TD">Tchad</option>
                        <option value="CL">Chili</option>
                        <option value="CN">Chine</option>
                        <option value="CX">Île Christmas</option>
                        <option value="CC">Îles Cocos</option>
                        <option value="CO">Colombie</option>
                        <option value="KM">Comores</option>
                        <option value="CD">République Démocratique du Congo</option>
                        <option value="CG">République du Congo</option>
                        <option value="CK">Îles Cook</option>
                        <option value="CR">Costa Rica</option>
                        <option value="HR">Croatie</option>
                        <option value="CU">Cuba</option>
                        <option value="CW">Curaçao</option>
                        <option value="CY">Chypre</option>
                        <option value="CZ">République tchèque</option>
                        <option value="DK">Danemark</option>
                        <option value="DJ">Djibouti</option>
                        <option value="DM">Dominique</option>
                        <option value="DO">République Dominicaine</option>
                        <option value="EC">Équateur</option>
                        <option value="EG">Égypte</option>
                        <option value="SV">El Salvador</option>
                        <option value="GQ">Guinée équatoriale</option>
                        <option value="ER">Érythrée</option>
                        <option value="EE">Estonie</option>
                        <option value="SZ">Eswatini</option>
                        <option value="ET">Éthiopie</option>
                        <option value="FK">Îles Malouines</option>
                        <option value="FO">Îles Féroé</option>
                        <option value="FJ">Fidji</option>
                        <option value="FI">Finlande</option>
                        <option value="FR">France</option>
                        <option value="PF">Polynésie française</option>
                        <option value="GA">Gabon</option>
                        <option value="GM">Gambie</option>
                        <option value="GE">Géorgie</option>
                        <option value="DE">Allemagne</option>
                        <option value="GH">Ghana</option>
                        <option value="GI">Gibraltar</option>
                        <option value="GR">Grèce</option>
                        <option value="GL">Groenland</option>
                        <option value="GD">Grenade</option>
                        <option value="GP">Guadeloupe</option>
                        <option value="GU">Guam</option>
                        <option value="GT">Guatemala</option>
                        <option value="GG">Guernesey</option>
                        <option value="GN">Guinée</option>
                        <option value="GW">Guinée-Bissau</option>
                        <option value="GY">Guyana</option>
                        <option value="HT">Haïti</option>
                        <option value="HM">Îles Heard et McDonald</option>
                        <option value="VA">Vatican</option>
                        <option value="HN">Honduras</option>
                        <option value="HK">Hong Kong</option>
                        <option value="HU">Hongrie</option>
                        <option value="IS">Islande</option>
                        <option value="IN">Inde</option>
                        <option value="ID">Indonésie</option>
                        <option value="IR">Iran</option>
                        <option value="IQ">Irak</option>
                        <option value="IE">Irlande</option>
                        <option value="IM">Île de Man</option>
                        <option value="IL">Israël</option>
                        <option value="IT">Italie</option>
                        <option value="JM">Jamaïque</option>
                        <option value="JP">Japon</option>
                        <option value="JE">Jersey</option>
                        <option value="JO">Jordanie</option>
                        <option value="KZ">Kazakhstan</option>
                        <option value="KE">Kenya</option>
                        <option value="KI">Kiribati</option>
                        <option value="KP">Corée du Nord</option>
                        <option value="KR">Corée du Sud</option>
                        <option value="KW">Kuwait</option>
                        <option value="KG">Kirghizistan</option>
                        <option value="LA">Laos</option>
                        <option value="LV">Lettonie</option>
                        <option value="LB">Liban</option>
                        <option value="LS">Lesotho</option>
                        <option value="LR">Libéria</option>
                        <option value="LY">Libye</option>
                        <option value="LI">Liechtenstein</option>
                        <option value="LT">Lituanie</option>
                        <option value="LU">Luxembourg</option>
                        <option value="MO">Macao</option>
                        <option value="MG">Madagascar</option>
                        <option value="MW">Malawi</option>
                        <option value="MY">Malaisie</option>
                        <option value="MV">Maldives</option>
                        <option value="ML">Mali</option>
                        <option value="MT">Malte</option>
                        <option value="MH">Îles Marshall</option>
                        <option value="MQ">Martinique</option>
                        <option value="MR">Mauritanie</option>
                        <option value="MU">Maurice</option>
                        <option value="YT">Mayotte</option>
                        <option value="MX">Mexique</option>
                        <option value="FM">États fédérés de Micronésie</option>
                        <option value="MD">Moldavie</option>
                        <option value="MC">Monaco</option>
                        <option value="MN">Mongolie</option>
                        <option value="ME">Monténégro</option>
                        <option value="MS">Montserrat</option>
                        <option value="MA">Maroc</option>
                        <option value="MZ">Mozambique</option>
                        <option value="MM">Birmanie</option>
                        <option value="NA">Namibie</option>
                        <option value="NR">Nauru</option>
                        <option value="NP">Népal</option>
                        <option value="NL">Pays-Bas</option>
                        <option value="NC">Nouvelle-Calédonie</option>
                        <option value="NZ">Nouvelle-Zélande</option>
                        <option value="NI">Nicaragua</option>
                        <option value="NE">Niger</option>
                        <option value="NG">Nigéria</option>
                        <option value="NU">Niué</option>
                        <option value="NF">Île Norfolk</option>
                        <option value="MP">Îles Mariannes du Nord</option>
                        <option value="NO">Norvège</option>
                        <option value="OM">Oman</option>
                        <option value="PK">Pakistan</option>
                        <option value="PW">Palaos</option>
                        <option value="PS">Palestine</option>
                        <option value="PA">Panama</option>
                        <option value="PG">Papouasie-Nouvelle-Guinée</option>
                        <option value="PY">Paraguay</option>
                        <option value="PE">Pérou</option>
                        <option value="PH">Philippines</option>
                        <option value="PN">Îles Pitcairn</option>
                        <option value="PL">Pologne</option>
                        <option value="PT">Portugal</option>
                        <option value="PR">Porto Rico</option>
                        <option value="QA">Qatar</option>
                        <option value="RE">Réunion</option>
                        <option value="RO">Roumanie</option>
                        <option value="RU">Russie</option>
                        <option value="RW">Rwanda</option>
                        <option value="BL">Saint-Barthélemy</option>
                        <option value="SH">Saint-Hélène</option>
                        <option value="KN">Saint-Kitts-et-Nevis</option>
                        <option value="LC">Sainte-Lucie</option>
                        <option value="MF">Saint-Martin</option>
                        <option value="PM">Saint-Pierre-et-Miquelon</option>
                        <option value="VC">Saint-Vincent-et-les-Grenadines</option>
                        <option value="WS">Samoa</option>
                        <option value="SM">Saint-Marin</option>
                        <option value="ST">Sao Tomé-et-Principe</option>
                        <option value="SA">Arabie Saoudite</option>
                        <option value="SN">Sénégal</option>
                        <option value="RS">Serbie</option>
                        <option value="SC">Seychelles</option>
                        <option value="SL">Sierra Leone</option>
                        <option value="SG">Singapour</option>
                        <option value="SX">Sint Maarten</option>
                        <option value="SK">Slovaquie</option>
                        <option value="SI">Slovénie</option>
                        <option value="SB">Îles Salomon</option>
                        <option value="SO">Somalie</option>
                        <option value="ZA">Afrique du Sud</option>
                        <option value="GS">Géorgie du Sud et les îles Sandwich du Sud</option>
                        <option value="SS">Soudan du Sud</option>
                        <option value="ES">Espagne</option>
                        <option value="LK">Sri Lanka</option>
                        <option value="SD">Soudan</option>
                        <option value="SR">Suriname</option>
                        <option value="SJ">Svalbard et Jan Mayen</option>
                        <option value="SZ">Eswatini</option>
                        <option value="SE">Suède</option>
                        <option value="CH">Suisse</option>
                        <option value="SY">Syrie</option>
                        <option value="TW">Taïwan</option>
                        <option value="TJ">Tadjikistan</option>
                        <option value="TZ">Tanzanie</option>
                        <option value="TH">Thaïlande</option>
                        <option value="TL">Timor oriental</option>
                        <option value="TG">Togo</option>
                        <option value="TK">Tokelau</option>
                        <option value="TO">Tonga</option>
                        <option value="TT">Trinité-et-Tobago</option>
                        <option value="TN">Tunisie</option>
                        <option value="TR">Turquie</option>
                        <option value="TM">Turkménistan</option>
                        <option value="TV">Tuvalu</option>
                        <option value="UG">Ouganda</option>
                        <option value="UA">Ukraine</option>
                        <option value="AE">Émirats arabes unis</option>
                        <option value="GB">Royaume-Uni</option>
                        <option value="US">États-Unis</option>
                        <option value="UY">Uruguay</option>
                        <option value="UZ">Ouzbékistan</option>
                        <option value="VU">Vanuatu</option>
                        <option value="VE">Venezuela</option>
                        <option value="VN">Viêt Nam</option>
                        <option value="WF">Wallis et Futuna</option>
                        <option value="EH">Sahara occidental</option>
                        <option value="YE">Yémen</option>
                        <option value="ZM">Zambie</option>
                        <option value="ZW">Zimbabwe</option>
                    </select>
                    <x-input-error :messages="$errors->get('country')" class="mt-2" />
                </div>

                <!-- Code Postal -->
                <div class="form-group">
                    <label for="postal_code">Code Postal</label>

                    <input id="postal_code" type="text" name="postal_code" value="{{ old('postal_code') }}" required autofocus>

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
                <div class="form-group">
                    <label for="password_confirmation">Confirmation du mot de passe</label>
                    <input id="password_confirmation" type="password" name="password_confirmation" required>
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <!-- Bouton d'inscription -->
                <button type="submit" class="submit-btn">S'inscrire</button>

                <!-- Liens de connexion -->
                <div class="links">
                    <a href="{{ route('login') }}">Déjà inscrit ? Connectez-vous</a>
                </div>
            </form>
        </div>
    </div>

    <script>
        const togglePassword = document.getElementById('togglePassword');
        const password = document.getElementById('password');


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
