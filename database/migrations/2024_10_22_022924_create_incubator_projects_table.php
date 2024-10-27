<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('incubator_projects', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('project_name');
            $table->text('project_description');
            $table->string('project_stage');
            $table->string('project_mission');
            $table->string('project_movie');
            $table->text('origin_motivation');
            $table->text('passion_aspect');
            $table->text('strength');
            $table->text('obstacle');
            $table->text('objective');
            $table->text('time_to_profit');
            $table->text('strategy');
            $table->text('target_amount');
            $table->text('growth_vision');
            $table->text('why');
            $table->text('sector');
            $table->text('market_target');
            $table->text('unique_features');
            $table->text('growth_limitations');
            $table->text('market_analysis');
            $table->text('competitors');
            $table->string('clients');
            $table->text('market_strategy');
            $table->string('funds_raised');
            $table->string('initial_budget');
            $table->text('first_step_with_unlimited_funds');
            $table->text('growth_needs');
            $table->text('strategic_support');
            $table->string('co_management');
            $table->text('desired_connections');
            $table->text('impact');
            $table->text('core_values');
            $table->text('value_translation');
            $table->text('global_impact');
            $table->text('cartoon_character');
            $table->text('tv_synopsis');
            $table->text('documentary_title');
            $table->text('celebration_details');
            $table->text('client_slogan');
            $table->string('files')->nullable(); // Chemin du fichier téléversé pour le dernier bilan

            $table->string('status')->default('en attente');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('incubator_projects');
    }
};
