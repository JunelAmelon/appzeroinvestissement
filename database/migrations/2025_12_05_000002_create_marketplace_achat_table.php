<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('marketplace_achat', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            
            // Section 1: Pourquoi avoir choisi ce Business
            $table->string('chosen_business');
            $table->text('business_description')->nullable();
            $table->string('attraction_reason');
            $table->string('business_animal')->nullable();
            $table->string('animal_reason')->nullable();
            $table->integer('conviction_score');
            $table->string('enthusiasm_reason');
            
            // Section 2: Motivation et Ambitions
            $table->string('entrepreneurship_reason');
            $table->string('business_motivation');
            $table->string('entrepreneurial_approach_3words')->nullable();
            $table->text('success_factors');
            
            // Section 3: Financement
            $table->string('financing_planned');
            $table->string('financing_access')->nullable();
            $table->string('max_budget');
            $table->string('zero_financing_interest');
            
            // Section 4: Stratégie et Gestion
            $table->string('first_action');
            $table->string('marketing_strategy');
            $table->text('main_objective')->nullable();
            $table->string('advertising_budget');
            $table->string('priority_boost');
            
            // Section 5: Formation et Support
            $table->string('training_needed');
            $table->string('preferred_training_method');
            $table->string('skills_to_develop');
            $table->string('expected_support');
            
            // Section 6: Engagement et Croissance
            $table->string('weekly_time_commitment');
            $table->string('profitability_timeline');
            $table->string('growth_plan');
            $table->text('mentor_question')->nullable();
            
            // Section 7: Fun
            $table->text('business_superpower')->nullable();
            $table->string('book_title')->nullable();
            $table->string('success_celebration')->nullable();
            
            $table->string('status')->default('en_attente');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('marketplace_achat');
    }
};
