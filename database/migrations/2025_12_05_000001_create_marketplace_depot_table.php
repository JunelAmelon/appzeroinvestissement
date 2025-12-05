<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('marketplace_depot', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            
            // Section 1: L'Essence de Votre Business
            $table->string('business_name');
            $table->string('name_reason')->nullable();
            $table->text('elevator_pitch');
            $table->string('business_dish')->nullable();
            $table->string('dish_reason')->nullable();
            $table->string('business_mission');
            $table->string('activity_sector');
            $table->text('sector_choice_reason')->nullable();
            
            // Section 2: Potentiel et Scalabilité
            $table->text('success_factors');
            $table->integer('scalability_score');
            $table->string('current_customers');
            $table->string('annual_revenue');
            $table->text('unique_characteristic')->nullable();
            
            // Section 3: Opérations et Technique
            $table->text('key_features');
            $table->string('required_skills');
            $table->string('tools_in_place');
            $table->string('team_status');
            
            // Section 4: Proposition de Valeur
            $table->text('unique_value');
            $table->string('selling_price');
            $table->text('included_in_purchase');
            $table->string('tv_slogan')->nullable();
            
            // Section 5: Support et Suivi
            $table->string('buyer_support');
            $table->string('partners_available');
            
            // Section 6: Fun
            $table->string('business_in_3_words')->nullable();
            $table->text('elon_musk_pitch')->nullable();
            $table->text('next_project')->nullable();
            
            $table->string('status')->default('en_attente');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('marketplace_depot');
    }
};
