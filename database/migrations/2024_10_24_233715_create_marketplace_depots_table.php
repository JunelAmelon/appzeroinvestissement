<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('marketplacedepots', function (Blueprint $table) {

            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('project_name'); // Nom de votre projet ou entreprise
            $table->text('elevator_pitch'); // En une phrase, vendez-nous votre business
            $table->string('dish_comparison'); // Si votre projet était un plat
            $table->text('mission'); // Mission principale
            $table->string('industry_sector'); // Secteur d’activité
            $table->text('success_factors'); // Ce qui fait du business une machine à succès
            $table->string('scalability_score'); // Échelle de duplicabilité (1 à 10)
            $table->string('current_or_target_customers'); // Nombre de clients actuels/espérés
            $table->string('annual_revenue'); // Chiffre d’affaires annuel
            $table->text('unicorn_magic'); // En quoi serait-elle magique si c'était une licorne
            $table->text('key_features'); // 3 fonctionnalités clés
            $table->string('requires_specific_skills'); // Compétences spécifiques requises ?
            $table->text('tools_in_place'); // Outils ou technologies en place
            $table->string('has_existing_team'); // Équipe existante ?
            $table->text('unique_selling_points'); // Ce qui rend le business unique pour un acheteur
            $table->string('selling_price'); // Prix de vente
            $table->text('purchase_includes'); // Ce que comprend l’achat
            $table->string('advertising_slogan'); // Slogan publicitaire
            $table->string('provides_training'); // Formation/conseils initial(e)
            $table->text('partners_and_suppliers'); // Partenaires, fournisseurs, collaborateurs
            $table->string('business_summary'); // Résumé en 3 mots
            $table->text('elon_pitch'); // Pitch pour convaincre Elon Musk
            $table->text('next_project'); // Prochain rêve entrepreneurial
            $table->string('files')->nullable();
            $table->string('status')->default('en attente');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('marketplace_business');
    }
};
