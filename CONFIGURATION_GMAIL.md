# Configuration Gmail pour l'envoi d'emails

## Étapes de configuration

### 1. Créer un mot de passe d'application Gmail

Pour utiliser Gmail avec Laravel, vous devez créer un **mot de passe d'application** (pas votre mot de passe Gmail habituel).

#### Étapes :

1. **Connectez-vous à votre compte Google** : https://myaccount.google.com/

2. **Activez la validation en deux étapes** (si ce n'est pas déjà fait) :
   - Allez dans "Sécurité"
   - Cherchez "Validation en deux étapes"
   - Suivez les instructions pour l'activer

3. **Créez un mot de passe d'application** :
   - Retournez dans "Sécurité"
   - Cherchez "Mots de passe des applications" (App passwords)
   - Sélectionnez "Autre (nom personnalisé)"
   - Nommez-le "Laravel AppZeroInvestissement"
   - Cliquez sur "Générer"
   - **COPIEZ LE MOT DE PASSE GÉNÉRÉ** (16 caractères sans espaces)

### 2. Configurer le fichier .env

Ouvrez votre fichier `.env` et modifiez les lignes suivantes :

```env
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=votre-email@gmail.com
MAIL_PASSWORD=xxxx-xxxx-xxxx-xxxx  # Le mot de passe d'application généré (sans espaces)
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS="votre-email@gmail.com"  # Email par défaut (sera remplacé par l'email du client)
MAIL_FROM_NAME="${APP_NAME}"
MAIL_TO_ADDRESS="votre-email@gmail.com"  # Email qui recevra les notifications
```

**Remplacez :**
- `votre-email@gmail.com` par votre adresse Gmail
- `xxxx-xxxx-xxxx-xxxx` par le mot de passe d'application (les 16 caractères sans les tirets)

### 3. Nettoyer le cache

Après avoir modifié le `.env`, exécutez ces commandes :

```bash
php artisan config:clear
php artisan cache:clear
```

### 4. Tester l'envoi d'email

Visitez cette URL pour tester :
```
http://localhost:8000/test-email
```

Vous devriez recevoir un email de test sur l'adresse configurée dans `MAIL_TO_ADDRESS`.

## Variables d'environnement

- **MAIL_USERNAME** : Votre adresse Gmail complète (compte d'envoi)
- **MAIL_PASSWORD** : Le mot de passe d'application (PAS votre mot de passe Gmail)
- **MAIL_FROM_ADDRESS** : Email par défaut (sera automatiquement remplacé par l'email du client qui soumet le projet)
- **MAIL_TO_ADDRESS** : L'email qui recevra toutes les notifications de projets

**Note** : Quand un client soumet un projet, l'email sera envoyé **depuis son adresse email** vers l'adresse configurée dans `MAIL_TO_ADDRESS`.

## Sécurité

⚠️ **IMPORTANT** :
- Ne partagez JAMAIS votre mot de passe d'application
- N'ajoutez JAMAIS le fichier `.env` à Git
- Le fichier `.env` est déjà dans `.gitignore`

## Dépannage

### Erreur "Invalid credentials"
- Vérifiez que vous utilisez bien un mot de passe d'application (pas votre mot de passe Gmail)
- Vérifiez que la validation en deux étapes est activée
- Assurez-vous qu'il n'y a pas d'espaces dans le mot de passe

### Email non reçu
- Vérifiez vos spams/courrier indésirable
- Vérifiez que `MAIL_TO_ADDRESS` est correct
- Testez avec la route `/test-email`

### Erreur de connexion
- Vérifiez que le port 587 n'est pas bloqué par votre pare-feu
- Essayez le port 465 avec `MAIL_ENCRYPTION=ssl` si 587 ne fonctionne pas

## Production

⚠️ **Avant de déployer en production :**

1. Supprimez la route `/test-email` dans `routes/web.php`
2. Changez `APP_ENV=production` dans `.env`
3. Changez `APP_DEBUG=false` dans `.env`
