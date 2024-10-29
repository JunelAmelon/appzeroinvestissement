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
        //
        Schema::create('marketplacebusinesses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->text('business_name'); // Nom du business
            $table->text('business_attraction');
            $table->string('animal_comparison'); // Comparaison avec un animal
            $table->text('conviction_level'); // Niveau de conviction (1 à 10)
            $table->text('enthusiasm_reason'); // Raison d'enthousiasme
            $table->text('entrepreneur_reason'); // Raison de l'entrepreneuriat
            $table->text('specific_motivation'); // Motivation spécifique
            $table->string('approach_keywords'); // Mots-clés de l’approche entrepreneuriale
            $table->text('success_factors'); // Facteurs de succès
            $table->text('financing_planned'); // Financement planifié
            $table->text('financing_method'); // Méthode de financement envisagée
            $table->text('max_budget'); // Budget maximum pour l'achat
            $table->text('interest_in_financing_option'); // Intérêt pour une option de financement
            $table->text('first_action'); // Première action prévue
            $table->text('marketing_strategy'); // Stratégie de marketing
            $table->text('main_objective'); // Objectif principal pour les 12 mois
            $table->text('initial_ad_budget'); // Budget publicitaire initial
            $table->text('business_boost_area'); // Zone de boost immédiate souhaitée
            $table->text('training_needed'); // Besoin de formation
            $table->string('preferred_training_method'); // Méthode de formation préférée
            $table->text('skills_to_develop'); // Compétences à développer
            $table->text('expected_support'); // Suivi attendu
            $table->text('weekly_hours'); // Temps hebdomadaire dédié
            $table->text('profit_timeline'); // Temps pour rendre le business rentable
            $table->text('growth_plan'); // Plan de croissance
            $table->text('mentor_questions'); // Questions pour un mentor
            $table->string('superpower'); // Superpouvoir du business
            $table->string('book_title'); // Titre de livre potentiel
            $table->text('five_year_action'); // Première action en cas de succès dans 5 ans
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
        //
    }
};
