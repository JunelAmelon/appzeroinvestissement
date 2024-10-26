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
       Schema::create('marketplacebusiness', function (Blueprint $table) {
            
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('business_name'); // Nom du business
            $table->text('business_description'); // Description rapide du business
            $table->text('attraction_reason')->nullable(); // Ce qui a attiré l'utilisateur vers ce business
            $table->string('representative_animal')->nullable(); // Animal représentant le business
            $table->text('animal_reason')->nullable(); // Raison de l'animal choisi
            $table->unsignedTinyInteger('conviction_level')->nullable(); // Niveau de conviction (1-10)
            
            // Champs pour la deuxième série de questions
            $table->string('entrepreneurial_approach', 100)->nullable(); // Mots décrivant l'approche entrepreneuriale
            $table->text('success_factors')->nullable(); // Facteurs de réussite
            $table->boolean('has_financing_plan')->nullable(); // Si l'utilisateur a planifié le financement
            $table->text('financing_access_plan')->nullable(); // Méthode d'accès au financement si nécessaire

            // Champs pour la troisième série de questions
            $table->unsignedDecimal('max_budget', 10, 2)->nullable(); // Budget maximum pour l'achat du business
            $table->boolean('interested_in_zeroinvestment')->nullable(); // Intérêt pour le financement par ZeroInvestissement.com
            $table->text('first_action')->nullable(); // Première action après acquisition
            $table->text('marketing_strategy')->nullable(); // Stratégie pour faire connaître le business
            $table->text('main_goal_12_months')->nullable(); // Objectif principal dans les 12 prochains mois

            // Champs pour la quatrième série de questions
            $table->unsignedDecimal('initial_ad_budget', 10, 2)->nullable(); // Budget publicitaire initial prévu
            $table->text('boost_area')->nullable(); // Partie du business à booster immédiatement
            $table->boolean('needs_training')->nullable(); // Besoin de formation pour comprendre le secteur
            $table->string('preferred_training_mode', 100)->nullable(); // Mode de formation préféré
            $table->text('desired_skills')->nullable(); // Compétences spécifiques à développer
            $table->text('expected_follow_up')->nullable(); // Type de suivi attendu de ZeroInvestissement.com

            // Champs pour la cinquième série de questions
            $table->unsignedInteger('weekly_time_commitment')->nullable(); // Temps hebdomadaire prêt à consacrer
            $table->string('profitability_timeline', 100)->nullable(); // Temps pour rendre le business rentable
            $table->boolean('has_growth_plan')->nullable(); // Indication d'un plan de croissance
            $table->text('mentor_question')->nullable(); // Question prioritaire pour un mentor
            $table->text('superpower')->nullable(); // Superpouvoir du business et raison

            // Champs pour les dernières questions
            $table->string('book_title')->nullable(); // Titre d'un livre sur l'aventure entrepreneuriale
            $table->text('first_success_action')->nullable(); // Action après succès du business dans 5 ans
            $table->string('financial_report_path')->nullable(); // Chemin du fichier téléversé pour le dernier bilan

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
