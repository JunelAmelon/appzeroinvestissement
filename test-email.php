<?php

require __DIR__.'/vendor/autoload.php';

$app = require_once __DIR__.'/bootstrap/app.php';
$app->make('Illuminate\Contracts\Console\Kernel')->bootstrap();

use Illuminate\Support\Facades\Mail;

try {
    Mail::raw('Ceci est un email de test depuis Laravel', function ($message) {
        $message->to('admin@appzeroinvestissement.com')
                ->subject('Test Email Mailtrap');
    });
    
    echo "✅ Email envoyé avec succès !\n";
    echo "Vérifiez votre inbox Mailtrap : https://mailtrap.io/inboxes\n";
} catch (\Exception $e) {
    echo "❌ Erreur : " . $e->getMessage() . "\n";
}
