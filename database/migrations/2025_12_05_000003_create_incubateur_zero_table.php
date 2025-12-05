<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('incubateur_zero', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            
            // Section 1: Votre Projet
            $table->string('project_name');
            $table->string('name_reason')->nullable();
            $table->text('project_description');
            $table->string('project_stage');
            $table->string('movie_title')->nullable();
            $table->text('movie_reason')->nullable();
            $table->text('main_mission');
            
            // Section 2: Origine et Motivation
            $table->text('idea_origin');
            $table->string('passion_reason');
            $table->text('project_strength');
            $table->text('biggest_obstacle')->nullable();
            
            // Section 3: L'Avenir
            $table->string('main_objective_5years');
            $table->string('profitability_timeline');
            $table->text('strategy');
            $table->string('funding_target')->nullable();
            $table->string('growth_vision_12months');
            
            // Section 4: Potentiel et Scalabilité
            $table->text('scalability_reason');
            $table->string('project_sector');
            $table->text('sector_innovation')->nullable();
            $table->text('target_market');
            $table->text('unique_characteristics');
            $table->text('growth_limitations')->nullable();
            
            // Section 5: Analyse du Marché
            $table->string('market_analysis_done');
            $table->text('main_competitors')->nullable();
            $table->string('has_customers');
            $table->string('market_conquest_strategy');
            
            // Section 6: Financement et Croissance
            $table->string('funds_raised');
            $table->string('initial_budget');
            $table->text('unlimited_funding_use')->nullable();
            $table->string('growth_needs');
            
            // Section 7: Soutien Stratégique
            $table->string('strategic_support_needed');
            $table->string('co_management_open');
            $table->string('desired_connections');
            
            // Section 8: Impact et Valeurs
            $table->text('positive_impact');
            $table->string('core_values');
            $table->text('values_in_practice')->nullable();
            $table->text('global_impact_vision')->nullable();
            
            // Section 9: Fun
            $table->string('cartoon_character')->nullable();
            $table->text('tv_series_synopsis')->nullable();
            $table->string('netflix_doc_title')->nullable();
            $table->text('success_party')->nullable();
            $table->string('project_slogan')->nullable();
            
            $table->string('status')->default('en_attente');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('incubateur_zero');
    }
};
